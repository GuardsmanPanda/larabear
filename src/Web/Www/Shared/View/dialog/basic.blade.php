<?php declare(strict_types=1); ?>
{!!$slot!!}
@if($includeButton === true)
    <div class="border-t flex pt-3 mt-3 flex-row-reverse">
        <form method="dialog">
            <x-bear::button.light type="submit" {{$attributes}}>{{$closeText}}</x-bear::button.light>
        </form>
    </div>
@endif
<div id="dialog-title" hx-swap-oob="true">{{$title}}</div>
