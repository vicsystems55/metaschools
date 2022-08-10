@component('mail::message')



<h1>
    Hi, {{ $data['name'] }} <br>
    Congratulations. Welcome to Meta Schools. <br>

</h1>





{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent