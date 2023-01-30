<?php
namespace App\Http\View\Composers;

use Illuminate\View\View;

class MyCustomComposer{
    public function compose(View $view){
        $motto = "Our super duper motto";
        $view->with('data', $motto);
    }
}
