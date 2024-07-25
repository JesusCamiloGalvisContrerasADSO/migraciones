<div>
  <a href=" {{ route("posts.create")}}">Nuevo</a>
</div>
<div>
  <table>
    <thead>
      <th>id</th>
      <th>title</th>
      <th>autor</th>
      <th>acciones</th>
    </thead>
    <tbody>
      @forelse ($posts as $post)
      <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->user->name }}</td>
      </tr>
          
      @empty
          
      @endforelse
    </tbody>
  </table>
</div>