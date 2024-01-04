<!DOCTYPE html>
<html>
<head>
   <style>
     input
	 {
		 border-width:2px;
		 border-color:brown;
	 }
	 textarea
	 {
		 border-width:2px;
		 
	 }
	 .eng
	 {
		 border:2px solid;
		 border-color:brown;
	 }
	 .submit
	 {
		 border-radius:10px;
	 }
	</style>
</head>
<body align="center">

<table cellspacing="3" cellpadding="3" align="center" style="background-color:#f3e5dc;">
<form action="output.php" method="post">
<th colspan="2"><h1>Registration Form</h1></th>
<tr>
<td><label>Username:</label></td>
<td><input type="text" name="unm" id="unm"></td>
</tr>
<tr>
<td><label>Password:</label></td>
<td><input type="password" name="psw"></td>
</tr>
<tr>
<td><label>Name:</label></td>
<td><input type="text" name="name"></td>
</tr>
<tr>
<td><label>Address:</label></td>
<td><input type="text" name="add"></td>
</tr>
<tr>
<td><label>Country:</label></td>
<td><select name="country">
    <option value="">(Please select a country)</option>
	<option value="India">India</option>
	<option value="U.K.">U.K.</option>
	<option value="U.S.A.">U.S.A.</option>
	</select></td>
</tr>
<tr>
<td>Zip Code:</td>
<td><input type="text" name="zip" pattern="[0-9]{6}" max="6"}</td>
</tr>
<tr>
<td><label>Email:</label></td>
<td><input type="email" name="email" id="email"></td>
</tr>
<tr>
<td><label>Sex:</label></td>
<td class="gen"><input type="radio" name="gender" value="Male" checked><label class="eng">Male</label>
    <input type="radio" name="gender" value="Female"><label class="eng">Female</label><</td>
</tr>
<tr>
<td><label>Language</label></td>
<td><input type="checkbox" name="eng" value="English" checked><label class="eng">English</label>
    <input type="checkbox" name="noneng" value="Non-English" ><label class="eng">Non-English</label></td>
</tr>
<tr>
<td><label>About:</label></td>
<td><textarea name="about" rows="7" cols="30"></textarea>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="submit" name="submit" class="submit">
</tr>
</form>
</table>
</body>
</html>