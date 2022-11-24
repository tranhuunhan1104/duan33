@extends('layout.master')
@section('content')
<form method="POST" action="{{route('category.update',[$categories->id])}}" enctype= "multipart/form-data" >
    @method('PUT')
    @csrf
         <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit table</h4>
                  <p class="card-description">
                    Add class <code>.table-edit</code>
                    
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Category_name</th>
                          <th>Description</th>
                          <th>Slug</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="text" id="fname" name="name" value="{{$categories->name}}"  ></td>
                          <td> <input type="text" id="lname" name="description" value="{{$categories->description}}"></td>
                          <td> <input type="text" id="lname" name="slug" value="{{$categories->slug}}"></td>
                          <td> <input type="text" id="lname" name="status" value="{{$categories->status}}"></td>
                        </tr>
                        <tr><input class="btn btn-info" type="submit" value="Submit"></tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection
