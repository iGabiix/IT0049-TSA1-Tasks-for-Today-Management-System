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
            background: #f4f6f8;
            color: #1f2937;
        }

        nav {
            background: #1d4ed8;
            padding: 16px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
            font-weight: bold;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background: #eff6ff;
        }

        .badge {
            background: #dbeafe;
            color: #1e40af;
            padding: 5px 10px;
            border-radius: 20px;
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