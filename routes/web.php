<?php

use Illuminate\Support\Facades\Route;

use App\Bicycle;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ride-bike', function () {
    $bike = new Bicycle("Red", "Cube");

    //Get bicycle information
    $color = $bike->getColor();
    $brand = $bike->getBrand();
    $currentSpeed = $bike->getCurrentSpeed();
    $acceleration = $bike->accelerate(15);

    //Output bicycle information
    echo "Color:  $color <br>";
    echo "Brand:  $brand <br>";
    echo "Speed:  $currentSpeed <br>";
    echo "Acceleration:  $acceleration <br>";
});
