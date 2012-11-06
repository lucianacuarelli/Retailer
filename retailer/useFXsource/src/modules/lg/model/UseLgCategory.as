package modules.lg.model 
{
	import devdoo.fx.UseUtil;
	import devdoo.db.UseTableModel;
	
	public class UseLgCategory extends UseTableModel
	{
		public function UseLgCategory(){
			
			this._classNameModel = 'useLgCategory';
			this._table = 'lg_category';
			this._alias = 'USE_LG_CATEGORY';
			this._idField = 'id';
			this._idFieldAlias = 'USE_LG_CATEGORY_id';
			
			this._fields[this._alias + "_created_in"] = "created_in";
			this._fields[this._alias + "_description"] = "description";
			this._fields[this._alias + "_id"] = "id";
			this._fields[this._alias + "_order_position"] = "order_position";
			this._fields[this._alias + "_parent_id"] = "parent_id";
			this._fields[this._alias + "_title"] = "title";
			this._fields[this._alias + "_total_itens"] = "total_itens";
		}
		
		public function exprMYSQL(field:String, expr:String, alias:String = null, useTableAlias:Boolean=false):UseLgCategory{
			this.expr(field, expr, alias, useTableAlias, 'MYSQL');
			return this;
		}
		
		public function exprSQLite(field:String, expr:String, alias:String = null, useTableAlias:Boolean=false):UseLgCategory{
			this.expr(field, expr, alias, useTableAlias, 'SQLITE');
			return this;
		}
		
		public function setVar(field:String, value:String):UseLgCategory{
			this._setVar[field] = value;
			return this;
		}
		public function get dataAlias():Object{
			var data:Object = {};
			data[this._alias + "_created_in"] = this.created_in;
			data[this._alias + "_description"] = this.description;
			data[this._alias + "_id"] = this.id;
			data[this._alias + "_order_position"] = this.order_position;
			data[this._alias + "_parent_id"] = this.parent_id;
			data[this._alias + "_title"] = this.title;
			data[this._alias + "_total_itens"] = this.total_itens;
			return data;
		}
		public function get data():Object{
			var data:Object = {};
			data.created_in = this.created_in;
			data.description = this.description;
			data.id = this.id;
			data.order_position = this.order_position;
			data.parent_id = this.parent_id;
			data.title = this.title;
			data.total_itens = this.total_itens;
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
		
		private var _created_in:*;
		public function set created_in(created_in:*):void{
			this._created_in = UseUtil.checkData('created_in', created_in);
			this._data['created_in'] = isNull(this._created_in);
			this._isSave = true;
		}
		public function get created_in():*{ return this._created_in; }
		
		private var _order_position:*;
		public function set order_position(order_position:*):void{
			this._order_position = UseUtil.checkData('order_position', order_position);
			this._data['order_position'] = isNull(this._order_position);
			this._isSave = true;
		}
		public function get order_position():*{ return this._order_position; }
		
		private var _total_itens:*;
		public function set total_itens(total_itens:*):void{
			this._total_itens = UseUtil.checkData('total_itens', total_itens);
			this._data['total_itens'] = this._total_itens;
			this._isSave = true;
		}
		public function get total_itens():*{ return this._total_itens; }
		
		private var _parent_id:*;
		public function set parent_id(parent_id:*):void{
			this._parent_id = UseUtil.checkData('parent_id', parent_id);
			this._data['parent_id'] = isNull(this._parent_id);
			this._isSave = true;
		}
		public function get parent_id():*{ return this._parent_id; }
		
		private var _title:*;
		public function set title(title:*):void{
			this._title = UseUtil.checkData('title', title);
			this._data['title'] = isNull(this._title);
			this._isSave = true;
		}
		public function get title():*{ return this._title; }
		
	}
}