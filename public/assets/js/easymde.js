$(function () {
    'use strict';

    /*easymde editor*/
    if ($("#easyMdeExample").length) {
        var easymde = new EasyMDE({
            element: $("#easyMdeExample")[0]
        });
    }


    if ($("#easyMdeExample2").length) {
        var easymde = new EasyMDE({
            element: $("#easyMdeExample2")[0]
        });
    }

    if ($("#easyMdeExample3").length) {
        var easymde = new EasyMDE({
            element: $("#easyMdeExample3")[0]
        });
    }

});
