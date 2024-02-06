@extends('authLayout')
@section('auth_content')
<main class="d-flex flex-column align-items-center">
        <div class="d-flex flex-column align-items-center mt-5">
            <h3 class="text-success">Welcome To YouBook</h3>
            <form method ="POST" action=""  class="row w-75 justify-content-center g-3 mt-2">
                @csrf
                <div class="col-md-8">
                    <label for="validationDefaultUsername" class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        <input type="email" class="form-control" name="email" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2">
                    </div>
                </div>
                <div class="col-md-8">
                    <label for="validationDefault03" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="validationDefault03">
                </div>
                <div class="col-12 text-center mb-4">
                    <button class="btn btn-outline-primary" name="submit" value="login" type="submit">Log in</button>
                </div>
                <div class="col-12 text-center">
                    <span class="text-light">Need an account? <a class="link-color" href="http://localhost/YouBook-v2/public/register/">sing in</a></span>
                </div>
            </form>
        </div>
    </main>
@endsection