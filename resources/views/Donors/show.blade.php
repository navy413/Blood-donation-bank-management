@extends('layouts.index')
@section('title','product show')
@include('includes.index')
@section('content')

   <ul>
       <li>{{$product->name}}</li>
       <li>{{$product->description}}</li>
       <li>{{$product->color}}</li>
       <li>{{$product->price}}</li>
       <li>{{$product->weight}}</li>

   </ul>
@endsection
