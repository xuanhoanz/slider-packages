# Slider Packages

## 1. Introduction

A carousel slider widget.

## 2. Installation

**Pretty simple with Composer, run**

    composer require pine/pine-slider

**Show slider at view pages:**
   
    <x-pine-slider :eleSlider="$eleSlider" :numberItemDisplay="$numberItemDisplay"  />
    
## 3. Usage


#### Declare variables require

**$numberItemDisplay** is number of items slider you want to display.

		$numberItemDisplay = 5;
        
**$eleSlider** is anything you want to display as a slider. It may be images, text or product information, etc.

Example: 

    <?php
    $eleSlider = [];
    foreach ($array as $value) {
       $info = "<div id=" . $value->id . ">" . $value->name . "</div>";
       $eleSlider[] = $info;
    } 
    ?>

In which: 

`$eleSlider` is an array include elements you want to display.

`$info` is the display of an element.

    
    
## 4. Customize Slider


**$infinite** is continuous scrolling feature.

	$infinite = "true";//to turn on
    $infinite = "false";//to turn off

**$styleSlider** customize slider section display.

	$styleSlide = "width: 100%;
        height: auto;
        position: relative;
        justify-items: center;
        display: flex;";

**$stylePrev**: customize previous button display.

	$stylePrev = "color: #fff;
        background: rgb(59 130 246);
        border: none;
        padding: 8px;
        border-radius: 10%;
        outline: 0;
        cursor: pointer;
        position: absolute;
        top: 50%;
        left: 0;
        transform: translate(50%, -50%);
        display: flex;

**$styleNext**: customize next button display.

	$styleNext = "color: #fff;
        background: rgb(59 130 246);
        border: none;
        padding: 8px;
        border-radius: 10%;
        outline: 0;
        cursor: pointer;
        position: absolute;
        top: 50%;
        left: 0;
        transform: translate(50%, -50%);
        display: flex;";

**$iconPrev** is icon previous button display

	$iconPrev = "<img src="urlImage">";

**$iconNext** is icon next button display

	$iconNext = "<img src="urlImage">";
    
**$styleListItemBox** customize list items display

	$styleListItemBox = "width: 100%;
        overflow: auto;
        scroll-behavior: smooth;";

