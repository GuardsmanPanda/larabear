<?php declare(strict_types=1); ?>
<dialog id="dialog" class="p-0 shadow-xl rounded-sm">
    <div class="grid grid-cols-[auto_3rem] text-gray-800 justify-between h-12 items-center font-bold pl-4 gap-4 capitalize text-lg border-b-2 shadow-sm">
        <h3 id="dialog-title">Dialog</h3>
        <form method="dialog">
            <button class="hover:bg-red-500 align-middle hover:text-red-100 text-gray-500 transition-colors h-12 w-12 duration-75">
                <x-bear::icon class="mx-auto" size="6" name="x-mark"/>
            </button>
        </form>
    </div>
    <div id="dialog-content" class="py-3 px-5"></div>
</dialog>
