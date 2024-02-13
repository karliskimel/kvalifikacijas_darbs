@extends('layout')
@section('title', "Home Page")
@section('content')
 <form action="{{ route('tractor.search') }}" method="post">
    @csrf
    <input type="text" name="search" placeholder="Search Tractors"><br>
    Column: <select name="column">
	<option value="name">kods</option>
	<!-- <option value="age">Age</option>
	<option value="gender">Gender</option> -->
	</select><br>
    <input type="submit">
    <!-- <button type="submit" name="submit">Search</button> -->
</form>



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

