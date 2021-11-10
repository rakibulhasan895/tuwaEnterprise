@extends('admin.layouts.nav.pub')
@section('content')
    
<div class="container">
</div>
<main class="container">
  <div class="row g-5">
    <div class="col-md-9 ml-5">
      <h1 class="pb-4 mb-4 fst-italic border-bottom ml-5 mt-2" style="background:green;color:white; text-align;center;">
        Our Services
      </h1>
      <div class="row mb-2 mt-2 mb-2 mr-3 ml-5">
          @foreach ($data  as $service)
          <div class="mh-100"style="color:green;" > <h3><img class="mh-20" style="height:50px;" src="/img/arrow.png" alt="">{{$service->details}}</h3></div><br>
        
    @endforeach
  </div>

    </div>
  </div>

</main>
@endsection