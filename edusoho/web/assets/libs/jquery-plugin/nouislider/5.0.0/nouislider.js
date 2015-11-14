define("jquery-plugin/nouislider/5.0.0/nouislider",["$"],function(a){a("$"),function(a){"use strict";if(a.zepto&&!a.fn.removeData)throw new ReferenceError("Zepto is loaded without the data module.");a.fn.noUiSlider=function(b,c){function d(a,b){return 100*b/(a[1]-a[0])}function e(a,b){return d(a,a[0]<0?b+Math.abs(a[0]):b-a[0])}function f(a,b){return b*(a[1]-a[0])/100+a[0]}function g(b){return b instanceof a||a.zepto&&a.zepto.isZ(b)}function h(a){return!isNaN(parseFloat(a))&&isFinite(a)}function i(b,c){a.isArray(b)||(b=[b]),a.each(b,function(){"function"==typeof this&&this.call(c)})}function j(b,c){return function(){var d=[null,null];d[c]=a(this).val(),b.val(d,!0)}}function k(a,b){return Math.round(a/b)*b}function l(a,b){return a=a.toFixed(b.decimals),0===parseFloat(a)&&(a=a.replace("-0","0")),a.replace(".",b.serialization.mark)}function m(a,b,c){if(1===a.length)return a[0];var d=a[0].offset()[c]+a[1].offset()[c];return a[d/2>b?0:1]}function n(a,b){return parseFloat(a.toFixed(b))}function o(b){b.preventDefault();var c,d,e=0===b.type.indexOf("touch"),f=0===b.type.indexOf("mouse"),g=0===b.type.indexOf("pointer"),h=b;return 0===b.type.indexOf("MSPointer")&&(g=!0),b.originalEvent&&(b=b.originalEvent),e&&(c=b.changedTouches[0].pageX,d=b.changedTouches[0].pageY),(f||g)&&(g||void 0!==window.pageXOffset||(window.pageXOffset=document.documentElement.scrollLeft,window.pageYOffset=document.documentElement.scrollTop),c=b.clientX+window.pageXOffset,d=b.clientY+window.pageYOffset),a.extend(h,{pointX:c,pointY:d,cursor:f})}function p(a,b,c,d){var e=d.target;return a=a.replace(/\s/g,K+" ")+K,b.on(a,function(a){var b=e.attr("disabled");return b=!(void 0===b||null===b),e.hasClass("noUi-state-tap")||b?!1:(c(o(a),d,e.data("base").data("options")),void 0)})}function q(b){var c=this.target;return void 0===b?this.element.data("value"):(b===!0?b=this.element.data("value"):this.element.data("value",b),void 0!==b&&a.each(this.elements,function(){"function"==typeof this?this.call(c,b):this[0][this[1]](b)}),void 0)}function r(b,c,d){if(g(c)){var e=[],f=b.data("target");return b.data("options").direction&&(d=d?0:1),c.each(function(){a(this).on("change"+K,j(f,d)),e.push([a(this),"val"])}),e}return"string"==typeof c&&(c=[a('<input type="hidden" name="'+c+'">').appendTo(b).addClass(M[3]).change(function(a){a.stopPropagation()}),"val"]),[c]}function s(b,c,d){var e=[];return a.each(d.to[c],function(a){e=e.concat(r(b,d.to[c][a],c))}),{element:b,elements:e,target:b.data("target"),val:q}}function t(a,b){var c=a.data("target");c.hasClass(M[14])||(b||(c.addClass(M[15]),setTimeout(function(){c.removeClass(M[15])},450)),c.addClass(M[14]),i(a.data("options").block,c))}function u(a,b){var c=a.data("options");b=n(b,7),a.data("target").removeClass(M[14]),a.css(c.style,b+"%").data("pct",b),a.is(":first-child")&&a.toggleClass(M[13],b>50),c.direction&&(b=100-b),a.data("store").val(l(f(c.range,b),c))}function v(a,b){var c=a.data("base"),d=c.data("options"),e=c.data("handles"),f=0,g=100;return h(b)?(d.step&&(b=k(b,d.step)),e.length>1&&(a[0]!==e[0][0]?f=n(e[0].data("pct")+d.margin,7):g=n(e[1].data("pct")-d.margin,7)),b=Math.min(Math.max(b,f),0>g?100:g),b===a.data("pct")?[f?f:!1,100===g?!1:g]:(u(a,b),!0)):!1}function w(a,b,c,d){a.addClass(M[5]),setTimeout(function(){a.removeClass(M[5])},300),v(b,c),i(d,a.data("target")),a.data("target").change()}function x(b,c,d){var e,f=c.handles,g=b[c.point]-c.start[c.point];if(g=100*g/c.size,1===f.length){if(e=v(f[0],c.positions[0]+g),e!==!0)return a.inArray(f[0].data("pct"),e)>=0&&t(c.base,!d.margin),void 0}else{var h,j,l,m;if(d.step&&(g=k(g,d.step)),h=l=c.positions[0]+g,j=m=c.positions[1]+g,0>h?(j+=-1*h,h=0):j>100&&(h-=j-100,j=100),0>l&&!h&&!f[0].data("pct"))return;if(100===j&&m>100&&100===f[1].data("pct"))return;u(f[0],h),u(f[1],j)}i(d.slide,c.target)}function y(a,b,c){1===b.handles.length&&b.handles[0].data("grab").removeClass(M[4]),a.cursor&&J.css("cursor","").off(K),I.off(K),b.target.removeClass(M[14]+" "+M[20]).change(),i(c.set,b.target)}function z(b,c,d){1===c.handles.length&&c.handles[0].data("grab").addClass(M[4]),b.stopPropagation(),p(N.move,I,x,{start:b,base:c.base,target:c.target,handles:c.handles,positions:[c.handles[0].data("pct"),c.handles[c.handles.length-1].data("pct")],point:d.orientation?"pointY":"pointX",size:d.orientation?c.base.height():c.base.width()}),p(N.end,I,y,{target:c.target,handles:c.handles}),b.cursor&&(J.css("cursor",a(b.target).css("cursor")),c.handles.length>1&&c.target.addClass(M[20]),J.on("selectstart"+K,function(){return!1}))}function A(a,b,c){var d,e,f,g,h=b.base;a.stopPropagation(),c.orientation?(f=a.pointY,g=h.height()):(f=a.pointX,g=h.width()),d=m(h.data("handles"),f,c.style),e=100*(f-h.offset()[c.style])/g,w(h,d,e,[c.slide,c.set])}function B(a,b,c){var d,e,f=b.base.data("handles");e=c.orientation?a.pointY:a.pointX,e=e<b.base.offset()[c.style],d=e?0:100,e=e?0:f.length-1,w(b.base,f[e],d,[c.slide,c.set])}function C(b,c){function e(a){return 2!==a.length?!1:(a=[parseFloat(a[0]),parseFloat(a[1])],h(a[0])&&h(a[1])?a[1]<a[0]?!1:a:!1)}var f={resolution:function(a,b){switch(a){case 1:case.1:case.01:case.001:case 1e-4:case 1e-5:a=a.toString().split("."),b.decimals="1"===a[0]?0:a[1].length;break;case void 0:b.decimals=2;break;default:return!1}return!0},mark:function(a,b,c){if(!a)return b[c].mark=".",!0;switch(a){case".":case",":return!0;default:return!1}},to:function(b,c,d){function e(a){return g(a)||"string"==typeof a||"function"==typeof a||a===!1||g(a[0])&&"function"==typeof a[0][a[1]]}function f(b){var c=[[],[]];return e(b)?c[0].push(b):a.each(b,function(a,b){a>1||(e(b)?c[a].push(b):c[a]=c[a].concat(b))}),c}if(b){var h,i;for(b=f(b),c.direction&&b[1].length&&b.reverse(),h=0;h<c.handles;h++)for(i=0;i<b[h].length;i++){if(!e(b[h][i]))return!1;b[h][i]||b[h].splice(i,1)}c[d].to=b}else c[d].to=[[],[]];return!0}},i={handles:{r:!0,t:function(a){return a=parseInt(a,10),1===a||2===a}},range:{r:!0,t:function(a,b,c){return b[c]=e(a),b[c]&&b[c][0]!==b[c][1]}},start:{r:!0,t:function(b,c,d){return 1===c.handles?(a.isArray(b)&&(b=b[0]),b=parseFloat(b),c.start=[b],h(b)):(c[d]=e(b),!!c[d])}},connect:{r:!0,t:function(a,b,c){if("lower"===a)b[c]=1;else if("upper"===a)b[c]=2;else if(a===!0)b[c]=3;else{if(a!==!1)return!1;b[c]=0}return!0}},orientation:{t:function(a,b,c){switch(a){case"horizontal":b[c]=0;break;case"vertical":b[c]=1;break;default:return!1}return!0}},margin:{r:!0,t:function(a,b,c){return a=parseFloat(a),b[c]=d(b.range,a),h(a)}},direction:{r:!0,t:function(a,b,c){switch(a){case"ltr":b[c]=0;break;case"rtl":b[c]=1,b.connect=[0,2,1,3][b.connect];break;default:return!1}return!0}},behaviour:{r:!0,t:function(a,b,c){return b[c]={tap:a!==(a=a.replace("tap","")),extend:a!==(a=a.replace("extend","")),drag:a!==(a=a.replace("drag","")),fixed:a!==(a=a.replace("fixed",""))},!a.replace("none","").replace(/\-/g,"")}},serialization:{r:!0,t:function(a,b,c){return f.to(a.to,b,c)&&f.resolution(a.resolution,b)&&f.mark(a.mark,b,c)}},slide:{t:function(b){return a.isFunction(b)}},set:{t:function(b){return a.isFunction(b)}},block:{t:function(b){return a.isFunction(b)}},step:{t:function(a,b,c){return a=parseFloat(a),b[c]=d(b.range,a),h(a)}}};a.each(i,function(a,d){var e=b[a],f=void 0!==e;if(d.r&&!f||f&&!d.t(e,b,a))throw window.console&&console.log&&console.group&&(console.group("Invalid noUiSlider initialisation:"),console.log("Option:	",a),console.log("Value:	",e),console.log("Slider(s):	",c),console.groupEnd()),new RangeError("noUiSlider")})}function D(b){return this.data("options",a.extend(!0,{},b)),b=a.extend({handles:2,margin:0,connect:!1,direction:"ltr",behaviour:"tap",orientation:"horizontal"},b),b.serialization=b.serialization||{},C(b,this),b.style=b.orientation?"top":"left",this.each(function(){var c,d,e,f=a(this),g=[],h=a("<div/>").appendTo(f);if(f.data("base"))throw new Error("Slider was already initialized.");for(f.data("base",h).addClass([M[6],M[16+b.direction],M[10+b.orientation]].join(" ")),c=0;c<b.handles;c++)e=a("<div><div/></div>").appendTo(h),e.addClass(M[1]),e.children().addClass([M[2],M[2]+M[7+b.direction+(b.direction?-1*c:c)]].join(" ")),e.data({base:h,target:f,options:b,grab:e.children(),pct:-1}).attr("data-style",b.style),e.data({store:s(e,c,b.serialization)}),g.push(e);switch(b.connect){case 1:f.addClass(M[9]),g[0].addClass(M[12]);break;case 3:g[1].addClass(M[12]);case 2:g[0].addClass(M[9]);case 0:f.addClass(M[12])}if(h.addClass(M[0]).data({target:f,options:b,handles:g}),f.val(b.start),!b.behaviour.fixed)for(c=0;c<g.length;c++)p(N.start,g[c].children(),z,{base:h,target:f,handles:[g[c]]});b.behaviour.tap&&p(N.start,h,A,{base:h,target:f}),b.behaviour.extend&&(f.addClass(M[19]),b.behaviour.tap&&p(N.start,f,B,{base:h,target:f})),b.behaviour.drag&&(d=h.find("."+M[9]).addClass(M[18]),b.behaviour.fixed&&(d=d.add(h.children().not(d).data("grab"))),p(N.start,d,z,{base:h,target:f,handles:g}))})}function E(){var b=a(this).data("base"),c=[];return a.each(b.data("handles"),function(){c.push(a(this).data("store").val())}),1===c.length?c[0]:b.data("options").direction?c.reverse():c}function F(b,c){return a.isArray(b)||(b=[b]),this.each(function(){var d,f,g=a(this).data("base"),h=Array.prototype.slice.call(g.data("handles"),0),j=g.data("options");for(h.length>1&&(h[2]=h[0]),j.direction&&b.reverse(),f=0;f<h.length;f++)d=b[f%2],null!==d&&void 0!==d&&("string"===a.type(d)&&(d=d.replace(",",".")),d=e(j.range,parseFloat(d)),j.direction&&(d=100-d),v(h[f],d)!==!0&&h[f].data("store").val(!0),c===!0&&i(j.set,a(this)))})}function G(b){var c=[[b,""]];a.each(b.data("base").data("handles"),function(){c=c.concat(a(this).data("store").elements)}),a.each(c,function(){this.length>1&&this[0].off(K)}),b.removeClass(M.join(" ")),b.empty().removeData("base options")}function H(b){return this.each(function(){var c=a(this).val()||!1,d=a(this).data("options"),e=a.extend({},d,b);c!==!1&&G(a(this)),b&&(a(this).noUiSlider(e),c!==!1&&e.start===d.start&&a(this).val(c))})}var I=a(document),J=a("body"),K=".nui",L=a.fn.val,M=["noUi-base","noUi-origin","noUi-handle","noUi-input","noUi-active","noUi-state-tap","noUi-target","-lower","-upper","noUi-connect","noUi-horizontal","noUi-vertical","noUi-background","noUi-stacking","noUi-block","noUi-state-blocked","noUi-ltr","noUi-rtl","noUi-dragable","noUi-extended","noUi-state-drag"],N=window.navigator.pointerEnabled?{start:"pointerdown",move:"pointermove",end:"pointerup"}:window.navigator.msPointerEnabled?{start:"MSPointerDown",move:"MSPointerMove",end:"MSPointerUp"}:{start:"mousedown touchstart",move:"mousemove touchmove",end:"mouseup touchend"};return a.fn.val=function(){return this.hasClass(M[6])?arguments.length?F.apply(this,arguments):E.apply(this):L.apply(this,arguments)},(c?H:D).call(this,b)}}(window.jQuery||window.Zepto)});
