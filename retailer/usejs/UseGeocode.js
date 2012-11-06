UseGeocode = {
	//----------------------------------
	//  useGeocode
	//----------------------------------
	/**
	 * Construtor da classe
	 */
	useGeocode : function() {
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
		var _name = "UseGeocode",  _map = null, _positions = null;
		var directionsDisplay;
		//Serviço usado para calcular rotas entre dois ou mais lugares.
		var directionsService = new google.maps.DirectionsService();
		var currentDirections = null;
		var oldDirections = [];

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
		this.name = 'UseGeocode';
		this.positions = null;

		//----------------------------------
		//  init
		//----------------------------------
		/**
		 *  Metodo inicializador executado quando a classe é criada.
		 *  @param value Parametro do metodo
		 *  @return UseGeocode
		 */
		this.init = function() {

			///alert('UseCLASS');

			//var useService = UseJS.start('UseService');
			//var useService = UseLoad('UseService');

			//alert('colorCLASS:'+this.color());
			//alert('colorSERVICE:'+UseService.test('SERVICE STATIC'));

			//Configura o atributo privado quando a classe é criada
			this.attribute = {
				name : _name,
				mapa : _map
			};

			Use.extend(_defaults, this.attribute);

			this.defaults = _defaults;
		};
		//----------------------------------
		//  generateUseGeocode
		//----------------------------------
		/**
		 * NOTDOC.
		 */
		this.generateUseGeocode = function(results) {
            //UseDebug.p(results);
			var address = null;
			var city = null;
			var country = null;
			var countryCode = null;
			var latitute = null;
			var longitude = null;
			var neighborhood = null;
			var postalCode = null;
			var state = null;
			var street = null;
			
			address = results[0].formatted_address;
			var resultLatlng = results[0].geometry.location;
			
			latitute = resultLatlng.lat();
			longitude = resultLatlng.lng()
			
			for( i = 0; i < results[0].address_components.length; i++) {
				var type = results[0].address_components[i].types[0];
				if(type == 'locality') {
					city = results[0].address_components[i].long_name;
				} else {
					if(type == 'country') {
						country = results[0].address_components[i].long_name;
						countryCode = results[0].address_components[i].short_name;
					} else {
						if(type == 'postal_code') {
							postalCode = results[0].address_components[i].long_name;
						} else {
							if(type == 'administrative_area_level_1') {
								state = results[0].address_components[i].long_name;
							} else {
								if(type == 'sublocality') {
									neighborhood = results[0].address_components[i].long_name;
								} else {
									if(type == 'route') {
										street = results[0].address_components[i].long_name;
									}
								}
							}
						}
					}
				}
			}

			var useGeocode = {
				'address' : address,
				'city' : city,
				'country' : country,
				'countryCode' : countryCode,
				'latitute' : latitute.toFixed(6),
				'longitude' : longitude.toFixed(6),
				'neighborhood' : neighborhood,
				'postalCode' : postalCode,
				'state' : state,
				'street' : street
			};
			
			return useGeocode;
		};
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
		//return UseGeocode.start().test(object);
		alert(value);
	},
	start : function() {
		//Cria instância da UseGeocode
		if(!UseGeocode.instance) {
			UseGeocode.instance = new this.useGeocode();
			UseGeocode.instance.init();
		}
		return UseGeocode.instance;
	},
	create : function() {
		//Cria instância da UseGeocode
		UseGeocode.instance = new this.useGeocode();
		UseGeocode.instance.init();
		return UseGeocode.instance;
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
