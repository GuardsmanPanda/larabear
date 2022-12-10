{!!$slot!!}
@if($includeButton === true)
    <div class="border-t flex pt-3 mt-3 flex-row-reverse">
        <form method="dialog">
            <x-bear::button type="submit">{{$closeText}}</x-bear::button>
        </form>
    </div>
@endif
<div id="dialog-title" hx-swap-oob="true">{{$title}}</div>
