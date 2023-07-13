@extends('employees.layout')
@section('content')


<div class="card">
  <div class="card-header">Employees Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Name : {{ $employee->name }}</h5>
        <p class="card-text">Surname : {{ $employee->surname }}</p>
        <p class="card-text">Department : {{ $employee->dept_id }}</p>
  </div>

    </hr>

  </div>
</div>
