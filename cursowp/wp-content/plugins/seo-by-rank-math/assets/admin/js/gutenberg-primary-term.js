!function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=267)}({0:function(e,t){e.exports=wp.i18n},1:function(e,t){e.exports=jQuery},19:function(e,t){e.exports=wp.url},2:function(e,t){e.exports=wp.components},267:function(e,t,n){"use strict";n.r(t);var r=n(1),o=n.n(r),s=n(28),a=n(5),i=n(2),c=n(4),l=n(0),u=n(96),p=n.n(u),f=n(19),m=n(3);function d(e){return(d="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}function h(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}function y(e){return(y=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)})(e)}function b(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}function T(e,t){return(T=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e})(e,t)}function v(e){var t=e.TermComponent;return function(e){return!1!==rankMath.assessor.primaryTaxonomy&&e.slug===rankMath.assessor.primaryTaxonomy.name}(e)?wp.element.createElement(a.Fragment,null,wp.element.createElement(t,e),wp.element.createElement(i.PanelRow,{className:"rank-math-primary-term-picker"},wp.element.createElement(w,e))):wp.element.createElement(t,e)}var g=function(){function e(){var t;return function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),(t=function(e,t){return!t||"object"!==d(t)&&"function"!=typeof t?b(e):t}(this,y(e).apply(this,arguments))).onChange=t.onChange.bind(b(t)),t.state={loading:!0,availableTerms:[],selectedTerms:[]},t}return function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),t&&T(e,t)}(e,a.Component),function(e,t,n){t&&h(e.prototype,t)}(e,[{key:"componentDidMount",value:function(){this.fetchTerms()}},{key:"componentWillUnmount",value:function(){Object(c.invoke)(this.fetchRequest,["abort"])}},{key:"componentDidUpdate",value:function(e,t){if(e.selectedTermIds.length<this.props.selectedTermIds.length){var n=Object(c.difference)(this.props.selectedTermIds,e.selectedTermIds)[0];if(!this.termIsAvailable(n))return void this.fetchTerms()}e.selectedTermIds!==this.props.selectedTermIds&&this.updateSelectedTerms(this.state.availableTerms,this.props.selectedTermIds),t.selectedTerms!==this.state.selectedTerms&&this.handleSelectedTermsChange()}},{key:"termIsAvailable",value:function(e){return!!this.state.availableTerms.find((function(t){return t.id===e}))}},{key:"updateSelectedTerms",value:function(e,t){this.setState({selectedTerms:this.filterSelectedTerms(e,t)})}},{key:"handleSelectedTermsChange",value:function(){var e=this.state.selectedTerms,t=parseInt(this.props.primaryTermID);e.find((function(e){return e.id===t}))||this.onChange(e.length?e[0].id:"")}},{key:"fetchTerms",value:function(){var e=this,t=this.props.taxonomy;t&&(this.fetchRequest=p()({path:Object(f.addQueryArgs)("/wp/v2/".concat(t.rest_base),{per_page:-1,orderby:"count",order:"desc",_fields:"id,name"})}),this.fetchRequest.then((function(t){e.fetchRequest=null,e.setState({loading:!1,availableTerms:t,selectedTerms:e.filterSelectedTerms(t,e.props.selectedTermIds)})}),(function(t){"abort"!==t.statusText&&(e.fetchRequest=null,e.setState({loading:!1}))})))}},{key:"filterSelectedTerms",value:function(e,t){return e.filter((function(e){return t.includes(e.id)}))}},{key:"onChange",value:function(e){e=parseInt(e),rankMath.assessor.serpData.primaryTerm=e,o()("#rank_math_primary_"+this.props.taxonomy.slug).val(e),Object(m.dispatch)("core/editor").editPost({meta:{refreshMe:"refreshUI"}})}},{key:"shouldComponentUpdate",value:function(e,t){return this.props.selectedTermIds!==e.selectedTermIds||this.props.primaryTermID!==e.primaryTermID||this.state.selectedTerms!==t.selectedTerms}},{key:"render",value:function(){return this.state.selectedTerms.length<2?null:this.state.loading?[wp.element.createElement(i.Spinner,{key:"spinner"}),wp.element.createElement("p",{key:"spinner-text"},"Loading")]:wp.element.createElement(i.SelectControl,{label:Object(l.__)("Select Primary Term","rank-math"),value:this.props.primaryTermID,options:this.state.selectedTerms.map((function(e){return{value:e.id,label:Object(c.unescape)(e.name)}})),onChange:this.onChange})}}]),e}(),w=Object(m.withSelect)((function(e,t){var n=t.slug,r=e("core/editor").getEditedPostAttribute("meta"),s=e("core").getTaxonomy(n);return{taxonomy:s,meta:r,selectedTermIds:s?e("core/editor").getEditedPostAttribute(s.rest_base):[],primaryTermID:o()("#rank_math_primary_"+s.slug).val()}}))(g);function O(){return(O=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(e[r]=n[r])}return e}).apply(this,arguments)}function k(){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,k),Object(s.addFilter)("editor.PostTaxonomyType","rank-math",(function(e){return function(t){return wp.element.createElement(v,O({TermComponent:e},t))}}))}o()(document).ready((function(){window.rankMathGutenberg=new k}))},28:function(e,t){e.exports=wp.hooks},3:function(e,t){e.exports=wp.data},4:function(e,t){e.exports=lodash},5:function(e,t){e.exports=wp.element},96:function(e,t){e.exports=wp.apiFetch}});