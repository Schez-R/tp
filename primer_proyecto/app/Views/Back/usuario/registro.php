<div class="container mt-5 mb-5">
<div class="card-header text-justify">
   <div class="row d-flex justify-content-center">
     <div class="card col-lg-3" style="width: 50%;">
       <h4>Registrarse</h4>

<?php $Validation = \Config\Services::validation();?>
  <form method="post" action="<?php echo base_url('/enviar-form')?>">
    <?=csrf_field();?>
    <?php if (!empty (session()->getFlashdata('fail'))):?>
    <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
    <?php endif ?>
      <?php if (!empty (session()->getFlashdata('success'))):?>
    <div class="alert alert-danger"><?=session()->getFlashdata('success');?></div>
    <?php endif ?>
<div class="card-body justify-content-center" media="(max-width:768px)">
    <div class="form">
    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
    <input name="nombre" type="text" class="form-control" placeholder="nombre">
    <!--Error-->
      <?php if ($Validation->getError('nombre')) : ?>
        <div class='alert alert-danger mt-2'>
         <?= $Validation->getError('nombre');?>
        </div>
      <?php endif ?>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextareal" class="form-label">Apellido</label>
      <input type="text" name="apellido" class="form-control" placeholder="apellido">
      <!--Error-->
      <?php if ($Validation->getError('apellido')) : ?>
       <div class='alert alert-danger mt-2'>
        <?= $Validation->getError('apellido');?>
       </div>
      <?php endif ?>
   </div>
    <div class="mb-3">
   <label for="exampleFormControlInput1" class="form-label">Email</label>
    <input type="femail" name="email" class="form-control" placeholder="correo@algo.com">
    <!--Error-->
    <?php if ($Validation->getError('email')) : ?>
      <div class='alert alert-danger mt-2'>
       <?= $Validation->getError('email');?>
      </div>
    <?php endif ?>
   </div>
  <div class="mb-3">
   <label for="exampleFormControlInput1" class="form-label">Usuario</label>
    <input type="text" name="usuario" class="form-control" placeholder="usuario">
    <!--Error-->
    <?php if ($Validation->getError('usuario')) : ?>
      <div class='alert alert-danger mt-2'>
       <?= $Validation->getError('usuario');?>
      </div>
    <?php endif ?>
  </div>
   <div class="mb-3">
   <label for="exampleFormControlInput1" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" placeholder="password">
    <!--Error-->
    <?php if ($Validation->getError('pass')) : ?>
      <div class='alert alert-danger mt-2'>
      <?= $Validation->getError('pass');?>
      </div>
      <?php endif ?>
   </div>
             <input type="submit" value="guardar" class="btn btn-success">
             <input type="reset" value="Cancelar" class="btn btn-danger">
 </div>
   </form>

</div>
</div>
</div>
</div>
<!--Formulario de registrarse fin-->