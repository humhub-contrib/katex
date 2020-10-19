import katex from "katex/dist/katex";
import renderMathInElement from "katex/dist/contrib/auto-render";

debugger;
humhub.module('katex', function(module, require, $) {

    var init = function() {
        $(document).on('afterRender', '[data-ui-richtext]', function () {
            var that = this;
            setTimeout(function() {
                debugger;
                renderMathInElement(that);
            });

        });
    };

    window.renderMathInElement = renderMathInElement;

    var hello = function() {
        alert(module.text('hello')+' - '+module.config.username)
    };

    module.export({
        //uncomment the following line in order to call the init() function also for each pjax call
        //initOnPjaxLoad: true,
        init: init,
        hello: hello
    });
});