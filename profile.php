<?php include('inc/header.php'); 
user_restrictions();
?>

<?php
$user = get_user();
echo "<img class='profile-image' src='" . $user['profile_image'] . "'>";

user_profile_image_upload();
?>

<form method="POSt" enctype="multipart/form-data">
    <p class="txt">Izaberite sliku za upload:</p>
    <input type="file" name="profile_image_file">
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php include('inc/footer.php'); ?>