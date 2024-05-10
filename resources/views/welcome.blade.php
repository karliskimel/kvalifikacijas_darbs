@extends('layout')
@section('title', "Traktori")
@section('content')
<body style="background-color: #C3B091;">

<form action="{{ route('tractor.search') }}" method="post">
    @csrf
    <input style="background-color: #F7E7CE" type="text" name="search" placeholder="Kods"><br>
    Traktora Modelis: 
    <select style="background-color: #F7E7CE" name="model">
        <option value="massey_fergusson">Massey Ferguson</option>
        <option value="case">Case</option>
        <option value="new holland">New Holland</option>
        <option value="caterpillar">Caterpillar</option>
        
    </select>
    <br>
    <input type="submit" style="background-color: #F7E7CE; color: black;">

</form>
<br>
<div>
    <h3><b>Piedāvātie kodi</b></h3>
    <br>
    <table>
    <tr>
        <td>
           <ul>
        <li><b>"385 Case"</b></li> 
        <li><b>"115 Case"</b></li>
        <li><b>"121 Casse"</b></li>
        <li><b>"122 Case"</b></li>
        <li><b>"123 Case"</b></li>
        <li><b>"124 Case"</b></li>
        <li><b>"131 Case"</b></li>
        <li><b>"132 Case"</b></li>
        <li><b>"133 Case"</b></li>
        <li><b>"141 Case"</b></li>
        <li><b>"1029 Case"</b></li>
        <li><b>"1039 Case"</b></li>
        <li><b>"1049 Case"</b></li>
        <li><b>"1059 Case"</b></li>
        <li><b>"1069 Case"</b></li>
        <li><b>"1079 Case"</b></li>
        <li><b>"1089 Case"</b></li>
        <li><b>"1099 Case"</b></li>
        <li><b>"1109 Case"</b></li>
        <li><b>"1119 Case"</b></li>
        <li><b>"1129 Case"</b></li>
        <li><b>"1139 Case"</b></li>
        <li><b>"1149 Case"</b></li>
        <li><b>"8011 Case"</b></li>
        <li><b>"9011 Case"</b></li>
        <li><b>"9012 Case"</b></li>
        <li><b>"9013 Case"</b></li>
        <li><b>"9014 Case"</b></li>
        <li><b>"9015 Case"</b></li>
        <li><b>"169 Case"</b></li>
    </ul>
        </td>
        <td>
            <ul>
                <li><b>"10001 Massey Ferguson"</b></li>
                <li><b>"10002 Massey Ferguson"</b></li>
                <li><b>"10003 Massey Ferguson"</b></li>
                <li><b>"10004 Massey Ferguson"</b></li>
                <li><b>"10005 Massey Ferguson"</b></li>
                <li><b>"10006 Massey Ferguson"</b></li>
                <li><b>"10007 Massey Ferguson"</b></li>
                <li><b>"10008 Massey Ferguson"</b></li>
                <li><b>"10009 Massey Ferguson"</b></li>
                <li><b>"10010 Massey Ferguson"</b></li>
                <li><b>"10011 Massey Ferguson"</b></li>
                <li><b>"10012 Massey Ferguson"</b></li>
                <li><b>"10013 Massey Ferguson"</b></li>
                <li><b>"10014 Massey Ferguson"</b></li>
                <li><b>"10015 Massey Ferguson"</b></li>
                <li><b>"10016 Massey Ferguson"</b></li>
                <li><b>"10017 Massey Ferguson"</b></li>
                <li><b>"10018 Massey Ferguson"</b></li>
                <li><b>"10019 Massey Ferguson"</b></li>
                <li><b>"1002 Massey Ferguson"</b></li>
                <li><b>"10020 Massey Ferguson"</b></li>
                <li><b>"10021 Massey Ferguson"</b></li>
                <li><b>"10022 Massey Ferguson"</b></li>
                <li><b>"10023 Massey Ferguson"</b></li>
                <li><b>"10024 Massey Ferguson"</b></li>
                <li><b>"1003 Massey Ferguson"</b></li>
                <li><b>"10030 Massey Ferguson"</b></li>
                <li><b>"10031 Massey Ferguson"</b></li>
                <li><b>"10032 Massey Ferguson"</b></li>
                <li><b>"10033 Massey Ferguson"</b></li>
            </ul>
        </td>
        <td>
            <ul>
                <li><b>"187 New Holland"</b></li>
                <li><b>"191 New Holland"</b></li>
                <li><b>"211 New Holland"</b></li>
                <li><b>"212 New Holland"</b></li>
                <li><b>"213 New Holland"</b></li>
                <li><b>"214 New Holland"</b></li>
                <li><b>"219 New Holland"</b></li>
                <li><b>"221 New Holland"</b></li>
                <li><b>"222 New Holland"</b></li>
                <li><b>"223 New Holland"</b></li>
                <li><b>"227 New Holland"</b></li>
                <li><b>"234 New Holland"</b></li>
                <li><b>"235 New Holland"</b></li>
                <li><b>"237 New Holland"</b></li>
                <li><b>"241 New Holland"</b></li>
            </ul>
        </td>
        <td>
            <ul>
                <li><b>"017 Caterpillar"</b></li>
                <li><b>"021 Caterpillar"</b></li>
                <li><b>"035 Caterpillar"</b></li>
                <li><b>"038 Caterpillar"</b></li>
                <li><b>"072 Caterpillar"</b></li>
                <li><b>"073 Caterpillar"</b></li>
                <li><b>"074 Caterpillar"</b></li>
                <li><b>"092 Caterpillar"</b></li>
                <li><b>"093 Caterpillar"</b></li>
                <li><b>"095 Caterpillar"</b></li>
                <li><b>"098 Caterpillar"</b></li>
                <li><b>"100 Caterpillar"</b></li>
                <li><b>"101 Caterpillar"</b></li>
                <li><b>"190 Caterpillar"</b></li>
                <li><b>"265 Caterpillar"</b></li>
                <li><b>"272 Caterpillar"</b></li>
                <li><b>"279 Caterpillar"</b></li>
            </ul>
        </td>
</tr>
</table>
</div>
</body>
@endsection