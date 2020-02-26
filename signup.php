<?php
    require "header.php";
?>

<main>
    <h1>Signup</h1>

    <?php 
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
                echo '<p>Please fill in all fields!</p>';
            }
            else if ($_GET['error'] == "invalidemail") {
                echo '<p>The email address you entered is invalid!</p>';
            }
            else if ($_GET['error'] == "passwordcheck") {
                echo '<p>The passwords you entered do not match!</p>';
            }
            else if ($_GET['error'] == "invalidusername") {
                echo '<p>The username you entered is invalid!</p>';
            }
            else if ($_GET['error'] == "usertaken") {
                echo '<p>The username you entered is already taken!</p>';
            }
            else if ($_GET['signup'] == "success") {
                echo '<p>Signup Successful!</p>';
            }
        }
    ?>

    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="username" placeholder="Enter your username">
        <input type="text" name="email" placeholder="Enter your email">
        <input type="password" name="password" placeholder="Enter your password">
        <input type="password" name="password2" placeholder="Re-enter your password">
        <button type="submit" name="signup-submit">Sign Up</button>
    </form>

</main>

<?php
    require "footer.php";
?>