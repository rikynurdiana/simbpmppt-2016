!function(e,t,i,n){function r(e){return t.getElementById(e)}i.runtimes.Html4=i.addRuntime("html4",{getFeatures:function(){return{multipart:!0,triggerDialog:i.ua.gecko&&e.FormData||i.ua.webkit}},init:function(n,o){n.bind("Init",function(o){function s(){var e,a,d,u;l=i.guid(),b.push(l),e=t.createElement("form"),e.setAttribute("id","form_"+l),e.setAttribute("method","post"),e.setAttribute("enctype","multipart/form-data"),e.setAttribute("encoding","multipart/form-data"),e.setAttribute("target",o.id+"_iframe"),e.style.position="absolute",a=t.createElement("input"),a.setAttribute("id","input_"+l),a.setAttribute("type","file"),a.setAttribute("accept",y),a.setAttribute("size",1),u=r(o.settings.browse_button),o.features.triggerDialog&&u&&i.addEvent(r(o.settings.browse_button),"click",function(e){a.disabled||a.click(),e.preventDefault()},o.id),i.extend(a.style,{width:"100%",height:"100%",opacity:0,fontSize:"99px",cursor:"pointer"}),i.extend(e.style,{overflow:"hidden"}),d=o.settings.shim_bgcolor,d&&(e.style.background=d),h&&i.extend(a.style,{filter:"alpha(opacity=0)"}),i.addEvent(a,"change",function(t){var d,c=t.target,f=[];c.value&&(r("form_"+l).style.top="-1048575px",d=c.value.replace(/\\/g,"/"),d=d.substring(d.length,d.lastIndexOf("/")+1),f.push(new i.File(l,d)),o.features.triggerDialog?i.removeEvent(u,"click",o.id):i.removeAllEvents(e,o.id),i.removeEvent(a,"change",o.id),s(),f.length&&n.trigger("FilesAdded",f))},o.id),e.appendChild(a),p.appendChild(e),o.refresh()}function a(){var n=t.createElement("div");n.innerHTML='<iframe id="'+o.id+'_iframe" name="'+o.id+'_iframe" src="'+v+':&quot;&quot;" style="display:none"></iframe>',d=n.firstChild,p.appendChild(d),i.addEvent(d,"load",function(t){var n,r,s=t.target;if(u){try{n=s.contentWindow.document||s.contentDocument||e.frames[s.id].document}catch(a){return void o.trigger("Error",{code:i.SECURITY_ERROR,message:i.translate("Security error."),file:u})}r=n.body.innerHTML,r&&(u.status=i.DONE,u.loaded=1025,u.percent=100,o.trigger("UploadProgress",u),o.trigger("FileUploaded",u,{response:r}))}},o.id)}var d,u,l,c,f,g,m,p=t.body,v="javascript",b=[],h=/MSIE/.test(navigator.userAgent),y=[],E=o.settings.filters;e:for(c=0;c<E.length;c++)for(f=E[c].extensions.split(/,/),m=0;m<f.length;m++){if("*"===f[m]){y=[];break e}g=i.mimeTypes[f[m]],g&&-1===i.inArray(g,y)&&y.push(g)}y=y.join(","),o.settings.container&&(p=r(o.settings.container),"static"===i.getStyle(p,"position")&&(p.style.position="relative")),o.bind("UploadFile",function(e,n){var o,s;n.status!=i.DONE&&n.status!=i.FAILED&&e.state!=i.STOPPED&&(o=r("form_"+n.id),s=r("input_"+n.id),s.setAttribute("name",e.settings.file_data_name),o.setAttribute("action",e.settings.url),i.each(i.extend({name:n.target_name||n.name},e.settings.multipart_params),function(e,n){var r=t.createElement("input");i.extend(r,{type:"hidden",name:n,value:e}),o.insertBefore(r,o.firstChild)}),u=n,r("form_"+l).style.top="-1048575px",o.submit())}),o.bind("FileUploaded",function(e){e.refresh()}),o.bind("StateChanged",function(t){t.state==i.STARTED?a():t.state==i.STOPPED&&e.setTimeout(function(){i.removeEvent(d,"load",t.id),d.parentNode&&d.parentNode.removeChild(d)},0),i.each(t.files,function(e,t){if(e.status===i.DONE||e.status===i.FAILED){var n=r("form_"+e.id);n&&n.parentNode.removeChild(n)}})}),o.bind("Refresh",function(e){var n,o,s,a,d,u,c,f,g;n=r(e.settings.browse_button),n&&(d=i.getPos(n,r(e.settings.container)),u=i.getSize(n),c=r("form_"+l),f=r("input_"+l),i.extend(c.style,{top:d.y+"px",left:d.x+"px",width:u.w+"px",height:u.h+"px"}),e.features.triggerDialog&&("static"===i.getStyle(n,"position")&&i.extend(n.style,{position:"relative"}),g=parseInt(n.style.zIndex,10),isNaN(g)&&(g=0),i.extend(n.style,{zIndex:g}),i.extend(c.style,{zIndex:g-1})),s=e.settings.browse_button_hover,a=e.settings.browse_button_active,o=e.features.triggerDialog?n:c,s&&(i.addEvent(o,"mouseover",function(){i.addClass(n,s)},e.id),i.addEvent(o,"mouseout",function(){i.removeClass(n,s)},e.id)),a&&(i.addEvent(o,"mousedown",function(){i.addClass(n,a)},e.id),i.addEvent(t.body,"mouseup",function(){i.removeClass(n,a)},e.id)))}),n.bind("FilesRemoved",function(e,t){var i,n;for(i=0;i<t.length;i++)n=r("form_"+t[i].id),n&&n.parentNode.removeChild(n)}),n.bind("DisableBrowse",function(e,i){var n=t.getElementById("input_"+l);n&&(n.disabled=i)}),n.bind("Destroy",function(e){var n,o,s,a={inputContainer:"form_"+l,inputFile:"input_"+l,browseButton:e.settings.browse_button};for(n in a)o=r(a[n]),o&&i.removeAllEvents(o,e.id);i.removeAllEvents(t.body,e.id),i.each(b,function(e,t){s=r("form_"+e),s&&p.removeChild(s)})}),s()}),o({success:!0})}})}(window,document,plupload);