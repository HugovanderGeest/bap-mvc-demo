<?php $this->layout("website"); ?>

<form action="<?php echo url("register.handle") ?>" method="POST">
    <label for="email">email</label><br>
    <input type="Email" value="<?php echo input('email') ?>" name="email"><br>
    <div style="color:red"><?php if (isset($errors['email'])) : ?>
            <?php echo $errors['email'] ?>
        <?php endif; ?><br><br></div>

    <label for="wachtwoord">wachtwoord</label><br>
    <input type="password" value="<?php echo input('wachtwoord') ?>" name="wachtwoord"><br>
    <div style="color:red"><?php if (isset($errors['wachtwoord'])) : ?>
            <?php echo $errors['wachtwoord'] ?>
        <?php endif; ?><br><br></div>


    <button type="submit">Aanmelden</button>
</form>
</div>