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
                        <form action="{{ route('books.store') }}" method="POST">
                            @csrf
                            @include('books.form')
                            <button class="btn btn-success" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
