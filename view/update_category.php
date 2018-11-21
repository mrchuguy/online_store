<form  method="post">
            <label> Наименование категории: <input type="text" name="category" value='<?=$this->category?>'/></label>
            <input type="hidden" name="action" value="update_category_form">
	    <input type="hidden" name="id" value="<?=$this->id?>">
            <input type="submit" value="Изменить"/>
</form>

