<?php
    $obj = new CategoriesModel();
    $categories = $obj->getCategory();
    // echo '<button>добавить категорию</button>';
    // echo '<ol>';
    // foreach($categories as $i=>$category){
    //     echo '<li>';
    //     echo '<a href="/admin/admin.php?action=categories&category='.$i.'">'.$category['name'].'</a>';
    //     echo '<form method="POST">';
    //     echo '<input type="submit" value="X">';
    //     echo '<input type="hidden" name="action" value="del_category">';
    //     echo '<input type="submit" value="edit">';
    //     echo '</form>';
    //     echo '<form method="POST">';
    //     echo '<input type="hidden" name="action" value="update_category">';
    //     echo '<input type="hidden" name="id" value="'.$i.'">';
    //     echo '</form>';
    //     echo '</li>';
    // }
    // echo '</ol>';
?>    

<button>добавить категорию</button>
<ol>
<?php foreach($categories as $category){?>
    <li>
<<<<<<< HEAD
        <a href="/admin/admin.php?action=categories&category=<?= $category[$id]?>"><?= $category['name']?></a>
        <form method="POST">
            <input type="submit" value="X">
            <input type="hidden" name="action" value="del_category">
            <input type="hidden" name="id" value="<?= $category[$id]?>">
=======
        <a href="/admin/admin.php?action=categories&category=<?= $category['id']?>"><?= $category['name']?></a>
        <form method="POST">
            <input type="submit" value="X">
            <input type="hidden" name="action" value="del_category">
            <input type="hidden" name="id" value="<?= $category['id']?>">
>>>>>>> 8b71fda4f5c76c7618c2ea7026cde833b9e4251e
        </form>
        <form method="POST">
            <input type="submit" value="edit">
            <input type="hidden" name="action" value="update_category">
<<<<<<< HEAD
            <input type="hidden" name="id" value="<?= $category[$id]?>">
=======
            <input type="hidden" name="id" value="<?= $category['id']?>">
>>>>>>> 8b71fda4f5c76c7618c2ea7026cde833b9e4251e
        </form>
    </li>
<?php }?>
</ol>