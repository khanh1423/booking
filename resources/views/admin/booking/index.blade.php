@extends('admin.master')
@section('content')
<div class="main-content-header" style="background: rgb(206, 204, 204); width: 95%; height: 500px; margin-left: 30px;margin-top: 20px">
    <div id="content" class="book_content">

        <div id="content_1">
            <div class="img">
                <img src="/upload/product/{{$data->image}}" height="300px">
            </div>
            <div class="description">
                <h1>Name: Dead Note</h1>
                <h3>Price: 300000 USD</h3>
                <button>BOOKING</button>
            </div>
        </div>
        
        <div id="content_2" style="margin-top: 8%">
            <select name="" id="" style="margin-bottom: 30px; padding: 5px 5px">
                <option value="">10/04/2023</option>
                <option value="">11/04/2023</option>
            </select>
            
            <table style="width: 30%; border: 0px " align="center">
                <tbody>
                    <tr>
                        <td>O7:00</td>
                        <td>O8:00</td>
                        <td>O9:00</td>
                        <td>10:00</td>
                        <td>11:00</td>
                        <td>12:00</td>
                        <td>13:00</td>
                    </tr>
                    <tr>
                        <td>14:00</td>
                        <td>15:00</td>
                        <td>16:00</td>
                        <td>17:00</td>
                        <td>18:00</td>
                        <td>19:00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection