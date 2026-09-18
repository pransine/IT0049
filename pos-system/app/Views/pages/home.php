<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="hero">
    <h2>Welcome to the Simple POS System</h2>

    <p>
        This website is the first version of a basic Point-of-Sale system
        built using CodeIgniter 4.
    </p>

    <div class="actions">
        <a href="<?= base_url('customers') ?>" class="button">View Customers</a>
        <a href="<?= base_url('users') ?>" class="button secondary">View Users</a>
    </div>
</section>

<?= $this->endSection() ?>