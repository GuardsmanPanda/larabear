<?php declare(strict_types=1); ?>
<x-bear::dialog.basic title="Bearer Token - {{$token->id}}">
    <div>Here your access token, please store securely, you will not be able to see this token again.</div>
    <div>Token ID: {{$token->id}}</div>
    <div>Token Secret: {{$token->secret}}</div>
    <div>How to use</div>
    <div>Requests must include the token in the Authorization header as a bearer token.</div>
    <div>Example</div>
    <div>Authorization: Bearer {{$token->secret}}</div>
</x-bear::dialog.basic>
