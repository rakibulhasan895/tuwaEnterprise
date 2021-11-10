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
<form action="{{ route('employeecomputer.update',$employeeComputer->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('put')
  <div class="row ">
    <h1 class="h3 mb-3 fw-normal mt-3"><label for="">Employee COmputers</label></h1>
  </div>
  <div class="form-floating mt-2 col col-md-4">
      <input type="text" name="name" value="{{$employeeComputer->name}}" class="form-control" id="floatingInput" placeholder="adress">
      <label for="floatingInput"> Name</label>
    </div>
    <div class=" mt-2 col col-md-8">
    <label class="form-label">Upload Photo</label>
    <input type="file"  name="photo" class="form-control">
    </div>
   <div class="form-floating mt-2 col col-md-4">
      <input type="text" name="adress" value="{{$employeeComputer->adress}}" class="form-control" id="floatingInput" placeholder="adress">
      <label for="floatingInput">Adress</label>
    </div>
    <div class="form-floating mt-2 col col-md-4">
      <input type="number" name="number" value="{{$employeeComputer->number}}" class="form-control" id="floatingInput" placeholder="Tag">
      <label for="">Number</label>
    </div>
    <div class="form-floating mt-2 col">
      <input type="textarea" name="personal_details" value="{{$employeeComputer->personal_details}}" class="form-control" id="floatingInput" placeholder="Blog">
      <label for="">Details</label>
    </div>

    <button class="btn btn-lg btn-primary justify-content-center mt-3 " type="submit">submit</button>
  </form>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/offcanvas.js"></script>
@endsection
