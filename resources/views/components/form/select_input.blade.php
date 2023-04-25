<div class="inputArea">
    <label for="{{$name}}">{{$label}}</label>
    <select id="{{$label}}" name="{{$name}}" {{empty($required) ? '' : 'required'}}>
        <option selected disable value="">selecione uma opção</option>
        {{$slot}}
    </select>
</div>
