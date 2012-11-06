package modules.lg.model
{
	import devdoo.fx.UseUtil;
	import devdoo.db.UseTableModel;
	
	public class UseLgDownloadsTrash extends UseTableModel
	{
		public function UseLgDownloadsTrash(){
			
			this._classNameModel = 'useLgDownloadsTrash';
			this._table = 'lg_downloads_trash';
			this._alias = 'USE_LG_DOWNLOADS_TRASH';
			this._idField = 'id';
			this._idFieldAlias = 'USE_LG_DOWNLOADS_TRASH_id';
			
			this._fields[this._alias + "_created_in"] = "created_in";
			this._fields[this._alias + "_created_in_download"] = "created_in_download";
			this._fields[this._alias + "_id"] = "id";
			this._fields[this._alias + "_page_number"] = "page_number";
			this._fields[this._alias + "_register_id"] = "register_id";
			this._fields[this._alias + "_resource_id"] = "resource_id";
			this._fields[this._alias + "_session_created_in"] = "session_created_in";
			this._fields[this._alias + "_session_id"] = "session_id";
		}
		
		public function exprMYSQL(field:String, expr:String, alias:String = null, useTableAlias:Boolean=false):UseLgDownloadsTrash{
			this.expr(field, expr, alias, useTableAlias, 'MYSQL');
			return this;
		}
		
		public function exprSQLite(field:String, expr:String, alias:String = null, useTableAlias:Boolean=false):UseLgDownloadsTrash{
			this.expr(field, expr, alias, useTableAlias, 'SQLITE');
			return this;
		}
		
		public function setVar(field:String, value:String):UseLgDownloadsTrash{
			this._setVar[field] = value;
			return this;
		}
		public function get dataAlias():Object{
			var data:Object = {};
			data[this._alias + "_created_in"] = this.created_in;
			data[this._alias + "_created_in_download"] = this.created_in_download;
			data[this._alias + "_id"] = this.id;
			data[this._alias + "_page_number"] = this.page_number;
			data[this._alias + "_register_id"] = this.register_id;
			data[this._alias + "_resource_id"] = this.resource_id;
			data[this._alias + "_session_created_in"] = this.session_created_in;
			data[this._alias + "_session_id"] = this.session_id;
			return data;
		}
		public function get data():Object{
			var data:Object = {};
			data.created_in = this.created_in;
			data.created_in_download = this.created_in_download;
			data.id = this.id;
			data.page_number = this.page_number;
			data.register_id = this.register_id;
			data.resource_id = this.resource_id;
			data.session_created_in = this.session_created_in;
			data.session_id = this.session_id;
			return data;
		}
		public function get dataZF():Object{
			return this._data;
		}
		private var _created_in:*;
		public function set created_in(created_in:*):void{
			this._created_in = UseUtil.checkData('created_in', created_in);
			this._data['created_in'] = this._created_in;
			this._isSave = true;
		}
		public function get created_in():*{ return this._created_in; }
		
		private var _session_id:*;
		public function set session_id(session_id:*):void{
			this._session_id = UseUtil.checkData('session_id', session_id);
			this._data['session_id'] = this._session_id;
			this._isSave = true;
		}
		public function get session_id():*{ return this._session_id; }
		
		private var _id:*;
		public function set id(id:*):void{
			this._id = UseUtil.checkData('id', id);
			this._data['id'] = this._id;
			this._isSave = true;
		}
		public function get id():*{ return this._id; }
		
		private var _created_in_download:*;
		public function set created_in_download(created_in_download:*):void{
			this._created_in_download = UseUtil.checkData('created_in_download', created_in_download);
			this._data['created_in_download'] = isNull(this._created_in_download);
			this._isSave = true;
		}
		public function get created_in_download():*{ return this._created_in_download; }
		
		private var _session_created_in:*;
		public function set session_created_in(session_created_in:*):void{
			this._session_created_in = UseUtil.checkData('session_created_in', session_created_in);
			this._data['session_created_in'] = this._session_created_in;
			this._isSave = true;
		}
		public function get session_created_in():*{ return this._session_created_in; }
		
		private var _resource_id:*;
		public function set resource_id(resource_id:*):void{
			this._resource_id = UseUtil.checkData('resource_id', resource_id);
			this._data['resource_id'] = this._resource_id;
			this._isSave = true;
		}
		public function get resource_id():*{ return this._resource_id; }
		
		private var _page_number:*;
		public function set page_number(page_number:*):void{
			this._page_number = UseUtil.checkData('page_number', page_number);
			this._data['page_number'] = this._page_number;
			this._isSave = true;
		}
		public function get page_number():*{ return this._page_number; }
		
		private var _register_id:*;
		public function set register_id(register_id:*):void{
			this._register_id = UseUtil.checkData('register_id', register_id);
			this._data['register_id'] = this._register_id;
			this._isSave = true;
		}
		public function get register_id():*{ return this._register_id; }
		
	}
}