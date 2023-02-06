<?php

namespace App\Providers;

use App\Http\Controllers\ProductsController;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\Orders;
use App\Models\OrdersDetails;
use App\Models\Product;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Paginator::useBootstrap();
        
        
        $categories = Category::all();
        $products = Product::all();
        $orders = Order::all();
        View::share('categories', $categories);
        View::share('products',$products);
        View::share('orders',$orders);

        }
}
