{{html()->form()->route('categories.store')->open()}}

@include('categories.partials.form')

<button type="submit">Guardar</button>

{{ html() -> form() ->close() }}