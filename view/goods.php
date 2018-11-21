<?php
$goods_model = new Goods_model();
$goods = $goods_model->getGoods($id);
?>

<input type="submit" value="Добавить товар"/>
<table>
    <?php foreach($goods as $good){?>
    <li>
        <a href="/admin/admin.php?action=categories&category=<?= $category['id']?>"><?= $category['name']?></a>
        <form method="POST">
            <input type="submit" value="X">
            <input type="hidden" name="action" value="del_good">
            <input type="hidden" name="id" value="<?= $good['id']?>">
        </form>
        <form method="POST">
            <input type="submit" value="edit">
            <input type="hidden" name="action" value="edit_good">
            <input type="hidden" name="id" value="<?= $good['id']?>">
        </form>
    </li>
<?php }?>
</table>


