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
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="text" id="fname" name="name" value="{{$categories->name}}"  ></td>
                        </tr>
                        <tr><input class="btn btn-info" type="submit" value="Submit"></tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection
