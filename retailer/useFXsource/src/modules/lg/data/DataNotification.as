package modules.lg.data
{
	import devdoo.fx.UseDAO;
	import devdoo.fx.UseDebug;
	import devdoo.fx.UseFX;
	import devdoo.fx.UseNotification;
	import devdoo.fx.interfaces.INotification;
	import devdoo.register.model.UseRegister;
	import devdoo.register.model.UseRegisterHasRegisterGroups;
	import devdoo.register.model.UseRegisterPersonal;

	public class DataNotification implements INotification
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
		
		public function DataNotification() 
		{
			//Recupera a instância da classe de gerenciamento da módulo
			useFX = UseFX.start();
		}
		
		//----------------------------------
		//  create
		//----------------------------------
		/**
		 *  Cria lista de usuários notificados  
		 */  
		public function createx():void
		{
			var useRegister:UseRegister = new UseRegister();
			var useRegisterPersonal:UseRegisterPersonal = new UseRegisterPersonal();
			var useRegisterHasRegisterGroups:UseRegisterHasRegisterGroups = new UseRegisterHasRegisterGroups();
			
			useRegisterPersonal.exprMYSQL("name" , "CONCAT_WS(' ', USE_REGISTER_PERSONAL.name,  USE_REGISTER_PERSONAL.middle_name, USE_REGISTER_PERSONAL.lastname)","user_name");
			
			//Cria adaptador DAO e configura as propriedades sql
			var daoRegister:UseDAO = UseDAO.create(useRegister);
				daoRegister.fields(['user_email','id'])
							.distinct()
						   .join(useRegisterPersonal, "USE_REGISTER_PERSONAL.register_id = USE_REGISTER.id")
						   .joinLeft(useRegisterHasRegisterGroups, "USE_REGISTER_HAS_REGISTER_GROUPS.register_id = USE_REGISTER.id")
						   .where("USE_REGISTER.user_email REGEXP '^[^@ ]+@([a-zA-Z0-9\-]+\.)+([a-zA-Z0-9\-]{2}|net|com|gov|mil|org|edu|int)$'");
						   //.showSQL();				
			
			//Cria um adaptador e adiciona os objetos DAO nele e
			//conecta ao servidor para interagir com a base de dados.				
			useFX.adapter('POPULATE_DATA_LIST')
				.adapterSelect(daoRegister)
				.connect(populateResult);
		}
		
		public function populateResult(useResult:*):void
		{
			UseDebug.p(useResult);
		}
		
		public function create():void
		{
			//Cria adaptador DAO e configura as propriedades da notificação
			var daoUpdateProduct:UseDAO = UseDAO.notification('UPDATE_PRODUCT_STORE_ID54', UseNotification.EMAIL_AND_NOTIFICATION);
				daoUpdateProduct.select("SELECT `USE_REGISTER`.`id`, `USE_REGISTER`.`user_email`, CONCAT_WS(' ', USE_REGISTER_PERSONAL.name,  USE_REGISTER_PERSONAL.middle_name, USE_REGISTER_PERSONAL.lastname) AS `user_name` FROM `register` AS `USE_REGISTER`" +
					"INNER JOIN `register_personal` AS `USE_REGISTER_PERSONAL` ON USE_REGISTER_PERSONAL.register_id = USE_REGISTER.id WHERE (USE_REGISTER.user_email REGEXP '[A-Za-z0-9\\._-]+@[A-Za-z]+\\.[A-Za-z]+')");
				
			//Cria adaptador DAO e configura as propriedades da notificação
			var daoNewProduct:UseDAO = UseDAO.notification('NEW_PRODUCT', UseNotification.NOTIFICATION);
				daoNewProduct.select("SELECT `USE_REGISTER`.`id`, `USE_REGISTER`.`user_email`, CONCAT_WS(' ', USE_REGISTER_PERSONAL.name,  USE_REGISTER_PERSONAL.middle_name, USE_REGISTER_PERSONAL.lastname) AS `user_name` FROM `register` AS `USE_REGISTER`" +
					"INNER JOIN `register_personal` AS `USE_REGISTER_PERSONAL` ON USE_REGISTER_PERSONAL.register_id = USE_REGISTER.id WHERE (USE_REGISTER.user_email REGEXP '[A-Za-z0-9\\._-]+@[A-Za-z]+\\.[A-Za-z]+')");
				
			useFX.notification()
				 .addDAO(daoUpdateProduct)
				 .addDAO(daoNewProduct)
				 .connect();
		}
	}
}