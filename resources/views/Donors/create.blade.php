@extends('layouts.index')
@section('title','Donor index')
@include('includes.index')
@section('content')

    <form action="{{route('donor.store')}}" method="post">
        @csrf
  <div class="container">
      <div class="row">
          <div class="col-8 m-auto" style="padding-top: 50px">
              <div class="mb-3">
                  <label for="name" class="form-label">name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="enter your full name">
              </div>
              <div class="mb-3">
                  <label for="email " class="form-label">Email</label>
                  <input type="text" class="form-control" id="email " name="email" placeholder="enter your email">
              </div>
              <div class="mb-3">
                  <label for="address " class="form-label">Address</label>
                  <input type="text" class="form-control" id="address " name="address" placeholder="enter your address">
              </div>
              <div class="mb-3">
                  <label for="phone " class="form-label">Phone</label>
                  <input type="text" class="form-control" id="phone " name="phone" placeholder="enter your phone ">
              </div>
              <div class="mb-3">
                  <label for="bloodtype  " class="form-label">Blood-type </label>
                  <input type="text" class="form-control" id="bloodtype  " name="bloodtype " placeholder="enter your blood-type  ">
              </div>
              <div class="mb-3">
                  <label for="age " class="form-label">Age </label>
                  <input type="number" class="form-control" id="age " name="age " placeholder="enter your age  ">
              </div>
              <div class="col-12">
                  <button type="submit" class="btn btn-primary">submit</button>
              </div>

    </div>
    </div>
  </div>
    </form>
@endsection
