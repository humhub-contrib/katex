import katex from "katex/dist/katex";
import renderMathInElement from "katex/dist/contrib/auto-render";

humhub.module('katex', function(module, require, $) {

    var init = function() {
        $(document).on('afterRender', '[data-ui-richtext]', function () {
            setTimeout(() => {
                renderMathInElement(this);
            });

        });
    };

    module.export({
        init: init,
    });
});