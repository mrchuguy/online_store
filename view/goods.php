<?php
include_once '../includes/autoloader.php';
$goods_model = new Goods_model();
$goods = $goods_model->getGoods('1');
var_dump($goods);
?>

<input type="submit" value="Добавить товар" name="add_good"/>
<table border="solid 1">
    
    <tr>
        <th>Наименование товара</th>
        <th>Цена</th>
        <th>Описание</th>
        <th>Производитель</th>
        <th>Страна производства</th>
        <th>Категория</th>
        <th>Действие</th>
    </tr>
    <?php foreach($goods as $good){?>
    <tr>
        <td>
            <?= $good['name']?>
        </td>
        <td>
            <?= $good['price']?>
        </td>
        <td>
            <?= $good['description']?>
        </td>
        <td>
            <?= $good['manufacturer']?>
        </td>
        <td>
            <?= $good['country']?>
        </td>
        <td>
            <?= $good['category_id']?>
        </td>
        <td>
            <form method="get">
            <input type="submit" value="Удалить">
            <input type="hidden" name="action" value="delete_good">
            <input type="hidden" name="id" value="<?= $good['id']?>">
        </form>
        <form method="get">
            <input type="submit" value="Редактировать">
            <input type="hidden" name="action" value="edit_good">
            <input type="hidden" name="id" value="<?= $good['id']?>">
        </form>
        </td>
    </tr>
    <?php }?>
</table>


