@if(Session::has('success'))
    <div class="alert alert-success auto-close">
        {{Session::get('success')}}
    </div>
@endif
@if(Session::has('error'))
    <div class="alert alert-danger auto-close">
        {{Session::get('error')}}
    </div>
@endif
@if(Session::has('warning'))
    <div class="alert alert-warning auto-close">
        {{Session::get('warning')}}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger auto-close">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
