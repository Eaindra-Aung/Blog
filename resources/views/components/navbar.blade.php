<nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/">Creative Coder</a>
        <div class="d-flex">
          <a href="/" class="nav-link">Home</a>
          <a href="/#blogs" class="nav-link">Blogs</a>
          @guest
          <a href="/register" class="nav-link">Register</a>


          @else
                <a href="" class="nav-link">
                  Welcome {{auth()->user()->name}}</a>
                  <form action="/logout" method="POST">
          @csrf
                <button type="submit" href=""
                 class="nav-link btn btn-link">Log Out
                </button>
               </form>
          @endguest
               <a href="/login" class="nav-link">Log In</a>
                <a href="#subscribe" class="nav-link">Subscribe</a>
        </div>
      </div>
    </nav>