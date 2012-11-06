/*
Name:       ImageFlow
Version:    1.3.0 (March 9 2010)
Author:     Finn Rudolph
Support:    http://finnrudolph.de/ImageFlow

License:    ImageFlow is licensed under a Creative Commons 
            Attribution-Noncommercial 3.0 Unported License 
            (http://creativecommons.org/licenses/by-nc/3.0/).

            You are free:
                + to Share - to copy, distribute and transmit the work
                + to Remix - to adapt the work

            Under the following conditions:
                + Attribution. You must attribute the work in the manner specified by the author or licensor 
                  (but not in any way that suggests that they endorse you or your use of the work). 
                + Noncommercial. You may not use this work for commercial purposes. 

            + For any reuse or distribution, you must make clear to others the license terms of this work.
            + Any of the above conditions can be waived if you get permission from the copyright holder.
            + Nothing in this license impairs or restricts the author's moral rights.

Credits:    This script is based on Michael L. Perrys Cover flow in Javascript [1].
            The reflections are generated server-sided by a slightly hacked version 
            of Richard Daveys easyreflections [2] written in PHP. The mouse wheel 
            support is an implementation of Adomas Paltanavicius JavaScript mouse 
            wheel code [3]. It also uses the domReadyEvent from Tanny O'Haley [4].

            [1] http://www.adventuresinsoftware.com/blog/?p=104#comment-1981
            [2] http://reflection.corephp.co.uk/v2.php
            [3] http://adomas.org/javascript-mouse-wheel/
            [4] http://tanny.ica.com/ICA/TKO/tkoblog.nsf/dx/domcontentloaded-for-browsers-part-v
*/

/* ImageFlow - compressed with http://dean.edwards.name/packer/ */
//eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('v 4Z(){u.2v={3Q:50,2N:1.5a,2J:y,30:C,1a:y,3j:\'1E\',S:\'5u\',2h:1.0,J:4,33:\'\',2f:C,3a:0.49,36:1.0,2z:v(){B.3V=u.2i},1Y:y,1T:[10,8,6,4,2],2x:5t,2y:1d,3e:C,2M:C,3G:\'\',1N:0.5,31:y,3L:\'\',3u:0.6,2G:C,2X:\'e-5m\',1q:14,1y:y,34:5n,3k:y,3r:1,3D:C,3H:y,1g:4w};9 t=u;u.X=v(a){17(9 b 3T t.2v){u[b]=(a!==1t&&a[b]!==1t)?a[b]:t.2v[b]}9 c=B.R(t.S);7(c){c.A.1H=\'2g\';u.N=c;7(u.3N()){u.H=B.R(t.S+\'5j\');u.2j=B.R(t.S+\'4z\');u.1V=B.R(t.S+\'3X\');u.1B=B.R(t.S+\'4c\');u.1R=B.R(t.S+\'4f\');u.3x=B.R(t.S+\'4j\');u.3l=B.R(t.S+\'4s\');u.1L=B.R(t.S+\'5e\');u.1M=[];u.1w=0;u.E=0;u.1C=0;u.1D=0;u.2q=C;u.2s=C;u.T=y;9 d=u.N.3F;9 e=W.11(d/t.2N);B.R(t.S+\'2A\').A.3b=((e*0.5)-22)+\'M\';c.A.1c=e+\'M\';u.21()}}};u.3N=v(){9 a=t.D.U(\'12\',\'23\');9 b,2S,1l,15;9 c=t.N.F.1r;17(9 d=0;d<c;d++){b=t.N.F[d];7(b&&b.24==1&&b.29==\'2b\'){7(t.2M===C){2S=(t.31)?\'3\':\'2\';1l=t.33+b.1z(\'1l\',2);1l=t.3L+\'3W\'+2S+\'.45?5p=\'+1l+t.3G;b.2d(\'1l\',1l)}15=b.1O(C);a.Q(15)}}7(t.1a){9 e=t.D.U(\'12\',\'23\');9 f=t.D.U(\'12\',\'23\');c=a.F.1r;7(c<t.J){t.J=c}7(c>1){9 i;17(i=0;i<c;i++){b=a.F[i];7(i<t.J){15=b.1O(C);e.Q(15)}7(c-i<t.J+1){15=b.1O(C);f.Q(15)}}17(i=0;i<c;i++){b=a.F[i];15=b.1O(C);f.Q(15)}17(i=0;i<t.J;i++){b=e.F[i];15=b.1O(C);f.Q(15)}a=f}}7(t.1y){9 g=t.D.U(\'12\',\'1y\');a.Q(g)}9 h=t.D.U(\'p\',\'52\');9 j=B.3h(\' \');h.Q(j);9 k=t.D.U(\'12\',\'3v\');9 l=t.D.U(\'12\',\'4o\');k.Q(l);9 m=t.D.U(\'12\',\'4J\');9 n=t.D.U(\'12\',\'57\');9 o=t.D.U(\'12\',\'2G\');n.Q(o);7(t.2J){9 p=t.D.U(\'12\',\'4t\',\'35\');9 q=t.D.U(\'12\',\'41\',\'35\');n.Q(p);n.Q(q)}9 r=t.D.U(\'12\',\'46\');r.Q(m);r.Q(n);9 s=y;7(t.N.Q(a)&&t.N.Q(h)&&t.N.Q(k)&&t.N.Q(r)){c=t.N.F.1r;17(d=0;d<c;d++){b=t.N.F[d];7(b&&b.24==1&&b.29==\'2b\'){t.N.5q(b)}}s=C}V s};u.21=v(){9 p=t.2Y();7((p<1d||t.2s)&&t.3e){7(t.2s&&p==1d){t.2s=y;L.1n(t.21,1d)}G{L.1n(t.21,40)}}G{B.R(t.S+\'2A\').A.1Z=\'2H\';B.R(t.S+\'4L\').A.1Z=\'2H\';L.1n(t.D.3c,4W);t.2m();7(t.O>1){t.1e.X();t.I.X();t.K.X();t.2o.X();7(t.1y){t.P.X()}7(t.2G){t.1B.A.1H=\'2g\'}}}};u.2Y=v(){9 a=t.H.F.1r;9 i=0,20=0;9 b=Z;17(9 c=0;c<a;c++){b=t.H.F[c];7(b&&b.24==1&&b.29==\'2b\'){7(b.2I){20++}i++}}9 d=W.11((20/i)*1d);9 e=B.R(t.S+\'5g\');e.A.1u=d+\'%\';7(t.1a){i=i-(t.J*2);20=(d<1)?0:W.11((i/1d)*d)}9 f=B.R(t.S+\'2A\');9 g=B.3h(\'3v 23 \'+20+\'/\'+i);f.5i(g,f.4i);V d};u.2m=v(){u.Y=t.H.3F+t.H.3I;u.1A=W.11(t.Y/t.2N);u.1U=t.J*t.1g;u.1I=t.Y*0.5;u.1q=t.1q*0.5;u.1f=(t.Y-(W.11(t.1q)*2))*t.3u;u.2u=W.11(t.1A*t.3a);t.N.A.1c=t.1A+\'M\';t.H.A.1c=t.2u+\'M\';t.1V.A.1c=(t.1A-t.2u)+\'M\';t.2j.A.1u=t.Y+\'M\';t.2j.A.3b=W.11(t.Y*0.3q)+\'M\';t.1B.A.1u=t.1f+\'M\';t.1B.A.4m=W.11(t.Y*0.3q)+\'M\';t.1B.A.2R=W.11(t.1q+((t.Y-t.1f)/2))+\'M\';t.1R.A.3s=t.2X;t.1R.4u=v(){t.I.1p(u);V y};7(t.2J){t.3l.1k=v(){t.1e.19(1)};t.3x.1k=v(){t.1e.19(-1)}}9 a=(t.2M===C)?t.1N+1:1;9 b=t.H.F.1r;9 i=0;9 c=Z;17(9 d=0;d<b;d++){c=t.H.F[d];7(c!==Z&&c.24==1&&c.29==\'2b\'){u.1M[i]=d;c.2i=c.1z(\'4D\');c.4F=(-i*t.1g);c.i=i;7(t.2q){7(c.1z(\'1u\')!==Z&&c.1z(\'1c\')!==Z){c.w=c.1z(\'1u\');c.h=c.1z(\'1c\')*a}G{c.w=c.1u;c.h=c.1c}}7((c.w)>(c.h/(t.1N+1))){c.1j=t.2x;c.26=t.2x}G{c.1j=t.2y;c.26=t.2y}7(t.2f===y){c.A.4O=\'4S\';c.A.1Z=\'4U\'}c.A.3s=t.3j;i++}}u.O=t.1M.1r;7(t.2f===y){c=t.H.F[t.1M[0]];u.3J=c.w*t.O;c.A.55=(t.Y/2)+(c.w/2)+\'M\';t.H.A.1c=c.h+\'M\';t.1V.A.1c=(t.1A-c.h)+\'M\'}7(t.2q){t.2q=y;t.E=t.3r-1;7(t.E<0){t.E=0}7(t.1a){t.E=t.E+t.J}2U=(t.1a)?(t.O-(t.J))-1:t.O-1;7(t.E>2U){t.E=2U}7(t.3D===y){t.1K(-t.E*t.1g)}7(t.3H){t.1K(5v)}}7(t.O>1){t.1J(t.E)}t.1K(t.1w)};u.1K=v(x){u.1w=x;u.1o=t.O;17(9 a=0;a<t.O;a++){9 b=t.H.F[t.1M[a]];9 c=a*-t.1g;7(t.2f){7((c+t.1U)<t.1D||(c-t.1U)>t.1D){b.A.1H=\'3S\';b.A.1Z=\'2H\'}G{9 z=(W.4I(4p+x*x)+1d)*t.36;9 d=x/z*t.1I+t.1I;b.A.1Z=\'4r\';9 e=(b.h/b.w*b.1j)/z*t.1I;9 f=0;1G(e>t.1A){1x y:f=b.1j/z*t.1I;13;1E:e=t.1A;f=b.w*e/b.h;13}9 g=(t.2u-e)+((e/(t.1N+1))*t.1N);b.A.2Z=d-(b.1j/2)/z*t.1I+\'M\';7(f&&e){b.A.1c=e+\'M\';b.A.1u=f+\'M\';b.A.5s=g+\'M\'}b.A.1H=\'2g\';1G(x<0){1x C:u.1o++;13;1E:u.1o=t.1o-1;13}1G(b.i==t.E){1x y:b.1k=v(){t.1J(u.i)};13;1E:u.1o=t.1o+1;7(b.2i!==\'\'){b.1k=t.2z}13}b.A.1o=t.1o}}G{7((c+t.1U)<t.1D||(c-t.1U)>t.1D){b.A.1H=\'3S\'}G{b.A.1H=\'2g\';1G(b.i==t.E){1x y:b.1k=v(){t.1J(u.i)};13;1E:7(b.2i!==\'\'){b.1k=t.2z}13}}t.H.A.2R=(x-t.3J)+\'M\'}x+=t.1g}};u.1J=v(a){9 b,1v;7(t.1a){7(a+1===t.J){1v=t.O-t.J;b=-1v*t.1g;a=1v-1}7(a===(t.O-t.J)){1v=t.J-1;b=-1v*t.1g;a=1v+1}}9 x=-a*t.1g;u.1C=x;u.1D=x;u.E=a;9 c=t.H.F[a].1z(\'4v\');7(c===\'\'||t.30===y){c=\'&56;\'}t.2j.4e=c;7(t.I.T===y){7(t.1a){u.1b=((a-t.J)*t.1f)/(t.O-(t.J*2)-1)-t.I.2k}G{u.1b=(a*t.1f)/(t.O-1)-t.I.2k}t.1R.A.2R=(t.1b-t.1q)+\'M\'}7(t.1Y===C||t.2h!==t.2v.2h){t.D.27(t.H.F[a],t.1T[0]);t.H.F[a].1j=t.H.F[a].1j*t.2h;9 d=0;9 e=0;9 f=0;9 g=t.1T.1r;17(9 i=1;i<(t.J+1);i++){7((i+1)>g){d=t.1T[g-1]}G{d=t.1T[i]}e=a+i;f=a-i;7(e<t.O){t.D.27(t.H.F[e],d);t.H.F[e].1j=t.H.F[e].26}7(f>=0){t.D.27(t.H.F[f],d);t.H.F[f].1j=t.H.F[f].26}}}7(b){t.1K(b)}7(t.T===y){t.T=C;t.2E()}};u.2E=v(){1G(t.1C<t.1w-1||t.1C>t.1w+1){1x C:t.1K(t.1w+(t.1C-t.1w)/3);L.1n(t.2E,t.3Q);t.T=C;13;1E:t.T=y;13}};u.2l=v(a){7(t.1y){t.P.2c()}t.1J(a)};u.P={2n:1,X:v(){(t.3k)?t.P.1p():t.P.1h()},2c:v(){t.D.2L(t.N,\'3m\',t.P.2c);t.P.1h()},3o:v(){t.D.16(t.N,\'3m\',t.P.2c)},1p:v(){t.D.25(t.1L,\'1y 43\');t.1L.1k=v(){t.P.1h()};t.P.3t=L.47(t.P.2P,t.34);L.1n(t.P.3o,1d)},1h:v(){t.D.25(t.1L,\'1y 4b\');t.1L.1k=v(){t.P.1p()};L.4d(t.P.3t)},2P:v(){9 a=t.E+t.P.2n;9 b=y;7(a===t.O){t.P.2n=-1;b=C}7(a<0){t.P.2n=1;b=C}(b)?t.P.2P():t.1J(a)}};u.1e={X:v(){7(L.1m){t.N.1m(\'4h\',t.1e.1W,y)}t.D.16(t.N,\'4k\',t.1e.1W)},1W:v(a){9 b=0;7(!a){a=L.1F}7(a.3z){b=a.3z/4q}G 7(a.3B){b=-a.3B/3}7(b){t.1e.19(b)}t.D.2p(a)},19:v(a){9 b=y;9 c=0;7(a>0){7(t.E>=1){c=t.E-1;b=C}}G{7(t.E<(t.O-1)){c=t.E+1;b=C}}7(b){t.2l(c)}}};u.I={1P:Z,2T:0,2e:0,2k:0,T:y,X:v(){t.D.16(t.N,\'4B\',t.I.3K);t.D.16(t.N,\'3M\',t.I.1h);t.D.16(B,\'3M\',t.I.1h);t.N.4H=v(){9 a=C;7(t.I.T){a=y}V a}},1p:v(o){t.I.1P=o;t.I.2T=t.I.2e-o.3I+t.1b},1h:v(){t.I.1P=Z;t.I.T=y},3K:v(e){9 a=0;7(!e){e=L.1F}7(e.2D){a=e.2D}G 7(e.3P){a=e.3P+B.2K.3d+B.4Q.3d}t.I.2e=a;7(t.I.1P!==Z){9 b=(t.I.2e-t.I.2T)+t.1q;7(b<(-t.1b)){b=-t.1b}7(b>(t.1f-t.1b)){b=t.1f-t.1b}9 c,E;7(t.1a){c=(b+t.1b)/(t.1f/(t.O-(t.J*2)-1));E=W.11(c)+t.J}G{c=(b+t.1b)/(t.1f/(t.O-1));E=W.11(c)}t.I.2k=b;t.I.1P.A.2Z=b+\'M\';7(t.E!==E){t.2l(E)}t.I.T=C}}};u.K={x:0,2B:0,2r:0,T:y,2F:C,X:v(){t.D.16(t.1V,\'4Y\',t.K.1p);t.D.16(B,\'51\',t.K.19);t.D.16(B,\'53\',t.K.1h)},3f:v(e){9 a=y;7(e.28){9 b=e.28[0].1C;7(b===t.1V||b===t.1R||b===t.1B){a=C}}V a},2C:v(e){9 x=0;7(e.28){x=e.28[0].2D}V x},1p:v(e){t.K.2B=t.K.2C(e);t.K.T=C;t.D.2p(e)},3w:v(){9 a=y;7(t.K.T){a=C}V a},19:v(e){7(t.K.3w&&t.K.3f(e)){9 a=(t.1a)?(t.O-(t.J*2)-1):(t.O-1);7(t.K.2F){t.K.2r=(a-t.E)*(t.Y/a);t.K.2F=y}9 b=-(t.K.2C(e)-t.K.2B-t.K.2r);7(b<0){b=0}7(b>t.Y){b=t.Y}t.K.x=b;9 c=W.11(b/(t.Y/a));c=a-c;7(t.E!==c){7(t.1a){c=c+t.J}t.2l(c)}t.D.2p(e)}},1h:v(){t.K.2r=t.K.x;t.K.T=y}};u.2o={X:v(){B.5d=v(a){t.2o.19(a)}},19:v(a){9 b=t.2o.1W(a);1G(b){1x 39:t.1e.19(-1);13;1x 37:t.1e.19(1);13}},1W:v(a){a=a||L.1F;V a.5h}};u.D={16:v(a,b,c){7(a.1m){a.1m(b,c,y)}G 7(a.3g){a["e"+b+c]=c;a[b+c]=v(){a["e"+b+c](L.1F)};a.3g("3y"+b,a[b+c])}},2L:v(a,b,c){7(a.32){a.32(b,c,y)}G 7(a.3A){7(a[b+c]===1t){5r(\'D.2L » 4G 3i 3C 1F 48 1t - 4K 4l 4M 42 3i 3C 4N 4n 1F?\')}a.3A(\'3y\'+b,a[b+c]);a[b+c]=Z;a[\'e\'+b+c]=Z}},27:v(a,b){7(t.1Y===C){a.A.1Y=b/10;a.A.4P=\'4a(1Y=\'+b*10+\')\'}},U:v(a,b,c){9 d=B.4R(a);d.2d(\'38\',t.S+\'4T\'+b);7(c!==1t){b+=\' \'+c}t.D.25(d,b);V d},25:v(a,b){7(a){a.2d(\'3Z\',b);a.2d(\'4V\',b)}},2p:v(e){7(e.3E){e.3E()}G{e.4X=y}V y},3c:v(){9 a=L.2t;7(1X L.2t!=\'v\'){L.2t=v(){t.2m()}}G{L.2t=v(){7(a){a()}t.2m()}}}}}9 1i={2Q:"1i",1S:{},1s:1,1Q:y,2O:Z,3n:v(a){7(!a.$$1s){a.$$1s=u.1s++;7(u.1Q){a()}u.1S[a.$$1s]=a}},58:v(a){7(a.$$1s){4x u.1S[a.$$1s]}},18:v(){7(u.1Q){V}u.1Q=C;17(9 i 3T u.1S){u.1S[i]()}},2w:v(){7(u.1Q){V}7(/5c|4y/i.3O(4g.5f)){7(/4A|2I/.3O(B.3p)){u.18()}G{1n(u.2Q+".2w()",1d)}}G 7(B.R("2V")){V C}7(1X u.2O==="v"){7(1X B.2W!==\'1t\'&&(B.2W(\'2K\')[0]!==Z||B.2K!==Z)){7(u.2O()){u.18()}G{1n(u.2Q+".2w()",4C)}}}V C},X:v(){7(B.1m){B.1m("5k",v(){1i.18()},y)}1n("1i.2w()",1d);v 18(){1i.18()}7(1X 16!=="1t"){16(L,"3R",18)}G 7(B.1m){B.1m("3R",18,y)}G 7(1X L.2a==="v"){9 a=L.2a;L.2a=v(){1i.18();a()}}G{L.2a=18}/*@4E@7(@5o||@3Y)B.44("<3U 38=2V 54 1l=\\"//:\\"><\\/3U>");9 b=B.R("2V");b.59=v(){7(u.3p=="2I"){1i.18()}};@5b@*/}};9 5l=v(a){1i.3n(a)};1i.X();',62,342,'|||||||if||var|||||||||||||||||||||this|function|||false||style|document|true|Helper|imageID|childNodes|else|imagesDiv|MouseDrag|imageFocusMax|Touch|window|px|ImageFlowDiv|max|Slideshow|appendChild|getElementById|ImageFlowID|busy|createDocumentElement|return|Math|init|imagesDivWidth|null||round|div|break||imageNode|addEvent|for|run|handle|circular|newSliderX|height|100|MouseWheel|scrollbarWidth|xStep|stop|domReadyEvent|pc|onclick|src|addEventListener|setTimeout|zIndex|start|sliderWidth|length|domReadyID|undefined|width|clonedImageID|current|case|slideshow|getAttribute|maxHeight|scrollbarDiv|target|memTarget|default|event|switch|visibility|size|glideTo|moveTo|buttonSlideshow|indexArray|reflectionP|cloneNode|object|bDone|sliderDiv|events|opacityArray|maxFocus|navigationDiv|get|typeof|opacity|display|completed|loadingProgress||images|nodeType|setClassName|pcMem|setOpacity|touches|nodeName|onload|IMG|interrupt|setAttribute|mouseX|imageScaling|visible|imageFocusM|url|captionDiv|newX|glideOnEvent|refresh|direction|Key|suppressBrowserDefault|firstRefresh|stopX|firstCheck|onresize|imagesDivHeight|defaults|schedule|percentLandscape|percentOther|onClick|_loading_txt|startX|getX|pageX|animate|first|slider|none|complete|buttons|body|removeEvent|reflections|aspectRatio|DOMContentLoadedCustom|slide|name|marginLeft|version|objectX|maxId|__ie_onload|getElementsByTagName|sliderCursor|loadingStatus|left|captions|reflectionPNG|removeEventListener|imagePath|slideshowSpeed|button|imagesM||id||imagesHeight|paddingTop|addResizeEvent|scrollLeft|preloadImages|isOnNavigationDiv|attachEvent|createTextNode|to|imageCursor|slideshowAutoplay|buttonPreviousDiv|click|add|addInterruptEvent|readyState|02|startID|cursor|action|scrollbarP|loading|isBusy|buttonNextDiv|on|wheelDelta|detachEvent|detail|detach|glideToStartID|preventDefault|offsetWidth|reflectionGET|startAnimation|offsetLeft|totalImagesWidth|drag|reflectPath|mouseup|createStructure|test|clientX|animationSpeed|load|hidden|in|script|location|reflect|_navigation|_win64|class||next|trying|pause|write|php|navigation|setInterval|is|67|alpha|play|_scrollbar|clearInterval|innerHTML|_slider|navigator|DOMMouseScroll|firstChild|_next|mousewheel|you|marginTop|unattached|loading_bar|10000|120|block|_previous|previous|onmousedown|alt|150|delete|WebKit|_caption|loaded|mousemove|250|longdesc|cc_on|xPosition|Pointer|onselectstart|sqrt|caption|perhaps|_loading|are|an|position|filter|documentElement|createElement|relative|_|inline|className|1000|returnValue|touchstart|ImageFlow||touchmove|loading_txt|touchend|defer|paddingLeft|nbsp|scrollbar|remove|onreadystatechange|964|end|KHTML|onkeydown|_slideshow|userAgent|_loading_bar|keyCode|replaceChild|_images|DOMContentLoaded|domReady|resize|1500|_win32|img|removeChild|alert|top|118|imageflow|5000'.split('|'),0,{}));


/* ImageFlow constructor */
function ImageFlow ()
{
	/* Setting option defaults */
	this.defaults =
	{
		animationSpeed:     50,             /* Animation speed in ms */
		aspectRatio:        1.964,          /* Aspect ratio of the ImageFlow container (width divided by height) */
		buttons:            false,          /* Toggle navigation buttons */
		captions:           true,           /* Toggle captions */
		circular:           false,          /* Toggle circular rotation */
		imageCursor:        'pointer',      /* Cursor type for all images - default is 'default' */
		ImageFlowID:        'imageflow',    /* Default id of the ImageFlow container */
		imageFocusM:        1.0,            /* Multiplicator for the focussed image size in percent */
		imageFocusMax:      4,              /* Max number of images on each side of the focussed one */
		imagePath:          '',             /* Path to the images relative to the reflect_.php script */
		imageScaling:       true,           /* Toggle image scaling */ 
		imagesHeight:       0.67,           /* Height of the images div container in percent */
		imagesM:            1.0,            /* Multiplicator for all images in percent */
		onClick:            function() { document.location = this.url; },   /* Onclick behaviour */
		opacity:            false,          /* Toggle image opacity */
		opacityArray:       [10,8,6,4,2],   /* Image opacity (range: 0 to 10) first value is for the focussed image */
		percentLandscape:   118,            /* Scale landscape format */
		percentOther:       100,            /* Scale portrait and square format */
		preloadImages:      true,           /* Toggles loading bar (false: requires img attributes height and width) */
		reflections:        true,           /* Toggle reflections */
		reflectionGET:      '',             /* Pass variables via the GET method to the reflect_.php script */
		reflectionP:        0.5,            /* Height of the reflection in percent of the source image */
		reflectionPNG:      false,          /* Toggle reflect2.php or reflect3.php */
		reflectPath:        '',             /* Path to the reflect_.php script */
		scrollbarP:         0.6,            /* Width of the scrollbar in percent */
		slider:             true,           /* Toggle slider */
		sliderCursor:       'e-resize',     /* Slider cursor type - default is 'default' */
		sliderWidth:        14,             /* Width of the slider in px */
		slideshow:          false,          /* Toggle slideshow */
		slideshowSpeed:     1500,           /* Time between slides in ms */
		slideshowAutoplay:  false,          /* Toggle automatic slideshow play on startup */
		startID:            1,              /* Image ID to begin with */
		glideToStartID:     true,           /* Toggle glide animation to start ID */
		startAnimation:     false,          /* Animate images moving in from the right on startup */
		xStep:              150             /* Step width on the x-axis in px */
	};


	/* Closure for this */
	var my = this;


	/* Initiate ImageFlow */
	this.init = function (options)
	{
		/* Evaluate options */
		for(var name in my.defaults) 
		{
			this[name] = (options !== undefined && options[name] !== undefined) ? options[name] : my.defaults[name];
		}

		/* Try to get ImageFlow div element */
		var ImageFlowDiv = document.getElementById(my.ImageFlowID);
		if(ImageFlowDiv)
		{
			/* Set it global within the ImageFlow scope */
			ImageFlowDiv.style.visibility = 'visible';
			this.ImageFlowDiv = ImageFlowDiv;

			/* Try to create XHTML structure */
			if(this.createStructure())
			{
				this.imagesDiv = document.getElementById(my.ImageFlowID+'_images');
				this.captionDiv = document.getElementById(my.ImageFlowID+'_caption');
				this.navigationDiv = document.getElementById(my.ImageFlowID+'_navigation');
				this.scrollbarDiv = document.getElementById(my.ImageFlowID+'_scrollbar');
				this.sliderDiv = document.getElementById(my.ImageFlowID+'_slider');
				this.buttonNextDiv = document.getElementById(my.ImageFlowID+'_next');
				this.buttonPreviousDiv = document.getElementById(my.ImageFlowID+'_previous');
				this.buttonSlideshow = document.getElementById(my.ImageFlowID+'_slideshow');

				this.indexArray = [];
				this.current = 0;
				this.imageID = 0;
				this.target = 0;
				this.memTarget = 0;
				this.firstRefresh = true;
				this.firstCheck = true;
				this.busy = false;

				/* Set height of the ImageFlow container and center the loading bar */
				var width = this.ImageFlowDiv.offsetWidth;
				var height = Math.round(width / my.aspectRatio);
				document.getElementById(my.ImageFlowID+'_loading_txt').style.paddingTop = ((height * 0.5) -22) + 'px';
				ImageFlowDiv.style.height = height + 'px';

				/* Init loading progress */
				this.loadingProgress();
			}
		}
	};


	/* Create HTML Structure */
	this.createStructure = function()
	{
		/* Create images div container */
		var imagesDiv = my.Helper.createDocumentElement('div','images');

		/* Shift all images into the images div */
		var node, version, src, imageNode;
		var max = my.ImageFlowDiv.childNodes.length;
		for(var index = 0; index < max; index++)
		{
			node = my.ImageFlowDiv.childNodes[index];
			if (node && node.nodeType == 1 && node.nodeName == 'IMG')
			{
				/* Add 'reflect.php?img=' */
				if(my.reflections === true)
				{
					version = (my.reflectionPNG) ? '3' : '2';
					src = my.imagePath+node.getAttribute('src',2);
					//src = my.reflectPath+'reflect'+version+'.php?img='+src+my.reflectionGET;
					src = my.reflectPath+'index/reflect?img='+src+my.reflectionGET;
					node.setAttribute('src',src);
				}

				/* Clone image nodes and append them to the images div */
				imageNode = node.cloneNode(true);
				imagesDiv.appendChild(imageNode);
			}
		}

		/* Clone some more images to make a circular animation possible */
		if(my.circular)
		{
			/* Create temporary elements to hold the cloned images */
			var first = my.Helper.createDocumentElement('div','images');
			var last = my.Helper.createDocumentElement('div','images');
			
			/* Make sure, that there are enough images to use circular mode */
			max = imagesDiv.childNodes.length;
			if(max < my.imageFocusMax)
			{
				my.imageFocusMax = max;
			}

			/* Do not clone anything if there is only one image */
			if(max > 1)
			{
				/* Clone the first and last images */
				var i;
				for(i = 0; i < max; i++)
				{
					/* Number of clones on each side equals the imageFocusMax */
					node = imagesDiv.childNodes[i];
					if(i < my.imageFocusMax)
					{
						imageNode = node.cloneNode(true);
						first.appendChild(imageNode);
					}
					if(max-i < my.imageFocusMax+1)
					{
						imageNode = node.cloneNode(true);
						last.appendChild(imageNode);
					}
				}

				/* Sort the image nodes in the following order: last | originals | first */
				for(i = 0; i < max; i++)
				{
					node = imagesDiv.childNodes[i];
					imageNode = node.cloneNode(true);
					last.appendChild(imageNode);
				}
				for(i = 0; i < my.imageFocusMax; i++)
				{
					node = first.childNodes[i];
					imageNode = node.cloneNode(true);
					last.appendChild(imageNode);
				}
				
				/* Overwrite the imagesDiv with the new order */
				imagesDiv = last;
			}
		}

		/* Create slideshow button div and append it to the images div */
		if(my.slideshow)
		{
			var slideshowButton = my.Helper.createDocumentElement('div','slideshow');
			imagesDiv.appendChild(slideshowButton);
		}

		/* Create loading text container */
		var loadingP = my.Helper.createDocumentElement('p','loading_txt');
		var loadingText = document.createTextNode(' ');
		loadingP.appendChild(loadingText);

		/* Create loading div container */
		var loadingDiv = my.Helper.createDocumentElement('div','loading');

		/* Create loading bar div container inside the loading div */
		var loadingBarDiv = my.Helper.createDocumentElement('div','loading_bar');
		loadingDiv.appendChild(loadingBarDiv);

		/* Create captions div container */
		var captionDiv = my.Helper.createDocumentElement('div','caption');

		/* Create slider and button div container inside the scrollbar div */
		var scrollbarDiv = my.Helper.createDocumentElement('div','scrollbar');
		var sliderDiv = my.Helper.createDocumentElement('div','slider');
		scrollbarDiv.appendChild(sliderDiv);
		if(my.buttons)
		{
			var buttonPreviousDiv = my.Helper.createDocumentElement('div','previous', 'button');
			var buttonNextDiv = my.Helper.createDocumentElement('div','next', 'button');
			scrollbarDiv.appendChild(buttonPreviousDiv);
			scrollbarDiv.appendChild(buttonNextDiv);
		}

		/* Create navigation div container beneath images div */
		var navigationDiv = my.Helper.createDocumentElement('div','navigation');
		navigationDiv.appendChild(captionDiv);
		navigationDiv.appendChild(scrollbarDiv);
	
		/* Update document structure and return true on success */
		var success = false;
		if (my.ImageFlowDiv.appendChild(imagesDiv) &&
			my.ImageFlowDiv.appendChild(loadingP) &&
			my.ImageFlowDiv.appendChild(loadingDiv) &&
			my.ImageFlowDiv.appendChild(navigationDiv))
		{
			/* Remove image nodes outside the images div */
			max = my.ImageFlowDiv.childNodes.length;
			for(index = 0; index < max; index++)
			{
				node = my.ImageFlowDiv.childNodes[index];
				if (node && node.nodeType == 1 && node.nodeName == 'IMG')
				{
					my.ImageFlowDiv.removeChild(node);
				}
			}
			success = true;
		}
		return success;
	};


	/* Manage loading progress and call the refresh function */
	this.loadingProgress = function()
	{
		var p = my.loadingStatus();
		if((p < 100 || my.firstCheck) && my.preloadImages)
		{
			/* Insert a short delay if the browser loads rapidly from its cache */
			if(my.firstCheck && p == 100)
			{
				my.firstCheck = false;
				window.setTimeout(my.loadingProgress, 100);
			}
			else
			{
				window.setTimeout(my.loadingProgress, 40);
			}
		}
		else
		{
			/* Hide loading elements */
			document.getElementById(my.ImageFlowID+'_loading_txt').style.display = 'none';
			document.getElementById(my.ImageFlowID+'_loading').style.display = 'none';

			/* Refresh ImageFlow on window resize - delay adding this event for the IE */
			window.setTimeout(my.Helper.addResizeEvent, 1000);

			/* Call refresh once on startup to display images */
			my.refresh();

			/* Only initialize navigation elements if there is more than one image */
			if(my.max > 1)
			{
				/* Initialize mouse, touch and key support */
				my.MouseWheel.init();
				my.MouseDrag.init();
				my.Touch.init();
				my.Key.init();
				
				/* Toggle slideshow */
				if(my.slideshow)
				{
					my.Slideshow.init();
				}

				/* Toggle scrollbar visibility */
				if(my.slider)
				{
					my.scrollbarDiv.style.visibility = 'visible';
				}
			}
		}
	};


	/* Return loaded images in percent, set loading bar width and loading text */
	this.loadingStatus = function()
	{
		var max = my.imagesDiv.childNodes.length;
		var i = 0, completed = 0;
		var image = null;
		for(var index = 0; index < max; index++)
		{
			image = my.imagesDiv.childNodes[index];
			if(image && image.nodeType == 1 && image.nodeName == 'IMG')
			{
				if(image.complete)
				{
					completed++;
				}
				i++;
			}
		}

		var finished = Math.round((completed/i)*100);
		var loadingBar = document.getElementById(my.ImageFlowID+'_loading_bar');
		loadingBar.style.width = finished+'%';

		/* Do not count the cloned images */
		if(my.circular)
		{
			i = i - (my.imageFocusMax*2);
			completed = (finished < 1) ? 0 : Math.round((i/100)*finished);
		}

		var loadingP = document.getElementById(my.ImageFlowID+'_loading_txt');
		var loadingTxt = document.createTextNode('loading images '+completed+'/'+i);
		loadingP.replaceChild(loadingTxt,loadingP.firstChild);
		return finished;
	};


	/* Cache EVERYTHING that only changes on refresh or resize of the window */
	this.refresh = function()
	{
		/* Cache global variables */
		this.imagesDivWidth = my.imagesDiv.offsetWidth+my.imagesDiv.offsetLeft;
		this.maxHeight = Math.round(my.imagesDivWidth / my.aspectRatio);
		this.maxFocus = my.imageFocusMax * my.xStep;
		this.size = my.imagesDivWidth * 0.5;
		this.sliderWidth = my.sliderWidth * 0.5;
		this.scrollbarWidth = (my.imagesDivWidth - ( Math.round(my.sliderWidth) * 2)) * my.scrollbarP;
		this.imagesDivHeight = Math.round(my.maxHeight * my.imagesHeight);

		/* Change imageflow div properties */
		my.ImageFlowDiv.style.height = my.maxHeight + 'px';

		/* Change images div properties */
		my.imagesDiv.style.height =  my.imagesDivHeight + 'px'; 
		
		/* Change images div properties */
		my.navigationDiv.style.height =  (my.maxHeight - my.imagesDivHeight) + 'px'; 

		/* Change captions div properties */
		my.captionDiv.style.width = my.imagesDivWidth + 'px';
		my.captionDiv.style.paddingTop = Math.round(my.imagesDivWidth * 0.02) + 'px';

		/* Change scrollbar div properties */
		my.scrollbarDiv.style.width = my.scrollbarWidth + 'px';
		my.scrollbarDiv.style.marginTop = Math.round(my.imagesDivWidth * 0.02) + 'px';
		my.scrollbarDiv.style.marginLeft = Math.round(my.sliderWidth + ((my.imagesDivWidth - my.scrollbarWidth)/2)) + 'px';

		/* Set slider attributes */
		my.sliderDiv.style.cursor = my.sliderCursor;
		my.sliderDiv.onmousedown = function () { my.MouseDrag.start(this); return false;};

		if(my.buttons)
		{
			my.buttonPreviousDiv.onclick = function () { my.MouseWheel.handle(1); };
			my.buttonNextDiv.onclick = function () { my.MouseWheel.handle(-1); };
		}

		/* Set the reflection multiplicator */
		var multi = (my.reflections === true) ? my.reflectionP + 1 : 1;

		/* Set image attributes */
		var max = my.imagesDiv.childNodes.length;
		var i = 0;
		var image = null;
		for (var index = 0; index < max; index++)
		{
			image = my.imagesDiv.childNodes[index];
			if(image !== null && image.nodeType == 1 && image.nodeName == 'IMG')
			{
				this.indexArray[i] = index;

				/* Set image attributes to store values */
				image.url = image.getAttribute('longdesc');
				image.xPosition = (-i * my.xStep);
				image.i = i;

				/* Add width and height as attributes only once */
				if(my.firstRefresh)
				{
					if(image.getAttribute('width') !== null && image.getAttribute('height') !== null)
					{
						image.w = image.getAttribute('width');
						image.h = image.getAttribute('height') * multi;
					}
					else{
						image.w = image.width;
						image.h = image.height;
					}
				}

				/* Check source image format. Get image height minus reflection height! */
				if((image.w) > (image.h / (my.reflectionP + 1)))
				{
					/* Landscape format */
					image.pc = my.percentLandscape;
					image.pcMem = my.percentLandscape;
				}
				else
				{
					/* Portrait and square format */
					image.pc = my.percentOther;
					image.pcMem = my.percentOther;
				}
				
				/* Change image positioning */
				if(my.imageScaling === false)
				{
					image.style.position = 'relative';
					image.style.display = 'inline';
				}

				/* Set image cursor type */
				image.style.cursor = my.imageCursor;
				i++;
			}
		}
		this.max = my.indexArray.length;

		/* Override dynamic sizes based on the first image */
		if(my.imageScaling === false)
		{
			image = my.imagesDiv.childNodes[my.indexArray[0]];

			/* Set left padding for the first image */
			this.totalImagesWidth = image.w * my.max;
			image.style.paddingLeft = (my.imagesDivWidth/2) + (image.w/2) + 'px';

			/* Override images and navigation div height */
			my.imagesDiv.style.height =  image.h + 'px';
			my.navigationDiv.style.height =  (my.maxHeight - image.h) + 'px'; 
		}

		/* Handle startID on the first refresh */
		if(my.firstRefresh)
		{
			/* Reset variable */
			my.firstRefresh = false;

			/* Set imageID to the startID */
			my.imageID = my.startID-1;
			if (my.imageID < 0 )
			{
				my.imageID = 0;
			}

			/* Map image id range in cicular mode (ignore the cloned images) */
			if(my.circular)
			{	
				my.imageID = my.imageID + my.imageFocusMax;
			}

			/* Make sure, that the id is smaller than the image count  */
			maxId = (my.circular) ?  (my.max-(my.imageFocusMax))-1 : my.max-1;
			if (my.imageID > maxId)
			{
				my.imageID = maxId;
			}

			/* Toggle glide animation to start ID */
			if(my.glideToStartID === false)
			{
				my.moveTo(-my.imageID * my.xStep);
			}

			/* Animate images moving in from the right */
			if(my.startAnimation)
			{
				my.moveTo(5000);
			}
		}

		/* Only animate if there is more than one image */
		if(my.max > 1)
		{
			my.glideTo(my.imageID);
		}

		/* Display images in current order */
		my.moveTo(my.current);
	};


	/* Main animation function */
	this.moveTo = function(x)
	{
		this.current = x;
		this.zIndex = my.max;

		/* Main loop */
		for (var index = 0; index < my.max; index++)
		{
			var image = my.imagesDiv.childNodes[my.indexArray[index]];
			var currentImage = index * -my.xStep;

			/* Enabled image scaling */
			if(my.imageScaling)
			{
				/* Don't display images that are not conf_focussed */
				if ((currentImage + my.maxFocus) < my.memTarget || (currentImage - my.maxFocus) > my.memTarget)
				{
					image.style.visibility = 'hidden';
					image.style.display = 'none';
				}
				else
				{
					var z = (Math.sqrt(10000 + x * x) + 100) * my.imagesM;
					var xs = x / z * my.size + my.size;

					/* Still hide images until they are processed, but set display style to block */
					image.style.display = 'block';

					/* Process new image height and width */
					var newImageH = (image.h / image.w * image.pc) / z * my.size;
					var newImageW = 0;
					switch (newImageH > my.maxHeight)
					{
						case false:
							newImageW = image.pc / z * my.size;
							break;

						default:
							newImageH = my.maxHeight;
							newImageW = image.w * newImageH / image.h;
							break;
					}

					var newImageTop = (my.imagesDivHeight - newImageH) + ((newImageH / (my.reflectionP + 1)) * my.reflectionP);

					/* Set new image properties */
					image.style.left = xs - (image.pc / 2) / z * my.size + 'px';
					if(newImageW && newImageH)
					{
						image.style.height = newImageH + 'px';
						image.style.width = newImageW + 'px';
						image.style.top = newImageTop + 'px';
					}
					image.style.visibility = 'visible';

					/* Set image layer through zIndex */
					switch ( x < 0 )
					{
						case true:
							this.zIndex++;
							break;

						default:
							this.zIndex = my.zIndex - 1;
							break;
					}

					/* Change zIndex and onclick function of the focussed image */
					switch ( image.i == my.imageID )
					{
						case false:
							image.onclick = function() { my.glideTo(this.i);};
							break;

						default:
							this.zIndex = my.zIndex + 1;
							if(image.url !== '')
							{
								image.onclick = my.onClick;
							}
							break;
					}
					image.style.zIndex = my.zIndex;
				}
			}

			/* Disabled image scaling */
			else
			{
				if ((currentImage + my.maxFocus) < my.memTarget || (currentImage - my.maxFocus) > my.memTarget)
				{
					image.style.visibility = 'hidden';
				}
				else
				{
					image.style.visibility = 'visible';

					/* Change onclick function of the focussed image */
					switch ( image.i == my.imageID )
					{
						case false:
							image.onclick = function() { my.glideTo(this.i);};
							break;

						default:
							if(image.url !== '')
							{
								image.onclick = my.onClick;
							}
							break;
					}
				}	
				my.imagesDiv.style.marginLeft = (x - my.totalImagesWidth) + 'px';
			}

			x += my.xStep;
		}
	};


	/* Initializes image gliding animation */
	this.glideTo = function(imageID)
	{
		/* Check for jumppoints */
		var jumpTarget, clonedImageID;
		if(my.circular)
		{
			/* Trigger left jumppoint */
			if(imageID+1 === my.imageFocusMax)
			{
				/* Set jump target to the same cloned image on the right */
				clonedImageID = my.max - my.imageFocusMax;
				jumpTarget = -clonedImageID * my.xStep;

				/* Set the imageID to the last image */
				imageID = clonedImageID-1 ;
			}

			/* Trigger right jumppoint */
			if(imageID === (my.max - my.imageFocusMax))
			{
				/* Set jump target to the same cloned image on the left */
				clonedImageID = my.imageFocusMax-1;
				jumpTarget = -clonedImageID * my.xStep;
				
				/* Set the imageID to the first image */
				imageID = clonedImageID+1;
			}
		}

		/* Calculate new image position target */
		var x = -imageID * my.xStep;
		this.target = x;
		this.memTarget = x;
		this.imageID = imageID;

		/* Display new caption */
		var caption = my.imagesDiv.childNodes[imageID].getAttribute('alt');
		if (caption === '' || my.captions === false)
		{
			caption = '&nbsp;';
		}
		my.captionDiv.innerHTML = caption;

		/* Set scrollbar slider to new position */
		if (my.MouseDrag.busy === false)
		{
			if(my.circular)
			{
				this.newSliderX = ((imageID-my.imageFocusMax) * my.scrollbarWidth) / (my.max-(my.imageFocusMax*2)-1) - my.MouseDrag.newX;
			}
			else
			{
				this.newSliderX = (imageID * my.scrollbarWidth) / (my.max-1) - my.MouseDrag.newX;
			}
			my.sliderDiv.style.marginLeft = (my.newSliderX - my.sliderWidth) + 'px';
		}

		/* Only process if opacity or a multiplicator for the focussed image has been set */
		if(my.opacity === true || my.imageFocusM !== my.defaults.imageFocusM)
		{
			/* Set opacity for centered image */
			my.Helper.setOpacity(my.imagesDiv.childNodes[imageID], my.opacityArray[0]);
			my.imagesDiv.childNodes[imageID].pc = my.imagesDiv.childNodes[imageID].pc * my.imageFocusM;

			/* Set opacity for the other images that are displayed */
			var opacityValue = 0;
			var rightID = 0;
			var leftID = 0;
			var last = my.opacityArray.length;

			for (var i = 1; i < (my.imageFocusMax+1); i++)
			{
				if((i+1) > last)
				{
					opacityValue = my.opacityArray[last-1];
				}
				else
				{
					opacityValue = my.opacityArray[i];
				}

				rightID = imageID + i;
				leftID = imageID - i;

				if (rightID < my.max)
				{
					my.Helper.setOpacity(my.imagesDiv.childNodes[rightID], opacityValue);
					my.imagesDiv.childNodes[rightID].pc = my.imagesDiv.childNodes[rightID].pcMem;
				}
				if (leftID >= 0)
				{
					my.Helper.setOpacity(my.imagesDiv.childNodes[leftID], opacityValue);
					my.imagesDiv.childNodes[leftID].pc = my.imagesDiv.childNodes[leftID].pcMem;
				}
			}
		}

		/* Move the images to the jump target */
		if(jumpTarget)
		{
			my.moveTo(jumpTarget);
		}

		/* Animate gliding to new x position */
		if (my.busy === false)
		{
			my.busy = true;
			my.animate();
		}
	};


	/* Animates image gliding */
	this.animate = function()
	{
		switch (my.target < my.current-1 || my.target > my.current+1)
		{
			case true:
				my.moveTo(my.current + (my.target-my.current)/3);
				window.setTimeout(my.animate, my.animationSpeed);
				my.busy = true;
				break;

			default:
				my.busy = false;
				break;
		}
	};


	/* Used by user events to call the glideTo function */
	this.glideOnEvent = function(imageID)
	{
		/* Interrupt slideshow on mouse wheel, keypress, touch and mouse drag */
		if(my.slideshow)
		{
			my.Slideshow.interrupt();
		}
		
		/* Glide to new imageID */
		my.glideTo(imageID);
	};


	/* Slideshow function */
	this.Slideshow =
	{
		direction: 1,
		
		init: function()
		{
			/* Call start() if autoplay is enabled, stop() if it is disabled */
			(my.slideshowAutoplay) ? my.Slideshow.start() : my.Slideshow.stop();	
		},

		interrupt: function()
		{	
			/* Remove interrupt event */
			my.Helper.removeEvent(my.ImageFlowDiv,'click',my.Slideshow.interrupt);
			
			/* Interrupt the slideshow */
			my.Slideshow.stop();
		},

		addInterruptEvent: function()
		{
			/* A click anywhere inside the ImageFlow div interrupts the slideshow */
			my.Helper.addEvent(my.ImageFlowDiv,'click',my.Slideshow.interrupt);
		},

		start: function()
		{
			/* Set button style to pause */
			my.Helper.setClassName(my.buttonSlideshow, 'slideshow pause');

			/* Set onclick behaviour to stop */
			my.buttonSlideshow.onclick = function () { my.Slideshow.stop(); };

			/* Set slide interval */
			my.Slideshow.action = window.setInterval(my.Slideshow.slide, my.slideshowSpeed);

			/* Allow the user to always interrupt the slideshow */
			window.setTimeout(my.Slideshow.addInterruptEvent, 100);
		},

		stop: function()
		{
			/* Set button style to play */
			my.Helper.setClassName(my.buttonSlideshow, 'slideshow play');
			
			/* Set onclick behaviour to start */
			my.buttonSlideshow.onclick = function () { my.Slideshow.start(); };
			
			/* Clear slide interval */
			window.clearInterval(my.Slideshow.action);
		},

		slide: function()
		{
			var newImageID = my.imageID + my.Slideshow.direction;
			var reverseDirection = false;
			
			/* Reverse direction at the last image on the right */
			if(newImageID === my.max)
			{
				my.Slideshow.direction = -1;
				reverseDirection = true;
			}
			
			/* Reverse direction at the last image on the left */
			if(newImageID < 0)
			{
				my.Slideshow.direction = 1;
				reverseDirection = true;
			}
			
			/* If direction is reversed recall this method, else call the glideTo method */
			(reverseDirection) ? my.Slideshow.slide() : my.glideTo(newImageID);
		}
	};


	/* Mouse Wheel support */
	this.MouseWheel =
	{
		init: function()
		{
			/* Init mouse wheel listener */
			if(window.addEventListener)
			{
				my.ImageFlowDiv.addEventListener('DOMMouseScroll', my.MouseWheel.get, false);
			}
			my.Helper.addEvent(my.ImageFlowDiv,'mousewheel',my.MouseWheel.get);
		},

		get: function(event)
		{
			var delta = 0;
			if (!event)
			{
				event = window.event;
			}
			if (event.wheelDelta)
			{
				delta = event.wheelDelta / 120;
			}
			else if (event.detail)
			{
				delta = -event.detail / 3;
			}
			if (delta)
			{
				my.MouseWheel.handle(delta);
			}
			my.Helper.suppressBrowserDefault(event);
		},

		handle: function(delta)
		{
			var change = false;
			var newImageID = 0;
			if(delta > 0)
			{
				if(my.imageID >= 1)
				{
					newImageID = my.imageID -1;
					change = true;
				}
			}
			else
			{
				if(my.imageID < (my.max-1))
				{
					newImageID = my.imageID +1;
					change = true;
				}
			}

			/* Glide to next (mouse wheel down) / previous (mouse wheel up) image  */
			if(change)
			{
				my.glideOnEvent(newImageID);
			}
		}
	};


	/* Mouse Dragging */
	this.MouseDrag =
	{
		object: null,
		objectX: 0,
		mouseX: 0,
		newX: 0,
		busy: false,

		/* Init mouse event listener */
		init: function()
		{
			my.Helper.addEvent(my.ImageFlowDiv,'mousemove',my.MouseDrag.drag);
			my.Helper.addEvent(my.ImageFlowDiv,'mouseup',my.MouseDrag.stop);
			my.Helper.addEvent(document,'mouseup',my.MouseDrag.stop);

			/* Avoid text and image selection while dragging  */
			my.ImageFlowDiv.onselectstart = function ()
			{
				var selection = true;
				if (my.MouseDrag.busy)
				{
					selection = false;
				}
				return selection;
			};
		},

		start: function(o)
		{
			my.MouseDrag.object = o;
			my.MouseDrag.objectX = my.MouseDrag.mouseX - o.offsetLeft + my.newSliderX;
		},

		stop: function()
		{
			my.MouseDrag.object = null;
			my.MouseDrag.busy = false;
		},

		drag: function(e)
		{
			var posx = 0;
			if (!e)
			{
				e = window.event;
			}
			if (e.pageX)
			{
				posx = e.pageX;
			}
			else if (e.clientX)
			{
				posx = e.clientX + document.body.scrollLeft	+ document.documentElement.scrollLeft;
			}
			my.MouseDrag.mouseX = posx;

			if(my.MouseDrag.object !== null)
			{
				var newX = (my.MouseDrag.mouseX - my.MouseDrag.objectX) + my.sliderWidth;

				/* Make sure, that the slider is moved in proper relation to previous movements by the glideTo function */
				if(newX < ( - my.newSliderX))
				{
					newX = - my.newSliderX;
				}
				if(newX > (my.scrollbarWidth - my.newSliderX))
				{
					newX = my.scrollbarWidth - my.newSliderX;
				}

				/* Set new slider position */
				var step, imageID;
				if(my.circular)
				{
					step = (newX + my.newSliderX) / (my.scrollbarWidth / (my.max-(my.imageFocusMax*2)-1));
					imageID = Math.round(step)+my.imageFocusMax;
				}
				else
				{
					step = (newX + my.newSliderX) / (my.scrollbarWidth / (my.max-1));
					imageID = Math.round(step);
				}
				my.MouseDrag.newX = newX;
				my.MouseDrag.object.style.left = newX + 'px';
				if(my.imageID !== imageID)
				{
					my.glideOnEvent(imageID);
				}
				my.MouseDrag.busy = true;
			}
		}
	};


	/* Safari touch events on the iPhone and iPod Touch */
	this.Touch =
	{
		x: 0,
		startX: 0,
		stopX: 0,
		busy: false,
		first: true,

		/* Init touch event listener */
		init: function()
		{
			my.Helper.addEvent(my.navigationDiv,'touchstart',my.Touch.start);
			my.Helper.addEvent(document,'touchmove',my.Touch.handle);
			my.Helper.addEvent(document,'touchend',my.Touch.stop);	
		},
		
		isOnNavigationDiv: function(e)
		{
			var state = false;
			if(e.touches)
			{
				var target = e.touches[0].target;
				if(target === my.navigationDiv || target === my.sliderDiv || target === my.scrollbarDiv)
				{
					state = true;
				}
			}
			return state;
		},

		getX: function(e)
		{
			var x = 0;
			if(e.touches)
			{
				x = e.touches[0].pageX;
			}
			return x;
		},

		start: function(e)
		{
			my.Touch.startX = my.Touch.getX(e);
			my.Touch.busy = true;
			my.Helper.suppressBrowserDefault(e);
		},

		isBusy: function()
		{
			var busy = false;
			if(my.Touch.busy)
			{
				busy = true;
			}
			return busy;
		},

		/* Handle touch event position within the navigation div */
		handle: function(e)
		{
			if(my.Touch.isBusy && my.Touch.isOnNavigationDiv(e))
			{
				var max = (my.circular) ? (my.max-(my.imageFocusMax*2)-1) : (my.max-1);
				if(my.Touch.first)
				{
					my.Touch.stopX = (max - my.imageID) * (my.imagesDivWidth / max);
					my.Touch.first = false;
				}
				var newX = -(my.Touch.getX(e) - my.Touch.startX - my.Touch.stopX);

				/* Map x-axis touch coordinates in range of the ImageFlow width */
				if(newX < 0)
				{
					newX = 0;
				}
				if(newX > my.imagesDivWidth)
				{
					newX = my.imagesDivWidth;
				}

				my.Touch.x = newX;
				
				var imageID = Math.round(newX / (my.imagesDivWidth / max));
				imageID = max - imageID;
				if(my.imageID !== imageID)
				{
					if(my.circular)
					{
						imageID = imageID + my.imageFocusMax;
					}
					my.glideOnEvent(imageID);
				}
				my.Helper.suppressBrowserDefault(e);
			}
		},

		stop: function()
		{
			my.Touch.stopX = my.Touch.x;
			my.Touch.busy = false;
		}
	};


	/* Key support */
	this.Key =
	{
		/* Init key event listener */
		init: function()
		{
			document.onkeydown = function(event){ my.Key.handle(event); };
		},

		/* Handle the arrow keys */
		handle: function(event)
		{
			var charCode  = my.Key.get(event);
			switch (charCode)
			{
				/* Right arrow key */
				case 39:
					my.MouseWheel.handle(-1);
					break;

				/* Left arrow key */
				case 37:
					my.MouseWheel.handle(1);
					break;
			}
		},

		/* Get the current keycode */
		get: function(event)
		{
			event = event || window.event;
			return event.keyCode;
		}
	};


	/* Helper functions */
	this.Helper =
	{
		/* Add events */
		addEvent: function(obj, type, fn)
		{
			if(obj.addEventListener)
			{
				obj.addEventListener(type, fn, false);
			}
			else if(obj.attachEvent)
			{
				obj["e"+type+fn] = fn;
				obj[type+fn] = function() { obj["e"+type+fn]( window.event ); };
				obj.attachEvent( "on"+type, obj[type+fn] );
			}
		},

		/* Remove events */
		removeEvent: function( obj, type, fn )
		{
			if (obj.removeEventListener)
			{
				obj.removeEventListener( type, fn, false );
			}
			else if (obj.detachEvent)
			{
				/* The IE breaks if you're trying to detach an unattached event http://msdn.microsoft.com/en-us/library/ms536411(VS.85).aspx */
				if(obj[type+fn] === undefined)
				{
					alert('Helper.removeEvent » Pointer to detach event is undefined - perhaps you are trying to detach an unattached event?');
				}
				obj.detachEvent( 'on'+type, obj[type+fn] );
				obj[type+fn] = null;
				obj['e'+type+fn] = null;
			}
		},

		/* Set image opacity */
		setOpacity: function(object, value)
		{
			if(my.opacity === true)
			{
				object.style.opacity = value/10;
				object.style.filter = 'alpha(opacity=' + value*10 + ')';
			}
		},

		/* Create HTML elements */
		createDocumentElement: function(type, id, optionalClass)
		{
			var element = document.createElement(type);
			element.setAttribute('id', my.ImageFlowID+'_'+id);
			if(optionalClass !== undefined)
			{
				id += ' '+optionalClass;
			}
			my.Helper.setClassName(element, id);
			return element;
		},

		/* Set CSS class */
		setClassName: function(element, className)
		{
			if(element)
			{
				element.setAttribute('class', className);
				element.setAttribute('className', className);
			}
		},

		/* Suppress default browser behaviour to avoid image/text selection while dragging */
		suppressBrowserDefault: function(e)
		{
			if(e.preventDefault)
			{
				e.preventDefault();
			}
			else
			{
				e.returnValue = false;
			}
			return false;
		},

		/* Add functions to the window.onresize event - can not be done by addEvent */
		addResizeEvent: function()
		{
			var otherFunctions = window.onresize;
			if(typeof window.onresize != 'function')
			{
				window.onresize = function()
				{
					my.refresh();
				};
			}
			else
			{
				window.onresize = function(){
					if (otherFunctions)
					{
						otherFunctions();
					}
					my.refresh();
				};
			}
		}
	};
}

/* DOMContentLoaded event handler - by Tanny O'Haley [4] */
var domReadyEvent =
{
	name: "domReadyEvent",
	/* Array of DOMContentLoaded event handlers.*/
	events: {},
	domReadyID: 1,
	bDone: false,
	DOMContentLoadedCustom: null,

	/* Function that adds DOMContentLoaded listeners to the array.*/
	add: function(handler)
	{
		/* Assign each event handler a unique ID. If the handler has an ID, it has already been added to the events object or been run.*/
		if (!handler.$$domReadyID)
		{
			handler.$$domReadyID = this.domReadyID++;

			/* If the DOMContentLoaded event has happened, run the function. */
			if(this.bDone)
			{
				handler();
			}

			/* store the event handler in the hash table */
			this.events[handler.$$domReadyID] = handler;
		}
	},

	remove: function(handler)
	{
		/* Delete the event handler from the hash table */
		if (handler.$$domReadyID)
		{
			delete this.events[handler.$$domReadyID];
		}
	},

	/* Function to process the DOMContentLoaded events array. */
	run: function()
	{
		/* quit if this function has already been called */
		if (this.bDone)
		{
			return;
		}

		/* Flag this function so we don't do the same thing twice */
		this.bDone = true;

		/* iterates through array of registered functions */
		for (var i in this.events)
		{
			this.events[i]();
		}
	},

	schedule: function()
	{
		/* Quit if the init function has already been called*/
		if (this.bDone)
		{
			return;
		}

		/* First, check for Safari or KHTML.*/
		if(/KHTML|WebKit/i.test(navigator.userAgent))
		{
			if(/loaded|complete/.test(document.readyState))
			{
				this.run();
			}
			else
			{
				/* Not ready yet, wait a little more.*/
				setTimeout(this.name + ".schedule()", 100);
			}
		}
		else if(document.getElementById("__ie_onload"))
		{
			/* Second, check for IE.*/
			return true;
		}

		/* Check for custom developer provided function.*/
		if(typeof this.DOMContentLoadedCustom === "function")
		{
			/* if DOM methods are supported, and the body element exists (using a double-check
			including document.body, for the benefit of older moz builds [eg ns7.1] in which
			getElementsByTagName('body')[0] is undefined, unless this script is in the body section) */
			if(typeof document.getElementsByTagName !== 'undefined' && (document.getElementsByTagName('body')[0] !== null || document.body !== null))
			{
				/* Call custom function. */
				if(this.DOMContentLoadedCustom())
				{
					this.run();
				}
				else
				{
					/* Not ready yet, wait a little more. */
					setTimeout(this.name + ".schedule()", 250);
				}
			}
		}
		return true;
	},

	init: function()
	{
		/* If addEventListener supports the DOMContentLoaded event.*/
		if(document.addEventListener)
		{
			document.addEventListener("DOMContentLoaded", function() { domReadyEvent.run(); }, false);
		}

		/* Schedule to run the init function.*/
		setTimeout("domReadyEvent.schedule()", 100);

		function run()
		{
			domReadyEvent.run();
		}

		/* Just in case window.onload happens first, add it to onload using an available method.*/
		if(typeof addEvent !== "undefined")
		{
			addEvent(window, "load", run);
		}
		else if(document.addEventListener)
		{
			document.addEventListener("load", run, false);
		}
		else if(typeof window.onload === "function")
		{
			var oldonload = window.onload;
			window.onload = function()
			{
				domReadyEvent.run();
				oldonload();
			};
		}
		else
		{
			window.onload = run;
		}

		/* for Internet Explorer */
		/*@cc_on
			@if (@_win32 || @_win64)
			document.write("<script id=__ie_onload defer src=\"//:\"><\/script>");
			var script = document.getElementById("__ie_onload");
			script.onreadystatechange = function()
			{
				if (this.readyState == "complete")
				{
					domReadyEvent.run(); // call the onload handler
				}
			};
			@end
		@*/
	}
};

var domReady = function(handler) { domReadyEvent.add(handler); };
domReadyEvent.init();


/* Create ImageFlow instances when the DOM structure has been loaded */
domReady(function()
{
	var instanceOne = new ImageFlow();
	instanceOne.init({ 
		ImageFlowID:'myImageFlow',
		captions: false,
		imageFocusM: 1.5,
		slideshow: true,
        slideshowAutoplay: true,
        slideshowSpeed: 3000,
        circular: true,
        reflectionGET: '&height=20%&bgc=f2f2f2&fade_start=20%',
        reflectionP: 0.2,
        opacity: true,
        xStep: 250,
        onClick: function() {
        		window.open("contentshow/" + this.id +'/type' , '_parent');
        	}
        });
        
});