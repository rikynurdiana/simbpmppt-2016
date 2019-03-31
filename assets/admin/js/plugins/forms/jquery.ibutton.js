!function(n){n.iButton={version:"1.0.03",setDefaults:function(e){n.extend(a,e)}},n.fn.iButton=function(e){var a="string"==typeof arguments[0]&&arguments[0],i=a&&Array.prototype.slice.call(arguments,1)||arguments,s=0==this.length?null:n.data(this[0],"iButton");if(s&&a&&this.length){if("object"==a.toLowerCase())return s;if(s[a]){var l;return this.each(function(e){var t=n.data(this,"iButton")[a].apply(s,i);if(0==e&&t){if(!t.jquery)return l=t,!1;l=n([]).add(t)}else t&&t.jquery&&(l=l.add(t))}),l||this}return this}return this.each(function(){new t(this,e)})};var e=0;n.browser.iphone=navigator.userAgent.toLowerCase().indexOf("iphone")>-1;var t=function(t,l){var c=this,o=n(t),d=++e,r=!1,u={},f={dragging:!1,clicked:null},h={position:null,offset:null,time:null},l=n.extend({},a,l,n.metadata?o.metadata():{}),g=l.labelOn==i&&l.labelOff==s,b=":checkbox, :radio";if(!o.is(b))return o.find(b).iButton(l);if(!n.data(o[0],"iButton")){n.data(o[0],"iButton",c),"auto"==l.resizeHandle&&(l.resizeHandle=!g),"auto"==l.resizeContainer&&(l.resizeContainer=!g),this.toggle=function(n){var e=arguments.length>0?n:!o[0].checked;o.attr("checked",e).trigger("change")},this.disable=function(e){var t=arguments.length>0?e:!r;r=t,o.attr("disabled",t),m[t?"addClass":"removeClass"](l.classDisabled),n.isFunction(l.disable)&&l.disable.apply(c,[r,o,l])},this.repaint=function(){y()},this.destroy=function(){n([o[0],m[0]]).unbind(".iButton"),n(document).unbind(".iButton_"+d),m.after(o).remove(),n.data(o[0],"iButton",null),n.isFunction(l.destroy)&&l.destroy.apply(c,[o,l])},o.wrap('<div class="'+n.trim(l.classContainer+" "+l.className)+'" />').after('<div class="'+l.classHandle+'"><div class="'+l.classHandleRight+'"><div class="'+l.classHandleMiddle+'" /></div></div><div class="'+l.classLabelOff+'"><span><label>'+l.labelOff+'</label></span></div><div class="'+l.classLabelOn+'"><span><label>'+l.labelOn+'</label></span></div><div class="'+l.classPaddingLeft+'"></div><div class="'+l.classPaddingRight+'"></div>');var m=o.parent(),p=o.siblings("."+l.classHandle),v=o.siblings("."+l.classLabelOff),k=v.children("span"),B=o.siblings("."+l.classLabelOn),w=B.children("span");(l.resizeHandle||l.resizeContainer)&&(u.onspan=w.outerWidth(),u.offspan=k.outerWidth()),l.resizeHandle?(u.handle=Math.min(u.onspan,u.offspan),p.css("width",u.handle)):u.handle=p.width(),l.resizeContainer?(u.container=Math.max(u.onspan,u.offspan)+u.handle+16,m.css("width",u.container),v.css("width",u.container-5)):u.container=m.width();var O=u.container-u.handle-6,y=function(n){var e=o[0].checked,t=e?O:0,n=arguments.length>0?arguments[0]:!0;n&&l.enableFx?(p.stop().animate({left:t},l.duration,l.easing),B.stop().animate({width:t+0},l.duration,l.easing),w.stop().animate({marginLeft:t-O},l.duration,l.easing),k.stop().animate({marginRight:-t},l.duration,l.easing)):(p.css("left",t),B.css("width",t+0),w.css("marginLeft",t-O),k.css("marginRight",-t))};y(!1);var H=function(n){return n.pageX||(n.originalEvent.changedTouches?n.originalEvent.changedTouches[0].pageX:0)};m.bind("mousedown.iButton touchstart.iButton",function(e){return n(e.target).is(b)||r||!l.allowRadioUncheck&&o.is(":radio:checked")?void 0:(e.preventDefault(),f.clicked=p,h.position=H(e),h.offset=h.position-(parseInt(p.css("left"),10)||0),h.time=(new Date).getTime(),!1)}),l.enableDrag&&n(document).bind("mousemove.iButton_"+d+" touchmove.iButton_"+d,function(n){if(f.clicked==p){n.preventDefault();var e=H(n);e!=h.offset&&(f.dragging=!0,m.addClass(l.classHandleActive));var t=Math.min(1,Math.max(0,(e-h.offset)/O));return p.css("left",t*O),B.css("width",t*O+4),k.css("marginRight",-t*O),w.css("marginLeft",-(1-t)*O),!1}}),n(document).bind("mouseup.iButton_"+d+" touchend.iButton_"+d,function(e){if(f.clicked!=p)return!1;e.preventDefault();var t=!0;if(!f.dragging||(new Date).getTime()-h.time<l.clickOffset){var a=o[0].checked;o.attr("checked",!a),n.isFunction(l.click)&&l.click.apply(c,[!a,o,l])}else{var i=H(e),s=(i-h.offset)/O,a=s>=.5;o[0].checked==a&&(t=!1),o.attr("checked",a)}return m.removeClass(l.classHandleActive),f.clicked=null,f.dragging=null,t?o.trigger("change"):y(),!1}),o.bind("change.iButton",function(){if(y(),o.is(":radio")){var e=o[0],t=n(e.form?e.form[e.name]:":radio[name="+e.name+"]");t.filter(":not(:checked)").iButton("repaint")}n.isFunction(l.change)&&l.change.apply(c,[o,l])}).bind("focus.iButton",function(){m.addClass(l.classFocus)}).bind("blur.iButton",function(){m.removeClass(l.classFocus)}),n.isFunction(l.click)&&o.bind("click.iButton",function(){l.click.apply(c,[o[0].checked,o,l])}),o.is(":disabled")&&this.disable(!0),n.browser.msie&&(m.find("*").andSelf().attr("unselectable","on"),o.bind("click.iButton",function(){o.triggerHandler("change.iButton")})),n.isFunction(l.init)&&l.init.apply(c,[o,l])}},a={duration:100,easing:"swing",labelOn:"ON",labelOff:"OFF",resizeHandle:"auto",resizeContainer:"auto",enableDrag:!0,enableFx:!0,allowRadioUncheck:!1,clickOffset:120,className:"",classContainer:"ibutton-container",classDisabled:"ibutton-disabled",classFocus:"ibutton-focus",classLabelOn:"ibutton-label-on",classLabelOff:"ibutton-label-off",classHandle:"ibutton-handle",classHandleMiddle:"ibutton-handle-middle",classHandleRight:"ibutton-handle-right",classHandleActive:"ibutton-active-handle",classPaddingLeft:"ibutton-padding-left",classPaddingRight:"ibutton-padding-right",init:null,change:null,click:null,disable:null,destroy:null},i=a.labelOn,s=a.labelOff}(jQuery);