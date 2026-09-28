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
            <a href="/">Home</a> |
            <a href="/about">About</a> |
            <a href="/customers">Customers</a> |
            <a href="/users">Users</a>
        </nav>

        <h1>User Form</h1>
        <form method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label>Username</label>
                <input
                    type="text"
                    name="username"
                    value="<?= $user['username'] ?? '' ?>">
            </div>

            <div class="form-group">
                <label>Full Name</label>
                <input
                    type="text"
                    name="full_name"
                    value="<?= $user['full_name'] ?? '' ?>">
            </div>

            <div class="form-group">
                <label>Avatar</label>
                <input
                    type="file"
                    name="avatar">
            </div>

            <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                Save
            </button>
            <a href="<?= site_url('customers') ?>" class="btn btn-edit">
                Cancel
            </a>
            </div>

        </form>

    </div>
</body>

</html>