<html>
<head>
	<meta charset="UTF-8">
	<title>ユーザー登録</title>
</head>
<body>
	<form method="POST">
		ユーザー名を入力してください<br>
		<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
		<input name="name" style="width: 200px;"></input><br>
		<button>登録</button>
	</form>
</body>
</html>
