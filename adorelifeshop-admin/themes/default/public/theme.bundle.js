/******/(()=>{// webpackBootstrap
/******/var t={102:()=>{},452:()=>{},759:()=>{},441:()=>{}},e={};function i(r){var l=e[r];if(void 0!==l)return l.exports;var n=e[r]={exports:{}};return t[r](n,n.exports,i),n.exports}(()=>{"use strict";i(441),i(759),i(452),i(102);
/*!
 * perfect-scrollbar v1.5.3
 * Copyright 2021 Hyunje Jun, MDBootstrap and Contributors
 * Licensed under MIT
 */
function t(t){return getComputedStyle(t)}function e(t,e){for(var i in e){var r=e[i];"number"==typeof r&&(r+="px"),t.style[i]=r}return t}function r(t){var e=document.createElement("div");return e.className=t,e}var l="undefined"!=typeof Element&&(Element.prototype.matches||Element.prototype.webkitMatchesSelector||Element.prototype.mozMatchesSelector||Element.prototype.msMatchesSelector);function n(t,e){if(!l)throw new Error("No element matching method supported");return l.call(t,e)}function o(t){t.remove?t.remove():t.parentNode&&t.parentNode.removeChild(t)}function s(t,e){return Array.prototype.filter.call(t.children,function(t){return n(t,e)})}var a={main:"ps",rtl:"ps__rtl",element:{thumb:function(t){return"ps__thumb-"+t},rail:function(t){return"ps__rail-"+t},consuming:"ps__child--consume"},state:{focus:"ps--focus",clicking:"ps--clicking",active:function(t){return"ps--active-"+t},scrolling:function(t){return"ps--scrolling-"+t}}},c={x:null,y:null};function h(t,e){var i=t.element.classList,r=a.state.scrolling(e);i.contains(r)?clearTimeout(c[e]):i.add(r)}function u(t,e){c[e]=setTimeout(function(){return t.isAlive&&t.element.classList.remove(a.state.scrolling(e))},t.settings.scrollingThreshold)}var d=function(t){this.element=t,this.handlers={}},f={isEmpty:{configurable:!0}};d.prototype.bind=function(t,e){void 0===this.handlers[t]&&(this.handlers[t]=[]),this.handlers[t].push(e),this.element.addEventListener(t,e,!1)},d.prototype.unbind=function(t,e){var i=this;this.handlers[t]=this.handlers[t].filter(function(r){return!(!e||r===e)||(i.element.removeEventListener(t,r,!1),!1)})},d.prototype.unbindAll=function(){for(var t in this.handlers)this.unbind(t)},f.isEmpty.get=function(){var t=this;return Object.keys(this.handlers).every(function(e){return 0===t.handlers[e].length})},Object.defineProperties(d.prototype,f);var p=function(){this.eventElements=[]};function b(t){if("function"==typeof window.CustomEvent)return new CustomEvent(t);var e=document.createEvent("CustomEvent");return e.initCustomEvent(t,!1,!1,void 0),e}function g(t,e,i,r,l){var n;if(void 0===r&&(r=!0),void 0===l&&(l=!1),"top"===e)n=["contentHeight","containerHeight","scrollTop","y","up","down"];else{if("left"!==e)throw new Error("A proper axis should be provided");n=["contentWidth","containerWidth","scrollLeft","x","left","right"]}!function(t,e,i,r,l){var n=i[0],o=i[1],s=i[2],a=i[3],c=i[4],d=i[5];void 0===r&&(r=!0);void 0===l&&(l=!1);var f=t.element;t.reach[a]=null,f[s]<1&&(t.reach[a]="start");f[s]>t[n]-t[o]-1&&(t.reach[a]="end");e&&(f.dispatchEvent(b("ps-scroll-"+a)),e<0?f.dispatchEvent(b("ps-scroll-"+c)):e>0&&f.dispatchEvent(b("ps-scroll-"+d)),r&&function(t,e){h(t,e),u(t,e)}(t,a));t.reach[a]&&(e||l)&&f.dispatchEvent(b("ps-"+a+"-reach-"+t.reach[a]))}(t,i,n,r,l)}function v(t){return parseInt(t,10)||0}p.prototype.eventElement=function(t){var e=this.eventElements.filter(function(e){return e.element===t})[0];return e||(e=new d(t),this.eventElements.push(e)),e},p.prototype.bind=function(t,e,i){this.eventElement(t).bind(e,i)},p.prototype.unbind=function(t,e,i){var r=this.eventElement(t);r.unbind(e,i),r.isEmpty&&this.eventElements.splice(this.eventElements.indexOf(r),1)},p.prototype.unbindAll=function(){this.eventElements.forEach(function(t){return t.unbindAll()}),this.eventElements=[]},p.prototype.once=function(t,e,i){var r=this.eventElement(t),l=function(t){r.unbind(e,l),i(t)};r.bind(e,l)};var m={isWebKit:"undefined"!=typeof document&&"WebkitAppearance"in document.documentElement.style,supportsTouch:"undefined"!=typeof window&&("ontouchstart"in window||"maxTouchPoints"in window.navigator&&window.navigator.maxTouchPoints>0||window.DocumentTouch&&document instanceof window.DocumentTouch),supportsIePointer:"undefined"!=typeof navigator&&navigator.msMaxTouchPoints,isChrome:"undefined"!=typeof navigator&&/Chrome/i.test(navigator&&navigator.userAgent)};function Y(t){var i=t.element,r=Math.floor(i.scrollTop),l=i.getBoundingClientRect();t.containerWidth=Math.round(l.width),t.containerHeight=Math.round(l.height),t.contentWidth=i.scrollWidth,t.contentHeight=i.scrollHeight,i.contains(t.scrollbarXRail)||(s(i,a.element.rail("x")).forEach(function(t){return o(t)}),i.appendChild(t.scrollbarXRail)),i.contains(t.scrollbarYRail)||(s(i,a.element.rail("y")).forEach(function(t){return o(t)}),i.appendChild(t.scrollbarYRail)),!t.settings.suppressScrollX&&t.containerWidth+t.settings.scrollXMarginOffset<t.contentWidth?(t.scrollbarXActive=!0,t.railXWidth=t.containerWidth-t.railXMarginWidth,t.railXRatio=t.containerWidth/t.railXWidth,t.scrollbarXWidth=w(t,v(t.railXWidth*t.containerWidth/t.contentWidth)),t.scrollbarXLeft=v((t.negativeScrollAdjustment+i.scrollLeft)*(t.railXWidth-t.scrollbarXWidth)/(t.contentWidth-t.containerWidth))):t.scrollbarXActive=!1,!t.settings.suppressScrollY&&t.containerHeight+t.settings.scrollYMarginOffset<t.contentHeight?(t.scrollbarYActive=!0,t.railYHeight=t.containerHeight-t.railYMarginHeight,t.railYRatio=t.containerHeight/t.railYHeight,t.scrollbarYHeight=w(t,v(t.railYHeight*t.containerHeight/t.contentHeight)),t.scrollbarYTop=v(r*(t.railYHeight-t.scrollbarYHeight)/(t.contentHeight-t.containerHeight))):t.scrollbarYActive=!1,t.scrollbarXLeft>=t.railXWidth-t.scrollbarXWidth&&(t.scrollbarXLeft=t.railXWidth-t.scrollbarXWidth),t.scrollbarYTop>=t.railYHeight-t.scrollbarYHeight&&(t.scrollbarYTop=t.railYHeight-t.scrollbarYHeight),function(t,i){var r={width:i.railXWidth},l=Math.floor(t.scrollTop);i.isRtl?r.left=i.negativeScrollAdjustment+t.scrollLeft+i.containerWidth-i.contentWidth:r.left=t.scrollLeft;i.isScrollbarXUsingBottom?r.bottom=i.scrollbarXBottom-l:r.top=i.scrollbarXTop+l;e(i.scrollbarXRail,r);var n={top:l,height:i.railYHeight};i.isScrollbarYUsingRight?i.isRtl?n.right=i.contentWidth-(i.negativeScrollAdjustment+t.scrollLeft)-i.scrollbarYRight-i.scrollbarYOuterWidth-9:n.right=i.scrollbarYRight-t.scrollLeft:i.isRtl?n.left=i.negativeScrollAdjustment+t.scrollLeft+2*i.containerWidth-i.contentWidth-i.scrollbarYLeft-i.scrollbarYOuterWidth:n.left=i.scrollbarYLeft+t.scrollLeft;e(i.scrollbarYRail,n),e(i.scrollbarX,{left:i.scrollbarXLeft,width:i.scrollbarXWidth-i.railBorderXWidth}),e(i.scrollbarY,{top:i.scrollbarYTop,height:i.scrollbarYHeight-i.railBorderYWidth})}(i,t),t.scrollbarXActive?i.classList.add(a.state.active("x")):(i.classList.remove(a.state.active("x")),t.scrollbarXWidth=0,t.scrollbarXLeft=0,i.scrollLeft=!0===t.isRtl?t.contentWidth:0),t.scrollbarYActive?i.classList.add(a.state.active("y")):(i.classList.remove(a.state.active("y")),t.scrollbarYHeight=0,t.scrollbarYTop=0,i.scrollTop=0)}function w(t,e){return t.settings.minScrollbarLength&&(e=Math.max(e,t.settings.minScrollbarLength)),t.settings.maxScrollbarLength&&(e=Math.min(e,t.settings.maxScrollbarLength)),e}function X(t,e){var i=e[0],r=e[1],l=e[2],n=e[3],o=e[4],s=e[5],c=e[6],d=e[7],f=e[8],p=t.element,b=null,g=null,v=null;function m(e){e.touches&&e.touches[0]&&(e[l]=e.touches[0].pageY),p[c]=b+v*(e[l]-g),h(t,d),Y(t),e.stopPropagation(),e.type.startsWith("touch")&&e.changedTouches.length>1&&e.preventDefault()}function w(){u(t,d),t[f].classList.remove(a.state.clicking),t.event.unbind(t.ownerDocument,"mousemove",m)}function X(e,o){b=p[c],o&&e.touches&&(e[l]=e.touches[0].pageY),g=e[l],v=(t[r]-t[i])/(t[n]-t[s]),o?t.event.bind(t.ownerDocument,"touchmove",m):(t.event.bind(t.ownerDocument,"mousemove",m),t.event.once(t.ownerDocument,"mouseup",w),e.preventDefault()),t[f].classList.add(a.state.clicking),e.stopPropagation()}t.event.bind(t[o],"mousedown",function(t){X(t)}),t.event.bind(t[o],"touchstart",function(t){X(t,!0)})}var y={"click-rail":function(t){t.element,t.event.bind(t.scrollbarY,"mousedown",function(t){return t.stopPropagation()}),t.event.bind(t.scrollbarYRail,"mousedown",function(e){var i=e.pageY-window.pageYOffset-t.scrollbarYRail.getBoundingClientRect().top>t.scrollbarYTop?1:-1;t.element.scrollTop+=i*t.containerHeight,Y(t),e.stopPropagation()}),t.event.bind(t.scrollbarX,"mousedown",function(t){return t.stopPropagation()}),t.event.bind(t.scrollbarXRail,"mousedown",function(e){var i=e.pageX-window.pageXOffset-t.scrollbarXRail.getBoundingClientRect().left>t.scrollbarXLeft?1:-1;t.element.scrollLeft+=i*t.containerWidth,Y(t),e.stopPropagation()})},"drag-thumb":function(t){X(t,["containerWidth","contentWidth","pageX","railXWidth","scrollbarX","scrollbarXWidth","scrollLeft","x","scrollbarXRail"]),X(t,["containerHeight","contentHeight","pageY","railYHeight","scrollbarY","scrollbarYHeight","scrollTop","y","scrollbarYRail"])},keyboard:function(t){var e=t.element;t.event.bind(t.ownerDocument,"keydown",function(i){if(!(i.isDefaultPrevented&&i.isDefaultPrevented()||i.defaultPrevented)&&(n(e,":hover")||n(t.scrollbarX,":focus")||n(t.scrollbarY,":focus"))){var r,l=document.activeElement?document.activeElement:t.ownerDocument.activeElement;if(l){if("IFRAME"===l.tagName)l=l.contentDocument.activeElement;else for(;l.shadowRoot;)l=l.shadowRoot.activeElement;if(n(r=l,"input,[contenteditable]")||n(r,"select,[contenteditable]")||n(r,"textarea,[contenteditable]")||n(r,"button,[contenteditable]"))return}var o=0,s=0;switch(i.which){case 37:o=i.metaKey?-t.contentWidth:i.altKey?-t.containerWidth:-30;break;case 38:s=i.metaKey?t.contentHeight:i.altKey?t.containerHeight:30;break;case 39:o=i.metaKey?t.contentWidth:i.altKey?t.containerWidth:30;break;case 40:s=i.metaKey?-t.contentHeight:i.altKey?-t.containerHeight:-30;break;case 32:s=i.shiftKey?t.containerHeight:-t.containerHeight;break;case 33:s=t.containerHeight;break;case 34:s=-t.containerHeight;break;case 36:s=t.contentHeight;break;case 35:s=-t.contentHeight;break;default:return}t.settings.suppressScrollX&&0!==o||t.settings.suppressScrollY&&0!==s||(e.scrollTop-=s,e.scrollLeft+=o,Y(t),function(i,r){var l=Math.floor(e.scrollTop);if(0===i){if(!t.scrollbarYActive)return!1;if(0===l&&r>0||l>=t.contentHeight-t.containerHeight&&r<0)return!t.settings.wheelPropagation}var n=e.scrollLeft;if(0===r){if(!t.scrollbarXActive)return!1;if(0===n&&i<0||n>=t.contentWidth-t.containerWidth&&i>0)return!t.settings.wheelPropagation}return!0}(o,s)&&i.preventDefault())}})},wheel:function(e){var i=e.element;function r(r){var l=function(t){var e=t.deltaX,i=-1*t.deltaY;return void 0!==e&&void 0!==i||(e=-1*t.wheelDeltaX/6,i=t.wheelDeltaY/6),t.deltaMode&&1===t.deltaMode&&(e*=10,i*=10),e!=e&&i!=i&&(e=0,i=t.wheelDelta),t.shiftKey?[-i,-e]:[e,i]}(r),n=l[0],o=l[1];if(!function(e,r,l){if(!m.isWebKit&&i.querySelector("select:focus"))return!0;if(!i.contains(e))return!1;for(var n=e;n&&n!==i;){if(n.classList.contains(a.element.consuming))return!0;var o=t(n);if(l&&o.overflowY.match(/(scroll|auto)/)){var s=n.scrollHeight-n.clientHeight;if(s>0&&(n.scrollTop>0&&l<0||n.scrollTop<s&&l>0))return!0}if(r&&o.overflowX.match(/(scroll|auto)/)){var c=n.scrollWidth-n.clientWidth;if(c>0&&(n.scrollLeft>0&&r<0||n.scrollLeft<c&&r>0))return!0}n=n.parentNode}return!1}(r.target,n,o)){var s=!1;e.settings.useBothWheelAxes?e.scrollbarYActive&&!e.scrollbarXActive?(o?i.scrollTop-=o*e.settings.wheelSpeed:i.scrollTop+=n*e.settings.wheelSpeed,s=!0):e.scrollbarXActive&&!e.scrollbarYActive&&(n?i.scrollLeft+=n*e.settings.wheelSpeed:i.scrollLeft-=o*e.settings.wheelSpeed,s=!0):(i.scrollTop-=o*e.settings.wheelSpeed,i.scrollLeft+=n*e.settings.wheelSpeed),Y(e),(s=s||function(t,r){var l=Math.floor(i.scrollTop),n=0===i.scrollTop,o=l+i.offsetHeight===i.scrollHeight,s=0===i.scrollLeft,a=i.scrollLeft+i.offsetWidth===i.scrollWidth;return!(Math.abs(r)>Math.abs(t)?n||o:s||a)||!e.settings.wheelPropagation}(n,o))&&!r.ctrlKey&&(r.stopPropagation(),r.preventDefault())}}void 0!==window.onwheel?e.event.bind(i,"wheel",r):void 0!==window.onmousewheel&&e.event.bind(i,"mousewheel",r)},touch:function(e){if(m.supportsTouch||m.supportsIePointer){var i=e.element,r={},l=0,n={},o=null;m.supportsTouch?(e.event.bind(i,"touchstart",u),e.event.bind(i,"touchmove",d),e.event.bind(i,"touchend",f)):m.supportsIePointer&&(window.PointerEvent?(e.event.bind(i,"pointerdown",u),e.event.bind(i,"pointermove",d),e.event.bind(i,"pointerup",f)):window.MSPointerEvent&&(e.event.bind(i,"MSPointerDown",u),e.event.bind(i,"MSPointerMove",d),e.event.bind(i,"MSPointerUp",f)))}function s(t,r){i.scrollTop-=r,i.scrollLeft-=t,Y(e)}function c(t){return t.targetTouches?t.targetTouches[0]:t}function h(t){return!(t.pointerType&&"pen"===t.pointerType&&0===t.buttons||(!t.targetTouches||1!==t.targetTouches.length)&&(!t.pointerType||"mouse"===t.pointerType||t.pointerType===t.MSPOINTER_TYPE_MOUSE))}function u(t){if(h(t)){var e=c(t);r.pageX=e.pageX,r.pageY=e.pageY,l=(new Date).getTime(),null!==o&&clearInterval(o)}}function d(o){if(h(o)){var u=c(o),d={pageX:u.pageX,pageY:u.pageY},f=d.pageX-r.pageX,p=d.pageY-r.pageY;if(function(e,r,l){if(!i.contains(e))return!1;for(var n=e;n&&n!==i;){if(n.classList.contains(a.element.consuming))return!0;var o=t(n);if(l&&o.overflowY.match(/(scroll|auto)/)){var s=n.scrollHeight-n.clientHeight;if(s>0&&(n.scrollTop>0&&l<0||n.scrollTop<s&&l>0))return!0}if(r&&o.overflowX.match(/(scroll|auto)/)){var c=n.scrollWidth-n.clientWidth;if(c>0&&(n.scrollLeft>0&&r<0||n.scrollLeft<c&&r>0))return!0}n=n.parentNode}return!1}(o.target,f,p))return;s(f,p),r=d;var b=(new Date).getTime(),g=b-l;g>0&&(n.x=f/g,n.y=p/g,l=b),function(t,r){var l=Math.floor(i.scrollTop),n=i.scrollLeft,o=Math.abs(t),s=Math.abs(r);if(s>o){if(r<0&&l===e.contentHeight-e.containerHeight||r>0&&0===l)return 0===window.scrollY&&r>0&&m.isChrome}else if(o>s&&(t<0&&n===e.contentWidth-e.containerWidth||t>0&&0===n))return!0;return!0}(f,p)&&o.preventDefault()}}function f(){e.settings.swipeEasing&&(clearInterval(o),o=setInterval(function(){e.isInitialized?clearInterval(o):n.x||n.y?Math.abs(n.x)<.01&&Math.abs(n.y)<.01?clearInterval(o):e.element?(s(30*n.x,30*n.y),n.x*=.8,n.y*=.8):clearInterval(o):clearInterval(o)},10))}}},W=function(i,l){var n=this;if(void 0===l&&(l={}),"string"==typeof i&&(i=document.querySelector(i)),!i||!i.nodeName)throw new Error("no element is specified to initialize PerfectScrollbar");for(var o in this.element=i,i.classList.add(a.main),this.settings={handlers:["click-rail","drag-thumb","keyboard","wheel","touch"],maxScrollbarLength:null,minScrollbarLength:null,scrollingThreshold:1e3,scrollXMarginOffset:0,scrollYMarginOffset:0,suppressScrollX:!1,suppressScrollY:!1,swipeEasing:!0,useBothWheelAxes:!1,wheelPropagation:!0,wheelSpeed:1},l)this.settings[o]=l[o];this.containerWidth=null,this.containerHeight=null,this.contentWidth=null,this.contentHeight=null;var s,c,h=function(){return i.classList.add(a.state.focus)},u=function(){return i.classList.remove(a.state.focus)};this.isRtl="rtl"===t(i).direction,!0===this.isRtl&&i.classList.add(a.rtl),this.isNegativeScroll=(c=i.scrollLeft,i.scrollLeft=-1,s=i.scrollLeft<0,i.scrollLeft=c,s),this.negativeScrollAdjustment=this.isNegativeScroll?i.scrollWidth-i.clientWidth:0,this.event=new p,this.ownerDocument=i.ownerDocument||document,this.scrollbarXRail=r(a.element.rail("x")),i.appendChild(this.scrollbarXRail),this.scrollbarX=r(a.element.thumb("x")),this.scrollbarXRail.appendChild(this.scrollbarX),this.scrollbarX.setAttribute("tabindex",0),this.event.bind(this.scrollbarX,"focus",h),this.event.bind(this.scrollbarX,"blur",u),this.scrollbarXActive=null,this.scrollbarXWidth=null,this.scrollbarXLeft=null;var d=t(this.scrollbarXRail);this.scrollbarXBottom=parseInt(d.bottom,10),isNaN(this.scrollbarXBottom)?(this.isScrollbarXUsingBottom=!1,this.scrollbarXTop=v(d.top)):this.isScrollbarXUsingBottom=!0,this.railBorderXWidth=v(d.borderLeftWidth)+v(d.borderRightWidth),e(this.scrollbarXRail,{display:"block"}),this.railXMarginWidth=v(d.marginLeft)+v(d.marginRight),e(this.scrollbarXRail,{display:""}),this.railXWidth=null,this.railXRatio=null,this.scrollbarYRail=r(a.element.rail("y")),i.appendChild(this.scrollbarYRail),this.scrollbarY=r(a.element.thumb("y")),this.scrollbarYRail.appendChild(this.scrollbarY),this.scrollbarY.setAttribute("tabindex",0),this.event.bind(this.scrollbarY,"focus",h),this.event.bind(this.scrollbarY,"blur",u),this.scrollbarYActive=null,this.scrollbarYHeight=null,this.scrollbarYTop=null;var f=t(this.scrollbarYRail);this.scrollbarYRight=parseInt(f.right,10),isNaN(this.scrollbarYRight)?(this.isScrollbarYUsingRight=!1,this.scrollbarYLeft=v(f.left)):this.isScrollbarYUsingRight=!0,this.scrollbarYOuterWidth=this.isRtl?function(e){var i=t(e);return v(i.width)+v(i.paddingLeft)+v(i.paddingRight)+v(i.borderLeftWidth)+v(i.borderRightWidth)}(this.scrollbarY):null,this.railBorderYWidth=v(f.borderTopWidth)+v(f.borderBottomWidth),e(this.scrollbarYRail,{display:"block"}),this.railYMarginHeight=v(f.marginTop)+v(f.marginBottom),e(this.scrollbarYRail,{display:""}),this.railYHeight=null,this.railYRatio=null,this.reach={x:i.scrollLeft<=0?"start":i.scrollLeft>=this.contentWidth-this.containerWidth?"end":null,y:i.scrollTop<=0?"start":i.scrollTop>=this.contentHeight-this.containerHeight?"end":null},this.isAlive=!0,this.settings.handlers.forEach(function(t){return y[t](n)}),this.lastScrollTop=Math.floor(i.scrollTop),this.lastScrollLeft=i.scrollLeft,this.event.bind(this.element,"scroll",function(t){return n.onScroll(t)}),Y(this)};W.prototype.update=function(){this.isAlive&&(this.negativeScrollAdjustment=this.isNegativeScroll?this.element.scrollWidth-this.element.clientWidth:0,e(this.scrollbarXRail,{display:"block"}),e(this.scrollbarYRail,{display:"block"}),this.railXMarginWidth=v(t(this.scrollbarXRail).marginLeft)+v(t(this.scrollbarXRail).marginRight),this.railYMarginHeight=v(t(this.scrollbarYRail).marginTop)+v(t(this.scrollbarYRail).marginBottom),e(this.scrollbarXRail,{display:"none"}),e(this.scrollbarYRail,{display:"none"}),Y(this),g(this,"top",0,!1,!0),g(this,"left",0,!1,!0),e(this.scrollbarXRail,{display:""}),e(this.scrollbarYRail,{display:""}))},W.prototype.onScroll=function(t){this.isAlive&&(Y(this),g(this,"top",this.element.scrollTop-this.lastScrollTop),g(this,"left",this.element.scrollLeft-this.lastScrollLeft),this.lastScrollTop=Math.floor(this.element.scrollTop),this.lastScrollLeft=this.element.scrollLeft)},W.prototype.destroy=function(){this.isAlive&&(this.event.unbindAll(),o(this.scrollbarX),o(this.scrollbarY),o(this.scrollbarXRail),o(this.scrollbarYRail),this.removePsClasses(),this.element=null,this.scrollbarX=null,this.scrollbarY=null,this.scrollbarXRail=null,this.scrollbarYRail=null,this.isAlive=!1)},W.prototype.removePsClasses=function(){this.element.className=this.element.className.split(" ").filter(function(t){return!t.match(/^ps([-_].+|)$/)}).join(" ")};const L=W;
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
$(document).ready(function(){$(".nav-bar-overflow").length>0&&new L(".nav-bar-overflow")})})()})();