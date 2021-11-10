@extends('admin.layouts.app')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('users.store') }}" method="POST">
  @csrf
  @method('post')
  <div class="row ">
    <h1 class="h3 mb-3 fw-normal mt-3"><label for="">user</label></h1>
  </div>
  <div class="form-floating mt-2 col col-md-4">
      <input type="text" name="name" class="form-control" id="floatingInput" placeholder="adress">
      <label for="floatingInput"> Name</label>
    </div>
   <div class="form-floating mt-2 col col-md-4">
      <input type="text" name="user_type" class="form-control" id="floatingInput" placeholder="adress">
      <label for="floatingInput">user_type</label>
    </div>
    <div class="form-floating mt-2 col col-md-4">
      <input type="number" name="phone" class="form-control" id="floatingInput" placeholder="Tag">
      <label for="">Phone Number</label>
    </div>
    <div class="form-floating mt-2 col col-md-4">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Blog">
      <label for="">Email</label>
    </div>
    <div class="form-floating mt-2 col col-md-4">
      <input type="password" name="password" class="form-control" id="floatingInput" placeholder="Blog">
      <label for="">Password</label>
    </div>

    <button class="btn btn-lg btn-primary justify-content-center mt-3 " type="submit">submit</button>
  </form>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/offcanvas.js"></script>
@endsection
