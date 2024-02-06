@extends('layout')
@section('title', 'create book')
@section('content')

<main class="d-flex flex-column align-items-center">
        <div class="d-flex flex-column align-items-center mt-5">
            <h3 class="text-success">Welcome To YouBook</h3>
            <form method ="post" action = "{{route('store.book')}}" enctype="multipart/form-data"  class="row w-75 justify-content-center g-3 mt-2">
                @csrf
                <div class="col-md-8">
                    <label for="" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="" >
                </div>
                <div class="col-md-8">
                    <label for="" class="form-label">Author</label>
                    <input type="text" class="form-control" name="author" id="">
                </div>
                <div class="col-md-8">
                    <label for="" class="d-block form-label">Description</label>
                    <textarea type="text" class="form-control" name="description" id=""></textarea>
                </div>
                <div class="col-md-8 input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                    <input type="number" min = "0" name = "price" class="form-control" aria-label="Amount (to the nearest dollar)">
                </div>
                <div class="col-12 text-center mb-4">
                    <button class="btn btn-outline-primary" type="submit">Add</button>
                </div>
            </form>
        </div>
        
    </main>

@endsection