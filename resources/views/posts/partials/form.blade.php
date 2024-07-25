<div>
  {{ html() -> select('user_id', $users)->placeholder('seleccione...') }}

  @error('user_id')
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