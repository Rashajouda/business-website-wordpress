!function(e,r){if("object"==typeof exports&&"object"==typeof module)module.exports=r(require("preact/compat"));else if("function"==typeof define&&define.amd)define(["preact/compat"],r);else{var t="object"==typeof exports?r(require("preact/compat")):r(e.PreactCompat);for(var o in t)("object"==typeof exports?exports:e)[o]=t[o]}}(Depicter,(function(e){return function(){"use strict";var r={314:function(r){r.exports=e}},t={};function o(e){var n=t[e];if(void 0!==n)return n.exports;var s=t[e]={exports:{}};return r[e](s,s.exports,o),s.exports}o.d=function(e,r){for(var t in r)o.o(r,t)&&!o.o(e,t)&&Object.defineProperty(e,t,{enumerable:!0,get:r[t]})},o.o=function(e,r){return Object.prototype.hasOwnProperty.call(e,r)},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})};var n={};return function(){o.r(n),o.d(n,{dpcStoriesProgressBar:function(){return c}});var e=o(314),r=e=>{const{className:r="dpc-progress-bar",progress:t=50}=e;return Depicter.h("div",{className:r},Depicter.h("div",{className:"dpc-progress-bar-value",style:{width:`${t}%`}}))},t=e=>{const{className:t="dpc-stories-progress-bar",storiesData:o=[]}=e;return Depicter.h("div",{className:t},o.map((e=>Depicter.h(r,{key:e.id,progress:e.progress}))))};function s(){return s=Object.assign?Object.assign.bind():function(e){for(var r=1;r<arguments.length;r++){var t=arguments[r];for(var o in t)Object.prototype.hasOwnProperty.call(t,o)&&(e[o]=t[o])}return e},s.apply(this,arguments)}const c={component:r=>{const{composer:o,...n}=r,[c,a]=(0,e.useState)(o.navigator.currentIndex||1),[i,u]=(0,e.useState)(0),p=(0,e.useRef)(0),f=(0,e.useRef)(0),d=Array.from({length:o.navigator.count},((e,r)=>1+r));(0,e.useEffect)((()=>{let e;const r=()=>{const t=f.current+(p.current-f.current)/10;Math.abs(p.current-f.current)>=.02?u(t):u(0),f.current=t,e=window.requestAnimationFrame(r)};return r(),()=>{e&&window.cancelAnimationFrame(e)}}),[]);const l=(0,e.useMemo)((()=>{const e=[];return d.forEach(((r,t)=>{let o=0;t+1===c?o=i:t<c&&(o=100),e.push({id:`${r}`,progress:o})})),e}),[c,i,d]),m=(e,r)=>{a(r+1),p.current=0,f.current=0},g=(0,e.useCallback)(((e,r)=>{p.current=r/100*115}),[]);return(0,e.useEffect)((()=>(o.on("targetIndexChange",m),o.on("slideshowTimerUpdate",g),()=>{o.off("targetIndexChange",m),o.off("slideshowTimerUpdate",g)})),[o,g]),Depicter.h(t,s({storiesData:l},n))},async:!1}}(),n}()}));