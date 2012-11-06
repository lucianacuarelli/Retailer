package modules.lg.model
{
	import devdoo.fx.UseUtil;
	import devdoo.db.UseTableModel;
	
	public class UseEstoque extends UseTableModel
	{
		public function UseEstoque(){
			
			this._classNameModel = 'useEstoque';
			this._table = 'estoque';
			this._alias = 'USE_ESTOQUE';
			this._idField = 'id';
			this._idFieldAlias = 'USE_ESTOQUE_id';
			
			this._fields[this._alias + "_Codigo_Produto"] = "Codigo_Produto";
			this._fields[this._alias + "_Descricao_Produto"] = "Descricao_Produto";
			this._fields[this._alias + "_Grupo"] = "Grupo";
			this._fields[this._alias + "_Local_Impressao"] = "Local_Impressao";
			this._fields[this._alias + "_Nao_Exibir_no_Cardapio"] = "Nao_Exibir_no_Cardapio";
			this._fields[this._alias + "_Nome_Produto"] = "Nome_Produto";
			this._fields[this._alias + "_Preco_Venda"] = "Preco_Venda";
			this._fields[this._alias + "_SubGrupo"] = "SubGrupo";
			this._fields[this._alias + "_Texto_Botao_Tablet"] = "Texto_Botao_Tablet";
			this._fields[this._alias + "_Texto_Botao_Touch"] = "Texto_Botao_Touch";
		}
		
		public function exprMYSQL(field:String, expr:String, alias:String = null, useTableAlias:Boolean=false):UseEstoque{
			this.expr(field, expr, alias, useTableAlias, 'MYSQL');
			return this;
		}
		
		public function exprSQLite(field:String, expr:String, alias:String = null, useTableAlias:Boolean=false):UseEstoque{
			this.expr(field, expr, alias, useTableAlias, 'SQLITE');
			return this;
		}
		
		public function setVar(field:String, value:String):UseEstoque{
			this._setVar[field] = value;
			return this;
		}
		public function get dataAlias():Object{
			var data:Object = {};
			data[this._alias + "_Codigo_Produto"] = this.Codigo_Produto;
			data[this._alias + "_Descricao_Produto"] = this.Descricao_Produto;
			data[this._alias + "_Grupo"] = this.Grupo;
			data[this._alias + "_Local_Impressao"] = this.Local_Impressao;
			data[this._alias + "_Nao_Exibir_no_Cardapio"] = this.Nao_Exibir_no_Cardapio;
			data[this._alias + "_Nome_Produto"] = this.Nome_Produto;
			data[this._alias + "_Preco_Venda"] = this.Preco_Venda;
			data[this._alias + "_SubGrupo"] = this.SubGrupo;
			data[this._alias + "_Texto_Botao_Tablet"] = this.Texto_Botao_Tablet;
			data[this._alias + "_Texto_Botao_Touch"] = this.Texto_Botao_Touch;
			return data;
		}
		public function get data():Object{
			var data:Object = {};
			data.Codigo_Produto = this.Codigo_Produto;
			data.Descricao_Produto = this.Descricao_Produto;
			data.Grupo = this.Grupo;
			data.Local_Impressao = this.Local_Impressao;
			data.Nao_Exibir_no_Cardapio = this.Nao_Exibir_no_Cardapio;
			data.Nome_Produto = this.Nome_Produto;
			data.Preco_Venda = this.Preco_Venda;
			data.SubGrupo = this.SubGrupo;
			data.Texto_Botao_Tablet = this.Texto_Botao_Tablet;
			data.Texto_Botao_Touch = this.Texto_Botao_Touch;
			return data;
		}
		public function get dataZF():Object{
			return this._data;
		}
		private var _Texto_Botao_Touch:*;
		public function set Texto_Botao_Touch(Texto_Botao_Touch:*):void{
			this._Texto_Botao_Touch = UseUtil.checkData('Texto_Botao_Touch', Texto_Botao_Touch);
			this._data['Texto_Botao_Touch'] = isNull(this._Texto_Botao_Touch);
			this._isSave = true;
		}
		public function get Texto_Botao_Touch():*{ return this._Texto_Botao_Touch; }
		
		private var _Local_Impressao:*;
		public function set Local_Impressao(Local_Impressao:*):void{
			this._Local_Impressao = UseUtil.checkData('Local_Impressao', Local_Impressao);
			this._data['Local_Impressao'] = this._Local_Impressao;
			this._isSave = true;
		}
		public function get Local_Impressao():*{ return this._Local_Impressao; }
		
		private var _Descricao_Produto:*;
		public function set Descricao_Produto(Descricao_Produto:*):void{
			this._Descricao_Produto = UseUtil.checkData('Descricao_Produto', Descricao_Produto);
			this._data['Descricao_Produto'] = isNull(this._Descricao_Produto);
			this._isSave = true;
		}
		public function get Descricao_Produto():*{ return this._Descricao_Produto; }
		
		private var _Texto_Botao_Tablet:*;
		public function set Texto_Botao_Tablet(Texto_Botao_Tablet:*):void{
			this._Texto_Botao_Tablet = UseUtil.checkData('Texto_Botao_Tablet', Texto_Botao_Tablet);
			this._data['Texto_Botao_Tablet'] = isNull(this._Texto_Botao_Tablet);
			this._isSave = true;
		}
		public function get Texto_Botao_Tablet():*{ return this._Texto_Botao_Tablet; }
		
		private var _Preco_Venda:*;
		public function set Preco_Venda(Preco_Venda:*):void{
			this._Preco_Venda = UseUtil.checkData('Preco_Venda', Preco_Venda);
			this._data['Preco_Venda'] = isNull(this._Preco_Venda);
			this._isSave = true;
		}
		public function get Preco_Venda():*{ return this._Preco_Venda; }
		
		private var _Nao_Exibir_no_Cardapio:*;
		public function set Nao_Exibir_no_Cardapio(Nao_Exibir_no_Cardapio:*):void{
			this._Nao_Exibir_no_Cardapio = UseUtil.checkData('Nao_Exibir_no_Cardapio', Nao_Exibir_no_Cardapio);
			this._data['Nao_Exibir_no_Cardapio'] = isNull(this._Nao_Exibir_no_Cardapio);
			this._isSave = true;
		}
		public function get Nao_Exibir_no_Cardapio():*{ return this._Nao_Exibir_no_Cardapio; }
		
		private var _SubGrupo:*;
		public function set SubGrupo(SubGrupo:*):void{
			this._SubGrupo = UseUtil.checkData('SubGrupo', SubGrupo);
			this._data['SubGrupo'] = isNull(this._SubGrupo);
			this._isSave = true;
		}
		public function get SubGrupo():*{ return this._SubGrupo; }
		
		private var _Nome_Produto:*;
		public function set Nome_Produto(Nome_Produto:*):void{
			this._Nome_Produto = UseUtil.checkData('Nome_Produto', Nome_Produto);
			this._data['Nome_Produto'] = isNull(this._Nome_Produto);
			this._isSave = true;
		}
		public function get Nome_Produto():*{ return this._Nome_Produto; }
		
		private var _Codigo_Produto:*;
		public function set Codigo_Produto(Codigo_Produto:*):void{
			this._Codigo_Produto = UseUtil.checkData('Codigo_Produto', Codigo_Produto);
			this._data['Codigo_Produto'] = this._Codigo_Produto;
			this._isSave = true;
		}
		public function get Codigo_Produto():*{ return this._Codigo_Produto; }
		
		private var _Grupo:*;
		public function set Grupo(Grupo:*):void{
			this._Grupo = UseUtil.checkData('Grupo', Grupo);
			this._data['Grupo'] = isNull(this._Grupo);
			this._isSave = true;
		}
		public function get Grupo():*{ return this._Grupo; }
		
	}
}