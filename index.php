 
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$out="Invalid info!";
	$name = $_POST["name"];
	$email = $_POST["email"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$confirmPassword=$_POST["confirmPassword"];
	$dateOfBirth = $_POST["dateOfBirth"];
	$gender = $_POST["gender"];
	$maritalStatus = $_POST["maritalStatus"];
	$address=$_POST["address"];
	$city = $_POST["city"];
	$postalCode = $_POST["postalCode"];
	$homePhone = $_POST["homePhone"];
	$mobilePhone = $_POST["mobilePhone"];
	$creditCardNumber=$_POST["cardNumber"];
	$expiryDate = $_POST["expiryDate"];
	$monthlySalary=$_POST["monthlySalary"];
	$url=$_POST["url"];
	$gpa=$_POST["gpa"];
	if(preg_match('/^[a-zA-Z]{2,}$/i',$name))
	if(preg_match('/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]{1,3}/i',$email))
	if(preg_match('/^.{5,}$/i',$username))
	if(preg_match('/^.{8,}$/i',$password))
	if($password=$confirmPassword)
	if(preg_match('/\d{2}\.\d{2}\.\d{4}/i',$dateOfBirth))
	if(preg_match('/^(Male|Female)$/i',$gender))
	if(preg_match('/^(Single|Married|Divorced|Widowed)$/i',$maritalStatus))
	if(preg_match('/^\d{6}$/i',$postalCode))
	if(preg_match('/^((\d{2}\s\d{7})|(\d{9}))$/i',$homePhone))
	if(preg_match('/^((\d{2}\s\d{7})|(\d{9}))$/i',$mobilePhone))
	if(preg_match('/^\d{16}$/i',$creditCardNumber))
	if(preg_match('/^\d{2}\.\d{2}\.\d{4}$/i',$expiryDate))
	if(preg_match('/^(UZS)\s\d+\,\d+\.\d+$/i',$monthlySalary))
	if(preg_match('/^https?:\/\/[a-z0-9]+\.[a-zA-Z]{1,3}$/i',$url))
	if(preg_match('/^(([0-3]{1}\.([0-9]{1,2}))|([4]{1}\.[0-4]{1}[0-9]{1})|^4.5$)$/i',$gpa))
		$out="Success!";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>

	

		<h2>Please, fill below fields correctly</h2>
			<hr />
		<form action="index.php" method="POST">
		<dl>
			<dt>Name</dt>
			<dd>
				<input type="text" name="name" required>
			</dd>
			<dt>Email</dt>
			<dd>
				<input type="text" name="email" required>
			</dd>
			<dt>Username</dt>
			<dd>
				<input type="text" name="username" required>
			</dd>
			<dt>Password</dt>
			<dd>
				<input type="password" name="password" required>
			</dd>
			<dt>Confirm Password</dt>
			<dd>
				<input type="password" name="confirmPassword" required>
			</dd>
			<dt>Date of Birth</dt>
			<dd>
				<input type="text" name="dateOfBirth" required>
			</dd>
			<dt>Gender</dt>
			<dd>
				<input type="text" name="gender" required>
			</dd>
			<dt>Marital Status</dt>
			<dd>
				<input type="text" name="maritalStatus" required>
			</dd>
			<dt>Address</dt>
			<dd>
				<input type="text" name="address" required>
			</dd>
			<dt>City</dt>
			<dd>
				<input type="text" name="city" required>
			</dd>
			<dt>Postal Code</dt>
			<dd>
				<input type="text" name="postalCode" required>
			</dd>
			<dt>Home Phone</dt>
			<dd>
				<input type="text" name="homePhone" required>
			</dd>
			<dt>Mobile Phone</dt>
			<dd>
				<input type="text" name="mobilePhone" required>
			</dd>
			<dt>Credit Card Number</dt>
			<dd>
				<input type="text" name="cardNumber" required>
			</dd>
			<dt>Credit Card Expiry Date</dt>
			<dd>
				<input type="text" name="expiryDate" required>
			</dd><dt>Monthly Salary</dt>
			<dd>
				<input type="text" name="monthlySalary" required>
			</dd>
			<dt>Web Site URL</dt>
			<dd>
				<input type="text" name="url" required>
			</dd><dt>Overall GPA</dt>
			<dd>
				<input type="text" name="gpa" required>
			</dd>

			<!-- Write other fiels similar to Name as specified in lab6.pdf -->
		</dl>

		<div>
			Register
			<input type="submit" value="SEND">
		</div>
		</form>
		<?php if($_SERVER["REQUEST_METHOD"]=="POST"){?>
		<h1><?php echo $out;?></h1>
		<?php } ?>
	</body>
</html> 