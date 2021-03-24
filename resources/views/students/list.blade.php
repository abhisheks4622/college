
<!DOCTYPE html>
<html>
<head>
	<title>{{$title}}</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">

</head>
<body>
	<div class="container">
<h1>{{$tag}}</h1>
<h2>{{Session::get('success')}}</h2>
<h2>{{Session::get('updatesuccess')}}</h2>
<h2>{{Session::get('deletesuccess')}}</h2>
<table class="table table-bordered" id="Table">
    <thead>
      <tr>
      	 <th>id</th>
        <th>name</th>
        <th>course</th>
        <th>rollno</th>
         <th>dob</th>
         <th>contactno</th>
         <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	<?php 
    		foreach ($data as $value) {
    			$id = $value['id'];
    			$name = $value['name'];
    			$course = $value['course'];
    			$rollno = $value['rollno'];
    			$dob = $value['dob'];
          $contactno = $value['contactno'];
    	?>
      <tr>
        <td><?php echo $id ?></td>
        <td><?php echo $name ?></td>
        <td><?php echo $course ?></td>                                                                    <td><?php echo $rollno ?></td>
        <td><?php echo $dob ?></td>
        <td><?php echo $contactno ?></td>
        <td>
          <a href="<?php echo url('/student/edit/').'/'.$id?>">Edit</a>
          <form action="<?php echo url('/student/delete/').'/'.$id?>" method="post">
            @csrf
            @method('delete')
          <button type="submit">delete</button> 
        </form>
        </td>
     </tr>
      <?php } ?>
    </tbody>
  </table>
  <p>Add <a href="{{url('/student/create')}}">New</a></p>
</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready( function () {
    $('#Table').DataTable();
});
</script>
</body>
</html>