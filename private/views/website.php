<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="<?php echo site_url('/css/style.css') ?>" media="all">
</head>

<body>
    <header>
        <nav>

            <button><a href="<?php echo url('home') ?>" <?php if (current_route_is('home')) : ?> <?php endif ?>>Home</a></button>

        </nav>
    </header>
    <main>
        <?php echo $this->section("content"); ?>
    </main>

    <footer>
        &copy; <?php echo date('Y') ?>
    </footer>
</body>

</html>