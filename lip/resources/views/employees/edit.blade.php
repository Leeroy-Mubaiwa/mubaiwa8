@extends('employees.layout')
@section('content')

<div class="card">
  <div class="card-header">Employees Page</div>
  <div class="card-body">

      <form action="{{ url('employees/' .$employee->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$employee->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$employee->name}}" class="form-control"></br>
        <label>Surname</label></br>
        <input type="text" name="surname" id="surname" value="{{$employee->surname}}" class="form-control"></br>
        <label>Department</label></br>
        <input type="text" name="dept_id" id="dept_id" value="{{$employee->dept_id}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
