@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Temps</h1>
        </div>
    </div>
    <a href="{{route('temps.create')}}" class="btn btn-info pull-right">Create New</a><br><br>
    <div class="row">
        <table class="table table-striped">
            <tr>
                <th>Room1</th>
                <th>Room2</th>
                <th>Room3</th>
                <th>Room4</th>
            </tr>
            @foreach($temps as $temp)
                <tr>
                    <td>{{$temp->Room1}}</td>
                    <td>{{$temp->Room2}}</td>
                    <td>{{$temp->Room3}}</td>
                    <td>{{$temp->Room4}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@stop