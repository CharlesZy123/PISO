<?php
function echoActiveClass($requestUri)
{
   $current_page = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

   if ($current_page == $requestUri) {
      echo 'active';
   }
}
?>

<nav class="navbar navbar-default navbar-trans navbar-expand-sm fixed-top">
   <div class="container mt-2 mb-1">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
         <span></span>
         <span></span>
         <span></span>
      </button>
      <a class="h3" href="index">PISO</a>

      <div class="navbar-collapse collapse" style="justify-content: right;" id="navbarDefault">
         <ul class="navbar-nav ml-auto">
            <li class="nav-item pl-2 <?php echoActiveClass('index') || echoActiveClass('piso'); ?>">
               <a class="nav-link" href="../piso">Home</a>
            </li>
            <li class="nav-item <?php echoActiveClass('about'); ?>">
               <a class="nav-link pl-2" href="about">About</a>
            </li>
            <li class="nav-item pl-2 <?php echoActiveClass('login'); ?>">
               <a class="nav-link" href="login">Login</a>
            </li>
            <li class="nav-item pl-2 <?php echoActiveClass('register'); ?>">
               <a class="nav-link" href="register">Register</a>
            </li>
         </ul>
      </div>
   </div>
</nav>