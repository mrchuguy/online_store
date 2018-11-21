<?php
    $obj = new CategoriesModel();
    $categories = $obj->getCategory();
    require_once 'add_category_form.php';
?>    


<ol>
<?php foreach($categories as $category){?>
    <li>
        <a href="/admin/admin.php?action=categories&category=<?= $category['id']?>"><?= $category['name']?></a>
        <form method="POST">
            <input type="submit" value="X">
            <input type="hidden" name="action" value="del_category">
            <input type="hidden" name="id" value="<?= $category['id']?>">
        </form>
        <form method="POST">
            <input type="submit" value="edit">
            <input type="hidden" name="action" value="update_category">
            <input type="hidden" name="id" value="<?= $category['id']?>">
        </form>
    </li>
<?php }?>
</ol>
