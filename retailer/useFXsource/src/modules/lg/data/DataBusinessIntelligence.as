package modules.lg.data
{
	import devdoo.fx.UseClass;
	import devdoo.fx.UseDAO;
	import devdoo.fx.UseDate;
	import devdoo.fx.UseFX;
	import devdoo.register.model.UseRegister;
	import devdoo.register.model.UseRegisterCorporate;
	import devdoo.register.model.UseRegisterGroups;
	import devdoo.register.model.UseRegisterPersonal;
	
	import modules.lg.model.UseLgAnalytcs;
	import modules.lg.model.UseLgDownloadsComplete;
	import modules.lg.model.UseLgProducts;
	import modules.lg.model.UseLgResources;
	
	public class DataBusinessIntelligence
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
		//  Table Models / Collections
		//
		//------------------------------------------------------------------			
		//Tabelas
		public var useRegister:UseRegister;
		public var useRegisterPersonal:UseRegisterPersonal;
		public var useRegisterCorporate:UseRegisterCorporate;
		public var useRegisterGroups:UseRegisterGroups;
		public var useLgResources:UseLgResources;
		public var useLgProducts:UseLgProducts;
		public var useLgAnalytcs:UseLgAnalytcs;
		public var useLgDownloadsComplete:UseLgDownloadsComplete;
		
		//Coleções
		
		//----------------------------------
		//  DataBusinessIntelligence
		//----------------------------------
		/**
		 *  Construtor da classe.  
		 */
		public function DataBusinessIntelligence()
		{
			super();
			
			//Recupera a instância da classe de gerenciamento da módulo
			useFX = UseFX.start();
			
			//Tabelas
			useRegister				= new UseRegister();
			useRegisterPersonal 	= new UseRegisterPersonal();
			useRegisterCorporate	= new UseRegisterCorporate();
			useRegisterGroups		= new UseRegisterGroups();
			useLgResources			= new UseLgResources();
			useLgProducts			= new UseLgProducts();
			useLgAnalytcs			= new UseLgAnalytcs();
			useLgDownloadsComplete	= new UseLgDownloadsComplete();
		}
		
		//----------------------------------
		//  populateResourceByCategory
		//----------------------------------
		/**
		 *  Realiza consulta na base de dados e recupera a lista de equipamentos,
		 *  disponíveis para ser associado ao distribuidor.
		 * 
		 *  @return void  
		 */	
		public function populate(method:String,callBack:Function,dateStart:* = null,dateFinish:* = null):void
		{
			//Conecta uma classe no php para interação com a base de dados
			var useClass:UseClass = new UseClass(useFX.baseUrl, 'BUSINESSINTELLIGENCE');
			useClass.method(method);
			useClass.data({dateStart:dateStart, dateFinish:dateFinish})
			useClass.module('default')
				.connect(callBack);
		}
		
		//----------------------------------
		//  populateResourceByCategoryXXX
		//----------------------------------
		/**
		 *  Realiza consulta na base de dados e recupera a lista de equipamentos,
		 *  disponíveis para ser associado ao distribuidor.
		 * 
		 *  @return void  
		 */	
		public function populateResourceByCategoryXXX(callBack:Function):void
		{
			useLgResources.exprMYSQL('id','COUNT(?)','total_resource');
			useLgProducts.exprMYSQL('id','COUNT(?)','total_product');
			useLgDownloadsComplete.exprMYSQL('id','COUNT(?)','total_download');
			
			//Cria adaptador DAO e configura as propriedades sql
			var daoResourceCategory:UseDAO = UseDAO.create(useLgResources);
			daoResourceCategory.fields(['id'])
				.join(useLgProducts, "USE_LG_RESOURCES.source_id = USE_LG_PRODUCTS.id")
				.join(useRegisterGroups, "USE_LG_PRODUCTS.category_id = USE_REGISTER_GROUPS.id", useRegisterGroups.fields(['title']))
				.group("USE_LG_PRODUCTS", "category_id");
			
			var daoProductCategory:UseDAO = UseDAO.create(useLgProducts);
			daoProductCategory.fields(['id'])
				.join(useRegisterGroups, "USE_LG_PRODUCTS.category_id = USE_REGISTER_GROUPS.id", useRegisterGroups.fields(['title']))
				.group("USE_LG_PRODUCTS", "category_id");
			
			var daoDownloadCategory:UseDAO = UseDAO.create(useLgDownloadsComplete);
			daoDownloadCategory.fields(['id'])
				.join(useLgResources, "USE_LG_DOWNLOADS_COMPLETE.resource_id = USE_LG_RESOURCES.id")
				.join(useLgProducts, "USE_LG_RESOURCES.source_id = USE_LG_PRODUCTS.id", useRegisterGroups.fields(['title']))
				.join(useRegisterGroups, "USE_LG_PRODUCTS.category_id = USE_REGISTER_GROUPS.id", useRegisterGroups.fields(['title']))
				.group("USE_LG_PRODUCTS", "category_id");
			
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.				
			useFX.adapter('POPULATE_CATEGORY_REPORT')
				.adapterSelect(daoResourceCategory)
				.adapterSelect(daoProductCategory)
				.adapterSelect(daoDownloadCategory)
				.connect(callBack);
		}
		
		//----------------------------------
		//  populatePeriod
		//----------------------------------
		/**
		 *  Realiza consulta na base de dados e recupera a quantidade total de
		 *  interações por período.
		 * 
		 *  @return void  
		 */	
		public function populatePeriod(callBack:Function):void
		{
			useLgAnalytcs.exprMYSQL('id','COUNT(?)','total');
			
			//SELECT session_period, COUNT(*) AS total FROM lg_analytcs GROUP BY session_period;
			var daoLgAnalytcs:UseDAO = UseDAO.create(useLgAnalytcs);
			daoLgAnalytcs.fields(['session_period'])
				.group("USE_LG_ANALYTCS", "session_period");
			
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.				
			useFX.adapter('POPULATE_CATEGORY_REPORT')
				.adapterSelect(daoLgAnalytcs)
				.connect(callBack);
		}
		
		//----------------------------------
		//  populateTotalUsers
		//----------------------------------
		/**
		 *  Realiza consulta na base de dados e recupera a quantidade total de 
		 *  usuários cadastrados no sistema.
		 * 
		 *  @return void  
		 */	
		public function populateTotalUsers(callBack:Function):void
		{
			useRegister.exprMYSQL('id','COUNT(?)','total');
			
			//SELECT session_period, COUNT(*) AS total FROM lg_analytcs GROUP BY session_period;
			var daoRegisterUser:UseDAO = UseDAO.create(useRegister);
			daoRegisterUser.fields(['register_type'])
				.group("USE_REGISTER","register_type")
			//.where("USE_REGISTER.register_type = 'P'");
			
			/*var daoRegisterRetailer:UseDAO = UseDAO.create(useRegister);
			daoRegisterRetailer.fields(['*'])
			.where("USE_REGISTER.register_type = 'C'");*/
			
			//SELECT COUNT(*) as total FROM register WHERE register_type = 'P';
			//SELECT COUNT(*) as total FROM register WHERE register_type = 'C';
			
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.				
			useFX.adapter('POPULATE_CATEGORY_REPORT')
				.adapterSelect(daoRegisterUser)
				//.adapterSelect(daoRegisterRetailer)
				.connect(callBack);
		}
		
		//----------------------------------
		//  populateMonthInteractions
		//----------------------------------
		/**
		 *  Realiza consulta na base de dados e recupera a quantidade total de 
		 *  usuários cadastrados no sistema.
		 * 
		 *  @return void  
		 */	
		public function populateMonthInteractions(callBack:Function):void
		{
			//SELECT session_month, COUNT(*) AS total FROM lg_analytcs GROUP 
			//BY session_month ORDER BY total DESC;
			useLgAnalytcs.exprMYSQL('id','COUNT(?)','total');
			
			var daoLgAnalytcs:UseDAO = UseDAO.create(useLgAnalytcs);
			daoLgAnalytcs.fields(['session_month'])
				.group("USE_LG_ANALYTCS","session_month")
			//.order("USE_LG_ANALYTCS","total","DESC")
			
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.				
			useFX.adapter('POPULATE_CATEGORY_REPORT')
				.adapterSelect(daoLgAnalytcs)
				.connect(callBack);
		}
		
	}
}