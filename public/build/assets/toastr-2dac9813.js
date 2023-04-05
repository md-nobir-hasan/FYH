var se=(f,o)=>()=>(o||f((o={exports:{}}).exports,o),o.exports);var oe=se((ae,w)=>{(function(f){f(["jquery"],function(o){return function(){function q(n,s,i){return g({type:m.error,iconClass:l().iconClasses.error,message:n,optionsOverride:i,title:s})}function u(n,s){return n||(n=l()),a=o("#"+n.containerId),a.length||s&&(a=N(n)),a}function Q(n,s,i){return g({type:m.info,iconClass:l().iconClasses.info,message:n,optionsOverride:i,title:s})}function z(n){O=n}function A(n,s,i){return g({type:m.success,iconClass:l().iconClasses.success,message:n,optionsOverride:i,title:s})}function G(n,s,i){return g({type:m.warning,iconClass:l().iconClasses.warning,message:n,optionsOverride:i,title:s})}function J(n,s){var i=l();a||u(i),E(n,i,s)||L(i)}function K(n){var s=l();return a||u(s),n&&o(":focus",n).length===0?void T(n):void(a.children().length&&a.remove())}function L(n){for(var s=a.children(),i=s.length-1;i>=0;i--)E(o(s[i]),n)}function E(n,s,i){var D=!(!i||!i.force)&&i.force;return!(!n||!D&&o(":focus",n).length!==0)&&(n[s.hideMethod]({duration:s.hideDuration,easing:s.hideEasing,complete:function(){T(n)}}),!0)}function N(n){return a=o("<div/>").attr("id",n.containerId).addClass(n.positionClass),a.appendTo(o(n.target)),a}function R(){return{tapToDismiss:!0,toastClass:"toast",containerId:"toast-container",debug:!1,showMethod:"fadeIn",showDuration:300,showEasing:"swing",onShown:void 0,hideMethod:"fadeOut",hideDuration:1e3,hideEasing:"swing",onHidden:void 0,closeMethod:!1,closeDuration:!1,closeEasing:!1,closeOnHover:!0,extendedTimeOut:1e3,iconClasses:{error:"toast-error",info:"toast-info",success:"toast-success",warning:"toast-warning"},iconClass:"toast-info",positionClass:"toast-top-right",timeOut:5e3,titleClass:"toast-title",messageClass:"toast-message",escapeHtml:!1,target:"body",closeHtml:'<button type="button">&times;</button>',closeClass:"toast-close-button",newestOnTop:!0,preventDuplicates:!1,progressBar:!1,progressClass:"toast-progress",rtl:!1}}function y(n){O&&O(n)}function g(n){function s(t){return t==null&&(t=""),t.replace(/&/g,"&amp;").replace(/"/g,"&quot;").replace(/'/g,"&#39;").replace(/</g,"&lt;").replace(/>/g,"&gt;")}function i(){W(),Y(),Z(),_(),$(),j(),X(),D()}function D(){var t="";switch(n.iconClass){case"toast-success":case"toast-info":t="polite";break;default:t="assertive"}r.attr("aria-live",t)}function U(){e.closeOnHover&&r.hover(I,F),!e.onclick&&e.tapToDismiss&&r.click(p),e.closeButton&&v&&v.click(function(t){t.stopPropagation?t.stopPropagation():t.cancelBubble!==void 0&&t.cancelBubble!==!0&&(t.cancelBubble=!0),e.onCloseClick&&e.onCloseClick(t),p(!0)}),e.onclick&&r.click(function(t){e.onclick(t),p()})}function V(){r.hide(),r[e.showMethod]({duration:e.showDuration,easing:e.showEasing,complete:e.onShown}),e.timeOut>0&&(h=setTimeout(p,e.timeOut),c.maxHideTime=parseFloat(e.timeOut),c.hideEta=new Date().getTime()+c.maxHideTime,e.progressBar&&(c.intervalId=setInterval(ee,10)))}function W(){n.iconClass&&r.addClass(e.toastClass).addClass(H)}function X(){e.newestOnTop?a.prepend(r):a.append(r)}function Y(){if(n.title){var t=n.title;e.escapeHtml&&(t=s(n.title)),k.append(t).addClass(e.titleClass),r.append(k)}}function Z(){if(n.message){var t=n.message;e.escapeHtml&&(t=s(n.message)),S.append(t).addClass(e.messageClass),r.append(S)}}function _(){e.closeButton&&(v.addClass(e.closeClass).attr("role","button"),r.prepend(v))}function $(){e.progressBar&&(x.addClass(e.progressClass),r.prepend(x))}function j(){e.rtl&&r.addClass("rtl")}function P(t,C){if(t.preventDuplicates){if(C.message===b)return!0;b=C.message}return!1}function p(t){var C=t&&e.closeMethod!==!1?e.closeMethod:e.hideMethod,ne=t&&e.closeDuration!==!1?e.closeDuration:e.hideDuration,te=t&&e.closeEasing!==!1?e.closeEasing:e.hideEasing;if(!o(":focus",r).length||t)return clearTimeout(c.intervalId),r[C]({duration:ne,easing:te,complete:function(){T(r),clearTimeout(h),e.onHidden&&d.state!=="hidden"&&e.onHidden(),d.state="hidden",d.endTime=new Date,y(d)}})}function F(){(e.timeOut>0||e.extendedTimeOut>0)&&(h=setTimeout(p,e.extendedTimeOut),c.maxHideTime=parseFloat(e.extendedTimeOut),c.hideEta=new Date().getTime()+c.maxHideTime)}function I(){clearTimeout(h),c.hideEta=0,r.stop(!0,!0)[e.showMethod]({duration:e.showDuration,easing:e.showEasing})}function ee(){var t=(c.hideEta-new Date().getTime())/c.maxHideTime*100;x.width(t+"%")}var e=l(),H=n.iconClass||e.iconClass;if(typeof n.optionsOverride<"u"&&(e=o.extend(e,n.optionsOverride),H=n.optionsOverride.iconClass||H),!P(e,n)){M++,a=u(e,!0);var h=null,r=o("<div/>"),k=o("<div/>"),S=o("<div/>"),x=o("<div/>"),v=o(e.closeHtml),c={intervalId:null,hideEta:null,maxHideTime:null},d={toastId:M,state:"visible",startTime:new Date,options:e,map:n};return i(),V(),U(),y(d),e.debug&&console&&console.log(d),r}}function l(){return o.extend({},R(),B.options)}function T(n){a||(a=u()),n.is(":visible")||(n.remove(),n=null,a.children().length===0&&(a.remove(),b=void 0))}var a,O,b,M=0,m={error:"error",info:"info",success:"success",warning:"warning"},B={clear:J,remove:K,error:q,getContainer:u,info:Q,options:{},subscribe:z,success:A,version:"2.1.3",warning:G};return B}()})})(typeof define=="function"&&define.amd?define:function(f,o){typeof w<"u"&&w.exports?w.exports=o(require("jquery")):window.toastr=o(window.jQuery)})});export default oe();
