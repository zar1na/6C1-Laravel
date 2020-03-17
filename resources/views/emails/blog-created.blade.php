@component('mail::message')
# New Blog: {{ $blog->title }}

{{ $blog->description }} <br>

@component('mail::button', ['url' => url('/blogs/' . $blog->id)])
<br> View Blog?? <br>
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
