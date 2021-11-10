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
<form action="{{ route('agronibishesottos.store') }}" method="POST">
  @csrf
  @method('post')
  <div class="row ">
    <h1 class="h3 mb-3 fw-normal mt-3"><label for="">Contact</label></h1>
  </div>
  <div class="form-floating mt-2 col col-md-4">
      <input type="text" name="details" class="form-control @error ('details') is-invalid  @enderror" id="floatingInput" placeholder="details">
      <label for="floatingInput"> Details</label>
    </div>
    <button class="btn btn-lg btn-primary justify-content-center mt-3 " type="submit">submit</button>
  </form>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/offcanvas.js"></script>
@endsection
