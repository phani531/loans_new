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
        initAdminCompProfileDataTable();
    }

    function ajaxInit() {

    }

    function initAdminCompProfileDataTable() {
        var ajaxUrl = SITEURL + "administration_comp_profile/getBranchList";
        $("#admin_comp_profile").DataTable({
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
    }
}();
