@component('mail::message')
# Bravo monsieur

- <strong> Votre nom:</strong> {{ $name }}
- <strong>Votre email:</strong> {{ $email }}

@component('mail::panel')
{{ $msg }}
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
