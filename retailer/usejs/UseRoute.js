UseRoute = {
	//----------------------------------
	//  useRoute
	//----------------------------------
	/**
	 * Construtor da classe
	 */
	useRoute : function() {
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
		var _name = "UseRoute", _description = "", _map = null, _positions = null;
		var _markerA = null;
		var _markerB = null;
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
			if(_infos.length > 0) {
				//Remove a InfoWindow do marcador
				_infos[0].set("marker", null);
				//Fecha a InfoWindow
				_infos[0].close();
				//Limpa a lista de InfoWindows
				_infos.length = 0;
			}
		};
		//----------------------------------
		//  addressInformations
		//----------------------------------
		/**
		 * Passa as informações do último marcador adicionado ao mapa para o Flex.
		 */
		addressInformations = function(geoCode) {
			//parent.UseFX().addressInformations(geoCode);
		};
		//----------------------------------
		//  showGeocode
		//----------------------------------
		/**
		 * Passa as informações do marcador clicado para o Flex.
		 */
		showGeocode = function(geoCode) {
			//parent.UseFX().itemClicked(geoCode);
		};
		//----------------------------------
		//  prepareGeocode
		//----------------------------------
		/**
		 *Prepara a mensagem, substituindo as tags referentes ao useGeocode.
		 **/
		prepareGeocode = function(useGeocode, stData, message) {
			var tag = stData.substr(12, stData.length - 13);
			var regExp = new RegExp(stData, 'ig');
			
			//Verifica se o useGeocode possui a propriedade fornecida
			if(useGeocode[tag]) {
				//Verifica se a tag em questão está nula
				if(useGeocode[tag] == null) {
					message = message.replace(regExp, "");
				} else {
					message = message.replace(regExp, useGeocode[tag]);
				}
			} else {
				message = message.replace(regExp, "");
			}
			return message;
		};
		//----------------------------------
		//  addMarker
		//----------------------------------
		/**
		 * Adiciona marcador no mapa.
		 */
		addMarker = function(map, resultsA, resultsB, iconA, iconB, iconAOver, iconBOver, infoWindowOptions, message, messageAlternative,drawCircle) {
		    //Atualiza o centro do mapa para o resultado obtido
			//map.setCenter(resultsA[0].geometry.location);

			//Verifica se a janela de informação foi personalizada
			if(infoWindowOptions) {
				//Janela de informações
				var infoWindow = new InfoBubble({
					map : map,
					shadowStyle : 1,
					padding : 10,
					backgroundColor : infoWindowOptions.colors,
					borderRadius : infoWindowOptions.cornerRadius,
					arrowSize : 15,
					borderWidth : infoWindowOptions.borderWidth,
					borderColor : infoWindowOptions.borderColor,
					disableAutoPan : infoWindowOptions.disableAutoPan,
					hideCloseButton : infoWindowOptions.hideCloseButton,
					maxWidth : infoWindowOptions.maxWidth,
					arrowPosition : 10,
					arrowStyle : 0
				});
			} else {
			  //Janela de informações
                var infoWindow = new google.maps.InfoWindow({
                    maxWidth : 250,
                    disableAutoPan :true
                });
			}

			var useGeocode = UseLoad('UseGeocode');
			var geocodeA = useGeocode.generateUseGeocode(resultsA);
			var geocodeB = useGeocode.generateUseGeocode(resultsB);
			geocodeA.storeAddress = geocodeB.address;
			
			//Verifica se existe formato de mensagem pré-definido
			if(!message) {
				var messageA = '<b>Endereço:</b>' + resultsA[0].formatted_address;
			} else {
				//Expressão regular para buscar por tags
				var regExp = new RegExp(/{.*}/ig);
				//Lista de "comandos" no html fornecido pelo usuário
				var arMessage = message.split(" ");

				for(var i = 0; i < arMessage.length; i++) {
					//Verifica se existe algum padrão no comando verificado
					if(regExp.test(arMessage[i])) {
						var stData = arMessage[i].match(regExp)[0];
						//Verifica se o tipo de dado a ser fornecido pertence ao data
						if(stData.substr(1, 4) == "data") {
						} else { 
							message = prepareGeocode(geocodeA, stData, message);
						}
					}
				}
				var messageA = message;
			}
			//Verifica se existe formato de mensagem alternativa pré-definido
			if(!messageAlternative) {
				var messageB = '<b>Endereço:</b>' + resultsB[0].formatted_address;
			} else {
				//Expressão regular para buscar por tags
				var regExp = new RegExp(/{.*}/ig);
				//Lista de "comandos" no html fornecido pelo usuário
				var arMessage = messageAlternative.split(" ");

				for(var i = 0; i < arMessage.length; i++) {
					//Verifica se existe algum padrão no comando verificado
					if(regExp.test(arMessage[i])) {
						var stData = arMessage[i].match(regExp)[0];
						//Verifica se o tipo de dado a ser fornecido pertence ao data
						if(stData.substr(1, 4) == "data") {
						} else {
							messageAlternative = prepareGeocode(geocodeB, stData, messageAlternative);
						}
					}
				}
				var messageB = messageAlternative;
			}

			var markerA = new google.maps.Marker({
				map : map,
				position : resultsA[0].geometry.location,
				icon : iconA
			});
			var markerB = new google.maps.Marker({
				map : map,
				position : resultsB[0].geometry.location,
				icon : iconB
			});
			
			//Verifica se deve desenhar um círculo em volta do marcador
			if(drawCircle) {
				var useRadiusCircle = UseLoad('UseRadiusCircle');
				var radius = 2/10;
				useRadiusCircle.drawCircle(map, markerB, resultsB[0].geometry.location, radius, '#0000FF', '#000000');
			}

			//----------------------------------
			//  onMouseOver
			//----------------------------------
			/**
			 * Evento disparado quando o mouse passa em cima de um marcador.
			 */
			var onMouseOver = function() {
				//showGeocode(geocodeA);
				var marker = this;
				
				//Verifica se URL de ícone padrão Over foi fornecida
				if(iconAOver) {
					markerA.setIcon(iconAOver);
				}
				//Verifica se URL de ícone padrão Over foi fornecida
				if(iconBOver) {
					markerB.setIcon(iconBOver);
				}
				var latLng = marker.getPosition();
				
				//Verifica qual foi o marcador selecionado
				if(marker == markerA) {
					infoWindow.setContent(messageA);
				} else {
					infoWindow.setContent(messageB);
				}

				//Fecha infoWindow abertas anteriormente
				closeInfos();
				infoWindow.open(map, marker);
				//Deixa a lista em ordem para fechá-la no próximo evento
				_infos[0] = infoWindow;
				//Dispara evento para informar que uma infoWindow foi aberta
				var event = document.createEvent("Event");
				 event.initEvent("infoCreate", true, true);
				 event.foo = infoWindow;
				 document.dispatchEvent(event);
			};
			//----------------------------------
			//  onMouseOut
			//----------------------------------
			/**
			 * Evento disparado quando o mouse sai de cima de um marcador.
			 */
			var onMouseOut = function() {
				//Fecha infoWindow abertas anteriormente
				closeInfos();
				
				//Verifica se URL de ícone padrão foi fornecida
				if(iconA) {
					markerA.setIcon(iconA);
				}
				//Verifica se URL de ícone padrão foi fornecida
				if(iconB) {
					markerB.setIcon(iconB);
				}
			};
			//Adiciona eventos para exibir a janela de informações do marcador
			google.maps.event.addListener(markerA, 'mouseover', onMouseOver);
			//Adiciona eventos para exibir a janela de informações do marcador
			google.maps.event.addListener(markerA, 'mouseout', onMouseOut);
			//Adiciona eventos para exibir a janela de informações do marcador
			google.maps.event.addListener(markerB, 'mouseover', onMouseOver);
			//Adiciona eventos para exibir a janela de informações do marcador
			google.maps.event.addListener(markerB, 'mouseout', onMouseOut);

			//Passa as informações geocodificadas do endereço para fora do evento da Google
			addressInformations(geocodeA);
			
			//Dispara evento para informar que um marcador foi criado
			var event = document.createEvent("Event");
			 event.initEvent("markerCreate", true, true);
			 event.foo = markerA;
			 document.dispatchEvent(event);
			var event = document.createEvent("Event");
			 event.initEvent("markerCreate", true, true);
			 event.foo = markerB;
			 document.dispatchEvent(event);
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
		this.nameX = 'UseRoute';
		this.positions = null;
		this.directionsSteps = null;

		//----------------------------------
		//  init
		//----------------------------------
		/**
		 *  Metodo inicializador executado quando a classe é criada.
		 *  @param value Parametro do metodo
		 *  @return UseRoute
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
				description : _description,
				mapa : _map
			};
			Use.extend(_defaults, this.attribute);
			this.defaults = _defaults;
		};
		//----------------------------------
		//  route
		//----------------------------------
		var geocoder = new google.maps.Geocoder();
		/**
		 * Configurações iniciais do mapa.
		 */
		this.route = function(map, from, to, iconA, iconB, iconAOver, iconBOver, infoWindowOptions, message, messageAlternative,drawCircle) {
			//Geocodificação do marcador A
			geocoder.geocode({
				'address' : from
			}, function(resultsA, status) {
				//Verifica se a geocodificação foi um sucesso
				if(status == google.maps.GeocoderStatus.OK) {
					//Geocodificação do marcador B
					geocoder.geocode({
						'address' : to
					}, function(resultsB, status) {
						//Verifica se a geocodificação foi um sucesso
						if(status == google.maps.GeocoderStatus.OK) {
							addMarker(map, resultsA, resultsB, iconA, iconB, iconAOver, iconBOver, infoWindowOptions, message, messageAlternative,drawCircle);
						} else {
							//Envia status de erro para a aplicação flex
							parent.UseFX().geocodeFail(status);
							//alert("A Geocodificação falhou pela seguinte razão: " + status);
						}
					});
				} else {
					//Envia status de erro para a aplicação flex
					parent.UseFX().geocodeFail(status);
					//alert("A Geocodificação falhou pela seguinte razão: " + status);
				}
			});
		}
		//----------------------------------
		//  calcRoute
		//----------------------------------
		/**
		 * Inicializa solicitação de rota.
		 */
		function calcRoute(from, to, mode, map) {
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
				travelMode : mode
			};

			//Envia uma solicitação de pesquisa de rota.
			directionsService.route(request, function(response, status) {
				//Verifica se uma rota foi encontrada
				if(status == google.maps.DirectionsStatus.OK) {
					directionsRenderer.setDirections(response);
					directionsSteps = response.routes[0].legs[0];

					showSteps(directionsSteps.steps);

					//Verifica se existe callBack
					if(_callBack) {
						_callBack(directionsSteps.steps);
					}
				}
			});
		};

		//----------------------------------
		//  showMessage
		//----------------------------------
		/**
		 * Coloca um marcador no Step clicado.
		 */
		this.showMessage = function(latitute, longitude, html) {
			alert(latitute + '   *   ' + longitude);
			var latLng = new google.maps.LatLng(latitute, longitude);
			var infoWindow = new google.maps.sInfoWindow;
			infoWindow.setContent(html);
			infoWindow.setPosition(latLng).open(map);
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
		//return UseRoute.start().test(object);
		alert(value);
	},
	start : function() {
		//Cria instância da UseRoute
		if(!UseRoute.instance) {
			UseRoute.instance = new this.useRoute();
			UseRoute.instance.init();
		}
		return UseRoute.instance;
	},
	create : function() {
		//Cria instância da UseRoute
		UseRoute.instance = new this.useRoute();
		UseRoute.instance.init();
		return UseRoute.instance;
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
