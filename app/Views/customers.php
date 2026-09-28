<!DOCTYPE html>
<html>

<head>
    <title>Customer Accounts</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <div class="container">

        <h1>POS System</h1>

        <nav>
            <a href="/">Home</a> 
            <a href="/about">About</a> 
            <a href="/customers">Customers</a> 
            <a href="/users">Users</a>
        </nav>
        <div class="page-header">
            <h1>Customer Accounts</h1>
            <a href="<?= site_url('customers/new') ?>" class="btn btn-primary">
                Add New Customer
            </a>

        </div>
        <table border="1" cellpadding="10">
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>

            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= ($customer['full_name']) ?></td>
                    <td><?= ($customer['email']) ?></td>
                    <td><?= ($customer['phone']) ?></td>
                    <td>
                        <a href="<?= 'customers/edit/' . $customer['id'] ?>" class="btn btn-edit">
                            Edit
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>

    </div>
</body>

</html>