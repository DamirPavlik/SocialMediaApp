<?php include 'inc/header.php'; 
login_check_pages();
?>
<div>
<?php
   
    validate_user_registration();
    display_message();
   
?>
 </div>
 <h2 class="reg">Registruj se</h2>
    <form method="POST">
        <input type="text" name="first_name" placeholder="Ime" required>
        <input type="text" name="last_name" placeholder="Prezime" required>
        <input type="text" name="username" placeholder="Korisnicko Ime" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Lozinka" required>
        <input type="password" name="confirm_password" placeholder="Potvrdi Lozinku" required>
        <input type="submit" name="register-submit" value="Registruj se!">
    </form>


<?php include 'inc/footer.php'; 