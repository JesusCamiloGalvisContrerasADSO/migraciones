<div>
  <a href=" {{ route("posts.create")}}">Nuevo</a>
</div>
<div>
  <table border="1">
    <thead>
      <th>id</th>
      <th>title</th>
      <th>autor</th>
      <th>Categoria</th>
      <th>acciones</th>
    </thead>
    <tbody>
      @forelse ($posts as $post)
      <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->user->name }}</td>
        <td>{{$post->category->name ?? 'No tiene categoria'}}</td>
        <td>{{$post->tags ?? 'No tiene tags'}}</td>

        
        <td><a href="{{route('posts.edit', $post->id )}}">Editar</a>
          {{html()->modelForm($post)->route("posts.destroy", $post->id)-> open()}}
                    <button>Eliminar</button>
                    {{html()->closeModelForm()}}
        </td>
      </tr>
          
      @empty
          
      @endforelse
    </tbody>
  </table>
  {{ $posts->links() }}
</div>