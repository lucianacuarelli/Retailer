package modules.lg.model
{
	import devdoo.fx.UseUtil;
	import devdoo.db.UseTableModel;
	
	public class UseLgRegisterTrademarketingHasRegisterCollaborators extends UseTableModel
	{
		public function UseLgRegisterTrademarketingHasRegisterCollaborators(){
			
			this._classNameModel = 'useLgRegisterTrademarketingHasRegisterCollaborators';
			this._table = 'lg_register_trademarketing_has_register_collaborators';
			this._alias = 'USE_LG_REGISTER_TRADEMARKETING_HAS_REGISTER_COLLABORATORS';
			this._idField = 'id';
			this._idFieldAlias = 'USE_LG_REGISTER_TRADEMARKETING_HAS_REGISTER_COLLABORATORS_id';
			
			this._fields[this._alias + "_id"] = "id";
			this._fields[this._alias + "_register_groups_id"] = "register_groups_id";
			this._fields[this._alias + "_register_id_collaborators"] = "register_id_collaborators";
			this._fields[this._alias + "_register_id_trademarketing"] = "register_id_trademarketing";
		}
		
		public function exprMYSQL(field:String, expr:String, alias:String = null, useTableAlias:Boolean=false):UseLgRegisterTrademarketingHasRegisterCollaborators{
			this.expr(field, expr, alias, useTableAlias, 'MYSQL');
			return this;
		}
		
		public function exprSQLite(field:String, expr:String, alias:String = null, useTableAlias:Boolean=false):UseLgRegisterTrademarketingHasRegisterCollaborators{
			this.expr(field, expr, alias, useTableAlias, 'SQLITE');
			return this;
		}
		
		public function setVar(field:String, value:String):UseLgRegisterTrademarketingHasRegisterCollaborators{
			this._setVar[field] = value;
			return this;
		}
		public function get dataAlias():Object{
			var data:Object = {};
			data[this._alias + "_id"] = this.id;
			data[this._alias + "_register_groups_id"] = this.register_groups_id;
			data[this._alias + "_register_id_collaborators"] = this.register_id_collaborators;
			data[this._alias + "_register_id_trademarketing"] = this.register_id_trademarketing;
			return data;
		}
		public function get data():Object{
			var data:Object = {};
			data.id = this.id;
			data.register_groups_id = this.register_groups_id;
			data.register_id_collaborators = this.register_id_collaborators;
			data.register_id_trademarketing = this.register_id_trademarketing;
			return data;
		}
		public function get dataZF():Object{
			return this._data;
		}
		private var _register_groups_id:*;
		public function set register_groups_id(register_groups_id:*):void{
			this._register_groups_id = UseUtil.checkData('register_groups_id', register_groups_id);
			this._data['register_groups_id'] = this._register_groups_id;
			this._isSave = true;
		}
		public function get register_groups_id():*{ return this._register_groups_id; }
		
		private var _register_id_trademarketing:*;
		public function set register_id_trademarketing(register_id_trademarketing:*):void{
			this._register_id_trademarketing = UseUtil.checkData('register_id_trademarketing', register_id_trademarketing);
			this._data['register_id_trademarketing'] = this._register_id_trademarketing;
			this._isSave = true;
		}
		public function get register_id_trademarketing():*{ return this._register_id_trademarketing; }
		
		private var _id:*;
		public function set id(id:*):void{
			this._id = UseUtil.checkData('id', id);
			this._data['id'] = this._id;
			this._isSave = true;
		}
		public function get id():*{ return this._id; }
		
		private var _register_id_collaborators:*;
		public function set register_id_collaborators(register_id_collaborators:*):void{
			this._register_id_collaborators = UseUtil.checkData('register_id_collaborators', register_id_collaborators);
			this._data['register_id_collaborators'] = this._register_id_collaborators;
			this._isSave = true;
		}
		public function get register_id_collaborators():*{ return this._register_id_collaborators; }
		
	}
}