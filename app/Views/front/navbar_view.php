<!-- INICIO NAVBAR -->

<nav class="navbar navbar-expand-lg mi-navbar-bg">
  <div class="container-fluid">
<!-- AGREGO MI CODIGO DE IMAGEN DE LOGO -->
    <a class="navbar-brand" href="#">
  <img src="assets/img/logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top" id="logoModalBtn">
 

  <!-- Modal -->
<div class="modal fade" id="logoModal" tabindex="-1" aria-labelledby="logoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logoModalLabel">¡Bien hecho!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        ¡Encontraste un código secreto! <br>
        Úsalo para tener un 10% de descuento en tu próximo pedido!
        <br>
                CODIGO: <strong>DESCUENTO10</strong>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

 </a>

<!-- FIN DEL MODAL -->

<!-- FIN IMAGEN DE LOGO -->
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <a class="navbar-brand" href="#">Más</a><span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active fs-4" href="<?= base_url('/') ?>">Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active fs-4" href="#">Quienes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active fs-4" href="#">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active fs-4" href="#">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active fs-4" href="<?= base_url('/login') ?>">Login</a>
        </li>
        
      </ul>
      <form class="d-flex pt-2" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- FIN NAVBAR -->