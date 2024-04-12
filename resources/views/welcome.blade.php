@extends('layout')
@section('title', "Traktori")
@section('content')

<form action="{{ route('tractor.search') }}" method="post">
    @csrf
    <input type="text" name="search" placeholder="Kods"><br>
    Tractor Model: 
    <select name="model">
        <option value="massey_fergusson">Massey Ferguson</option>
        <option value="case">Case</option>
        <option value="john deere">john deere</option>
        <option value="new holland">New Holland</option>
        <option value="caterpillar">Caterpillar</option>
        
    </select><br>
    <input type="submit">
</form><br>
<!-- testēšana 
Jāatrisina mazo ciparu case kļūdas, posmā no 11 - 99-->
<div>
    <h3>Piedāvātie kodi</h3>
    <br>
    <table>
    <tr>
        <td>
           <ul>
        <li>"111 Case"</li> 
        <li>"115 Case"</li>
        <li>"121 Casse"</li>
        <li>"122 Case"</li>
        <li>"123 Case"</li>
        <li>"124 Case"</li>
        <li>"131 Case"</li>
        <li>"132 Case"</li>
        <li>"133 Case"</li>
        <li>"141 Case"</li>
        <li>"1029 Case"</li>
        <li>"1039 Case"</li>
        <li>"1049 Case"</li>
        <li>"1059 Case"</li>
        <li>"1069 Case"</li>
        <li>"1079 Case"</li>
        <li>"1089 Case"</li>
        <li>"1099 Case"</li>
        <li>"1109 Case"</li>
        <li>"1119 Case"</li>
        <li>"1129 Case"</li>
        <li>"1139 Case"</li>
        <li>"1149 Case"</li>
        <li>"8011 Case"</li>
        <li>"9011 Case"</li>
        <li>"9012 Case"</li>
        <li>"9013 Case"</li>
        <li>"9014 Case"</li>
        <li>"9015 Case"</li>
        <li>"169 Case"</li>
    </ul>
        </td>
        <td>
            <ul>
                <li>"10001 Massey Ferguson"</li>
                <li>"10002 Massey Ferguson"</li>
                <li>"10003 Massey Ferguson"</li>
                <li>"10004 Massey Ferguson"</li>
                <li>"10005 Massey Ferguson"</li>
                <li>"10006 Massey Ferguson"</li>
                <li>"10007 Massey Ferguson"</li>
                <li>"10008 Massey Ferguson"</li>
                <li>"10009 Massey Ferguson"</li>
                <li>"10010 Massey Ferguson"</li>
                <li>"10011 Massey Ferguson"</li>
                <li>"10012 Massey Ferguson"</li>
                <li>"10013 Massey Ferguson"</li>
                <li>"10014 Massey Ferguson"</li>
                <li>"10015 Massey Ferguson"</li>
                <li>"10016 Massey Ferguson"</li>
                <li>"10017 Massey Ferguson"</li>
                <li>"10018 Massey Ferguson"</li>
                <li>"10019 Massey Ferguson"</li>
                <li>"1002 Massey Ferguson"</li>
                <li>"10020 Massey Ferguson"</li>
                <li>"10021 Massey Ferguson"</li>
                <li>"10022 Massey Ferguson"</li>
                <li>"10023 Massey Ferguson"</li>
                <li>"10024 Massey Ferguson"</li>
                <li>"1003 Massey Ferguson"</li>
                <li>"10030 Massey Ferguson"</li>
                <li>"10031 Massey Ferguson"</li>
                <li>"10032 Massey Ferguson"</li>
                <li>"10033 Massey Ferguson"</li>
            </ul>
        </td>
        <td>
            <ul>
                <li>"187 New Holland"</li>
                <li>"191 New Holland"</li>
                <li>"211 New Holland"</li>
                <li>"212 New Holland"</li>
                <li>"213 New Holland"</li>
                <li>"214 New Holland"</li>
                <li>"219 New Holland"</li>
                <li>"221 New Holland"</li>
                <li>"222 New Holland"</li>
                <li>"223 New Holland"</li>
                <li>"227 New Holland"</li>
                <li>"234 New Holland"</li>
                <li>"235 New Holland"</li>
                <li>"237 New Holland"</li>
                <li>"241 New Holland"</li>
            </ul>
        </td>
        <td>
            <ul>
                <li>"017 Caterpillar"</li>
                <li>"021 Caterpillar"</li>
                <li>"035 Caterpillar"</li>
                <li>"038 Caterpillar"</li>
                <li>"072 Caterpillar"</li>
                <li>"073 Caterpillar"</li>
                <li>"074 Caterpillar"</li>
                <li>"092 Caterpillar"</li>
                <li>"093 Caterpillar"</li>
                <li>"095 Caterpillar"</li>
                <li>"098 Caterpillar"</li>
                <li>"100 Caterpillar"</li>
                <li>"101 Caterpillar"</li>
                <li>"190 Caterpillar"</li>
                <li>"265 Caterpillar"</li>
                <li>"272 Caterpillar"</li>
                <li>"279 Caterpillar"</li>
            </ul>
        </td>
</tr>
</table>
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