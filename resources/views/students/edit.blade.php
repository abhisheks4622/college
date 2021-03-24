<!DOCTYPE html>
<html>
<head>
	<title>{{$title}}</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style>
.container{
    width: 700px;
	margin: 0 auto;
}
.form-group{
	float: left;
    width: 100%;
    margin-bottom: 10px;
}
.heading{
	text-align: center;
}
.button{
	text-align: center;
	margin-top: 10px;
	float: left;
    width: 100%;
}
</style>
<script>
    $( function() {
    $( "#datepicker" ).datepicker();
  } );
</script>
</head>
<body>
	<div class="container">
		<div class="container">
    <div class="heading">
    <h2>Student's Update Form</h2>
  </div>
<form action="{{url('/student/update')}}" method="post">
  <input type="hidden" class="form-control" id="id" placeholder="Enter Name" name="id" value="<?php echo $data['id'] ?>" autocomplete="off">
   <div class="form-group">
   	 @csrf
    @method('put')
      <label class="control-label col-sm-2" for="Name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="<?php echo $data['name'] ?>" autocomplete="off">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="Course">Course:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="course" placeholder="Enter Course" name="course" value="<?php echo $data['course'] ?>"autocomplete="off">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="rollno">Roll no:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="rollno" placeholder="Enter roll no." name="rollno" value="<?php echo $data['rollno'] ?>"autocomplete="off">
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="DOB">DOB:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="datepicker" placeholder="Enter DOB" name="dob" value="<?php echo $data['dob'] ?>"autocomplete="off">
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="contactno">Contact no:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="contact" placeholder="Enter Contact no." name="contactno" value="<?php echo $data['contactno'] ?>" autocomplete="off">
      </div>
    </div>
    <div class="button">
   <button type="submit" class="btn btn-default">Submit</button>
</div>
</form>
<p>Go on <a href="{{url('/students')}}">List</a></p>
</div>

</body>
</html>