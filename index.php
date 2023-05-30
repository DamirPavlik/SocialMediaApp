<?php include 'inc/header.php' ?>

<?php if(isset($_SESSION['email'])): ?>
    <?php create_post(); ?>
    <br>
    <form method="POST">
        <h3 class="obj">Kreirajte novu objavu</h3>
        <textarea name="post_content"  cols="60" rows="10" placeholder="Sadrzaj objave..."></textarea>
        <input type="submit" name="submit" value="Objavi">
    </form>

    <div>
        <?php display_message(); ?>
    </div>

    <hr>

    <div class="posts">
        <?php fetch_all_posts(); ?>
    </div>

<?php else : ?>

    <div class="homepage">
        <div class="split left">
            <div class="centered">
                <h1><span class="thinner">Dobrodosli na  </span><br>  Damirovu Drustvenu Mrezu</h1>
                <p class="dummy">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quaerat quo aliquid dicta iusto, nihil mollitia, natus obcaecati quidem dolorem aperiam non incidunt eos aliquam?</p>
            <h2>Kliknite <a href="login.php">ovde</a> da se ulogujete</h2>
            </div>
        </div>

        
        <div class="split right">
            <div class="centered">
                <img src="css/img/phone-removebg-preview.png" class="phone">
            </div>
        </div>
    </div>

<?php endif; ?>

<?php include 'inc/footer.php' ?>