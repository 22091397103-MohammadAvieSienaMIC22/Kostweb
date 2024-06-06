@extends('layouts.master')
@section('container')
<section>
    <div class="col-lg-6 mt-4">
        @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <a class="btn btn-success" href="/reservation/show/">View Details</a>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('LoginError'))
                <div class="alert alert-denger alert-dismissible fade show" role="alert">
                    {{ session('LoginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        <h1 class="h2">Reservation Form</h1>
        <form id="myresevation" method="POST" action="/reservation" class="mb-5 mt-4">
            @csrf
            <div class="mb-3 row">
                <label for="room_type" class="col-sm-2 col-form-label">Room Type :</label>
                <div class="col-sm-10">
                    <select class="form-select @error('room_type') is-invalid @enderror" id="room_type" name="room_type" required>
                        <option selected>Choose...</option>
                        <option value="small">Small</option>
                        <option value="medium">Medium</option>
                        <option value="large">Large</option>
                        @error('room_type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="firstname" class="col-sm-2 col-form-label">Firstname :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control @error('firstname') is-invalid @enderror"" id="firstname" name="firstname" required autofocus value="{{ old('firstname') }}">
                    @error('firstname')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="lastname" class="col-sm-2 col-form-label">Lastname :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control @error('lastname') is-invalid @enderror"" id="lastname" name="lastname" required value="{{ old('lastname') }}">
                    @error('lastname')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email :</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control @error('email') is-invalid @enderror"" id="email" name="email" placeholder="email@example.com" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="phone" class="col-sm-3 col-form-label">Contact Number :</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control @error('phone') is-invalid @enderror"" id="phone" name="phone" value="{{ old('phone') }}">
                    @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="guest" class="col-sm-3 col-form-label">Additional Guest :</label>
                <div class="col-sm-5">
                    <select class="form-select @error('guest') is-invalid @enderror" id="guest" name="guest" required>
                        <option selected>Choose...</option>
                        <option value="2">2</option>
                        <option value="4">4</option>
                        <option value="6">6</option>
                        @error('guest')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="booking" class="col-sm-3 col-form-label">Booking :</label>
                <div class="col-sm-5">
                    <select class="form-select @error('booking') is-invalid @enderror" id="booking" name="booking" required>
                        <option selected>Choose...</option>
                        <option value="2 bulan">2 Bulan</option>
                        <option value="4 bulan">4 Bulan</option>
                        <option value="6 bulan">6 Bulan</option>
                        @error('booking')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="checkin" class="col-sm-3 col-form-label">Check In :</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control @error('checkin') is-invalid @enderror" id="checkin" name="checkin" required value="{{ old('checkin') }}">
                    @error('checkin')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="checkout" class="col-sm-3 col-form-label">Check Out :</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control @error('checkout') is-invalid @enderror" id="checkout" name="checkout" required value="{{ old('checkout') }}">
                  @error('checkout')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
            </div>
            <div class="mb-3">
                <button style="background-color: #388da8; color:#ffffff; font-size:17px; border-radius:15px" type="submit" class="btn btn-primary">Reservation</button>
                <button style="background-color: #388da8; color:#ffffff; font-size:17px; border-radius:15px" type="button" id="clearButton" class="btn btn-primary">Clear Form</button>
            </div>
        </form>
            <script>
                document.getElementById('clearButton').addEventListener('click', function() {
                document.getElementById('myresevation').reset();
                });
            </script>
    </div>
</section>
@endsection
