<?php
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if (isset($_GET['p'])){
            $pagina=$_GET['p'];

        if ($pagina =='inicio')
            include('content/pages/inicio.php');
        else if($pagina =='about-us')
            include ('content/pages/about-us.php');
        else if($pagina =='code')
            include ('content/pages/code.php');
        else if($pagina =='contacts')
            include ('content/pages/contacts.php');
        else if($pagina =='html-css')
            include ('content/pages/html-css.php');
        else if($pagina =='mvv')
            include ('content/pages/mvv.php');
        else if($pagina =='team')
            include ('content/pages/team.php');
        else if($pagina =='wordpress')
            include ('content/pages/wordpress.php');
        else if($pagina =='admin')
            include ('content/pages/admin.php');
        else if(isset($_SESSION['username']) && ($_SESSION['username']=="admin") && ($pagina=='administracao'))
        
            include ('content/pages/administracao.php');
            

        }else{
            include('content/pages/inicio.php');
        }
    }

?>