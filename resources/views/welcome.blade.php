@extends('layout')
@section('title', "Home Page")
@section('content')

<form action="{{ route('tractor.search') }}" method="post">
    @csrf
    <input type="text" name="search" placeholder="Search Tractors"><br>
    Tractor Model: 
    <select name="model">
        <option value="massey_fergusson">massey_fergusson</option>
        <option value="case">case</option>
        <option value="john deere">john deere</option>
        <option value="new holland">new holland</option>
        <!-- Add other tractor models as needed -->
    </select><br>
    <input type="submit">
</form>
<div class="cart-item">
   <!-- Your content goes here -->
</div>




 <!-- <?php

// $con = new PDO("mysql:host=localhost;dbname=traktori", 'traktori_user', 'password');

// if(isset($_POST["submit"])){
//     $str = $_POST["traktori"];
//     $sth = $con->prepare("SELECT * FROM 'massey_fergusson' WHERE skaidrojums = '$str'");

//     $sth->setFetchMode(PDO:: FETCH_OBJ);
//     $sth -> execute();

//     if($row = $sth->fetch())
//     {
        ?>
        <br><br><br>
        <table>
           <tr>
              <th>kods</th>
              <th>skaidrojums</th>
           </tr>
           <tr>
               <td></td>
               <td></td>
           </tr>
        </table>
        <?php
//     }
//     else{
//         echo "kods nepastāv";
//     }
// }
?>  -->

@endsection