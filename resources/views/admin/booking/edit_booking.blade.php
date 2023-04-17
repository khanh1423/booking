@extends('admin.master')
@section('content')
<div class="main-content-header" style="background: rgb(206, 204, 204); width: 95%; height: 500px; margin-left: 30px;margin-top: 20px">

    <div class="card-body" style="margin: 30px;">
        <form class="col-4" action="{{route('admin.booking.update',$data->id)}}" enctype="multipart/form-data" method="POST">
            @csrf
            
            <div class="form-group">
              <label>Shop Name:</label>
              <input class="form-control" disabled value="{{$data->Shop->name}}">
                
            </div>
            <br>
            <div class="form-group">
                <label>Product:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="form-control" disabled value="{{$data->Product->name}}">
            </div>
            <br>
            <div class="form-group">
                <label>Customer:</label> &nbsp;&nbsp;
                <input class="form-control" disabled value="{{$data->Customer->name}}">&nbsp;&nbsp;&nbsp;&nbsp;
                <label>Phone:</label> &nbsp;
                <input class="form-control" disabled value="{{$data->Customer->phone}}">
            </div>
            <br>
            <div class="form-group">
                <label>Oder Time:</label> &nbsp;
                <input class="form-control" disabled value="{{$data->oder_time ." / ". date('d-m-Y', strtotime($data->oder_date));}}">
            </div>
            <br>
            <div class="form-group">
                <label>Status:</label> &nbsp;
                <select name="status">
                    <option value="1"{{$data->status == 1 ? 'selected' : false}}>Completed</option>
                    <option value="2"{{$data->status == 2 ? 'selected' : false}}>Processed</option>
                    <option value="3"{{$data->status == 3 ? 'selected' : false}}>Cancelled</option>
                    <option value="4"{{$data->status == 4 ? 'selected' : false}}>Pending</option>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Xác nhận</button>

        </form>
        

    </div>
</div>

<div class="content">
    
</div>
@endsection