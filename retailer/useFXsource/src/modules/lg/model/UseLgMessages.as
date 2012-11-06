package modules.lg.model 
{
	import devdoo.fx.UseUtil;
	import devdoo.db.UseTableModel;
	
	public class UseLgMessages extends UseTableModel
	{
		public function UseLgMessages(){
			
			this._classNameModel = 'useLgMessages';
			this._table = 'lg_messages';
			this._alias = 'USE_LG_MESSAGES';
			this._idField = 'id';
			this._idFieldAlias = 'USE_LG_MESSAGES_id';
			
			this._fields[this._alias + "_created_in"] = "created_in";
			this._fields[this._alias + "_id"] = "id";
			this._fields[this._alias + "_importance"] = "importance";
			this._fields[this._alias + "_message"] = "message";
			this._fields[this._alias + "_parent_id"] = "parent_id";
			this._fields[this._alias + "_priority"] = "priority";
			this._fields[this._alias + "_register_from_id"] = "register_from_id";
			this._fields[this._alias + "_register_to_id"] = "register_to_id";
			this._fields[this._alias + "_status_message"] = "status_message";
			this._fields[this._alias + "_title"] = "title";
		}
		
		public function exprMYSQL(field:String, expr:String, alias:String = null, useTableAlias:Boolean=false):UseLgMessages{
			this.expr(field, expr, alias, useTableAlias, 'MYSQL');
			return this;
		}
		
		public function exprSQLite(field:String, expr:String, alias:String = null, useTableAlias:Boolean=false):UseLgMessages{
			this.expr(field, expr, alias, useTableAlias, 'SQLITE');
			return this;
		}
		
		public function setVar(field:String, value:String):UseLgMessages{
			this._setVar[field] = value;
			return this;
		}
		public function get dataAlias():Object{
			var data:Object = {};
			data[this._alias + "_created_in"] = this.created_in;
			data[this._alias + "_id"] = this.id;
			data[this._alias + "_importance"] = this.importance;
			data[this._alias + "_message"] = this.message;
			data[this._alias + "_parent_id"] = this.parent_id;
			data[this._alias + "_priority"] = this.priority;
			data[this._alias + "_register_from_id"] = this.register_from_id;
			data[this._alias + "_register_to_id"] = this.register_to_id;
			data[this._alias + "_status_message"] = this.status_message;
			data[this._alias + "_title"] = this.title;
			return data;
		}
		public function get data():Object{
			var data:Object = {};
			data.created_in = this.created_in;
			data.id = this.id;
			data.importance = this.importance;
			data.message = this.message;
			data.parent_id = this.parent_id;
			data.priority = this.priority;
			data.register_from_id = this.register_from_id;
			data.register_to_id = this.register_to_id;
			data.status_message = this.status_message;
			data.title = this.title;
			return data;
		}
		public function get dataZF():Object{
			return this._data;
		}
		private var _priority:*;
		public function set priority(priority:*):void{
			this._priority = UseUtil.checkData('priority', priority);
			this._data['priority'] = this._priority;
			this._isSave = true;
		}
		public function get priority():*{ return this._priority; }
		
		private var _register_from_id:*;
		public function set register_from_id(register_from_id:*):void{
			this._register_from_id = UseUtil.checkData('register_from_id', register_from_id);
			this._data['register_from_id'] = this._register_from_id;
			this._isSave = true;
		}
		public function get register_from_id():*{ return this._register_from_id; }
		
		private var _created_in:*;
		public function set created_in(created_in:*):void{
			this._created_in = UseUtil.checkData('created_in', created_in);
			this._data['created_in'] = this._created_in;
			this._isSave = true;
		}
		public function get created_in():*{ return this._created_in; }
		
		private var _id:*;
		public function set id(id:*):void{
			this._id = UseUtil.checkData('id', id);
			this._data['id'] = this._id;
			this._isSave = true;
		}
		public function get id():*{ return this._id; }
		
		private var _message:*;
		public function set message(message:*):void{
			this._message = UseUtil.checkData('message', message);
			this._data['message'] = this._message;
			this._isSave = true;
		}
		public function get message():*{ return this._message; }
		
		private var _status_message:*;
		public function set status_message(status_message:*):void{
			this._status_message = UseUtil.checkData('status_message', status_message);
			this._data['status_message'] = this._status_message;
			this._isSave = true;
		}
		public function get status_message():*{ return this._status_message; }
		
		private var _importance:*;
		public function set importance(importance:*):void{
			this._importance = UseUtil.checkData('importance', importance);
			this._data['importance'] = this._importance;
			this._isSave = true;
		}
		public function get importance():*{ return this._importance; }
		
		private var _parent_id:*;
		public function set parent_id(parent_id:*):void{
			this._parent_id = UseUtil.checkData('parent_id', parent_id);
			this._data['parent_id'] = isNull(this._parent_id);
			this._isSave = true;
		}
		public function get parent_id():*{ return this._parent_id; }
		
		private var _register_to_id:*;
		public function set register_to_id(register_to_id:*):void{
			this._register_to_id = UseUtil.checkData('register_to_id', register_to_id);
			this._data['register_to_id'] = this._register_to_id;
			this._isSave = true;
		}
		public function get register_to_id():*{ return this._register_to_id; }
		
		private var _title:*;
		public function set title(title:*):void{
			this._title = UseUtil.checkData('title', title);
			this._data['title'] = this._title;
			this._isSave = true;
		}
		public function get title():*{ return this._title; }
		
	}
}