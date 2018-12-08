  <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <img src="expert/image/logo.PNG" style="width:40px;">
        </a>
      </div>
       <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="{{ URL::to('dashboard_expert') }}">
            <button class="btn btn-info " type="button" >
              <i class="fa fa-tachometer">  </i> 
              Home
            </button></a>
          </li>&nbsp;
          <li>
            <a href="{{ URL::to('makeprofile_expert') }}">
            <button class="btn btn-info " type="button" >
              <i class="fa fa-user" >  </i> 
              Make Profile
            </button>
          </a>
          </li>&nbsp;
          <li>
            <a href="{{ URL::to('login') }}">
            <button class="btn btn-info " type="button" >
              <i class="fa fa-sign-in" >  </i> 
              login
            </button></a>
          </li>&nbsp;
          <li><a href="{{ URL::to('forum_expert') }}">
            <button class="btn btn-info " type="button" >
              <i class="fa fa-book">  </i> 
              Forumn
            </button></a>
          </li>&nbsp;
          <li><a href="{{ URL::to('userprofile_expert') }}">
            <button class="btn btn-info" type="button">
              <i class="fa fa-envelope-open" ></i>
              User Profile
            </button></a>
          </li>
          &nbsp;
          
        </ul>
    </div>
  </nav><br><br><br>