<?php
	require('top.php');
	isAdmin();
	$name='';
	$qualification='';
	$designation='';
	$email='';
	$phone='';
	$experience='';
	$pic='';

	$msg='';

	if(isset($_GET['id']) && $_GET['id']!=''){
		$id=get_safe_value($con,$_GET['id']);
		
		$res=mysqli_query($con,"select * from accounts where id='$id'");
		
		$check=mysqli_num_rows($res);
		if($check>0){
			$row=mysqli_fetch_assoc($res);
			$name=$row['name'];
			$email=$row['email'];
			$phone=$row['phone'];
			$designation=$row['designation'];
			$qualification=$row['qualification'];
			$experience=$row['experience'];
			$pic=$row['pic'];
		}else{
			header('location:accounts.php');
			die();
		}
	}

	if(isset($_POST['submit'])){
		$name=get_safe_value($con,$_POST['name']);
		$email=get_safe_value($con,$_POST['email']);
		$phone=get_safe_value($con,$_POST['phone']);
		$qualification=get_safe_value($con,$_POST['qualification']);
		$designation=get_safe_value($con,$_POST['designation']);
		$experience=get_safe_value($con,$_POST['experience']);

		$file=$_FILES['image'];

		$fileName= $file['name'];
		$fileTmpName= $file['tmp_name'];
		$fileSize = $file['size'];
		$fileError = $file['error'];
		$fileType = $file['type'];

		$fileExt = explode('.',$fileName);
		$fileActualExt = strtolower(end($fileExt));

		$allowed = array('jpg','jpeg','png','pdf');

		if (in_array($fileActualExt, $allowed)) {
			$fileNameNew = uniqid('',true).".".$fileActualExt;
			if(move_uploaded_file($fileTmpName, "temp") === true){
				$pic = base64_encode(file_get_contents('temp'));	
			}
		}else{
			echo "you cannot upload files of this type!";
		}



		if($msg==''){
			if(isset($_GET['id']) && $_GET['id']!=''){
				$update_sql="update accounts set name='$name',qualification='$qualification',designation='$designation',email='$email',phone='$phone',experience='$experience',pic='$pic' where id='$id'";
				mysqli_query($con,$update_sql);
				unlink('temp');
			}else{
				mysqli_query($con,"insert into accounts(name,qualification,designation,email,phone,experience,pic) values('$name','$qualification','$designation','$email','$phone','$experience','$pic')");
				unlink('temp');
			}
			header('location:accounts.php');
			die();
		}
	}
?>
	
	<div class="p-0 bg-white mt-2 rounded mx-2 right-bottom">
		<h1 class="text-center text-danger pt-3">ACCOUNTS DEPARTMENT</h1>
		<form method="post" class="p-4" autocomplete="off" enctype="multipart/form-data">
			<div class="form-group d-flex justify-content-center">
				<label for="name" class="form-control-label col-2 my-auto">NAME :</label>
				<input type="text" name="name" placeholder="Enter name" class="col-4 form-control" required value="<?php echo $name?>">
			</div>
			<div class="form-group d-flex justify-content-center">
				<label for="qualification" class="form-control-label col-2 my-auto">qualification :</label>
				<input type="text" name="qualification" placeholder="Enter qualification" class="col-4 form-control" required value="<?php echo $qualification?>">
			</div>
			<div class="form-group d-flex justify-content-center">
				<label for="designation" class="col-2 my-auto form-control-label">designation :</label>
				<input type="text" name="designation" placeholder="Enter designation" class="form-control col-4" required value="<?php echo $designation?>">
			</div>
			<div class="form-group d-flex justify-content-center">
				<label for="experience" class="col-2 my-auto form-control-label">experience :</label>
				<input type="text" name="experience" placeholder="Enter experience" class="form-control col-4" required value="<?php echo $experience?>">
			</div>
			<div class="form-group d-flex justify-content-center">
				<label for="email" class="col-2 my-auto form-control-label">Email :</label>
				<input type="email" name="email" placeholder="Enter email" class=" col-4 form-control" required value="<?php echo $email?>">
			</div>
			<div class="form-group d-flex justify-content-center">
				<label for="phone" class="col-2 my-auto form-control-label">Mobile :</label>
				<input type="text" name="phone" placeholder="Enter mobile" class=" col-4 form-control" required value="<?php echo $phone?>">
			</div>
			<div class="form-group justify-content-center d-flex">
				<label for="image" class="col-2 my-auto form-control-label">Select Image :</label>
				<div class="d-flex col-4">
					<input type="file" name="image" class="my-auto" onchange="chang('accfacid')">
					<?php 
						$img = $pic;
						echo '<img src="data:image;base64,'.$img.'" class="col-3" id="accfacid" width="50" height="50">';
					?>
				</div>
			</div>
			<div class="d-flex justify-content-end col-9 p-0">
				<button name="submit" type="submit" class="btn btn-lg btn-info px-5 mt-3">SUBMIT</button>
			</div>
			<div class="field_error"><?php echo $msg?></div>
		</form>

	</div>
     
<?php require('footer.php');?>