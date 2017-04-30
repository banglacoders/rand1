@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Create Data</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form class="" action="{{route('temps.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group{{ ($errors->has('Room1')) ? $errors->first('Room1') : '' }}">
                    <input type="text" name="Room1" class="form-control" placeholder="Room1">
                    {!! $errors->first('Room1','<p class="help-block">:message</p>') !!}
                </div>
                <div class="form-group{{ ($errors->has('Room2')) ? $errors->first('Room2') : '' }}">
                    <input type="text" name="Room2" class="form-control" placeholder="Room2">
                    {!! $errors->first('Room2','<p class="help-block">:message</p>') !!}
                </div>
                <div class="form-group{{ ($errors->has('Room3')) ? $errors->first('Room3') : '' }}">
                    <input type="text" name="Room3" class="form-control" placeholder="Room3">
                    {!! $errors->first('Room3','<p class="help-block">:message</p>') !!}
                </div>
                <div class="form-group{{ ($errors->has('Room4')) ? $errors->first('Room4') : '' }}">
                    <input type="text" name="Room4" class="form-control" placeholder="Room4">
                    {!! $errors->first('Room4','<p class="help-block">:message</p>') !!}
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="save">
                </div>
            </form>
        </div>
    </div>
@stop