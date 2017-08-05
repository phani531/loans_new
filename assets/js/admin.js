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
        initAdminEmployeeBrnachFormValidation();
        initAdminLoginForm();
        initAdminFundForm();
        initStepsWizard();
        initAgeCaluculator();
        initRelcopy();
        initSignup();
        initDeleteIndividualRow();
        initDatePicker();
    }

    function ajaxInit() {

    }

    /**
     * Function to caluculate the age
     * @returns {undefined}
     */
    function initAgeCaluculator() {
        $(".dob-class").on("change", function () {
            var dob = $(this).val();
            dob = new Date(dob);
            var today = new Date();
            var age = Math.floor((today - dob) / (365.25 * 24 * 60 * 60 * 1000));
            var age_id = $(this).attr("id");
            if (age_id == "DOB")
                $("#AGE").val(age);
            else if (age_id == "SPOUSE_DOB")
                $("#SPOUSE_AGE").val(age);
            else if (age_id == "GUARANTER_DOB")
                $("#GUARANTER_AGE").val(age);
        });
    }

    /**
     * Function to initialize rel copy
     * @returns {undefined}
     */
    function initRelcopy() {
        $(".addMore").click(function () {
            var l = $('#contactUl li').length;
            var li = parseInt(l) + parseInt(1);
            $("#contactUl").append('<li id="li_' + li + '"><a href="#contact_' + li + '" data-toggle="tab" aria-expanded="true">Contact ' + li + '<button type="button" onClick="closes(this.id);" class="pull-right btn-box-tool" id="' + li + '"><i class="fa fa-times"></i></button></a></li>');
            $(".contactContent").append('<div class="tab-pane" id="contact_' + li + '" style="margin:10px;"></div>');
            var a = $('#contact_' + l).html();
            var b = $('#contact_' + li).html(a);
        });

        $(".addMoreReference").click(function () {
            var l = $('#referenceUl li').length;
            var li = parseInt(l) + parseInt(1);
            $("#referenceUl").append('<li id="li_' + li + '"><a href="#reference_' + li + '" data-toggle="tab" aria-expanded="true">Reference ' + li + '<button type="button" onClick="closes(this.id);" class="pull-right btn-box-tool" id="' + li + '"><i class="fa fa-times"></i></button></a></li>');
            $(".referenceContent").append('<div class="tab-pane" id="reference_' + li + '" style="margin:10px;"></div>');
            var a = $('#reference_' + l).html();
            var b = $('#reference_' + li).html(a);
        });

        $(".addMoreDocs").click(function () {
            var li = parseInt(1) + parseInt(1);
            $(".reference").after('<div id="docs_' + li + '" class="col-md-12"></div>');
            var a = $('.reference').html();
            var b = $('#docs_' + li).html(a);
        });
    }

    /**
     * Function to intialize steps wizard
     * @returns {undefined}
     */
    function initStepsWizard() {
        var form = $("#customer_info_creation_form").show();

        form.steps({
            headerTag: "h1",
            bodyTag: "fieldset",
            transitionEffect: "slideLeft",
            onStepChanging: function (event, currentIndex, newIndex)
            {
                // Allways allow previous action even if the current form is not valid!
                if (currentIndex > newIndex)
                {
                    return true;
                }
                // Forbid next action on "Warning" step if the user is to young
                if (newIndex === 3 && Number($("#age-2").val()) < 18)
                {
                    return false;
                }
                // Needed in some cases if the user went back (clean up)
                if (currentIndex < newIndex)
                {
                    // To remove error styles
                    form.find(".body:eq(" + newIndex + ") label.error").remove();
                    form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
                }
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();
            },
            onStepChanged: function (event, currentIndex, priorIndex)
            {
                // Used to skip the "Warning" step if the user is old enough.
                if (currentIndex === 2 && Number($("#age-2").val()) >= 18)
                {
                    form.steps("next");
                }
                // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
                if (currentIndex === 2 && priorIndex === 3)
                {
                    form.steps("previous");
                }
            },
            onFinishing: function (event, currentIndex)
            {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function (event, currentIndex)
            {
//                $('.actions > ul > li:nth-child(3)').addClass("disabled");
//                $('.actions > ul > li:nth-child(3)').attr("style", 'display:none');
                var form = $(this);
                // Submit form input
                form.submit();
//                $(this).addClass("text-center");
//                $(this).html('<img src="' + SITEURL + 'assets/images/loading.gif" alt="Loading...">');
            }
        }).validate({
            errorPlacement: function errorPlacement(error, element) {
                element.after(error);
            },
            rules: {
                CUSTOMER_IDNO: {
                    numberfield: true
                },
                CUSTOMER_NAME: {
                    namefield: true
                },
                REFERENCE_NAME: {
                    namefield: true
                }
            }
        });
    }

    /**
     * Function to signup
     * @returns {undefined}
     */
    function initSignup() {
        $(".sign-out").on("click", function () {
            var message = "Are you sure to sign out?";
            var desc = "Come back soon";
            var logoutUrl = $(this).data("href");
            swal({
                title: message,
                text: desc,
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete",
                cancelButtonText: "No, cancel",
                confirmButtonClass: "confirm-btn",
                cancelButtonClass: "btn btn-default",
                closeOnConfirm: false,
                allowOutsideClick: false
            }, function () {
                location.href = logoutUrl;
            });
        });
    }

    /**
     * Function to validate admin fund form
     * @returns {undefined}
     */
    function initAdminFundForm() {
        $("#admin_fund_form").validate({
            rules: {
                Amount: {
                    numeric: true
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
     * Function to validate admin login form
     * @returns {undefined}
     */
    function initAdminLoginForm() {
        $("#admin_login_form").validate({
            rules: {
                LOGIN_USERNAME: {
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
     * Function to validate admin employee branch info
     * @returns {undefined}
     */
    function initAdminEmployeeBrnachFormValidation() {
        $("#admin_emp_branch_form").validate();
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
