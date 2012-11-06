UseMarkerToggle = {
	//----------------------------------
	//  useMarkerToggle
	//----------------------------------
	/**
	 * Construtor da classe
	 */
	useMarkerToggle : function() {
		//------------------------------------------------------------------
		//
		//  private
		//
		//------------------------------------------------------------------
		//----------------------------------
		//  _attribute
		//----------------------------------
		/**
		 * Metodos e atributos privados
		 */
		var _attribute = 100, _color = "#000000", _name = "UseMarkerToggle", _description = "", _cidade = "São Paulo", _map = null;
		var _categories = null;
		//----------------------------------
		//  _defaults
		//----------------------------------
		/**
		 * Atributos privados defaults
		 */
		_defaults = {
			animatePadding : 60,
			defaultPadding : 10,
			evenColor : '#ccc',
			color : '#eee',
		};

		//------------------------------------------------------------------
		//
		//  public
		//
		//------------------------------------------------------------------
		//----------------------------------
		//  attribute
		//----------------------------------
		/**
		 * Metodos e atributos privados
		 */
		this.attribute = 500;
		this.name = 'UseMarkerToggle';

		//----------------------------------
		//  init
		//----------------------------------
		/**
		 *  Metodo inicializador executado quando a classe é criada.
		 *  @param value Parametro do metodo
		 *  @return UseMarkerToggle
		 */
		this.init = function() {
			///alert('UseCLASS');

			//var useService = UseJS.start('UseService');
			//var useService = UseLoad('UseService');

			//alert('colorCLASS:'+this.color());
			//alert('colorSERVICE:'+UseService.test('SERVICE STATIC'));

			//Configura o atributo privado quando a classe é criada
			this.attribute = {
				attributeA : 'valueA',
				attributeB : _attribute,
				name : _name,
				mapa : _map
			};

			Use.extend(_defaults, this.attribute);

			this.defaults = _defaults;
		};
		//----------------------------------
		//  toggleCategory
		//----------------------------------
		/**
		 * Filtra os marcadores que apresentam categorias
		 *
		 * @param type: Recebe o tipo de categoria a ser ou não exibido.
		 *
		 * @return void
		 */
		this.toggleCategory = function(type, uiMaps) {
			_categories = uiMaps.getCategories();
			for(var i = 0; i < _categories[type].markers.length; i++) {
				//Verifica a atual visibilidade do marcador
				if(!_categories[type].markers[i].getVisible()) {
					_categories[type].markers[i].setVisible(true);
				} else {
					_categories[type].markers[i].setVisible(false);
				}
			}
		};
		return this;
	},
	//------------------------------------------------------------------
	//
	//  Constants
	//
	//------------------------------------------------------------------
	TEST : 'test',

	//------------------------------------------------------------------
	//
	//  Methods static
	//
	//------------------------------------------------------------------
	test : function(value) {
		//Static || instanciado
		//return UseMarkerToggle.start().test(object);
		alert(value);
	},
	start : function() {
		//Cria instância da UseMarkerToggle
		if(!UseMarkerToggle.instance) {
			UseMarkerToggle.instance = new this.useMarkerToggle();
			UseMarkerToggle.instance.init();
		}
		return UseMarkerToggle.instance;
	},
	create : function() {
		//Cria instância da UseMarkerToggle
		UseMarkerToggle.instance = new this.useMarkerToggle();
		UseMarkerToggle.instance.init();
		return UseMarkerToggle.instance;
	}
};

//----------------------------------
//  Plugins
//----------------------------------
/**
 *  Extendedo jQuery como plugin de classe.
 */
(function(Use) {
})(DevDoo, window, document);
