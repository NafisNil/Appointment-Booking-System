
@include('backend.sessionMsg')
<div class="card-body">
  <div class="form-group">
    <label for="exampleInputEmail1">Time <span style="color:red" >*</span></label>
   
    <input type="time" class="form-control" name="time" value="{!!old('time',@$edit->time)!!}">
   
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Day <span style="color:red" >*</span></label>
   
    <select class="form-control" id="dropdown" name="day">
    

        
      <option value="1">Sunday</option>
      <option value="2">Monday</option>
      <option value="3">Tuesday</option>
      <option value="4">Wednesday</option>
      <option value="5">Thursday</option>
      <option value="6">Friday</option>
      <option value="7">Saturday</option>
    </select>
   
   
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Doctor Name <span style="color:red" >*</span></label>
   
    <select class="form-control" id="dropdown" name="doctor_id" required>
    

        
    @foreach ($doctor as $item)

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
