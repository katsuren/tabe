<?php
	$shops = $shops->toArray();
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>お店一覧</title>
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
		<h1>お店一覧</h1>
		@if (empty($shops))
			現在登録されているお店はありません
		@else
			<table border="solid" style="width: 100%;">
				<tr>
					<th>ID</th>
					<th>名前</th>
					<th>カテゴリ</th>
					<th>詳細</th>
				</tr>
				@foreach ($shops as $shop)
				<tr>
					<td>{{ $shop["id"] }}</td>
					<td>{{ $shop["name"] }}</td>
					<td>{{ $shop["category"] }}</td>
					<td><a href="/shop/show/{{ $shop["id"] }}">詳細</a></td>
				</tr>
				@endforeach
			</table>
		@endif
	</div>
</body>
</html>
