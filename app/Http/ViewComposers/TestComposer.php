<?php

namespace App\Http\ViewComposers;

use App\Models\Test;
use Illuminate\View\View;

class TestComposer
{
    public function compose(View $view)
    {
        $recentSearchKeywords = Test::inRandomOrder()->take(3)->get();
        $view->with('recentSearchKeywords', $recentSearchKeywords);
    }
}
