@include('layouts.head')
<div class="row">
    <h1 class="title">{{ $pagetitle }}</h1>
</div>
<div class="row">
    @include('table')
</div>
<div class="row">
    @include('snippets.form')
</div>
@include('layouts.footer')