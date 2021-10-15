"use strict";

var KTTreeview = function () {

    var _demo4 = function() {
        $("#kt_tree_4").jstree({
            "core" : {
                "themes" : {
                    "responsive": false
                },
                // so that create works
                "check_callback" : true,
                'data': myTree,     //Lấy dữ liệu từ View (từ Controller) để hiển thị
            },
            "types" : {
                "default" : {
                    "icon" : "fa fa-folder text-primary"
                },
                "file" : {
                    "icon" : "fa fa-file  text-primary"
                }
            },
            "state" : { "key" : "demo2" },
            "plugins" : [ "contextmenu", "state", "types" ]
        });
    }

    return {
        //main function to initiate the module
        init: function () {
            _demo4();
        }
    };
}();

jQuery(document).ready(function() {
    KTTreeview.init();
});
