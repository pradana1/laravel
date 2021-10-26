@component('mail::message')
# Selamat datang di {{ config('app.name') }}

Silahkan aktifasi kamu

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Terima kasih,<br>
{{ config('app.name') }}
@endcomponent