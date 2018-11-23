<?php
    $categories = new CategoriesModel();
    $mas_of_cat = $categories->getCategory(); 
    // var_dump($mas_of_cat);
?>
<ul>
<?php    
    foreach($mas_of_cat as $category){
?>
    <li><a href="index.php?action=goods&category=<?= $category['id']?>"><?= $category['name']?></a></li>
<?php    
    }
?>
</ul>
