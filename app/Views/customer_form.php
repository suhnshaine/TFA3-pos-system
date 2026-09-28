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

<h1>Customer Form</h1>
<form method="post" action="<?= isset($customer) ? site_url('customers/update/' . $customer['id']) : site_url('customers/create') ?>">

    <input
        type="text"
        name="full_name"
        placeholder="Full Name"
        value="<?= $customer['full_name'] ?? '' ?>">

    <br><br>

    <input
        type="email"
        name="email"
        placeholder="Email"
        value="<?= $customer['email'] ?? '' ?>">

    <br><br>

    <input
        type="text"
        name="phone"
        placeholder="Phone"
        value="<?= $customer['phone'] ?? '' ?>">

    <br><br>

    <button type="submit">Save</button>

</form>

</div>
</body>
</html>