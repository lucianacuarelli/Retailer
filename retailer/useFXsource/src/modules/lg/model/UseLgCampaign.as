package modules.lg.model 
{
	import devdoo.fx.UseUtil;
	import devdoo.db.UseTableModel;
	
	public class UseLgCampaign extends UseTableModel
	{
		public function UseLgCampaign(){
			
			this._classNameModel = 'useLgCampaign';
			this._table = 'lg_campaign';
			this._alias = 'USE_LG_CAMPAIGN';
			this._idField = 'id';
			this._idFieldAlias = 'USE_LG_CAMPAIGN_id';
			
			this._fields[this._alias + "_data_in"] = "data_in";
			this._fields[this._alias + "_date_out"] = "date_out";
			this._fields[this._alias + "_description"] = "description";
			this._fields[this._alias + "_id"] = "id";
			this._fields[this._alias + "_is_active"] = "is_active";
			this._fields[this._alias + "_title"] = "title";
		}
		
		public function exprMYSQL(field:String, expr:String, alias:String = null, useTableAlias:Boolean=false):UseLgCampaign{
			this.expr(field, expr, alias, useTableAlias, 'MYSQL');
			return this;
		}
		
		public function exprSQLite(field:String, expr:String, alias:String = null, useTableAlias:Boolean=false):UseLgCampaign{
			this.expr(field, expr, alias, useTableAlias, 'SQLITE');
			return this;
		}
		
		public function setVar(field:String, value:String):UseLgCampaign{
			this._setVar[field] = value;
			return this;
		}
		public function get dataAlias():Object{
			var data:Object = {};
			data[this._alias + "_data_in"] = this.data_in;
			data[this._alias + "_date_out"] = this.date_out;
			data[this._alias + "_description"] = this.description;
			data[this._alias + "_id"] = this.id;
			data[this._alias + "_is_active"] = this.is_active;
			data[this._alias + "_title"] = this.title;
			return data;
		}
		public function get data():Object{
			var data:Object = {};
			data.data_in = this.data_in;
			data.date_out = this.date_out;
			data.description = this.description;
			data.id = this.id;
			data.is_active = this.is_active;
			data.title = this.title;
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
		
		private var _description:*;
		public function set description(description:*):void{
			this._description = UseUtil.checkData('description', description);
			this._data['description'] = isNull(this._description);
			this._isSave = true;
		}
		public function get description():*{ return this._description; }
		
		private var _date_out:*;
		public function set date_out(date_out:*):void{
			this._date_out = UseUtil.checkData('date_out', date_out);
			this._data['date_out'] = isNull(this._date_out);
			this._isSave = true;
		}
		public function get date_out():*{ return this._date_out; }
		
		private var _data_in:*;
		public function set data_in(data_in:*):void{
			this._data_in = UseUtil.checkData('data_in', data_in);
			this._data['data_in'] = isNull(this._data_in);
			this._isSave = true;
		}
		public function get data_in():*{ return this._data_in; }
		
		private var _title:*;
		public function set title(title:*):void{
			this._title = UseUtil.checkData('title', title);
			this._data['title'] = this._title;
			this._isSave = true;
		}
		public function get title():*{ return this._title; }
		
		private var _is_active:*;
		public function set is_active(is_active:*):void{
			this._is_active = UseUtil.checkData('is_active', is_active);
			this._data['is_active'] = this._is_active;
			this._isSave = true;
		}
		public function get is_active():*{ return this._is_active; }
		
	}
}