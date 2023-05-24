@extends('layouts.app', ['activePage' => 'category', 'titlePage' => __('Manage Category')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-primary">
            <div class="row">
              <div class="col-md-8">
                <h4 class="card-title mt-0"> Manage Category</h4>
            <p class="card-category"> Here you can add,delete and edit category.</p>
              </div>
              <div class="col-md-4"  style="text-align: right;" >
                <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Category</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover"> 
                <thead class="">
                  <th>
                    ID
                  </th>
                  <th>
                    Photo
                  </th>
                  <th>
                  Title
                  </th>
                  <th>
                    Created Date
                  </th>
                  <th>
                  Action
                  </th>
                </thead>
                <tbody>
                  @foreach($categories as $item)
                  <tr>
                    <td>{{$item->id}}</td>
                    <td>
                      @if($item->photo)
                      <img src="{{asset('site/category/'.$item->photo)}}" width="100">
                      @else
                        N/A <!-- none photo chaaena vane -->
                      @endif
                    </td>
                    <td>{{$item->title}}</td>
                    <td>
                      {{$item->created_at}}
                    </td>
                    <td>
                      <a href="{{route('getEditCategory',$item->id)}}">Edit</a> | <a href="{{route('getDeleteCategory',$item->id)}}">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Button trigger modal -->


<!-- Modal -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form action="{{route('postAddCategory')}}" method="POST" enctype="multipart/form-data">
        @csrf()
      <div class="modal-body">
       
  <div class="form-group">
    <label for="exampleInputEmail1">Category Title *</label>
    <input type="text"  name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input type="file"  name="photo" class="form-control" id="exampleInputPassword1" style="display: initial; z-index: 9999; opacity: 1;">  
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
@endsection