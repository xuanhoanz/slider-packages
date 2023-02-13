<?php
namespace Pine\PineSlider;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Pine\PineSlider\View\Components\PineSlider;

class PineSliderServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'pine-slider');
        Blade::component('pine-slider', PineSlider::class);
    }

    public function register()
    {
    }
}
