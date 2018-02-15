<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="/doLoginAdmin" method="post">
	{{csrf_field()}}
	<label>Username</label>
	<input type="text" name="username">
	<label>Password</label>
	<input type="password" name="password">

	<button type="submit">Log in</button>
</form>
</body>
</html>