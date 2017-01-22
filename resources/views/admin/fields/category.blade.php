<div class="form-group" >
    <label for="{{$id}}" class="col-sm-2 control-label">{{$label}}</label>
    <div class="col-sm-6 {{$class}}-container">
        <input type="hidden" name="{{$name}}"/>
        <select class="form-control {{$class}}" style="width: 100%;" name="{{$name}}[]" {!! $attributes !!} >
            @foreach($options as $select => $option)
                <option value="{{$select}}">{{$option}}</option>
            @endforeach
        </select>
    </div>
</div>