UseService = { 
		//----------------------------------
		//  useService
		//----------------------------------	
		/**
		 * Construtor da classe
		 */
		useService:function() {
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
			var _attribute = 100,
				_color = "#000000",
			
			//----------------------------------
			//  _defaults
			//----------------------------------	
			/**
			 * Atributos privados defaults
			 */
			_defaults = {
                animatePadding: 60,
                defaultPadding: 10,
                evenColor: '#ccc',
                color: '#FF0000',
            },			
			
			//----------------------------------
			//  method
			//----------------------------------
			/**
			 *  Metodo que pode ser executado externamente. 
			 *  Se passar parametro o metodo configura o atributo privado,
			 *  caso contrário tenta retornar a configuração já existente no mesmo.
			 *  @param value Paramêtro do método
			 *  @return UseService
			 */		
			_method = function(value)
			{
				if(value)
					_attribute = value;
				else{
					value = null;
					return _attribute;
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
			this.attribute = 500;
				
			//----------------------------------
			//  init
			//----------------------------------
			/**
			 *  Metodo inicializador executado quando a classe é criada. 
			 *  @param value Parametro do metodo
			 *  @return UseService
			 */		
			this.init = function(){
				alert('USESERVICE');
				//Configura o atributo privado quando a classe é criada
				this.attribute = {attributeA:'valueA', attributeB:_attribute};
				this.defaults = _defaults;
			};			

			//----------------------------------
			//  method
			//----------------------------------
			/**
			 *  Metodo que pode ser executado externamente. 
			 *  Se passar parametro o metodo configura o atributo privado,
			 *  caso contrário tenta retornar a configuração já existente no mesmo.
			 *  @param value Paramêtro do método
			 *  @return UseService
			 */		
			this.method = function(value)
			{
				if(value)
					this.attribute = value;
				else{
					value = null;
					return this.attribute;
				}		
				
				value = null;
				return this;
			};
			//----------------------------------
			//  color
			//----------------------------------
			/**
			 *  Metodo que pode ser executado externamente. 
			 *  Se passar parametro o metodo configura o atributo privado,
			 *  caso contrário tenta retornar a configuração já existente no mesmo.
			 *  @param value Paramêtro do método
			 *  @return UseService
			this.color = function(value)
			{
				value = value || null;
				if(value)
					_defaults.color = value;
				else
					return _defaults.color;		
					
				return this;
			};
			 */		
			this.color = function(value)
			{
				if(value) 
					_defaults.color = value; 
				else{
					value = null; 
					return _defaults.color;
				}
						
				value = null;	
				return this;				
			};
			
		    return this;
		},
		//------------------------------------------------------------------
		//
		//  Constants
		//
		//------------------------------------------------------------------
		TEST:'test',
		
		//------------------------------------------------------------------
		//
		//  Methods static
		//
		//------------------------------------------------------------------
		test : function(value) {
			//Static || instanciado
			//return UseClass.start().test(object);
			
			alert(value);
		},
		
		//------------------------------------------------------------------
		//
		//  Methods static
		//
		//------------------------------------------------------------------
		start:function()
		{
			//Cria instância da UseService
			if (!UseService.instance){
	        	UseService.instance = new this.useService();
	        	UseService.instance.init();
	        }
	    	return UseService.instance;
		},
		create:function()
		{
			//Cria instância da UseService
        	UseService.instance = new this.useService();
	    	UseService.instance.init();
	    	return UseService.instance;
		}
	};