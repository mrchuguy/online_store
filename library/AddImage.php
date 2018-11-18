<?php
class AddImage
{
    static public function addImage(){
        $image = $_FILE['image'];
        move_uploaded_file($image["tmp_name"], "..".DIRECTORY_SEPARATOR."images".DIRECTORY_SEPARATOR.$image['name']);
    }
}