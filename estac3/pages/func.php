<?php
  	$nivel_necessario = 2;
    include "base/testa_nivel.php";
    // include "../base/con.php";
    include "../base/con.php"; 

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/main.css" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
  
  <!-- INÍCIO SIDEBAR -->
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <?php include "menu_rest2.php"; ?>
  </aside>
  <!-- FIM NAVBAR -->
  
  <!-- INÍCIO NAVBAR -->
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Funcionários</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Funcionários</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <ul class="ms-md-auto pe-md-3 d-flex align-items-center">
            <li class="nav-item d-flex align-items-center">
              <a class="dropdown-item" href="index.php" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- FIM NAVBAR -->

    <!-- INICIO CONTENT -->
    <div class="container-fluid py-4">
      <div id="top" class="row">
				<div class="col-md-11">
					<h2>Funcionários</h2>
				</div>

				<div class="col-md-1">
					<!-- Chama o Formulário para adicionar funcionário -->
					<a href="fadd-func.php" class="btn btn-primary pull-right h2">Novo Funcionário</a>
				</div>
			</div>
			<div> <?php include "mensagens.php"; ?> </div>
			<!--top - Lista dos Campos-->
			<hr />
			<div id="bloco-list-pag">	
					<div id="list" class="row">
						<div class="table-responsive col-xs-12">
			<?php
            echo "ou";
			// $quantidade = 5;

			// $pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
			// $inicio = ($quantidade * $pagina) - $quantidade;

			// $data_all = mysqli_query($con, "select * from funcionarios order by id_func asc limit $inicio, $quantidade;") or die(mysqli_error($con));

			$data_all = mysqli_query($con, "select * from usuarios order by id;") or die(mysqli_error($con));

            $info = mysqli_fetch_array($data_all);
           echo $info["id"];
        
			echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
			echo "<thead><tr>";
			echo "<td><strong>ID</strong></td>"; 
			echo "<td><strong>Nome do funcionário</strong></td>"; 
			echo "<td><strong>E-mail</strong></td>";
			echo "<td><strong>Nível</strong></td>";
			echo "<td><strong>Status</strong></td>";
			echo "<td class='actions'><strong>Ações</strong></td>"; 
			echo "</tr></thead><tbody>";

			// while($info = mysqli_fetch_array($data_all)){ 
			// 	echo "<tr>";
			// 	echo "<td>".$info['id']."</td>";
			// 	echo "<td>".$info['nome']."</td>";
			// 	echo "<td>".$info['email']."</td>";
			// 	echo "<td>".$info['nivel']."</td>";
			// 	if($info["nivel"] == 1){
			// 		echo "<td>Funcionário Usuário</td>";
			// 	}else if($info["nivel"] == 2){
			// 		echo "<td>Administrador</td>";
			// 	}else if($info["nivel"] == 3){
			// 		echo "<td>Funcionário não-usuário</td>";
			// 	}
			// 	if($info['ativo'] == 1){
			// 		echo "<td>Ativo</td>";
			// 	}else if($info['ativo'] == 0){
			// 		echo "<td>Inativo</td>";
			// 	}
			// 	echo "<td><div class='btn-group btn-group-xs'>";
			// 	echo "<a class='btn btn-info btn-xs' href=?page=view_usu&id=".$info['id_func']."> Detalhar </a>";
			// 	echo "<a class='btn btn-warning btn-xs' href=?page=fedita_usu&id=".$info['id_func']."> Editar </a>";
			// 	if($info['ativo'] == 1){
			// 		echo "<a class='btn btn-danger btn-xs'  href=?page=block_usu&id=".$info['id_func']."> Bloquear </a>";
			// 	}else if($info['ativo'] == 0){
			// 		echo "<a class='btn btn-success btn-xs'  href=?page=ativa_usu&id=".$info['id_func'].">&nbsp;&nbsp;&nbsp;Ativar&nbsp;&nbsp;</a></div></td>";
			// 	}
			// }
			// echo "</tr></tbody></table>";
			?>
		</div><!-- Div Table -->
      
      <!-- INÍCIO FOOTER -->
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- FIM FOOTER -->

    </div>
  </main>
    <!-- FIM CONTENT -->

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>
</body>

</html>