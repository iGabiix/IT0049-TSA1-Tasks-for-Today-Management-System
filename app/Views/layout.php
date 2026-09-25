<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?> | Tasks for Today</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f7f8f2;
            color: #243b2f;
        }

        nav {
            background: #006b3f;
            padding: 16px;
            border-bottom: 5px solid #f5b335;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
            font-weight: bold;
        }

        nav a:hover {
            color: #f5b335;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            border-top: 6px solid #f5b335;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #006b3f;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #d9dfd5;
        }

        th {
            background: #e8f1e9;
            color: #006b3f;
        }

        .badge {
            background: #f5b335;
            color: #1f3d2b;
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: bold;
            text-transform: capitalize;
        }
    </style>
</head>
<body>
    <nav>
        <a href="<?= site_url('/') ?>">Today</a>
        <a href="<?= site_url('tasks') ?>">Task List</a>
        <a href="<?= site_url('profile') ?>">Profile</a>
        <a href="<?= site_url('about') ?>">About</a>
    </nav>

    <div class="container">
        <?= $this->renderSection('content') ?>
    </div>
</body>
</html>