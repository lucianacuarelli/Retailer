package modules.lg.model
{
	import devdoo.fx.UseUtil;
	import devdoo.db.UseTableModel;
	
	public class UseLgProducts extends UseTableModel
	{
		public function UseLgProducts(){
			
			this._classNameModel = 'useLgProducts';
			this._table = 'lg_products';
			this._alias = 'USE_LG_PRODUCTS';
			this._idField = 'id';
			this._idFieldAlias = 'USE_LG_PRODUCTS_id';
			
			this._fields[this._alias + "_banner_filename"] = "banner_filename";
			this._fields[this._alias + "_banner_url"] = "banner_url";
			this._fields[this._alias + "_category_id"] = "category_id";
			this._fields[this._alias + "_changed_in"] = "changed_in";
			this._fields[this._alias + "_code"] = "code";
			this._fields[this._alias + "_created_in"] = "created_in";
			this._fields[this._alias + "_date_in"] = "date_in";
			this._fields[this._alias + "_date_out"] = "date_out";
			this._fields[this._alias + "_external_link"] = "external_link";
			this._fields[this._alias + "_highlight_date_out"] = "highlight_date_out";
			this._fields[this._alias + "_id"] = "id";
			this._fields[this._alias + "_image_filename"] = "image_filename";
			this._fields[this._alias + "_image_url"] = "image_url";
			this._fields[this._alias + "_is_active"] = "is_active";
			this._fields[this._alias + "_observation_status"] = "observation_status";
			this._fields[this._alias + "_product_status"] = "product_status";
			this._fields[this._alias + "_product_type"] = "product_type";
			this._fields[this._alias + "_promotional_description"] = "promotional_description";
			this._fields[this._alias + "_promotional_sub_title"] = "promotional_sub_title";
			this._fields[this._alias + "_promotional_title"] = "promotional_title";
			this._fields[this._alias + "_status_new_date_out"] = "status_new_date_out";
			this._fields[this._alias + "_subcategory_id"] = "subcategory_id";
			this._fields[this._alias + "_title"] = "title";
			this._fields[this._alias + "_total_retailer"] = "total_retailer";
			this._fields[this._alias + "_total_view"] = "total_view";
		}
		
		public function exprMYSQL(field:String, expr:String, alias:String = null, useTableAlias:Boolean=false):UseLgProducts{
			this.expr(field, expr, alias, useTableAlias, 'MYSQL');
			return this;
		}
		
		public function exprSQLite(field:String, expr:String, alias:String = null, useTableAlias:Boolean=false):UseLgProducts{
			this.expr(field, expr, alias, useTableAlias, 'SQLITE');
			return this;
		}
		
		public function setVar(field:String, value:String):UseLgProducts{
			this._setVar[field] = value;
			return this;
		}
		public function get dataAlias():Object{
			var data:Object = {};
			data[this._alias + "_banner_filename"] = this.banner_filename;
			data[this._alias + "_banner_url"] = this.banner_url;
			data[this._alias + "_category_id"] = this.category_id;
			data[this._alias + "_changed_in"] = this.changed_in;
			data[this._alias + "_code"] = this.code;
			data[this._alias + "_created_in"] = this.created_in;
			data[this._alias + "_date_in"] = this.date_in;
			data[this._alias + "_date_out"] = this.date_out;
			data[this._alias + "_external_link"] = this.external_link;
			data[this._alias + "_highlight_date_out"] = this.highlight_date_out;
			data[this._alias + "_id"] = this.id;
			data[this._alias + "_image_filename"] = this.image_filename;
			data[this._alias + "_image_url"] = this.image_url;
			data[this._alias + "_is_active"] = this.is_active;
			data[this._alias + "_observation_status"] = this.observation_status;
			data[this._alias + "_product_status"] = this.product_status;
			data[this._alias + "_product_type"] = this.product_type;
			data[this._alias + "_promotional_description"] = this.promotional_description;
			data[this._alias + "_promotional_sub_title"] = this.promotional_sub_title;
			data[this._alias + "_promotional_title"] = this.promotional_title;
			data[this._alias + "_status_new_date_out"] = this.status_new_date_out;
			data[this._alias + "_subcategory_id"] = this.subcategory_id;
			data[this._alias + "_title"] = this.title;
			data[this._alias + "_total_retailer"] = this.total_retailer;
			data[this._alias + "_total_view"] = this.total_view;
			return data;
		}
		public function get data():Object{
			var data:Object = {};
			data.banner_filename = this.banner_filename;
			data.banner_url = this.banner_url;
			data.category_id = this.category_id;
			data.changed_in = this.changed_in;
			data.code = this.code;
			data.created_in = this.created_in;
			data.date_in = this.date_in;
			data.date_out = this.date_out;
			data.external_link = this.external_link;
			data.highlight_date_out = this.highlight_date_out;
			data.id = this.id;
			data.image_filename = this.image_filename;
			data.image_url = this.image_url;
			data.is_active = this.is_active;
			data.observation_status = this.observation_status;
			data.product_status = this.product_status;
			data.product_type = this.product_type;
			data.promotional_description = this.promotional_description;
			data.promotional_sub_title = this.promotional_sub_title;
			data.promotional_title = this.promotional_title;
			data.status_new_date_out = this.status_new_date_out;
			data.subcategory_id = this.subcategory_id;
			data.title = this.title;
			data.total_retailer = this.total_retailer;
			data.total_view = this.total_view;
			return data;
		}
		public function get dataZF():Object{
			return this._data;
		}
		private var _product_type:*;
		public function set product_type(product_type:*):void{
			this._product_type = UseUtil.checkData('product_type', product_type);
			this._data['product_type'] = isNull(this._product_type);
			this._isSave = true;
		}
		public function get product_type():*{ return this._product_type; }
		
		private var _date_in:*;
		public function set date_in(date_in:*):void{
			this._date_in = UseUtil.checkData('date_in', date_in);
			this._data['date_in'] = isNull(this._date_in);
			this._isSave = true;
		}
		public function get date_in():*{ return this._date_in; }
		
		private var _date_out:*;
		public function set date_out(date_out:*):void{
			this._date_out = UseUtil.checkData('date_out', date_out);
			this._data['date_out'] = isNull(this._date_out);
			this._isSave = true;
		}
		public function get date_out():*{ return this._date_out; }
		
		private var _status_new_date_out:*;
		public function set status_new_date_out(status_new_date_out:*):void{
			this._status_new_date_out = UseUtil.checkData('status_new_date_out', status_new_date_out);
			this._data['status_new_date_out'] = isNull(this._status_new_date_out);
			this._isSave = true;
		}
		public function get status_new_date_out():*{ return this._status_new_date_out; }
		
		private var _image_url:*;
		public function set image_url(image_url:*):void{
			this._image_url = UseUtil.checkData('image_url', image_url);
			this._data['image_url'] = isNull(this._image_url);
			this._isSave = true;
		}
		public function get image_url():*{ return this._image_url; }
		
		private var _changed_in:*;
		public function set changed_in(changed_in:*):void{
			this._changed_in = UseUtil.checkData('changed_in', changed_in);
			this._data['changed_in'] = this._changed_in;
			this._isSave = true;
		}
		public function get changed_in():*{ return this._changed_in; }
		
		private var _created_in:*;
		public function set created_in(created_in:*):void{
			this._created_in = UseUtil.checkData('created_in', created_in);
			this._data['created_in'] = this._created_in;
			this._isSave = true;
		}
		public function get created_in():*{ return this._created_in; }
		
		private var _subcategory_id:*;
		public function set subcategory_id(subcategory_id:*):void{
			this._subcategory_id = UseUtil.checkData('subcategory_id', subcategory_id);
			this._data['subcategory_id'] = this._subcategory_id;
			this._isSave = true;
		}
		public function get subcategory_id():*{ return this._subcategory_id; }
		
		private var _category_id:*;
		public function set category_id(category_id:*):void{
			this._category_id = UseUtil.checkData('category_id', category_id);
			this._data['category_id'] = this._category_id;
			this._isSave = true;
		}
		public function get category_id():*{ return this._category_id; }
		
		private var _total_view:*;
		public function set total_view(total_view:*):void{
			this._total_view = UseUtil.checkData('total_view', total_view);
			this._data['total_view'] = this._total_view;
			this._isSave = true;
		}
		public function get total_view():*{ return this._total_view; }
		
		private var _promotional_description:*;
		public function set promotional_description(promotional_description:*):void{
			this._promotional_description = UseUtil.checkData('promotional_description', promotional_description);
			this._data['promotional_description'] = isNull(this._promotional_description);
			this._isSave = true;
		}
		public function get promotional_description():*{ return this._promotional_description; }
		
		private var _title:*;
		public function set title(title:*):void{
			this._title = UseUtil.checkData('title', title);
			this._data['title'] = this._title;
			this._isSave = true;
		}
		public function get title():*{ return this._title; }
		
		private var _promotional_sub_title:*;
		public function set promotional_sub_title(promotional_sub_title:*):void{
			this._promotional_sub_title = UseUtil.checkData('promotional_sub_title', promotional_sub_title);
			this._data['promotional_sub_title'] = isNull(this._promotional_sub_title);
			this._isSave = true;
		}
		public function get promotional_sub_title():*{ return this._promotional_sub_title; }
		
		private var _total_retailer:*;
		public function set total_retailer(total_retailer:*):void{
			this._total_retailer = UseUtil.checkData('total_retailer', total_retailer);
			this._data['total_retailer'] = isNull(this._total_retailer);
			this._isSave = true;
		}
		public function get total_retailer():*{ return this._total_retailer; }
		
		private var _id:*;
		public function set id(id:*):void{
			this._id = UseUtil.checkData('id', id);
			this._data['id'] = this._id;
			this._isSave = true;
		}
		public function get id():*{ return this._id; }
		
		private var _promotional_title:*;
		public function set promotional_title(promotional_title:*):void{
			this._promotional_title = UseUtil.checkData('promotional_title', promotional_title);
			this._data['promotional_title'] = isNull(this._promotional_title);
			this._isSave = true;
		}
		public function get promotional_title():*{ return this._promotional_title; }
		
		private var _is_active:*;
		public function set is_active(is_active:*):void{
			this._is_active = UseUtil.checkData('is_active', is_active);
			this._data['is_active'] = this._is_active;
			this._isSave = true;
		}
		public function get is_active():*{ return this._is_active; }
		
		private var _banner_filename:*;
		public function set banner_filename(banner_filename:*):void{
			this._banner_filename = UseUtil.checkData('banner_filename', banner_filename);
			this._data['banner_filename'] = isNull(this._banner_filename);
			this._isSave = true;
		}
		public function get banner_filename():*{ return this._banner_filename; }
		
		private var _banner_url:*;
		public function set banner_url(banner_url:*):void{
			this._banner_url = UseUtil.checkData('banner_url', banner_url);
			this._data['banner_url'] = isNull(this._banner_url);
			this._isSave = true;
		}
		public function get banner_url():*{ return this._banner_url; }
		
		private var _observation_status:*;
		public function set observation_status(observation_status:*):void{
			this._observation_status = UseUtil.checkData('observation_status', observation_status);
			this._data['observation_status'] = isNull(this._observation_status);
			this._isSave = true;
		}
		public function get observation_status():*{ return this._observation_status; }
		
		private var _code:*;
		public function set code(code:*):void{
			this._code = UseUtil.checkData('code', code);
			this._data['code'] = isNull(this._code);
			this._isSave = true;
		}
		public function get code():*{ return this._code; }
		
		private var _product_status:*;
		public function set product_status(product_status:*):void{
			this._product_status = UseUtil.checkData('product_status', product_status);
			this._data['product_status'] = isNull(this._product_status);
			this._isSave = true;
		}
		public function get product_status():*{ return this._product_status; }
		
		private var _image_filename:*;
		public function set image_filename(image_filename:*):void{
			this._image_filename = UseUtil.checkData('image_filename', image_filename);
			this._data['image_filename'] = isNull(this._image_filename);
			this._isSave = true;
		}
		public function get image_filename():*{ return this._image_filename; }
		
		private var _highlight_date_out:*;
		public function set highlight_date_out(highlight_date_out:*):void{
			this._highlight_date_out = UseUtil.checkData('highlight_date_out', highlight_date_out);
			this._data['highlight_date_out'] = isNull(this._highlight_date_out);
			this._isSave = true;
		}
		public function get highlight_date_out():*{ return this._highlight_date_out; }
		
		private var _external_link:*;
		public function set external_link(external_link:*):void{
			this._external_link = UseUtil.checkData('external_link', external_link);
			this._data['external_link'] = isNull(this._external_link);
			this._isSave = true;
		}
		public function get external_link():*{ return this._external_link; }
		
	}
}