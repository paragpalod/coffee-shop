<?php
  $uri = $_SERVER['REQUEST_URI'];
?>
<!-- Navigation -->
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" style="position: fixed; z-index: 10;background: white; width: 100%">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
            <a class="navbar-brand" href="index.html">Coffe Shop</a>
        </div>

        <!-- dummy navbar header to occupy space of fixed element -->
        <div class="dummyNavbarHeader" style="height: 50px"></div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li id="home-nav" <?php if ($uri === '/coffee-shop/index.php'  || $uri === '/coffee-shop/') echo "style='background:white;font-weight:600'"?>>
                    <a <?php if ($uri === '/coffee-shop/index.php' || $uri === '/coffee-shop/') echo "style='color:#61230a'"?> href="index.php">Home</a>
                </li>
                <li id="about-nav" <?php if ($uri === '/coffee-shop/about.php') echo "style='background:white;font-weight:600'"?>>
                    <a <?php if ($uri === '/coffee-shop/about.php') echo "style='color:#61230a'"?> href="about.php">About</a>
                </li>
                <li id="menu-nav" <?php if ($uri === '/coffee-shop/menu.php') echo "style='background:white;font-weight:600'"?>>
                    <a <?php if ($uri === '/coffee-shop/menu.php') echo "style='color:#61230a'"?> href="menu.php">Menu</a>
                </li>
                <li id="blog-nav" <?php if ($uri === '/coffee-shop/blog.php') echo "style='background:white;font-weight:600'"?>>
                    <a <?php if ($uri === '/coffee-shop/blog.php') echo "style='color:#61230a'"?> href="blog.php">Blog</a>
                </li>
                <li id="contact-nav" <?php if ($uri === '/coffee-shop/contact.php') echo "style='background:white;font-weight:600'"?>>
                    <a <?php if ($uri === '/coffee-shop/contact.php') echo "style='color:#61230a'"?> href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- dummy navbar to occupy place of navbar -->
<div class="navbarDummy"></div>
