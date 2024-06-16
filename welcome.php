<?php
session_start();
if (isset($_SESSION["userid"]) && !empty($_SESSION["userid"])) {
} else {
    header("Location: login.php");
    exit;
}
if (isset($_SESSION["user"]) && isset($_SESSION["user"]["name"])) {
    $name = $_SESSION["user"]["name"];
    $email = $_SESSION['user']['email'];
    $password = $_SESSION['user']['password'];
    $pet = $_SESSION['user']['name'];
} 
else {
    $name = "Guest";
}
print_r($_SESSION["user"]['name']);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Welcome <?php echo htmlspecialchars($name); ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Hello, <strong><?php echo htmlspecialchars($name); ?></strong>. Welcome to demo site.</h1>
                </div>
                <h2><?php echo htmlspecialchars($email); ?></h2>
                <h3><?php echo htmlspecialchars($password); ?></h3>
                <h4><?php echo htmlspecialchars($pet); ?></h4>
                <p>
                    <a href="logout.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Log Out</a>
                </p>
            </div>
        </div>
    </body>
</html>