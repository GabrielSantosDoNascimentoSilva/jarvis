<?php 
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $acao = 'recuperar';
    }
    require('tarefa_controller.php');
    $id = isset($_GET['id']) ? $_GET['id'] : $id;
    
    
    //RECEBO ID TAREFA
    $id = $_REQUEST['id'];
    
    //DEFINO AÇÃO
    /*if($id > 0) {
        $acao = "alterar";
    } else {
        $acao = "inserir";
    }*/
    //require('tarefa_controller.php');
    
    // Receba os campos
    
    // Acao inserir
    
    if($acao == "inserir") {
        
    }
    
    // / atualizar
    if($acao == "atualizar") {
    }
    
    // selecionar tarefa/dados
    
    if($idtarefa > 0) {
        
    }
    
    // / Delete
    if($acao == "excluir") {
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Atividades</title>

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
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
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

    <?php require_once('global/navbar.php'); ?>
    <?php require_once('global/main-sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Inserir Tarefa</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <? $acao == 'recuperar' ? $acao = 'alterar' : $acao =  'inserir' ?>
      <form method="post" action="tarefa_controller.php?acao=<? echo $acao ?>">
        <div class="card-body">
          <div class="form-group">
        <div class="row">
          <div class="col-md-6">
              <div class="form-group">
                <label for="titulo">Título</label>
                <input name="titulo" type="text" id="titulo" class="form-control" placeholder="Título" value="<?php echo $tarefas[$id]->titulo; ?>">
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                <label for="dataSolicitado">Data da Solicitação</label>
                <input name="dataSolicitado" type="datetime-local" id="dataSolicitado" class="form-control" value="<?php if ($acao == 'alterar') echo date("Y-m-d\TH:i:s", strtotime($tarefas[$id]->dataSolicitado)) ?>">
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                <label for="dataPrazo">Prazo</label>
                <input name="dataPrazo" type="datetime-local" id="dataPrazo" class="form-control" placeholder="Prazo" value="<?php if ($acao == 'alterar') echo date("Y-m-d\TH:i:s", strtotime($tarefas[$id]->dataPrazo)) ?>">
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                <label for="cliente">Cliente</label>
                <input name="cliente" type="text" id="cliente" class="form-control" placeholder="Cliente" value="<?php echo $tarefas[$id]->cliente; ?>">
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                <label for="prioridade">Prioridade</label>
                <input name="prioridade" type="text" id="prioridade" class="form-control" placeholder="Prioridade" value="<?php echo $tarefas[$id]->prioridade; ?>">
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                <label for="solicitante">Solicitante</label>
                <input name="solicitante" type="text" id="solicitante" class="form-control" placeholder="Solicitante" value="<?php echo $tarefas[$id]->solicitante; ?>">
              </div>
          </div>
          <div class="col-md-12">
              <div class="form-group">
                <label for="demanda">Demanda</label>
                <textarea name="demanda" type="text" id="demanda" class="form-control" placeholder="Demanda"><?php echo $tarefas[$id]->demanda; ?></textarea>
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                <label for="dataEntrega">Data da Entrega</label>
                <input name="dataEntrega" type="datetime-local" id="dataEntrega" class="form-control" value="<?php echo $acao == "alterar" ? date('Y-m-d\TH:i:s', strtotime($tarefas[$id]->dataEntrega)) : ''; ?>">
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                <label for="status">Status</label>
                <input name="status" type="text" id="status" class="form-control" placeholder="Status" value="<?php echo $tarefas[$id]->status; ?>">
              </div>
          </div>
          <div class="col-md-12">
              <div class="form-group">
                <label for="feedback">FeedBack</label>
                <textarea name="feedback" id="feedback" class="form-control" placeholder="FeedBack"><?php echo $tarefas[$id]->feedback; ?></textarea>
              </div>
          </div>
        </div>
        <div class="card-footer">
          <input name="id" type="hidden" value="<?php echo $id; ?>">
          <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
      </form>
  </div>
  
  <!-- /.content-wrapper -->
    <?php require_once('global/rodape.php'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
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
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
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
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
