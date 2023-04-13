@extends('admin.master')
@section('content')
<div class="main-content-header" style="background: rgb(206, 204, 204); width: 95%; height: 500px; margin-left: 30px;margin-top: 20px">
    <div id="content" class="book_content">

        <div id="content_1">
            <div class="img">
                <img src="/upload/product/{{$data->image}}" height="300px">
            </div>
            <div class="description">
                <h1>Name: {{$data->name}}</h1>
                <h3>Price: {{$data->price}}</h3>
                <form action="{{route('booking.store')}}" enctype="multipart/form-data" method="POST">
                    @csrf

                    <label>Name:</label>
                    <input name="name" class="form-control"><br>
                    @if ($errors->has('name'))
                        <small style="color: red">{{$errors->first('name')}}</small>
                    @endif
                    <br>
                    <label>Phone:</label>
                    <input name="phone" class="form-control"><br>
                    @if ($errors->has('phone'))
                        <small style="color: red">{{$errors->first('phone')}}</small>
                    @endif
                    <br>
                    <div class="hidden" hidden>
                        <input type="text" name="product_id" value="{{$data->id}}">
                        <input type="text" name="shop_id" value="1">
                        <input type="text" name="oder_date">
                        <input type="text" name="oder_time">
                    </div>
                    <button class="btn1" disabled type="submit">BOOKING</button>
                </form>
            </div>
        </div>
        
        <div id="content_2" style="margin-top: 8%">
            {{-- <select name="date" id="" style="margin-bottom: 30px; padding: 5px 5px">
                @foreach ($created_at as $item)
                    <option value="{{date("Y-m-d", strtotime($item->created_at))}}">{{date("d-m-Y", strtotime($item->created_at))}}</option>
                @endforeach
            </select> --}}
            <label for="">DATE: </label>
            <input type="date" min="{{$current_day}}" name="date" value="{{$current_day}}" placeholder="dd-mm-yyyy" style="margin-bottom: 30px; padding: 5px 5px">
            {{-- <input type="date" name="begin" placeholder="dd-mm-yyyy" value="" min="2023-04-12" max="2030-12-31"> --}}
            <table style="width: 30%; border: 0px " align="center">
                {{-- Đây là chỗ hiển thị thời gian --}}
                {{-- @include('admin.booking.datetime') --}}
            </table>
        </div>
    </div>
</div>
@endsection


@section('js')

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function(){

        @if(Session::has('notification'))
            alert("BOOKING SUCCESS");
        @endif

        var date = $("input[name='date']").val();
        var product_id = $("input[name='product_id']").val();
        $("input[name='oder_date']").val(date);
        $("input[name='oder_time']").val('');
        $('.btn1').css("background-color","rgb(156, 158, 158)");
        $.ajax({
            url: '{{ route('getdate') }}',
            method: 'POST',
            data: {date: date, product_id: product_id},
            dataType: 'html',
            success: function (result) {
                $('#content_2 table').html(result);
            }
        })
    });

    $("input[name='date']").change(function(){
        var date = $(this).val();
        var product_id = $("input[name='product_id']").val();
        $("input[name='oder_date']").val(date);
        $("input[name='oder_time']").val('');
        document.querySelector("button").disabled = true;
        $('.btn1').css("background-color","rgb(156, 158, 158)");
        $.ajax({
            url: '{{ route('getdate') }}',
            method: 'POST',
            data: {date: date, product_id: product_id},
            dataType: 'html',
            success: function (result) {
                $('#content_2 table').html(result);
            }
        })
    });

    $(document).on('click','.tboby_content tr td', function(){
        var time = $(this).attr('attr-val');
        var date = $("input[name='date']").val();
        // var name = $("input[name='name']").val();
        // var phone = $("input[name='phone']").val();
        $("input[name='oder_time']").val(time);
        $('.tboby_content tr td').css("background-color","rgb(206, 204, 204)");
        $('.td_warning').css("background-color","red");
        $(this).css("background-color","blue");

        if(time != "" && date != ""){
            document.querySelector("button").disabled = false;
            $('.btn1').css("background-color","blue");
        }
    });

</script>

@endsection