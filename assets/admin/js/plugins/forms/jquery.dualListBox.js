﻿!function(e){function o(o){var t=e("#"+o.view+" option").size(),i=e("#"+o.storage+" option").size();e("#"+o.counter).text("Showing "+t+" of "+(t+i))}function t(t){var n,r=t.index;n=u[r].useFilters?e("#"+t.filter).val().toString().toLowerCase():"",e("#"+t.view+" option").filter(function(o){var t=e(this).text().toString().toLowerCase();return-1==t.indexOf(n)}).appendTo("#"+t.storage),e("#"+t.storage+" option").filter(function(o){var t=e(this).text().toString().toLowerCase();return-1!=t.indexOf(n)}).appendTo("#"+t.view);try{e("#"+t.view+" option").removeAttr("selected")}catch(c){}u[r].useSorting&&i(t),u[r].useCounters&&o(t)}function i(o){var t=e("#"+o.view+" option");t.sort(v[o.index]),e("#"+o.view).empty().append(t)}function n(i,n){l(u[i.index])?e("#"+i.view+" option:selected").appendTo("#"+n.view):e("#"+i.view+" option:selected:not([class*=copiedOption])").clone().appendTo("#"+n.view).end().end().addClass("copiedOption");try{e("#"+i.view+" option,#"+n.view+" option").removeAttr("selected")}catch(r){}t(n),u[i.index].useCounters&&o(i)}function r(i,n){l(u[i.index])?e("#"+i.view+" option").appendTo("#"+n.view):e("#"+i.view+" option:not([class*=copiedOption])").clone().appendTo("#"+n.view).end().end().addClass("copiedOption");try{e("#"+i.view+" option,#"+n.view+" option").removeAttr("selected")}catch(r){}t(n),u[i.index].useCounters&&o(i)}function c(i,n){e("#"+n.view+" option.copiedOption").add("#"+n.storage+" option.copiedOption").remove();try{e("#"+i.view+" option:selected").appendTo("#"+n.view).removeAttr("selected")}catch(r){}e("#"+i.view+" option").add("#"+i.storage+" option").clone().addClass("copiedOption").appendTo("#"+n.view),t(n),u[i.index].useCounters&&o(i)}function a(i,n){e("#"+n.view+" option.copiedOption").add("#"+n.storage+" option.copiedOption").remove();try{e("#"+i.storage+" option").clone().addClass("copiedOption").add("#"+i.view+" option").appendTo("#"+n.view).removeAttr("selected")}catch(r){}t(n),u[i.index].useCounters&&o(i)}function s(t){e("#"+t.filter).val(""),e("#"+t.storage+" option").appendTo("#"+t.view);try{e("#"+t.view+" option").removeAttr("selected")}catch(n){}u[t.index].useSorting&&i(t),u[t.index].useCounters&&o(t)}function l(e){return"move"==e.transferMode}var u=new Array,p=new Array,d=new Array,v=new Array;e.configureBoxes=function(x){var w=u.push({box1View:"box1View",box1Storage:"box1Storage",box1Filter:"box1Filter",box1Clear:"box1Clear",box1Counter:"box1Counter",box2View:"box2View",box2Storage:"box2Storage",box2Filter:"box2Filter",box2Clear:"box2Clear",box2Counter:"box2Counter",to1:"to1",allTo1:"allTo1",to2:"to2",allTo2:"allTo2",transferMode:"move",sortBy:"text",useFilters:!0,useCounters:!0,useSorting:!0,selectOnSubmit:!0});w--,e.extend(u[w],x),p.push({view:u[w].box1View,storage:u[w].box1Storage,filter:u[w].box1Filter,clear:u[w].box1Clear,counter:u[w].box1Counter,index:w}),d.push({view:u[w].box2View,storage:u[w].box2Storage,filter:u[w].box2Filter,clear:u[w].box2Clear,counter:u[w].box2Counter,index:w}),"text"==u[w].sortBy?v.push(function(e,o){var t=e.text.toLowerCase(),i=o.text.toLowerCase();return i>t?-1:t>i?1:0}):v.push(function(e,o){var t=e.value.toLowerCase(),i=o.value.toLowerCase();return i>t?-1:t>i?1:0}),u[w].useFilters&&(e("#"+p[w].filter).keyup(function(){t(p[w])}),e("#"+d[w].filter).keyup(function(){t(d[w])}),e("#"+p[w].clear).click(function(){s(p[w])}),e("#"+d[w].clear).click(function(){s(d[w])})),l(u[w])?(e("#"+d[w].view).dblclick(function(){n(d[w],p[w])}),e("#"+u[w].to1).click(function(){n(d[w],p[w])}),e("#"+u[w].allTo1).click(function(){r(d[w],p[w])})):(e("#"+d[w].view).dblclick(function(){c(d[w],p[w])}),e("#"+u[w].to1).click(function(){c(d[w],p[w])}),e("#"+u[w].allTo1).click(function(){a(d[w],p[w])})),e("#"+p[w].view).dblclick(function(){n(p[w],d[w])}),e("#"+u[w].to2).click(function(){n(p[w],d[w])}),e("#"+u[w].allTo2).click(function(){r(p[w],d[w])}),u[w].useCounters&&(o(p[w]),o(d[w])),u[w].useSorting&&(i(p[w]),i(d[w])),e("#"+p[w].storage+",#"+d[w].storage).css("display","none"),u[w].selectOnSubmit&&e("#"+u[w].box2View).closest("form").submit(function(){e("#"+u[w].box2View).children("option").attr("selected","selected")})}}(jQuery);