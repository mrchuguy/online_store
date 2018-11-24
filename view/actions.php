<?php
    $categories = new CategoriesModel();
    $mas_of_cat = $categories->getCategory();
?>
<ul>
<?php    
    foreach($mas_of_cat as $category){
?>
    <li><a href="index.php?category=<?= $category['id']?>"><?= $category['name']?></a></li>
<?php    
    }
?>
</ul>
