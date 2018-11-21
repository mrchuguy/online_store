<?php
include_once '../includes/autoloader.php';
$goods_model = new Goods_model();
$goods_model->getManufacturers();
$goods_model->getCountries();
$goods_model->getGoods();