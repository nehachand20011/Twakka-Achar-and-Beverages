@extends('layouts.app', ['activePage' => 'product', 'titlePage' => __('Edit Product')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-primary">
            <div class="row">
              <div class="col-md-8">
                <h4 class="card-title mt-0"> Edit Product</h4>
            <p class="card-category"> Here you can  edit product.</p>
              </div>
              <div class="col-md-4"  style="text-align: right;" >
                <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Edit Product</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
             <form action="{{route('postEditProduct',$product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf()
      <div class="modal-body">
        
  <div class="form-group">
    <label for="exampleInputEmail1">Product Title *</label> 
    <input type="text"  name="title" value="{{$product->title}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required> 
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Catagory *</label> 
    <select  name="category" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
      @foreach($categories as $category)
        <option value="{{ $category->id}}" @if($category->id == $product->category_id) selected @endif>{{ $category->title }}</option>
      @endforeach 
    </select> 
  </div>
  <div class="form-group">
     <label for="exampleInputEmail1">Detail *</label>
    <textarea  name="detail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>{!! $product->detail !!}</textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Cost *</label>
    <input type="text" value="{{$product->cost}}" name="cost" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required> 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input type="file"  name="photo" class="form-control" id="exampleInputPassword1" style="display: initial; z-index: 9999; opacity: 1;">
    @if($product->photo != Null)
    <br />
    <img src="{{asset('site/product/'.$product->photo)}}" width="100">
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
<!-- Button trigger modal -->



@endsection