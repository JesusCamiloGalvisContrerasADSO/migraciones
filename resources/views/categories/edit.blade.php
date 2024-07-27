{{html()->modelForm($category)->route('categories.update', $category->id)->open()}}

@include('categories.partials.form')

<button type="submit">Editar</button>

{{ html() -> form() ->close() }}