@component('mail::message')
# Welcome to MyCaptain LLC

Thank you for joining MyCaptain! Click below to enter into the application.

@component('mail::button', ['url' => 'http://my-captain.dev/home'])
View My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
