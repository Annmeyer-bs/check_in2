<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/style.css" rel="stylesheet">
	<title>Document</title>
</head>
<body>
<div class="container">
	<?php	require	"block/header.php";	?>
	<div class="container__form">
	<form action="#"	method="post"	enctype="multipart/form-data">
	<p>ФИО</p>
        <input class="input"  name="full_name"    type="text" >
        <p>E-mail</p>
        <input class="input"  name="email" type="email" ><br>
		<p>Телефон</p>
        <div class="cont__bt"><input class="itel"  name="tell"    type="tell" >
        <button type="submit">+</button></div></br>
		<div class="cont__bt"><input class="itel"  name="tell2"    type="tell" >
        <button	class="del" type="submit">удалить</button></div>
		<p>Возраст</p>
        <input class="input"  name="age" type="text" ><br>
		<p>Фотография</p>
		<input class="ifile" id="ifile" name="photo" type="file" ><br>
		<label	class="co" for="ifile"></label>
  

		<p>Резюме</p>
		<textarea name="" id="" ></textarea>
	
	</form>
	</div>
	<?php	require	"block/footer.php";	?>
	</div>
</body>
</html>