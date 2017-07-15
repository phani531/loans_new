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
        initRoleFormValidation();
        initAdminCompProfileValidation();
        initAdminDesignationFormValidation();
        initAdminEmployeeFormValidation();
        initDeleteIndividualRow();
        initDatePicker();
    }

    function ajaxInit() {

    }

    /**
     * Function to validate admin employee form
     * @returns {undefined}
     */
    function initAdminEmployeeFormValidation() {
        $("#admin_employee_form").validate({
            rules: {
                EMP_NAME: {
                    namefield: true
                },
                IC_NO: {
                    alphanumeric: true
                },
                STAFF_NO: {
                    alphanumeric: true
                },
                MOBILE_NO: {
                    numeric: true
                },
                PHONE_NO: {
                    numeric: true
                },
                EMAIL_ID: {
                    email: true
                },
                BASIC_SALARY: {
                    numeric: true
                },
                LANGUAGE: {
                    namefield: true
                }
            },
            errorElement: 'label',
            errorClass: 'error',
            focusInvalid: false,
            highlight: function (e) {
                $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
            },
            unhighlight: function (element) { // <-- fires when element is valid
                $(element).closest('.form-group').removeClass('has-error').addClass('has-info');
            },
            success: function (e) {
                $(e).closest('.form-group').removeClass('has-error').addClass('has-info');
                $(e).remove();
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element);
            }
        });
    }

    /**
     * Function to validate admin designation form validation
     * @returns {undefined}
     */
    function initAdminDesignationFormValidation() {
        $("#admin_design_form").validate({
            rules: {
                DESIGNATION_NAME: {
                    namefield: true
                },
            },
            errorElement: 'label',
            errorClass: 'error',
            focusInvalid: false,
            highlight: function (e) {
                $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
            },
            unhighlight: function (element) { // <-- fires when element is valid
                $(element).closest('.form-group').removeClass('has-error').addClass('has-info');
            },
            success: function (e) {
                $(e).closest('.form-group').removeClass('has-error').addClass('has-info');
                $(e).remove();
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element);
            }
        });
    }

    /**
     * Function to validate admin company profile
     * 
     * @returns {undefined}
     */
    function initAdminCompProfileValidation() {
        $("#admin_comp_profile_form").validate({
            rules: {
                BRANCH_NAME: {
                    namefield: true
                },
                BRANCH_REG_NO: {
                    alphanumeric: true
                },
                BRANCH_CODE: {
                    alphanumeric: true
                },
                BRANCH_LICENCE_NO: {
                    alphanumeric: true
                },
                BRANCH_OFFICE_NO: {
                    numberfield: true
                },
                BRANCH_FAX_NO: {
                    numberfield: true
                },
                BRANCH_EMAILID: {
                    email: true
                },
                BRANCH_WEBSITE: {
                    url: true
                },
                LAWYER_NAME: {
                    namefield: true
                },
                LAWYER_OFFICE_NO: {
                    numberfield: true
                },
                LAWYER_FAX_NO: {
                    alphanumeric: true
                },
                LAWYER_EMAILID: {
                    email: true
                },
                OWNER_NAME: {
                    namefield: true
                }
            },
            errorElement: 'label',
            errorClass: 'error',
            focusInvalid: false,
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
                error.insertAfter(element);
            }
        });
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
                error.insertAfter(element);
            }
        }
        );
    }

    /**
     * FUnction validate role form
     * @returns {undefined}
     */
    function initRoleFormValidation() {
        $("#role_form").validate({
            rules: {
                ROLE_NAME: {
                    namefield: true
                }
            },
            errorElement: 'label',
            errorClass: 'error',
            focusInvalid: false,
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
                error.insertAfter(element);
            }
        });
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
                    initDeleteIndividualRow();
                },
                "order": [0, "DESC"]
            });
        });
    }

    /**
     * Function to delete indivisdual row
     * 
     * @return boolean true or false
     */
    function initDeleteIndividualRow() {
        $(".delete-row").each(function () {
            $(this).on("click", function () {
                var url = $(this).data("href");
                var deleteMessage = $(this).data("message");
                var desc = $(this).data("desc");
                var id = $(this).data("id");
                var tableId = $(this).data("table-name");
                swal({
                    title: deleteMessage,
                    text: desc,
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, delete",
                    cancelButtonText: "No, cancel",
                    confirmButtonClass: "confirm-btn",
                    cancelButtonClass: "btn btn-default",
                    closeOnConfirm: false,
                    closeOnCancel: false
                }, function (isConfirm) {
                    if (isConfirm) {
                        $.ajax(
                                {
                                    url: url,
                                    type: 'POST',
                                    data: {"id": id},
                                    cache: false,
                                    success: function (data) {
                                    }
                                }
                        )
                                .done(function (data) {
                                    var isJSON = true;
                                    try {
                                        var jsonData = $.parseJSON(data);
                                    } catch (err) {
                                        isJSON = false;
                                    }
                                    if (isJSON) {
                                        if (typeof (jsonData.status) != 'undefined' && jsonData.status == 'success') {
                                            var message = jsonData.message;
                                            if (typeof (jsonData.message) != 'undefined') {
                                                swal({
                                                    title: "Deleted",
                                                    text: message,
                                                    type: "success",
                                                    showCancelButton: false,
                                                    confirmButtonText: "Ok",
                                                    confirmButtonClass: "yesok-btn",
                                                },
                                                        function (e) {
                                                            $("#" + tableId).DataTable().draw();
                                                        });
                                            }
                                        } else {
                                            swal({
                                                title: "Failed!",
                                                text: jsonData.message,
                                                type: "error",
                                                confirmButtonText: "Ok",
                                                confirmButtonClass: "yescancel-btn",
                                            });
                                        }
                                    } else {
                                        swal({
                                            title: "Failed!",
                                            text: "Something went wrong. Please try again!",
                                            type: "error",
                                            confirmButtonText: "Ok",
                                            confirmButtonClass: "yescancel-btn",
                                        });
                                    }
                                })
                                .error(function (data) {
                                    swal({
                                        title: "Failed!",
                                        text: "Something went wrong. Please try again!",
                                        type: "error",
                                        confirmButtonText: "Ok",
                                        confirmButtonClass: "yescancel-btn",
                                    });
                                });
                    } else {
                        swal({
                            title: "Cancelled",
                            text: "The action has been cancelled.",
                            type: "error",
                            confirmButtonText: "Ok",
                            confirmButtonClass: "yescancel-btn",
                        })
                    }
                });
            });
        });
    }

    /**
     * Function to initialize date picker
     * 
     * @return result
     */
    function initDatePicker() {
        $(".date-picker").each(function () {
            var todayDate = new Date();
            $(this).datepicker({
                format: "yyyy-mm-dd",
                endDate: todayDate,
                autoclose: true,
                forceParse: false,
                defaultDate: true,
                todayHighlight: true,
                allowInputToggle: true,
            });
        });
    }
}
();
