@extends('layout')
@section('content')
    <div class="container">
       <header>
          <h1>Mums pieejamie produkti</h1>
          <div class="shopping">
            <img src="/images/shopping.jpg" alt="Example Image">
            <span class="quantity">0</span>
          </div>
       </header>
       <div class="list"></div>
    </div>
    <div class="card">
        <h1>Grozs</h1>
        <ul class="listCard"></ul>
        <div class="checkOut">
            <div class="total">0</div>
            <div class="closeShopping">Aizvērt</div>
        </div>
    </div>
@endsection
