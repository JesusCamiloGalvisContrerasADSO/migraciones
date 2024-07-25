{{html()->form()->route('users.store')->open()}}

@include('users.partials.form')

<button type="submit">Guardar</button>


{{ html() -> form() ->close() }}



{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}