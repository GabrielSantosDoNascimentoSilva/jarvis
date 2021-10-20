<?php 
    $acao = 'recuperar';
    require('tarefa_controller.php');
   
   /* 
    echo '<pre>';
    print_r($tarefas);
    echo '</pre>';
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Todas as Tarefas</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  
  <script type="text/javascript">
      function editar(id, txt_tarefa) {
        //criar um form de edição
        let form = document.createElement('form')
        form.action = '#'
        form.method = 'post'
        form.className = 'row'
        
        //criar um imput para entrada do texto
        let inputTarefa = document.createElement('input')
        inputTarefa.type = 'text'
        inputTarefa.name = 'tarefa'
        inputTarefa.className =  'col-9 form-control'
        inputTarefa.value = txt_tarefa
        
        //criar um input hidden para guardar o id da tarefa
        let inputId = document.createElement('input')
        inputId.type = 'hidden'
        inputId.name = 'id'
        inputId.value = id
        
        
        //criar um button parar envio do form
        let button = document.createElement('button')
        button.type =  'submit'
        button.className =  'col-3 btn btn-info'
        button.innerHTML =  'Atualizar'
        
        // incluir inputTarefa no form
        form.appendChild(inputTarefa)
        
        //incluir inputId no form
        form.appendChild(inputId)
        
        
        // incluir button no form
        form.appendChild(button)
        
        //teste
        // console.log(form)
        
        // selecionar a div tarefa
        let tarefa = document.getElementById('tarefa_'+id)
        
        //limpar o texto da tarefa para a inclusão do form
        tarefa.innerHTML = ''
    
        //incluir form na página
        tarefa.insertBefore(form, tarefa[0])
      }
  </script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    
    <?php require_once('global/navbar.php'); ?>
    <?php require_once('global/main-sidebar.php'); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Todas as Tarefas</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Id</th>
                    <th style="width:300px;">Título</th>
                    <th>Data da Solicitação</th>
                    <th>Prazo</th>
                    <th>Cliente</th>
                    <th>Prioridade</th>
                    <th>Solicitante</th>
                    <th>Demanda</th>
                    <th>Data da Entrega</th>
                    <th>Status</th>
                    <th>FeedBack</th>
                  </tr>
                  </thead>
                  <tbody>
                    <? foreach ($tarefas as $indice => $tarefa) { ?>
                      <tr>
                        <!--<td><i class="nav-icon fas fa-edit" onclick="editar(<?= $tarefa->id ?>, '<?= $tarefa->titulo ?>')" ></i></td>-->
                        <td><a href="inserirTarefa.php?id=<?= $tarefa->id ?>"><i class="nav-icon fas fa-edit"></i></a></td>
                        <td><?= $tarefa->id ?></td>
                        <td><?= $tarefa->titulo ?></td>
                        <td><?= $tarefa->dataSolicitado ?></td>
                        <td><?= $tarefa->dataPrazo ?></td>
                        <td><?= $tarefa->cliente ?></td>
                        <td><?= $tarefa->prioridade ?></td>
                        <td><?= $tarefa->solicitante ?></td>
                        <td><?= $tarefa->demanda ?></td>
                        <td><?= $tarefa->dataEntrega ?></td>
                        <td><?= $tarefa->status ?></td>
                        <td><?= $tarefa->feedback ?></td>
                      </tr>
                    <? } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<!-- <script src="plugins/datatables/jquery.dataTables.min.js"></script>-->
<!-- <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>-->
<!-- <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>-->
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>-->
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
