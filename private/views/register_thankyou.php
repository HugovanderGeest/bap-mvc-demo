<?php $this->layout("website"); ?>

<h2> dank u</h2><br>
<p>u bent nu geregistreerd!</p>

<button><a href="<?php echo url('home') ?>" <?php if (current_route_is('home')) : ?> class="active" <?php endif ?>>inloggen</a></button>
<button><a href="<?php echo url('register.form') ?>" <?php if (current_route_is('register.form')) : ?> <?php endif ?>>opnieuw aanmelden</a></button>