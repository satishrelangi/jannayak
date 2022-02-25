<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
	<section class="container-md">
		<div class="row bg-white mx-auto">
			<h1 class="text-center col">Jan Nayak Kapoori Thakur Education Wing</h1>
			<form class="py-2 mx-lg-5" autocomplete="off" method="post" action="#" onsubmit="return Validate()">
				<h5 class="side-heading p-0 m-0">PERSONAL DETAILS</h5>
				<div class="row p-0 m-0 mt-1">
					<div class="col-12 p-0 d-sm-flex m-0 inp-div">
						<p class="col-12 col-sm-2 p-0 m-0 pl-sm-2 my-auto"> FULL NAME :</p>
						<input type="text" name="name" autocomplete="off" required class="col-12 col-sm-10 my-auto bg-inp"  id="name" />
					</div>
					<div class="col-12 p-0 d-sm-flex inp-div">
						<div class="col-12 col-sm-6 p-0 d-sm-flex m-0 ">
							<p class="m-0 p-0 col-sm-4 pl-sm-2 my-auto">DATE OF BIRTH :</p>
							<input type="date" name="dob" id="dob" autocomplete="off" required class="col-sm-8 my-auto bg-inp" />
						</div>
						<div class="col-12 col-sm-6 p-0 d-sm-flex m-0">
							<p class="m-0 p-0 col-sm-4 col-12 pl-sm-3 my-auto">CASTE :</p>
							<input type="text" name="caste" id="caste" autocomplete="off" required class="col-sm-8 col-12 my-auto  bg-inp" />
						</div>
					</div>
					<div class="col-12 p-0 d-sm-flex inp-div">
						<p class="m-0 p-0 col-sm-12 col-md-2 pl-sm-2 my-auto">GENDER :</p>
						<div class="col-sm-6 p-0 d-flex m-0 my-auto">
							<input type="radio" name="gender" id="gender-m" value="male" class="my-auto ml-2" />
							<label for="gender-m" class="px-1 my-auto col-sm-3">MALE</label>
							<input type="radio" name="gender" id="gender-f" value="female" class="my-auto" />
							<label for="gender-f" class="px-1 my-auto col-sm-3">FEMALE</label>
						</div>
					</div>					
				</div>
				<h5 class="side-heading p-0 m-0 mt-3">CONTACT DETAILS</h5>
				<div class="row p-0 m-0 mt-1">
					<div class="col-12 p-0 d-sm-flex m-0 inp-div">
						<p class="col-sm-2 p-0 m-0 pl-sm-2 my-auto"> ADDRESS :</p>
						<input type="text" name="address" autocomplete="off" required class="col-sm-10 my-auto  bg-inp"  id="address" />
					</div>
					<div class="col-12 p-0 d-sm-flex inp-div">
						<div class="col-sm-6 p-0 d-sm-flex m-0 ">
							<p class="m-0 p-0 col-sm-4 pl-sm-2 my-auto">CITY/MANDAL :</p>
							<input type="text" name="city" id="city" autocomplete="off" required class="col-sm-8 my-auto   bg-inp" />
						</div>
						<div class="col-sm-6 p-0 d-sm-flex m-0">
							<p class="m-0 p-0 col-sm-4 pl-sm-3 my-auto">DISTRICT :</p>
							<input type="text" name="district" id="district" autocomplete="off" required class="col-sm-8 my-auto  bg-inp" />
						</div>
					</div>
					<div class="col-12 p-0 d-sm-flex inp-div">
						<div class="col-sm-6 p-0 d-sm-flex m-0 ">
							<p class="m-0 p-0 col-sm-4 pl-sm-2 my-auto"> STATE :</p>
							<input type="text" name="state" id="state" autocomplete="off" required class="col-sm-8 my-auto   bg-inp" />
						</div>
						<div class="col-sm-6 p-0 d-sm-flex m-0">
							<p class="m-0 p-0 col-sm-4 pl-sm-3 my-auto">PINCODE :</p>
							<input type="text" name="pincode" id="pincode" autocomplete="off" required class="col-sm-8 my-auto  bg-inp" />
						</div>
					</div>

					<div class="col-12 p-0 d-sm-flex inp-div">
						<div class="col-sm-6 p-0 d-sm-flex m-0 ">
							<p class="m-0 p-0 col-sm-4 pl-sm-2 my-auto">PHONE NUMBER :</p>
							<input type="tel" name="phone" id="phone" autocomplete="off" required class="col-sm-8 my-auto   bg-inp" />
						</div>
						<div class="col-sm-6 p-0 d-sm-flex m-0">
							<p class="m-0 p-0 col-sm-4 pl-sm-3 my-auto">ADHAAR :</p>
							<input type="text" name="adhaar" id="adhaar" autocomplete="off" required class="col-sm-8 my-auto  bg-inp" />
						</div>
					</div>	
					<div class="col-sm-12 p-0 d-sm-flex m-0 inp-div">
						<p class="col-sm-2 p-0 m-0 pl-sm-2 my-auto">EMAIL ID :</p>
						<input type="email" name="email" autocomplete="off" required class="col-sm-10 my-auto bg-inp"  id="email" />
					</div>
				</div>
				<h5 class="side-heading p-0 m-0 mt-3">PARENTS DETAILS <span>(Father or mother if father not alive or husband for married woman)</span></h5>
				<div class="row p-0 m-0 mt-1">
					<div class="col-12 p-0 d-sm-flex inp-div">
						<p class="m-0 p-0 col-sm-4 pl-2 my-auto">RELATION</p>
						<div class="col-sm-6 col-md-4 p-0 d-flex m-0 my-auto">
							<input type="radio" name="relation" id="relation-f" value="father" class="my-auto ml-2" />
							<label for="relation-f" class="px-1 my-auto col-sm-3">FATHER</label>
							<input type="radio" name="relation" id="relation-m" value="mother" class="my-auto" />
							<label for="relation-m" class="px-1 my-auto col-sm-3">MOTHER</label>
						</div>
						<div class="col-sm-6 col-md-4 p-0 d-flex m-0 my-auto">
							<input type="radio" name="relation" id="relation-h" value="husband" class="my-auto ml-2" />
							<label for="relation-h" class="px-1 my-auto col-sm-3">HUSBAND</label>
							<input type="radio" name="relation" id="relation-o" value="others" class="my-auto" />
							<label for="relation-o" class="px-1 my-auto col-sm-3">OTHERS</label>
						</div>
					</div>		
					<div class="col-sm-12 p-0 d-sm-flex m-0 inp-div">
						<p class="col-sm-2 p-0 m-0 pl-sm-2 my-auto">FATHER'S NAME :</p>
						<input type="text" name="relName" autocomplete="off" required class="col-sm-10 my-auto  bg-inp"  id="relName" />
					</div>
					<div class="col-sm-12 p-0 d-sm-flex inp-div">
						<div class="col-sm-6 p-0 d-sm-flex m-0 ">
							<p class="m-0 p-0 col-sm-4 pl-sm-2 my-auto">PHONE NUMBER :</p>
							<input type="text" name="relPhone" id="relPhone" autocomplete="off" required class="col-sm-8 my-auto   bg-inp" />
						</div>
						<div class="col-sm-6 p-0 d-sm-flex m-0">
							<p class="m-0 p-0 col-sm-4 pl-sm-3 my-auto">OCCUPATION :</p>
							<input type="text" name="occupation" id="occupation" autocomplete="off" required class="col-sm-8 my-auto bg-inp" />
						</div>
					</div>
					<div class="col-sm-12 p-0 d-sm-flex inp-div">
						<div class="col-sm-6 p-0 d-sm-flex m-0 ">
							<p class="m-0 p-0 col-sm-4 pl-sm-1 my-auto">ANNUAL INCOME :</p>
							<input type="text" name="income" id="income" autocomplete="off" required class="col-sm-8 my-auto bg-inp" />
						</div>
						<div class="col-sm-6 p-0 d-sm-flex m-0">
							<p class="m-0 p-0 col-sm-4 pl-sm-3 my-auto">INCOME PROOF :</p>
							<input type="file" name="incomeProof" id="incomeProof" autocomplete="off" required class="col-sm-8 my-auto bg-inp" />
						</div>
					</div>
				</div>
				<h5 class="side-heading p-0 m-0 mt-3">EDUCATION DETAILS</h5>
				<div class="row p-0 m-0 mt-1">
					<div class="col-sm-12 p-0 d-sm-flex mt-2">
						<table class="table">
							<thead>
								<tr class="">
									<th scope="col">COURSE NAME</th>
									<th scope="col">SPECIALIZATION</th>
									<th scope="col">CGPA(OR %)</th>
									<th scope="col">YEAR OF PASS</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td data-label="COURSE NAME"><input type="text" name="courseName1" id="cname1"></td>
									<td data-label="SPECIALIZATION"><input type="text" name="specialization1" id="spec1"></td>
									<td data-label="CGPA / %"><input type="text" name="cgpa1" id="cgpa1"></td>
									<td data-label="YEAR OF PASS"><input type="text" name="passYear1" id="passYear1"></td>
								</tr>
								<tr>
									<td data-label="COURSE NAME"><input type="text" name="courseName2" id="cname2"></td>
									<td data-label="SPECIALIZATION"><input type="text" name="specialization2" id="spec2"></td>
									<td data-label="CGPA / %"><input type="text" name="cgpa2" id="cgpa2"></td>
									<td data-label="YEAR OF PASS"><input type="text" name="passYear2" id="passYear2"></td>
								</tr>
								<tr>
									<td data-label="COURSE NAME"><input type="text" name="courseName3" id="cname3"></td>
									<td data-label="SPECIALIZATION"><input type="text" name="specialization3" id="spec3"></td>
									<td data-label="CGPA / %"><input type="text" name="cgpa3" id="cgpa3"></td>
									<td data-label="YEAR OF PASS"><input type="text" name="passYear3" id="passYear3"></td>
								</tr>
								<tr>
									<td data-label="COURSE NAME"><input type="text" name="courseName4" id="cname4"></td>
									<td data-label="SPECIALIZATION"><input type="text" name="specialization4" id="spec4"></td>
									<td data-label="CGPA / %"><input type="text" name="cgpa4" id="cgpa4"></td>
									<td data-label="YEAR OF PASS"><input type="text" name="passYear4" id="passYear4"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="my-3">
					<div class="d-flex">
						<input type="checkbox" id="" class="my-auto">
						<label class="my-auto" for="">I have Smartphone/Laptop with internet facility</label>
					</div>
					<div class="d-flex">
						<input type="checkbox" id="" class="my-auto">
						<label class="my-auto" for=""> I undergone the bank coaching earlier</label>
					</div>
					<div class="d-flex">
						<input type="checkbox" id="" class="my-auto">
						<label class="my-auto" for="">I appeared for the Bank exam earlier</label>
					</div>
					<div class="d-flex">
						<input type="checkbox" id="" class="my-auto">
						<label class="my-auto" for="">Whether the applicant is employed, if so furnish company's name, salary & since how long working</label>
					</div>
					<div class=" ">
						<p>Why do you need financial support from Andhra Pradesh Nayeebrahmin Employees Association for the coaching?</p>
						<textarea class="mx-auto d-block"></textarea>
					</div>

					<div class="d-flex">
						<p class="my-auto mx-5">Remarks</p>
						<textarea class="mx-5 my-2"></textarea>
					</div>
					<div class="d-flex">
						<input type="checkbox" id="" class="my-auto">
						<label class="my-auto" for="">I gone through the guidelines of Association.</label>
					</div>						
				</div>
				<button type="submit" class="mx-auto">SUBMIT</button>
			</form>
		</div>
	</section>
</body>
	<script src="assets/bootstrap/js/jquery.js"></script>
	<script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>
	<script src="javascript.js"></script>
</html>