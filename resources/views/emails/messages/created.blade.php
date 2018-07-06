@component('mail::message')
# Bravo monsieur

- <strong> Votre nom:</strong> {{ $msg->name }}
- <strong>Votre email:</strong> {{ $msg->email }}

@component('mail::panel')
{{ $msg->message }}
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
