@extends('layout')
@section('content')
<body style="background-color: #C3B091;">

    <div class="container">
       <header>
          <h1>Mums pieejamie produkti</h1>
          <div class="shopping">
            <img src="/images/shopping.png"> 
            <span class="quantity">0</span> <!-- priekš groza -->
          </div>
       </header>
       <button style="background-color: #F7E7CE; color: black;">
          <a href="{{route('welcome')}}" class="nav-link">atpakaļ</a> <!-- var doties atpakaļ uz sākumu -->
       </button>
       <div class="list"></div>
    </div>
    <div class="card"> 
        <h1>Grozs</h1>
        <ul class="listCard"></ul> <!-- apskatāmie produkti -->
        <div class="checkOut">
            <div class="total">0</div>
            <div class="closeShopping">Aizvērt</div>
        </div>
    </div>
</body>
@endsection
