<fieldset><p>Добавление товара в категорию <?= $id ?> </p><div id="add_goods_form">
        <form id="add goods" method="post">
            <label> Наименование товара: <input type="text" name="good"/></label>
            <label> Цена: <input type="number" name="price"/></label>
            <label> Описание: <textarea name="description"></textarea></label>
            <label> Производитель: <select id="manufacturers">
                    <option>-</option>
                    <option>Nescafe</option>
                    <option>Chibo</option>
                    <option>CartNoire</option>
                    <option>Montana</option>
                </select></label>
            <label> Страна производства: <select id="countries">
                    <option>-</option>
                    <option>Бразилия</option>
                    <option>Колумбия</option>
                    <option>Мексика</option>
                    <option>Никарагуа</option>
                </select></label>
            <label> Добавить фото: <input type="file" name="image[]" accept="image/*" multiple/></label>
            <input type="submit" value="Добавить товар"/>
        </form>
    </div></fieldset>
