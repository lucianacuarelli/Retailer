package modules.lg.data
{
	import devdoo.fx.UseDAO;
	import devdoo.fx.UseDataGrid;
	import devdoo.fx.UseDate;
	import devdoo.fx.UseFX;
	import devdoo.fx.UseUtil;
	import devdoo.register.model.UseRegister;
	import devdoo.register.model.UseRegisterCorporate;
	import devdoo.register.model.UseRegisterGroups;
	import devdoo.register.model.UseRegisterHasRegisterGroups;
	import devdoo.register.model.UseRegisterPersonal;
	import devdoo.ui.UiPaginator;
	
	import modules.lg.layout.itemRenderer.IrProductsGroups;
	import modules.lg.layout.itemRenderer.IrProductsStatus;
	import modules.lg.model.UseLgCampaign;
	import modules.lg.model.UseLgProducts;
	import modules.lg.model.UseLgProductsRetailers;
	import modules.lg.model.UseLgRegisterTrademarketingHasRegisterCollaborators;
	import modules.lg.model.UseLgResources;
	import modules.lg.model.UseLgResourcesRetailers;
	
	import mx.collections.ArrayCollection;
	import mx.collections.IList;
	import mx.core.UIComponent;
	
	import spark.components.DataGrid;
	
	public class DataProducts extends UIComponent
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
		
		//----------------------------------
		//  useDgRegister
		//----------------------------------
		/**
		 *  Gerência data grid.  
		 */  
		public var useDgProducts:UseDataGrid;
		
		//----------------------------------
		//  uiPaginator
		//----------------------------------
		/**
		 *  Componente de paginação.  
		 */  
		private var _uiPaginator:UiPaginator;
		
		//------------------------------------------------------------------
		//
		//  Table Models / Collections
		//
		//------------------------------------------------------------------			
		//Tabelas
		public var useLgProducts:UseLgProducts;
		public var useRegisterGroups:UseRegisterGroups;
		public var useLgCampaign:UseLgCampaign;
		public var useLgResources:UseLgResources;
		public var useRegisterCorporate:UseRegisterCorporate;
		public var useLgProductsRetailers:UseLgProductsRetailers;
		public var useLgResourcesRetailers:UseLgResourcesRetailers;
		public var useRegisterHasRegisterGroups:UseRegisterHasRegisterGroups;
		public var useRegisterPersonal:UseRegisterPersonal;
		public var useRegister:UseRegister;
		public var useLgRegisterTrademarketingHasRegisterCollaborators:UseLgRegisterTrademarketingHasRegisterCollaborators
		
		//Coleções
		public var acLgProducts:ArrayCollection;
		
		//------------------------------------------------------------------
		//
		//  Methods
		//
		//------------------------------------------------------------------			
		//----------------------------------
		//  DataProducts
		//----------------------------------
		/**
		 *  Construtor da classe.  
		 */  		
		public function DataProducts()
		{
			//Recupera a instância da classe de gerenciamento da módulo
			useFX = UseFX.start();
			
			//Tabelas
			useLgProducts 							= new UseLgProducts();
			useRegisterGroups 						= new UseRegisterGroups();
			useLgCampaign 							= new UseLgCampaign();
			useLgResources 							= new UseLgResources();
			useRegister			 					= new UseRegister();
			useRegisterPersonal 					= new UseRegisterPersonal();
			useRegisterCorporate 					= new UseRegisterCorporate();
			useLgProductsRetailers 					= new UseLgProductsRetailers();
			useLgResourcesRetailers 				= new UseLgResourcesRetailers();
			useRegisterHasRegisterGroups 			= new UseRegisterHasRegisterGroups();
			
			//Cria coleções
			acLgProducts								= new ArrayCollection();
		}
		
		//----------------------------------
		//  useDataGrid
		//----------------------------------
		/**
		 *  Cria colunas do datagrid e configura o data grid principal
		 * 
		 *  @return void
		 */
		public function dataGrid(dataGrid:DataGrid, accessControl:Function, uiPaginator:UiPaginator):DataProducts
		{
			this._uiPaginator = uiPaginator;
			
			//Cria gerenciador de datagrid
			useDgProducts = useFX.dataGrid(dataGrid, acLgProducts);
			useDgProducts.addEventListener(UseDataGrid.ACCESS_CONTROL, accessControl);
			
			useDgProducts.addGridColumn('id')
				.dataField('USE_LG_PRODUCTS_id')
				.sortable(false)
				.width(30);
			
			useDgProducts.addGridColumn('Produto')
				.dataField('USE_LG_PRODUCTS_title');
			
			useDgProducts.addGridColumn('Grupos')
				.dataField('USE_LG_PRODUCTS_id')
				.width(55)
				.itemRenderer(IrProductsGroups);
			
			useDgProducts.addGridColumn('Status')
				.dataField('USE_LG_PRODUCTS_id')
				.width(130)
				.itemRenderer(IrProductsStatus);
			
			//Cria colunas no datagrid principal
			useDgProducts.createColumns();
			
			return this;
		}	
		
		//----------------------------------
		//  filterProduct
		//----------------------------------
		/**
		 *  Cria um adaptador e adiciona os objetos DAO nele e
		 *  conecta ao servidor para interagir com a base de dados.
		 *  Realiza consulta para buscar pelos produtos de acordo com a opção 
		 *  escolhida no filtro
		 * 
		 *  @return void  
		 */	
		public function filterProduct(filter:String, productType:String, selectedGroups:String,  uiPaginator:UiPaginator, group:String, pattern:String, order:String = 'ASC'):void
		{
			this._uiPaginator = uiPaginator;
			
			var date:Date = new Date();
			var dateNow:String = date.fullYear +"-"+ UseUtil.zeroPad((date.month + 1), 2) +"-"+ date.date;
			
			var useRegisterGroupsSubcategory:UseRegisterGroups = new UseRegisterGroups();
			useRegisterGroupsSubcategory.classNameModel = "useRegisterGroupsSubcategory";
			useRegisterGroupsSubcategory.alias = "USE_REGISTER_GROUPS_SUBCATEGORY";
			
			/*useLgProducts.exprMYSQL('highlight_date_out',"DATE_FORMAT(?,'%d/%m/%Y')",null,true);
			useLgProducts.exprMYSQL('status_new_date_out',"DATE_FORMAT(?,'%d/%m/%Y')",null,true);
			useLgProducts.exprMYSQL('date_in',"DATE_FORMAT(?,'%d/%m/%Y')",null,true);
			useLgProducts.exprMYSQL('date_out',"DATE_FORMAT(?,'%d/%m/%Y')",null,true);*/
			
			//Cria adaptador DAO e configura as propriedades sql
			var daoLgProducts:UseDAO = UseDAO.create(useLgProducts);
			daoLgProducts.fields(['*'],true)
				.join(useRegisterGroups, "USE_LG_PRODUCTS.category_id = USE_REGISTER_GROUPS.id", useRegisterGroups.fields(['id', 'title'], true))
				.join(useRegisterGroupsSubcategory, "USE_LG_PRODUCTS.subcategory_id = USE_REGISTER_GROUPS_SUBCATEGORY.id", useRegisterGroupsSubcategory.fields(['id', 'title'], true))
				.where("USE_LG_PRODUCTS.product_type = ?", productType)
				.order("USE_LG_PRODUCTS","title",order);
			if(group && group != 'Todos')
				daoLgProducts.where("USE_REGISTER_GROUPS.title =?", group)
			if(pattern)
				daoLgProducts.where("USE_LG_PRODUCTS.title LIKE ?", "%"+ pattern +"%")
			
			daoLgProducts.limitPage(this._uiPaginator.pageNumber, this._uiPaginator.pageSize)
			
			//Verifica se tem algum grupo selecionado
			if(selectedGroups){
				daoLgProducts.where("USE_LG_PRODUCTS.category_id = ?", selectedGroups);
			}
			
			//Verifica qual opção de filto foi escolhida e configura a condição
			switch(filter)
			{
				//Filtra por destaque
				case "HIG":
				{
					daoLgProducts.where("USE_LG_PRODUCTS.highlight_date_out > ?", dateNow);
					break;
				}
					
					//Filtra por novo
				case "NEW":
				{
					daoLgProducts.where("USE_LG_PRODUCTS.status_new_date_out > ?", dateNow);
					break;
				}
					
					//Filtar por ativo
				case "ACT":
				{
					daoLgProducts.where("USE_LG_PRODUCTS.is_active = ?", "1");
					break;
				}
					
					//Filtar por ativo
				case "NAC":
				{
					daoLgProducts.where("USE_LG_PRODUCTS.is_active = ?", "0");
					break;
				}
			}	
			
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.				
			useFX.adapter('FILTER_DATA_GRID')
				.adapterSelect(daoLgProducts)
				.connect(populateResultProduct);
		}
		
		//----------------------------------
		//  filterResource
		//----------------------------------
		/**
		 *  Cria um adaptador e adiciona os objetos DAO nele e
		 *  conecta ao servidor para interagir com a base de dados.
		 *  Realiza consulta para buscar pelos recursos de acordo com a opção 
		 *  escolhida no filtro
		 * 
		 *  @return void  
		 */	
		public function filterResource(filter:String, sourceId:String, resourceType:String, callBack:Function):void
		{
			var date:Date = new Date();
			var dateNow:String = date.fullYear +"-"+ UseUtil.zeroPad((date.month + 1), 2) +"-"+ date.date;
			
			useLgResources = new UseLgResources();
			
			//Cria adaptador DAO e configura as propriedades sql
			var daoLgResources:UseDAO = UseDAO.create(useLgResources);
			daoLgResources.fields(['*'],true)
				.where("USE_LG_RESOURCES.source_id = ?", sourceId)
				.where("USE_LG_RESOURCES.resource_type = ?", resourceType)
			
			//Verifica qual opção de filto foi escolhida e configura a condição
			switch(filter)
			{
				//Filtra por destaque
				case "HIG":
				{
					daoLgResources.where("USE_LG_RESOURCES.highlight_date_out > ?", dateNow);
					break;
				}
					
					//Filtra por novo
				case "NEW":
				{
					daoLgResources.where("USE_LG_RESOURCES.status_new_date_out > ?", dateNow);
					break;
				}
					
					//Filtar por ativo
				case "ACT":
				{
					daoLgResources.where("USE_LG_RESOURCES.is_active = ?", "1");
					break;
				}
					
					//Filtar por ativo
				case "NAC":
				{
					daoLgResources.where("USE_LG_RESOURCES.is_active = ?", "0");
					break;
				}
			}	
			
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.				
			useFX.adapter('FILTER_RESOURCES_DATA_GRID')
				.adapterSelect(daoLgResources)
				.connect(callBack);
		}
		
		//----------------------------------
		//  populateProduct
		//----------------------------------
		/**
		 *  Cria um adaptador e adiciona os objetos DAO nele e
		 *  conecta ao servidor para interagir com a base de dados.
		 * 
		 *  @return void  
		 */	
		public function populateProduct(productType:String, pageNumber:int, pageSize:int, group:String = null, pattern:String = null, order:String = 'ASC'):DataProducts
		{
			var useRegisterGroupsSubcategory:UseRegisterGroups = new UseRegisterGroups();
			useRegisterGroupsSubcategory.classNameModel = "useRegisterGroupsSubcategory";
			useRegisterGroupsSubcategory.alias = "USE_REGISTER_GROUPS_SUBCATEGORY";
			
			//Cria adaptador DAO e configura as propriedades sql
			var daoLgProducts:UseDAO = UseDAO.create(useLgProducts);
			daoLgProducts.fields(['*'],true)
				.join(useRegisterGroups, "USE_LG_PRODUCTS.category_id = USE_REGISTER_GROUPS.id", useRegisterGroups.fields(['id', 'title'], true))
				.join(useRegisterGroupsSubcategory, "USE_LG_PRODUCTS.subcategory_id = USE_REGISTER_GROUPS_SUBCATEGORY.id", useRegisterGroupsSubcategory.fields(['id', 'title'], true))
				.where("USE_LG_PRODUCTS.product_type = ?", productType)
				.order("USE_LG_PRODUCTS","title",order);
			
			if(group && group != 'Todos' )
				daoLgProducts.where("USE_REGISTER_GROUPS.title =?", group)
			if(pattern)
				daoLgProducts.where("USE_LG_PRODUCTS.title LIKE ?", "%"+ pattern +"%")
			
			daoLgProducts.limitPage(this._uiPaginator.pageNumber, this._uiPaginator.pageSize);
			
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.				
			useFX.adapter('POPULATE_DATA_GRID')
				.adapterSelect(daoLgProducts)
				.connect(populateResultProduct);
			
			return this;
		}
		
		//----------------------------------
		//  openPopupProductsLink
		//----------------------------------
		/**
		 *  Cria um adaptador e adiciona os objetos DAO nele e
		 *  conecta ao servidor para interagir com a base de dados.
		 * 
		 *  @return void  
		 */	
		public function openPopupProductsLink(callBack:Function):void
		{
			useLgProducts.exprMYSQL('date_in',"DATE_FORMAT(?,'%d/%m/%Y')",'show_date_in');
			useLgProducts.exprMYSQL('date_out',"DATE_FORMAT(?,'%d/%m/%Y')",'show_date_out');			
			
			//Cria adaptador DAO e configura as propriedades sql
			var daoLgProducts:UseDAO = UseDAO.create(useLgProducts);
			daoLgProducts.fields(['*'])
				.where("USE_LG_PRODUCTS.product_type = ?", "PDT")
				.where("USE_LG_PRODUCTS.is_active = ?", "1");
			
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.				
			useFX.adapter('POPULATE_PRODUCTS_LINK')
				.adapterSelect(daoLgProducts)
				.connect(callBack);
		}
		
		//----------------------------------
		//  openPopupCampaignLink
		//----------------------------------
		/**
		 *  Cria um adaptador e adiciona os objetos DAO nele e
		 *  conecta ao servidor para interagir com a base de dados.
		 * 
		 *  @return void  
		 */	
		public function openPopupCampaignLink(callBack:Function):void
		{
			useLgProducts.exprMYSQL('date_in',"DATE_FORMAT(?,'%d/%m/%Y')",'show_date_in');
			useLgProducts.exprMYSQL('date_out',"DATE_FORMAT(?,'%d/%m/%Y')",'show_date_out');	
			
			//Cria adaptador DAO e configura as propriedades sql
			var daoLgProducts:UseDAO = UseDAO.create(useLgProducts);
			daoLgProducts.fields(['*'])
				.where("USE_LG_PRODUCTS.product_type = ?", "CPN")
				.where("USE_LG_PRODUCTS.is_active = ?", "1");
			
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.				
			useFX.adapter('POPULATE_CAMPAIGN_LINK')
				.adapterSelect(daoLgProducts)
				.connect(callBack);
		}
		
		//----------------------------------
		//  countResouces
		//----------------------------------
		/**
		 *  Realiza consulta na base de dados para contar os resursos 
		 *	relacionado ao item selecionado
		 * 
		 *  @return void  
		 */	
		public function countResouces(productId:String, callBack:Function):DataProducts
		{
			useLgResources = new UseLgResources();
			
			useLgResources.exprMYSQL('id','COUNT("resource_type")','total',false);
			
			//Cria adaptador DAO e configura as propriedades sql
			var daoLgResources:UseDAO = UseDAO.create(useLgResources);
			daoLgResources.fields(['id', 'resource_type'])
				.where("USE_LG_RESOURCES.source_id =?", productId)
				.group('USE_LG_RESOURCES', 'resource_type');
			
			
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.
			useFX.adapter('COUNT_RESOURCES')
				.adapterSelect(daoLgResources)
				.connect(callBack);
			
			return this;
		}
		
		//----------------------------------
		//  populateResultProduct
		//----------------------------------
		/**
		 *  Processa o resultado obtido da consulta na base de dados.
		 *  Popula o objeto de coleção,
		 *  Popula o data grid principal,
		 *  Fecha tela de boas vindas do módulo.
		 * 
		 *  @return void
		 */			
		private function populateResultProduct(useResult:*):void
		{
			//Atualiza o paginador
			this._uiPaginator.total(useResult.total);
			
			//Popula o objeto de coleção do tipo de modelo de tabela
			acLgProducts = useDgProducts.populateResult(useResult.useLgProducts);
		}
		
		//----------------------------------
		//  editProducts
		//----------------------------------
		/**
		 *  Cria um adaptador de conexão e realiza consulta na base de dados
		 *  para recuperar o item selecionado para edição.
		 * 
		 *  @return void  
		 */	
		public function editProducts(sourceId:String):DataProducts
		{
			//useLgProducts.exprMYSQL('highlight_date_out',"DATE_FORMAT(?,'%d/%m/%Y')",null,true);
			//useLgProducts.exprMYSQL('status_new_date_out',"DATE_FORMAT(?,'%d/%m/%Y')",null,true);
			//useLgProducts.exprMYSQL('date_in',"DATE_FORMAT(?,'%d/%m/%Y')",null,true);
			//useLgProducts.exprMYSQL('date_out',"DATE_FORMAT(?,'%d/%m/%Y')",null,true);
			
			//Cria adaptador DAO e configura as propriedades sql
			var daoLgProducts:UseDAO = UseDAO.create(useLgProducts);
			daoLgProducts.fields(['*'],true)
				.where("USE_LG_PRODUCTS.id =?", sourceId)
				.fetch('Row');
			
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.				
			useFX.adapter('EDIT_POPUP')
				.adapterSelect(daoLgProducts);
			
			return this;
		}		
		
		//----------------------------------
		//  popupResult
		//----------------------------------
		/**
		 *  Processa o resultado obtidos da interação com base de dados.
		 *  Atualiza data grid principal.
		 * 
		 *  @param useResult Configurações obtidas da consulta na base de dados
		 *  @return void 
		 */			
		public function popupResult(useResult:*):void
		{
			useDgProducts.popupResult(useResult);
		}
		
		//------------------------------------------------------------------
		//
		//  Categorys
		//
		//------------------------------------------------------------------			
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
			useFX.adapter('SAVE_UPDATE').adapterMaster(useRegisterGroups);
			
			//Verfica se o processo está em modo de edição/inclusão 
			if(isEdit)
			{
				//Cria conexão com servidor para consulta
				useFX.checkItemExist('SAVE_UPDATE', useRegisterGroups)
					.where("USE_REGISTER_GROUPS.title=?", useRegisterGroups.title)
					.where("USE_REGISTER_GROUPS.id != ?", useRegisterGroups.id)
					.connect("Você não pode cadastrar a categoria '"+useRegisterGroups.title+"', esta categoria já existe na base de dados.", callBack);
			}
			else{
				//Cria conexão com servidor para consulta
				useFX.checkItemExist('SAVE_UPDATE', useRegisterGroups)
					.where("USE_REGISTER_GROUPS.title=?", useRegisterGroups.title)
					.where("USE_REGISTER_GROUPS.parent_id IS NULL")
					.connect("Você não pode cadastrar a categoria '"+useRegisterGroups.title+"', esta categoria já existe na base de dados.", callBack);
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
		public function addEditSubCategory(isEdit:Boolean, callBack:Function):void
		{
			//Recupera a id da categoria selecionada
			var selectedCategoryId:String = useFX.session('selectedCategoryId');
			useRegisterGroups.parent_id = selectedCategoryId;
			
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.
			useFX.adapter('SAVE_UPDATE').adapterMaster(useRegisterGroups);
			
			//Verfica se o processo está em modo de edição/inclusão 
			if(isEdit)
			{
				//Cria conexão com servidor para consulta
				useFX.checkItemExist('SAVE_UPDATE', useRegisterGroups)
					.where("USE_REGISTER_GROUPS.title=?", useRegisterGroups.title)
					.where("USE_REGISTER_GROUPS.id != ?", useRegisterGroups.id)
					.connect("Você não pode cadastrar a sub-categoria '"+useRegisterGroups.title+"', esta sub-categoria já existe na base de dados.", callBack);
			}
			else{
				//Cria conexão com servidor para consulta
				useFX.checkItemExist('SAVE_UPDATE', useRegisterGroups)
					.where("USE_REGISTER_GROUPS.title=?", useRegisterGroups.title)
					.where("USE_REGISTER_GROUPS.parent_id =?", useRegisterGroups.parent_id)
					.connect("Você não pode cadastrar a sub-categoria '"+useRegisterGroups.title+"', esta sub-categoria já existe na base de dados.", callBack);
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
			var daoLgCategory:UseDAO = UseDAO.create(useRegisterGroups);
			daoLgCategory.fields(['*'])
				.where("USE_REGISTER_GROUPS.parent_id =?", "0")
				.where("USE_REGISTER_GROUPS.register_group_area_id =?", "1");
			
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
			var daoLgCategory:UseDAO = UseDAO.create(useRegisterGroups);
			daoLgCategory.fields(['*'])
				.where("USE_REGISTER_GROUPS.parent_id =?", categoryId);
			
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.				
			useFX.adapter('POPULATE_SUB_CATEGORY')
				.adapterSelect(daoLgCategory)
				.connect(callBack);
		}		
		
		//------------------------------------------------------------------
		//
		//  Products
		//
		//------------------------------------------------------------------			
		//----------------------------------
		//  saveProducts
		//----------------------------------
		/**
		 *  Consulta a base de dados para verificar se item já existe.
		 * 
		 *  Verfica se o processo está em modo de edição/inclusão,
		 *  Cria conexão com servidor para consulta.
		 * 
		 *  @return void
		 */
		public function saveProducts(callBack:Function):void
		{
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.
			useFX.adapter('SAVE_UPDATE')
				.adapterMaster(useLgProducts, true, "Produtos e recursos")
				.connect(callBack);
		}
		
		//------------------------------------------------------------------
		//
		//  Upload
		//
		//------------------------------------------------------------------			
		//----------------------------------
		//  saveUploadFile
		//----------------------------------
		/**
		 *  Porcessa dados resultados da operação de upload de imagens
		     *  Salva na base de dados as informações referente a cada item enviado.
		 * 
		 *  @return void
		 */
		public function saveUploadFile(useResult:*, resourceType:String, callBack:Function):void
		{
			var acFiles:ArrayCollection = new ArrayCollection();
			var useDate:UseDate = useFX.date();   	
			
			for each (var item:Object in useResult.source) 
			{
				//Prepara modelo de tabela
				useLgResources = new UseLgResources();
				useLgResources.source_id = item.sourceId;
				useLgResources.folderpath = item.folderPath;
				useLgResources.filename = item.fullName;
				useLgResources.title = item.fullName;
				useLgResources.filesize = item.size;
				useLgResources.width = item.width;
				useLgResources.height = item.height;
				useLgResources.format = String(item.format).substr(1);
				useLgResources.is_active = 0;
				useLgResources.resource_type = resourceType;
				//Data de início de publicação
				useLgResources.date_in = useDate.format('U');
				//Data de término de publicação
				useDate.date.fullYear += 2;
				useLgResources.date_out = useDate.format('U');
				//Data do período de novidade
				useDate = useFX.date();
				useDate.date.date += 30;
				useLgResources.status_new_date_out = useDate.format('U');
				
				//Adiciona modelo de tabela na lista de tabelas
				acFiles.addItem(useLgResources);
			}
			
			   
			//Cria adapatdor para conectar com a base de dados e salvar registros
			useFX.adapter('SAVE_FILE')
				     .adapterMaster(acFiles)
				     .connect(callBack);
		}
		
		//------------------------------------------------------------------
		//
		//  Resources
		//
		//------------------------------------------------------------------			
		//----------------------------------
		//  populateResources
		//----------------------------------
		/**
		 *  Realiza consulta para buscar pelos recursos do item selecionado.
		 * 
		 *  @return void
		 */
		public function populateResources(sourceId:String, resourceType:String, callBack:Function):void
		{
			useLgResources = new UseLgResources();
			
			//Cria adaptador DAO e configura as propriedades sql
			var daoLgResources:UseDAO = UseDAO.create(useLgResources);
			daoLgResources.fields(['*'],true)
				.where("USE_LG_RESOURCES.source_id = ?", sourceId)
				.where("USE_LG_RESOURCES.resource_type = ?", resourceType)
				.order("USE_LG_RESOURCES", "order_position", "ASC");
			
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.				
			useFX.adapter('POPULATE_RESOURCES')
				.adapterSelect(daoLgResources)
				.connect(callBack);
			
		}
		
		//----------------------------------
		//  resoucesOrder
		//----------------------------------
		/**
		 *  Atualiza a ordenação de recursos na base de dados
		 * 
		 *  @param selectedResources Recurso selecionado
		 *  @return void 
		 */
		public function resoucesOrder(selectedResources:IList, callBack:Function):void
		{
			var acResources:ArrayCollection = new ArrayCollection();
			
			for (var i:int = 0; i < selectedResources.length; i++) 
			{
				var useLgResources:UseLgResources = new UseLgResources();
				useLgResources.id = selectedResources[i].USE_LG_RESOURCES_id;
				useLgResources.order_position = i;
				acResources.addItem(useLgResources);
			}
			
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.				
			useFX.adapter('RESOURCES_ORDER')
				.adapterMaster(acResources)
				.connect(callBack);			 
			
		}
		
		//----------------------------------
		//  editResources
		//----------------------------------
		/**
		 *  Cria um adaptador de conexão e realiza consulta na base de dados
		 *  para recuperar o item selecionado para edição.
		 * 
		 *  @return void  
		 */	
		public function editResources(resourcesId:String):DataProducts
		{
			//Cria adaptador DAO e configura as propriedades sql
			var daoLgResources:UseDAO = UseDAO.create(useLgResources);
			daoLgResources.fields(['*'],true)
				.where("USE_LG_RESOURCES.id = ?", resourcesId)
				.fetch('Row');
			
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.				
			useFX.adapter('EDIT_POPUP_RESOURCES')
				.adapterSelect(daoLgResources);
			
			return this;
		}
		
		//----------------------------------
		//  saveResources
		//----------------------------------
		/**
		 *  Consulta a base de dados para verificar se item já existe.
		 * 
		 *  Verfica se o processo está em modo de edição/inclusão,
		 *  Cria conexão com servidor para consulta.
		 * 
		 *  @return void
		 */
		public function saveResources(callBack:Function):void
		{
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.
			useFX.adapter('SAVE_UPDATE_RESOURCES')
				.adapterMaster(useLgResources, true, 'Conteúdo');
			
			//Verfica se o processo está em modo de edição/inclusão 
			if(useFX.isEdit && !useFX.isCopy){
				useFX.checkItemExist('SAVE_UPDATE_RESOURCES', useLgResources)
					.where("USE_LG_RESOURCES.title=?", useLgResources.title)
					.where("USE_LG_RESOURCES.id != ?", useLgResources.id)
					.connect("Você não pode cadastrar o recurso '"+useLgResources.title+"', este recurso já existe na base de dados.", callBack);
			}else{
				useFX.checkItemExist('SAVE_UPDATE_RESOURCbES', useLgResources)
					.where("USE_LG_RESOURCES.title=?", useLgResources.title)
					.connect("Você não pode cadastrar o recurso '"+useLgResources.title+"', este recurso já existe na base de dados.", callBack);
			}
		}
		
		//------------------------------------------------------------------
		//
		//  Campaign
		//
		//------------------------------------------------------------------			
		//----------------------------------
		//  populateCampaign
		//----------------------------------
		/**
		 *  Consulta a base de dados e recupera a lista de campanhas.
		 * 
		 *  @return void  
		 */	
		public function populateCampaign(callBack:Function):void
		{
			//Cria adaptador DAO e configura as propriedades sql
			var daoLgCampaign:UseDAO = UseDAO.create(useLgCampaign);
			daoLgCampaign.fields(['*']);
			
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.				
			useFX.adapter('POPULATE_CAMPAIGN')
				.adapterSelect(daoLgCampaign)
				.connect(callBack);
		}
		
		//------------------------------------------------------------------
		//
		//  TradeMarketing
		//
		//------------------------------------------------------------------			
		//----------------------------------
		//  populateCollaboratorArea
		//----------------------------------
		/**
		 *  Realiza consulta na base de dados e recupera a lista completa de todos
		 *  as areas de atuação do colaborador
		 * 
		 *  @return void  
		 */	
		public function populateCollaboratorArea(registerIdCollaborators:String, callBack:Function):void
		{
			useLgRegisterTrademarketingHasRegisterCollaborators = new UseLgRegisterTrademarketingHasRegisterCollaborators();
			useRegisterPersonal.exprMYSQL("name" , "CONCAT_WS(' ', name,  middle_name, lastname)","name", true);
			
			//Cria adaptador DAO e configura as propriedades sql
			var daoLgRegisterTrademarketingHasRegisterCollaborators:UseDAO = UseDAO.create(useLgRegisterTrademarketingHasRegisterCollaborators);
			daoLgRegisterTrademarketingHasRegisterCollaborators.fields(['*'])
				.join(useRegisterPersonal, "USE_REGISTER_PERSONAL.register_id = USE_LG_REGISTER_TRADEMARKETING_HAS_REGISTER_COLLABORATORS.register_id_trademarketing", useRegisterPersonal.fields(['name', 'register_id'],true))
				.join(useRegisterGroups, "USE_REGISTER_GROUPS.id = USE_LG_REGISTER_TRADEMARKETING_HAS_REGISTER_COLLABORATORS.register_groups_id", useRegisterGroups.fields(['title', 'id'],true))
				.where("USE_LG_REGISTER_TRADEMARKETING_HAS_REGISTER_COLLABORATORS.register_id_collaborators = ?", registerIdCollaborators)
				.order("USE_REGISTER_GROUPS","title","ASC");
			
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.
			useFX.adapter('POPULATE_COLLABORATOR_AREA')
				.adapterSelect(daoLgRegisterTrademarketingHasRegisterCollaborators)
				.connect(callBack);
		}
		
		//----------------------------------
		//  editListTradeMarketing
		//----------------------------------
		/**
		 *  Realiza consulta na base de dados e recupera a lista de traders e áreas
		 * 
		 *  @return void  
		 */	
		public function editListTradeMarketing(registerId:String):void
		{
			useRegisterPersonal.exprMYSQL("name" , "CONCAT_WS(' ', name,  middle_name, lastname)","name", true);
			
			//Cria adaptador DAO e configura as propriedades sql
			var daoRegister:UseDAO = UseDAO.create(useRegister);
			daoRegister.fields(['id'])
				.join(useRegisterPersonal, "USE_REGISTER_PERSONAL.register_id = USE_REGISTER.id", useRegisterPersonal.fields(['name'],true))
				.where("USE_REGISTER.register_profile_id = ?", '4')
				.order("USE_REGISTER_PERSONAL","name","ASC");
			
			//Cria adaptador DAO para consultar registro de grupos
			var daoRegisterGroups:UseDAO = UseDAO.create(useRegisterGroups);
			daoRegisterGroups.fields(['id', 'title'])
				.join(useRegisterHasRegisterGroups, "USE_REGISTER_HAS_REGISTER_GROUPS.register_groups_id = USE_REGISTER_GROUPS.id")
				.where("USE_REGISTER_GROUPS.register_group_area_id = ?", '1')
				.where("USE_REGISTER_HAS_REGISTER_GROUPS.register_id = ?", registerId)
				.order("USE_REGISTER_GROUPS","title","ASC");
			
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.
			useFX.adapter('EDIT_POPUP_TRADE_MARKETING')
				.adapterSelect(daoRegister)
				.adapterSelect(daoRegisterGroups);
		}
		
		//----------------------------------
		//  saveTradeMarketing
		//----------------------------------
		/**
		 *  Adiciona na lista um trade marketing responsável pelo colaborador
		 * 
		 *  @return void  
		 */	
		public function saveTradeMarketing(registerIdCollaborators:String, registerIdTrademarketing:String, registerGroupsId:int, callBack:Function):void
		{
			useLgRegisterTrademarketingHasRegisterCollaborators = new UseLgRegisterTrademarketingHasRegisterCollaborators();
			useLgRegisterTrademarketingHasRegisterCollaborators.register_id_trademarketing	=  registerIdTrademarketing;
			useLgRegisterTrademarketingHasRegisterCollaborators.register_id_collaborators	=  registerIdCollaborators;
			useLgRegisterTrademarketingHasRegisterCollaborators.register_groups_id			=  registerGroupsId;
			
			useFX.adapter('SAVE_TRADE_MARKETING')
				.adapterMaster(useLgRegisterTrademarketingHasRegisterCollaborators)
				.connect(callBack);
		}		 
		
		
		//------------------------------------------------------------------
		//
		//  Retailer
		//
		//------------------------------------------------------------------
		//----------------------------------
		//  populateRetailer
		//----------------------------------
		/**
		 *  Realiza busca na base de dados e recupera a lista completa de todos os retailers
		 * 
		 *  @return void  
		 */	
		public function populateRetailer(callBack:Function):void
		{
			//Cria adaptador DAO e configura as propriedades sql
			var daoRegisterCorporate:UseDAO = UseDAO.create(useRegister);
			daoRegisterCorporate.fields(['*'],true)
				.join(useRegisterCorporate, "USE_REGISTER.id = USE_REGISTER_CORPORATE.register_id", useRegisterCorporate.fields(['*']))
				.where("USE_REGISTER.register_profile_id = 5")
				.order("USE_REGISTER_CORPORATE","fancy_name","ASC");
			
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.				
			useFX.adapter('POPULATE_RETAILER')
				.adapterSelect(daoRegisterCorporate)
				.connect(callBack);
		}		 
		//----------------------------------
		//  searchRetailer
		//----------------------------------
		/**
		 *  Realiza busca pela loja de acordo com os dados passados.
		 * 
		 *  @return void  
		 */	
		public function searchRetailer(value:String, idsSelecteds:String, callBack:Function):void
		{
			//Cria adaptador DAO e configura as propriedades sql
			var daoRegisterCorporate:UseDAO = UseDAO.create(useRegisterCorporate);
			daoRegisterCorporate.fields(['*'])
				.where("USE_REGISTER_CORPORATE.fancy_name LIKE ?", value);
			
			if(idsSelecteds.length > 0) daoRegisterCorporate.where("USE_REGISTER_CORPORATE.register_id NOT IN("+ idsSelecteds +")");
			
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.				
			useFX.adapter('POPULATE_RETAILER')
				.adapterSelect(daoRegisterCorporate)
				.connect(callBack);
		}
		
		//----------------------------------
		//  populateResourcesRetailers
		//----------------------------------
		/**
		 *  Realiza busca pela loja de acordo com os dados passados.
		 * 
		 *  @return void  
		 */	
		public function populateResourcesRetailers(registerGroupsId:String, resourcesId:String, callBack:Function, tiSearch:String = null):void
		{
			//Cria adaptador DAO e configura as propriedades sql
			var daoRegisterCorporate:UseDAO = UseDAO.create(useRegisterCorporate);
			daoRegisterCorporate.fields(['*'], true)
				.join(useRegisterHasRegisterGroups, "USE_REGISTER_CORPORATE.register_id = USE_REGISTER_HAS_REGISTER_GROUPS.register_id")
				.joinLeft(useLgResourcesRetailers, "USE_REGISTER_CORPORATE.register_id = USE_LG_RESOURCES_RETAILERS.retailer_id AND USE_LG_RESOURCES_RETAILERS.lg_resources_id = "+ resourcesId, useLgResourcesRetailers.fields(['id'], true))
				.where("USE_REGISTER_HAS_REGISTER_GROUPS.register_groups_id = ?", registerGroupsId);
			
			if(tiSearch) daoRegisterCorporate.where("USE_REGISTER_CORPORATE.fancy_name LIKE '%"+ tiSearch +"%'");
			
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.				
			useFX.adapter('POPULATE_RESOURCES_RETAILERS')
				.adapterSelect(daoRegisterCorporate)
				.connect(callBack);
		}
		
		//----------------------------------
		//  populateProductsRetailers
		//----------------------------------
		/**
		 *  Realiza busca pela loja de acordo com os dados passados.
		 * 
		 *  @return void  
		 */	
		public function populateProductsRetailers(registerGroupsId:String, productId:String, callBack:Function, tiSearch:String = null, populate:Boolean = false):void
		{
			//Cria adaptador DAO e configura as propriedades sql
			var daoRegisterCorporate:UseDAO = UseDAO.create(useRegisterCorporate);
			daoRegisterCorporate.fields(['*'], true)
				.join(useRegisterHasRegisterGroups, "USE_REGISTER_CORPORATE.register_id = USE_REGISTER_HAS_REGISTER_GROUPS.register_id");
			
			if(populate) 
				daoRegisterCorporate.join(useLgProductsRetailers, "USE_REGISTER_CORPORATE.register_id = USE_LG_PRODUCTS_RETAILERS.retailer_id AND USE_LG_PRODUCTS_RETAILERS.lg_products_id = "+ productId, useLgProductsRetailers.fields(['id'], true));
			else
				daoRegisterCorporate.joinLeft(useLgProductsRetailers, "USE_REGISTER_CORPORATE.register_id = USE_LG_PRODUCTS_RETAILERS.retailer_id AND USE_LG_PRODUCTS_RETAILERS.lg_products_id = "+ productId, useLgProductsRetailers.fields(['id'], true));
			
			daoRegisterCorporate.where("USE_REGISTER_HAS_REGISTER_GROUPS.register_groups_id = ?", registerGroupsId);
			
			if(tiSearch) daoRegisterCorporate.where("USE_REGISTER_CORPORATE.fancy_name LIKE '%"+ tiSearch +"%'");
			
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.				
			useFX.adapter('POPULATE_PRODUCTS_RETAILERS')
				.adapterSelect(daoRegisterCorporate)
				.connect(callBack);
		}
		
		//----------------------------------
		//  changeResourcesRetailer
		//----------------------------------
		/**
		 *  Adiciona ou remove a relação da loja com o recurso selecionado
		 * 
		 *  @return void  
		 */	
		private var _resourcesId:String;
		private var _data:Object;
		private var _selected:Boolean;
		private var _callBack:Function;
		public function changeResourcesRetailer(resourcesId:String, data:Object, selected:Boolean, callBack:Function):void
		{
			this._resourcesId = resourcesId;
			this._data = data;
			this._selected = selected;
			this._callBack = callBack;
			
			//Instacia o modelo de tabela
			useLgResources			= new UseLgResources();
			
			//Cria adaptador DAO e configura as propriedades sql
			var daoLgResources:UseDAO = UseDAO.create(useLgResources);
			daoLgResources.fields(['id', 'total_retailer'], true)
				.where("USE_LG_RESOURCES.id = ?", this._resourcesId)
				.fetch("Row");
			
			useFX.adapter('TOTAL_RETAILER_RESOURCES')
				.adapterSelect(daoLgResources)
				.connect(updateResourcesRetailer);
		}
		
		//----------------------------------
		//  changeProductsRetailer
		//----------------------------------
		/**
		 *  Adiciona ou remove a relação da loja com o recurso selecionado
		 * 
		 *  @return void  
		 */	
		public function changeProductsRetailer(productsId:String, totalRetailer:int, data:Object, selected:Boolean, callBack:Function):void
		{
			//Instacia o modelo de tabela
			useLgProducts			= new UseLgProducts();
			useLgProductsRetailers 	= new UseLgProductsRetailers();
			
			//Verifica se está selecionado então adiciona, senão remove
			if(selected){
				useLgProductsRetailers.lg_products_id = productsId;
				useLgProductsRetailers.retailer_id = data.USE_REGISTER_CORPORATE_register_id;
				useLgProducts.id = productsId;
				useLgProducts.total_retailer = (totalRetailer + 1);
				
				useFX.adapter('SAVE_PRODUCTS_RETAILER')
					.adapterMaster(useLgProductsRetailers)
					.adapterMaster(useLgProducts)
					.connect(callBack);
			}else{
				useLgProductsRetailers.id = data.USE_LG_PRODUCTS_RETAILERS_id;
				useLgProducts.id = productsId;
				useLgProducts.total_retailer = (totalRetailer - 1);
				
				useFX.adapter('REMOVE_PRODUCTS_RETAILER')
					.adapterRemove(useLgProductsRetailers)
					.adapterMaster(useLgProducts)
					.connect(callBack);
			}
		}
		
		//----------------------------------
		//  updateResourcesRetailer
		//----------------------------------
		/**
		 *  Adiciona ou remove a relação da loja com o recurso selecionado
		 * 
		 *  @return void  
		 */	
		private function updateResourcesRetailer(useResult:*):void
		{
			//Instacia o modelo de tabela
			useLgResources			= new UseLgResources();
			useLgResourcesRetailers = new UseLgResourcesRetailers();
			
			//Verifica se está selecionado então adiciona, senão remove
			if(this._selected)
			{
				useLgResourcesRetailers.lg_resources_id = this._resourcesId;
				useLgResourcesRetailers.retailer_id = this._data.USE_REGISTER_CORPORATE_register_id;
				
				useLgResources.id = this._resourcesId;
				useLgResources.total_retailer = (int(useResult.useLgResources.USE_LG_RESOURCES_total_retailer) + 1);
				
				useFX.adapter('SAVE_RESOURCES_RETAILER')
					.adapterMaster(useLgResourcesRetailers)
					.adapterMaster(useLgResources)
					.connect(this._callBack);
			}else{
				useLgResourcesRetailers.id = this._data.USE_LG_RESOURCES_RETAILERS_id;
				useLgResources.id = this._resourcesId;
				useLgResources.total_retailer = (int(useResult.useLgResources.USE_LG_RESOURCES_total_retailer) - 1);
				
				useFX.adapter('REMOVE_RESOURCES_RETAILER')
					.adapterRemove(useLgResourcesRetailers)
					.adapterMaster(useLgResources)
					.connect(this._callBack);
			}
		}
	}
}