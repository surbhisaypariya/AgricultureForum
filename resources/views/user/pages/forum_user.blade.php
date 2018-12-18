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

</div>
<br>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<br>
<form method="POST" action="{{ route('forum_user.store') }}">
  @csrf
  <div class="row">
    <div class="col-md-2">
      <p>Select Category:</p>
    </div>


    <div class="col-md-10">
      <select class="form-control" name="category_id">
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

@foreach($questions as $question)
<hr class="hr1">

<div class="row">
  <div class="col-md-12 ">
    <div class="row">
      <div class="col-md-1">
        <h3>
          <span class="badge badge-pill badge-dark">  
            Q{{ $question->id }}
          </span>
        </h3>
      </div>
      <div class="col-md-11">
        <strong>{{ $question->question }}</strong>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10">
        <a href="#{{ $question->id }}"> 
          <h5>Answers 
            <span class="badge badge-secondary">New</span>
          </h5>
        </a>
      </div>
      <div class="col-md-2 ">
        <div class="row">
          <div class="col-md-6">
            <strong>{{ $question->category->name }}</strong>
          </div>
          <div class="col-md-6">
            <strong class="float-right">User {{ $question->user_id }}</strong>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach

</div>
@endsection