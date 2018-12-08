@extends ('user.layouts.app')
@section('title','Forumn')
@section('content')

<div class="container">
 <div class="row">
  <div class="col-md-5"></div>
  <div class="col-md-4"></div>
  <div class="col-md-3">
    <input type="text" placeholder="Search.." name="search">
    <button type="submit"><i class="fa fa-search"></i></button>
  </div>

</div><br><br>
<form method="POST" action="{{ route('forum_user.store') }}">
  @csrf
  <div class="row">
    <div class="col-md-2">
      <p>Select Category:</p>
    </div>


    <div class="col-md-10">
      <select class="form-control">
       
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select>   
    </div>
  </div><br>

  <div class="row">
    <div class="col-md-10">
      <input type="text" name="question" id="question" class="form-control" placeholder="Enter Question">
    </div>
    <div class="col-md-2">
      <button class="btn btn-success float-right">Ask Question</button>
    </div>

  </div>
</form>

<hr class="hr1">

<b>Questions:</b>
<p>ndf;kaniiuvbeiuanvknvvbdunv</p>
<b>Answer:</b>
<p>vfdvsndfovnoifvvdf</p>


</div>
@endsection