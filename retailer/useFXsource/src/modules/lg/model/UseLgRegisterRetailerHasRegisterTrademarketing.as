package modules.lg.model
{
	import devdoo.fx.UseUtil;
	import devdoo.db.UseTableModel;
	
	public class UseLgRegisterRetailerHasRegisterTrademarketing extends UseTableModel
	{
		public function UseLgRegisterRetailerHasRegisterTrademarketing(){
			
			this._classNameModel = 'useLgRegisterRetailerHasRegisterTrademarketing';
			this._table = 'lg_register_retailer_has_register_trademarketing';
			this._alias = 'USE_LG_REGISTER_RETAILER_HAS_REGISTER_TRADEMARKETING';
			this._idField = 'id';
			this._idFieldAlias = 'USE_LG_REGISTER_RETAILER_HAS_REGISTER_TRADEMARKETING_id';
			
			this._fields[this._alias + "_register_groups_id"] = "register_groups_id";
			this._fields[this._alias + "_register_id_retailer"] = "register_id_retailer";
			this._fields[this._alias + "_register_id_trademarketing"] = "register_id_trademarketing";
		}
		
		public function exprMYSQL(field:String, expr:String, alias:String = null, useTableAlias:Boolean=false):UseLgRegisterRetailerHasRegisterTrademarketing{
			this.expr(field, expr, alias, useTableAlias, 'MYSQL');
			return this;
		}
		
		public function exprSQLite(field:String, expr:String, alias:String = null, useTableAlias:Boolean=false):UseLgRegisterRetailerHasRegisterTrademarketing{
			this.expr(field, expr, alias, useTableAlias, 'SQLITE');
			return this;
		}
		
		public function setVar(field:String, value:String):UseLgRegisterRetailerHasRegisterTrademarketing{
			this._setVar[field] = value;
			return this;
		}
		public function get dataAlias():Object{
			var data:Object = {};
			data[this._alias + "_register_groups_id"] = this.register_groups_id;
			data[this._alias + "_register_id_retailer"] = this.register_id_retailer;
			data[this._alias + "_register_id_trademarketing"] = this.register_id_trademarketing;
			return data;
		}
		public function get data():Object{
			var data:Object = {};
			data.register_groups_id = this.register_groups_id;
			data.register_id_retailer = this.register_id_retailer;
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
		
		private var _register_id_retailer:*;
		public function set register_id_retailer(register_id_retailer:*):void{
			this._register_id_retailer = UseUtil.checkData('register_id_retailer', register_id_retailer);
			this._data['register_id_retailer'] = this._register_id_retailer;
			this._isSave = true;
		}
		public function get register_id_retailer():*{ return this._register_id_retailer; }
		
		private var _register_id_trademarketing:*;
		public function set register_id_trademarketing(register_id_trademarketing:*):void{
			this._register_id_trademarketing = UseUtil.checkData('register_id_trademarketing', register_id_trademarketing);
			this._data['register_id_trademarketing'] = this._register_id_trademarketing;
			this._isSave = true;
		}
		public function get register_id_trademarketing():*{ return this._register_id_trademarketing; }
		
	}
}