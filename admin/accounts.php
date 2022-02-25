<?php
	require('top.php');
	isAdmin();
	if(isset($_GET['type']) && $_GET['type']!=''){
		$type=get_safe_value($con,$_GET['type']);
		if($type=='delete'){
			$id=get_safe_value($con,$_GET['id']);
			$delete_sql="delete from accounts where id='$id'";
			mysqli_query($con,$delete_sql);
		}
	}
	$sql="select * from accounts";
	$res=mysqli_query($con,$sql);
?>
	<div class="p-0 bg-white mt-2 rounded mx-2 right-bottom">
		<h1 class="text-center text-danger pt-3">ACCOUNTS DEPARTMENT</h1>
		<P class="text-right pb-0 mb-1 mr-1 "><a href="manage_accounts.php"><span class="btn btn-success text-white">ADD NEW ACCOUNTS FACULTY</span></a> </P>
		<table class="table table-striped col-12 mx-auto mt-1 rounded">
			<thead>
				<tr class="text-center tr" >
					<th width="5%">NO</th>
					<th width="10%">NAME</th>
					<th width="12%">QUALIFICATION</th>
					<th width="15%">DESIGNATION</th>
					<th width="10%">EXPERIENCE</th>
					<th width="20%">EMAIL</th>
					<th width="12%">Mobile</th>
					<th width="">PHOTO</th>
					<th width="8%"></th>
				</tr>
			</thead>
			<tbody>

				<?php 
					$cnt = 0;
					while($row=mysqli_fetch_assoc($res)){?>
					<?php $cnt ++; ?>
					<tr class="text-center">
						<td><?php echo $cnt ?></td>
						<td><?php echo $row['name']?></td>
						<td><?php echo $row['qualification']?></td>
						<td><?php echo $row['designation']?></td>
						<td><?php echo $row['experience']?></td>
						<td><?php echo $row['email']?></td>
						<td><?php echo $row['phone']?></td>
						<td>
							<?php 
								$img = $row['pic'];
								echo '<img src="data:image;base64,'.$img.'" width="50" height="50">';
							?>
						</td>
						<td class="d-flex justify-content-center border-0">
							<?php
								echo "<span><button class='btn btn-info'><a href='manage_accounts.php?id=".$row['id']."'><i class='fas fa-user-edit text-white'></i></a></button></span>&nbsp;";
								echo "<span><button class='btn btn-danger'><a onclick='javascript:confirmationDelete($(this));return false;' href='accounts.php?type=delete&id=".$row['id']."'><i class='fas fa-trash-alt text-white'></i></a></button></span>";
							?>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php require('footer.php');?>