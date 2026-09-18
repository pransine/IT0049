<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?> | POS</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>POS System</h1>

            <nav>
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/customers">Customers</a>
                <a href="/users">Users</a>
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