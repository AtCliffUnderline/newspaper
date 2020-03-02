<html>
<head>
	<title>Newspaper</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700&display=swap" rel="stylesheet">
	<link href="/css/app.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
	<h1>News for today</h1>
	<div class="news">
	@foreach ($newsList as $news)
		<h2>{{ $news->heading }}</h2>
		<h3>Created at {{ $news->created_at }}</h3>

		<p>{{ $news->text }}</p>
	@endforeach
	</div>
</div>

{{ $newsList->links() }}
</body>
</html>
