<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
{{-- @if (trim($slot) === 'Laravel') --}}
<img src="{{config('app.url')}}images/logo-dark.png" class="logo" alt="MetaSchools Logo">
{{-- @else --}}
{{-- {{ $slot }}
@endif --}}
</a>
</td>
</tr>
