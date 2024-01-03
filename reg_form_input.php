<!DOCTYPE HTML>
<html>
<head>
<body>
<form action="reg_form_output.php" method="get">
<table cellpadding="10" cellspacing="10" border="5">
<tr>
<td><label>FRIST NAME :</label></td>
<td><input type="text" name="fnm" id="fnm"></td>
</tr>

<tr>
<td><label>LAST NAME :</label></td>
<td><input type="text" name="lnm" id="lnm"></td>
</tr>

<tr>
<td><label>ADDRESS :</label></td>
<td><textarea name="add" id="add"></textarea></td>
</tr>

<tr>
<td><label>CITY :</label></td>
<td><input type="text" name="city" id="city"></td>
</tr>

<tr>
<td><label>STATE :</label></td>
<td><input type="text" name="state" id="state"></td>
</tr>

<tr>
<td><label>MOBILE NO. :</label></td>
<td><input type="text" pattern="[0-9]{10}" name="mob_no" id="mob_no"></td>
</tr>

<tr>
<td><label>SEMESTER :</label></td>
<td><input type="text" name="sem" id="sem"></td>
</tr>

<tr>
<td><label>DIVISION :</label></td>
<td><input type="text" name="div" id="div"></td>
</tr>

<tr colspan="2">
<td><input type="submit" name="submit" id="submit"></td>
</tr>

</table>
</form>
</body>
</head>
</html>