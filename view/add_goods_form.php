<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../css/main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <fieldset><p>Добавление фото</p><div id="add_goods_form">
            <form id="add goods" method="post">
                <label> Наименование товара: <input type="text" name="good"/></label>
                <label> Цена: <input type="number" name="price"/></label>
                <label> Описание: <textarea name="description"></textarea></label>
                <label> Категория: <select id="categories">
                    <option>-</option>
                    <option>Кофе</option>
                    <option>Чай</option>
                    <option>Кофемашины</option>
                    <option>Прочее</option>
                </select></label>
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
                <label> Добавить фото: <input type="file" accept="image/*" multiple/></label>
                <input type="submit" value="Добавить товар"/>
            </form></fieldset>
        </div>
    </body>
</html>
