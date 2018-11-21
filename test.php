<?php
$query = 'select * from manufacturers';
	    $res = query($query);
	    if ($res) {
		return $res->fetch_all(MYSQLI_ASSOC);
	    } else {
		return false;
	    }
            var_dump($res);