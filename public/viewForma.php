<?php 
$msg=isset($msg)?$msg:"";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<?php 
echo $msg;
?>
<form action="" method="post">
ID: <br>
<input type="text" name="id" value><br>
Ime: <br>
<input type="text" name="ime"><br>
Prezime: <br>
<input type="text" name="prezime"><br>
Indeks: <br>
<input type="text" name="indeks"><br>
<input type="submit" name="action" value="Update">
</form>
</body>
</html>