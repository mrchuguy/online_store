<?php
 $category_id = filter_input(INPUT_POST, 'category_id');
 $goods_name = filter_input(INPUT_POST, 'goods_name');
 if($_SESSION[$goods_name] === null){
    $_SESSION[$goods_name] = 1;
 } else {
    $_SESSION[$goods_name]++;
 }
 $goods_model = new Goods_model();
 $goods = $goods_model->getAllGoods();
//  var_dump($goods);
//  var_dump($_SESSION);
?>
<table>
    <tr>
        <th>name</th>
        <th>price</th>
        <th>number</th>
        <th>total price</th>
    </tr>
<?php
    foreach($goods as $goods_item){
        if($_SESSION[$goods_item['name']]!== null){
?>
    <tr>
        <td><?= $goods_item['name'] ?></td>
        <td><?= $goods_item['price']?></td>
        <td><?= $_SESSION[$goods_item['name']]?></td>
        <td><?= $goods_item['price']*$_SESSION[$goods_item['name']]?></td>
    </tr>
<?php        
        }
    } 
?>
</table>
<form method="post">
    <input type="submit" value="оформить заказ">
    <input type="hidden" name="action" value="make_order">
    <input type="hidden" name="category_id" value="<?= $category_id?>">
</form>
<a href="index.php?category=<?= $category_id?>">продолжить покупки</a>