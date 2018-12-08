@extends ('expert.layouts.app')
@section('title','User Profile')
@section('content')

 <div class="container">

    <h2>Number of users profile</h2>

    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Profile</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>John</td>
          <td><button class="btn btn-link" data-toggle="modal" data-target="#myModal">View</button></td>
        </tr>
      </tbody>
    </table>


<div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Profile</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          njjjvnsoirmvoisnvoisnvonoidvvnoisdmciosmciomeoino
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>





  </div>

@endsection
