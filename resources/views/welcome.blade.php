<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">これは食べログっぽいアプリです</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
				<div>
					<a href="/user/signup">ユーザー登録</a>
				</div>

				<div>
					<form action="/user/login" method="POST">
						ユーザー登録済みの方はこちら<br>
						<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
						<input name="name" style="width: 200px;" maxlength="25" placeholder="ユーザー名" required></input><br>
						<button>ログイン</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
