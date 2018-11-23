<form  method="post">
            <label> Login: <input type="text" name="login"/></label>
            <label> Password: <input type="password" name="password"/></label>
            <input type="hidden" name="action_users" value="add_user">
            <input type="submit" value="Добавить пользователя"/>
</form>
<?php
$test = new UsersModel();
	$test->showUsers();

