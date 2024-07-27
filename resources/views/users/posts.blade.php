<div>
    <h1>
        Nombre: {{ $user-> name}}
    </h1>
</div>

<div>
    @forelse ($posts as $post)
        <div>
            <h2>
                {{$post->title}}
            </h2>
            <p>
                {{$post->body}}
            </p>
        </div>
    @empty
        
    @endforelse
    posts del usuario
</div>