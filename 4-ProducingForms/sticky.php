
<form action="sticky.php" method="POST">
    <p> Name:
    <input type="text" name="name"
        value="<?php if ( isset($_POST['name']))
        echo $_POST['name']; ?>" > </p>

    <input type="text" name="email"
        value="<?php if ( isset($_POST['email']))
        echo $_POST['email']; ?>" > </p>

    <p><input type="submit"></p>

</form>

