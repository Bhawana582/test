@extends('admin.admin_master')

@section('admin')
<form action="{{url('about/submit')}}" method="POST" >
    @csrf
 <div class="content-wrapper">
          <div class="content">							<div class="row">
								<div class="col-lg-12">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Add Company</h2>
										</div>
										<div class="card-body">
											<form>
												<div class="form-group">
													<label >Company name</label>
													<input type="text" class="form-control" placeholder="Enter Title" name="title" >
													<span class="mt-2 d-block"></span>
												</div>
												<div class="form-group">
													<label >Income</label>
													<input type="text" class="form-control" name="long_des">

												</div>
												<div class="form-group">
													<label >Tax-status</label>
													<input type="text" class="form-control"  name="short_des">

												</div>


												<div class="form-footer pt-4 pt-5 mt-4 border-top">
													<button type="submit" class="btn btn-primary btn-default">Submit</button>

											</form>
										</div>
									</div>
                                    </form>

@endsection
