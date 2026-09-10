<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title) ?> | SimplePOS</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <header class="site-header">
        <nav class="nav container" aria-label="Main navigation">
            <a class="brand" href="<?= base_url('/') ?>">SimplePOS</a>
            <div class="nav-links">
                <a class="<?= $activePage === 'home' ? 'active' : '' ?>" href="<?= base_url('/') ?>">Home</a>
                <a class="<?= $activePage === 'about' ? 'active' : '' ?>" href="<?= base_url('about') ?>">About</a>
                <a class="<?= $activePage === 'customers' ? 'active' : '' ?>" href="<?= base_url('customers') ?>">Customers</a>
                <a class="<?= $activePage === 'users' ? 'active' : '' ?>" href="<?= base_url('users') ?>">Users</a>
            </div>
        </nav>
    </header>
    <main class="container">
