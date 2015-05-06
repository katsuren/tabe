<html>
<head>
	<meta charset="UTF-8">
	<title>お店登録</title>
	<style>
		.container {
			width: 700px;
			text-align: center;
			margin: 20px auto;
		};
	</style>
</head>
<body>
	<div class="container">
		<h1>お店登録</h1>
		@if (isset($error))
			<div style="color: #FF0000;">
				{{ $error }}
			</div>
		@endif
		<form method="POST">
			お店の情報を入力してください<br>
			<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
			名前: <input type="text" name="name" style="width: 200px;" maxlength="100" required></input><br>
			緯度: <input type="number" name="lat" style="width: 200px;" required></input><br>
			経度: <input type="number" name="lng" style="width: 200px;" required></input><br>
			カテゴリ: <input type="text" name="category" style="width: 200px;" maxlength="100" ></input><br>
			<input type="hidden" name="createdBy" value="{{ $userId }}"></input><br>
			<button>登録</button>
		</form>
	</div>
</body>
</html>
