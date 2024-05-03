<!DOCTYPE html>
<html>
<h1>Admin login</h1>
<form action = "/Alogin" method = "post" enctype="multipart/form-data">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

<label>username</label>
<input name='username' type="string" />
<br><br><br/>
<label>password</label>
<input name='password' type="string" />
<br><br><br/>

<input type="submit"  value="login">
</html>