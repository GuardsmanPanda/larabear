<form id="dialog-form" {!! $action !!} autocomplete="off" {{ $attributes->merge(['class' => 'py-4 px-6']) }} hx-headers='{"hx-dialog": "close"}' >
    <x-bear::form.csrf/>
    {!!$slot!!}
</form>
<div class="border-t flex gap-2 py-3  px-4 flex-row-reverse">
    <form method="dialog"><x-bear::button type="submit">{{$cancelText}}</x-bear::button></form>
    <x-bear::button-dark form="dialog-form" type="submit">{{$submitText}}</x-bear::button-dark>
</div>
<div id="dialog-title" hx-swap-oob="true">{{$title}}</div>