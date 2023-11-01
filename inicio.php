<?php
include_once("principal.php");

    
?>

<?php
	if(isset($_SESSION['mensagem'])){
		echo $_SESSION['mensagem'];
		unset($_SESSION['mensagem']);
	}


	$resultado = @mysqli_query($conectar,"SELECT * FROM projecto_tcc");
	$projecto_tcc = mysqli_num_rows($resultado);
    $resultado1 = @mysqli_query($conectar,"SELECT * FROM monografias ORDER BY 'ID'");
    $monografias = @mysqli_num_rows($resultado1);
    $resultado1 = @mysqli_query($conectar,"SELECT * FROM tabela_usuarios ORDER BY 'ID'");
    $usuarios = mysqli_num_rows($resultado1);
    $resultado1 = @mysqli_query($conectar,"SELECT * FROM temas ORDER BY 'ID'");
    $temas = @mysqli_num_rows($resultado1);
	$resultado1 = @mysqli_query($conectar,"SELECT * FROM actividade ORDER BY 'ID'");
	$actividades = mysqli_num_rows($resultado1);
?>

<div class="container-fluid" >
    <div class="row-fluid">
	<div class="col col-lg-H col-md-H col-sm-H haggy">
            
			<div class=" col-md-12">
               	<div class="alert alert-info">
    				<h1 align="center">Seja Bem Vindo</h1>
					
    				
					 <center>
    				 <strong><?php echo "".$_SESSION['usuarioNome'];?></strong> <br>
    				 
    				 </center>
					 
 				</div>
            </div>
            <?php if($_SESSION['usuarioNivelAcesso']!='3') {?>
            <a href="proj_tcc.php?usuarioNivelAcesso=<?php echo $_SESSION['usuarioNivelAcesso']  ?>"><div class="col-md-4">
               	<div class="alert btn-primary">
    				<h2 align="center">CADASTROS</h2>
					
    				
					 <center>
    				 <strong><?php echo "".$projecto_tcc;?></strong> <br>
    				 
    				 </center>
					 
 				</div>
            </div></a>
            <?php } ?>
            <?php if($_SESSION['usuarioNivelAcesso']!='3')  {?>
            <a href="monografia.php?usuarioNivelAcesso=<?php echo $_SESSION['usuarioNivelAcesso']  ?>">
            <div class="col-md-4">
               	<div class="alert btn-info">
    				<h2 align="center">ASSOCIADOS</h2>
					
    				
					 <center>
    				 <strong><?php echo "".$monografias;?></strong> <br>
    				 
    				 </center>
					 
 				</div>
            </div>
            </a><?php } ?>
            <?php if($_SESSION['usuarioNivelAcesso']=='1' || $_SESSION['usuarioNivelAcesso']=='5'){ ?>
            <a href="listarUsuarios.php?usuarioNivelAcesso=<?php echo $_SESSION['usuarioNivelAcesso']  ?>">
            <div class="col-md-4">
                <div class="alert btn-success">
                    <h2 align="center">USUÁRIOS</h2>
                    
                    
                     <center>
                      <strong><?php echo "".$usuarios;?></strong> <br>
                     
                     </center>
                     
                </div>
            </div>
            </a>
            <?php } ?>
            <?php if($_SESSION['usuarioNivelAcesso']!='3')  {?>
            <a href="actividades.php?usuarioNivelAcesso=<?php echo $_SESSION['usuarioNivelAcesso']  ?>"><div class="col-md-4">
                <div class="alert btn-success">
                    <h2 align="center">ACTIVIDADES</h2>
                    
                    
                     <center>
                     <strong><?php echo "".$actividades;?></strong> <br>
                     
                     </center>
                     
                </div>
            </div></a><?php } ?>
            <?php if($_SESSION['usuarioNivelAcesso']!='3')  {?>
            <a href="temas.php?usuarioNivelAcesso=<?php echo $_SESSION['usuarioNivelAcesso']  ?>"><div class="col-md-4">
                <div class="alert btn-primary">
                    <h2 align="center">ACTIVIDADES REALIZADS</h2>
                    
                    
                     <center>
                     <strong><?php echo "".$temas;?></strong> <br>
                     
                     </center>
                     
                </div>
            </div></a><?php } ?>

    </div>
	</div>
</div>


<?php
	include_once("rodape.php");
?>


