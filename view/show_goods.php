<?php
$goods_model = new Goods_model();
$manufacturers = $goods_model->getManufacturers();
$countries = $goods_model->getCountries();
$goods = $goods_model->getGoods($id);
// var_dump($goods);
// var_dump($manufacturers);
foreach($goods as $goods_item){
?>
<div>
    <ul>
        <li><?= $goods_item['name']?></li>
        <li>Price:<?= $goods_item['price']?></li>
        <li>Description:<?= $goods_item['description']?></li>
    </ul>
</div>
<?php
}
?>