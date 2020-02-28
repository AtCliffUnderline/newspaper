<html>
<body>
<div class="container">
	@foreach ($newsList as $news)
		{{ $news->heading }}
	@endforeach
</div>

{{ $newsList->links() }}
</body>
</html>
