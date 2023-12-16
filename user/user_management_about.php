<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
      <link rel="stylesheet" href="style/style.css">
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
    <div class="nav-right nav-menu" >
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
  
  <aside class="column is-2 is-narrow-mobile is-fullheight section is-hidden-mobile" >
    <p class="menu-label is-hidden-touch">Menu</p>
    <ul class="menu-list">
      <li>
        <a href="user_management_home.php" class="">
          <span class="icon"><i class="fa fa-home"></i></span> Home
        </a>
      </li>
      <li>
        <a href="user_management_manage.php" class="">
          <span class="icon"><i class="fa fa-table"></i></span> Manage
        </a>
      </li>
      <li>
        <a href="user_management_about.php" class="is-active">
          <span class="icon"><i class="fa fa-info"></i></span> About
        </a>
      </li>
    </ul>
  </aside>

  <div class="container column is-10">
    <div class="section">
      <p class=" has-text-centered subtitle is-2">About Us</p>
      
      <div class="columns is-centered" id="images">
            <div class="column is-one-half has-text-centered">
                  <img src="../img/img1.png" width="320" height="500">
                  <img src="../img/img2.png" width="300" height="500">
                  <img src="../img/img3.png" width="300" height="500">

            </div>
        </div><br>
        <p class=" has-text-centered subtitle is-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quia eos odio, voluptatibus voluptas nostrum magnam dolor possimus in aliquam velit perferendis cumque nihil dicta, minima natus voluptates vero. Expedita. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam debitis nemo soluta sapiente odio ducimus distinctio ut! Sapiente hic saepe dolor laudantium, consequuntur perferendis, quas a minima, laborum sint vitae?</p>
        <p class=" has-text-centered subtitle is-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quia eos odio, voluptatibus voluptas nostrum magnam dolor possimus in aliquam velit perferendis cumque nihil dicta, minima natus voluptates vero. Expedita. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam debitis nemo soluta sapiente odio ducimus distinctio ut! Sapiente hic saepe dolor laudantium, consequuntur perferendis, quas a minima, laborum sint vitae?</p>
        
          
    </div>
  </div>
  
</section>



</body>
</html>