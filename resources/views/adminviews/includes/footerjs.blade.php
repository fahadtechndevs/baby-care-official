<!-- jQuery 3 -->

<script src="{{asset('adminassets')}}/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap 3.3.7 -->

<script src="{{asset('adminassets')}}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- SlimScroll -->

<script src="{{asset('adminassets')}}/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<!-- FastClick -->

<script src="{{asset('adminassets')}}/bower_components/fastclick/lib/fastclick.js"></script>

<!-- AdminLTE App -->

<script src="{{asset('adminassets')}}/dist/js/adminlte.min.js"></script>

<!-- AdminLTE for demo purposes -->

<script src="{{asset('adminassets')}}/dist/js/demo.js"></script>

<script type="text/javascript" src="{{asset('adminassets')}}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="{{asset('adminassets')}}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>

  $(document).ready(function () {

    $('.sidebar-menu').tree()

  })

  $(function(){

    $("#example1").DataTable();

  });

</script>