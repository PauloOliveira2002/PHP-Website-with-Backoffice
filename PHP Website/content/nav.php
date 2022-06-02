<!-- NAV -->
<?php 

if($_SERVER['REQUEST_METHOD']=='GET'){
  if (!isset($_GET['p'])){
    header("Location: index.php?p=inicio");}
    else{
    $pagina=$_GET['p'];

     ?>

<nav class="navbar navbar-expand navbar-dark shadow-sm">
  <div class="container-fluid">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php if($pagina == 'inicio')echo'active' ?>" aria-current="page" href="index.php?p=inicio">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?php if($pagina == 'about-us' || $pagina == 'mvv' )echo'active' ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Company
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item <?php if($pagina == 'about-us')echo'active' ?>" href="index.php?p=about-us">About us</a></li>
            <li><a class="dropdown-item <?php if($pagina == 'mvv' )echo'active' ?>" href="index.php?p=mvv">Mission/Vision/Values</a></li>

          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?php if($pagina == 'wordpress' || $pagina == 'html-css' || $pagina == 'code')echo'active' ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Works
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item <?php if($pagina == 'wordpress')echo'active' ?>" href="index.php?p=wordpress">Wordpress</a></li>
            <li><a class="dropdown-item <?php if($pagina == 'html-css')echo'active' ?>" href="index.php?p=html-css">HTML/CSS</a></li>
            <li><a class="dropdown-item <?php if($pagina == 'code')echo'active' ?>" href="index.php?p=code">Code</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($pagina == 'contacts')echo'active' ?>" href="index.php?p=contacts">Contacts</a>
        </li>
        <?php

        if (isset($_SESSION['username'])) {      //não autenticado

          if ($_SESSION['username'] == "admin") {
        ?><li class="nav-item"><a class="nav-link <?php if($pagina == 'administracao')echo'active' ?>" href="index.php?p=administracao">Administração</a></li>
            <li class="nav-item"><a class="nav-link" href="db/logout.php">Logout</a></li><?php
          }
        }
        ?>
        
      </ul>
      <a class="m-1" href="index.php?p=inicio"><img src="img/logo/wb3mono.png" alt="wb3"></a>
    
  </div>
  </div>
</nav>
      <?php }
}?>
<!-- END NAV -->