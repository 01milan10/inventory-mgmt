@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('success'))
    <div id="alert" class="alert alert-success">
        {{session('success')}}
        <button type="button" class="close" data-dismiss="alert"><span>x</span></button>
    </div>
    @endif
    @if(session('error'))
    <div id="alert" class="alert alert-danger">
        {{session('error')}}
        <button type="button" class="close" data-dismiss="alert"><span>x</span></button>
    </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Awesome Inventory</h4>
                    <h6 class="card-subtitle">List of all available items</h6>
                    <div>
                        <a href="{{route('items.create')}}" class="btn btn-primary btn-rounded float-right waves-effect waves-light">Add New Item</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered m-t-30 table-hover contact-list">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Rate</th>
                                    <th>Category</th>
                                    <th>Added date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items as $key=>$item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->quantity}}</td>
                                    <td>{{$item->rate}}</td>
                                    <td>{{$item->category}}</td>
                                    <td>{{$item->added_date}}</td>
                                    <td class="d-flex justify-content-around">
                                        <a href="{{route('items.destroy',['item'=>$item->id])}}" data-toggle="tooltip" title="delete" data-placement="top"><i class="fa fa-trash"></i></a>
                                        <a href="{{route('items.edit',['item'=>$item->id])}}" data-toggle="tooltip" title="edit" data-placement="top"><i class="fas fa-pencil-alt"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @if(count($items)>5)
                <div class="card-footer">
                    <span>{{$items->render()}}</span>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<script>

</script>
@endsection