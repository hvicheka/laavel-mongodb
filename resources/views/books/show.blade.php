@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ __('Book') }}
                        <a href="{{ route('books.index') }}" class="btn btn-primary btn-sm float-end">All Books</a>
                    </div>

                    <div class="card-body">
                        <h3>{{ $book->name }}</h3>
                        <p>{!! $book->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
