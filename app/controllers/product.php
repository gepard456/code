<?php

$db = new My\Database\QueryBuilder();
$product = $db->getOne(15, 'products');


// Create new Plates instance
$templates = new League\Plates\Engine('../app/views');

// Render a template
echo $templates->render('product', $product);