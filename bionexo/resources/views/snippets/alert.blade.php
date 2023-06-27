@if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="alert alert-danger" role="alert">
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-block">
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="alert alert-primary" role="alert">
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('secondary'))
    <div class="alert alert-secondary" role="alert">
        Please check the form below for errors
    </div>
@endif
