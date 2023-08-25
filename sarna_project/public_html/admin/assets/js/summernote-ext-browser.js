(function (factory) {
    /* global define */
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define(['jquery'], factory);
    } else if (typeof module === 'object' && module.exports) {
        // Node/CommonJS
        module.exports = factory(require('jquery'));
    } else {
        // Browser globals
        factory(window.jQuery);
    }
}(function ($) {

    // Extends plugins for adding readmore.
    //  - plugin is external module for customizing.
    $.extend($.summernote.plugins, {
        /**
         * @param {Object} context - context object has status of editor.
         */

        'filebrowser': function (context) {
            var self = this;
            var ui = $.summernote.ui;

            // add  button
            context.memo('button.filebrowser', function () {
                // create button
                var button = ui.button({
                    contents: '<i class="fa fa-file"/>',
                    tooltip: 'File Browser',
                    click: function () {
                        $('#FileModal').modal('show')
                    }
                });

                // create jQuery object from button instance.
                var $btn = button.render();
                return $btn;
            });

            // This methods will be called when editor is destroyed by $('..').summernote('destroy');
            // You should remove elements on `initialize`.
            this.destroy = function () {
                this.$panel.remove();
                this.$panel = null;
            };
        }


    });
    }));

// create modal
$(document).ready(function () {
    // change iframe path for file browser location

    var modalcode = '<div class=\"modal fade\" id=\"FileModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"fileModalTitle\" aria-hidden=\"true\"><div class=\"modal-dialog  modal-lg\" role=\"document\"><div class=\"modal-content\"><div class=\"modal-header\"><h5 class=\"modal-title\" id=\"FileBrowserModalLabel\">File Browser<\/h5><button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;<\/span><\/button><\/div><div class=\"modal-body\"><iframe src=\"\/summernote\/plugin\/filebrowser\/filebrowser.aspx\" id=\"editoverlayiframe\" class=\"editoverlayiframe\"><\/iframe><\/div><\/div><\/div><\/div>'
    $(modalcode).appendTo("body");
});



function AddFile(imagepath) {
    // function to add either an image or link to page
    if (imagepath.endsWith("jpg") || imagepath.endsWith("png") || imagepath.endsWith("gif") || imagepath.endsWith("svg")) {
        $('#summernote').summernote('editor.insertImage', imagepath);
    } else {
        $('#summernote').summernote('createLink', {
            text: imagepath,
            url: imagepath,
            isNewWindow: false
        });
    }

    $('#FileModal').modal('hide')
}

