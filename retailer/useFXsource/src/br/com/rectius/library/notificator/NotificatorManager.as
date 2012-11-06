package br.com.rectius.library.notificator
{
	import flash.display.DisplayObject;
	
	import mx.collections.ArrayCollection;
	import mx.core.FlexGlobals;
	import mx.managers.PopUpManager;
	
	/**
	 *  Singleton pattern implementation that 
	 *  handles the notification messages.
	 * 
	 *  @author Pablo_Souza
	 * 
	 */
	public class NotificatorManager
	{
		
		//--------------------------------------------------------------------------
		//
		//  Class constants
		//
		//--------------------------------------------------------------------------
		public static const WARNING:String = "warning";
		public static const SUCCESS:String = "success";
		public static const FAILURE:String = "failure";
		
		//--------------------------------------------------------------------------
		//
		//  Properties
		//
		//--------------------------------------------------------------------------
		
		//----------------------------------
		//  _instance
		//----------------------------------
		
		/**
		 *  @private
		 */
		private static var _instance:NotificatorManager;
		
		//----------------------------------
		//  notificator
		//----------------------------------
		
		/**
		 *  @private
		 */
		private var notificator:Notificator;
		
		//----------------------------------
		//  arNotifications
		//----------------------------------
		
		/**
		 *  @private
		 */
		private var _notificatorTotal:Number;
		
		
		private var _acNotificator:ArrayCollection;
		
		//--------------------------------------------------------------------------
		//
		//  Constructor
		//
		//--------------------------------------------------------------------------
		
		/**
		 *  The SingletonEnforcer class simulates a 
		 *  'private' class so that it can only be
		 *  instantiated inside NotificatorManager class. 
		 */
		public function NotificatorManager(enforcer:SingletonEnforcer)
		{
			if(enforcer == null)
				throw new Error("You cannot instantiate a Singleton class");
		}
		
		public static function hide(item:*):void
		{
			var index:Number =_instance._acNotificator.getItemIndex(item);

			if(index >= 0){
				_instance._notificatorTotal--;
				if(_instance._notificatorTotal <= -2) _instance._notificatorTotal = -1;
			  	_instance._acNotificator.removeItemAt(index);
				trace(_instance._notificatorTotal);
			}
			
			//Atualiza posição na lista
			for (var i:int = 0; i <= _instance._notificatorTotal; i++)
			{
				var notificator:Notificator = _instance._acNotificator.getItemAt(i) as Notificator;
					
					trace('A:'+notificator.indexStart + ' - '+ notificator.indexEnd);
					
					notificator.indexEnd = notificator.indexStart; 
					notificator.indexStart = i;
					//notificator.notificatorTimer.stop();
					
					trace('B:'+notificator.indexStart + ' - '+ notificator.indexEnd);
					trace('=======================');
					
					notificator.positionUpdate();
			}
		}
		
		public static function totalItems():Number{
			return _instance._notificatorTotal;
		}
		
		//--------------------------------------------------------------------------
		//
		//  Public methods
		//
		//--------------------------------------------------------------------------
		
		/**
		 *  <p>Creates a top-level window with the notification 
		 *  message and places it above other windows in 
		 *  the z-order.</p>
		 * 
		 *  @param message The string that represents the notification message.
		 * 
		 *  @param type A constant variable of NotificatorMode class that represents 
		 *  the notification's type. <code>NotificatorMode.WARNING</code> (default).
		 * 
		 *  @param timer The milliseconds interval that the notification message will be visible.
		 * 
		 *  @langversion 3.0
		 */
		public static function show(message:String, type:String=NotificatorManager.WARNING, timer:Number=4000):void
		{
			if (_instance == null){
				_instance = new NotificatorManager(new SingletonEnforcer());
				_instance._notificatorTotal = -1;
				_instance._acNotificator = new ArrayCollection();
			}
			
			_instance._notificatorTotal++;
			
			//PopUpManager.removePopUp(_instance.notificator);
			
			_instance.notificator = PopUpManager.createPopUp(DisplayObject(FlexGlobals.topLevelApplication), Notificator, false) as Notificator;
			_instance.notificator.timeDestroy = timer + (_instance._notificatorTotal*1500);
			_instance.notificator.currentState = type;
			_instance.notificator.message = message +'('+ _instance._notificatorTotal +')';
			_instance.notificator.indexStart = _instance._notificatorTotal;
			_instance.notificator.indexEnd = _instance._notificatorTotal;
			_instance.notificator.show();
			
			_instance._acNotificator.addItem(_instance.notificator);
		}
	}
}

/**
 *  The SingletonEnforcer class is available
 *  only to the NotificatorManager class.
 */
class SingletonEnforcer {}