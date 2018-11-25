<?php
 $goods_name = filter_input(INPUT_POST, 'goods_name');
 if($_SESSION[$goods_name] === null){
    $_SESSION[$goods_name] = 1;
 } else {
    $_SESSION[$goods_name]++;
 }
 $goods_model = new Goods_model();
 $goods = $goods_model->getAllGoods();
?>
<table>
    <tr>
        <th>name</th>
        <th>price</th>
        <th>number</th>
        <th>total price</th>
    </tr>
<?php
    foreach($goods as $name=>$goods_item){
?>
    <tr>
        <td><?= $name ?></td>
        <td><?= 0?></td>
        <td><?= $number?></td>
        <td><?= 0?></td>
    </tr>
<?php        
    } 
?>
</table>
<form>
    <input type="submit" value="оформить заказ">
    <input type="hidden" name="action" value="make_order">
</form>