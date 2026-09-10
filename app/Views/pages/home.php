<?= $this->include('templates/header') ?>

<section class="hero">
    <p class="eyebrow">POINT-OF-SALE SYSTEM</p>
    <h1>Manage your store in one simple place.</h1>
    <p class="lead">This first version provides quick access to customer and staff account records.</p>
    <div class="actions">
        <a class="button primary" href="<?= base_url('customers') ?>">View customers</a>
        <a class="button secondary" href="<?= base_url('users') ?>">View users</a>
    </div>
</section>

<section class="card-grid" aria-label="POS sections">
    <article class="card">
        <span class="icon">C</span>
        <h2>Customer Accounts</h2>
        <p>View customer names and contact information.</p>
    </article>
    <article class="card">
        <span class="icon">U</span>
        <h2>User Accounts</h2>
        <p>View system users, staff names, and assigned roles.</p>
    </article>
</section>

<?= $this->include('templates/footer') ?>
