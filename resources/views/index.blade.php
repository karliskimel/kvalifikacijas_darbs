<!-- @extends('layout')
@section('title', 'Traktoru kļūdas')
@section('content')
 <form action="{{ route('tractor.search') }}" method="GET">
    <input type="text" name="search" placeholder="Search Tractors">
    <button type="submit">Search</button>
</form> 
@endsection -->

<!-- <x-filter :categories="$categories" />
<form id="filters" action="{{route('filters')}}" method="GET" >
   
   @csrf
   <select name="categoryId" id="categoryId"   onchange="document.querySelector('#filters').submit();">
      <option value="" > - </option>
      @foreach ($categories as $category)
         <option value="{{ $category->id }}">{{ $category->name }}</option>
      @endforeach
   </select>
</form> -->