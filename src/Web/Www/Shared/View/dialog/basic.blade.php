{!!$slot!!}
@if($includeButton === true)
    <div class="border-t flex gap-2 py-3  px-4 flex-row-reverse">
        <form method="dialog">
            <x-bear::button-dark type="submit">{{$closeText}}</x-bear::button-dark>
        </form>
    </div>
@endif
<div id="dialog-title" hx-swap-oob="true">{{$title}}</div>
