<!DOCTYPE html>
<html>

<head>
    <title>User Accounts</title>
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

        <h1>User Accounts</h1>

        <table border="1" cellpadding="10">
            <tr>
                <th>Username</th>
                <th>Full Name</th>
                <th>Avatar</th>
            </tr>

            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= ($user['username']) ?></td>
                    <td><?= ($user['full_name']) ?></td>
                    <td>

                        <?php
                        $avatar =
                            !empty($user['avatar'])
                            ? base_url('uploads/' . $user['avatar'])
                            : base_url('uploads/placeholder.png');
                        ?>

                        <img src="<?= $avatar ?>" width="80" height="80" alt="Avatar">

                    </td>
                </tr>
            <?php endforeach; ?>

        </table>

    </div>
</body>

</html>