
@props(['title'=>'Tribe',
'div_class'=>'col-md-4',
'e_msg'=>'This field is required.'])
<div class="{{$div_class}}">
                          <label for="validationCustom01" class="form-label">{{$title}}</label>
                          <select class="form-select" id="validationCustom04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>ST</option>
                            <option>SC</option>
                            <option>Gen/Others</option>
                            
                          </select>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">This field is required. Can't be empty</div>
                    </div>