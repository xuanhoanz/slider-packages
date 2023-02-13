<style type="text/css">
    .slider {
        width: 100%;
        height: auto;
        position: relative;
        justify-items: center;
        display: flex;
    }

    .list-item-box {
        width: 100%;
        overflow: auto;
        scroll-behavior: smooth;
        scrollbar-width: none;

    }

    .list-item-box::-webkit-scrollbar {
        height: 0;
    }

    .prev,
    .next {
        color: #fff;
        background: rgb(59 130 246);
        border: none;
        padding: 8px;
        border-radius: 10%;
        outline: 0;
        cursor: pointer;
        position: absolute;
    }

    .prev {
        top: 50%;
        left: 0;
        transform: translate(50%, -50%);
        display: flex;
        color: #fff;
    }

    .next {
        top: 50%;
        right: 0;
        transform: translate(-50%, -50%);
        display: flex;
        color: #fff;
    }

    .item-box {
        display: grid;
        grid-auto-flow: column;
        box-sizing: border-box;
    }

    .item-slider {
        display: flex;
        justify-content: center;
    }
</style>
<?php
$numberItemDisplay = $numberItemDisplay ? $numberItemDisplay : '3';
$infinite = $infinite ? $infinite : "false";
$iconPrev = $iconPrev ?  $iconPrev : "<";
$iconNext = $iconNext ? $iconNext : ">";
?>
<div class="slider" style="{{$styleSlider}}">
    <div id="list-item-box" class="list-item-box" style="styleListItemBox">
        <div id="item-box" class="item-box">
            @if($eleSlider)
            @foreach ($eleSlider as $item)
            <div class="item-slider">
                <?php echo $item; ?>
            </div>
            @endforeach
            @endif
        </div>
    </div>
    <div id="prev-slider" class="prev" style="{{$stylePrev}}"> <?php echo $iconPrev; ?> </div>
    <div id="next-slider" class="next" style="{{$styleNext}}"> <?php echo $iconNext; ?> </div>
</div>

<script>
    var numberItemDisplay = @json($numberItemDisplay);
    var infinite = @json($infinite);
    const listItemBox = document.getElementById("list-item-box"),
        itemBox = document.getElementById("item-box"),
        items = document.getElementsByClassName("item-slider"),
        next = document.getElementById("next-slider"),
        prev = document.getElementById("prev-slider"),
        countItem = itemBox.children.length,
        width = listItemBox.clientWidth,
        widthItem = (width) / numberItemDisplay,
        totalWidth = countItem * widthItem;
    for (let i = 0; i < items.length; i++) {
        items[i].style.width = widthItem + "px";
    }

    next.addEventListener("click", e => {
        listItemBox.scrollLeft += (width);
        if (infinite === "true") {
            if (listItemBox.scrollLeft >= totalWidth - width) {
                listItemBox.scrollTo(0, 0);
            }
        }
    });

    prev.addEventListener("click", e => {
        listItemBox.scrollBy(-(width), 0);
        if (infinite === "true") {
            if (listItemBox.scrollLeft == 0) {
                listItemBox.scrollTo(totalWidth, 0);
            }
        }
    });
</script>