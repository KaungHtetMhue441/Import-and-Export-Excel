@extends('layout.app')
@section('title','Upload Photo')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h3>
                        Upload Your GirlFriend photo
                    </h3>
                </div>
                <div class="card-body">
                    <div class="form-floating mb-3">
                        <input type="description" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Say someting for your photo</label>
                      </div>
                      <div class="">
                        <input type="file" name="file" id="file">
                        <label for="file">Upload Your GirlFriend photo</label>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


