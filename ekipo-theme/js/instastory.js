!function(e){const t=function(e){let t="",n="",o="";return e.indexOf("@")>-1?(t="user",n=e.substring(e.indexOf("@")+1)):e.indexOf("#")>-1?(t="hashtag",n=e.substring(e.indexOf("#")+1)):(t="hashtag",n=e),{url:o="user"==t?"https://www.instagram.com/"+n+"/?__a=1":"https://www.instagram.com/explore/tags/"+n+"/?__a=1",type:t}};e.fn.instastory=function(n){let o=this,s=e.extend({get:"",type:"",imageSize:150,limit:6,link:!0,template:"",after:function(){}},n);if(!o.length)return console.group("Instastory.js log"),console.warn("The DOM element you tried to initiate the plugin on, does not exist"),console.log("For more info on how to use the plugin, please see: https://github.com/kasperlegarth/instastory.js"),console.groupEnd(),!1;if("string"==typeof n&&(s.get=n),""==s.get)return console.group("Instastory.js log"),console.warn("You failed to specify what you want"),console.log("For more info on how to use the plugin, please see: https://github.com/kasperlegarth/instastory.js"),console.groupEnd(),!1;let r=t(s.get);s.type=r.type;const a=function(e){const t=s.imageSize;if("number"!=typeof t)return"raw"==t?e.display_url:e.thumbnail_resources[0].src;switch(t){case 150:return e.thumbnail_resources[0].src;case 240:return e.thumbnail_resources[1].src;case 320:return e.thumbnail_resources[2].src;case 480:return e.thumbnail_resources[3].src;case 640:return e.thumbnail_resources[4].src;default:return e.thumbnail_resources[0].src}},i=function(e){String.prototype.allReplace=function(e){let t=this;for(let n in e)t=t.replace(new RegExp(n,"g"),e[n]);return t};let t={"{{accessibility_caption}}":e.accessibility_caption,"{{caption}}":e.edge_media_to_caption.edges.length>0?e.edge_media_to_caption.edges[0].node.text:"","{{comments}}":e.edge_media_to_comment.count,"{{image}}":a(e),"{{likes}}":e.edge_liked_by.count,"{{link}}":"https://www.instagram.com/p/"+e.shortcode};return s.template.allReplace(t)};e.ajax({url:r.url}).done(function(e){o.html(function(e){let t="",n={};switch(s.type){case"user":n=e.edge_owner_to_timeline_media;break;default:n=e.edge_hashtag_to_media}let o=n.edges;for(var r=0;r<s.limit;r++)if(void 0!==o[r]){let e=o[r].node,n="";""!=s.template?n=i(e):(n="<img src='"+a(e)+"' alt='"+e.accessibility_caption+"'>",s.link&&(n="<a href='https://www.instagram.com/p/"+e.shortcode+"'>"+n+"</a>")),t+=n}return t}(e.graphql[s.type])),s.after()}).fail(function(e){switch(e.status){case 404:console.warn("The "+s.type+" do not exsists, please try another one");break;default:console.warn("An unknow error happend")}})},e.instastory=function(n){let o=t(n),s="";return e.ajax({url:o.url,async:!1}).done(function(e){s=e.graphql[o.type]}).fail(function(e){switch(e.status){case 404:console.warn("The "+o.type+" do not exsists, please try another one");break;default:console.warn("An unknow error happend")}}),s}}(jQuery);