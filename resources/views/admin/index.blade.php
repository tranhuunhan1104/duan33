@extends('layout.master')
@section('content')

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">
            Display board</h4>
        <p class="card-description">
          Add class <code>.table-admin</code>
        </p>
        <form class="navbar-form navbar-left"  action="" method="GET">
            @csrf
            <div class="row">
                <div class="col-3">
                </div>
            </div>
        </form>
        <div class="table-responsive pt-3">
          <table class="table table-info">
            <thead>
              <tr>
                <th>
                    #
                </th>
                <th>
                    Admin_name
                </th>
                <th>
                    Email
                </th>
                <th>
                    Password
                </th>

              </tr>
            </thead>
            <tbody>
                @foreach ($users as $key => $team)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$team->name}}</td>
                    <td>{{$team->email}}</td>
                    <td>{{$team->password}}</td>

                  </tr>
        @endforeach

            </tbody>4
            
          </table>
        </div>
      </div>
    </div>
  </div>

  @endsection
