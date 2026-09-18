<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="card">
    <h2>User Accounts</h2>
    <p>List of staff members who can use the POS system.</p>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $index => $user): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= esc($user['username']) ?></td>
                    <td><?= esc($user['full_name']) ?></td>
                    <td><?= esc($user['role']) ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</section>

<?= $this->endSection() ?>