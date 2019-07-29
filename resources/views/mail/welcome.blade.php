@component('mail::message')
# Welcome {{ $user->name }}

Your account was created successfully

@component('mail::button', ['url' => 'http://aduuna.herokuapp.com'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
