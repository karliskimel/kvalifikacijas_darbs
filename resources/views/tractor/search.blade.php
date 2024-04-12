@extends('layout')
<style>
table, th, td {
  border: 1px solid black;
  text-align:center;
  
}

.cart-item {
   border: 1px solid #ddd;
   padding: 10px;
   margin-bottom: 10px;
}

</style>
@section('title', 'Meklētie Rezultāti')

@section('content')
    <h2>Meklētie rezultāti</h2>
    @if ($tractors->count() > 0)
        <ul>
            @foreach ($tractors as $tractor)
            <!-- <li>{{ $tractor->kods }} </li> -->
            <table>
                <tr>
                    <th>marka</th>
                    <th>kods</th>
                    <th>apraksts</th>
                    
                </tr>
                <tr>
                    <td><li>{{ $tractor->marka}}</li></td>
                    <td><li>{{ $tractor->kods }}</li></td>
                    <td><li>{{ $tractor->apraksts}}</li></td>
                    
                </tr>
                
            </table>
            <br>
                <button>
                    <a href="">atpakaļ</a>
                </button>
            @endforeach
        </ul>
    @else
        <p>Netika atrasts Jūsu meklētais, mēģiniet vēlreiz</p>
    @endif
@endsection
