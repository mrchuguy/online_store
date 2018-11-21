<?php

class AddImage {

    static public function addImg() {
	$files = $_FILES['image'];
	if (!is_null($files)) {
	    $message = array();
	    foreach ($files['name'] as $key => $file_name) {
		if ($files['error'][$key] !== UPLOAD_ERR_OK) {
		    switch ($files['error'][$key]) {
			case UPLOAD_ERR_INI_SIZE:
			    $message[] = "The uploaded file exceeds the upload_max_filesize directive in php.ini";
			    break;
			case UPLOAD_ERR_FORM_SIZE:
			    $message[] = "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form";
			    break;
			case UPLOAD_ERR_PARTIAL:
			    $message[] = "The uploaded file was only partially uploaded";
			    break;
			case UPLOAD_ERR_NO_FILE:
			    $message[] = "No file was uploaded";
			    break;
			case UPLOAD_ERR_NO_TMP_DIR:
			    $message[] = "Missing a temporary folder";
			    break;
			case UPLOAD_ERR_CANT_WRITE:
			    $message[] = "Failed to write file to disk";
			    break;
			case UPLOAD_ERR_EXTENSION:
			    $message[] = "File upload stopped by extension";
			    break;
			default:
			    $message[] = "Unknown upload error";
			    break;
		    }
		} else if (!in_array($files['type'][$key], ALLOWED_TYPES, true)) {
		    $message[] = 'Файл ' . $file_name . ' не того типа';
		} else if ($files['size'][$key] > MAX_IMAGE_SIZE) {
		    $message[] = 'Файл ' . $file_name . ' слишком большой';
		} else if (!move_uploaded_file($files['tmp_name'][$key], IMAGES_DIRECTORY . DIRECTORY_SEPARATOR . $files['size'][$key] . $file_name)) {
		    $message[] = 'Файл ' . $file_name . ' не загружен';
		}
	    }
	    if (empty($message)) {
		
		echo "<span>Файлы загружены</span>";
	    } else {
		foreach ($message as $message_item) {
		    echo '<span>$message_item</span>';
		}
	    }
	}
    }
}
    