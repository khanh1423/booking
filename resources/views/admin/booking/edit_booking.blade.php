@extends('admin.master')
@section('content')
<div class="main-content-header" style="background: rgb(206, 204, 204); width: 95%; height: 500px; margin-left: 30px;margin-top: 20px">

    <div class="card-body" style="margin: 30px;">
        <form class="col-4" action="{{route('product.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
            
            <div class="form-group">
              <label>Name:</label>
              <input name="name" class="form-control" >
                @if ($errors->has('name'))
                    <br>&emsp;&emsp;&emsp;&nbsp;<small style="color: red" class="text-danger form-text"><Table>{{$errors->first('name')}}</Table></small>
                @endif
            </div>
            <br>
            <div class="form-group">
                <label>Price:</label> &nbsp;
                <input name="price" class="form-control" >
                  @if ($errors->has('price'))
                      <br>&emsp;&emsp;&emsp;&nbsp;<small style="color: red" class="text-danger form-text"><Table>{{$errors->first('price')}}</Table></small>
                  @endif
            </div>
            <br>
            <div class="form-group">
                <label>Image:</label>
                <input type="file" name="image" id="">
                  @if ($errors->has('image'))
                      <br>&emsp;&emsp;&emsp;&nbsp;<small style="color: red" class="text-danger form-text"><Table>{{$errors->first('image')}}</Table></small>
                  @endif
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Xác nhận</button>

        </form>
        

    </div>
</div>

<div class="content">
    
</div>
@endsection