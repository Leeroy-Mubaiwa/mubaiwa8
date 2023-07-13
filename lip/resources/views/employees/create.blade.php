@extends('employees.layout')
@section('content')

    <div class="card">
        <div class="card-header">Employees Page</div>
        <div class="card-body">

            <form action="{{ url('employees') }}" method="post">
                {!! csrf_field() !!}


                @if ($errors->has('department'))
                    <div class="help-block text-danger">
                        {{ $errors->first('department') }}
                    </div>
                @endif

                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Surname</label></br>
                <input type="text" name="surname" id="surname" class="form-control"></br>
                <label>Department</label></br>


                <select name="dept_id" id="dept_id" class="form-control">
                    @if (empty($departments))
                        <option value="">No departments</option>
                    @endif
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                </select>



                <input type="submit" value="Save" class="btn btn-success"></br>

            </form>

        </div>
    </div>

@stop
