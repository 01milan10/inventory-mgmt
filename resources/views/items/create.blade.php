@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form class="form-horizontal form-material" action="{{route('items.store')}}" method="POST">
                @csrf()
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add new item</h4>
                        <div class="form-group">
                            <div class="col-md-12 m-b-20 @error('name') is-invalid @enderror">
                                <input type="text" class="form-control" name="name" placeholder="Item name" value="{{old('name')}}">
                                @error('name')
                                <div class="invalid-feedback">
                                    <span>{{$message}}</span>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-12 m-b-20 @error('name') is-invalid @enderror">
                                <input type="number" class="form-control" name="quantity" placeholder="Quantity" value="{{old('quantity')}}">
                                @error('quatity')
                                <div class="invalid-feedback">
                                    <span>{{$message}}</span>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-12 m-b-20 @error('name') is-invalid @enderror">
                                <input type="number" class="form-control" name="rate" placeholder="Rate" value="{{old('rate')}}">
                                @error('rate')
                                <div class="invalid-feedback">
                                    <span>{{$message}}</span>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-12 m-b-20 @error('name') is-invalid @enderror">
                                <input type="text" class="form-control" name="category" placeholder="Category" value="{{old('category')}}">
                                @error('category')
                                <div class="invalid-feedback">
                                    <span>{{$message}}</span>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-12 m-b-20 @error('name') is-invalid @enderror">
                                <input type="date" class="form-control" name="date" placeholder="Added Date" value="{{old('date')}}">
                                @error('date')
                                <div class="invalid-feedback">
                                    <span>{{$message}}</span>
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light ">Add to the system</button>
                        <a href="{{route('home')}}" class="btn btn-outline-danger btn-rounded float-right waves-effect waves-light">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection