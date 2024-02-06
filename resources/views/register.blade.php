@extends('authLayout')
@section('title', 'register')
@section('auth_content')

<main class="d-flex flex-column align-items-center">
        <div class="d-flex flex-column align-items-center mt-5">
            <h3 class="text-success">Welcome To YouBook</h3>
            <form method ="POST" action="" class="row w-50 justify-content-center g-3 mt-2">
                @csrf
                <div class="col-md-4">
                    <label for="validationDefault01" class="form-label">First name</label>
                    <input type="text" class="form-control" name="first_name" id="validationDefault01">
                </div>
                
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Last name</label>
                    <input type="text" class="form-control" name="last_name" id="validationDefault02">
                </div>
                <div class="col-md-8">
                    <label for="validationDefaultUsername" class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        <input type="" class="form-control" name="email" id="" aria-describedby="inputGroupPrepend2" >
                    </div>
                </div>
                
                <div class="col-md-8">
                    <label for="validationDefault03" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="validationDefault03">
                </div>
                <div class="col-md-8">
                    <label for="validationDefault03" class="form-label">Confirme Password</label>
                    <input type="password" class="form-control" name="cpassword" id="validationDefault04">
                </div>
                
                <div class="col-12 text-center mb-4">
                    <button class="btn btn-outline-primary" name="submit" value="regester" type="submit">Sing in</button>
                </div>
                <div class="col-12 text-center">
                    <span class = "text-light">Already have an account? <a class="link-color" href="http://localhost/YouBook-v2/public/login/">log in</a></span>
                </div>
            </form>
        </div>
    </main>