@extends('admin.master')
@section('content')
<div class="main-content-header" style="background: rgb(206, 204, 204); width: 95%; height: 500px; margin-left: 30px;margin-top: 20px">
    <div class="card-body" style="margin: 30px;">
        <table id="example2" class="table_product">
            <thead>
                <tr>
                    <th>Loop</th>
                    <th>Customer Name</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</a></td>
                        <td>{{$item->phone}}</td>
                        <td>None</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="content">
    
</div>
@endsection