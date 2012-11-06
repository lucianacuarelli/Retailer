package devdoo.fx
{
	
	import de.webProgrammer.utils.PhpDate;
	
	import mx.controls.Alert;
	
	import org.casalib.util.DateUtil;
	
	public class UseDate
	{
		//------------------------------------------------------------------
		//
		//  Attributes
		//
		//------------------------------------------------------------------
		//---------------------------------
		//  PhpDate
		//----------------------------------
		/**
		 * NOTDOC
		 */
		private var _phpDate:PhpDate;
		
		//---------------------------------
		// date
		//----------------------------------
		private var _date:Date;
		
		/**
		 * Data com qual a classe está trabalhando.
		 */
		public function get date():Date
		{
			return this._phpDate.date;
		}
		
		/**
		 * @private
		 */
		public function set date(value:Date):void
		{
			this._phpDate.date = value;
		}
		
		//---------------------------------
		//  fullDate
		//----------------------------------
		private var _fullDate:String;
		
		/**
		 * Data completa em texto.
		 */
		public function get fullDate():String
		{
			return _fullDate;
		}
		
		//---------------------------------
		//  year
		//----------------------------------
		private var _year:int;
		
		/**
		 * Ano.
		 */
		public function get year():int
		{
			return _year;
		}
		
		//---------------------------------
		//  months
		//----------------------------------
		private var _month:int;
		
		/**
		 * Mês.
		 */
		public function get month():int
		{
			return _month;
		}
		
		//---------------------------------
		//  weeks
		//----------------------------------
		private var _week:int;
		
		/**
		 * Semana.
		 */
		public function get week():int
		{
			return _week;
		}
		
		//---------------------------------
		//  days
		//----------------------------------
		private var _day:int;
		
		/**
		 * Dia.
		 */
		public function get day():int
		{
			return _day;
		}
		
		//----------------------------------
		//  hour
		//----------------------------------
		private var _hour:int;
		
		/**
		 * Hora.
		 */
		public function get hour():int
		{
			return _hour;
		}
		
		//----------------------------------
		//  minute
		//----------------------------------
		private var _minute:int;
		
		/**
		 * Minuto.
		 */
		public function get minute():int
		{
			return _minute;
		}
		
		//----------------------------------
		//  seconds
		//----------------------------------
		private var _second:int;
		
		/**
		 * Segundo.
		 */
		public function get second():int
		{
			return _second;
		}
		
		//----------------------------------
		//  milliseconds
		//----------------------------------
		private var _millisecond:int;
		
		/**
		 * Millisegundo.
		 */
		public function get millisecond():int
		{
			return _millisecond;
		}
		
		//---------------------------------
		//  totalYears
		//----------------------------------
		private var _totalYears:int;
		
		/**
		 * Quantidade total de anos.
		 */
		public function get totalYears():int
		{
			return _totalYears;
		}
		
		//---------------------------------
		//  totalMonths
		//----------------------------------
		private var _totalMonths:int;
		
		/**
		 * Quantidade total de meses.
		 */
		public function get totalMonths():int
		{
			return _totalMonths;
		}
		
		//---------------------------------
		//  totalWeeks
		//----------------------------------
		private var _totalWeeks:int;
		
		/**
		 * Quantidade total de semanas.
		 */
		public function get totalWeeks():int
		{
			return _totalWeeks;
		}
		
		//---------------------------------
		//  totalDays
		//----------------------------------
		private var _totalDays:int;
		
		/**
		 * NOTDOC.
		 */
		public function get totalDays():int
		{
			return _totalDays;
		}
		
		//----------------------------------
		//  totalHours
		//----------------------------------
		private var _totalHours:int;
		
		/**
		 * Quantidade total de horas.
		 */
		public function get totalHours():int
		{
			return _totalHours;
		}
		
		//----------------------------------
		//  totalMinutes
		//----------------------------------
		private var _totalMinutes:int;
		
		/**
		 * Quantidade total de minutos.
		 */
		public function get totalMinutes():int
		{
			return _totalMinutes;
		}
		
		//----------------------------------
		//  totalSeconds
		//----------------------------------
		private var _totalSeconds:int;
		
		/**
		 * Quantidade total de segundos.
		 */
		public function get totalSeconds():int
		{
			return _totalSeconds;
		}
		
		//----------------------------------
		//  totalMilliseconds
		//----------------------------------
		private var _totalMilliseconds:int;
		
		/**
		 * Quantidade total de millisegundos.
		 */
		public function get totalMilliseconds():int
		{
			return _totalMilliseconds;
		}
		
		//----------------------------------
		//  daysEstimated
		//----------------------------------
		private var _daysEstimated:int;
		
		/**
		 * Quantidade total de millisegundos.
		 */
		public function get daysEstimated():int
		{
			return _daysEstimated;
		}
		
		//----------------------------------
		//  hoursEstimated
		//----------------------------------
		private var _hoursEstimated:int;
		
		/**
		 * Quantidade total de millisegundos.
		 */
		public function get hoursEstimated():int
		{
			return _hoursEstimated;
		}
		
		//----------------------------------
		//  monthsEstimated
		//----------------------------------
		private var _monthsEstimated:int;
		
		/**
		 * Quantidade total de millisegundos.
		 */
		public function get monthsEstimated():int
		{
			return _monthsEstimated;
		}
		
		//----------------------------------
		//  yearsEstimated
		//----------------------------------
		private var _yearsEstimated:int;
		
		/**
		 * Quantidade total de millisegundos.
		 */
		public function get yearsEstimated():int
		{
			return _yearsEstimated;
		}
		
		//----------------------------------
		//  finishDate
		//----------------------------------
		private var _finishDate:String;
		
		/**
		 * Quantidade total de millisegundos.
		 */
		public function get finishDate():String
		{
			return _finishDate;
		}
		
		//----------------------------------
		//  finishDate
		//----------------------------------
		private var _totalTime:int;
		/**
		 * NOTDOC
		 */
		public function get totalTime():int
		{
			return _totalTime;
		}
		
		//----------------------------------
		//  daysTotal
		//----------------------------------
		private var _daysTotal:int = 0;
		
		/** 
		 * NOTDOC
		 * */
		public function get daysTotal():int
		{
			return _daysTotal;
		}
		
		//----------------------------------
		//  notWorkingDay
		//----------------------------------
		private var _notWorkingDay:int = 0;
		
		/** Armazena a quantidade de números de dias não-úteis(Sábado e Domingo,
		 * 	por exemplo. Feriados estão incluídos nos dias não-úteis). 
		 * 	@default 0 */
		public function get notWorkingDay():int
		{
			return _notWorkingDay;
		}
		
		//----------------------------------
		//  workingDay
		//----------------------------------
		private var _workingDay:int = 0;
		
		/** Armazena a quantidade de números de dias úteis. 
		 * 	@default 0 */
		public function get workingDay():int
		{
			return _workingDay;
		}
		
		//---------------------------------
		//  holidaysFound
		//----------------------------------
		private var _holidaysFound:Array;
		
		public function get holidaysFound():Array
		{
			return _holidaysFound;
		}
		
		//---------------------------------
		//  totalSaturdays
		//----------------------------------
		private var _totalSaturdays:int;
		
		/** Armazena a quantidade de Sábados encontrada no intervalo de 
		 * 	tempo*/
		public function get totalSaturdays():int
		{
			return _totalSaturdays;
		}
		
		//---------------------------------
		//  totalSundays
		//----------------------------------
		private var _totalSundays:int;
		
		/** Armazena a quantidade de Domingos encontrada no intervalo de 
		 * 	tempo*/
		public function get totalSundays():int
		{
			return _totalSundays;
		}
		
		//---------------------------------
		//  totalWeekends
		//----------------------------------
		private var _totalWeekends:int;
		
		/** Armazena a quantidade de finais de semana encontrada no intervalo de 
		 * 	tempo.*/
		public function get totalWeekends():int
		{
			return _totalWeekends;
		}
		
		//---------------------------------
		//  totalHolidays
		//----------------------------------
		private var _totalHolidays:int;
		
		/** Armazena a quantidade de feriados encontrada no intervalo de 
		 * 	tempo.*/
		public function get totalHolidays():int
		{
			return _totalHolidays;
		}
		
		//---------------------------------
		//  maxHour
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
		//  maxMinute
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
		//  maxTime
		//----------------------------------
		private var _maxTime:String;
		/**
		 * Tempo máximo.
		 */
		public function get maxTime():String
		{
			return _maxTime;
		}
		
		/**
		 * @private
		 */
		public function set maxTime(value:String):void
		{
			_maxTime = value;
		}
		
		//---------------------------------
		//  minHour
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
		//  text
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
		
		//------------------------------------------------------------------
		//
		//  Configurations
		//
		//------------------------------------------------------------------
		//----------------------------------
		//  calculatePeriod
		//----------------------------------
		public function calculatePeriod(dateStart:Date, dateEnd:Date):UseDate
		{
			//Verifica se as datas foram fornecidas
			if(dateStart && dateEnd)
			{
				//Popula o total de medidas de tempo
				populateTotal(dateStart, dateEnd);
				//NOTDOC
				calculateHour(dateStart, dateEnd);
			}
			return this;
		}
		
		//------------------------------------------------------------------
		//
		//  Methods
		//
		//------------------------------------------------------------------
		//---------------------------------
		//  UseDate
		//----------------------------------
		/**
		 * Construtor.
		 * 
		 */
		public function UseDate(date:* = null)
		{
			this._phpDate = new PhpDate(date);
		}
		
		//---------------------------------
		//  isLeapYear
		//----------------------------------
		/**
		 *  Verifica se o ano é bissexto.
		 *  Retorna true se for bissexto e false se não for.
		 *  Bisextile / LeapYear
		 */
		public function isLeapYear():Boolean
		{
			return this._phpDate.isLeapYear();
		}
		
		//----------------------------------
		//  calculateDays
		//----------------------------------
		private var _time:Number;
		/** 
		 * 	Calcular a data de término a partir da soma da quantidade de dias 
		 *  fornecidos.
		 * 
		 *  @param dateStart:Date Data de início do projeto.
		 *  @param daysEstimated:int Recebe a quantidade de dias estimados 
		 * 	 para a conclusão do Projeto.
		 *  @param hoursPerDay:int Quantidade de horas que serão trabalhadas por
		 *   dia.
		 * 	@return void
		 */
		public function calculateDays(dateStart:Date,daysEstimated:int, hoursPerDay:int = 24):Date
		{
			// Milisegundos desde 1970 até a data de início.
			var milliStart:Number 	= dateStart.getTime();
			var milliDays:Number    = daysEstimated * 86400000;
			
			var tempDate:Date = new Date(milliDays + milliStart);
			
			/*this._year   = tempDate.fullYear;
			this._month  = tempDate.month + 1;
			this._week   = tempDate.day + 1;
			this._day    = tempDate.date;
			this._hour   = tempDate.hours;
			this._minute = tempDate.minutes;
			this._second = tempDate.seconds;
			this._millisecond = tempDate.milliseconds;*/
			
			doCountDown(dateStart,tempDate);
			
			//Calcula o tempo total necessário para a conclusão
			this._totalTime = daysEstimated * hoursPerDay;
			
			//Limpa a quantidade de dias não-úteis
			this._notWorkingDay = 0;
			//Calcula quantidade de Sábados,Domingos e Feriados
			findWorkingDays(daysEstimated,dateStart,tempDate);
			
			return tempDate;
		}
		
		//----------------------------------
		//  findWorkingDays
		//----------------------------------
		/**
		 *  Procura em um intervalo de datas, Sábados, Domingos e Feriados.
		 *  NOTFINAL
		 * 
		 *  @param days Para fazer a verificação, é necessário que um argumento
		 * 	 com a quantidade de dias seja enviado para que, automaticamente, sejam
		 * 	 descontados Sábados, Domingos e feriados, dias considerados não-úteis. 
		 * 	 É claro que isso varia de acordo com o tipo e local de atividade exercida.
		 *  @param dateStart Recebe a data de início do projeto.
		 *  @param dateTarget Recebe a data de término do projeto.
		 * 
		 *  @return void Não retorna nada. Apenas preenche o Label com as informações
		 * 	 necessárias(Quantidade de dias úteis).
		 */
		//private function findWorkingDays(days:int,dateStart:Date, dateTarget:Date,daysEstimated:int):void
		private function findWorkingDays(days:int,dateStart:Date, dateTarget:Date):void
		{
			//Lista de feriados nacionais do ano. 
			var arHolidays:Array = new Array();
			arHolidays[0] 	= ["1/0"	,"Confraternização Universal"];
			arHolidays[1] 	= ["20/1"	,"Carnaval"];
			arHolidays[2] 	= ["21/1"	,"Quarta de Cinzas"];
			arHolidays[3] 	= ["06/2"	,"Paixão de Cristo"];
			arHolidays[4] 	= ["21/2"	,"Tiradentes"];
			arHolidays[5] 	= ["1/4"	,"Dia do Trabalho"];
			arHolidays[6] 	= ["7/5"	,"Corpus Christi"];
			arHolidays[7] 	= ["7/8"	,"Independência do Brasil"];
			arHolidays[8] 	= ["12/9"	,"Nsa. Sra. Aparecida"];
			arHolidays[9] 	= ["2/10"	,"Finados"];
			arHolidays[10] 	= ["15/10"	,"Proclamação da República"];
			arHolidays[11] 	= ["25/11"	,"Natal"];
			
			//Zera as variáveis
			this._holidaysFound  = [];
			this._totalHolidays  = 0;
			this._totalSaturdays = 0;
			this._totalSundays	 = 0;
			this._totalWeekends  = 0;
			this._daysTotal		 = 0;
			
			//Cria contador iniciando na data inicial.
			var i:Date = new Date(dateStart);
			
			//Verifica quantos dias não-úteis existem no período
			for (i; i <= dateTarget; i.date++) 
			{
				/*Armazena uma data (em formato de String) filtrando somente
				o dia e o mês.*/
				var day:String 		= String(i.date + "/" + (i.month));
				/* Array com as informações da data corrida.
				Na posição 0 está o dia. Na posição 1 o mês.*/
				var arDate:Array	= day.split("/");
				
				//Verifica se a data é Sábado ou Domingo
				if((i.day == 0)||(i.day == 6))
				{	
					//Incrementa o número de dias não-úteis
					this._notWorkingDay++;
					//Incrementa o número de finais de semana
					this._totalWeekends++;
					
					if(i.day==6){
						this._totalSaturdays++;
						this._holidaysFound.push(arDate[0] + "/" + String(int(arDate[1])+1) + "\tSábado\n");
					}else{
						this._totalSundays++;
						this._holidaysFound.push(arDate[0] + "/" + String(int(arDate[1])+1) + "\tDomingo\n");
					}
					
					//Incrementa a data alvo
					dateTarget.date++;
				}
				
				for each (var item:Object in arHolidays) 
				{
					//Verifica se o dia é feriado
					if(day == item[0])
					{
						this._notWorkingDay++;
						trace("Feriado: " + item);
						
						//Incrementa o número de feriados
						this._totalHolidays++;
						
						//Incrementa a data alvo
						dateTarget.date++;
						
						//Acrescenta o dia do feriado no TextArea
						this._holidaysFound.push(arDate[0] + "/" + String(int(arDate[1])+1) +"\t" + item[1] + "\n");
						break;
					}
				}
			}
			
			//Quantidade de finais de semana
			this._totalWeekends 	= totalWeekends/2;
			//Quantidade de dias totais
			this._daysTotal  	= days + this._notWorkingDay;
			//Quantidade de dias estimados
			this._daysEstimated	= days;
			//Quantidade de dias úteis
			this._workingDay    = this._daysTotal - this._notWorkingDay;
			
			//Preenche o DataField com a data alvo, considerando todos os dias não-úteis
			this._finishDate = String(dateTarget.date) + "/" + String(dateTarget.month) + "/" + String(dateTarget.fullYear);
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
				//Duração em minutos do tempo máximo disponível.
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
				//Duração em minutos do tempo de duração da tarefa.
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
			if(hourFormat){
				var hour:Number = Math.floor(totalMinutesDuration / 60);
				var minute:Number = Number(totalMinutesDuration - (hour * 60));
				
				return hour +":"+ minute;
			}else {
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
			
			//Duração da tarefa em minutos.
			var timeDuration:Number
			//Tempo disponível restante em minutos.
			var timeRest:Number;
			
			//Hora restante maior que duração da tarefa
			if (this.restHour > this.durationHour ){
				this._text 		= this.descriptionTask + "\t" + this.durationHour + ":" + this.durationMinute + "\n";	
				timeDuration	= this.durationHour * 60 + this.durationMinute;
				timeRest 		= (this.restHour	 * 60) + this.restMinute - timeDuration;
				this.restHour	= int(timeRest/60);
				this.restMinute	= timeRest%60;
			}else{
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
					}else
						Alert.show("Tempo de duração da atividade é maior que o tempo disponível");
				}else
					Alert.show("Tempo de duração da atividade é maior que o tempo disponível");
			}
		}
		
		//---------------------------------
		//  calculateHour
		//----------------------------------
		/**
		 *  Realiza contagem de tempo para a chegada da data de término.
		 */
		public function calculateHour(dateStart:Date, dateEnd:Date):void
		{
			var start:Number = dateStart.time;
			var end:Number   = dateEnd.time;
			var duration:Number; 
			
			//Verifica se a data de término é maior que a data de início
			if(end > start){
				duration = end - start;
				
				//Calcula a quantidade de segundos, minutos, hora e mimimi do tempo restante
				this._second	= Math.floor(duration/1000);
				this._minute	= Math.floor(this._second/60);
				this._hour		= Math.floor(this._minute/60);
				
				this._second = this._second % 60;
				this._minute = this._minute % 60;
				
				//Hora
				if(String(this._hour).length < 2)
					this._fullDate = '0' + this._hour;
				else
					this._fullDate = String(this._hour);
				//Minuto
				if(String(this._minute).length < 2)
					this._fullDate += ':0' + this._minute;
				else
					this._fullDate += ':' + this._minute;
				//Segundo
				if(String(this._second).length < 2)
					this._fullDate += ':0' + this._second;
				else
					this._fullDate += ':' + this._second;
			}else{
				this._year   = 0;
				this._month  = 0;
				this._week   = 0;
				this._day    = 0;
				this._hour   = 0;
				this._minute = 0;
				this._second = 0;
				this._millisecond = 0;
				this._fullDate = '';
			}
		}
		
		//---------------------------------
		//  doCountDown
		//----------------------------------
		/**
		 *  Realiza contagem de tempo para a chegada da data de término.
		 */
		public function doCountDown(dateStart:Date, dateEnd:Date):void
		{
			var arMonths:Array = [
				{month:1,days:31},{month:2,days:28},{month:3,days:31},
				{month:4,days:30},{month:5,days:31},{month:6,days:30},
				{month:7,days:31},{month:8,days:31},{month:9,days:30},
				{month:10,days:31},{month:11,days:30},{month:12,days:31}];
			
			
			//Array com quantidade de dias
			//Divide milissegundos pela quantidade deles em um mês (%)
			//Pegar quantidade de dias e dividir pela quantidade de mês de cada dia.
			
			var start:Number = dateStart.time;
			var end:Number   = dateEnd.time;
			var duration:Number; 
			
			//Verifica se a data de término é maior que a data de início
			if(end > start){
				duration = end - start;
				
				//Calcula a quantidade de segundos, minutos, hora e mimimi do tempo restante
				this._second	= Math.floor(duration/1000);
				this._minute	= Math.floor(this._second/60);
				this._hour		= Math.floor(this._minute/60);
				this._day		= Math.floor(this._hour/24);
				//this._month		= Math.floor(this._day/30);
				//this._year		= Math.floor(this._month/12);
				
				this._second 	= this._second % 60;
				this._minute 	= this._minute % 60;
				this._hour		= this._hour % 24;
				//this._day		= this._day % 30;
				//this._month		= this._month % 12;
				
				/*this._fullDate =  String(this._year);
				
				//Meses
				if(String(this._month).length < 2)
				this._fullDate += '0' + this._month;
				else
				this._fullDate += String(this._month);
				//Dia
				*/if(String(this._day).length < 2)
					this._fullDate += '0' + this._day;
				else
					this._fullDate += String(this._day);
				//Hora
				if(String(this._hour).length < 2)
					this._fullDate += '0' + this._hour;
				else
					this._fullDate += String(this._hour);
				//Minuto
				if(String(this._minute).length < 2)
					this._fullDate += ':0' + this._minute;
				else
					this._fullDate += ':' + this._minute;
				//Segundo
				if(String(this._second).length < 2)
					this._fullDate += ':0' + this._second;
				else
					this._fullDate += ':' + this._second;
			}else{
				this._year   = 0;
				this._month  = 0;
				this._week   = 0;
				this._day    = 0;
				this._hour   = 0;
				this._minute = 0;
				this._second = 0;
				this._millisecond = 0;
				this._fullDate = '';
			}
		}
		
		//----------------------------------
		//  populateTotal
		//----------------------------------
		/**
		 *  Popula a quantidade total de cada propriedade de hora.
		 *  (Anos, Meses, Semanas, Dias, Horas, Minutos, Segundos).
		 *
		 *  @return void
		 */			
		public function populateTotal(dateStart:Date, dateEnd:Date):void
		{
			var start:Number = dateStart.time;
			var end:Number   = dateEnd.time;
			var duration:Number; 
			
			//Verifica se a data de término é maior que a data de início
			if(end > start){
				duration = end - start;
				/*Divide a diferença entre milissegundos por 31.536.000.000, que é
				a quantidade total de milissegundos que tem em um ano (Não bissexto).*/
				this._totalYears   = duration / 31536000000;
				/*Divide a diferença entre milissegundos por 31.536.000.000, que é
				a quantidade total de milissegundos que tem em um mês.*/
				this._totalMonths  = duration / 2628000000;
				/*Divide a diferença entre milissegundos por 604.800.000, que é
				a quantidade total de milissegundos que tem em uma semana.*/
				this._totalWeeks   = duration / 604800000;
				/*Divide a diferença entre milissegundos por 86.400.000, que é
				a quantidade total de milissegundos que tem em um mês.*/
				this._totalDays    = duration / 86400000;
				/*Divide a diferença entre milissegundos por 3.600.000, que é
				a quantidade total de milissegundos que tem em uma hora.*/
				this._totalHours   = duration / 3600000;
				/*Divide a diferença entre milissegundos por 60.000, que é
				a quantidade total de milissegundos que tem em um minuto.*/
				this._totalMinutes = duration / 60000;
				/*Divide a diferença entre milissegundos por 1000, que é
				a quantidade total de milissegundos que tem em um segundo.*/
				this._totalSeconds = duration / 1000;
				/*Configura a quantidade total de millisegundos, que seria a 
				diferença entre a data final e inicial.*/
				this._totalMilliseconds = duration;
			}else{
				this._totalYears   = 0;
				this._totalMonths  = 0;
				this._totalWeeks   = 0;
				this._totalDays    = 0;
				this._totalHours   = 0;
				this._totalMinutes = 0;
				this._totalSeconds = 0;
				this._totalMilliseconds = 0;
			}
		}
		
		//---------------------------------------------------------------------
		//  
		//	DATEUTIL
		//
		//---------------------------------------------------------------------
		//----------------------------------
		//  format
		//----------------------------------
		/**
		 * Retorna uma data formatada no formato especificado.
		 */ 
		public function getCountdownUntil(startDate:Date, endDate:Date):Object
		{
			var dateUtil:DateUtil = new DateUtil();
			return dateUtil.getCountdownUntil(startDate,endDate);
		}
		
		//---------------------------------------------------------------------
		//  
		//	PHPDATE
		//
		//---------------------------------------------------------------------
		//----------------------------------
		//  format
		//----------------------------------
		/**
		 * Retorna uma data formatada no formato especificado.
		 */ 
		public function format( format:String):String
		{
			return this._phpDate.format(format);
		}
		
		//----------------------------------
		//  getTimezone
		//----------------------------------
		/**
		 * Retorna uma data formatada no formato especificado.
		 */ 
		public function getTimezone():String
		{
			return this._phpDate.getTimezone();
		}
		
		//----------------------------------
		//  getMilliseconds
		//----------------------------------
		/**
		 * Retorna total de milissegundos da data especificada.
		 */ 
		public function getMilliseconds():String
		{
			return this._phpDate.getMilliseconds();
		}
		
		//----------------------------------
		//  getSeconds
		//----------------------------------
		/**
		 * Retorna total de segundos da data especificada.
		 */ 
		public function getSeconds( leadingZero:Boolean = true ):String
		{
			return this._phpDate.getSeconds(leadingZero);
		}
		
		//----------------------------------
		//  getMinutes
		//----------------------------------
		/**
		 * Retorna total de minutos da data especificada.
		 */ 
		public function getMinutes( leadingZero:Boolean = true ):String
		{
			return this._phpDate.getMinutes(leadingZero);
		}
		
		//----------------------------------
		//  getHours
		//----------------------------------
		/**
		 * Retorna total de minutos da data especificada.
		 */ 
		public function getHours(leadingZero:Boolean = true,twelfHours:Boolean = false):String
		{
			return this._phpDate.getHours(leadingZero,twelfHours);
		}
		
		//----------------------------------
		//  getWeekOfYear
		//----------------------------------
		/**
		 * Retorna número referente a semana do ano.
		 */ 
		public function getWeekOfYear():String
		{
			return this._phpDate.getWeekOfYear();
		}
		
		//----------------------------------
		//  getDayOfYear
		//----------------------------------
		/**
		 * Retorna número referente a semana do ano.
		 */ 
		public function getDayOfYear():String
		{
			return this._phpDate.getDayOfYear();
		}
		
		//----------------------------------
		//  getYear
		//----------------------------------
		/**
		 * Retorna número referente a semana do ano.
		 */ 
		public function getYear(twoDigits:Boolean = false):String
		{
			return this._phpDate.getYear(twoDigits);
		}
		
		//----------------------------------
		//  getMonth
		//----------------------------------
		/**
		 * Retorna número referente a semana do ano.
		 */ 
		public function getMonth(leadingZero:Boolean = true):String
		{
			return this._phpDate.getMonth(leadingZero);
		}
		
		//----------------------------------
		//  getDayOfMonth
		//----------------------------------
		/**
		 * Retorna número referente ao dia do mês.
		 */ 
		public function getDayOfMonth(leadingZero:Boolean = true):String
		{
			return this._phpDate.getDayOfMonth(leadingZero);
		}
		
		//----------------------------------
		//  getWeekDayAsText
		//----------------------------------
		/**
		 * Retorna número referente a semana do ano.
		 */ 
		public function getWeekDayAsText(short:Boolean = false):String
		{
			return this._phpDate.getWeekDayAsText(short);
		}
		
		//----------------------------------
		//  getWeekDay
		//----------------------------------
		/**
		 * Retorna número referente a semana do ano.
		 */ 
		public function getWeekDay():String
		{
			return this._phpDate.getWeekDay();
		}
		
		//----------------------------------
		//  getMonthAsText
		//----------------------------------
		/**
		 * Retorna número referente a semana do ano.
		 */ 
		public function getMonthAsText(short:Boolean = false):String
		{
			return this._phpDate.getMonthAsText(short);
		}
		
		//----------------------------------
		//  getMonthDayOrdinalSuffix
		//----------------------------------
		/**
		 * Retorna número referente a semana do ano.
		 */ 
		public function getMonthDayOrdinalSuffix():String
		{
			return this._phpDate.getMonthDayOrdinalSuffix();
		}
		
		//----------------------------------
		//  getDaysOfMonth
		//----------------------------------
		/**
		 * Retorna número referente a semana do ano.
		 */ 
		public function getDaysOfMonth():String
		{
			return this._phpDate.getDaysOfMonth();
		}
	}
}