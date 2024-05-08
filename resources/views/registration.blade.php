@extends('layout')
@section('title', 'Registration')
@section('content')
<body style="background-color: #C3B091;">
  

   <div class="container">
    <div class="mt-5">
      @if($errors->any())
         <div class="col-12">
          @foreach($errors->all() as $error)
            <div class="alert alert-danger">
              {{$error}}  
            </div>
          @endforeach
         </div>
      @endif

      @if(session()->has('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
      @endif

      @if(session()->has('success'))
        <div class="alert alert-success">{{session('success')}}</div>
      @endif
      <h1>Reģistrācija</h1>
      <button style="background-color: #F7E7CE; color: black;">
        <a href="{{route('welcome')}}" class="nav-link">atpakaļ</a> <!-- doties atpakaļ uz sākumu -->
      </button>
    </div>
   <form action="{{route('registration.post')}}" method="POST" class="ms-auto me-auto mt-3" style="width: 500px">
   @csrf
  <div class="mb-3">
    <label class="form-label">Vārds, Uzvārds</label>
    <input type="text" class="form-control" name="name" > <!-- vārds, uzvārds izveidei -->
  </div>
  <div class="mb-3">
    <label class="form-label">E-pasta adrese</label>
    <input type="email" class="form-control" name="email"> <!-- e-pasts izveidei -->
  </div>
  <div class="mb-3">
    <label class="form-label">Parole</label>
    <input type="password" class="form-control" name="password"> <!-- parole izveidei -->
  </div>
  <button type="submit" style="background-color: #F7E7CE; color: black;">Reģistrēties</button> <!-- piereģistrēs un aizvedīs uz pievienošanās lapu -->
</form>
   </div>
  </body>
@endsection