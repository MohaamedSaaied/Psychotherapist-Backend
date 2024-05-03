<!DOCTYPE html>
<html>
<h1>Sign Up</h1>
<form action = "/user_store" method = "post" enctype="multipart/form-data">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<label>name</label>
<input name='P_Name' type="string" />
<br><br><br>
<label>gender</label>
<input name='Gender' type="string" />
<br><br><br/>
<label>birthdate</label>
<input name='B_Date' type="string" />
<br><br><br>
<label>username</label>
<input name='username' type="string" />
<br><br><br/>
<label>password</label>
<input name='password' type="string" />
<br><br><br/>
<input type="file" name="path" style="width:200px; height:50px;">
<br><br><br/>
<input type="submit"  value="Sign Up">
</html>