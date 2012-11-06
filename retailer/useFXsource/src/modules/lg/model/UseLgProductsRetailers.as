package modules.lg.model 
{
	import devdoo.fx.UseUtil;
	import devdoo.db.UseTableModel;
	
	public class UseLgProductsRetailers extends UseTableModel
	{
		public function UseLgProductsRetailers(){
			
			this._classNameModel = 'useLgProductsRetailers';
			this._table = 'lg_products_retailers';
			this._alias = 'USE_LG_PRODUCTS_RETAILERS';
			this._idField = 'id';
			this._idFieldAlias = 'USE_LG_PRODUCTS_RETAILERS_id';
			
			this._fields[this._alias + "_id"] = "id";
			this._fields[this._alias + "_lg_products_id"] = "lg_products_id";
			this._fields[this._alias + "_retailer_id"] = "retailer_id";
		}
		
		public function exprMYSQL(field:String, expr:String, alias:String = null, useTableAlias:Boolean=false):UseLgProductsRetailers{
			this.expr(field, expr, alias, useTableAlias, 'MYSQL');
			return this;
		}
		
		public function exprSQLite(field:String, expr:String, alias:String = null, useTableAlias:Boolean=false):UseLgProductsRetailers{
			this.expr(field, expr, alias, useTableAlias, 'SQLITE');
			return this;
		}
		
		public function setVar(field:String, value:String):UseLgProductsRetailers{
			this._setVar[field] = value;
			return this;
		}
		public function get dataAlias():Object{
			var data:Object = {};
			data[this._alias + "_id"] = this.id;
			data[this._alias + "_lg_products_id"] = this.lg_products_id;
			data[this._alias + "_retailer_id"] = this.retailer_id;
			return data;
		}
		public function get data():Object{
			var data:Object = {};
			data.id = this.id;
			data.lg_products_id = this.lg_products_id;
			data.retailer_id = this.retailer_id;
			return data;
		}
		public function get dataZF():Object{
			return this._data;
		}
		private var _lg_products_id:*;
		public function set lg_products_id(lg_products_id:*):void{
			this._lg_products_id = UseUtil.checkData('lg_products_id', lg_products_id);
			this._data['lg_products_id'] = this._lg_products_id;
			this._isSave = true;
		}
		public function get lg_products_id():*{ return this._lg_products_id; }
		
		private var _id:*;
		public function set id(id:*):void{
			this._id = UseUtil.checkData('id', id);
			this._data['id'] = this._id;
			this._isSave = true;
		}
		public function get id():*{ return this._id; }
		
		private var _retailer_id:*;
		public function set retailer_id(retailer_id:*):void{
			this._retailer_id = UseUtil.checkData('retailer_id', retailer_id);
			this._data['retailer_id'] = this._retailer_id;
			this._isSave = true;
		}
		public function get retailer_id():*{ return this._retailer_id; }
		
	}
}