<?php declare(strict_types=1); ?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Secret UI">
    <meta name="referrer" content="no-referrer"/>
    <title>Larabear UI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tippy.js/6.3.7/themes/material.min.css" integrity="sha512-R8oUfFYCO11afzYKUhovrP+cajy9JF0iRRHbuk16gPYstVj9McxsE/D8wnH2l0aBKuhnkAd6VMLiTFV1Bp+zKA==" crossorigin="anonymous"
          referrerpolicy="no-referrer"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://unpkg.com/htmx.org@1.8.5/dist/htmx.min.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    <style>
        .sidebar-active {
            background-color: rgb(17 24 39) !important;
            color: rgb(220 220 220) !important;
            font-weight: 500 !important;
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

        th {
            font-weight: 500;
        }
    </style>
</head>
<body class="h-screen w-screen max-h-screen bg-gray-100" hx-target="#primary">
<div style="display: grid; grid-template-columns: 16rem auto;" class="h-full">
    <div class="flex md:w-64 flex-col shadow bg-gray-800">
        <div class="flex flex-col flex-grow pt-2 overflow-y-auto">
            <div class="flex-grow flex flex-col">
                <nav class="flex-1 px-2 pb-4">
                    <x-bear::sidebar.link path="/bear" icon="home">Dashboard</x-bear::sidebar.link>
                    <x-bear::sidebar.divider color="gray-800">Access</x-bear::sidebar.divider>
                    <x-bear::sidebar.link path="/bear/access/token/app" icon="key">API Tokens</x-bear::sidebar.link>
                    <x-bear::sidebar.link path="/bear/access/permission" icon="lock-closed">Permissions</x-bear::sidebar.link>
                    <x-bear::sidebar.link path="/bear/access/role" icon="clipboard-document">Roles</x-bear::sidebar.link>
                    <x-bear::sidebar.link path="/bear/access/user" icon="users">User</x-bear::sidebar.link>
                    <x-bear::sidebar.divider color="gray-800">Config</x-bear::sidebar.divider>
                    <x-bear::sidebar.link path="/bear/config" icon="wrench">Config</x-bear::sidebar.link>
                    <x-bear::sidebar.divider color="gray-800">Credentials</x-bear::sidebar.divider>
                    <x-bear::sidebar.link path="/bear/credential/oauth2/client" icon="rectangle-group">Oauth2 Clients</x-bear::sidebar.link>
                    <x-bear::sidebar.link path="/bear/credential/external" icon="rectangle-group">External Api's</x-bear::sidebar.link>
                    <x-bear::sidebar.divider color="gray-800">Logs</x-bear::sidebar.divider>
                    <x-bear::sidebar.link path="/bear/log/database-change" icon="circle-stack">Database Changes</x-bear::sidebar.link>
                    <x-bear::sidebar.link path="/bear/log/error" icon="exclamation-triangle">Errors</x-bear::sidebar.link>
                    <x-bear::sidebar.link path="/bear/log/response-error" icon="shield-exclamation">Response Errors</x-bear::sidebar.link>
                    <x-bear::sidebar.link path="/bear/log/console" icon="command-line">Console</x-bear::sidebar.link>
                </nav>
            </div>
        </div>
    </div>
    <div id="primary" class="max-w-full min-w-full px-4 lg:px-6 pt-2">{!! $content !!}</div>
</div>
<x-bear::dialog.layout/>
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
        el.addEventListener('click', e => e.preventDefault());
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
            if (event.detail.target.id === 'dialog-content') {
                document.getElementById('dialog').showModal();
            } else if (event.detail.elt.hasAttribute('hx-dialog-close')) {
                document.getElementById('dialog').close();
            }
        } else {
            toast('error', 'Something went wrong');
        }
        if ('hx-toast' in event.detail.requestConfig.headers) {
            toast('success', event.detail.requestConfig.headers['hx-toast']);
        }
    });
</script>
</body>
</html>
