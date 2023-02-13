<?php

namespace Pine\PineSlider\View\Components;

use Illuminate\View\Component;

class PineSlider extends Component
{
    public $numberItemDisplay;
    public $eleSlider;
    public $infinite;
    public $styleSlider;
    public $styleListItemBox;
    public $stylePrev;
    public $styleNext;
    public $iconPrev;
    public $iconNext;
    public function __construct($numberItemDisplay, $eleSlider, $infinite = '', $styleSlider = '', $styleListItemBox = '', $stylePrev = '', $styleNext = '', $iconPrev = '', $iconNext = '')
    {
       $this->numberItemDisplay = $numberItemDisplay;
       $this->eleSlider = $eleSlider;
       $this->infinite = $infinite;
       $this->styleSlider = $styleSlider;
       $this->styleListItemBox = $styleListItemBox;
       $this->stylePrev = $stylePrev;
       $this->styleNext = $styleNext;
       $this->iconPrev = $iconPrev;
       $this->iconNext = $iconNext;
    }           

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('pine-slider::index');
    }
}
