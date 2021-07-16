@extends('admin.admin_master')
@section('admin')


<div class="container">
<div class="form-container border p-4"> <form action="">
<div class="row mt-4">

        <div class="col-md-4">
            <select name="company" class="form-control">
                @foreach($companies as $data)
                @if(isset($_GET['company']) && $_GET['company']==$data->id))
                    <option value="{{$data->id}}" selected>{{$data->name}}</option>
                    @else
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
         <div class="col-md-6">
             <div class="row">
                 <div class="col-md-6"><input type="radio" name="irt" value="yes" @if(isset($_GET['irt']) && $_GET['irt']=='yes') checked @endif> IRT Available Emloyees</div>
                 <div class="col-md-6"> <input type="radio" name="irt" value="no" @if(isset($_GET['irt']) && $_GET['irt']=='no') checked @endif> IRT Not Available Emloyees</div>
             </div>


         </div>
         <div class="col-md-2">
            <button type="submit" class="btn btn-info">Search</button>
         </div>


</div>

</form></div>
<br>
<br>
<div class="row">
    <div class="col-md-12">
        <div class="card">

@if(session('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{session('success')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @if($employees)
      @foreach ($employees  as $key=>$data )

    <tr>
       <th scope="row">{{$key+1}}</th>
       <td>{{$data->name}}</td>
        <td>
        <a href="" class="btn btn-primary">Edit</a>
        <a href="" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>

        </td>

    </tr>

      @endforeach
      @endif




  </tbody>
</table>



</div>
 </div>




</div>
</div>










@endsection

