@extends('layouts.createback')
@section('title','Donor information')
@section('content1')

     <h2 style="text-align: center; color:  rgba(242, 40, 28,1); margin-top: 50px"> Donate Now</h2>

    <form action="{{route('donor.store')}}" method="post">
        @csrf
  <div class="container">
      <div class="row">
          <div class="col-8 m-auto" style="padding-top: 50px">
              <div class="mb-3">
                  <label for="name" class="form-label" style="font-weight: 700">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="enter your full name">
              </div>
              <div class="mb-3">
                  <label for="email " class="form-label" style="font-weight: 700">Email</label>
                  <input type="text" class="form-control" id="email " name="email" placeholder="enter your email">
              </div>
              <div class="mb-3">
                  <label for="address " class="form-label" style="font-weight: 700">Address</label>
                  <input type="text" class="form-control" id="address " name="address" placeholder="enter your address">
              </div>
              <div class="mb-3">
                  <label for="phone " class="form-label" style="font-weight: 700">Phone</label>
                  <input type="text" class="form-control" id="phone " name="phone" placeholder="enter your phone ">
              </div>
              <div class="mb-3">
                  <label for="bloodtype" class="form-label" style="font-weight: 700">Blood-type </label>
                  <input type="text" class="form-control" id="bloodtype" name="bloodtype" placeholder="enter your blood-type  ">
              </div>
              <div class="mb-3">
                  <label for="age" class="form-label" style="font-weight: 700">Age </label>
                  <input type="number" class="form-control" id="age" name="age" placeholder="enter your age  ">
              </div>
              <div class="col-12">
                  <button type="submit" style=" background: rgba(242, 40, 28,1); color: white; border: 2px rgba(242, 40, 28,1);border-radius: 10px;padding: 14px 40px;font-size: large ">submit</button>
              </div>

    </div>
    </div>
  </div>
    </form>

@endsection
