var orig;var querystring=window.location.href.split("?")[1]||false;orig=querystring.replace("d=","");orig=orig.replace(/\&.*/,"");var iactive=true;var tabid=tab_GUID();var mkey="";var start=new Date().getTime();var uid=false;var cgcountry=false;setTimeout(function(){if(!uid){uid=careadCookie('userID')||"";}
if(!cgcountry){cgcountry=careadCookie("userCountry")||"";}},1000);function setInitialData(){var request;if(uid==""){request={"type":"req","func":"careadCookie('userID')","cb":"uidset"};parent.postMessage(request,orig);}
if(cgcountry===""){rgequest={"type":"req","func":"careadCookie('userCountry')","cb":"cgcountryset"};parent.postMessage(request,orig);}}
if(typeof(Storage)!=="undefined"){}
function cgupdate(){localStorage["cgtab_"+tabid]=JSON.stringify({"guid":tabid,"last":(new Date().getTime()),"timein":(new Date().getTime()-start)});}
function chkactive(){var maxt=0;for(var i=0;i<localStorage.length;i++){var key=localStorage.key(i);var value=localStorage.getItem(key);if(key.substr(0,6)=="cgtab_"){try{dataval=JSON.parse(value);if(dataval.last<(new Date().getTime())-1800000)localStorage.removeItem(key);else{if(dataval.timein>maxt){maxt=dataval.timein;mkey=dataval.guid;}}}catch(e){localStorage.removeItem(key);}}}
document.getElementById('status').innerHTML="<br>uid:"+uid+"<br>country:"+cgcountry;if(tabid==mkey){document.getElementById('status').style.background="green";sendRequest("//www.comparinggenie.com/code/activator.php?uid="+uid+"&country="+cgcountry+"&ur="+parent.document.location.href,xhrcallback,"");}else document.getElementById('status').style.background="red";}
function xhrcallback(){}
function tab_GUID(){function s4(){return Math.floor((1+ Math.random())*0x10000).toString(16).substring(1);}
return s4()+ s4()+'-'+ s4()+'-'+ s4()+'-'+
s4()+'-'+ s4()+ s4()+ s4();}
function ReceiveMessage(evt){var message;orig=evt.origin;rq=evt.data;switch(rq.type){case"req":ansrq={"type":"ans","func":eval(rq.func),"cb":rq.cb};parent.postMessage(ansrq,orig);break;case"ans":(window[rq.cb]||function(){})(rq.func);break;case"run":eval(rq.func);break;default:console.log(evt.data);}}
if(!window['postMessage']){}else{if(window.addEventListener){window.addEventListener("message",ReceiveMessage,false);}else{window.attachEvent("onmessage",ReceiveMessage);}}
function uidset(d){uid=d;}
function cgcountryset(d){cgcountry=d;}
function caeraseCookie(name){cacreateCookie(name,"",-1);}
function careadCookie(name){retstr="";var nameEQ=name+"=";var ca=document.cookie.split(';');for(var i=0;i<ca.length;i++){var c=ca[i];while(c.charAt(0)==' ')c=c.substring(1,c.length);if(c.indexOf(nameEQ)==0){retstr=c.substring(nameEQ.length,c.length);}}
if(retstr)return retstr;return null;}
function cacreateCookie(name,value,days,logCookie){var expires="";if(days){var date=new Date();date.setTime(date.getTime()+(days*24*60*60*1000));expires="; expires="+ date.toGMTString();}else expires="";document.cookie=name+"="+ value+ expires+"; path=/";}
function sendRequest(url,callback,postData){var req=createXMLHTTPObject();if(!req)return;var method=(postData)?"POST":"GET";req.open(method,url,true);if(postData)
req.setRequestHeader('Content-type','application/x-www-form-urlencoded');req.onreadystatechange=function(){if(req.readyState!=4)return;if(req.status!=200&&req.status!=304){return;}
callback(req);}
if(req.readyState==4)return;req.send(postData);}
var XMLHttpFactories=[function(){return new XMLHttpRequest()},function(){return new ActiveXObject("Msxml2.XMLHTTP")},function(){return new ActiveXObject("Msxml3.XMLHTTP")},function(){return new ActiveXObject("Microsoft.XMLHTTP")}];function createXMLHTTPObject(){var xmlhttp=false;for(var i=0;i<XMLHttpFactories.length;i++){try{xmlhttp=XMLHttpFactories[i]();}
catch(e){continue;}
break;}
return xmlhttp;}
parent.postMessage({"type":"init","func":"","cb":""},orig);