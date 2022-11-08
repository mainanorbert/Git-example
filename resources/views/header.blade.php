
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home">LaraGigs</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/listings">Home</a></li>
        <li class="active"><a href="/create">Create a Gig</a></li>
        </ul>
      <form action="/listings" class="navbar-form navbar-left" method="GET">
        <div class="form-group">
          <input type="text" name="search" class="form-control search-box" placeholder="Search" 
          >
        </div>
        <button type="submit" class="btn bg-blue-500 rounded rounded-xl">Search</button>
      </form>
      <div class="">
        <ul class="flex gap-6 float-right text-2xl text-black-500">
          @auth      
          <li><span class="font-bold text-uppercase text-xl">Welcome, {{auth()->user()->name}}</span></li>
         
          <li>
          <a href="/listings/manage">Manage Gig Setting</a>         
            
            </li>
            <li>
              <form action="/logout" method="POST">
                @csrf
                <button class='font-italic bg-blue-100 hover:bg-200 rounded rounded-xl px-2 py-1'>Logout</button>
              </form>
            </li>
          @else
          <li><a href="/register">Register</a></li>
           <li><a href="login">Login</a></li>
           @endauth

        </ul>
      </div>
         </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>