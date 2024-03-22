
<!-- resources/views/shop.blade.php -->
<!DOCTYPE html>
<html lang="en">
@extends('layout')
<!-- <link rel="stylesheet" href="app.css"> -->
<link rel="stylesheet" href="{{ asset('app.css') }}">

<style>
    body{
    background-color: #E3E7E8;
    font-family: system-ui;
   }
   .container{
       width: 1000px;
       margin: auto;
       transition: 0.5s;
   }
   
   header{
       display: grid;
       grid-template-columns: 1fr 50px;
       margin-top: 50px;
   }
   header .shopping{
       position: relative;
       text-align: right;
   }
   header .shopping img{
       width: 40px;
   }
   header .shopping span{
       background-color: red;
       border-radius: 50%;
       display: flex;
       justify-content: center;
       align-items: center;
       color: #fff;
       position: absolute;
       top: -5px;
       left: 80%;
       padding: 3px 10px;
   }
   .list{
       display: grid;
       grid-template-columns: repeat(3, 1fr);
       column-gap: 20px;
       row-gap: 20px;
       margin-top: 50px;
   }
   .card{
       position: fixed;
       top: 0;
       left: 100%;
       width: 500px;
       background-color: #453E3B;
       height: 100vh;
       transition: 0.5s;
   }
   .card h1{
       color: #E8BC0E;
       font-weight: 100;
       margin: 0;
       padding: 0 20px;
       height: 80px;
       display: flex;
       align-items: center;
   }
   .card .checkOut{
       position: absolute;
       bottom: 0;
       width: 100%;
       display: grid;
       grid-template-columns: repeat(2, 1fr);
   }
   .card .checkOut div{
       background-color: #E8BC0E;
       width: 100%;
       height: 70px;
       display: flex;
       justify-content: center;
       align-items: center;
       font-weight: bold;
       cursor: pointer;
   }
   .card .checkOut div:nth-child(2){
       background-color: #1C1F25;
       color: #fff;
   }
   .active .card{
       left: calc(100% - 500px);
   }
   .active .container{
       transform: translateX(-200px);
   }
   .list .item{
       text-align: center;
       background-color: #DCE0E1;
       padding: 20px;
       box-shadow: 0 50px 50px #757676;
       letter-spacing: 1px;
   }
   .list .item img{
       width: 90%;
   }
   .list .item title{
       font-weight: 600;
   }
   .list .item .price{
       margin: 10px;
   }
   .list .item button{
       background-color: #1C1F25;
       color: #fff;
       padding: 10px;
       width: 100%;
   }
   .listCard li{
       display: grid;
       grid-template-columns: 100px repeat(3, 1fr);
       color: #fff;
       row-gap: 10px;
       margin-bottom: 20px;
   }
   .listCard li div{
       display: flex;
       justify-content: center;
       align-items: center;
   }
   .listCard li img{
       width: 90%;
   }
   .listCard button{
       width: auto;
       background-color: #fff5;
       border: none;
   }
   .listCard .count{
       margin: 0 10px;
   }
   
</style>
@section('content')
    <body>
        
    
    <div class="container">
       <header>
          <h1>Mums pieejamie produkti</h1>
          <div class="shopping">
            <img src="public/shopping.png">
            
            <span class="quantity">0</span>
          </div>
       </header>
       <div class="list"></div>
    </div>
    <div class="card">
        <h1>Card</h1>
        <ul class="listCard"></ul>
        <div class="checkOut">
            <div class="total">0</div>
            <div class="closeShopping">close</div>
        </div>
    </div>
    <!--  src="{{ ('/app.js') }}" -->
<script>
 let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body'); // corrected the selection of body element
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity'); // corrected the selection of quantity element

openShopping.addEventListener('click', () => {
    body.classList.add('active'); // corrected the syntax
});

closeShopping.addEventListener('click', () => {
    body.classList.remove('active');
});

let products = [
   {
       id: 1,
       name: 'PRODUCT NAME 1',
       image: '1.PNG',
       price: 120000
   },
   {
        id: 2,
        name: 'PRODUCT NAME 2',
        image: '2.PNG',
        price: 130000
       },
       {
        id: 3,
        name: 'PRODUCT NAME 3',
        image: '3.PNG',
        price: 120000
       },
       {
        id: 4,
        name: 'PRODUCT NAME 4',
        image: '4.PNG',
        price: 120000
       },
       {
        id: 5,
        name: 'PRODUCT NAME 5',
        image: '5.PNG',
        price: 120000
       },
       {
        id: 6,
        name: 'PRODUCT NAME 6',
        image: '6.PNG',
        price: 120000
       },
];

let listCards = [];

function initApp(){
    products.forEach((value, key) => {
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
           <img src="image/${value.image}"/>
           <div class="title">${value.name}</div>
           <div class="price">${value.price.toLocaleString()}</div>
           <button onclick="addToCart(${key})">Add To Cart</button> <!-- Corrected function name -->
        `;
        list.appendChild(newDiv);
    })
}

initApp();

function addToCart(key){
    if(listCards[key] == null){
        listCards[key] = products[key];
        listCards[key].quantity = 1;
    }
    reloadCard();
}

function reloadCard(){
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key) => {
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;

        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
               <div><img src="image/${value.image}"/></div>
               <div>${value.name}</div>
               <div>${value.price.toLocaleString()}</div>
               <div>${value.quantity}</div>
               <div>
                   <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                   <div class="count">${value.quantity}</div> 
                   <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
               </div>
            `;
            listCard.appendChild(newDiv);
        }
    })
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}

function changeQuantity(key, quantity){
    if(quantity == 0){
        delete listCards[key];
    }else{
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price; // Corrected calculation of price
    }
    reloadCard();
}
</script>
</body>
@endsection
