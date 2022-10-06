<?php
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
// home
Breadcrumbs::for('home', function ($trail) {
$trail->push('Home', route('home'));
});
// home > products
Breadcrumbs::for('products', function ($trail) {
$trail->parent('home');
$trail->push('products', route('products'));
});
// home > products > product detail
Breadcrumbs::for('product_name', function ($trail) {$trail->parent('products');
$trail->push('product_name', route('product.detail'));
});