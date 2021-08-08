<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Panel | Decoral</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>




<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar --> <?php include 'includes/nav.php' ?> <!-- /.navbar -->
  <!-- Sidebar --> <?php include 'includes/sidebar.php' ?> <!-- /.Sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Sidebar --> <?php include 'includes/breadcrumbs.php' ?> <!-- /.Sidebar --> 
    
    
    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
      <!-- Main row -->
      <div class="row">


        <!-- general form elements -->
        <div class="col-md-12 card card-info">
          <div class="card-header">
            <h3 class="card-title">Registro de Anticipos</h3>
          </div>
            <!-- /.card-header -->
            <!-- form start -->
          <form>
                <div class="card-body ">

                  <div class="row">
                    <div class="form-group col-md-4">
                      <label for="nombreTrabajador">Trabajador</label>
                      <select name="nombreTrabajador" id="nombreTrabajador" class="form-control">
                        <option selected="selected" value="1">Default</option>
                        <option value="1">Alisson Bedon</option>
                        <option value="1">Jose Cuaspud</option>
                        <option value="1">Jhonny Guamangallo</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleInputEmail1">Fecha Anticipo</label>                      
                        <input type="date" class="form-control" id="fechaAnticipo" placeholder="Fecha">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="anticipoRecibir">Anticipo a Recibir</label>
                      <input type="number" class="form-control" id="anticipoRecibir" placeholder="140.20">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="anticipoRecibir">Anticipo a Recibir</label>
                      <input type="number" class="form-control" id="anticipoRecibir" placeholder="140.20">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="nombreTrabajador">Quincena</label>
                      <select name="nombreTrabajador" id="nombreTrabajador" class="form-control">
                        <option selected="selected" value="1">Default</option>
                        <option value="1">Alisson Bedon</option>
                        <option value="1">Jose Cuaspud</option>
                        <option value="1">Jhonny Guamangallo</option>
                      </select>
                    </div>                    
                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <center><button type="submit" class="btn btn-primary">Submit</button></center>
                </div>
            </form>
          </div> <!-- /.card -->


        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  <!-- /.content-wrapper -->
  <!-- Footer --> <?php include 'includes/footer.php' ?> <!-- /.Footer --> 
</div>
<!-- ./wrapper -->





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
<script src="plugins/sparklines/sparkline.js"></script>

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
<script src="dist/js/demo.js"></script>


</body>
</html>
