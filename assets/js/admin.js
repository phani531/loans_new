/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function () {
    admin.init();
});

var admin = function () {
    return {
        init: init,
        ajaxInit: ajaxInit
    };

    function init() {
        initAdminAjaxDataTable();
        initClientFormValidation();
    }

    function ajaxInit() {

    }

    /**
     * Function to validate form
     * 
     * @return boolean true or false
     */
    function initClientFormValidation() {
        $("#client_info_add_form").validate({
            rules: {
                CLIENT_NAME: {
                    namefield: true
                }
            },
            errorElement: 'label',
            errorClass: 'error',
            focusInvalid: false,
            invalidHandler: function (event, validator) { //display error alert on form submit   
                $('.alert-danger', $('.login-form')).show();
            }
            ,
            highlight: function (e) {
                $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
            }
            ,
            unhighlight: function (element) { // <-- fires when element is valid
                $(element).closest('.form-group').removeClass('has-error').addClass('has-info');
            }
            ,
            success: function (e) {
                $(e).closest('.form-group').removeClass('has-error').addClass('has-info');
                $(e).remove();
            }
            ,
            errorPlacement: function (error, element) {
                if (element.is(':file')) {
                    error.insertAfter(element.parent().parent());
                } else if (element.is("select")) {
                    error.insertAfter(element.nextAll());
                } else if (element.is("textarea") && element.attr('name') == "rules") {
                    error.insertAfter(element.nextAll());
                } else {
                    error.insertAfter(element);
                }
            }
        }
        );
    }

    /**
     * Function to load admin ajax data tables
     * @returns {undefined}
     */
    function initAdminAjaxDataTable() {
        $(".admin-datatable").each(function () {
            var ajaxUrl = $(this).data("href");
            $(this).DataTable({
                "dom": 'T<"clear">lfrtip',
                "language": {
                    "lengthMenu": "Show&nbsp;  _MENU_ &nbsp;entries",
                    "info": "Showing _START_ to _END_ of _TOTAL_ Users"
                },
                "oTableTools": {
                    "sSwfPath": SITEURL + "assets/admin/dataTables/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
                    "aButtons": []
                },
                "processing": true,
                "serverSide": true,
                "bSortable": true,
                "bSearchable": true,
                "bLengthChange": true,
                "ajax": {
                    "url": ajaxUrl,
                    "data": function (d) {
                    }
                },
                "fnDrawCallback": function () {

                },
                "order": [0, "DESC"]
            });
        });
    }
}
();
