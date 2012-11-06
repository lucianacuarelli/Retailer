UseClientGeocoder = {
	//----------------------------------
	//  useClientGeocoder
	//----------------------------------
	/**
	 * Construtor da classe
	 */
	useClientGeocoder : function() {
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
		var _name = "UseClientGeocoder", _description = "Geocodifica as informações passadas.", _map = null, _positions = null;
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
			color : '#eee'
		};
		//----------------------------------
		//  prepareGeocode
		//----------------------------------
		/**
		 *Prepara a mensagem, substituindo as tags referentes ao useGeocode.
		 */
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
		//  prepareData
		//----------------------------------
		/**
		 *Prepara a mensagem, substituindo as tags referentes ao data.
		 **/
		prepareData = function(markItem, stData, message) {
			var tag = stData.substr(6, stData.length - 7);
			var regExp = new RegExp(stData, 'ig');

			//Verifica se o data não está nulo
			if(markItem.data) {
				//Verifica se o data possui a propriedade fornecida
				if(markItem.data.hasOwnProperty(tag)) {
					message = message.replace(regExp, markItem.data[tag]);
				} else {
					message = message.replace(regExp, "");
				}
			} else {
				message = message.replace(regExp, "");
			}
			return message;
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
			//Verifica existência de callback no flex
			parent.UseFX().addressInformations(geoCode);
		};
		//----------------------------------
		//  showGeocode
		//----------------------------------
		/**
		 * Passa as informações do marcador clicado para o Flex.
		 */
		showGeocode = function(geoCode) {
			parent.UseFX().itemClicked(geoCode);
		};
		//----------------------------------
		//  addMarker
		//----------------------------------
		/**
		 * Adiciona marcador no mapa.
		 */
		addMarker = function(map, results, markItem, icon, message, drawCircle, data, infoWindowOptions,center) {
		    //UseDebug.p(results);
		    
			//Verifica se deve centralizar no marcador
			if(center){
				//Atualiza o centro do mapa para o resultado obtido
				map.setCenter(results[0].geometry.location);
				map.setZoom(17);
			}
		
			//Evento disparado para passar todos os endereços encontrados
			parent.UseFX().showResults(results);

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
					arrowPosition : 10,
					arrowStyle : 0,
					maxWidth : infoWindowOptions.maxWidth
				});
			} else {
				//Janela de informações
				var infoWindow = new google.maps.InfoWindow({
					maxWidth : 250
				});
			}

			var useGeocode = UseLoad('UseGeocode');
			//UseDebug.p(useGeocode);
			var geocode = useGeocode.generateUseGeocode(results);
			
			//Verifica se existe formato padrão de mensagem
			if(!message) {
				message = '<b>Endereço:</b>' + results[0].formatted_address;
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
							message = prepareData(markItem, stData, message);
						} else {
							message = prepareGeocode(geocode, stData, message);
						}
					}
				}
			}

			markItem.useGeocode = geocode;

			//Verifica se o ícone possui data
			if(markItem.data) {
				//Verifica se existe ícone pré-definido no data
				if(markItem.data.icon) {
					icon = markItem.data.icon;
				} else {
					//Verifica se existe categorias
					if(_categories) {
						//Verifica se existe ícone pré-definido na categoria
						if(_categories[markItem.data.type].icon) {
							icon = _categories[markItem.data.type].icon;
						}
					}
				}
			}
			//Adiciona marcador ao mapa na posição desejada
			var marker = new google.maps.Marker({
				map : map,
				position : results[0].geometry.location,
				icon : icon
			});

			//Verifica se existem categorias e data
			if(_categories && markItem.data) {
				//Adiciona o marcador na categoria especificada
				_categories[markItem.data.type].markers.push(marker);
			}

			//----------------------------------
			//  onMarkerClick
			//----------------------------------
			/**
			 * Evento disparado quando um marcador é clicado.
			 */
			var onMarkerClick = function() {
				showGeocode(markItem);
				var marker = this;
				var latLng = marker.getPosition();
				infoWindow.setContent(message);

				//Fecha infoWindow abertas anteriormente
				closeInfos();
				infoWindow.open(map, marker);
				//Deixa a lista em ordem para fechá-la no próximo evento
				_infos[0] = infoWindow;
			};
			//Adiciona eventos para exibir a janela de informações do marcador
			google.maps.event.addListener(marker, 'click', onMarkerClick);

			//Verifica se deve desenhar um círculo em volta do marcador
			if(drawCircle) {
				var useRadiusCircle = UseLoad('UseRadiusCircle');
				useRadiusCircle.drawCircle(map, marker, results[0].geometry.location, data.radius, data.fillColor, data.strokeColor);
			}

			//Passa as informações geocodificadas do endereço para fora do evento da Google
			addressInformations(geocode);
			//Dispara evento para informar que um marcador foi criado
			var event = document.createEvent("Event");
			event.initEvent("markerCreate", true, true);
			event.foo = marker;
			document.dispatchEvent(event);
		}
		//------------------------------------------------------------------
		//
		//  public
		//
		//------------------------------------------------------------------
		//----------------------------------
		//  attribute
		//----------------------------------
		/**
		 * Metodos e atributos públicos.
		 */
		this.attribute = 500;
		this.nameX = 'UseClientGeocoder';
		this.positions = null;
		//----------------------------------
		//  init
		//----------------------------------
		/**
		 *  Metodo inicializador executado quando a classe é criada.
		 *  @param value Parametro do metodo
		 *  @return UseClientGeocoder
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
				mapa : _map,
				categories : _categories
			};

			Use.extend(_defaults, this.attribute);

			this.defaults = _defaults;
		};
		//----------------------------------
		//  doGeocode
		//----------------------------------
		var geocoder = new google.maps.Geocoder();
		/**
		 * Inicializa uma solicitação de geocodificação.
		 *
		 * @return void
		 */
		this.doGeocode = function(map, markItem, icon, message, drawCircle, data, infoWindowOptions,center) {
		    var address;
			//Verifica a tipagem do valor recebido
			if( typeof (markItem) == "object") {
				address = markItem.position;
			} else {
				address = markItem;
			}
			//Realiza geocofigicação
			geocoder.geocode({
				'address' : address
			}, function(results, status) {
				//Verifica se a geocodificação foi um sucesso
				if(status == google.maps.GeocoderStatus.OK) {
					//Verifica o tipo de endereço informado
					if(results[0].types == 'postal_code') {
					    var resultLatlng = results[0].geometry.location;
						var position;
						position = { "position" : resultLatlng.lat() + ', ' + resultLatlng.lng()};
						
						geocoder.geocode({
							'address' : position.position
						}, function(results, status) {
							addMarker(map, results, markItem, icon, message, drawCircle, data, infoWindowOptions,center);
						})
					} else {
						addMarker(map, results, markItem, icon, message, drawCircle, data, infoWindowOptions, center);
					}
				} else {
					//Envia status de erro para a aplicação flex
					parent.UseFX().geocodeFail(status);
					//alert("A Geocodificação falhou pela seguinte razão: " + status);
				}
			});
		};
		//----------------------------------
		//  addEvent
		//----------------------------------
		/**
		 * NOTDOC.
		 */
		var addEvent = function(el, ev, fn) {
			if(el.addEventListener) {
				el.addEventListener(ev, fn, false);
			} else if(el.attachEvent) {
				el.attachEvent('on' + ev, fn);
			} else {
				el['on' + ev] = fn;
			}
		};
		//----------------------------------
		//  getCategories
		//----------------------------------
		/**
		 * Obtém as categorias.
		 */
		this.getCategories = function() {
			return _categories;
		};
		//----------------------------------
		//  setCategories
		//----------------------------------
		/**
		 * Define as categorias.
		 */
		this.setCategories = function(categories) {
			_categories = categories;
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
		//return UseClientGeocoder.start().test(object);
		alert(value);
	},
	start : function() {
		//Cria instância da UseClientGeocoder
		if(!UseClientGeocoder.instance) {
			UseClientGeocoder.instance = new this.useClientGeocoder();
			UseClientGeocoder.instance.init();
		}
		return UseClientGeocoder.instance;
	},
	create : function() {
		//Cria instância da UseClientGeocoder
		UseClientGeocoder.instance = new this.useClientGeocoder();
		UseClientGeocoder.instance.init();
		return UseClientGeocoder.instance;
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
