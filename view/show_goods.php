<?php
$goods_model = new Goods_model();
$goods = $goods_model->getGoods($id);
foreach($goods as $goods_item){
?>
    <table>
        <tr>
            <td><?= $goods_item['name']?></td>
            <td>Price:<?= $goods_item['price']?></td>
            <td><a href="index.php?category=<?= $id?>&goods=<?= $goods_item['id']?>">Подробней</a></td>
            <td>
                <form method="post">
                    <input type="submit" value="купить">
                    <input type="hidden" name="action" value="basket">
                    <input type="hidden" name="goods_name" value="<?= $goods_item['name']?>">
                    <input type="hidden" name="category_id" value="<?= $id?>">
                </form>
            </td>
        </tr>
    </table>
<?php
}
?>