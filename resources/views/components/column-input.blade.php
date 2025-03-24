
@props(['title'=>'Number Of Male',
'div_class'=>'col-md-4',
'id'=>'validationCustom01',
'val'=>'',
'Name'=>'',
'inclass'=>'',
'placeholder'=>'Eg.2',
'e_msg'=>'This field is required.'])
<!--begin::Col-->
<div class={{$div_class}}>
    <label for="validationCustom01" class="form-label">{{$title}}</label>
        <input
            type="text"
            class="form-control {{$inclass}}"
            id="{{$id}}"
            value="{{$val}}"
            name="{{$Name}}"
            required
            placeholder="{{$placeholder}}"
        />
        <div class="valid-feedback">Looks good!</div>
        <div class="invalid-feedback">{{$e_msg}}</div>
        @error($Name)
        <div class="invalid-feedback">{{$e_msg}}</div>
        @enderror
</div>
<!--end::Col-->