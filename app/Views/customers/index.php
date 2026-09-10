<?= $this->include('templates/header') ?>

<section class="page-heading">
    <p class="eyebrow">RECORDS</p>
    <h1>Customer Accounts</h1>
    <p class="lead">Contact details for <?= count($customers) ?> sample customers.</p>
</section>

<div class="table-card">
    <div class="table-scroll">
        <table>
            <thead>
                <tr>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><?= esc($customer['full_name']) ?></td>
                        <td><?= esc($customer['email']) ?></td>
                        <td><?= esc($customer['phone']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->include('templates/footer') ?>
