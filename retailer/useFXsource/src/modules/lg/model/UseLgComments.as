package modules.lg.model 
{
	import devdoo.fx.UseUtil;
	import devdoo.db.UseTableModel;
	
	public class UseLgComments extends UseTableModel
	{
		public function UseLgComments(){
			
			this._classNameModel = 'useLgComments';
			this._table = 'lg_comments';
			this._alias = 'USE_LG_COMMENTS';
			this._idField = 'id';
			this._idFieldAlias = 'USE_LG_COMMENTS_id';
			
			this._fields[this._alias + "_created_in"] = "created_in";
			this._fields[this._alias + "_id"] = "id";
			this._fields[this._alias + "_is_approved"] = "is_approved";
			this._fields[this._alias + "_message"] = "message";
			this._fields[this._alias + "_register_id"] = "register_id";
			this._fields[this._alias + "_register_nick"] = "register_nick";
		}
		
		public function exprMYSQL(field:String, expr:String, alias:String = null, useTableAlias:Boolean=false):UseLgComments{
			this.expr(field, expr, alias, useTableAlias, 'MYSQL');
			return this;
		}
		
		public function exprSQLite(field:String, expr:String, alias:String = null, useTableAlias:Boolean=false):UseLgComments{
			this.expr(field, expr, alias, useTableAlias, 'SQLITE');
			return this;
		}
		
		public function setVar(field:String, value:String):UseLgComments{
			this._setVar[field] = value;
			return this;
		}
		public function get dataAlias():Object{
			var data:Object = {};
			data[this._alias + "_created_in"] = this.created_in;
			data[this._alias + "_id"] = this.id;
			data[this._alias + "_is_approved"] = this.is_approved;
			data[this._alias + "_message"] = this.message;
			data[this._alias + "_register_id"] = this.register_id;
			data[this._alias + "_register_nick"] = this.register_nick;
			return data;
		}
		public function get data():Object{
			var data:Object = {};
			data.created_in = this.created_in;
			data.id = this.id;
			data.is_approved = this.is_approved;
			data.message = this.message;
			data.register_id = this.register_id;
			data.register_nick = this.register_nick;
			return data;
		}
		public function get dataZF():Object{
			return this._data;
		}
		private var _id:*;
		public function set id(id:*):void{
			this._id = UseUtil.checkData('id', id);
			this._data['id'] = this._id;
			this._isSave = true;
		}
		public function get id():*{ return this._id; }
		
		private var _register_nick:*;
		public function set register_nick(register_nick:*):void{
			this._register_nick = UseUtil.checkData('register_nick', register_nick);
			this._data['register_nick'] = this._register_nick;
			this._isSave = true;
		}
		public function get register_nick():*{ return this._register_nick; }
		
		private var _register_id:*;
		public function set register_id(register_id:*):void{
			this._register_id = UseUtil.checkData('register_id', register_id);
			this._data['register_id'] = this._register_id;
			this._isSave = true;
		}
		public function get register_id():*{ return this._register_id; }
		
		private var _is_approved:*;
		public function set is_approved(is_approved:*):void{
			this._is_approved = UseUtil.checkData('is_approved', is_approved);
			this._data['is_approved'] = this._is_approved;
			this._isSave = true;
		}
		public function get is_approved():*{ return this._is_approved; }
		
		private var _message:*;
		public function set message(message:*):void{
			this._message = UseUtil.checkData('message', message);
			this._data['message'] = this._message;
			this._isSave = true;
		}
		public function get message():*{ return this._message; }
		
		private var _created_in:*;
		public function set created_in(created_in:*):void{
			this._created_in = UseUtil.checkData('created_in', created_in);
			this._data['created_in'] = this._created_in;
			this._isSave = true;
		}
		public function get created_in():*{ return this._created_in; }
		
	}
}