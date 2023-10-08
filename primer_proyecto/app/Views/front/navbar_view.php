<!--Barra de navegacion inicio-->
<?php
  $session = session();
  $nombre = $session->get('nombre');
  $perfil = $session->get('perfil_id');
?>

<div class="navBar">

 <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
   <div class="navbar-header">
    <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">
     <!--Logo de la empresa-->
     <img src="<?php echo base_url('assets/img/New.png')?>" alt="marca" width="55" height="30" class="img-fluid"/>
   </a>
   </div>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
    
  <?php if (session()->perfil_id == 1):?>
    <div class="btn btn-info active btnUser btn-sm">
     <a href="" style="text-decoration: none;"> ADMIN: <?php echo session('nombre');?></a>
    </div>

  <a class="navbar-brand" href="#"></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><!--Botones de acceso directo-->
         <a class="nav-link" href='registro'>Registrarse</a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href='login'>Login</a>
        </li>

        <li class="nav-item">
         <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1"
          aria-disabled="true">Cerrar Seccion</a>          
        </li>
      </ul>
    </div>

    <?php elseif (session()->perfil_id == 2):?>
      <div class="btn btn-info active btn-User btn-sm">
       <a href="" style="text-decoration: none;"> CLIENTE: <?php echo session('nombre');?></a>
      </div>

      <!--navbar solo para aquellos Clientes que, si se loguearon a la pagina-->
      <a class="navbar-brand" href="#"></a>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         <li class="nav-item">
          <a class="nav-link" href='quienes_somos'>Quienes Somos</a>
         </li>
         <li class="nav-item">
          <a class="nav-link" href='acerca'>Acerca de</a>
         </li>

         <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1"
          aria-disabled="true">Cerrar Sesión</a>          
        </li>
        </ul>
       </div>
      <!--navbar solo para aquellos Clientes que si se loguearon a la pagina fin-->

    <?php else:?>
        
      <!--Lo que pueden ver los Clientes no logueados-->
      <a class="navbar-brand" href="#"></a>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         <li class="nav-item"><!--Botones de acceso directo-->
          <a class="nav-link" href='quienes_somos'>Quienes Somos</a>
         </li>
         <li class="nav-item">
          <a class="nav-link" href='acerca'>Acerca de</a>
         </li>
         <!--inicio de barra desplegable-->
         <li class="nav-item dropdown flex">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ventanas</a>
        <ul class="dropdown-menu">
          <li>
           <a class="dropdown-item" href='la_receta_del_dia'>Comidas y Recetas <i class="bi bi-egg"></i></a>
         </li>
          <li>
           <a class="dropdown-item" href='higiene'>Higiene en la cocina <i class="bi bi-droplet"></i></a>
          </li>
          <li>
           <a class="dropdown-item" href='tecnologias'>Tecnologias Renovables <i class="bi bi-recycle"></i></a>
         </li>
         <li><a class="dropdown-item" href="https://talentosdigitales.ar/" target="blank" rel="noopener noreferrer">Talentos Digitales <i class="bi bi-code-square"></i></a>
         </li>
         <li><a class="dropdown-item" href='dolar'>Dolar Hoy <i class="bi bi-currency-dollar"></i></a>
         </li>
         <li><a class="dropdown-item" href="https://www.smn.gob.ar/" target="blank" rel="noopener noreferrer">Clima <i class="bi bi-cloud-sun-fill"></i></a>
         </li>
        </ul>
         </li>
        <!--fin de la barra desplegable-->
        <li class="nav-item">
        <a class="nav-link" href='registro'>Registrarse</a>
        </li>
        <li class="nav-item"><a class="nav-link" href='login'>Login</a>
        </li>
      </ul>
      </div>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
      <!--Fin Lo que pueden ver los Clientes no logueados-->
    <?php endif;?>
   </div>
  </nav>
  
</div>
<!--Fin de barra de navegacion-->