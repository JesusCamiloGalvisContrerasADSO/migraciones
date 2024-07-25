{{html()->form()->route('posts.store')->open()}}

@include('posts.partials.form')

<button type="submit">Guardar</button>


{{ html() -> form() ->close() }}