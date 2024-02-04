
@include('backend.sessionMsg')
<div class="card-body">
  <div class="form-group">
    <label for="exampleInputEmail1">Name <span style="color:red" >*</span></label>
   
    <input type="text" class="form-control" name="name" value="{!!old('name',@$edit->name)!!}">
   
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Amount <span style="color:red" >*</span></label>
   
    <input type="text" class="form-control" name="amount" value="{!!old('amount',@$edit->amount)!!}">
   
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Description <span style="color:red" >*</span></label>
   
   <textarea name="description" id="" cols="30" rows="10" class="form-control">{!!old('description',@$edit->description)!!}</textarea>
   
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Doctor Name <span style="color:red" >*</span></label>
   
    <select class="form-control" id="dropdown" name="doctor_id" required>
    

        
    @foreach ($doctor as $item)

      <option value="{{ $item->id }}">{{ $item->name }}</option>
             
    @endforeach
    </select>
   
   
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Category Name <span style="color:red" >*</span></label>
   
    <select class="form-control" id="dropdown" name="category_id" required>
    

        
    @foreach ($category as $item)

      <option value="{{ $item->id }}">{{ $item->name }}</option>
             
    @endforeach
    </select>
   
   
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
