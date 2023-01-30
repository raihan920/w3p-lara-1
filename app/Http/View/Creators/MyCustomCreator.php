<?php
namespace App\Http\View\Creators;

use Illuminate\View\View;

class MyCustomCreator{
    public function create(View $view){
        $motto = "Our super duper motto six";
        $view->with('data', $motto);
    }
}
