<form method="post" action="/main.php" target="_self" class="formMenuChoice">
    <input type="email" name="userEmail">
    <input type="text" name="menuChoice" class="hidden" value="<?php echo($_POST["menuChoice"]) ?>">
    <input type="submit" value="enter email">
</form>