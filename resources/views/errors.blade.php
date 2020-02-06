@if ($errors->any())
<div class="notification is-danger">
<ul style="color:red">
@foreach ($errors->all() as $error)
<h5>{{ $error }}</h5>
@endforeach
</ul>
</div>
@endif