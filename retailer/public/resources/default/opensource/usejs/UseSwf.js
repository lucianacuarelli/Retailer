//Copyright(c) http://phpjs.org/functions/urlencode:573
function urlEncode (str) {
    str = (str + '').toString();
     // Tilde should be allowed unescaped in future versions of PHP (as reflected below), but if you want to reflect current
    // PHP behavior, you would need to add ".replace(/~/g, '%7E');" to the following.
    return encodeURIComponent(str).replace(/!/g, '%21').replace(/'/g, '%27').replace(/\(/g, '%28').
    replace(/\)/g, '%29').replace(/\*/g, '%2A').replace(/%20/g, '+');
}

//Recupera o objeto de interacao com flex
function UseFX(){
    if (navigator.appName.indexOf ("Microsoft") !=-1) {
        return window['useFxSwf'];
    } else {
        return document['useFxSwf'];
    }
}

// Flash Player Version Detection - Rev 1.6
// Detect Client Browser type
// Copyright(c) 2005-2006 Adobe Macromedia Software, LLC. All rights reserved.
var isIE  = (navigator.appVersion.indexOf("MSIE") != -1) ? true : false;
var isWin = (navigator.appVersion.toLowerCase().indexOf("win") != -1) ? true : false;
var isOpera = (navigator.userAgent.indexOf("Opera") != -1) ? true : false;

function ControlVersion()
{
	var version;
	var axo;
	var e;

	// NOTE : new ActiveXObject(strFoo) throws an exception if strFoo isn't in the registry

	try {
		// version will be set for 7.X or greater players
		axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7");
		version = axo.GetVariable("$version");
	} catch (e) {
	}

	if (!version)
	{
		try {
			// version will be set for 6.X players only
			axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");
			
			// default to the first public version
			version = "WIN 6,0,21,0";

			// throws if AllowScripAccess does not exist (introduced in 6.0r47)		
			axo.AllowScriptAccess = "always";

			// safe to call for 6.0r47 or greater
			version = axo.GetVariable("$version");

		} catch (e) {
		}
	}

	if (!version)
	{
		try {
			// version will be set for 4.X or 5.X player
			axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.3");
			version = axo.GetVariable("$version");
		} catch (e) {
		}
	}

	if (!version)
	{
		try {
			// version will be set for 3.X player
			axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.3");
			version = "WIN 3,0,18,0";
		} catch (e) {
		}
	}

	if (!version)
	{
		try {
			// version will be set for 2.X player
			axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash");
			version = "WIN 2,0,0,11";
		} catch (e) {
			version = -1;
		}
	}
	
	return version;
}

// JavaScript helper required to detect Flash Player PlugIn version information
function GetSwfVer(){
	// NS/Opera version >= 3 check for Flash plugin in plugin array
	var flashVer = -1;
	
	if (navigator.plugins != null && navigator.plugins.length > 0) {
		if (navigator.plugins["Shockwave Flash 2.0"] || navigator.plugins["Shockwave Flash"]) {
			var swVer2 = navigator.plugins["Shockwave Flash 2.0"] ? " 2.0" : "";
			var flashDescription = navigator.plugins["Shockwave Flash" + swVer2].description;
			var descArray = flashDescription.split(" ");
			var tempArrayMajor = descArray[2].split(".");			
			var versionMajor = tempArrayMajor[0];
			var versionMinor = tempArrayMajor[1];
			var versionRevision = descArray[3];
			if (versionRevision == "") {
				versionRevision = descArray[4];
			}
			if (versionRevision[0] == "d") {
				versionRevision = versionRevision.substring(1);
			} else if (versionRevision[0] == "r") {
				versionRevision = versionRevision.substring(1);
				if (versionRevision.indexOf("d") > 0) {
					versionRevision = versionRevision.substring(0, versionRevision.indexOf("d"));
				}
			}
			var flashVer = versionMajor + "." + versionMinor + "." + versionRevision;
		}
	}
	// MSN/WebTV 2.6 supports Flash 4
	else if (navigator.userAgent.toLowerCase().indexOf("webtv/2.6") != -1) flashVer = 4;
	// WebTV 2.5 supports Flash 3
	else if (navigator.userAgent.toLowerCase().indexOf("webtv/2.5") != -1) flashVer = 3;
	// older WebTV supports Flash 2
	else if (navigator.userAgent.toLowerCase().indexOf("webtv") != -1) flashVer = 2;
	else if ( isIE && isWin && !isOpera ) {
		flashVer = ControlVersion();
	}	
	return flashVer;
}

// When called with reqMajorVer, reqMinorVer, reqRevision returns true if that version or greater is available
function DetectFlashVer(reqMajorVer, reqMinorVer, reqRevision)
{
	versionStr = GetSwfVer();
	if (versionStr == -1 ) {
		return false;
	} else if (versionStr != 0) {
		if(isIE && isWin && !isOpera) {
			// Given "WIN 2,0,0,11"
			tempArray         = versionStr.split(" "); 	// ["WIN", "2,0,0,11"]
			tempString        = tempArray[1];			// "2,0,0,11"
			versionArray      = tempString.split(",");	// ['2', '0', '0', '11']
		} else {
			versionArray      = versionStr.split(".");
		}
		var versionMajor      = versionArray[0];
		var versionMinor      = versionArray[1];
		var versionRevision   = versionArray[2];

        	// is the major.revision >= requested major.revision AND the minor version >= requested minor
		if (versionMajor > parseFloat(reqMajorVer)) {
			return true;
		} else if (versionMajor == parseFloat(reqMajorVer)) {
			if (versionMinor > parseFloat(reqMinorVer))
				return true;
			else if (versionMinor == parseFloat(reqMinorVer)) {
				if (versionRevision >= parseFloat(reqRevision))
					return true;
			}
		}
		return false;
	}
}

function AC_AddExtension(src, ext)
{
  if (src.indexOf('?') != -1)
    return src.replace(/\?/, ext+'?'); 
  else
    return src + ext;
}

function AC_Generateobj(objAttrs, params, embedAttrs) 
{ 
    var str = '';
    if (isIE && isWin && !isOpera)
    {
  		str += '<object ';
  		for (var i in objAttrs)
  			str += i + '="' + objAttrs[i] + '" ';
  		str += '>';
  		for (var i in params)
  			str += '<param name="' + i + '" value="' + params[i] + '" /> ';
  		str += '</object>';
    } else {
  		str += '<embed ';
  		for (var i in embedAttrs)
  			str += i + '="' + embedAttrs[i] + '" ';
  		str += '> </embed>';
    }

    document.write(str);
}

function AC_FL_RunContent(args){
  var ret = 
    AC_GetArgs
    (  args, ".swf", "movie", "clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
     , "application/x-shockwave-flash"
    );
  AC_Generateobj(ret.objAttrs, ret.params, ret.embedAttrs);
}

function AC_GetArgs(args, ext, srcParamName, classid, mimeType){
  var ret = new Object();
  ret.embedAttrs = new Object();
  ret.params = new Object();
  ret.objAttrs = new Object();
  for (var i=0; i < args.length; i=i+2){
    var currArg = args[i].toLowerCase();    
    switch (currArg){	
      case "classid":
        break;
      case "pluginspage":
        ret.embedAttrs[args[i]] = args[i+1];
        break;
      case "src":
      case "movie":	
        args[i+1] = AC_AddExtension(args[i+1], ext);
        ret.embedAttrs["src"] = args[i+1];
        ret.params[srcParamName] = args[i+1];
        break;
      case "onafterupdate":
      case "onbeforeupdate":
      case "onblur":
      case "oncellchange":
      case "onclick":
      case "ondblClick":
      case "ondrag":
      case "ondragend":
      case "ondragenter":
      case "ondragleave":
      case "ondragover":
      case "ondrop":
      case "onfinish":
      case "onfocus":
      case "onhelp":
      case "onmousedown":
      case "onmouseup":
      case "onmouseover":
      case "onmousemove":
      case "onmouseout":
      case "onkeypress":
      case "onkeydown":
      case "onkeyup":
      case "onload":
      case "onlosecapture":
      case "onpropertychange":
      case "onreadystatechange":
      case "onrowsdelete":
      case "onrowenter":
      case "onrowexit":
      case "onrowsinserted":
      case "onstart":
      case "onscroll":
      case "onbeforeeditfocus":
      case "onactivate":
      case "onbeforedeactivate":
      case "ondeactivate":
      case "type":
      case "codebase":
        ret.objAttrs[args[i]] = args[i+1];
        break;
      case "id":
      case "width":
      case "height":
      case "align":
      case "vspace": 
      case "hspace":
      case "class":
      case "title":
      case "accesskey":
      case "name":
      case "tabindex":
        ret.embedAttrs[args[i]] = ret.objAttrs[args[i]] = args[i+1];
        break;
      default:
        ret.embedAttrs[args[i]] = ret.params[args[i]] = args[i+1];
    }
  }
  ret.objAttrs["classid"] = classid;
  if (mimeType) ret.embedAttrs["type"] = mimeType;
  return ret;
}


/**
 * Componente de renderizacao de flashPlayer
 */
var useSwf = window.useSwf = function() { return new useSwf(); };

(function(){
	/**
	 * Prepara acoes para o componente Swf
	 * 
	 * @param {String} 
	 */
	window.useSwf = function(id) {
		return this instanceof useSwf ? this.init(id) : new useSwf(id);
	};
	/**
	 * Prepara acoes para o componente Tabs
	useSwf()
		  .src("http://localhost/extras/usefx/form/index")
		  //.version(9,0,28)
		  .flashVars([{"index1":"value1", "index2":"value2"}])
		  //.width("100%")
		  //.height("100%")
		  //.align("middle")
		  .id("index")
		  //.quality("high")
		  //.bgColor("#ffffff")
		  .name("index")
		  //.wmode("transparent") 
		  //.allowFullScreen(true) 
		  //.allowScriptAccess("sameDomain")
		  .show();
	 * 
	 * @param {String} 
	 */

	useSwf.prototype = {
		init: function(id){ 
			this._params = ["type","application/x-shockwave-flash","pluginspage","http://www.adobe.com/go/getflashplayer"];
			this.version(9,0,28);
			return this;
		},
		allowFullScreen: function(value){
			this._params.push("allowFullScreen");
			this._params.push(value);
			return this;
		}, 
		allowScriptAccess: function(value){
			this._params.push("allowScriptAccess");
			this._params.push(value);
			return this;
		}, 
		src: function(value){
			this._params.push("src");
			this._params.push(value);
			return this;
		}, 
		align: function(value){
			this._params.push("align");
			this._params.push(value);
			return this;
		}, 
		menu: function(value){
			this._params.push("menu");
			this._params.push(value);
			return this;
		}, 
		id: function(value){
			this._params.push("id");
			this._params.push(value);
			return this;
		}, 
		name: function(value){
			this._params.push("name");
			this._params.push(value);			
			this._name = name;
			return this;
		}, 
		wmode: function(value){
			this._params.push("wmode");
			this._params.push(value);	
			return this;
		}, 
		quality: function(value){
			this._params.push("quality");
			this._params.push(value);	
			return this;
		}, 
		width: function(value){
			this._params.push("width");
			this._params.push(value);	
			return this;
		}, 
		height: function(value){
			this._params.push("height");
			this._params.push(value);	
			return this;
		}, 
		bgColor: function(value){
			this._params.push("bgColor");
			this._params.push(value);	
			return this;
		}, 
		flashVars: function(value){
			this._params.push("flashVars");
			this._params.push("href="+urlEncode(location.href)+"&amp;"+value);	
			
			return this;
		}, 
		flashError: function(value){
			var flashError = value || 'Alternate HTML content should be placed here.'
			  	+ 'This content requires the Adobe Flash Player. '
			   	+ '<a href=http://www.adobe.com/go/getflash/>Get Flash</a>';
			this._flashError = flashError;
			return this;
		}, 
		version: function(requiredMajorVersion, requiredMinorVersion, requiredRevision){
			// Major version of Flash required
			this.requiredMajorVersion = requiredMajorVersion;
			// Minor version of Flash required
			this.requiredMinorVersion = requiredMinorVersion;
			// Minor version of Flash required
			this.requiredRevision = requiredRevision;
			return this;
		}, 
		render: function(){ 
			var hasProductInstall = DetectFlashVer(6, 0, 65);
			
			// Version check based upon the values defined in globals
			var hasRequestedVersion = DetectFlashVer(this.requiredMajorVersion, this.requiredMinorVersion, this.requiredRevision);
			
			if ( hasProductInstall && !hasRequestedVersion ) {
				// DO NOT MODIFY THE FOLLOWING FOUR LINES
				// Location visited after installation is complete if installation is required
				var MMPlayerType = (isIE == true) ? "ActiveX" : "PlugIn";
				var MMredirectURL = window.location;
			    document.title = document.title.slice(0, 47) + " - Flash Player Installation";
			    var MMdoctitle = document.title;
			
		 		//NOTFINAL corrigir parametros
				AC_FL_RunContent(
					"src", "playerProductInstall",
					"FlashVars", "MMredirectURL="+MMredirectURL+'&MMplayerType='+MMPlayerType+'&MMdoctitle='+MMdoctitle+"",
					"type", "application/x-shockwave-flash",
					"pluginspage", "http://www.adobe.com/go/getflashplayer"
				);
			} else if (hasRequestedVersion) {
				// if we've detected an acceptable version
				// embed the Flash Content SWF when all tests are passed
				AC_FL_RunContent(this._params);
			} else {  
				//flash is too old or we can't detect the plugin
				// insert non-flash content
				document.write( this._flashError);  
				
			}			
		}
	};
})(window);