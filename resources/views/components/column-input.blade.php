
@props(['title'=>'Number Of Male',
'div_class'=>'col-md-4',
'id'=>'',
'div_id'=>'',
'word_id'=>'',
'val'=>'',
'Name'=>'',
'inclass'=>'',
'placeholder'=>'Eg.2',
'required'=>'',
'function'=>'',
'disp'=>'',
'e_msg'=>'This field is required.'])
<!--begin::Col-->
<div class={{$div_class}} id={{$div_id}}>
    <label for="{{$id}}" class="form-label">{{$title}}</label>
        <input
            type="text"
            class="form-control {{$inclass}}"
            id="{{$id}}"
            value="{{old($Name,$val)}}"
            name="{{$Name}}"
            {{$function}}            
            @if($required !="") required @endif 
            placeholder="{{$placeholder}}"
        />
        <div class="valid-feedback">Looks good!</div>
        <div class="invalid-feedback">{{$e_msg}}</div>
        @error($Name)
        <div style="color:red">{{$message}}</div>
        @enderror
        <div id="{{$word_id}}"></div>
        
</div>
<!--end::Col-->