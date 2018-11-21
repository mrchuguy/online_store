<?php
include_once '../includes/autoloader.php';
$goods_model = new Goods_model();
$goods_model->getManufacturers();