@extends('publicSite.layout.master')
@section('style')
<style>
    .form-select {
    display: block;
    width: 100%;
    padding: 0.375rem 2.25rem 0.375rem 0.75rem;
    -moz-padding-start: calc(0.75rem - 3px);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e);
    background-repeat: no-repeat;
    background-position: right 0.75rem center;
    background-size: 16px 12px;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;

}
.form-select:focus {
    border-color: #86b7fe;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgb(13 110 253 / 25%);
}
</style>
@endsection
@section('content')
<div class="main-content add-trip-form">
    <div class="section__content section__content--p30" style="margin-bottom: 50px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-lg-12">
                        <div class="card trip-form">
                            <div class="card-header" style="font-size: 20px">Edit house</div>
                            <div class="card-body card-block">
                                <form action="{{route('guideTrip.update', $trip->id)}}" method="POST" enctype="multipart/form-data" class="create-trip-form">
                                    @csrf
                                    @method('PUT')
                                        <div class="mb-3">
                                            <label for="" class="form-label">Name</label>
                                            <input  type="text" id="username2" name="name" value="{{$trip->name}}" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Descreption</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$trip->description}}</textarea>
                                        </div>
                                        <!-- <div class="mb-3">
                                            <label for="" class="form-label">Number Of Days</label>
                                            <input type="number" id="days" name="days" value="{{$trip->days}}" class="form-control">
                                        </div> -->
                                        <!-- <div class="mb-3">
                                            <label for="" class="form-label">Minimum Age</label>
                                            <input type="number" id="minimum_age" name="minimum_age" value="{{$trip->minimum_age}}" class="form-control">
                                        </div> -->
                                        <div class="mb-3">
                                            <label for="" class="form-label">Max Visitors</label>
                                            <input type="number" id="max_visitors" name="max_visitors" value="{{$trip->max_visitors}}" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Price</label>
                                            <input type="number" id="price" name="price" value="{{$trip->price}}" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Date Of appointment</label>
                                            <input type="date" id="date" name="date" value="<?php echo date('Y-m-d',strtotime($trip->date))?>" class="form-control">
                                        </div>
                                            <select class="form-select w-100 mb-3 py-1 px-2" name="category_id" aria-label="Default select example">
                                                @foreach($categories as $category)
                                                @if($category->id == $trip->category_id)
                                                <option value="{{$category->id}}" selected>{{$category->category_name}}</option>
                                                @endif
                                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                                @endforeach
                                            </select>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <img class="d-block mb-3" width="200px" src="{{asset('trip_images/'.$trip->image)}}" alt="current trip image" >
                                        </div>
                                        <input type="file" id="image" name="image" value="{{$trip->image}}" class="form-control">
                                    </div>
                                    <div class="form-actions form-group">
                                        <button type="submit" class="btn btn-secondary btn-sm">Update house</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
