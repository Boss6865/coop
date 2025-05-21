
@props(['title'=>'Number Of Male',
'div_class'=>'col-md-4',
'id'=>'',
'val'=>'',
'Name'=>'',
'inclass'=>'',
'placeholder'=>'Eg.2',
'required'=>'',
'e_msg'=>'This field is required.'])
<!--begin::Col-->
<div class={{$div_class}}>
    <label for="validationCustom01" class="form-label">{{$title}}</label>
        <input
            type="text"
            class="form-control {{$inclass}}"
            id="{{$id}}"
            value="{{old($Name,$val)}}"
            name="{{$Name}}"
            @if($required !="") required @endif 
            placeholder="{{$placeholder}}"
        />
        <div class="valid-feedback">Looks good!</div>
        <div class="invalid-feedback">{{$e_msg}}</div>
        @error($Name)
        <div style="color:red">{{$message}}</div>
        @enderror
</div>
<!--end::Col-->