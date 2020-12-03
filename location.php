<?php
include("admin.php");

include("action.php");

?>

<div class="container">
	<p style="text-align: center;font-size: 50px;margin-bottom: 20px;">LOCATIONS</p>
<table id="admintable" cellspacing="10">
<tr>
		<th>
			Location
		</th>

		<th>
			Distance
		</th>

		<th>
			Action
		</th>
</tr>

<?php

$obj = new connection();

$sql = $obj->dlocation();

$result = $sql;

if ($result->num_rows > 0) {
	// output data of each row
	while ($row = $result->fetch_assoc()) {
?>
		
		<tr>
			<td>
				<?php echo $row['name']; ?>
			</td>
			
			<td >
				<?php echo $row['distance']; ?>
			</td>


			 <td>
				<!--  <a href="#?id=<?php //echo $row['user_id'];?>" name="update" class="update">UPDATE</a>  --> 
				<a href="locationdelete.php?id=<?php echo $row['name'];?>" name="delete" class="delete">DELETE</a>
			</td>
			<!-- <td>
				<input type="hidden" name="userid" value="<?php //echo $row['user_id']; ?>">
			</td>  -->
<?php
	}
} 
	else 
	{
?>
		<td colspan="8">
			<?php echo "No User is available"; ?>
		</td>
	</tr>
</table>
<?php
	}
?>