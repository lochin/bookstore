@extends('book.default')

@section('title', 'All books')

@section('content')
	<div class="container">
		<h1 class="display-1 text-center">{{ $book->title }}</h1>
		<p class="lead">{!! nl2br($book->description) !!}</p>
		<a href="{{ route('books.index') }}">All Books</a>
	</div>
@endsection