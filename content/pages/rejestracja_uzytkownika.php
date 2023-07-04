<h2 class="Registration">Logowanie</h2>
<form action="<?php echo $config['site_url']?>includes/login_process.php" method="post">
    <label for="username">Nazwa użytkownika</label>
    <input type="text" name="username" required class="rounded-input border-bottom-input border-removed-input border-customized-input">
    </br>

    <label for="password">Hasło</label>
    <input type="password" name="password" required class="rounded-input border-bottom-input border-removed-input border-customized-input">
    </br></br>
    <?php
    if(empty($_SESSION['error'])){
        echo '<p class="error">uzytkowni lub haslo nie so prawidlowe</p></br></br>';
    }
    ?>

    <button type="submit" value="Zaloguj" class="rounded-input black-border">Zaloguj</button>
</form>