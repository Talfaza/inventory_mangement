<!-- login.php -->
<?php
include_once "database/connect_database.php";
include_once "classes/User.php";

$conn = (new Connection())->getConnection();

$user_value = "";
$pass_value = "";

if (isset($_POST['submit'])) {
    $user_value = $_POST['user'];
    $pass_value = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM INVENTORY.USER WHERE user = ?");
    $stmt->bind_param("s", $user_value);
    $stmt->execute();
    $result = $stmt->get_result();

    $stmt->close();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $check_user = $row['user'];
        $check_pass = $row['pass'];



                if ($user_value == $check_user && $pass_value == $check_pass) {
                    session_start();
                    $user = new User($row['id'], $check_user, $row['email'], $check_pass);

                    // Start the session and store the User object
                    
                    $_SESSION["user"] = $user;

                    // Check the user role from the database
                    $user_role = $row['role'];

                   if ($user_value == "admin"  && $pass_value == "admin") {
                        header("Location: admin\admin_home.php");
                   }else{
                        header("Location: user/user_management_home.php");
                   }
                    exit;
                }

  

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
    <form action="" method="POST">
        <div class="hero is-fullheight">
            <h1 class="title is-1 has-text-centered">Login</h1>
            <div class="hero-body is-justify-content-center is-align-items-center">
                <div class="columns is-flex is-flex-direction-column box">
                    <div class="column">
                        <label for="email">Username :</label>
                        <input id="email" class="input is-link" type="text" placeholder="Username" name="user" value="<?php echo "$user_value"?>" required>
                    </div>
                    <div class="column">
                        <label for="Name">Password :</label>
                        <input class="input is-link" id="pass" type="password" placeholder="Password" name="password">
                        <label class="checkbox">
                            <input type="checkbox" id="showPassword"> Show Password
                        </label><br><br>
                        Don't have an account ?
                        <a href="signup.php" class="">Create a new account</a>
                    </div>
                    <div class="column">
                        <button class="button is-link is-light is-fullwidth" type="submit" name="submit">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
        let showPasswordCheckbox = document.getElementById('showPassword');

        showPasswordCheckbox.addEventListener('change', () => {
            let passwordInput = document.getElementById('pass');

            if (showPasswordCheckbox.checked) {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        });
    </script>
</body>
</html>
