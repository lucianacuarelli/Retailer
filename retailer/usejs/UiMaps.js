UiMaps = {
	//----------------------------------
	//  uiMaps
	//----------------------------------
	/**
	 * Construtor da classe
	 */
	uiMaps : function() {
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
		var _positions = new Array();
		var _selectedItem = null;
		var _message = null;
		var _messageAlternative = null;
		var _posGeoCode = 0;
		var _markersArray = [];

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
		//  onMapReady
		//----------------------------------
		var map;
		/**
		 * Evento disparado quando um marcador é clicado.
		 */
		_onMapReady = function() {
			//Define a latitude e a longitude inicial do mapa
			var latlng = new google.maps.LatLng(-15.46470445,-47.5547041);
			//Configura as opções do mapa
			var myOptions = {
				zoom : 5,
				center : latlng,
				disableDoubleClickZoom : !(_enableDoubleClickZoom),
				draggable : _enableDragabble,
				keyboardShortcuts : _enableControlByKeyboard,
				mapTypeControl : _enableMapTypeControl,
				navigationControl : _enableNavigationControl,
				scaleControl : _enableScaleControl,
				scrollwheel : _enableScrollWheelZoom,
				streetViewControl : _enableStreetViewControl,
				mapTypeId : google.maps.MapTypeId.ROADMAP
			}
			//Seta as opções no mapa
			//map = new google.maps.Map(document.getElementById(_showMap), myOptions);
			map = new google.maps.Map(document.getElementById("map"), myOptions);
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
			if(_infos.length > 0) {
				//Remove a InfoWindow do marcador
				_infos[0].set("marker", null);
				//Fecha a InfoWindow
				_infos[0].close();
				//Limpa a lista de InfoWindows
				_infos.length = 0;
			}
		};
		//---------------------------------
		//  preparePositions
		//----------------------------------
		/**
		 * Prepara configurações de endereço para realizar visualização no
		 * mapa.
		 *
		 * @return void
		 */
		preparePositions = function(value, data) {
			data = data || null;

			//Verifica se o valor recebido é um objeto ou um String
			if( typeof (value) == "string") {
				_positions.push({
					"position" : value,
					"data" : data
				});
			} else if( typeof (value) == "object") {
				for(var i = 0; i < value.length; i++) {
					//Verifica se o valor recebido é um objeto ou um String
					if( typeof (value[i]) == "string") {
						_positions.push({
							"position" : value[i],
							"data" : data
						});
					} else {
						_positions.push({
							"position" : value[i].position,
							"data" : data
						});
					}
				}
			}
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
		this.attribute = 'Componente de mapa';
		this.nameX = 'UiMaps';

		//----------------------------------
		//  init
		//----------------------------------
		/**
		 *  Metodo inicializador executado quando a classe é criada.
		 *  @param value Parametro do metodo
		 *  @return UiMaps
		 */
		this.init = function() {

			///alert('UseCLASS');

			//var useService = UseJS.start('UseService');
			//var useService = UseLoad('UseService');

			//alert('colorCLASS:'+this.color());
			//alert('colorSERVICE:'+UseService.test('SERVICE STATIC'));

			//Configura o atributo privado quando a classe é criada
			this.attribute = {
				positions : _positions,
				selectedItem : _selectedItem,
				message : _message,
				positions : _positions
			};

			Use.extend(_defaults, this.attribute);

			this.defaults = _defaults;
		};
		//----------------------------------
		//  address
		//----------------------------------
		/**
		 * Configura um ou mais endereços de marcadores que devem ser
		 * utilizados na visualização do mapa.
		 */
		this.address = function(value) {
			preparePositions(value);
			return this;
		};
		//----------------------------------
		//  categories
		//----------------------------------
		var _categories = null;
		/**
		 * Lista de categorias de marcadores. A lista de categorias deve ser
		 * fornecida pelo usuário.
		 **/
		this.categories = function(value) {
			_categories = value;
			return this;
		};
		//----------------------------------
		//  clearMarkers
		//----------------------------------
		/**
		 * Limpa todas as sobreposições do mapa.
		 */
		this.clearMarkers = function() {
			//Verifica se existem marcadores adicionados no mapa
			if(_markersArray) {
				for(var i = 0; i <= _markersArray.length - 1; i++) {
					//Remove o marcador do mapa
					_markersArray[i].setMap(null);
				}
				_markersArray = [];
				_markersArray.length = 0;
			}
			_onMapReady();
		};
		//----------------------------------
		//  clearPositions
		//----------------------------------
		/**
		 * Deleta todos os marcadores do array e todas as suas referências..
		 */
		this.clearPositions = function() {
			_positions = [];
		};
		//----------------------------------
		//  distanceBetween
		//----------------------------------
		/**
		 * Calcula a distância entre dois pontos.
		 */
		this.distanceBetween = function(latA, lngA, latB, lngB) {
			//------------------------------------------------------------------------------------------
			//	Fórmula de cálculo de distância entre pontos
			//	http://upload.wikimedia.org/wikipedia/en/math/6/5/1/651ef570b354027518346392443f27e7.png
			//  Fórmula de Harvesine
			//	http://en.wikipedia.org/wiki/Haversine_formula
			//-------------------------------------------------------------------------------------------
			//Raio da terra
			var earthRadius = 6371;
			// km
			//Distância entre latitudes
			var distanceLat = ((latB - latA) * Math.PI) / 180;
			//Distância entre longitudes
			var distanceLng = ((lngB - lngA) * Math.PI) / 180;
			//Latitude inicial em radianos

			//NOTDOC - QUADRADO
			var a = Math.sin(distanceLat / 2) * Math.sin(distanceLat / 2) + Math.sin(distanceLng / 2) * Math.sin(distanceLng / 2) * Math.cos((latA * Math.PI) / 180) * Math.cos((latB * Math.PI) / 180);
			//Distância angular em radianos
			var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
			//Distãncia entre as coordenadas geográficas
			var distance = earthRadius * c;
			
			parent.UseFX().distance(distance);
		};
		//----------------------------------
		//  connect
		//----------------------------------
		/**
		 * Inicializa uma solicitação de geocodificação.
		 */
		this.connect = function(center) {
			center = center || false;
			totalGeoCode = _positions.length;
			_posGeoCode = 0;
			_useClientGeocoder = UseLoad('UseClientGeocoder');
			//Define as categorias
			_useClientGeocoder.setCategories(_categories);
			//Evento disparado quando um marcador é inserido no mapa
			document.addEventListener("markerCreate", markerCreate, false);

			//Realiza geocodificação
			for(var i = 0; i < _positions.length; i++) {
				_useClientGeocoder.doGeocode(map, _positions[i], _icon, _message, null, null, _infoWindowOptions,center);
			}
		};
		//----------------------------------
		//  data
		//----------------------------------
		/**
		 * Configura um ou mais "endereços" de marcadores que devem ser
		 * utilizados na visualização do mapa. O "endereço" pode ser informado
		 * como o endereço físico(Rua, Avenida, Estado, Cidade, País, CEP) ou
		 * endeço geográfico(Latitude, Longitude). É possível passar informações
		 * adicionais associadas ao endereço informado.
		 *
		 * @param Recebe uma lista com os endereços e as informações
		 * adicionais.
		 */
		this.data = function(arData) {
			for(var i = 0; i < arData.length; i++) {
				//Verifica se existe position
				if(arData[i].hasOwnProperty("position")) {
					preparePositions(arData[i].position, arData[i]);
				} else {
					throw new Error("data :: Nenhuma posição de endereço foi configurada em arData[i].position .");
				}
			}
			return this;
		};
		//----------------------------------
		//  directions
		//----------------------------------
		var _directions;
		//var _callBack = null;
		/**
		 * Um objeto Directions se comunica com os servidores do Google para
		 * obter rotas entre dois ou mais pontos de referência. As respostas
		 * para tais solicitações contêm uma polilinha codificada que
		 * representa as rotas e as etapas formatadas em HTML a serem seguidas.
		 */
		this.direction = function(from, to, waypoints, panel, mode,suppressMarkers, draggable) {
		    waypoints = waypoints || null;
			draggable = draggable || false;
			suppressMarkers = suppressMarkers || false;
			panel = panel || null;
			_onMapReady();

			var useDirections = UseLoad('UseDirections');
			useDirections.searchDirections(map, from, to, waypoints, _icon, panel, mode,suppressMarkers, draggable);
			return this;
		};
		//----------------------------------
		//  drawCircle
		//----------------------------------
		/**
		 * Desenha um, ou dois, círculo(s) no(s) endereço(s) informado(s).
		 *
		 * @param latA Latitude do círculo A.
		 * @param lngA Longitude do círculo A.
		 * @param radiusA Raio do círculo A.
		 * @param fillColorA Cor de preenchimento do círculo A.
		 * @param strokeColorA Cor da linha do círculo A.
		 * @param latB Latitude do círculo B.
		 * @param lngB Longitude do círculo B.
		 * @param radiusB Raio do círculo B.
		 * @param fillColorB Cor de preenchimento do círculo B.
		 * @param strokeColorB Cor da linha do círculo B.
		 *
		 * @return void
		 */
		this.drawCircle = function(latA, lngA, radiusA, fillColorA, strokeColorA, latB, lngB, radiusB, fillColorB, strokeColorB) {
			_onMapReady();
			latLngA = String(latA + "," + lngA);
			latLngB = String(latB + "," + lngB);

			var dataA = {
				'radius' : radiusA,
				'fillColor' : fillColorA,
				'strokeColor' : strokeColorA
			};
			var distance = 0;
			_useClientGeocoder = UseLoad('UseClientGeocoder');
			var useRadiusCircle;
			//Verifica se existe ícone padrão
			_useClientGeocoder.doGeocode(map, latLngA, _icon, _message, true, dataA, _infoWindowOptions);

			//Verifica se existe círculo B
			if(latLngB) {
				var dataB = {
					'radius' : radiusB,
					'fillColor' : fillColorB,
					'strokeColor' : strokeColorB
				};
				//Verifica se existe ícone padrão
				_useClientGeocoder.doGeocode(map, latLngB, _icon, _message, true, dataB, _infoWindowOptions);
				useRadiusCircle = UseLoad('UseRadiusCircle');
				//Calcula a distância entre os pontos
				distance = useRadiusCircle.distanceBetweenTwoPoints(latA, lngA, latB, lngB);
			}
		};
		//----------------------------------
		//  enableControlByKeyboard
		//----------------------------------
		var _enableControlByKeyboard = true;
		/**
		 * Se "false", impede o mapa de ser controlado pelo teclado. Os atalhos do
		 * teclado estão ativados por padrão.
		 */
		this.enableControlByKeyboard = function(value) {
			_enableControlByKeyboard = value;
			_onMapReady();
			return this;
		};
		//----------------------------------
		//  enableDoubleClickZoom
		//----------------------------------
		var _enableDoubleClickZoom = true;
		/**
		 * Ativa o zoom e a centralização com clique duplo. Ativado por padrão.
		 */
		this.enableDoubleClickZoom = function(value) {
			_enableDoubleClickZoom = value;
			_onMapReady();
			return this;
		};
		//----------------------------------
		//  enableDragabble
		//----------------------------------
		var _enableDragabble = true;
		/**
		 * Se "false", impede que o mapa seja arrastado. O recurso de arrastar está
		 * ativado por padrão.
		 */
		this.enableDragabble = function(value) {
			_enableDragabble = value;
			_onMapReady();
			return this;
		};
		//----------------------------------
		//  enableMapTypeControl
		//----------------------------------
		var _enableMapTypeControl = false;
		/**
		 * O estado inicial ativado/desativado do controle do tipo de mapa.
		 */
		this.enableMapTypeControl = function(value) {
			_enableMapTypeControl = value;
			_onMapReady();
			return this;
		};
		//----------------------------------
		//  enableNavigationControl
		//----------------------------------
		var _enableNavigationControl = true;
		/**
		 * O estado inicial ativado/desativado do controle do tipo de mapa.
		 */
		this.enableNavigationControl = function(value) {
			_enableNavigationControl = value;
			_onMapReady();
			return this;
		};
		//----------------------------------
		//  enableScaleControl
		//----------------------------------
		var _enableScaleControl = false;
		/**
		 * O estado inicial ativado/desativado do controle de escala.
		 */
		this.enableScaleControl = function(value) {
			_enableScaleControl = value;
			_onMapReady();
			return this;
		};
		//----------------------------------
		//  enableScrollWheelZoom
		//----------------------------------
		var _enableScrollWheelZoom = true;
		/**
		 * Se "false", desativa o zoom por meio da roda de rolagem no mapa.
		 * A roda de rolagem está ativada por padrão..
		 */
		this.enableScrollWheelZoom = function(value) {
			_enableScrollWheelZoom = value;
			_onMapReady();
			return this;
		};
		//----------------------------------
		//  enableStreetViewControl
		//----------------------------------
		var _enableStreetViewControl = true;
		/**
		 * O estado ativado/desativado inicial do controle Pegman do Street View.
		 */
		this.enableStreetViewControl = function(value) {
			_enableStreetViewControl = value;
			_onMapReady();
			return this;
		};
		//----------------------------------
		//  getCategories
		//----------------------------------
		/**
		 * Obtém as categorias.
		 */
		this.getCategories = function() {
			return _useClientGeocoder.getCategories();
			;
		};
		//----------------------------------
		//  icon
		//----------------------------------
		var _icon = null;
		/**
		 * Indica o ícone padrão a ser usado nos marcadores. Obs, caso exista
		 * alguma especificação de ícones no data ou no categories, eles que
		 * serão usados. Para obter um posicionamento ideal, ajuste a posição
		 * de centro x, y de seu novo marcador.
		 */
		this.icon = function(url, x, y) {
			_icon = {
				"url" : url,
				"x" : x,
				"y" : y
			};
			return this;
		};
		//----------------------------------
		//  infoWindowOptions
		//----------------------------------
		var _infoWindowOptions = null;
		/**
		 * Configura a mensagem a ser exibida quando um marcador for selecionado.
		 */
		//this.infoWindowOptions = function(colors, ratios, alpha, matrix, cornerRadius, borderColor, borderWidth) {
		this.infoWindowOptions = function(colors, cornerRadius, borderColor, borderWidth,maxWidth, hideCloseButton, disableAutoPan) {
			_infoWindowOptions = {
				"colors" : colors,
				//"alphas": alphas,
				//"ratios": ratios,
				//"matrix": matrix,
				"cornerRadius" : cornerRadius,
				"borderColor" : borderColor,
				"borderWidth" : borderWidth,
				"maxWidth" : maxWidth,
				"hideCloseButton" : hideCloseButton,
				"disableAutoPan" : disableAutoPan
			};
			return this;
		};
		//----------------------------------
		//  latLng
		//----------------------------------
		/**
		 * Indica a latitude e longitude que devem ser utilizadas na consulta
		 * de endereço.
		 *
		 * @param lat: Latitude.
		 * @param lng: Longitude.
		 *
		 */
		this.latLng = function(value) {
			preparePositions(value);
			return this;
		};
		//----------------------------------
		//  latLngList
		//----------------------------------
		/**
		 * Indica uma lista de latitude e longitude que deve ser utilizada
		 * na consulta de endereço.
		 *
		 * @param value: Lista de latitude e longitude. Prefira o padrão {"lat":,
		 * "lng":}
		 */
		this.latLngList = function(value) {
			for(var i = 0; i < value.length; i++) {
				_positions.push({
					"position" : value[i].lat + ', ' + value[i].lng,
					"data" : null
				});
			}
			return this;
		};
		//----------------------------------
		//  message
		//----------------------------------
		/**
		 * Configura a mensagem a ser exibida quando um marcador for selecionado.
		 */
		this.message = function(value) {
			_message = value;
			return this;
		};
		//----------------------------------
		//  messageAlternative
		//----------------------------------
		/**
		 * Configura a mensagem alternativa ser exibida quando um marcador for selecionado.
		 * Usada no UseRoute.
		 */
		this.messageAlternative = function(value) {
			_messageAlternative = value;
		};
		//---------------------------------
		//  route
		//----------------------------------
		/**
		 * Adiciona marcadores relacionados.
		 */
		this.route = function(from, to, iconA, iconB, iconAOver, iconBOver,drawCircle) {
			iconA = iconA || null;
			iconB = iconB || null;
			iconAOver = iconAOver || null;
			iconBOver = iconBOver || null;
			drawCircle = drawCircle || false;
			var useRoute = UseLoad('UseRoute');
			useRoute.route(map, from, to, iconA, iconB, iconAOver, iconBOver, _infoWindowOptions, _message, _messageAlternative, drawCircle);
		};
		//----------------------------------
		//  show
		//----------------------------------
		var _showMap;
		/**
		 * Configura um ou mais endereços de marcadores que devem ser
		 * utilizados na visualização do mapa.
		 */
		this.show = function(value) {
			//_showMap = Use("#" + value);
			_showMap = value;
			_onMapReady();
			return this;
		};
		//---------------------------------
		//  setCenter
		//----------------------------------
		/**
		 * Define o centro do mapa.
		 */
		this.setCenter = function(value) {
			var latLng = new google.maps.LatLng(value[0], value[1]);
			map.setCenter(latLng);
			//Verifica se o zoom foi informado
			/*if(value[3]) {
				 map.setZoom(5);
			 }*/
		}
		//---------------------------------
		//  setZoom
		//----------------------------------
		/**
		 * Define o valor de zoom do mapa.
		 */
		this.setZoom = function(value) {
			map.setZoom(value);
		}
		//---------------------------------
		//  showSteps
		//----------------------------------
		var _useDirections = UseLoad('UseDirections');
		/**
		 * Coloca um balão na posição no mapa do Step clicado.
		 *
		 * @return void
		 */
		this.showSteps = function(lat, lng, message) {
			//Exibe um balão na posição do passo.(latLng/Html)
			_useDirections.showMessage(map,lat,lng, message);
		}
		//----------------------------------
		//  toggleCategory
		//----------------------------------
		/**
		 * Habilita ou desabilita os marcadores correspondentes a categoria
		 * filtrada.
		 *
		 * @param type: Recebe o tipo de item a ser ou não exibido.
		 */
		this.toggleCategory = function(type) {
			var useMarkerToggle = UseLoad('UseMarkerToggle');
			useMarkerToggle.toggleCategory(type, this);
		};
		//----------------------------------
		//  zipCode
		//----------------------------------
		/**
		 * Indica o código postal que deve ser utilizado na consulta de endereço.
		 */
		this.zipCode = function(value) {
			//UseDebug.p(value);
			preparePositions(value);
			return this;
		};
		//------------------------------------------------------------------
		//
		//  events
		//
		//------------------------------------------------------------------
		//----------------------------------
		// infoCreate
		//----------------------------------
		/**
		 * Evento disparado quando um marcador for criado.
		 */
		infoCreate = function(event) {
			//Fecha infoWindow abertas anteriormente
			closeInfos();
			//Deixa a lista em ordem para fechá-la no próximo evento
			_infos[0] = event.foo;	
			//UseDebug.p(event.foo);
		};
		//----------------------------------
		//  markerCreate
		//----------------------------------
		/**
		 * Evento disparado quando um marcador for criado.
		 */
		markerCreate = function(event) {
			_markersArray.push(event.foo);
			_posGeoCode++;
			//Verifica se todos os marcadores já foram populados no mapa
			if(_posGeoCode >= _positions.length) {
				var mapEvent = document.createEvent("Event");
				mapEvent.initEvent("mapComplete", true, true);
				//Dispara evento que informa que o mapa foi populado completamente
				document.dispatchEvent(mapEvent);
			}
		};
		//----------------------------------
		//  mapComplete
		//----------------------------------
		/**
		 * Evento disparado quando o último marcador for posicionado no mapa.
		 */
		mapComplete = function() {
			//Limpa a lista de Positions
			uiMaps.clearPositions();
			//NOTFINAL
			//Centraliza em Brasília
			//map.setCenter(-15.7801482,-47.9291698);
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
		//return UiMaps.start().test(object);
		alert(value);
	},
	start : function() {
		//Cria instância da UiMaps
		if(!UiMaps.instance) {
			UiMaps.instance = new this.uiMaps();
			UiMaps.instance.init();
		}
		return UiMaps.instance;
	},
	create : function() {
		//Cria instância da UiMaps
		UiMaps.instance = new this.uiMaps();
		UiMaps.instance.init();
		return UiMaps.instance;
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
