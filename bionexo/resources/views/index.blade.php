@include('layouts.head')
<div class="row">
    <h1 class="title">{{ $pagetitle }}</h1>
    @include('snippets.alert')
    @yield('content')
</div>
<div class="row">
    @include('table')
</div>
<div class="row">
    @include('snippets.buttons')
</div>
@include('layouts.footer')
