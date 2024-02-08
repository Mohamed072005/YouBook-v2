@extends('authLayout')
@section('auth_content')
<main class="d-flex flex-column align-items-center">
        <div class="d-flex flex-column align-items-center mt-5">
            <h3 class="text-success">Welcome To YouBook</h3>
            <form method ="POST" action="{{ route('userLogin') }}"  class="row w-75 justify-content-center g-3 mt-2">
                @csrf
                <div class="col-md-8">
                    <label for="" class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        <input type="email" class="form-control" name="email" id="" aria-describedby="inputGroupPrepend2">
                    </div>
                </div>
                <div class="col-md-8">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="">
                </div>
                <div class="col-12 text-center mb-4">
                    <button class="btn btn-outline-primary" type="submit">Log in</button>
                </div>
                <div class="col-12 text-center">
                    <span class="text-light">Need an account? <a class="link-color" href="http://localhost/YouBook-v2/public/to.register/">sing in</a></span>
                </div>
            </form>
        </div>
    </main>
@endsection