package modules.lg.model
{
	import devdoo.fx.UseUtil;
	import devdoo.db.UseTableModel;
	
	public class UseLgAnalytcs extends UseTableModel
	{
		public function UseLgAnalytcs(){
			
			this._classNameModel = 'useLgAnalytcs';
			this._table = 'lg_analytcs';
			this._alias = 'USE_LG_ANALYTCS';
			this._idField = 'id';
			this._idFieldAlias = 'USE_LG_ANALYTCS_id';
			
			this._fields[this._alias + "_difference"] = "difference";
			this._fields[this._alias + "_id"] = "id";
			this._fields[this._alias + "_lg_category_id"] = "lg_category_id";
			this._fields[this._alias + "_lg_products_id"] = "lg_products_id";
			this._fields[this._alias + "_lg_resources_id"] = "lg_resources_id";
			this._fields[this._alias + "_page_number"] = "page_number";
			this._fields[this._alias + "_page_type"] = "page_type";
			this._fields[this._alias + "_page_uid"] = "page_uid";
			this._fields[this._alias + "_register_id"] = "register_id";
			this._fields[this._alias + "_session_created_in"] = "session_created_in";
			this._fields[this._alias + "_session_date"] = "session_date";
			this._fields[this._alias + "_session_id"] = "session_id";
			this._fields[this._alias + "_session_month"] = "session_month";
			this._fields[this._alias + "_session_monthday"] = "session_monthday";
			this._fields[this._alias + "_session_period"] = "session_period";
			this._fields[this._alias + "_session_time"] = "session_time";
			this._fields[this._alias + "_session_weekday"] = "session_weekday";
			this._fields[this._alias + "_session_year"] = "session_year";
			this._fields[this._alias + "_url_active"] = "url_active";
			this._fields[this._alias + "_url_active_created_in"] = "url_active_created_in";
			this._fields[this._alias + "_url_referer"] = "url_referer";
			this._fields[this._alias + "_url_referer_created_in"] = "url_referer_created_in";
		}
		
		public function exprMYSQL(field:String, expr:String, alias:String = null, useTableAlias:Boolean=false):UseLgAnalytcs{
			this.expr(field, expr, alias, useTableAlias, 'MYSQL');
			return this;
		}
		
		public function exprSQLite(field:String, expr:String, alias:String = null, useTableAlias:Boolean=false):UseLgAnalytcs{
			this.expr(field, expr, alias, useTableAlias, 'SQLITE');
			return this;
		}
		
		public function setVar(field:String, value:String):UseLgAnalytcs{
			this._setVar[field] = value;
			return this;
		}
		public function get dataAlias():Object{
			var data:Object = {};
			data[this._alias + "_difference"] = this.difference;
			data[this._alias + "_id"] = this.id;
			data[this._alias + "_lg_category_id"] = this.lg_category_id;
			data[this._alias + "_lg_products_id"] = this.lg_products_id;
			data[this._alias + "_lg_resources_id"] = this.lg_resources_id;
			data[this._alias + "_page_number"] = this.page_number;
			data[this._alias + "_page_type"] = this.page_type;
			data[this._alias + "_page_uid"] = this.page_uid;
			data[this._alias + "_register_id"] = this.register_id;
			data[this._alias + "_session_created_in"] = this.session_created_in;
			data[this._alias + "_session_date"] = this.session_date;
			data[this._alias + "_session_id"] = this.session_id;
			data[this._alias + "_session_month"] = this.session_month;
			data[this._alias + "_session_monthday"] = this.session_monthday;
			data[this._alias + "_session_period"] = this.session_period;
			data[this._alias + "_session_time"] = this.session_time;
			data[this._alias + "_session_weekday"] = this.session_weekday;
			data[this._alias + "_session_year"] = this.session_year;
			data[this._alias + "_url_active"] = this.url_active;
			data[this._alias + "_url_active_created_in"] = this.url_active_created_in;
			data[this._alias + "_url_referer"] = this.url_referer;
			data[this._alias + "_url_referer_created_in"] = this.url_referer_created_in;
			return data;
		}
		public function get data():Object{
			var data:Object = {};
			data.difference = this.difference;
			data.id = this.id;
			data.lg_category_id = this.lg_category_id;
			data.lg_products_id = this.lg_products_id;
			data.lg_resources_id = this.lg_resources_id;
			data.page_number = this.page_number;
			data.page_type = this.page_type;
			data.page_uid = this.page_uid;
			data.register_id = this.register_id;
			data.session_created_in = this.session_created_in;
			data.session_date = this.session_date;
			data.session_id = this.session_id;
			data.session_month = this.session_month;
			data.session_monthday = this.session_monthday;
			data.session_period = this.session_period;
			data.session_time = this.session_time;
			data.session_weekday = this.session_weekday;
			data.session_year = this.session_year;
			data.url_active = this.url_active;
			data.url_active_created_in = this.url_active_created_in;
			data.url_referer = this.url_referer;
			data.url_referer_created_in = this.url_referer_created_in;
			return data;
		}
		public function get dataZF():Object{
			return this._data;
		}
		private var _lg_resources_id:*;
		public function set lg_resources_id(lg_resources_id:*):void{
			this._lg_resources_id = UseUtil.checkData('lg_resources_id', lg_resources_id);
			this._data['lg_resources_id'] = isNull(this._lg_resources_id);
			this._isSave = true;
		}
		public function get lg_resources_id():*{ return this._lg_resources_id; }
		
		private var _session_id:*;
		public function set session_id(session_id:*):void{
			this._session_id = UseUtil.checkData('session_id', session_id);
			this._data['session_id'] = this._session_id;
			this._isSave = true;
		}
		public function get session_id():*{ return this._session_id; }
		
		private var _session_time:*;
		public function set session_time(session_time:*):void{
			this._session_time = UseUtil.checkData('session_time', session_time);
			this._data['session_time'] = this._session_time;
			this._isSave = true;
		}
		public function get session_time():*{ return this._session_time; }
		
		private var _url_active:*;
		public function set url_active(url_active:*):void{
			this._url_active = UseUtil.checkData('url_active', url_active);
			this._data['url_active'] = this._url_active;
			this._isSave = true;
		}
		public function get url_active():*{ return this._url_active; }
		
		private var _url_referer_created_in:*;
		public function set url_referer_created_in(url_referer_created_in:*):void{
			this._url_referer_created_in = UseUtil.checkData('url_referer_created_in', url_referer_created_in);
			this._data['url_referer_created_in'] = this._url_referer_created_in;
			this._isSave = true;
		}
		public function get url_referer_created_in():*{ return this._url_referer_created_in; }
		
		private var _session_date:*;
		public function set session_date(session_date:*):void{
			this._session_date = UseUtil.checkData('session_date', session_date);
			this._data['session_date'] = this._session_date;
			this._isSave = true;
		}
		public function get session_date():*{ return this._session_date; }
		
		private var _lg_products_id:*;
		public function set lg_products_id(lg_products_id:*):void{
			this._lg_products_id = UseUtil.checkData('lg_products_id', lg_products_id);
			this._data['lg_products_id'] = isNull(this._lg_products_id);
			this._isSave = true;
		}
		public function get lg_products_id():*{ return this._lg_products_id; }
		
		private var _session_month:*;
		public function set session_month(session_month:*):void{
			this._session_month = UseUtil.checkData('session_month', session_month);
			this._data['session_month'] = this._session_month;
			this._isSave = true;
		}
		public function get session_month():*{ return this._session_month; }
		
		private var _session_period:*;
		public function set session_period(session_period:*):void{
			this._session_period = UseUtil.checkData('session_period', session_period);
			this._data['session_period'] = this._session_period;
			this._isSave = true;
		}
		public function get session_period():*{ return this._session_period; }
		
		private var _session_year:*;
		public function set session_year(session_year:*):void{
			this._session_year = UseUtil.checkData('session_year', session_year);
			this._data['session_year'] = this._session_year;
			this._isSave = true;
		}
		public function get session_year():*{ return this._session_year; }
		
		private var _id:*;
		public function set id(id:*):void{
			this._id = UseUtil.checkData('id', id);
			this._data['id'] = this._id;
			this._isSave = true;
		}
		public function get id():*{ return this._id; }
		
		private var _page_uid:*;
		public function set page_uid(page_uid:*):void{
			this._page_uid = UseUtil.checkData('page_uid', page_uid);
			this._data['page_uid'] = this._page_uid;
			this._isSave = true;
		}
		public function get page_uid():*{ return this._page_uid; }
		
		private var _register_id:*;
		public function set register_id(register_id:*):void{
			this._register_id = UseUtil.checkData('register_id', register_id);
			this._data['register_id'] = this._register_id;
			this._isSave = true;
		}
		public function get register_id():*{ return this._register_id; }
		
		private var _session_created_in:*;
		public function set session_created_in(session_created_in:*):void{
			this._session_created_in = UseUtil.checkData('session_created_in', session_created_in);
			this._data['session_created_in'] = this._session_created_in;
			this._isSave = true;
		}
		public function get session_created_in():*{ return this._session_created_in; }
		
		private var _page_type:*;
		public function set page_type(page_type:*):void{
			this._page_type = UseUtil.checkData('page_type', page_type);
			this._data['page_type'] = this._page_type;
			this._isSave = true;
		}
		public function get page_type():*{ return this._page_type; }
		
		private var _session_weekday:*;
		public function set session_weekday(session_weekday:*):void{
			this._session_weekday = UseUtil.checkData('session_weekday', session_weekday);
			this._data['session_weekday'] = this._session_weekday;
			this._isSave = true;
		}
		public function get session_weekday():*{ return this._session_weekday; }
		
		private var _difference:*;
		public function set difference(difference:*):void{
			this._difference = UseUtil.checkData('difference', difference);
			this._data['difference'] = isNull(this._difference);
			this._isSave = true;
		}
		public function get difference():*{ return this._difference; }
		
		private var _url_active_created_in:*;
		public function set url_active_created_in(url_active_created_in:*):void{
			this._url_active_created_in = UseUtil.checkData('url_active_created_in', url_active_created_in);
			this._data['url_active_created_in'] = this._url_active_created_in;
			this._isSave = true;
		}
		public function get url_active_created_in():*{ return this._url_active_created_in; }
		
		private var _session_monthday:*;
		public function set session_monthday(session_monthday:*):void{
			this._session_monthday = UseUtil.checkData('session_monthday', session_monthday);
			this._data['session_monthday'] = this._session_monthday;
			this._isSave = true;
		}
		public function get session_monthday():*{ return this._session_monthday; }
		
		private var _url_referer:*;
		public function set url_referer(url_referer:*):void{
			this._url_referer = UseUtil.checkData('url_referer', url_referer);
			this._data['url_referer'] = this._url_referer;
			this._isSave = true;
		}
		public function get url_referer():*{ return this._url_referer; }
		
		private var _lg_category_id:*;
		public function set lg_category_id(lg_category_id:*):void{
			this._lg_category_id = UseUtil.checkData('lg_category_id', lg_category_id);
			this._data['lg_category_id'] = isNull(this._lg_category_id);
			this._isSave = true;
		}
		public function get lg_category_id():*{ return this._lg_category_id; }
		
		private var _page_number:*;
		public function set page_number(page_number:*):void{
			this._page_number = UseUtil.checkData('page_number', page_number);
			this._data['page_number'] = this._page_number;
			this._isSave = true;
		}
		public function get page_number():*{ return this._page_number; }
		
	}
}