
<!-- FORMULARIO HORIZONTAL DE BOOTSTRAP -->

<div class="container w-75 h-auto mt-4 mb-4 bg-white p-4 rounded shadow" >
    <form class="login">

     <span class="fs-3  ">REGISTRARSE</span>

     <!-- NOMBRE Y APELLIDO -->
     <div class="row mb-3 mt-4">
  <div class="col">
  
    <input type="text" class="form-control" placeholder="Nombre" aria-label="First name">
  </div>


  <div class="col">
    <input type="text" class="form-control" placeholder="Apellido" aria-label="Last name">
  </div>
</div>

<!-- EMAIL Y PASSWORD -->
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3">
    </div>
  </div>

  <!-- CHECK FORM -->

 
  <div class="row mb-3">
    <div class="col-sm-10 offset-sm-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Quiero recibir ofertas y combos exclusivos por email
        </label>
      </div>
    </div>
  </div>

  <!-- BOTONES -->

  <button type="submit" class="btn btn-primary">Registrarse</button>
  <button type="submit" class="btn btn-danger">Cancelar</button>
</form>

</div>