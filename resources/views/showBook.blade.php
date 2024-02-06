@extends('layout')
@section('title', 'Book details')
@section('content')
<div class="container">
    <div class="row justify-content-around">
        <div class="col-lg-8 mt-3 order-lg-1">
            <div class="row d-flex justify-content-between">
                <h1>{{ $book->title }}</h1>
            </div>
            <hr>
            <div class="d-flex justify-content-center">
                <img src="" class="img-fluid image d-lg-none" alt="book_cover">
            </div>
            <p class="text-break">{!! nl2br("$book->description") !!}</p>
        </div>
        <div class="col-lg-4 mt-3 order-lg-2 mt-5">
            <img src="" class="img-fluid image d-none d-lg-block"
                alt="book_cover">
        </div>
        <div class="col-lg-4 mt-3 order-lg-2 mt-5">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Reservation
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Reservation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="{{ route('reservation') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $book->id }}" name="book_id">
                        <div>
                            <label for="reservationDate" class="form-label">Start Date:</label>
                            <input type="date" class="form-control" name="date_start" id="reservationDate">
                        </div>
                        <div>
                            <label for="reservationDate" class="form-label">End Date:</label>
                            <input type="date" class="form-control" name="date_fin" id="reservationDate">
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Make Reservation</button>
                        </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    
                  </div>
                </div>
              </div>
            </div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
@endsection