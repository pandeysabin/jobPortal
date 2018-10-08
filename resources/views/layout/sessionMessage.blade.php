@if( Session::has('success') )
    <div class="alert alert-success">
        <ul>
           <li>
                {{ Session::get('success') }}
            </li>
        </ul>
    </div>
@endif
@if( Session::has('error') )
    <div class="alert alert-danger">
        {{ Session::get('error') }}
    </div>
@endif