<!DOCTYPE html>
<html>
<h1>Sign Up</h1>
<form action = "/un_doctor_store" method = "post" enctype="multipart/form-data">
    @csrf
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<label>name</label>
<input name='D_Name' type="string" />
<br><br><br>
<label>birthdate</label>
<input name='B_Date' type="string" />
<br><br><br/>
<label>field</label>
<input name='Field' type="string" />
<br><br><br>
<label>exp years</label>
<input name='EXP_Years' type="string" />
<br><br><br/>
<label>loacation</label>
<input name='Location' type="string" />
<br><br><br/>
<label>phone</label>
<input name='Phone' type="string" />
<br><br><br/>
<label>username</label>
<input name='username' type="string" />
<br><br><br/>
<label>password</label>
<input name='password' type="string" />
<br><br><br/>
<input type="file" name="path" style="width:200px; height:50px;">
<br><br><br/>
<input type="submit"  value="Sign Up">
</form>

</html>