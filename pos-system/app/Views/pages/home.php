<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="hero">
    <h2>Welcome!</h2>

    <p>
        This website is the first version of a basic Point-of-Sale system
        built using CodeIgniter 4.
    </p>

    <div class="actions">
        <a href="http://posfsystem.infinityfreeapp.com/customers" class="button">View Customers</a>
        <a href="http://posfsystem.infinityfreeapp.com/users" class="button secondary">View Users</a>
    </div>
</section>

<?= $this->endSection() ?>