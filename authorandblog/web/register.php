<!DOCTYPE html>
<html>
<body>
<center>
<h1>Registration Form</h1><br/><br/>
<form action="index.php?action=registerintodatabase" method="POST">
<table cellspacing=10>
<tr><td>Firstname:</td><td> <input type="text" name="firstname" required></td></tr>
<tr><td>Lastname: </td><td><input type="text" name="lastname" required></td></tr>
<tr><td>Email:</td><td> <input type="email" name="email" required></td></tr>
<tr><td>Password:</td><td> <input type="password" name="password" required></td></tr>
<tr><td>DOB:</td><td> <input type="datetime-local" name="dob" required></td></tr>
<tr><td>Gender:</td><td> <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other<br/><br/>
  <tr><td>Phoneno:</td><td> <input type="tel" name="phoneno" pattern="[0-9]{10}" required></td></tr>
  <tr><td colspan=2><input type ="checkbox" name="agree" required>I agree that above data is correct</td></tr>
  <tr><td align=center><input type="submit" value="Register"></td>
  <td align=center><input type="reset" value="Reset"></td></tr>
</table>
</form>
</center>
</body>
</html>