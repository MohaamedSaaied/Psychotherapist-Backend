<!DOCTYPE html>
<html>
<h1>Doctor login</h1>
<form action = "/user_check" method = "post" enctype="multipart/form-data">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

<label>Doctor ID</label>
<input name='P_ID' type="integer" />
<br><br><br/>


<input type="submit"  value="login">
</html>