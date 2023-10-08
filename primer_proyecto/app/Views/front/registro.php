<!--Formulario de registrarse-->
<div class="container mt-5 mb-5">
  <div class="card-header text-justify">
    <div class="row d-flex justify-content-center">
     <div class="card col-lg-3" style="width: 50%;" >
       <h2 class="card-header text-center">Registrarse</h2>

     <?php $validation = \Config\Services::validation(); ?>
      <form method="post" action="<?php echo base_url('/enviar-form') ?>">
	 <?=csrf_field(); ?>
      <?php if(!empty (session()->getFlashdata('fail'))): ?>
       <div class="alert alert-danger"><?=session()->getFlashdata('fail'); ?></div>
      <?php endif?>
       <?php if(!empty (session()->getFlashdata('success'))): ?>
        <div class="alert alert-danger"><?=session ()->getFlashdata('success');?></div>
       <?php endif?>
        <div class="card-body justify-content-center" media="(max-width: 768px)">
        <div class="form">
        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
        <input name="nombre" type="text" class="form-control" placeholder="nombre" > 
       <!-- Error -->
       <?php if($validation->getError('nombre')) { ?>
	    <div class='alert alert-danger mt-2'>
       <?= $error = $validation->getError('nombre') ?>
        </div>
       <?php }?>
        </div>
     <div class="mb-3">
     <label for="exampleFormControlTextareal" class="form-label">Apellido</label>
     <input type="text" name="apellido" class="form-control" placeholder="apellido" >
      <!--Error-->
      <?php if($validation->getError('apellido')) { ?>
	   <div class='alert alert-danger mt-2'>
      <?= $error = $validation->getError('apellido'); ?>
       </div>
      <?php } ?>
     </div>
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">email</label>
<input name="email" type="femail" class="form-control" placeholder="correo@algo.com">
<!-- Error -->
<?php if($validation->getError('email')) { ?>
<div class='alert alert-danger mt-2'>
	<?= $error = $validation->getError('email'); ?>
</div>
<?php } ?>
</div>
<div class="mb-3">
<label for="example FormControlInput1" class="form-label">Usuario</label>
<input tyupe="text" name="usuario" class="form-control" placeholder="usuario"> 
<!-- Error-->
<?php if($validation->getError('usuario')) {?>
	<div class='alert alert-danger mt-2'>
<?= $error = $validation->getError('usuario'); ?>
</div>
<?php }?>
</div>

<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Password</label>
<input name="pass" type="password" class="form-control" placeholder="password">
<!-- Error -->
<?php if($validation->getError('pass')) { ?>
<div class='alert alert-danger mt-2'>
<?= $error = $validation->getError('pass'); ?>
</div>
<?php } ?>
</div>
 <input type="submit" value="guardar" class="btn btn-success">
 <input type="reset" value="cancelar" class="btn btn-danger">
</div>
</form>
</div>
</div>
</div>
</div>
<!--Formulario de registrarse fin-->