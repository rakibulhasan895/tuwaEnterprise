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
<form action="{{ route('registrations.update',$registration->id) }}" method="POST">
  @csrf
  @method('put')
  <div class="row ">
    <h1 class="h3 mb-3 fw-normal mt-3"><label for="">Registration Update</label></h1>
  </div>
   <div class="row">
   <div class="form-floating mt-2 col col-md-4">
      <input type="text" name="name" value="{{ $registration->name }}" class="form-control @error ('name') is-invalid @enderror" id="floatingInput" placeholder="Name">
      <label for="floatingInput"> Name</label>
    </div>
    <div class="form-floating mt-2 col col-md-4">
      <input type="text" name="account_no" value="{{ $registration->account_no }}" class="form-control @error ('account_no') is-invalid @enderror" id="floatingInput" placeholder="name.com">
      <label for="floatingInput">Account_no</label>
    </div>
    <div class="form-floating mt-2 col col-md-4">
      <input type="text" name="account_types" value="{{ $registration->account_types }}" class="form-control @error ('account_types') is-invalid @enderror" id="floatingInput" placeholder="">
      <label for="">Account_types</label>
    </div>
   </div>
   <div class="row">
   <div class="form-floating mt-2 col col-md-4">
      <input type="number" name="phone_number" value="{{ $registration->phone_number }}" class="form-control @error ('phone_number') is-invalid @enderror" id="floatingInput" placeholder="Password">
      <label for="floatingInput">Phone Number</label>
    </div>
    <div class="form-floating mt-2 col col-md-4">
      <input type="text" name="file_jomar_date" value="{{ $registration->file_jomar_date }}"  class="form-control" id="floatingInput" placeholder="name@example.com">
      <label  for="floatingInput">file_jomar_date {{ $registration->file_jomar_date }}</label>
    </div>
    <div class="form-floating mt-2 col col-md-4">
      <input type="date" name="clients_acctivation_date" class="form-control" id="floatingInput" placeholder="Password">
      <label for="floatingInput">client_acctivation_date</label>
    </div>
   </div>
   <div class="row">
   <div class="form-floating mt-2 col col-md-4">
      <input type="date" name="check_book_bitoron" class="form-control" id="floatingInput" placeholder="Password">
      <label for="floatingInput">check_book_bitoron</label>
    </div>
    <div class="form-floating mt-2 col col-md-4">
      <input type="number" name="debit_card_number" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">debit_card_number</label>
    </div>
    <div class="form-floating mt-2 col col-md-4">
      <input type="date" name="debit_card_apply_date" class="form-control" id="floatingInput" placeholder="Password">
      <label for="floatingInput">debit_card_apply_date</label>
    </div>
   </div>
   <div class="row">
   <div class="form-floating mt-2 col col-md-6">
      <input type="date" name="debitcard_prodaner_date" class="form-control" id="floatingInput" placeholder="Password">
      <label for="floatingInput">debit_card_prodaner_date</label>
    </div>
    <div class="form-floating mt-2 col col-md-6">
      <input type="text" name="account_open_date" class="form-control" value="{{ $registration->account_open_date }}"  id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">account_open_date {{ $registration->account_open_date }}</label>
    </div>
   </div>
   <div class="row">
    <div class="form-floating mt-2 col col-md-12">
      <input type="text" name="comment" value="{{ $registration->comment }}"  class="form-control" id="floatingInput" placeholder="Password">
      <label for="floatingInput">comment</label>
    </div>
   </div>

    <button class="btn btn-lg btn-primary justify-content-center mt-3 " type="submit">submit</button>
  </form>

<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/offcanvas.js"></script>
@endsection
