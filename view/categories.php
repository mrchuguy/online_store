<?php
$obj = new CategoriesModel();
$categories = $obj->getCategory();
require_once 'add_category_form.php';
?>    

<br/>
<table>
    <tr>
	<th>CATEGORIES</th>
	<th>DELETE</th>
	<th>EDIT</th>
    </tr>
    <?php foreach ($categories as $category) { ?>
        <tr>
    	<td>
    	    <a href="/admin/admin.php?action=categories&category=<?= $category['id'] ?>"><?= $category['name'] ?></a></td>
            <td>
    	    <form method="POST">
    		<input type="submit" value="X">
    		<input type="hidden" name="action" value="del_category">
    		<input type="hidden" name="id" value="<?= $category['id'] ?>">
    	    </form>
    	</td>
	<td>
        <form method="POST">
    	<input type="submit" value="edit">
    	<input type="hidden" name="action" value="update_category">
    	<input type="hidden" name="id" value="<?= $category['id'] ?>">
        </form>
	</td>
    </tr>
<?php } ?>
