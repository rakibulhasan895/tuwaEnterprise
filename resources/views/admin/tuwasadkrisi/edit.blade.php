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
<form action="{{ route('tuwakrishis.update',$tuwakrishi->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('put')
  <div class="row ">
    <h1 class="h3 mb-3 fw-normal mt-3"><label for="">Tuwa Sad Krishi</label></h1>
  </div>
  <div class="form-floating mt-2 col col-md-4">
      <input type="text" name="title" value="{{$tuwakrishi->title}}" class="form-control" id="floatingInput" placeholder="adress">
      <label for="floatingInput">Title</label>
    </div>
    <div class=" mt-2 col col-md-8">
    <label class="form-label">Upload Photo</label>
    <input type="file"  name="photo_gallary" class="form-control">
    </div>
    <div class="form-floating mt-2 col">
      <input type="textarea" name="details" value="{{$tuwakrishi->details}}" class="form-control" id="floatingInput" placeholder="Blog">
      <label for="">Details</label>
    </div>

    <button class="btn btn-lg btn-primary justify-content-center mt-3 " type="submit">submit</button>
  </form>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/offcanvas.js"></script>
@endsection
