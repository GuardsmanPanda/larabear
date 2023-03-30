<?php declare(strict_types=1); ?>
<form id="dialog-form" autocomplete="off" {{ $attributes }} hx-dialog-close>
    <x-bear::form.csrf/>
    {!!$slot!!}
</form>
<div class="border-t flex gap-2 pt-3 mt-3 flex-row-reverse">
    <form method="dialog"><x-bear::button.light type="submit">{{$cancelText}}</x-bear::button.light></form>
    <x-bear::button.dark form="dialog-form" type="submit" >{{$submitText}}</x-bear::button.dark>
</div>
