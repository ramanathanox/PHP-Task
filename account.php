<html>
    <body>
        <?php
        session_start();
        $user = $_SESSION['username'];
        if ($user) {
            echo "<h2>Welcome $user</h2>";
        } else {
            header('location:login.php');
        }
        ?>
        <a href='logout.php'><button>Logout</button></a>
    </body>
</html>