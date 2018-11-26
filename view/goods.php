<table border="solid 1px">    
    <tr>
        <th>Наименование товара</th>
        <th>Цена</th>
        <th>Описание</th>
        <th>Производитель</th>
        <th>Страна производства</th>
        <th>Категория</th>
        <th>Действие</th>
    </tr>
    <?php foreach($this->goods as $good){?>
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
            <form method="post">
            <input type="submit" value="Удалить">
            <input type="hidden" name="action" value="delete_good">
            <input type="hidden" name="id" value="<?= $good['id']?>">
        </form>
        <form method="post">
            <input type="submit" value="Редактировать">
            <input type="hidden" name="action" value="edit_good">
            <input type="hidden" name="id" value="<?= $good['id']?>">
        </form>
        </td>
    </tr>
    <?php }?>
</table>
<fieldset><p>Добавить товар в категорию <?= $this->category_id ?> </p><div id="add_goods_form">
        <form id="add goods" method="post" enctype="multipart/form-data">
            <label> Наименование товара: <input type="text" name="name"/></label>
            <label> Цена: <input type="number" name="price"/></label>
            <label> Описание: <textarea name="description"></textarea></label>
            <label> Выберите производителя: <select id="manufacturers" name="manufacturer">
		    <?php foreach ($this->manufacturers as $manufacturer) : ?>
                        <option value="<?= $manufacturer['id'] ?>"><?= $manufacturer['name'] ?></option> 
		    <?php endforeach; ?>
                </select></label>
            <label> Выберите страну производства: <select id="countries" name="country">
		    <?php foreach ($this->countries as $country) : ?>
                        <option value="<?= $country['id'] ?>"><?= $country['name'] ?></option> 
		    <?php endforeach; ?>
                </select></label>
            <label> Добавить картинку: <input type="file" name="image[]" accept="image/*" multiple/></label>
	    <input type="hidden" name="action" value="add_good">
            <input type="submit" value="Добавить товар"/>
        </form>
    </div>
</fieldset>


