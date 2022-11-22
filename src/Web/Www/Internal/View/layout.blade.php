<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Secret UI">
    <meta name="referrer" content="no-referrer"/>
    <title>Larabear UI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tippy.js/6.3.7/themes/material.min.css" integrity="sha512-R8oUfFYCO11afzYKUhovrP+cajy9JF0iRRHbuk16gPYstVj9McxsE/D8wnH2l0aBKuhnkAd6VMLiTFV1Bp+zKA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    @if(config('bear.ui.app_css') !== null)
        <link rel="stylesheet" href="{!! config('bear.ui.app_css') !!}">
    @else
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    @endif
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://unpkg.com/htmx.org@1.8.1" integrity="sha384-DXaTz/CiqGNRLEu025rPC9D2gEK8Imn+w1e1QtdYD0Bap7LIcHOYjUZAO96YDCX3" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    <style>
        .sidebar-active {
            background-color: #e0f2fe !important;
            color: #0369a1 !important;
        }
        .toastify {
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1);
            cursor: pointer;
            right: 15px;
            z-index: 100;
        }
        .toastify.on {
            opacity: 0.95;
        }
        .toast-close {
            background: 0 0;
            border: 0;
            color: #fff;
            opacity: 0.4;
            padding: 0 5px;
        }
    </style>
</head>
<body class="min-h-screen" style="display: grid; grid-template-rows: 3rem auto" hx-target="#primary">
<nav class="font-bold w-full flex items-center px-4  shadow bg-gray-900 shadow-gray-800/50 z-20">
    <a href="/bear" class="flex py-2 gap-2 items-center text-sky-500 text-lg">
        <svg class="h-6 w-6 text-sky-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l9-5-9-5-9 5 9 5z"/>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l-9 5 9 5 9-5-9-5z"/>
        </svg>
        <div>Larabear UI</div>
    </a>
    <div class="flex flex-1 pl-6 items-center" hx-target="#primary">
    </div>
    <div class="text-gray-400">Back</div>
</nav>
<div style="display: grid; grid-template-columns: 16rem auto;">
    <div class="flex md:w-64 flex-col shadow-lg">
        <div class="flex flex-col flex-grow pt-2 overflow-y-auto">
            <div class="flex-grow flex flex-col">
                <nav class="flex-1 px-2 pb-4">
                    <x-bear::sidebar.link path="/bear" icon="home" >Dashboard</x-bear::sidebar.link>
                    <x-bear::sidebar.divider>Access</x-bear::sidebar.divider>
                    <x-bear::sidebar.link path="/bear/access/token/app" icon="key" >API Tokens</x-bear::sidebar.link>
                    <x-bear::sidebar.link path="/bear/access/permission" icon="lock-closed" >Permissions</x-bear::sidebar.link>
                    <x-bear::sidebar.link path="/bear/access/role" icon="clipboard-document" >Roles</x-bear::sidebar.link>
                    <x-bear::sidebar.link path="/bear/access/role-permission" icon="clipboard-document-check" >Role Permissions</x-bear::sidebar.link>
                    <x-bear::sidebar.divider>Config</x-bear::sidebar.divider>
                    <x-bear::sidebar.link path="/bear/config" icon="wrench" >Config</x-bear::sidebar.link>
                    <x-bear::sidebar.divider>Oauth2</x-bear::sidebar.divider>
                    <x-bear::sidebar.link path="/bear/oauth2/client" icon="rectangle-group" >Oauth2 Clients</x-bear::sidebar.link>
                    <x-bear::sidebar.divider>Logs</x-bear::sidebar.divider>
                    <x-bear::sidebar.link path="/bear/log/database-change" icon="circle-stack" >Database Changes</x-bear::sidebar.link>
                    <x-bear::sidebar.link path="/bear/log/error" icon="exclamation-triangle" >Errors</x-bear::sidebar.link>
                    <x-bear::sidebar.link path="/bear/log/response-error" icon="shield-exclamation" >Response Errors</x-bear::sidebar.link>
                    <x-bear::sidebar.link path="/bear/log/console" icon="command-line" >Console</x-bear::sidebar.link>
                </nav>
            </div>
        </div>
    </div>
    <div id="primary" class="max-w-full min-w-full px-4 lg:px-6 pt-4">{!! $content !!}</div>
</div>
<x-bear::dialog.layout />
<script>
    const toast = (type, message) => {
        let classes = 'rounded font-medium shadow text-sm py-3 px-5 before:top-0 before:left-0 before:absolute fixed before:h-full  before:w-2.5 '
        Toastify({
            text: message,
            className: classes + (type === 'success' ? 'text-green-50 bg-green-600 shadow-green-600/40 before:bg-green-700' : 'bg-red-600 text-red-50 shadow-red-600/40 before:bg-red-800'),
            onClick: function () {
            }
        }).showToast();
    }

    const copyFunction = el => el.addEventListener('click', () => {
        const copyText = el.getAttribute('copy')
        navigator.clipboard.writeText(copyText).then(() => {
            toast('success', `Copied: ${copyText}`)
        }, () => {
            toast('error', 'Failed to copy to the clipboard')
        })
    })

    const fastNavFunction = function (el) {
        el.addEventListener('mousedown', function (e) {
            if (e.button === 0) {
                htmx.ajax('GET', el.getAttribute('href'), el.getAttribute('hx-target') ?? '#primary');
                history.pushState({}, 'we', el.getAttribute('href'))
                if (typeof el.getAttribute('hx-fastnav') === 'string' && el.getAttribute('hx-fastnav') !== '') {
                    document.querySelectorAll('.' + el.getAttribute('hx-fastnav')).forEach(function (el2) {
                        el2.classList.toggle(el.getAttribute('hx-fastnav'));
                    });
                    el.classList.toggle(el.getAttribute('hx-fastnav'));
                }
            }
        });
        el.addEventListener('click', e =>  e.preventDefault());
    }

    const tippyFunction = function (el) {
        tippy(el, {
            content: el.getAttribute('tippy'),
            appendTo: 'parent',
            duration: [250, 250],
            hideOnClick: false,
            inertia: true,
            theme: 'material',
        });
    }

    window.onload = () => {
        document.querySelectorAll("[hx-fastnav]").forEach(fastNavFunction);
        document.querySelectorAll('[tippy]').forEach(tippyFunction);
        document.querySelectorAll('[copy]').forEach(copyFunction);
    }
    htmx.on('htmx:afterProcessNode', event => {
        event.target.querySelectorAll('[hx-fastnav]').forEach(fastNavFunction);
        event.target.querySelectorAll('[tippy]').forEach(tippyFunction);
        event.target.querySelectorAll('[copy]').forEach(copyFunction);
    });


    htmx.on("htmx:afterRequest", event => {
        if (event.detail.successful) {
            if (event.detail.requestConfig.headers['hx-dialog'] === 'open') {
                document.getElementById('dialog').showModal();
            } else if (event.detail.requestConfig.headers['hx-dialog'] === 'close') {
                document.getElementById('dialog').close();
            }
            if ('hx-toast' in event.detail.requestConfig.headers) {
                toast('success', event.detail.requestConfig.headers['hx-toast']);
            }
        } else {
            toast('error', 'Something went wrong');
        }
    });
</script>
</body>
</html>