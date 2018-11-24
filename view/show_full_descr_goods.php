<?php
$goods_model = new Goods_model();
$goods = $goods_model->getGoods($category_id);
foreach($goods as $goods_item){
    if($goods_item['id']===$goods_id){
?>
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>description</th>
            <th>manufacturer</th>
            <th>country</th>
        </tr>
        <tr>
            <td><?= $goods_item['name']?></td>
            <td><?= $goods_item['price']?></td>
            <td><?= $goods_item['description']?></td>
            <td><?= $goods_item['manufacturer']?></td>
            <td><?= $goods_item['country']?></td>
        </tr>
    </table>
<?php
    }
}
?>