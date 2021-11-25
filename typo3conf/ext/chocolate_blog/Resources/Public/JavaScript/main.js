(()=>{"use strict";var e,t,r,n,o,i,a,c,s,d,l,u,p,f,m={166:(e,t,r)=>{r.d(t,{Z:()=>c});var n=r(81),o=r.n(n),i=r(645),a=r.n(i)()(o());a.push([e.id,"*{margin:0;padding:0;box-sizing:border-box}html{font-size:10px}body{font-size:1.6rem;color:#333}ul{list-style:none}a{color:inherit;text-decoration:none}img{width:100px;height:auto}.cb-main{display:flex;flex-direction:column;width:100%;min-height:calc(100vh - ($header-height + $footer-height))}.section{margin:2rem 0;padding:2rem 0;display:grid;place-items:center}.container{padding:0 2rem;width:100%;max-width:140rem;height:100%}@media (min-width: 960px){.container{padding:0 4rem}}.grid{display:grid}.grid .grid-item{height:400px;background-color:#dd9cdd}.grid-standard{grid-template-columns:repeat(auto-fill, minmax(300px, 1fr));grid-gap:2rem}.group-list{display:flex;flex-direction:column}.group-list .grid-group-layout{grid-template-columns:1fr;grid-template-rows:1fr 1fr 1fr;margin-bottom:2rem;grid-gap:2rem}@media (min-width: 960px){.group-list .grid-group-layout{grid-template-columns:1fr 1fr;grid-template-rows:1fr 1fr}.group-list .grid-group-layout:nth-child(odd) .grid-item:first-of-type{grid-column:1/2;grid-row:1/3;height:100%}.group-list .grid-group-layout:nth-child(even) .grid-item:last-of-type{grid-column:2/2;grid-row:1/3;height:100%}}.cb-header{width:100%;height:10rem;border-bottom:1px solid #333}.cb-footer{width:100%;height:10rem;background-color:#333}.main-menu{display:flex}.main-menu .submenu{display:none}\n",""]);const c=a},645:e=>{e.exports=function(e){var t=[];return t.toString=function(){return this.map((function(t){var r="",n=void 0!==t[5];return t[4]&&(r+="@supports (".concat(t[4],") {")),t[2]&&(r+="@media ".concat(t[2]," {")),n&&(r+="@layer".concat(t[5].length>0?" ".concat(t[5]):""," {")),r+=e(t),n&&(r+="}"),t[2]&&(r+="}"),t[4]&&(r+="}"),r})).join("")},t.i=function(e,r,n,o,i){"string"==typeof e&&(e=[[null,e,void 0]]);var a={};if(n)for(var c=0;c<this.length;c++){var s=this[c][0];null!=s&&(a[s]=!0)}for(var d=0;d<e.length;d++){var l=[].concat(e[d]);n&&a[l[0]]||(void 0!==i&&(void 0===l[5]||(l[1]="@layer".concat(l[5].length>0?" ".concat(l[5]):""," {").concat(l[1],"}")),l[5]=i),r&&(l[2]?(l[1]="@media ".concat(l[2]," {").concat(l[1],"}"),l[2]=r):l[2]=r),o&&(l[4]?(l[1]="@supports (".concat(l[4],") {").concat(l[1],"}"),l[4]=o):l[4]="".concat(o)),t.push(l))}},t}},81:e=>{e.exports=function(e){return e[1]}},379:e=>{var t=[];function r(e){for(var r=-1,n=0;n<t.length;n++)if(t[n].identifier===e){r=n;break}return r}function n(e,n){for(var i={},a=[],c=0;c<e.length;c++){var s=e[c],d=n.base?s[0]+n.base:s[0],l=i[d]||0,u="".concat(d," ").concat(l);i[d]=l+1;var p=r(u),f={css:s[1],media:s[2],sourceMap:s[3],supports:s[4],layer:s[5]};if(-1!==p)t[p].references++,t[p].updater(f);else{var m=o(f,n);n.byIndex=c,t.splice(c,0,{identifier:u,updater:m,references:1})}a.push(u)}return a}function o(e,t){var r=t.domAPI(t);return r.update(e),function(t){if(t){if(t.css===e.css&&t.media===e.media&&t.sourceMap===e.sourceMap&&t.supports===e.supports&&t.layer===e.layer)return;r.update(e=t)}else r.remove()}}e.exports=function(e,o){var i=n(e=e||[],o=o||{});return function(e){e=e||[];for(var a=0;a<i.length;a++){var c=r(i[a]);t[c].references--}for(var s=n(e,o),d=0;d<i.length;d++){var l=r(i[d]);0===t[l].references&&(t[l].updater(),t.splice(l,1))}i=s}}},569:e=>{var t={};e.exports=function(e,r){var n=function(e){if(void 0===t[e]){var r=document.querySelector(e);if(window.HTMLIFrameElement&&r instanceof window.HTMLIFrameElement)try{r=r.contentDocument.head}catch(e){r=null}t[e]=r}return t[e]}(e);if(!n)throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");n.appendChild(r)}},216:e=>{e.exports=function(e){var t=document.createElement("style");return e.setAttributes(t,e.attributes),e.insert(t,e.options),t}},565:(e,t,r)=>{e.exports=function(e){var t=r.nc;t&&e.setAttribute("nonce",t)}},795:e=>{e.exports=function(e){var t=e.insertStyleElement(e);return{update:function(r){!function(e,t,r){var n="";r.supports&&(n+="@supports (".concat(r.supports,") {")),r.media&&(n+="@media ".concat(r.media," {"));var o=void 0!==r.layer;o&&(n+="@layer".concat(r.layer.length>0?" ".concat(r.layer):""," {")),n+=r.css,o&&(n+="}"),r.media&&(n+="}"),r.supports&&(n+="}");var i=r.sourceMap;i&&"undefined"!=typeof btoa&&(n+="\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(i))))," */")),t.styleTagTransform(n,e,t.options)}(t,e,r)},remove:function(){!function(e){if(null===e.parentNode)return!1;e.parentNode.removeChild(e)}(t)}}}},589:e=>{e.exports=function(e,t){if(t.styleSheet)t.styleSheet.cssText=e;else{for(;t.firstChild;)t.removeChild(t.firstChild);t.appendChild(document.createTextNode(e))}}}},g={};function h(e){var t=g[e];if(void 0!==t)return t.exports;var r=g[e]={id:e,exports:{}};return m[e](r,r.exports,h),r.exports}h.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return h.d(t,{a:t}),t},h.d=(e,t)=>{for(var r in t)h.o(t,r)&&!h.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},h.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),e=h(379),t=h.n(e),r=h(795),n=h.n(r),o=h(569),i=h.n(o),a=h(565),c=h.n(a),s=h(216),d=h.n(s),l=h(589),u=h.n(l),p=h(166),(f={}).styleTagTransform=u(),f.setAttributes=c(),f.insert=i().bind(null,"head"),f.domAPI=n(),f.insertStyleElement=d(),t()(p.Z,f),p.Z&&p.Z.locals&&p.Z.locals,console.log("js")})();