package modules.lg.model 
{
	import devdoo.fx.UseUtil;
	import devdoo.db.UseTableModel;
	
	public class UseLgLog extends UseTableModel
	{
		public function UseLgLog(){
			
			this._classNameModel = 'useLgLog';
			this._table = 'lg_log';
			this._alias = 'USE_LG_LOG';
			this._idField = 'id';
			this._idFieldAlias = 'USE_LG_LOG_id';
			
			this._fields[this._alias + "_created_in"] = "created_in";
			this._fields[this._alias + "_id"] = "id";
			this._fields[this._alias + "_register_id"] = "register_id";
			this._fields[this._alias + "_source_id"] = "source_id";
			this._fields[this._alias + "_source_table"] = "source_table";
		}
		
		public function exprMYSQL(field:String, expr:String, alias:String = null, useTableAlias:Boolean=false):UseLgLog{
			this.expr(field, expr, alias, useTableAlias, 'MYSQL');
			return this;
		}
		
		public function exprSQLite(field:String, expr:String, alias:String = null, useTableAlias:Boolean=false):UseLgLog{
			this.expr(field, expr, alias, useTableAlias, 'SQLITE');
			return this;
		}
		
		public function setVar(field:String, value:String):UseLgLog{
			this._setVar[field] = value;
			return this;
		}
		public function get dataAlias():Object{
			var data:Object = {};
			data[this._alias + "_created_in"] = this.created_in;
			data[this._alias + "_id"] = this.id;
			data[this._alias + "_register_id"] = this.register_id;
			data[this._alias + "_source_id"] = this.source_id;
			data[this._alias + "_source_table"] = this.source_table;
			return data;
		}
		public function get data():Object{
			var data:Object = {};
			data.created_in = this.created_in;
			data.id = this.id;
			data.register_id = this.register_id;
			data.source_id = this.source_id;
			data.source_table = this.source_table;
			return data;
		}
		public function get dataZF():Object{
			return this._data;
		}
		private var _register_id:*;
		public function set register_id(register_id:*):void{
			this._register_id = UseUtil.checkData('register_id', register_id);
			this._data['register_id'] = this._register_id;
			this._isSave = true;
		}
		public function get register_id():*{ return this._register_id; }
		
		private var _created_in:*;
		public function set created_in(created_in:*):void{
			this._created_in = UseUtil.checkData('created_in', created_in);
			this._data['created_in'] = isNull(this._created_in);
			this._isSave = true;
		}
		public function get created_in():*{ return this._created_in; }
		
		private var _source_id:*;
		public function set source_id(source_id:*):void{
			this._source_id = UseUtil.checkData('source_id', source_id);
			this._data['source_id'] = this._source_id;
			this._isSave = true;
		}
		public function get source_id():*{ return this._source_id; }
		
		private var _id:*;
		public function set id(id:*):void{
			this._id = UseUtil.checkData('id', id);
			this._data['id'] = this._id;
			this._isSave = true;
		}
		public function get id():*{ return this._id; }
		
		private var _source_table:*;
		public function set source_table(source_table:*):void{
			this._source_table = UseUtil.checkData('source_table', source_table);
			this._data['source_table'] = this._source_table;
			this._isSave = true;
		}
		public function get source_table():*{ return this._source_table; }
		
	}
}