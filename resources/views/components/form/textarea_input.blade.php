

    <div class="inputArea">
        <label for="{{$name}}">{{$label}}</label>
        <textarea
               name="{{$name}}"
               id="{{$name}}"
               placeholder="{{ $placeholder ?? '' }}"
        >{{ $value  ?? '' }}</textarea>
    </div>

