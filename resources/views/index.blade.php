@if(Session::has('success'))
    <div class="alert alert-success"> {{ Session::get('success') }}</div>
@endif
@if(Session::has('fail'))
    <div class="alert alert-success"> {{ Session::get('fail') }}</div>
@endif
@if(Session::has('successful'))
    <div class="alert alert-success"> {{ Session::get('successful') }}</div>
@endif
@if(Session::has('failed'))
    <div class="alert alert-success"> {{ Session::get('failed') }}</div>
@endif
