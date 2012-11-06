UseRadiusCircle = {
	//----------------------------------
	//  useRadiusCircle
	//----------------------------------
	/**
	 * Construtor da classe
	 */
	useRadiusCircle : function() {
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
		var _attribute = 100, _color = "#000000", _name = "UseRadiusCircle", _description = "", _cidade = "São Paulo", _map = null,

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
		this.nameX = 'LU';

		//----------------------------------
		//  init
		//----------------------------------
		/**
		 *  Metodo inicializador executado quando a classe é criada.
		 *  @param value Parametro do metodo
		 *  @return UseRadiusCircle
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
				description : _description,
				mapa : _map
			};

			Use.extend(_defaults, this.attribute);

			this.defaults = _defaults;
		};
		//----------------------------------
		//  drawCircle
		//----------------------------------
		/**
		 * Adiciona polígono na posição indicada.
		 */
		this.drawCircle = function(map, marker, latLng, radius, fillColor,strokeColor) {
			//NOTFINAL - Verificar necessidade de permitir marcadores dragáveis
			//marker.draggable = true;

			//Adiciona um círculo no mapa.
			var circle = new google.maps.Circle({
				map : map,
				radius : radius * 1000,
				fillColor: fillColor,
				strokeColor: strokeColor
			});

			//Funde o marcador com o círculo
			circle.bindTo('center', marker, 'position');
			
			var event = document.createEvent("Event");
			 event.initEvent("markerCreate", true, true);
			 event.foo = circle;
			 document.dispatchEvent(event);
		};
		//----------------------------------
		//  distanceBetweenTwoPoints
		//----------------------------------
		/**
		 * Calcula a distância (em km) de duas coordenadas geográficas.
		 *
		 * @param lat0 Latitude inicial.
		 * @param lng0 Longitude inicial.
		 * @param lat1 Latitude destino.
		 * @param lng1 Longitude destino.
		 *
		 * @return <b>d</b>: Retorna a distância entre as coordenadas apresentadas
		 */
		this.distanceBetweenTwoPoints = function(latA, lngA, latB, lngB) {
			//------------------------------------------------------------------------------------------
			//	Fórmula de cálculo de distância entre pontos
			//	http://upload.wikimedia.org/wikipedia/en/math/6/5/1/651ef570b354027518346392443f27e7.png
			//  Fórmula de Harvesine
			//	http://en.wikipedia.org/wiki/Haversine_formula
			//-------------------------------------------------------------------------------------------
			//Raio da terra
			var earthRadius  = 6371; // km
			//Distância entre latitudes
			var distanceLat = ((latB-latA)* Math.PI) / 180;
			//Distância entre longitudes
			var distanceLng = ((lngB-lngA)* Math.PI) / 180;
			//Latitude inicial em radianos
			
			//NOTDOC - QUADRADO 
			var a = Math.sin(distanceLat/2) * Math.sin(distanceLat/2) + Math.sin(distanceLng/2) * Math.sin(distanceLng/2) * Math.cos((latA * Math.PI)/180) * Math.cos((latB * Math.PI)/180); 
			//Distância angular em radianos
			var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
			//Distãncia entre as coordenadas geográficas
			var distance = earthRadius * c;

			return distance.toFixed(3);
		}
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
		//return UseRadiusCircle.start().test(object);
		alert(value);
	},
	start : function() {
		//Cria instância da UseRadiusCircle
		if(!UseRadiusCircle.instance) {
			UseRadiusCircle.instance = new this.useRadiusCircle();
			UseRadiusCircle.instance.init();
		}
		return UseRadiusCircle.instance;
	},
	create : function() {
		//Cria instância da UseRadiusCircle
		UseRadiusCircle.instance = new this.useRadiusCircle();
		UseRadiusCircle.instance.init();
		return UseRadiusCircle.instance;
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
