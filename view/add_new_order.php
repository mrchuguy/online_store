<?php
 $category_id = filter_input(INPUT_POST, 'category_id'); 
?>
<form method="post">
    <label>Name
        <input type="text" name="customer_name">
    </label>
    <label>Surname
        <input type="text" name="customer_surname">
    </label>
    <label>Phone
        <input type="text" name="customer_phone">
    </label>
    <label>Email
        <input type="text" name="customer_email">
    </label>
    <label>Comment
        <textarea name="comment"></textarea>
    </label>
    <input type="submit" value="подтвердить заказ">
    <input type="hidden" name="action" value="confirm_order">
    <input type="hidden" name="category_id" value="<?= $category_id?>">
</form>