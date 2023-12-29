<!-- product_management.php -->
<?php
include_once "../database/connect_database.php";
include_once "../classes/Product.php";
include_once "../classes/User.php";
session_start();
$conn = (new Connection())->getConnection();

if (isset($_SESSION["user"])) {
    $user_info = $_SESSION["user"];
    $user = new User($user_info->getId(), $user_info->getUsername(), $user_info->getEmail(), $user_info->getPassword());
} else {
    echo "User information not available.";
    exit;
}






?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <title>Inventory Management</title>
</head>
<body>
  <div id="app">
    
<nav class="nav has-shadow">
  <div class="container">
    <div class="nav-left">
      <a class="nav-item" href="../home.php">
        Inventory Management
      </a>
      <a class="nav-item is-tab is-pulled-right" href="../login.php">
        Sign Out 
        <span class="icon"><i class="fa fa-sign-out"></i></span>
      </a>
    </div>
    <label for="menu-toggle" class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
    </label>
    <input type="checkbox" id="menu-toggle" class="is-hidden"/>
    <div class="nav-right nav-menu">
      <a class="nav-item is-tab is-hidden-tablet">
        <span class="icon"><i class="fa fa-home"></i></span> <!--Home-->
      </a>
      <a class="nav-item is-tab is-hidden-tablet">
        <span class="icon"><i class="fa fa-table"></i></span> <!--Manage-->
      </a>
      <a class="nav-item is-tab is-hidden-tablet">
        <span class="icon"><i class="fa fa-info"></i></span> <!--About-->
      </a>
    
    </div>
  </div>
</nav>

<section class="main-content columns is-fullheight">
  
  <aside class="column is-2 is-narrow-mobile is-fullheight section is-hidden-mobile">
    <p class="menu-label is-hidden-touch">Menu</p>
    <ul class="menu-list">
      <li>
        <a href="user_management_home.php" class="">
          <span class="icon"><i class="fa fa-home"></i></span> Home
        </a>
      </li>
      <li>
        <a href="#" class="is-active">
          <span class="icon"><i class="fa fa-table"></i></span> Manage
        </a>
      </li>
      <li>
        <a href="user_management_about.php" class="">
          <span class="icon"><i class="fa fa-info"></i></span> About
        </a>
      </li>
    </ul>
  </aside>

  <div class="container column is-10">
    <div class="section">

      <div class="card">
        <div class="card-header"><p class="has-text-centered card-header-title">Header</p></div>
        <div class="card-content"><div class="content"><?php echo "Welcom " . $user->getUsername() . "!";?></div></div>
      </div>
      <br />
      
    
      
    
    <div></div>

  
</section>

</body>
</html>
