@extends('layout')
@section('title', 'display book')
@section('content')
<main class="d-flex flex-column align-items-center">
    <div class="row mt-5 w-75">
        @foreach($book as $bookInfo)
        <div class="col-4 mt-3">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." class="img-fluid" alt="Book Image">
                <div class="card-body">
                    <h5 class="card-title">{{$bookInfo->title}}</h5>
                    <h6 class="card-text">{{$bookInfo->author}}</h6>
                    <p class="card-text">{{$bookInfo->description}}.</p>
                    <h6 class="card-text">{{$bookInfo->prix}}$</h6>
                    <form action="{{Route('delete.book', $bookInfo->id)}}" method="get">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger">Delete</button>
                    </form>
                    <form class="mt-2" action="{{Route('edit.book', $bookInfo->id)}}" method="get">
                        @csrf
                        @method('Edit')
                        <button class="btn btn-outline-warning">Update</button>
                    </form>
                    <form class="mt-2" action="{{Route('show.book.details', $bookInfo->id)}}" method="get">
                        <button class="btn btn-outline-primary">View</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
</main>
@endsection