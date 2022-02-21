@extends('publicSite.layout.master')
@section ('style')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Merriweather&family=Mochiy+Pop+One&family=Mohave&display=swap');
    h1,h2,h3,h4,h5,h6 {
        font-family: "Barlow Condensed", sans-serif !important;
    }
</style>


@endsection
@section('content')
<div class="container" style="margin-top: 200px">
<section class="ftco-section" style="margin-bottom:81px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Your Reservation</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('tripFilter' ,Auth::user()->id)}}" method="get">
                  <div class="table-data__tool-left">
                      <div class="rs-select2--light rs-select2--md dropdown d-flex mb-4">
                          <select class="js-select2 mr-2 " name="trip">
                            <option selected>All Appointments</option>
                            @foreach($guide_trip as $guide_trips)
                              <option>{{$guide_trips->name}}</option>
                             @endforeach
                          </select>
                          <div class="dropDownSelect2"></div>
                        <button class="btn btn-primary" type="submit">Filter</button>
                      </div>
                       </form>
                       <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Customer Name</th>
                          <th>Customer Email</th>
                          <th>Custumer Phone</th>
                          <th>House Name</th>
                          <th>Booking Date</th>
                          <th>Price</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if($reservations->count() == 0)
                    <h1 class=" text-center">No Reserevations</h1>
                        {{-- <td>No Reservations</td> --}}
                        @endif

                         @foreach($reservations as $reservation)
                        <tr>
                          <td>{{$reservation->reservation_id}}</td>
                          <td>{{$reservation->name}}</td>
                          <td>{{$reservation->email}}</td>
                          <td>{{$reservation->phone}}</td>
                          <td>{{$reservation->tirp_name}}</td>
                          <td>{{$reservation->booking_date}}</td>
                          <td>{{$reservation->price . " JD"}}</td>
                        </tr>
                        @endforeach

                      </tbody>

                      {!! $reservations->appends($_GET)->links() !!}
                    </table>
                  </div>
            </div>
        </div>
    </div>
</div>
</section>


@endsection
