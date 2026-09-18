<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="card">
    <h2>Customer Accounts</h2>
    <p>List of customers registered in the POS system.</p>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>Email Address</th>
                <th>Phone Number</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $index => $customer): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= esc($customer['full_name']) ?></td>
                    <td><?= esc($customer['email']) ?></td>
                    <td><?= esc($customer['phone']) ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</section>

<?= $this->endSection() ?>