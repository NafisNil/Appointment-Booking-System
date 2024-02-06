
@include('backend.sessionMsg')
<div class="card-body">
  <div class="form-group">
    <label for="exampleInputEmail1">Method Name <span style="color:red" >*</span></label>
   
    <input type="text" class="form-control" name="method" value="{!!old('method',@$edit->method)!!}">
   
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Method Description <span style="color:red" >*</span></label>
   
    <textarea name="description" id="" cols="30" rows="10" class="form-control">{!!old('description',@$edit->description)!!}</textarea>
   
  </div>


</div>
<!-- /.card-body -->

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'description' );

</script>
