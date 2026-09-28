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

            <input
                type="text"
                name="username"
                value="<?= $user['username'] ?? '' ?>">

            <input
                type="text"
                name="full_name"
                value="<?= $user['full_name'] ?? '' ?>">

            <input
                type="file"
                name="avatar">

            <button type="submit">
                Save
            </button>

        </form>

    </div>
</body>

</html>