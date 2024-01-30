
@include('backend.sessionMsg')
<div class="card-body">
  <div class="form-group">
    <label for="exampleInputEmail1">Name <span style="color:red" >*</span></label>
   
    <input type="text" class="form-control" name="name" value="{!!old('name',@$edit->name)!!}">
   
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email <span style="color:red" >*</span></label>
   
    <input type="email" class="form-control" name="email" value="{!!old('email',@$edit->email)!!}">
   
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Phone <span style="color:red" >*</span></label>
   
    <input type="text" class="form-control" name="phone" value="{!!old('phone',@$edit->phone)!!}">
   
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Location <span style="color:red" >*</span></label>
   
    <textarea name="location" id="" cols="30" rows="10" class="form-control">{!!old('location',@$edit->address)!!}</textarea>
   <input type="hidden" name="role" value="2">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Designation <span style="color:red" >*</span></label>
   
    <textarea name="designation" id="" cols="30" rows="10" class="form-control">{!!old('designation',@$edit->designation)!!}</textarea>
   
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Education <span style="color:red" >*</span></label>
   
    <textarea name="education" id="" cols="30" rows="10" class="form-control">{!!old('education',@$edit->education)!!}</textarea>
   
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Experience <span style="color:red" >*</span></label>
   
    <textarea name="experience" id="" cols="30" rows="10" class="form-control">{!!old('experience',@$edit->experience)!!}</textarea>
   
  </div>

  

  <div class="form-group">
    <label for="exampleInputEmail1">Age <span style="color:red" >*</span></label>
   
    <input type="number" class="form-control" name="age" min="1" value="{!!old('age',@$edit->age)!!}">
    <input type="hidden" name="role" value="2">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Password <span style="color:red" >*</span></label>
   
    <input type="password" class="form-control" name="password" value="{!!old('password',@$edit->password)!!}">
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Confirm Password <span style="color:red" >*</span></label>
   
    <input type="password" class="form-control" name="confirm_password" value="{!!old('confirm_password',@$edit->confirm_password)!!}">
    
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Type <span style="color:red" >*</span></label>
   
    <select class="form-control" id="dropdown" name="type">
    
      <option>Select Type</option>
        
      <option value="Psychiatrist">Psychiatrist</option>
      <option value="Counsellor">Counsellor</option>
    </select>
   
   
  </div>


  <div class="form-group">
    <label for="exampleInputFile">Photo <span style="color:red" >*</span></label>
    <div class="input-group">
      <div class="custom-file">
        <input type="file" name="logo" class="custom-file-input"  id="image">
        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
      </div>
     
    </div>
  </div>



</div>
<!-- /.card-body -->

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace( 'designation' );
    CKEDITOR.replace( 'education' );
    CKEDITOR.replace( 'experience' );
    CKEDITOR.replace( 'address' );
    CKEDITOR.replace( 'location' );
</script>