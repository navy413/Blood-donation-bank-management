@extends('layouts.index')
@section('title','product index')
@include('includes.index')
@section('content')

    <a class="btn btn-success btn-sm" href="{{route('product.create')}}">Create</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">description</th>
            <th scope="col">color</th>
            <th scope="col">price</th>
            <th scope="col">weight</th>
            <th scope="col">actions</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}}</td>

            <td>{{$product->description}}</td>
            <td>{{$product->color}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->weight}}</td>
            <td><a href="{{ route('product.show',  $product->id) }}" class="btn btn-info btn-sm">Show</a</td>
            <td><a href="{{ route('product.edit',  $product->id) }}" class="btn btn-info btn-sm">edit</a</td>
            <td><a href="{{ route('product.delete',  $product->id) }}" class="btn btn-danger btn-sm">delete</a</td>
{{--            <td><a class="btn btn-success" href="{{route('product.show'), $product->id }}">show</a></td>--}}

        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
