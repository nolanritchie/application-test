<!DOCTYPE html>
<html lang="en">

<head>
<script src="//ajax.googleapis.com/ajax/libs/mootools/1.5.2/mootools.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>

<script type="text/javascript">
function MyAlert(text)
{
	window.alert(text);
}
</script>
</head>

<body>
<table><tr><th>ID</th><th>First Name</th><th>Last Name</th> <th>Action</th></tr>
<?php 

	$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);
	
	foreach ($people as $person)
	{	
		echo "<tr><td>".$person['id']."</td><td>".$person['first_name']."</td><td>".$person['last_name']."</td><td><button onclick=\"MyAlert('".$person['first_name']." ".$person['last_name'].": ".$person['email']."')\">Show Email</button></td></tr>";
	}
?>
</table>
</body>

</html>