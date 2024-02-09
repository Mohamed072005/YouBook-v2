@extends('layout')
@section('title', 'edit book info')

@section('content')
<main class="d-flex flex-column align-items-center">
        <div class="d-flex flex-column align-items-center mt-5">
            <h3 class="text-success">Update Book Info</h3>
            <form method ="post" action = "{{Route('update.book', $book->id)}}" class="row w-75 justify-content-center g-3 mt-2">
                @csrf
                @method('PUT')
                <div class="col-md-8">
                    <input type="hidden" class="form-control" value="{{$book->description}}" name="title" id="hidden_description">
                </div>
                <div class="col-md-8">
                    <label for="" class="form-label">Title</label>
                    <input type="text" class="form-control" value="{{$book->title}}" name="title" id="">
                </div>
                <div class="col-md-8">
                    <label for="" class="form-label">Author</label>
                    <input type="text" class="form-control" value="{{$book->author}}" name="author" id="">
                </div>
                <div class="col-md-8">
                    <label for="" class="d-block form-label">Description</label>
                    <textarea type="text" class="form-control" name="description" id="description"></textarea>
                </div>
                <div class="col-md-8 input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                    <input type="number" min = "0" name = "price" value="{{$book->prix}}" class="form-control" aria-label="Amount (to the nearest dollar)">
                </div>
                <div class="col-12 text-center mb-4">
                    <button class="btn btn-outline-primary" type="submit">Add</button>
                </div>
            </form>
        </div>
        
    </main>
    <script>
        let hidden_description = document.getElementById('hidden_description').value;
        let description = document.getElementById('description');
        description.innerText = hidden_description;
    </script>
@endsection