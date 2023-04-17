@extends('admin.master')
@section('content')
<div class="main-content-header" style="background: rgb(206, 204, 204); width: 95%; height: 500px; margin-left: 30px;margin-top: 20px">
    <div class="card-body" style="margin: 30px;">
        <table id="example2" class="table_product">
            <thead>
                <tr>
                    <th>Loop</th>
                    <th>Shop Name</th>
                    <th>Product Name</th>
                    <th>Customer Name</th>
                    <th>Oder Time</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->Shop->name}}</a></td>
                        <td>{{$item->Product->name}}</td>
                        <td>{{$item->Customer->name}}</td>
                        <td>{{$item->oder_time}} / {{$item->oder_date}}</td>
                        <td>
                            <?php
                                switch($item->status) {
                                    case 1:
                                        echo "Completed";
                                        break;
                                    case 2:
                                        echo "Processed";
                                        break;
                                    case 3:
                                        echo "Cancelled";
                                        break;
                                    case 4:
                                        echo 'Pending';
                                        break;
                                }
                           ?>

                           {{-- <select name="" id="">
                                <option value="1">Completed</option>
                                <option value="2">Processed</option>
                                <option value="4">Pending</option>
                                <option value="3">Cancelled</option>
                           </select> --}}
                        </td>
                        <td><a href="{{URL('booking/edit', $item->id)}}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="content">
    
</div>

@section('js')
    @if(Session::has('update_booking'))
        <script>
            alert('Successfully updated');
        </script>
    @endif
@endsection

@endsection