package devdoo.fx
{
	import de.webProgrammer.utils.PhpDate;
	
	import flash.sampler.NewObjectSample;
	
	import mx.collections.ArrayCollection;
	import mx.controls.Alert;
	import mx.formatters.DateFormatter;
	
	import spark.components.TextArea;

	//---------------------------------
	//  UseDate
	//----------------------------------
	/**
	 * NOTDOC
	 * 
	 */
	public class UseDate
	{
		//---------------------------------
		//  _maxHour
		//----------------------------------
		private var _maxHour:Number;
		/**
		 * Valor máximo de horas.
		 */
		public function get maxHour():Number
		{
			return _maxHour;
		}

		/**
		 * @private
		 */
		public function set maxHour(value:Number):void
		{
			_maxHour = value;
		}
		
		//---------------------------------
		//  _maxMinute
		//----------------------------------
		private var _maxMinute:Number;
		/**
		 * Valor máximo de minutos.
		 */
		public function get maxMinute():Number
		{
			return _maxMinute;
		}

		/**
		 * @private
		 */
		public function set maxMinute(value:Number):void
		{
			_maxMinute = value;
		}
		
		//---------------------------------
		//  _minHour
		//----------------------------------
		private var _minHour:Number;
		/**
		 * Valor mínimo de horas.
		 */
		public function get minHour():Number
		{
			return _minHour;
		}

		/**
		 * @private
		 */
		public function set minHour(value:Number):void
		{
			_minHour = value;
		}

		//---------------------------------
		//  _minMinute
		//----------------------------------
		private var _minMinute:Number;
		/**
		 * Valor mínimo de minutos.
		 */
		public function get minMinute():Number
		{
			return _minMinute;
		}

		/**
		 * @private
		 */
		public function set minMinute(value:Number):void
		{
			_minMinute = value;
		}

		//---------------------------------
		//  _minTime
		//----------------------------------
		private var _minTime:String;
		/**
		 * Tempo mínimo.
		 */
		public function get minTime():String
		{
			return _minTime;
		}

		/**
		 * @private
		 */
		public function set minTime(value:String):void
		{
			_minTime = value;
		}

		//---------------------------------
		//  _restHour
		//----------------------------------
		private var _restHour:Number;
		/**
		 * Horas restantes.
		 */
		public function get restHour():Number
		{
			return _restHour;
		}
		
		/**
		 * @private
		 */
		public function set restHour(value:Number):void
		{
			_restHour = value;
		}

		//---------------------------------
		//  _restMinute
		//----------------------------------
		private var _restMinute:Number;
		/**
		 * Minutos restantes.
		 */
		public function get restMinute():Number
		{
			return _restMinute;
		}

		/**
		 * @private
		 */
		public function set restMinute(value:Number):void
		{
			_restMinute = value;
		}

		//---------------------------------
		//  _durationHour
		//----------------------------------
		private var _durationHour:Number;
		/**
		 * Valor de horas de duração da tarefa.
		 */
		public function get durationHour():Number
		{
			return _durationHour;
		}

		/**
		 * @private
		 */
		public function set durationHour(value:Number):void
		{
			_durationHour = value;
		}

		//---------------------------------
		//  _durationMinute
		//----------------------------------
		private var _durationMinute:Number;
		/**
		 * Minutos de duração da tarefa.
		 */
		public function get durationMinute():Number
		{
			return _durationMinute;
		}
		
		/**
		 * @private
		 */
		public function set durationMinute(value:Number):void
		{
			_durationMinute = value;
		}

		//---------------------------------
		//  _descriptionTask
		//----------------------------------
		private var _descriptionTask:String;
		/**
		 * Descrição da tarefa.
		 */
		public function get descriptionTask():String
		{
			return _descriptionTask;
		}

		/**
		 * @private
		 */
		public function set descriptionTask(value:String):void
		{
			_descriptionTask = value;
		}

		//---------------------------------
		//  _text
		//----------------------------------
		private var _text:String
		/**
		 * Descrição completa da atividade.
		 */
		public function get text():String
		{
			return _text;
		}
		
		/**
		 * @private
		 */
		public function set text(value:String):void
		{
			_text = value;
		}

		//---------------------------------
		//  UseDate
		//----------------------------------
		private var _phpDate:PhpDate;
		/**
		 * NOTDOC
		 * 
		 */
		public function UseDate(date:* = null)
		{
			//var date:Date = new Date(unix);
			this._phpDate = new PhpDate(date);
		}
		
		//---------------------------------
		//  format
		//----------------------------------
		/**
		 * Configura o fomato de data e retorna a data configurada
		 */
		public function format(f:String):String
		{
			return this._phpDate.format(f);
		}
		

		//---------------------------------
		//  checkMaxMinute
		//----------------------------------
		/**
		 * Verifica se a quantidade de minutos máximas disponíveis diariamente é
		 * superior ou igual a 60.  Atualiza o horário para o padrão.
		 * 
		 * @return void
		 */
		public function checkMaxMinute():void
		{
			if(this.maxMinute > 59)
			{
				/** Duração em minutos do tempo máximo disponível.*/
				var duration:Number;
				
				//Converte todo o tempo em minutos.
				duration		= (this._maxHour * 60) + this._maxMinute;
				//Retira a quantidade de horas presentes na quantidade total de minutos
				this._maxHour	= int(duration/60);
				//Quantidade de minutos
				this._maxMinute	= duration%60;
				
				//Atualiza a quantidade de horas restantes
				this._restHour= this._maxHour;
			}
				//Atualiza a quantidade de minutos restantes
				this._restMinute= this._maxMinute;
		}
		
		//---------------------------------
		//  checkDurationMinute
		//----------------------------------
		/**
		 * Verifica se a quantidade de minutos de duração da tarefa é superior 
		 * ou igual a 60. Atualiza o horário para o padrão.
		 * 
		 * @return void
		 */
		public function checkDurationMinute():void
		{
			if(this.durationMinute > 59)
			{
				/** Duração em minutos do tempo de duração da tarefa.*/
				var duration:Number;
				
				//Converte todo o tempo em minutos.
				duration				= (this._durationHour * 60) + this._durationMinute;
				//Retira a quantidade de horas presentes na quantidade total de minutos
				this._durationHour		= int(duration/60);
				//Quantidade de minutos
				this._durationMinute	= duration%60;
			}
		}
		
		//---------------------------------
		//  convertHourToMinute
		//----------------------------------
		/**
		 * Converte a hora para minuto
		 * 
		 * @return void
		 */
		public function convertHourToMinute(hour:String):Number
		{
			var arHour:Array = hour.split(":");
			var minute:Number = Number((arHour[0] * 60) + Number(arHour[1]));
			
			return minute;
		}
		
		//---------------------------------
		//  convertMinuteToHour
		//----------------------------------
		/**
		 * Converte a hora para minuto
		 * 
		 * @return void
		 */
		public function convertMinuteToHour(totalMinutes:Number):Array
		{
			var hour:Number = Math.round(totalMinutes / 3600);
			var minute:Number = Math.round((totalMinutes / 3600) * 60);
			
			var arHour:Array = new Array();
				arHour["hour"] = hour;
				arHour["minute"] = minute;
			
			return arHour;
		}
		
		//---------------------------------
		//  calculateDuration
		//----------------------------------
		/**
		 * Calcula a duração de tempo entre duas horas
		 * 
		 * @return void
		 */
		public function calculateDuration(timeStart:String, timeEnd:String, hourFormat:Boolean = true):String
		{
			var arHourStart:Array = timeStart.split(":");
			var totalMinutesStart:Number = Number((arHourStart[0] * 60) + Number(arHourStart[1]));

			var arHourEnd:Array = timeEnd.split(":");
			var totalMinutesEnd:Number = Number((arHourEnd[0] * 60) + Number(arHourEnd[1]));
			
			var totalMinutesDuration:Number = 0;
			
			//Verifica se o tempo final é maior
			if(totalMinutesEnd > totalMinutesStart)
				totalMinutesDuration = Number(totalMinutesEnd - totalMinutesStart);
			else 
				totalMinutesDuration = Number(totalMinutesStart - totalMinutesEnd);
				
			//Verifica se deve retornar no formato de hora
			if(hourFormat)
			{
				var hour:Number = Math.floor(totalMinutesDuration / 60);
				var minute:Number = Number(totalMinutesDuration - (hour * 60));
				
				return hour +":"+ minute;
			}
			else {
				return String(totalMinutesDuration);
			}
			
		}
		
		//---------------------------------
		//  validateTask
		//----------------------------------
		/**
		 * Verifica se o tempo da tarefa é menor que o tempo restante. Se for 
		 * menor, a tarefa será realizada. BUG
		 * 
		 * @return void
		 */
		public function validateTask():void
		{
			Alert.yesLabel = "Sim";
			Alert.noLabel = "Não";
			Alert.cancelLabel = "Cancelar";
			
			/** Duração da tarefa em minutos. */
			var timeDuration:Number
			/** Tempo disponível restante em minutos.*/
			var timeRest:Number;
			
			//Hora restante maior que duração da tarefa
			if (this.restHour > this.durationHour )
			{
				this._text 		= this.descriptionTask + "\t" + this.durationHour + ":" + this.durationMinute + "\n";	
				timeDuration	= this.durationHour * 60 + this.durationMinute;
				timeRest 		= (this.restHour	 * 60) + this.restMinute - timeDuration;
				this.restHour	= int(timeRest/60);
				this.restMinute	= timeRest%60;
			}
			else
			{
				//Hora restante igual a duração da tarefa
				if (this.restHour == this.durationHour )
				{
					//Minutos restante maior ou igual aos minutos da tarefa 
					if (this.restMinute >= this.durationMinute)
					{
						this._text		= this.descriptionTask + "\t" + this.durationHour + ":" + this.durationMinute + "\n";	
						timeDuration	= this.durationHour * 60 + this.durationMinute;
						timeRest 		= (this.restHour	 * 60) + this.restMinute - timeDuration;
						this.restHour	= int(timeRest/60);
						this.restMinute	= timeRest%60;
					}
					else
						Alert.show("Tempo de duração da atividade é maior que o tempo disponível");
				}	
				else
					Alert.show("Tempo de duração da atividade é maior que o tempo disponível");
			}
		}
		
		
		//----------------------------------
		//  unixToDate
		//----------------------------------    	
		/**
		 *  Converte data e hora recebida no formato unix em formato de data e hora, minuto e segundo brasileira
		 *  @return void  
		 */		 
		public static function unixToDate(timestamp:Number):String{
			
			var tempDate:Date = new Date(timestamp * 1000);
			
			var month:String = String( UseUtil.zeroPad((tempDate.getMonth()+1), 2) );
			var day:String = String( UseUtil.zeroPad((tempDate.getDate()), 2) );
			var hours:String = String( UseUtil.zeroPad((tempDate.getHours()), 2) );
			var minutes:String = String( UseUtil.zeroPad((tempDate.getMinutes()), 2) );
			var seconds:String = String( UseUtil.zeroPad((tempDate.getSeconds()), 2) );
			
			var dateBR:String = day+'/'+month+'/'+tempDate.getFullYear()+' '+hours+':'+minutes;
			
			return dateBR;
		}
		
		//----------------------------------
		//  mysqlToDate
		//----------------------------------    	
		/**
		 *  Converte data e hora recebida da base de dados em data e hora no formato flex
		 *  @return void  
		 */		 
		public static function mysqlToDate(date:String):Date
		{
			var year:String = date.substring(0,4);
			var month:String = date.substring(5,7);
			var day:String = date.substring(8,10);
			var hour:String = date.substring(11,13);
			var minute:String = date.substring(14,16);
			var second:String = date.substring(17,20);
			
			var newDate:Date = new Date();
			newDate.setFullYear(int(year), int(month)-1, int(day));
			newDate.setHours(int(hour), int(minute), int(second),0);
			
			return newDate; //new Date(int(year), int(month)-1, int(day), int(hour), int(minute), int(second));
		}
		
		//----------------------------------
		//  dateToMysql
		//----------------------------------    	
		/**
		 *  Converte data e hora recebida da base de dados em data e hora no formato flex
		 *  @return String "0000-00-00 00:00:00"  
		 */		 
		/*public static function dateToMysql(date:String = null):String{
			
			var tempDate:Date = new Date();
			
			if(date)
				tempDate = new Date(date);
			
			
			var month:String = String( UseUtil.zeroPad((tempDate.getMonth()+1), 2) );
			var day:String = String( UseUtil.zeroPad((tempDate.getDate()), 2) );
			var hours:String = String( UseUtil.zeroPad((tempDate.getHours()), 2) );
			var minutes:String = String( UseUtil.zeroPad((tempDate.getMinutes()), 2) );
			var seconds:String = String( UseUtil.zeroPad((tempDate.getSeconds()), 2) );
			
			var timestamp:String;
			timestamp = tempDate.getFullYear()+'-'+month+'-'+day+' '+hours+':'+minutes+':'+seconds;
			
			return timestamp;
		}*/
		
		//----------------------------------
		//  dateNowBR
		//----------------------------------    	
		/**
		 *  Retorna a data e hora atual no formato brasileiro
		 *  @return String "0000-00-00 00:00:00"  
		 */		 
		public static function dateNowBR():String{
			
			var tempDate:Date = new Date();
			
			var month:String = String( UseUtil.zeroPad((tempDate.getMonth()+1), 2) );
			var day:String = String( UseUtil.zeroPad((tempDate.getDate()), 2) );
			var hours:String = String( UseUtil.zeroPad((tempDate.getHours()), 2) );
			var minutes:String = String( UseUtil.zeroPad((tempDate.getMinutes()), 2) );
			var seconds:String = String( UseUtil.zeroPad((tempDate.getSeconds()), 2) );
			
			var timestamp:String;
			timestamp = day+'/'+month+'/'+tempDate.getFullYear()+'-'+hours+':'+minutes;
			
			return timestamp;
		}
		
		//----------------------------------
		//  dateNowMysql
		//----------------------------------    	
		/**
		 *  Retorna a data e hora atual no formato datetime
		 *  @return String "0000-00-00 00:00:00"  
		 */		 
		public static function dateNowMysql():String{
			
			var tempDate:Date = new Date();
			
			var month:String = String( UseUtil.zeroPad((tempDate.getMonth()+1), 2) );
			var day:String = String( UseUtil.zeroPad((tempDate.getDate()), 2) );
			var hours:String = String( UseUtil.zeroPad((tempDate.getHours()), 2) );
			var minutes:String = String( UseUtil.zeroPad((tempDate.getMinutes()), 2) );
			var seconds:String = String( UseUtil.zeroPad((tempDate.getSeconds()), 2) );
			
			var timestamp:String;
			
			timestamp = tempDate.getFullYear()+'-'+month+'-'+day+' '+hours+':'+minutes+':'+seconds;
			
			return timestamp;
		}
		
		//----------------------------------
		//  dateUnix
		//----------------------------------    	
		/**
		 *  Retorna a data e hora atual no formato uniix
		 *  @return String "1234567890"  
		 */		 
		public static function dateUnix():int{
			var tempDate:Date = new Date();
			//NOTFINAL
			return 00000000000;
		}
		
		//----------------------------------
		//  formatDateIn
		//----------------------------------
		/**
		 *  Formata datas de entrada convertendo para o formato que deve ser msotrado na tela portugues br
		 *
		 *  @return void
		 */	
		public static function formatDateIn(date:String = null):String
		{
			var dateString:String = "";
			
			//Veridica se recebeu uma data
			if(date)
			{
				var arDate:Array = date.split("-");
				
				dateString = arDate[2] +"/"+ arDate[1] +"/"+ arDate[0];
			}
			else{
				var dateFormatter:DateFormatter = new DateFormatter();
				dateFormatter.formatString = "DD/MM/YYYY";
				dateString = dateFormatter.format(new Date());
			}
			
			return dateString; 
		}
		
		//----------------------------------
		//  formatDateOut
		//----------------------------------
		/**
		 *  Formata datas de saida convertendo para o formato que deve ser gravado na base de dados
		 *
		 *  @return void
		 */			
		public static function formatDateOut(date:String = null):String
		{
			var dateString:String = "";
			
			//Veridica se recebeu uma data
			if(date)
			{
				var arDate:Array = date.split("/");
				
				dateString = arDate[2] +"-"+ arDate[1] +"-"+ arDate[0];
			}
			else{
				var dateFormatter:DateFormatter = new DateFormatter();
				dateFormatter.formatString = "YYYY-MM-DD";
				dateString = dateFormatter.format(new Date());
			}
			
			return dateString; 
		}	
		
		
		
		
		//----------------------------------
		//  formatTime
		//----------------------------------
		/**
		 *  Converte milesegundos e horas, minutos e segundo 
		 *  http://www.jeffdepascale.com/index.php/flash/time-format-from-seconds-in-as3/
		 *  @return void
		 */			
		public static const HOURS:uint = 2;
		public static const MINUTES:uint = 1;
		public static const SECONDS:uint = 0;
		
		public static function formatTime(time:Number, detailLevel:uint = 2):String {
			var intTime:uint = Math.floor(time);
			var hours:uint = Math.floor(intTime/ 3600);
			var minutes:uint = (intTime - (hours*3600))/60;
			var seconds:uint = intTime -  (hours*3600) - (minutes * 60);
			var hourString:String = detailLevel == HOURS ? hours + ":":"";
			var minuteString:String = detailLevel >= MINUTES ? ((detailLevel == HOURS && minutes <10 ? "0":"") + minutes + ":"):"";
			var secondString:String = ((seconds < 10 && (detailLevel >= MINUTES)) ? "0":"") + seconds;
			return hourString + minuteString + secondString;
		}
		
	}
}