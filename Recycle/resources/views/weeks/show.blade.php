@extends('layout')
  
@section('mainContent')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Day</h2>
            </div>
           
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Day:</strong>
                {{ $week->Day }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hour:</strong>
                {{ $week->Hour }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Recycle:</strong>
                {{ $week->Recycle }}
            </div>
        </div>
        <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('weeks.index') }}"> Back</a>
        </div>
    </div>
    
@endsection