@extends('admin.admin_master')


@section('admin')

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Company
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">A</a>
    <a class="dropdown-item" href="#">B</a>
    <a class="dropdown-item" href="#">C</a>
  </div>
</div>
@endsection
