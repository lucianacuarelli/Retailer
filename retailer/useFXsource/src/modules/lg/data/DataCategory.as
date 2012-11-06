package modules.lg.data
{
	import devdoo.fx.UseDAO;
	import devdoo.fx.UseDebug;
	import devdoo.fx.UseFX;
	import devdoo.register.model.UseRegisterGroups;
	
	import modules.teste.UseCategory;
	
	import mx.controls.Alert;
	
	public class DataCategory
	{
		//------------------------------------------------------------------
		//
		//  Attributes
		//
		//------------------------------------------------------------------
		//----------------------------------
		//  useFX
		//----------------------------------
		/**
		 *  Instância da classe de gerenciamento de módulo.  
		 */  
		public var useFX:UseFX;
		
		//------------------------------------------------------------------
		//
		//  Configurations
		//
		//------------------------------------------------------------------
		//------------------------------------------------------------------
		//
		//  Table Models / Collections
		//
		//------------------------------------------------------------------
		//Tabelas
		public var useCategory:UseCategory;
		//------------------------------------------------------------------
		//
		//  Methods
		//
		//------------------------------------------------------------------
		//----------------------------------
		//  DataCategory
		//----------------------------------
		/**
		 *  Construtor da classe.  
		 */  
		public function DataCategory()
		{
			//Recupera a instância da classe de gerenciamento da módulo
			useFX = UseFX.start();
			
			useCategory = new UseCategory();
			
		}
		//----------------------------------
		//  addEditCategory
		//----------------------------------
		/**
		 *  Adiciona nova categoria na base de dados
		 * 
		 *  @return void  
		 */	
		public function addEditCategory(isEdit:Boolean, callBack:Function):void
		{
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.
			useFX.adapter('SAVE_UPDATE').adapterMaster(useCategory);
			
			//Verfica se o processo está em modo de edição/inclusão 
			if(isEdit){
				//Cria conexão com servidor para consulta
				useFX.checkItemExist('SAVE_UPDATE', useCategory)
					.where("USE_CATEGORY.title=?", useCategory.title)
					.where("USE_CATEGORY.id != ?", useCategory.id)
					.connect("Você não pode cadastrar a categoria '"+useCategory.title+"', esta categoria já existe na base de dados.", callBack);
			}else{
				//Cria conexão com servidor para consulta
				useFX.checkItemExist('SAVE_UPDATE', useCategory)
					.where("USE_CATEGORY.title=?", useCategory.title)
					.where("USE_CATEGORY.parent_id IS NULL")
					.connect("Você não pode cadastrar a categoria '"+useCategory.title+"', esta categoria já existe na base de dados.", callBack);
			}
		}
		
		//----------------------------------
		//  addEditSubCategory
		//----------------------------------
		/**
		 *  Adiciona nova categoria na base de dados
		 * 
		 *  @return void  
		 */	
		public function addEditSubCategory(isEdit:Boolean, categoryId:String, callBack:Function):void
		{
			//Define a id da categoria selecionada
			useCategory.parent_id = categoryId;
			
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.
			useFX.adapter('SAVE_UPDATE').adapterMaster(useCategory);
			
			//Verfica se o processo está em modo de edição/inclusão 
			if(isEdit){
				//Cria conexão com servidor para consulta
				useFX.checkItemExist('SAVE_UPDATE', useCategory)
					.where("USE_CATEGORY.title=?", useCategory.title)
					.where("USE_CATEGORY.id != ?", useCategory.id)
					.connect("Você não pode cadastrar a sub-categoria '"+useCategory.title+"', esta sub-categoria já existe na base de dados.", callBack);
			}else{
				//Cria conexão com servidor para consulta
				useFX.checkItemExist('SAVE_UPDATE', useCategory)
					.where("USE_CATEGORY.title=?", useCategory.title)
					.where("USE_CATEGORY.parent_id =?", useCategory.parent_id)
					.connect("Você não pode cadastrar a sub-categoria '"+useCategory.title+"', esta sub-categoria já existe na base de dados.", callBack);
			}
		}
		
		//----------------------------------
		//  populateCategory
		//----------------------------------
		/**
		 *  Consulta a base de dados e recupera a lista de categoria.
		 * 
		 *  @return void  
		 */	
		public function populateCategory(callBack:Function):void
		{
			//Cria adaptador DAO e configura as propriedades sql
			var daoLgCategory:UseDAO = UseDAO.create(useCategory);
			daoLgCategory.fields(['*'])
				.where("USE_CATEGORY.parent_id IS NULL");
			
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.				
			useFX.adapter('POPULATE_CATEGORY')
				.adapterSelect(daoLgCategory)
				.connect(callBack);
		}
		
		//----------------------------------
		//  populateSubCategory
		//----------------------------------
		/**
		 *  Consulta a base de dados e recupera a lista de subacategoria.
		 * 
		 *  @return void  
		 */	
		public function populateSubCategory(categoryId:String, callBack:Function):void
		{
			//Cria adaptador DAO e configura as propriedades sql
			var daoLgCategory:UseDAO = UseDAO.create(useCategory);
			daoLgCategory.fields(['*'])
				.where("USE_CATEGORY.parent_id =?", categoryId);
			
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.				
			useFX.adapter('POPULATE_SUB_CATEGORY')
				.adapterSelect(daoLgCategory)
				.connect(callBack);
		}
		
		//----------------------------------
		//  removeCategory
		//---------------------------------- 	
		private var _selectedItem:Object;
		private var _isCategory:Boolean;
		private var _callBack:Function;
		/**
		 *  Realiza consulta para buscar por subcategorias.
		 *  @return void 
		 */	
		public function removeCategory(selectedItem:Object, isCategory:Boolean, callBack:Function):void
		{
			this._selectedItem = selectedItem
			this._isCategory = isCategory;
			this._callBack = callBack;
			
			if(isCategory)
				populateSubCategory(selectedItem.id,removeCategoryResult);
			else
				removeCategoryResult(null);
		}
		
		//----------------------------------
		//  removeCategory
		//---------------------------------- 
		/**
		 *  Recebe objeto de resultados da consulta sql.
		 *  @return void 
		 */	
		private function removeCategoryResult(useResult:*):void
		{
			var message:String;
			if(useResult){
				if(!useResult.hasOwnProperty('total')){
					if(this._isCategory)
						message = "Tem certeza de que deseja remover a categoria '"+this._selectedItem.title+"' completamente da base de dados?";
					else
						message = "Tem certeza de que deseja remover a subcategoria '"+this._selectedItem.title+"' completamente da base de dados?";
					
					useCategory.id = this._selectedItem.id;
					
					//Abre popup para inclusão de novo registro	 	 
					useFX.removePopup(message, "Confirmar exclusão da categoria", this._callBack)
						.adapterRemove(useCategory,true,"properties");
				}else{
					Alert.show('Essa Categoria possui SubCategorias. Para excluí-la é necessário remover suas subCategorias primeiro')
				}
			}else{
				if(this._isCategory)
					message = "Tem certeza de que deseja remover a categoria '"+this._selectedItem.title+"' completamente da base de dados?";
				else
					message = "Tem certeza de que deseja remover a subcategoria '"+this._selectedItem.title+"' completamente da base de dados?";
				
				useCategory.id = this._selectedItem.id;
				
				//Abre popup para inclusão de novo registro	 	 
				useFX.removePopup(message, "Confirmar exclusão da categoria", this._callBack)
					.adapterRemove(useCategory,true,"properties");
			}
		}
	}
}