<? php include('functions.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Crop Input Details Entry</title>
	<link rel="stylesheet" href="style.css">
	<style type="text/css">
		.crop{
				margin: 10px 0px 10px 0px;
				word-wrap: 
		}
		.crop input{
		height: 30px;
		width: 93%;
		padding: 5px 10px;
		font-size: 16px;
		border-radius: 5px;
		border: 1px solid gray;
		}
	</style>
</head>
<body>
<div class="header">
	<h2>Crop Details Input Entry</h2>
</div>
<form method="post" action="cropinput.php">
	
	<div class="crop">
		<label>Full Name</label>
		<input type="text" name="fullname" required placeholder="Enter your name as in Aadhaar" value="" size="30" maxlength="30">
	</div>
		<br>
	<div class="crop">
		<label for="phone">Mobile:</label>

		<input type="tel" id="phone" size="10" name="mobile" pattern="^\d{10}$" maxlength="10" placeholder="Enter your mobile number" 
		minlength="10" required title="Numbers are only allowed!!!">
	</div>
		<span class="note" style="font-size: 15px;">(Format: 123-456-7890)</span>


	<div class="crop">	
		<label>Age</label>
		<input type="number" size="6" required name="age" min="18" max="99" value="" placeholder="Enter your age"><br>
	</div>
	
	<label style="font-size: 20px;">Gender:</label>&emsp;
		<input type="radio" name="gender" value="male" checked="1">Male</input>&emsp;
		<input type="radio" name="gender" value="female">Female</input>
	
		<br>
	<div class="crop">
	<label>Season:</label>&emsp;
    <select name="season" style=" font-size: 16px;">
      <option value="nil">Select season</option>
      <option value="kharif">Kharif</option>
      <option value="rabi">Rabi</option>
    </select>
	</div>
    <div class="crop">
    <label>District: </label>&emsp;
    <select name="district" id="district" style=" font-size: 16px;">
    	<option value="nil">Select your district</option>
    	<option value="vskp">Visakhapatnam</option>
    	<option value="ant">Ananthapur</option>
    	<option value="krs">Krishna</option>
    	<option value="srk">Srikakulam</option>
    	<option value="vgn">Vizianagaram</option>
 
		<br><br>
	</select>
	</div>
	<label>Mandal</label>&emsp;
	<select name="mandal" id="mandal" style="font-size: 16px;" >
		   <option value="nil">Select your mandal</option>

		<? php
		if($district=="vskp") {
			?>
		
		<option value="kovvada">Kovvada</option>
		<option value="nakkapalle">Nakkapalle</option>
		<option value="gidijala">Gidijala</option>
	<option value="vepagunta">Vepagunta</option>
	<? php } 
	else if($district=="krs") {
			?>
		
		<option value="chilukuru">Chilukuru</option>
		<option value="devarakota">Devarakota</option>
		<option value="alluru">Alluru</option>
	<option value="nunna">Nunna</option>
	<? php } 
	else if($district=="srk") {
			?>
		
		<option value="palasa">Palasa</option>
		<option value="rajam">Rajam</option>
		<option value="seethapuram">Seethapuram</option>
	<option value="vatsavalasa">Vatsavalasa</option>
	<? php } 
	else if($district=="ant") {
			?>
		
		<option value="tadpatri">Tadpatri</option>
		<option value="uravakonda">Uravakonda</option>
		<option value="mudigubba">Mudigubba</option>
	<option value="madakasira">Madakasira</option>
	<? php } 
	else if($district=="vgn") {
			?>
		
		<option value="ippalavalasa">Ippalavalasa</option>
		<option value="gunanupuram">Gunanupuram</option>
		<option value="gantyada">Gantyada</option>
	<option value="devupalli">Devupalli</option>
	<? php } ?>

	</select>

	





	<div class="crop">
   		<label>ZIP</label> <input type="text" name="zip" value="" placeholder="Enter your pincode" >
	</div><br>
	<br>

   
	<div class="input-group">
		<button type="submit" class="btn" name="submit_btn">Submit Details</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
</body>

</html>


