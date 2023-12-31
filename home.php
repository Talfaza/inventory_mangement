<?php
include('database/connect_database.php');

// Create a new Connection instance
$connection = new Connection();

// Check if the form is submitted
if (isset($_POST['submit'])) {

    $user    =  $_POST['user'];
    $email   =  $_POST['email'];
    $message = $_POST['message'];

    // Use prepared statements to prevent SQL injection
    $stmt = $connection->getConnection()->prepare("INSERT INTO INVENTORY.CONTACT (user, email, msg) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $user, $email, $message);
    $stmt->execute();
    $stmt->close();

}

// Close the database connection
$connection->getConnection()->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="js/clearField.js"></script>
    <title>Inventory Management</title>
</head>
<body>

<nav class="navbar is-light is-fixed-top" role="navigation" aria-label="main navigation">
    <div id="navbarBasicExample" class="navbar-menu">
        <a class="navbar-item" href="#home">
            Home
        </a>
        <a class="navbar-item" href="#services">
            Services
        </a>
        <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
                More
            </a>
            <div class="navbar-dropdown">
                <a class="navbar-item" href="#about">
                    About
                </a>
                <a class="navbar-item" href="#contact">
                    Contact
                </a>
            </div>
        </div>
    </div>
    <div class="navbar-end">
        <div class="navbar-item">
            <div class="buttons">
                <a class="button is-link" href="signup.php">
                    <strong><i class="fa-solid fa-right-to-bracket"></i> Sign up</strong>
                </a>
                <a class="button is-link" href="login.php">
                    <strong><i class="fa-solid fa-user"></i> Login</strong>
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- First Section -->
<section class="hero is-medium is-link" id="home">
    <div class="hero-body">
        <p class="title is-1 has-text-centered">
            Inventory Management 
        </p><br>
        <p class="subtitle has-text-centered">
            Modern And Easy Solution
        </p>
    </div>
</section><br><br>

<!-- Services section -->
<section class="hero" id="services">
    <div class="hero-body">
        <form action="" method="POST">
            <div class="columns is-6">
                <div class="column is-4">
                    <div class="has-text-centered">
                        <i class="fa-solid fa-gear fa-spin fa-2xl"></i><br><br>
                        <h1 class="title is-4">Easy To Use</h1>
                        <h2 class="subtitle is-6">Lorem ipsum dolor sitLorem ipsum dolor sit <br>Lorem ipsum dolor sit <br>Lorem ipsum dolor sit <br></h2>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="has-text-centered">
                        <i class="fa-solid fa-clock fa-spin fa-2xl"></i></i></i><br><br>
                        <h1 class="title is-4">Time Saver</h1>
                        <h2 class="subtitle is-6">Lorem ipsum dolor sitLorem ipsum dolor sit <br>Lorem ipsum dolor sit <br>Lorem ipsum dolor sit <br></h2>
                    </div>
                </div>
                <div class="column is-4" >
                    <div class="has-text-centered">
                        <i class="fa-solid fa-eye fa-bounce fa-2xl"></i><br><br>
                        <h1 class="title is-4">Inventory Visibility</h1>
                        <h2 class="subtitle is-6">Lorem ipsum dolor sitLorem ipsum dolor sit <br>Lorem ipsum dolor sit <br>Lorem ipsum dolor sit <br></h2>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section><br>

<!-- About -->
<section class="hero is-small is-light" id="about">
    <h1 class="has-text-centered title is-3"><br>About Us :</h1> 
    <h1 class="has-text-centered subtitle is-5"><br><br> Lorem  Lorem ipsum dolor, siloret Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores, doloribus nisi, nulla odit facilis qui assumenda suscipit vel asperiores et repellendus! Porro ad corporis obcaecati exercitationem recusandae voluptas nulla sapiente. amet consectetur adipisicing elit. Enim ea aperiam accusantium deleniti ullam quis laudantium culpa eaque. Minus facere consectetur nisi veritatis a eligendi rerum excepturi exercitationem maiores culpa?</h1>
    <div class="hero-body"></div>
</section>

<!-- Contact -->
<form action="" method="POST" id="contactForm">
    <section class="section">
    <h1 class="has-text-centered title is-3"><br>Contact Us :</h1> 

        <div class="container">
            <div class="columns is-centered">
                <div class="column is-6">
                    <div class="field">

                        <label class="label">Username</label>
                        <div class="control">
                            <input class="input is-link" type="text" placeholder="Username" id="username" name="user" required>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control">
                            <input class="input is-link" type="email" placeholder="Email input" id="email" name="email" required>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Message</label>
                        <div class="control">
                            <textarea class="textarea is-link" placeholder="Textarea" id="message" name="message" required></textarea>
                        </div>
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <input class="button is-link" type="submit" name="submit" value="Submit">
                            <button class="button is-link is-light" type="button" onclick="clearField();">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>

<!-- Footer -->
<footer class="footer">
    <div class="content has-text-centered">
        <p>
            <strong>Inventory Management</strong> by <a>Your Name</a> & <a>YName</a>
        </p>
    </div>
</footer>

</body>
</html>
