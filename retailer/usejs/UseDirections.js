UseDirections = {
	//----------------------------------
	//  useDirections
	//----------------------------------
	/**
	 * Construtor da classe
	 */
	useDirections : function() {
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
		var _attribute = 100, _color = "#000000", _name = "UseDirections", _description = "Não declarada!", _map = null, _positions = null;
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
		//----------------------------------
		//  closeInfos
		//----------------------------------
		var _infos = [];
		/**
		 * Fecha janelas de informações abertas anteriormente.
		 *
		 * @return void
		 */
		closeInfos = function() {
			//Verifica se existe alguma InfoWindow aberta
			if (typeof _infos[0] !== 'undefined' && _infos[0] !== null) {
				//Remove a InfoWindow do marcador
				_infos[0].set(null);
				//Fecha a InfoWindow
				_infos[0].close();
				//Limpa a lista de InfoWindows
				_infos.length = 0;
			}
		};
		//----------------------------------
		//  showDirectionsResult
		//----------------------------------
		/**
		 * NOTDOC.
		 */
		showDirectionsResult = function(route,steps) {
			parent.UseFX().showDirectionsResult(route,steps);
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
		this.nameX = 'UseDirections';
		this.positions = null;
		this.directionsSteps = null;

		//----------------------------------
		//  init
		//----------------------------------
		/**
		 *  Metodo inicializador executado quando a classe é criada.
		 *  @param value Parametro do metodo
		 *  @return UseDirections
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
				mapa : _map,
			};
			Use.extend(_defaults, this.attribute);
			this.defaults = _defaults;
		};
		//----------------------------------
		//  searchDirections
		//----------------------------------
		/**
		 * Configurações iniciais do mapa.
		 */
		this.searchDirections = function(map, from, to, waypoints, icon, panel, mode, suppressMarkers,draggable) {
			//Instancia um novo objeto DirectionsRenderer
			//O DirectionsRenderer Renderiza rotas recuperadas na forma de um objeto DirectionsResult recuperado do
			//DirectionsService. Essa classe estende MVCObject.

			directionsRenderer = new google.maps.DirectionsRenderer({
				'map' : map,
				'preserveViewport' : true,
				'draggable' : draggable,
				'suppressMarkers' : suppressMarkers
				//'markerOptions' : new google.maps.MarkerOptions({icon: icon})
				//'suppressMarkers' : true
			});

			//Verifica se existe painel
			if(panel) {
				//Este método renderiza as rotas em um <div>. Passe null para remover o conteúdo do painel.
				directionsRenderer.setPanel(document.getElementById(panel.toString()));
			}
			//Evento disparado quando as direções forem mudadas
			google.maps.event.addListener(directionsRenderer, 'directions_changed', function() {
				//Verifica se existe Direção atual
				if(currentDirections) {
					//Adiciona a direção corrente na lista de direções antigas
					oldDirections.push(currentDirections);
					showSteps(currentDirections.routes[0].legs[0].steps);
				}
				currentDirections = directionsRenderer.getDirections();
			});
			//Inicia a solicitação de rota
			calcRoute(from, to,waypoints, mode, map);
		}
		//----------------------------------
		//  calcRoute
		//----------------------------------
		/**
		 * Inicializa solicitação de rota.
		 */
		function calcRoute(from, to, waypoints, mode, map) {
			//Verifica se foi definido um modo de locomoção
			if(mode) {
				switch(mode) {
					case "bicycling":
						mode = google.maps.DirectionsTravelMode.BICYCLING;
						break;
					case "driving":
						mode = google.maps.DirectionsTravelMode.DRIVING;
						break;
					case "walking":
						mode = google.maps.DirectionsTravelMode.WALKING;
						break;
				}
			} else {
				mode = google.maps.DirectionsTravelMode.DRIVING;
			}
			
			var request = {
				origin : from,
				destination : to,
				waypoints: waypoints,
				//optimizeWaypoints: true,
				travelMode : mode
			};

			//Envia uma solicitação de pesquisa de rota.
			directionsService.route(request, function(response, status) {
				//Verifica se uma rota foi encontrada
				if(status == google.maps.DirectionsStatus.OK) {
					directionsRenderer.setDirections(response);
					directionsSteps = response.routes[0].legs[0];
					
					var bounds = response.routes[0].bounds;
			        map.fitBounds(bounds);
			        map.setCenter(bounds.getCenter());
					
					showDirectionsResult(response.routes[0], directionsSteps.steps);
				}
			});
		};

		//----------------------------------
		//  showMessage
		//----------------------------------
		/**
		 * Coloca um marcador no Step clicado.
		 */
		this.showMessage = function(map,lat, lng, html) {
			//Verifica se existe alguma InfoWindow aberta
			if (typeof _infos[0] !== 'undefined' && _infos[0] !== null) {
				//Fecha a InfoWindow
				_infos[0].close();
				//Limpa a lista de InfoWindows
				_infos = [];
			}
			
			var latLng = new google.maps.LatLng(lat, lng);
			var infoWindow = new google.maps.InfoWindow({
				content: html,
       			position: latLng
			});
			
			//Fecha infoWindow abertas anteriormente
			//closeInfos();
			
			infoWindow.open(map);
			//Deixa a lista em ordem para fechá-la no próximo passo
			_infos[0] = infoWindow;
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
		//return UseDirections.start().test(object);
		alert(value);
	},
	start : function() {
		//Cria instância da UseDirections
		if(!UseDirections.instance) {
			UseDirections.instance = new this.useDirections();
			UseDirections.instance.init();
		}
		return UseDirections.instance;
	},
	create : function() {
		//Cria instância da UseDirections
		UseDirections.instance = new this.useDirections();
		UseDirections.instance.init();
		return UseDirections.instance;
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
