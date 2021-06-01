<footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="{{route('index')}}">technoCentrik</a>.</strong>
    All rights reserved.
</footer>

<!-- jQuery -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<!-- <script> 
  if (!$.fn.modal) { 
      alert('CDN Bootstrap is not working'); 
      
      // Replace your_path with path where 
      // local bootstrap is stored 
  } else { 
      alert('CDN Bootstrap is loaded'); 
  } 
</script>  -->
<!-- <script
src="https://code.jquery.com/jquery-3.5.1.min.js"
integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
crossorigin="anonymous"></script> -->
<!-- jQuery UI 1.11.4 -->
<!-- <script src="plugins/jquery-ui/jquery-ui.min.js"></script> -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- <script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 --
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS --
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline --
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap --
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart --
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker --
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 --
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote --
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars --
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App --
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) --
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes --
<script src="dist/js/demo.js"></script> -->
<!-- <script type="text/javascript" src="{{asset('js/select2.min.js')}}"></script> -->
@yield('scripts')