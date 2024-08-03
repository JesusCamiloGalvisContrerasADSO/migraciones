<div>
  {{ html() -> select('user_id', $users)->placeholder('seleccione...') }}

  @error('user_id')
  {{ $message}}
  @enderror 
</div>

<div>
  {{ html() -> select('category_id', $categories)->placeholder('seleccione...') }}

  @error('category_id')
  {{ $message}}
  @enderror 
</div>

<div>
  {{ html() -> text('title') }}
  @error('title')
  {{ $message}}
  @enderror
</div>

<div>
  {{ html() -> textarea('body') }}
  @error('body')
  {{ $message}}
  @enderror
</div>

<div>
  @foreach ($tags as $tag)
      {{html() ->checkbox('tag_id[]',null, $tag->id)->id('tag_' . $tag->id) }}
      {{html() ->label($tag->name, 'tag_' . $tag->id)}}
  @endforeach
  @error('tag_id')
    {{ $message}}
  @enderror
</div>

