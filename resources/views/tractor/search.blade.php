@extends('layout')
<style>
table, th, td {
  border: 1px solid black;
  text-align:center;
  width: 40%;
  background-color: #F7E7CE;
}
</style>
@section('title', 'Meklētie Rezultāti')

@section('content')
<body style="background-color: #C3B091;">
    

    <h2>Meklētie rezultāti</h2>
    @if ($tractors->count() > 0)
        <ul>
            @foreach ($tractors as $tractor)
            <table>
                <tr>
                    <th>marka</th>
                    <th>kods</th>
                    <th>apraksts</th>
                    
                </tr>
                <tr>
                    <td>{{ $tractor->marka}}</td> <!-- izvadītā marka -->
                    <td>{{ $tractor->kods }}</td> <!-- izvadītais kods -->
                    <td>{{ $tractor->apraksts}}</td> <!-- izvadītais apraksts -->
                    
                </tr>
                
            </table>
            <br>
                <button style="background-color: #F7E7CE; color: black;">
                    <a class="nav-link" href="{{route('welcome')}}">atpakaļ</a> <!-- aizved atpakaļ uz sākumu -->
                </button>
            @endforeach
        </ul>
    @else
        <p>Netika atrasts Jūsu meklētais, mēģiniet vēlreiz</p> <!-- Ja nu kaut kas noiet greizi -->
    @endif
</body>
@endsection
