<?php
     $obj_users = new UsersModel();
     $users = $obj_users->getUsers();
?>
<table>
    <?php foreach($users as $user){?>
    <tr>
        <td><?= $user['login']?></td>
        <td>
            <form method="post">
                <input type="submit" value="delete"/>
                <input type="hidden" name="action" value="del_user"/>
                <input type="hidden" name="id" value="<?= $user['id']?>"/>
            </form>
        </td>
    </tr>
    <?php }?>
</table>

<form  method="post">
            <label> Login: <input type="text" name="login"/></label>
            <label> Password: <input type="password" name="password"/></label>
            <input type="hidden" name="action" value="add_user">
            <input type="submit" value="Добавить пользователя"/>
</form>
