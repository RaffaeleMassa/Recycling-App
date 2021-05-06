@extends('layout')
   
@section('mainContent')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Week</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('weeks.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('weeks.update',$week->id) }}" method="POST">
    {{csrf_field()}}
    {{ method_field('PUT')}}
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Day:</strong>
                    <input type="text" name="Day" value="{{ $week->Day }}" class="form-control" placeholder="Day">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hour:</strong>
                    <input type="text" name="Hour" value="{{ $week->Hour }}" class="form-control" placeholder="Hour">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Recycle:</strong>
                    <input type="text" name="Recycle" value="{{ $week->Recycle }}" class="form-control" placeholder="Recycle">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection