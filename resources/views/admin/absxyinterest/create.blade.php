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
<form action="{{ route('absxyinterests.store') }}" method="POST">
  @csrf
  @method('post')
  <div class="row ">
    <h1 class="h3 mb-3 fw-normal mt-3"><label for="">Contact</label></h1>
  </div>
  <div class="form-floating mt-2 col col-md-4">
      <input type="text" name="year" class="form-control @error ('year') is-invalid  @enderror" id="floatingInput" placeholder="adress">
      <label for="floatingInput">Year</label>
    </div>
   <div class="form-floating mt-2 col col-md-4">
      <input type="text" name="original_balance" class="form-control" id="floatingInput" placeholder="adress">
      <label for="floatingInput">original_balance</label>
    </div>
    <div class="form-floating mt-2 col col-md-4">
      <input type="number" name="interest_balance" class="form-control" id="floatingInput" placeholder="Tag">
      <label for="">interest_balance</label>
    </div>
    <div class="form-floating mt-2 col">
      <input type="textarea" name="total_balance" class="form-control" id="floatingInput" placeholder="Blog">
      <label for="">total_balance</label>
    </div>

    <button class="btn btn-lg btn-primary justify-content-center mt-3 " type="submit">submit</button>
  </form>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/offcanvas.js"></script>
@endsection
