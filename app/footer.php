 <footer class="main-footer">
     <strong>Copyright &copy; 2025 <a href="">Designed By.Opnis Degei</a>.</strong>
     All rights reserved.
     <div class="float-right d-none d-sm-inline-block">

     </div>
 </footer>
 <!-- jQuery -->
 <script src="plugins/jquery/jquery.min.js"></script>
 <!-- jQuery UI 1.11.4 -->
 <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 <script>
     $.widget.bridge('uibutton', $.ui.button)
 </script>
 <!-- Bootstrap 4 -->
 <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- ChartJS -->
 <script src="plugins/chart.js/Chart.min.js"></script>
 <!-- Sparkline -->
 <!--<script src="plugins/sparklines/sparkline.js"></script>-->
 <!-- JQVMap -->
 <!-- jQuery Knob Chart -->
 <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
 <!-- daterangepicker -->
 <script src="plugins/moment/moment.min.js"></script>
 <script src="plugins/daterangepicker/daterangepicker.js"></script>
 <!-- Tempusdominus Bootstrap 4 -->
 <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
 <!-- Summernote -->
 <script src="plugins/summernote/summernote-bs4.min.js"></script>
 <!-- overlayScrollbars -->
 <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
 <!-- AdminLTE App -->
 <script src="dist/js/adminlte.js"></script>
 <!-- AdminLTE for demo purposes -->
 <!--<script src="dist/js/demo.js"></script>
 <!-AdminLTE dashboard demo (This is only for demo purposes) -->
 <!--<script src="dist/js/pages/dashboard.js"></script>-->
 <!-- SweetAlert2 -->
 <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
 <!-- DataTablec & plugins   -->
 <script src="plugins/datatables/jquery.dataTables.min.js"></script>
 <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
 <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
 <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
 <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
 <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
 <script src="plugins/jszip/jszip.min.js"></script>
 <script src="plugins/pdfmake/pdfmake.min.js"></script>
 <script src="plugins/pdfmake/vfs_fonts.js"></script>
 <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
 <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
 <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
 <script>
     $(function() {

     });
     $('.view-data').click(function() {
         var nama = $(this).attr('data-nama');
         var nim = $(this).attr('data-nim');
         var semester = $(this).attr('data-semester');
         $.ajax({
             url: "view/view-data-mahasiswa.php",
             dataType: "html",
             method: "POST",
             data: {
                 nama: nama,
                 nim: nim,
                 semester: semester
             },
             success: function(data) {
                 $('#hasil-view-data').html(data);
             }
         });


         console.log(nim);
     });
     $('.view-pembayaran').click(function() {
         var nama = $(this).attr('data-nama');
         var nim = 123;
         // var semester = $(this).attr('data-semester');
         $.ajax({
             url: "view/view-data-pembayaran.php",
             dataType: "html",
             method: "POST",
             data: {

                 nim: nim,
                 nama: nama

             },
             success: function(data) {
                 $('#hasil-view-pembayaran').html(data);
             }
         });


         console.log(nim);
     });
     $(document).ready(function() {
         setInterval(function() {
             $('#report-mhs').load("benner.php");
         }, 1000);
     });
 </script>