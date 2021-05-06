@extends('layout')
 
@section('mainContent')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Week</h2>
            </div>
            
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Day</th>
            <th>Hour</th>
            <th>Recycle</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($weeks as $week)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $week->Day }}</td>
            <td>{{ $week->Hour}}</td>
            <td>{{ $week->Recycle}}</td>
            <td>
                <form action="{{ route('weeks.destroy',$week->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('weeks.show',$week->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('weeks.edit',$week->id) }}">Edit</a>
   
                    {{csrf_field()}}
                    {{ method_field('DELETE')}}
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="pull-center">
                <a class="btn btn-success" href="{{ route('weeks.create') }}"> Create New Day</a>
    </div>
    {!! $weeks->links() !!}
      
@endsection