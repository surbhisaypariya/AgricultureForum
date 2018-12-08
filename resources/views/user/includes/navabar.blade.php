 <nav class="navbar navbar-expand-sm"  style="background-color: #050a50">
      <div class="container-fluid">
        <div class="navbar-header" >
          <a class="navbar-brand" href="{{ URL::to('dashboard_user') }}">
            <img src="user/image/logo.PNG" style="width:40px;">
          </a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="{{ URL::to('dashboard_user') }}">
            <button class="btn btn-info " type="button" >
              <i class="fa fa-tachometer">  </i> 
              Home
            </button></a>
          </li>&nbsp;
          <li>
            <a href="{{ URL::to('makeprofile_user') }}">
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
          <li><a href="{{ URL::to('forum_user') }}">
            <button class="btn btn-info " type="button" >
              <i class="fa fa-book">  </i> 
              Forumn
            </button></a>
          </li>&nbsp;
          <li><a href="{{ URL::to('production_user') }}">
            <button class="btn btn-info" type="button">
              <i class="fa fa-envelope-open" ></i>
              Production Awareness data
            </button></a>
          </li>
          &nbsp;
          
        </ul>
      </div>
    </nav>
  <br><br>