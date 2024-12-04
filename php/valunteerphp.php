<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <title>OldCare</title>
		
		<style>
			.box{
				position: relative;
			}
			
			img{
				width: 100%;
				height: 600px;
			}
			
			.inbox{
				width: 100%;
				height: 600px;
				direction: rtl;
				text-align: center;
				color: white;
				font-size: 42px;
				font-weight: bold;
				position: absolute;
				top: 200px;
			}
			
			.text{
				width: 36%;
				background-color: rgba(249,178,24,0.8);
				border-radius: 20px;
				padding: 50px;
				margin: 0px auto;
			}
		</style>
		
	</head>
	<body>
		
		<section class="box">
			<img src="../img/volunteer.jpg" alt="">
			<div class="inbox">
				<div class="text">
					<?php
						$link = mysqli_connect('localhost','root','','oldcare');
						if(mysqli_connect_errno()){
							exit("اتصال به پایگاه داده انجام نشد !");
						}

						$name = $_POST['name'];
						$email = $_POST['email'];
						$result = $_POST['result'];

					//	echo("name = ".$name);
					//	echo("email = ".$email);
					//	echo("price = ".$price);
					//

						$query = "INSERT INTO volunteer(id,name,email,result) VALUES('','$name','$email','$result')";

						if(mysqli_query($link,$query) === true){
							echo "درخواست شما با موفقیت ثبت شد !";
						}
						else {
							echo "درخواست شما ثبت نشد!";

						}

						mysqli_close($link);
					?>
				</div>
			</div>
		</section>
		
		
		
		
		
	</body>
</html>


	










<!--
//	$sql="CREATE DATABASE oldcare";
//	if(mysqli_query($conn,$sql)){
//		echo"database created successfully!";
//	}
//	else{
//		echo"error creating database: " . mysqli_error($conn);
//	}
//
//	
//	mysqli_query($link,$query);
//	$query="CREATE TABLE donate(name varchar(20),email varchar(30),price int(10))";
//	if(mysqli_query($link,$query)){
//		echo "Table create successfully!";
//	}
//	else{
//		echo"error!";
//	}
-->


        

	