<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?> | POS</title>
    <link rel="stylesheet" href="http://posfsystem.infinityfreeapp.com/css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>POS System</h1>

            <nav>
                <a href="http://posfsystem.infinityfreeapp.com/">Home</a>
                <a href="http://posfsystem.infinityfreeapp.com/about">About</a>
                <a href="http://posfsystem.infinityfreeapp.com/customers">Customers</a>
                <a href="http://posfsystem.infinityfreeapp.com/users">Users</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <?= $this->renderSection('content') ?>
    </main>

    <footer>
        <div class="container">
            <p>&copy; <?= date('Y') ?> POS System</p>
        </div>
    </footer>
</body>
</html>