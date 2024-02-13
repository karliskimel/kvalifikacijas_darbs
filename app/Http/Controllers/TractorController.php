<?php

namespace App\Http\Controllers;


use App\Models\Tractor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TractorController extends Controller
{
   public function search(Request $request)
{
    $search = $_POST['search'];

$servername = "localhost";
$username = "traktori_user";
$password = "password";
$db = "traktori";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from massey_fergusson where kods like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row["kods"]."  "."<br>";
}
} else {
	echo "0 records";
}

$conn->close();


    // if($request->has('q')){
    //     $q=$request->q;
    //     $posts=Traktori::where('title', 'like', '%' .$q. '%')->orderBy('id', 'desc')->get();
    // }else{
    //     $posts=Traktori::orderBy('id', 'desc')->get();
    // }
    // // $search = $request->input('search');
    // // $results = Tractor::where('name', 'like', "%$search%")->get();

    // return view('tractors.welcome', ['results' => $results]);
}
}

