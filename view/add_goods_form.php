<?php
include_once '../includes/autoloader.php';
$goods_model = new Goods_model();
$manufacturers = $goods_model->getManufacturers();
$countries = $goods_model->getCountries();
$add_good = $goods_model->addGood($name, $price, $description, $manufacturer_id, $country_id, $category_id);
?>
<fieldset><p>Добавить товар в категорию <?= $id ?> </p><div id="add_goods_form">
        <form id="add goods" method="post" enctype="multipart/form-data">
            <label> Наименование товара: <input type="text" name="name"/></label>
            <label> Цена: <input type="number" name="price"/></label>
            <label> Описание: <textarea name="description"></textarea></label>
            <label> Выберите производителя: <select id="manufacturers" name="manufacturer">
                            <?php foreach ($manufacturers as $id => $manufacturer) :?>
                    <option value="<?=$manufacturer['id']?>"><?=$manufacturer['name']?></option> 
                    <?php                    endforeach;?>
                </select></label>
            <label> Выберите страну производства: <select id="countries" name="country">
                    <?php foreach ($countries as $id => $country) :?>
                    <option value="<?=$country['id']?>"><?=$country['name']?></option> 
                    <?php                    endforeach;?>
                </select></label>
            <label> Добавить картинку: <input type="file" name="image[]" accept="image/*" multiple/></label>
            <input type="submit" value="Добавить товар"/>
        </form>
    </div></fieldset>
