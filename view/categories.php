<?php
    $obj = new CategoriesModel();
    $categories = $obj->getCategory();
    var_dump($categories);
    echo '<button>добавить категорию</button>';
    echo '<ol>';
    foreach($categories as $i=>$category){
        echo '<li>';
        echo '<a href="/admin/admin.php?action=categories&category='.$i.'">'.$category['name'].'</a>';
        echo '<form method="POST">';
        echo '<input type="submit" value="X">';
        echo '<input type="hidden" name="action" value="delcategory">';
        echo '<input type="submit" value="edit">';
        echo '</form>';
        echo '<form method="POST">';
        echo '<input type="hidden" name="action" value="editcategory">';
        echo '<input type="hidden" name="id" value="'.$i.'">';
        echo '</form>';
        echo '</li>';
    }
    echo '</ol>';
?>    

<!--<button>добавить категорию</button>-->
<!--<ol>
    <li><a href="/admin/admin.php?action=categories&category=1">категория1</a></li>
    <li><a href="/admin/admin.php?action=categories&category=2">категория2</a></li>
    <li><a href="/admin/admin.php?action=categories&category=3">категория3</a></li>
</ol>-->