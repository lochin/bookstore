@extends('book.default')

@section('title', 'All books')

@section('content')
	<div class="container">
		<h1 class="display-1 text-center">All Books</h1>
		
		@if (count($books) > 0)
			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Title</th>
						<th scope="col">Description</th>
					</tr>
				</thead>
				<tbody>
					@foreach($books as $book)
						<tr>
							<th scope="row">{{ $loop->iteration }}</th>
							<td>{{ $book->title }}</td>
							<td class="text-justify">
								{{ Str::limit($book->description, 50) }} 
								<a href="{{ route('books.show', ['book' => $book->id]) }}">See More</a>
							</td>
						</tr>					
					@endforeach	
				</tbody>
			</table>
		@else
			<div class="alert alert-info">No books</div>
		@endif		
		<a href="{{ route('welcome') }}">Home page</a>
	</div>
@endsection