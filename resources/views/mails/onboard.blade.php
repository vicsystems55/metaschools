@component('mail::message')



<h1>
    Hi, {{ $data['name'] }} <br>
    Congratulations. Welcome to Meta Schools. <br><br>
    You are on {{$data['package']}} <br>
    Temporary Website url: {{$data['url']}}<br>
    Email: {{$data['admin_email']}}<br>
    Password: {{$data['admin_password']}} <br>
    Address: {{$data['address']}} <br>


</h1>





{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent