<nav class="navbar navbar-expand-lg bg-light px-3">
    <div class="container-fluid">
      <a class="navbar-brand me-5" href="#">Room Booking System</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item broder border-start">
            <a class="nav-link text-dark px-3" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item broder border-start">
            <a class="nav-link text-dark px-3" href="#">Profile</a>
          </li>
          <li class="nav-item broder border-start px-3">
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button type="submit" class="btn btn-none logout">Log out</button>
            </form>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</div>