
<main class="main">
<?php

    $page=$_GET['page'];

    if ($page = $page) {
      $navigation = "main/".$page.".php";
      if (file_exists($navigation)) {
        include($navigation);
      } else {
        include "main/404.php";
      }
      include $navigation;
    }else {
      include "main/home.php";
    }
?>
  </main>
<!-- Hero Section -->
  
    <!-- /Hero Section -->

    <!-- i Services Section -->
    <!-- /Featured Services Section -->

    <!-- About Section -->
    <!-- /About Section -->

    <!-- Clients Section -->
    <!-- /Clients Section -->

    <!-- Features Section -->
    <!-- /Features Section -->


    <!-- Services Section -->
    <!-- /Services Section -->

    <!-- More Features Section -->
    <!-- /More Features Section -->

    <!-- Pricing Section -->
    <!-- /Pricing Section -->

    <!-- Faq Section -->
    <!-- /Faq Section -->

    <!-- Testimonials Section -->
    <!-- /Testimonials Section -->

    <!-- Contact Section -->
     
    <!-- /Contact Section -->