<?php
include "header.php";
?>

<h1>New user</h1>
<hr>
<form action="save_user.php" method="POST">
    <input type="text" name="login" placeholder="Login">
    <input type="text" name="password" placeholder="Password">
    <input type="submit">
</form>
</body>
</html>