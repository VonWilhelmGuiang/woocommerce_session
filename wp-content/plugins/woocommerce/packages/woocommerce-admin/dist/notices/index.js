this.wc=this.wc||{},this.wc.notices=function(t){var e={};function n(r){if(e[r])return e[r].exports;var i=e[r]={i:r,l:!1,exports:{}};return t[r].call(i.exports,i,i.exports,n),i.l=!0,i.exports}return n.m=t,n.c=e,n.d=function(t,e,r){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:r})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var i in t)n.d(r,i,function(e){return t[e]}.bind(null,i));return r},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=488)}({129:function(t,e){t.exports=window.wp.notices},488:function(t,e,n){"use strict";n.r(e);var r={};n.r(r),n.d(r,"createNotice",(function(){return l})),n.d(r,"createSuccessNotice",(function(){return f})),n.d(r,"createInfoNotice",(function(){return d})),n.d(r,"createErrorNotice",(function(){return a})),n.d(r,"createWarningNotice",(function(){return p})),n.d(r,"removeNotice",(function(){return v}));var i={};n.r(i),n.d(i,"getNotices",(function(){return g}));n(129);var o=n(8),c=n(5);var u=(t=>e=>function(){let n=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},r=arguments.length>1?arguments[1]:void 0;const i=r[t];if(void 0===i)return n;const o=e(n[i],r);return o===n[i]?n:{...n,[i]:o}})("context")((function(){let t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[],e=arguments.length>1?arguments[1]:void 0;switch(e.type){case"CREATE_NOTICE":return[...Object(c.reject)(t,{id:e.notice.id}),e.notice];case"REMOVE_NOTICE":return Object(c.reject)(t,{id:e.id})}return t}));const s="global";function l(){let t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"info",e=arguments.length>1?arguments[1]:void 0,n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{};const{speak:r=!0,isDismissible:i=!0,context:o=s,id:u=Object(c.uniqueId)(o),actions:l=[],type:f="default",__unstableHTML:d,icon:a=null,explicitDismiss:p=!1,onDismiss:v=null}=n;return e=String(e),{type:"CREATE_NOTICE",context:o,notice:{id:u,status:t,content:e,spokenMessage:r?e:null,__unstableHTML:d,isDismissible:i,actions:l,type:f,icon:a,explicitDismiss:p,onDismiss:v}}}function f(t,e){return l("success",t,e)}function d(t,e){return l("info",t,e)}function a(t,e){return l("error",t,e)}function p(t,e){return l("warning",t,e)}function v(t){let e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:s;return{type:"REMOVE_NOTICE",id:t,context:e}}const b=[];function g(t){let e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:s;return t[e]||b}Object(o.registerStore)("core/notices2",{reducer:u,actions:r,selectors:i})},5:function(t,e){t.exports=window.lodash},8:function(t,e){t.exports=window.wp.data}});