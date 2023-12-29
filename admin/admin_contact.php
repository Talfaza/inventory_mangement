<?php
include '../database/connect_database.php';

session_start();

$conn = new Connection();

$query = "SELECT user, email, msg, id FROM INVENTORY.CONTACT";
$stmt = $conn->getConnection()->prepare($query);

$stmt->execute();
$stmt->bind_result($user, $email, $msg, $id);

$messages = [];

while ($stmt->fetch()) {
    $messages[] = [
        'id' => $id,
        'user' => $user,
        'email' => $email,
        'msg' => $msg
    ];
}

if (isset($_POST['submit'])) {
    $deleteId = $_POST['delete_id'];
    $queryDelete = "DELETE FROM INVENTORY.CONTACT WHERE id = ?";
    $stmtDelete = $conn->getConnection()->prepare($queryDelete);
    $stmtDelete->bind_param("i", $deleteId);
    $stmtDelete->execute();
    $stmtDelete->close();
}

$stmt->close();
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
                        <?php session_abort();?>

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
                        <a href="admin_home.php" class="">
                            <span class="icon"><i class="fa fa-home"></i></span> Home
                        </a>
                    </li>
                    <li>
                        <a href="admin_contact.php" class="is-active">
                            <span class="icon"><i class="fa fa-table"></i></span> Contact
                        </a>
                    </li>
                    <li>
                        <a href="" class="">
                            <span class="icon"><i class="fa fa-info"></i></span> About
                        </a>
                    </li>
                </ul>
            </aside>

            <div class="container column is-10">
                <div class="section">
                    <div class="card">
                        <div class="card-header">
                            <p class="has-text-centered card-header-title">Contact</p>
                        </div>
                        <div class="container">
                            <!-- Display messages with delete button -->
                            <?php foreach ($messages as $index => $message): ?>
                                <div class="message">
                                    <p><strong>Id:</strong> <?php echo $message['id']; ?></p>
                                    <p><strong>User:</strong> <?php echo $message['user']; ?></p>
                                    <p><strong>Email:</strong> <?php echo $message['email']; ?></p>
                                    <p><strong>Message:</strong> <?php echo $message['msg']; ?></p><br>
                                    <!-- Form with hidden input for message ID -->
                                    <form action="" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $message['id']; ?>">
                                        <button type="submit" name="submit" class="button is-danger">Delete</button>
                                    </form>
                                    <hr>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <br />
                <br />
            </div>
        </section>
    </div>
</body>
</html>
