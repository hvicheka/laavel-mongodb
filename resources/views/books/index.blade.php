@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ __('Book') }}
                        <a href="{{ route('books.create') }}" class="btn btn-primary btn-sm float-end">Add Book</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th width="280px">Action</th>
                            </tr>
                            @forelse($books as $book)
                                <tr>
                                    <td>{{ ++$loop->index }}</td>
                                    <td>{{ $book->name }}</td>
                                    <td>{{ $book->description }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="{{ route('books.show', $book->_id) }}">Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('books.edit', $book->_id) }}">Edit</a>
                                        <a class="btn btn-sm btn-danger" onclick="
                                            event.preventDefault();
                                            if(confirm('Are you sure')){
                                            document.getElementById('delete-{{$book->_id}}').submit()
                                            }
                                            ">Delete</a>
                                        <form action="{{ route('books.destroy', $book->_id) }}"
                                              id="delete-{{$book->_id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">No Data Found</td>
                                </tr>
                            @endforelse

                        </table>

                        {{ $books->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
