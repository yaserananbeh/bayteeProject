@extends('admin.layout.master')
@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">Houses table</h3>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>image</th>
                        <th>description</th>
                        
                        <th>maximum capasity of visitors</th>
                        <th>appointment date</th>
                        <th>price</th>
                        <th>agent name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trips as $trip)


                    <tr class="tr-shadow">
                        <td style="line-height: 45.5px">{{ $trip->name }}</td>
                        <td><img src="{{asset('trip_images/'. $trip->image) }}"></td>
                        <td>
                            <span>{{ $trip->description }}</span>
                        </td>
                        

                        <td class="desc">{{ $trip->max_visitors }}</td>

                        <td>
                            <span class="status--process">{{ $trip->date }}</span>
                        </td>
                        <td>{{ $trip->price }}</td>
                        <td>{{ $trip->guide->name }}</td>
                        <td>
                            <div class="table-data-feature">
                                <form method="post" action="/trips/{{$trip->id}}" >
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></button>
                                    </form>
                            </div>
                        </td>
                    </tr>
                    <tr class="spacer"></tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>
        </div>
    </div>
</div>



@endsection
