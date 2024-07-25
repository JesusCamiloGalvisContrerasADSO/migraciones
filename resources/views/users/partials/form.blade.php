
    {{ html()->hidden('id') }}
    
    <div>
        {{html()->label('email')}}
        {{html()->text('email')}}

        @error('email')
            {{ $message}}
        @enderror

    </div>

    <div>
        {{html()->label('name')}}
        {{html()->text('name')}}

        @error('name')
            {{ $message}}
        @enderror

    </div>

    <div>
        {{html()->label("password")}}
        {{html()->password("password")}}

        @error("password")
            {{$message}}
        @enderror
    </div>


    
    