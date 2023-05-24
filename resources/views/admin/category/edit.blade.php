@extends('layouts.app', ['activePage' => 'category', 'titlePage' => __('Edit Category')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-primary">
            <div class="row">
              <div class="col-md-8">
                <h4 class="card-title mt-0"> Edit Category</h4>
            <p class="card-category"> Here you can edit category.</p>
              </div>
              <div class="col-md-4"  style="text-align: right;" >
                <a class="btn btn-primary" href="{{route('getManageCategory')}}">Manage Category</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <form action="{{route('postEditCategory',$categorydata->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf()
                <div class="modal-body">
                 
            <div class="form-group">
              <label for="exampleInputEmail1">Category Title *</label>
              <input type="text"  name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$categorydata->title}}" required>
              
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Image</label>
              <input type="file"  name="photo" class="form-control" id="exampleInputPassword1" style="display: initial; z-index: 9999; opacity: 1;" >
                @if($categorydata->photo)
              <br>
              <img src="{{asset('site/category/'.$categorydata->photo)}}" width="100">
               @endif
            </div>
            
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection