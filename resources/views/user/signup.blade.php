<html>
<head>
	<meta charset="UTF-8">
	<title>ユーザー登録</title>
</head>
<body>
	@if (isset($error))
		<div style="color: #FF0000;">
		{{ $error }}
		</div>
	@endif
	<form method="POST">
		ユーザー名を入力してください<br>
		<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
		<input name="name" style="width: 200px;" maxlength="25" required></input><br>
		<button>登録</button>
	</form>
</body>
</html>
