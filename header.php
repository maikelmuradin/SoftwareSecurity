<?php 
  // Controleer of een sessie al actief is
  if (session_status() === PHP_SESSION_NONE) {
      ob_start(); // Start output buffering
      session_start(); // Start een nieuwe sessie als er nog geen actieve sessie is
  }


  //Inlogstring wordt dynamisch veranderd als een gebruiker is ingelogd.
  if (isIngelogd()) {
      $strInlog='<a class="nav-link" href="logout.php"><i class="bi bi-box-arrow-right" style="font-size: 30px;"></i>
           </a>';
  }else{
      $strInlog='<a class="nav-link" href="login.php"><i class="bi bi-box-arrow-in-right" style="font-size: 30px;"></i>
           </a>';
  }

  //Controleert de inloggegevens. Deze functie moet nog gemaakt worden!
  function isIngelogd(){
    return(0);
  }


 ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opdrachten</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- bootstrap CDS voor ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style type="text/css">
      body{
        min-height: 200vh;
      }
      footer{
        width: 100%;
        position: fixed;
        bottom:0px;
      }
      /* CSS om het submenu zichtbaar te maken */
          .dropdown-submenu {
            position: relative;
          }

          .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
          }

          /* Zorg ervoor dat het submenu zichtbaar wordt bij hover */
          .dropdown-submenu:hover .dropdown-menu {
            display: block;
          }
    </style>
  </head>
    
 <nav class="navbar navbar-expand-lg bg-light">
   <div class="container-fluid">
     <a class="navbar-brand" href="#">Talland</a>
     <button
       class="navbar-toggler"
       type="button"
       data-bs-toggle="collapse"
       data-bs-target="#navbarTogglerDemo02"
       aria-controls="navbarTogglerDemo02"
       aria-expanded="false"
       aria-label="Toggle navigation"
     >
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
       <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="home.php">Home</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">About</a>
         </li>
         <li class="nav-item dropdown">
           <a
             class="nav-link dropdown-toggle"
             href="#"
             role="button"
             data-bs-toggle="dropdown"
             aria-expanded="false"
           >
             Opdrachten
           </a>
           <ul class="dropdown-menu">
             <li><a class="dropdown-item" href="#">Link</a></li>
             <li class="dropdown-submenu">
               <a class="dropdown-item dropdown-toggle" href="#">Link</a>
               <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="#">Link</a></li>
                 <li><a class="dropdown-item" href="#">Link</a></li>
               </ul>
             </li>
             <li><hr class="dropdown-divider"></li>
             <!-- Geneste dropdown -->
                   <li class="dropdown-submenu">
                     <a class="dropdown-item dropdown-toggle" href="#">Link</a>
                     <ul class="dropdown-menu">
                       <li><a class="dropdown-item" href="#">Link</a></li>
                       <li><a class="dropdown-item" href="#">Link</a></li>
                     </ul>
                   </li>
                   <li class="dropdown-submenu">
                     <a class="dropdown-item dropdown-toggle" href="#">Link</a>
                     <ul class="dropdown-menu">
                       <li><a class="dropdown-item" href="#">Link</a></li>
                       <li><a class="dropdown-item" href="#">Link</a></li> 
                     </ul>
                   </li>
                   <li class="dropdown-submenu">
                     <a class="dropdown-item dropdown-toggle" href="#">Link</a>
                     <ul class="dropdown-menu">
                       <li><a class="dropdown-item" href="#">Link</a></li>
                       <li><a class="dropdown-item" href="#">Link</a></li >
                     </ul>
                   </li>
                   <li class="dropdown-submenu">
                     <a class="dropdown-item dropdown-toggle" href="#">Link</a>
                     <ul class="dropdown-menu">
                       <li><a class="dropdown-item" href="#">Link</a></li >
                     </ul>
                   </li>
           </ul>
         </li>
       </ul>
       <form class="d-flex" role="search">
         <input
           class="form-control me-2"
           type="search"
           placeholder="Search"
           aria-label="Search"
         />
         <button class="btn btn-outline-success" type="submit">Search</button>
       </form>
       <ul class="navbar-nav mb-2 mb-lg-0">
         <li class="nav-item">
           <!-- <a class="nav-link" href="login.php"><i class="bi bi-box-arrow-in-right" style="font-size: 30px;"></i>
           </a> -->
           <?php echo $strInlog; ?>
           
         </li>
       </ul>
     </div>
   </div>
 </nav>



    