(function(){var r,t,a,s;window._Shopify=window._Shopify||{},r=["Shopify.API.reportScroll"],a=function(e,t){var n,i,o;if(("undefined"!=typeof console&&null!==console?console.log:void 0)&&(("undefined"!=typeof ShopifyApp&&null!==ShopifyApp?ShopifyApp.debug:void 0)||("undefined"!=typeof ShopifyPOS&&null!==ShopifyPOS?ShopifyPOS.debug:void 0)||t)&&!window.Teaspoon){for(i=0,o=r.length;i<o;i++)if(n=r[i],0<e.indexOf(n))return;return console.log("ShopifyApp "+e)}},s=function(e){return("undefined"!=typeof console&&null!==console?console.warn:void 0)&&!window.Teaspoon?console.warn("ShopifyApp "+e):a(e,!0)},t=function(e){var t,n,i,o,r,a,s,l;if(!(e.document&&e.document.body&&e.navigator&&e.navigator.userAgent))return!1;if(!(-1!==(l=e.navigator.userAgent).search(/Shopify Mobile|Shopify POS|Shopify Ping/g)&&-1!==l.search("iOS")))return!1;for(o=e.document.createElement("style"),a="",r=/(\@media[^\{]*)print([^\{]*\{)/g,n=0;n<e.document.styleSheets.length;){for(s=e.document.styleSheets[n],i=0;i<s.cssRules.length;)(t=s.cssRules[i]).cssText.match(r)&&(a+=t.cssText.replace(r,function(e,t,n){return t+"all"+n})),i++;n++}return o.innerText=a,e.document.body.appendChild(o),setTimeout(function(){e.document.body.removeChild(o)},2e3),!0},_Shopify.messageSlug=function(e){var t,n;for(t="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789",e=(e||"message")+"_",n=0;n<16;n++)e+=t.charAt(Math.floor(Math.random()*t.length));return e},null==_Shopify.Messenger&&(_Shopify.Messenger={modalMessages:[],messageHandlers:{},callbackPrefix:"onetime_callback",reset:function(){return this.messageHandlers={},this.modalMessages=[]},handlersFor:function(e){return this.messageHandlers[e]||[]},addHandler:function(e,t,n){return this.messageHandlers[e]||(this.messageHandlers[e]=[]),n&&this.modalMessages.push(e),this.messageHandlers[e].push(t)},setHandler:function(e,t){return this.messageHandlers[e]=[t]},invokeHandlers:function(e,t){var n,i,o,r,a,s;for(s=e.substring(0,this.callbackPrefix.length)===this.callbackPrefix,a=[],i=0,o=(r=this.handlersFor(e)).length;i<o;i++)(n=r[i])(e,t),s?a.push(this.removeHandler(e,n)):a.push(void 0);return a},addOnetimeHandler:function(e){var t;if(null!=e)return t=_Shopify.messageSlug(this.callbackPrefix),this.addHandler(t,e),t},removeHandler:function(e,t){var n;if(n=this.messageHandlers[e].indexOf(t),this.messageHandlers[e].splice(n,1),0===this.messageHandlers[e].length)return delete this.messageHandlers[e]},clearModal:function(){var e,t,n,i;for(e=0,t=(i=this.modalMessages).length;e<t;e++)n=i[e],delete this.messageHandlers[n];return this.modalMessages=[]}}),_Shopify.AppBase||(_Shopify.AppBase=function(){function e(){}return e.reset=function(){return _Shopify.Messenger.reset(),this.debug=!1,this.forceRedirect=!0,this.apiKey="",this.shopOrigin="",this._isReady=!1},e.getWindowLocation=function(){return window.location},e.setWindowLocation=function(e){var t,n;return(t=document.createElement("a")).href=e,"http:"===(n=t.protocol)||"https:"===n?window.location.assign(e):a("unable to set location to non-HTTPS/HTTP protocol: "+e,!0)},e.bindWindowLocation=function(){return _Shopify.Messenger.addHandler("Shopify.API.setWindowLocation",(n=this,function(e,t){return n.setWindowLocation(t)}));var n},e._isReady=!1,e.initWithData=function(){return this._isReady=!0},e.ready=function(e){if(!this._isReady)return _Shopify.Messenger.addHandler("Shopify.API.initialize",function(){return e()});setTimeout(e,0)},e.bindEvents=function(){var i,e,t;return _Shopify.Messenger.addHandler("Shopify.API.initialize",(i=this,function(e,t){var n;if(i.initWithData(t),t.bodyClasses&&t.bodyClasses.length)return(n=document.body.classList).add.apply(n,t.bodyClasses)})),_Shopify.Messenger.addHandler("Shopify.API.print",(e=this,function(){return window.focus(),e.print()})),window.addEventListener("message",this.__addEventMessageCallback.bind(this),!1),window.addEventListener("scroll",_Shopify.Utils.throttle((t=this,function(){return t.messageScrollPosition()}),200),!1),this.bindWindowLocation()},e.messageScrollPosition=function(){return this.postMessage("Shopify.API.reportScroll",{position:window.pageYOffset})},e.init=function(e){if(null==e&&(e={}),!this._hasCalledInit)return this._hasCalledInit=!0,this.reset(),this.loadConfig(e),this.checkFrame(),this.bindEvents(),this.postMessage("Shopify.API.initialize",{debug:this.debug,apiKey:this.apiKey})},e.checkFrame=function(){var e;if(window===window.parent)return e=(this.shopOrigin||"https://myshopify.com")+"/admin/apps/",this.apiKey&&(e=e+this.apiKey+this.getWindowLocation().pathname+(this.getWindowLocation().search||"")),this.forceRedirect?(a("detected that it was not loaded in an iframe and is redirecting to: "+e,!0),this.setWindowLocation(e)):s("detected that it was not loaded in an iframe but redirecting is disabled! Redirect URL would be: "+e)},e.loadConfig=function(e){if(this.apiKey=e.apiKey,this.shopOrigin=e.shopOrigin,this.forceRedirect=e.hasOwnProperty("forceRedirect")?!!e.forceRedirect:this.forceRedirect=!0,this.debug=!!e.debug,this.apiKey||s("warning: apiKey has not been set."),this.shopOrigin||s("warning: shopOrigin has not been set."),this.shopOrigin&&!this.shopOrigin.match(/^https?:\/\//))return s("warning: shopOrigin should include the protocol")},e.applyPrintStyle=function(e){return t(e)},e.print=function(){var e;return null!=(e=window.trekkie)&&e.track("ShopifyApp.print"),this._print(window)},e._print=function(e){var t;return t=this.applyPrintStyle(e),e.print(),t},e.window=function(){var e;return null!=(e=window.trekkie)&&e.track("ShopifyApp.window"),window.parent.frames["app-iframe"]},e.postMessage=function(e,t){var n;return null==t&&(t={}),n=JSON.stringify({message:e,data:t}),a("client sent "+n+" to "+this.shopOrigin),window!==window.parent&&window.parent.postMessage(n,this.shopOrigin),null!=t?t.callbackId:void 0},e.flashNotice=function(e){return this.postMessage("Shopify.API.flash.notice",{message:e})},e.flashError=function(e){return this.postMessage("Shopify.API.flash.error",{message:e})},e.handlers=function(){return _Shopify.Messenger.messageHandlers},e.__addEventMessageCallback=function(e){var t,n,i,o;if(e.origin!==this.shopOrigin)return a("client received "+e.data+" from unknown origin "+e.origin+". Expected "+this.shopOrigin+".");a("client received "+e.data+" from "+e.origin);try{n=JSON.parse(e.data)}catch(r){return void s("client received invalid JSON and cannot process the message. "+r+" : "+e.data+" : "+JSON.stringify(e.data))}null!=n.data&&this.initWithData(n.data),"Shopify.API.Modal.close"===n.message&&(_Shopify.Messenger.clearModal(),"function"==typeof(t=ShopifyApp.Modal).__callback&&t.__callback(n.data.result,n.data.data)),_Shopify.Messenger.invokeHandlers(n.message,n.data),(o=document.querySelector('form[data-shopify-app-submit="'+n.message+'"]'))&&(null!=(i=window.trekkie)&&i.track("ShopifyApp submitForm"),o.submit())},e}()),null==_Shopify.Utils&&(_Shopify.Utils={throttle:function(i,o,r){var a,s;return null==o&&(o=250),s=a=void 0,function(){var e,t,n;return t=r||this,n=+new Date,e=arguments,s&&n<s+o?(clearTimeout(a),a=setTimeout(function(){return s=n,i.apply(t,e)},o)):(s=n,i.apply(t,e))}}})}).call(this),function(){null==_Shopify.Trekkie&&(_Shopify.Trekkie={initialize:function(e){var t,n,i,o,r,a,s,l,u;if(t=(a=null!=e?e:{}).apiClientId,l=a.shopOrigin,!window.trekkie&&(n={Trekkie:{appName:"admin",embedMode:"iframe",embedParentOrigin:l,defaultAttributes:{apiClientId:t}},Clickstream:{},Performance:{navigationTimingApiMeasurementsEnabled:!0,navigationTimingApiMeasurementsSampleRate:.25}},!(u=window.trekkie=[]).integrations)){for(u.methods=["identify","page","ready","track"],u.factory=function(t){return function(){var e;return(e=Array.prototype.slice.call(arguments)).unshift(t),u.push(e),u}},i=0,r=(s=u.methods).length;i<r;i++)o=s[i],u[o]=u.factory(o);return u.load=function(e){var t,n;u.config=e,(n=document.createElement("script")).type="text/javascript",n.onerror=function(){return new(Image().src="https://v.shopify.com/internal_errors/track?error=easdk_load")},n.async=!0,n.src="https://cdn.shopify.com/s/javascripts/tricorder/trekkie.easdk.min.js?v=2017.08.01.1",t=document.getElementsByTagName("script")[0];try{return document.head?document.head.appendChild(n):document.body?document.body.appendChild(n):t.parentNode.insertBefore(n,t)}catch(i){return i,new(Image().src="https://v.shopify.com/internal_errors/track?error=easdk_initialize")}},u.load(n),u.page(),u}}})}.call(this),function(){_Shopify.Button={build:function(e,t,n){return null==n&&(n={}),this.addCallbacks(this.addMessages(e,t,n),n)},addMessages:function(o,e,t){var n,i,r,a;if(null==e&&(e="button"),null==t&&(t={}),Array.isArray(o))for(i=0,r=o.length;i<r;i++)n=o[i],this.addMessages(n,e,t);else null!=o&&(o.message||(o.message=_Shopify.messageSlug("button_"+e)),o.href&&!o.target&&(o.target="app"),"dropdown"===o.type&&(o.links=function(){var e,t,n,i;for(i=[],e=0,t=(n=o.links).length;e<t;e++)a=n[e],i.push(this.addMessages(a,"link"));return i}.call(this)));return o},addCallbacks:function(o,e){var t,n,i,r;if(null==e&&(e={}),Array.isArray(o))for(n=0,i=o.length;n<i;n++)t=o[n],this.addCallbacks(t,e);return null!=o&&("app"===o.target&&(o.callback=function(){return ShopifyApp.setWindowLocation(o.href)}),null!=o.callback&&_Shopify.Messenger.setHandler(o.message,o.callback,e.modal),e.dropdown&&"dropdown"===o.type&&(o.links=function(){var e,t,n,i;for(i=[],e=0,t=(n=o.links).length;e<t;e++)r=n[e],i.push(this.addCallbacks(r,{modal:!1}));return i}.call(this))),o}}}.call(this),function(){var t,n=function(e,t){return function(){return e.apply(t,arguments)}},i=function(e,t){function n(){this.constructor=e}for(var i in t)o.call(t,i)&&(e[i]=t[i]);return n.prototype=t.prototype,e.prototype=new n,e.__super__=t.prototype,e},o={}.hasOwnProperty;t=function(){function e(e){this.CURRENCIES=e,this.getCurrency=n(this.getCurrency,this)}return e.prototype.getCurrency=function(e){var t,n,i,o,r;for(null!=(o=window.trekkie)&&o.track("ShopifyApp.CurrencyDB.getCurrency"),n=0,i=(r=this.CURRENCIES).length;n<i;n++)if((t=r[n]).code===e)return t},e}(),window.ShopifyApp||(window.ShopifyApp=function(e){function u(){return u.__super__.constructor.apply(this,arguments)}return i(u,e),u.bindEvents=function(){var e,i;return _Shopify.Messenger.addHandler("Shopify.API.initialize",(e=this,function(){return e.replaceState(e.getWindowLocation().pathname+e.getWindowLocation().search)})),_Shopify.Messenger.addHandler("Shopify.API.initialize",(i=this,function(e,t){var n;return n={apiClientId:t.apiClientId,shopOrigin:i.shopOrigin},setTimeout(function(){return _Shopify.Trekkie.initialize(n)},0)})),u.__super__.constructor.bindEvents.apply(this,arguments)},u.initWithData=function(e){return null!=e.User&&(this.User=e.User),null!=e.CurrencyDB&&(this.CurrencyDB=new t(e.CurrencyDB.CURRENCIES)),u.__super__.constructor.initWithData.apply(this,arguments)},u.pushState=function(e){return u.postMessage("Shopify.API.pushState",{location:e})},u.replaceState=function(e){return u.postMessage("Shopify.API.replaceState",{location:e})},u.redirect=function(e){return u.postMessage("Shopify.API.redirect",{location:e})},u.remoteRedirect=function(e){return u.postMessage("Shopify.API.remoteRedirect",{location:e})},u.fetchAnalyticsToken=function(e){var t;return t="Shopify.API.fetchAnalyticsToken",_Shopify.Messenger.addHandler(t,e),u.postMessage(t)},u.Nav={initialize:function(e){return e||(e=[]),u.postMessage("Shopify.API.Nav.initialize",e)},select:function(e){if(e)return u.postMessage("Shopify.API.Nav.select",e)}},u.Sidebar={setSection:function(e){if(e)return u.postMessage("Shopify.API.Sidebar.setSection",e)}},u.Bar={initialize:function(e){var t,n,i,o,r,a,s,l;for(e||(e={}),Array.isArray(null!=(o=e.buttons)?o.primary:void 0)&&(e.buttons.primary=e.buttons.primary[0]),n=0,i=(r=["primary","secondary","tertiary"]).length;n<i;n++)t=r[n],_Shopify.Button.build(null!=(a=e.buttons)?a[t]:void 0,t,{dropdown:!0});return _Shopify.Button.build(e.breadcrumb,"breadcrumb"),(null!=(s=e.pagination)?s.next:void 0)&&_Shopify.Button.build(e.pagination.next,"pagination_next"),(null!=(l=e.pagination)?l.previous:void 0)&&_Shopify.Button.build(e.pagination.previous,"pagination_previous"),u.postMessage("Shopify.API.Bar.initialize",e),document.body.onclick=function(){return u.postMessage("Shopify.API.Bar.closeDropdown")}},loadingOn:function(){return u.postMessage("Shopify.API.Bar.loading.on")},loadingOff:function(){return u.postMessage("Shopify.API.Bar.loading.off")},setIcon:function(e){return u.postMessage("Shopify.API.Bar.icon",{icon:e})},setTitle:function(e){return u.postMessage("Shopify.API.Bar.title",{title:e})},setBreadcrumb:function(e){var t;return t={breadcrumb:_Shopify.Button.build(e,"breadcrumb")},u.postMessage("Shopify.API.Bar.breadcrumb",t)},disableAllButtons:function(){return u.postMessage("Shopify.API.Bar.disableAllButtons")},enableAllButtons:function(){return u.postMessage("Shopify.API.Bar.enableAllButtons")},setPagination:function(e){var t,n,i;return(null!=(n=(t={pagination:e}).pagination)?n.next:void 0)&&_Shopify.Button.build(t.pagination.next,"pagination_next"),(null!=(i=t.pagination)?i.previous:void 0)&&_Shopify.Button.build(t.pagination.previous,"pagination_previous"),u.postMessage("Shopify.API.Bar.pagination",t)}},u.Modal={__callback:void 0,window:function(){var e;return null!=(e=window.trekkie)&&e.track("ShopifyApp.Modal.window"),window.parent.frames["app-modal-iframe"]},open:function(e,t){var n,i,o,r,a,s;for(Array.isArray(null!=(r=e.buttons)?r.primary:void 0)&&(e.buttons.primary=e.buttons.primary[0]),i=0,o=(a=["primary","secondary","tertiary"]).length;i<o;i++)n=a[i],_Shopify.Button.build(null!=(s=e.buttons)?s[n]:void 0,n,{dropdown:!0,modal:!0});return u.Modal.__callback=t,u.postMessage("Shopify.API.Modal.open",e)},alert:function(e,t){return u.Modal.__callback=t,u.postMessage("Shopify.API.Modal.alert",{message:e})},confirm:function(e,t){return u.Modal.__callback=t,u.postMessage("Shopify.API.Modal.confirm",{message:e})},input:function(e,t){return u.Modal.__callback=t,u.postMessage("Shopify.API.Modal.input",{message:e})},close:function(e,t){return u.postMessage("Shopify.API.Modal.close",{result:e,data:t})},productPicker:function(e,t){return u.Modal.__callback=t,u.postMessage("Shopify.API.Modal.productPicker",e)},collectionPicker:function(e,t){return u.Modal.__callback=t,u.postMessage("Shopify.API.Modal.collectionPicker",e)},setHeight:function(e){return u.postMessage("Shopify.API.Modal.setHeight",{height:e})},togglePrimaryButton:function(e){return u.postMessage("Shopify.API.Modal.togglePrimaryButton",e)}},u}(_Shopify.AppBase))}.call(this),function(){var t,i,e,o,r,n,a;i={},t="https://analytics.shopify.com",ShopifyApp.Analytics={fetch:function(e){if(!e.query)throw new Error("Shopify Analytics: You must provide a shopifyQl `query` to fetch.");if(!e.success)throw new Error("Shopify Analytics: You must provide a `success` callback to fetch.");if(!e.error)throw new Error("Shopify Analytics: You must provide an `error` callback to fetch.");return Boolean(i.token)?r(e):n(e)},clear:function(){return i={}}},n=function(n){return ShopifyApp.fetchAnalyticsToken(function(e,t){return t.error?n.error(t.error):(i={token:t.token,userId:t.userId,source:"analytics-sdk"},r(n))})},r=function(t){var n;if(Boolean(XMLHttpRequest)&&Boolean(JSON)&&Boolean(encodeURIComponent))return(n=new XMLHttpRequest).open("GET",e(t.query),!0),n.onreadystatechange=function(){var e;if(4===n.readyState)return 200===n.status&&Boolean(n.responseText)?(e=o(n.responseText),t.success(e)):n.responseText.match(/token signature invalid/)?(i.token=null,ShopifyApp.Analytics.fetch(shopifyQl,t)):t.error(n.responseText)},n.send()},o=function(e){var t,n,i;return{result:{columns:(null!=(t=JSON.parse(e))&&null!=(n=t.result)?n.columns:void 0)||[],data:(null!=t&&null!=(i=t.result)?i.data:void 0)||[]}}},e=function(e){return t+"/query?"+a({q:e,token:i.token,user_id:i.userId||"",source:i.source||"analytics-api"})},a=function(t){var e;return e=function(e){return[e,t[e]].map(encodeURIComponent).join("=")},Object.keys(t).map(e).join("&")}}.call(this),function(){var n,i,o,r,e,a,s,l=function(e,t){function n(){this.constructor=e}for(var i in t)u.call(t,i)&&(e[i]=t[i]);return n.prototype=t.prototype,e.prototype=new n,e.__super__=t.prototype,e},u={}.hasOwnProperty;r=["Shopify.API.reportScroll"],a=function(e,t){var n,i,o;if(("undefined"!=typeof console&&null!==console?console.log:void 0)&&(("undefined"!=typeof ShopifyApp&&null!==ShopifyApp?ShopifyApp.debug:void 0)||("undefined"!=typeof ShopifyPOS&&null!==ShopifyPOS?ShopifyPOS.debug:void 0)||t)&&!window.Teaspoon){for(i=0,o=r.length;i<o;i++)if(n=r[i],0<=e.indexOf(n))return;return console.log("ShopifyApp "+e)}},s=function(e){return("undefined"!=typeof console&&null!==console?console.warn:void 0)&&!window.Teaspoon?console.warn("ShopifyApp "+e):a(e,!0)},i=function(){function e(){}return e.loadingOn=function(){return n.postMessage("Shopify.API.Bar.loading.on")},e.loadingOff=function(){return n.postMessage("Shopify.API.Bar.loading.off")},e}(),o=function(){function e(){}return e.__callback=void 0,e.window=function(){return window.parent.frames["app-modal-iframe"]},e.close=function(e,t){return n.postMessage("Shopify.API.Modal.close",{result:e,data:t})},e.setHeight=function(e){return n.postMessage("Shopify.API.Modal.setHeight",{height:e})},e.setSize=function(e){return n.postMessage("Shopify.API.Modal.setSize",e)},e.setTitle=function(e){return n.postMessage("Shopify.API.Modal.setTitle",{title:e})},e}(),n=function(e){function t(){return t.__super__.constructor.apply(this,arguments)}return l(t,e),t.init=function(e,t){if(null==e&&(e={}),!this._hasCalledInit)return this._hasCalledInit=!0,this.reset(),this.loadConfig(e),this.checkFrame(),this.bindEvents(),this._setupModalButtons(e.buttons),this.Modal.__callback=t,this.postMessage("Shopify.API.initialize",e)},t.initWithData=function(e){return null!=e.User&&(this.User=e.User),null!=e.CurrencyDB&&(this.CurrencyDB="function"==typeof CurrencyDB?new CurrencyDB(e.CurrencyDB.CURRENCIES):void 0),t.__super__.constructor.initWithData.apply(this,arguments)},t.pushState=function(e){return t.postMessage("Shopify.API.pushState",{location:e})},t.redirect=function(e){return t.postMessage("Shopify.API.redirect",{location:e})},t.remoteRedirect=function(e){return t.postMessage("Shopify.API.remoteRedirect",{location:e})},t.Modal=o,t.Bar=i,t.__addEventMessageCallback=function(e){var t,n;if(e.origin!==this.shopOrigin)return a("client received "+e.data+" from unknown origin "+e.origin+". Expected "+this.shopOrigin+".");a("client received "+e.data+" from "+e.origin);try{n=JSON.parse(e.data)}catch(i){return void s("client received invalid JSON and cannot process the message. "+i+" : "+e.data+" : "+JSON.stringify(e.data))}return null!=n.data&&this.initWithData(n.data),"Shopify.API.Modal.close"===n.message&&(_Shopify.Messenger.clearModal(),"function"==typeof(t=this.Modal).__callback&&t.__callback(n.data.result,n.data.data)),_Shopify.Messenger.invokeHandlers(n.message,n.data)},t._setupModalButtons=function(e){var t,n,i,o,r;for(r=[],n=0,i=(o=["primary","secondary","tertiary"]).length;n<i;n++)t=o[n],r.push(_Shopify.Button.build(null!=e?e[t]:void 0,t,{dropdown:!0,modal:!0}));return r},t}(_Shopify.AppBase),window.ShopifyApp||(window.ShopifyApp={}),(e=window.ShopifyApp).Action||(e.Action=n)}.call(this),function(){}.call(this);
