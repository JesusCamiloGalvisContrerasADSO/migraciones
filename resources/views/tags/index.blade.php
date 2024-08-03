<a href="{{route('tags.create')}}">Nuevo</a>

<table>
  <thead>
    <th>Id</th>
    <th>Nombre</th>
  </thead>
  <tbody>
    @forelse ($tags as $tag)
        <tr>
          <td>{{$tag->id}}</td>
          <td>{{$tag->name}}</td>
          <td>
            <a href="{{route("tags.edit", $tag->id)}}">Editar</a>

            {{html()->modelForm($tag)->route("tags.destroy", $tag->id)-> open()}}
                    <button>Eliminar</button>
                    {{html()->closeModelForm()}}
          </td>
        </tr>
    @empty
        
    @endforelse
  </tbody>
</table>