<?php include "inc/header.php"; 
login_check_pages();
?>

<div>
<?php display_message(); ?>
</div>

<h2 class="reg">Loginuj se</h2>

<div>
<?php display_message(); 
validate_user_login();
?>
</div>

<form method="POST">
    <input type="email" name="email"  placeholder="Email">
    <input type="password" name="password"  placeholder="Lozinka">
    <input type="submit" name="login_btn" value="Login!">
</form>

<h4 class="reg">Nemate nalog? Kliknite <a href="register.php">ovde</a> da napravite nalog.</h4>
