<?php

// ! php artisan make:model Post -mc --api (for API controller)

// * routes/api.php

// ! Route::apiResource('posts', [PostController::class]);

// ! php artisan model:show <name_of_model>

// $products = Product::where('category_id', function($query) {
//     $query->select('category_id')
//           ->from('products')
//           ->where('slug', 'denim-jeans')
//           ->limit(1);
// })
// ->orderBy('created_at', 'desc')
// ->limit(8)
// ->get();

// The `EXISTS` operator is used to test for the existence of any record in a subquery.

// The `EXISTS` operator returns TRUE if the subquery returns one or more records.