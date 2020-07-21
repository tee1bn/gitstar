  <!-- Bootstrap -->
    <link href="<?php echo $asset;?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo $asset;?>font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo $asset;?>nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo $asset;?>iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo $asset;?>datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $asset;?>datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $asset;?>datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $asset;?>datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $asset;?>datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo $asset;?>build/css/custom.min.css" rel="stylesheet">

































 <!-- jQuery -->
    <script src="<?php echo $asset;?>jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo $asset;?>bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo $asset;?>fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo $asset;?>nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="<?php echo $asset;?>iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="<?php echo $asset;?>datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo $asset;?>datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo $asset;?>datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo $asset;?>datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo $asset;?>datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo $asset;?>datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo $asset;?>datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo $asset;?>datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo $asset;?>datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo $asset;?>datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo $asset;?>datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo $asset;?>datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="<?php echo $asset;?>jszip/dist/jszip.min.js"></script>
    <script src="<?php echo $asset;?>pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo $asset;?>pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo $asset;?>build/js/custom.min.js"></script>


    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();
        $('#datatable_newsletter').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->
