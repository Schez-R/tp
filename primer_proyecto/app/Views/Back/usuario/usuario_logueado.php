<div class="container mt-5">
  <div class="row justify-content-md-center">
    <div class="col-5">
		  <?php if (session()->getFlashdata('msg')):?>
		   <div class="alert alert-warning">
		  	<?= session()->getFlashdata('msg')?>
		   </div>
		  <?php endif;?>
		  <br><br>
		  <?php if (session()->perfil_id == 1):?>
		<div>
	    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center ">
          <div class="col-12 col-md-6 text-center">
            <img class="img-fluid rounded-circle" src="<?php echo base_url('assets/img/admin.png'); ?>" alt="Admin">
          </div>
        </div>
      </div>
	  </div>
      <?php elseif(session()->perfil_id == 2):?>
    <div>
	    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
          <div class="col-12 col-md-6 text-center">
            <img class="img-fluid rounded-circle" src="<?php echo base_url('assets/img/cliente.png'); ?>" alt="cliente">
          </div>
        </div>
      </div>
   </div>
   <?php endif;?>
 </div>
</div>
</div>

<!--Este código HTML y PHP se utiliza para mostrar mensajes de alerta y contenido específico de acuerdo al perfil del usuario que ha iniciado sesión en la aplicación web-->