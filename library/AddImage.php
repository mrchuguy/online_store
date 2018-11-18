<?php
class AddImage
{
    static public function addImg(){
        $images = $_FILES['image'];
        // $images = filter_input(INPUT_POST,'image');
        foreach($images['name'] as $i=>$image){
            move_uploaded_file($images["tmp_name"][$i], "..".DIRECTORY_SEPARATOR."images".DIRECTORY_SEPARATOR.$image);
        }
    }
}