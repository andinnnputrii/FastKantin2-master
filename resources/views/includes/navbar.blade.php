<nav class="navbar navbar-expand-lg d-flex justify-content-between">
    <div class="" id="navbarNav">
      <ul class="navbar-nav" id="leftNav">
        <li class="nav-item">
          <a class="nav-link" id="sidebar-toggle" href="#"><i data-feather="arrow-left"></i></a>
        </li>

      </ul>
      </div>
      <div class="logo">
        <a class="navbar-brand" href="index.html"></a>
      </div>
      <div class="" id="headerNav">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            {{-- <a class="nav-link search-dropdown" href="#" id="searchDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i data-feather="search"></i></a> --}}
            <div class="dropdown-menu dropdown-menu-end dropdown-lg search-drop-menu" aria-labelledby="searchDropDown">
              <form>
                <input class="form-control" type="text" placeholder="Type something.." aria-label="Search">
              </form>
              <h6 class="dropdown-header">Recent Searches</h6>
              <a class="dropdown-item" href="#">charts</a>
              <a class="dropdown-item" href="#">new orders</a>
              <a class="dropdown-item" href="#">file manager</a>
              <a class="dropdown-item" href="#">new users</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link notifications-dropdown position-relative" href="#" id="notificationsDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                <i class="fas fa-bell"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                </span>
            </a>

            <div class="dropdown-menu dropdown-menu-end notif-drop-menu" aria-labelledby="notificationsDropDown">
              <h6 class="dropdown-header">Notifications</h6>
              <a href="#">
                <div class="header-notif">
                  <div class="notif-image">
                    <span class="notification-badge bg-info text-white">
                      <i class="fas fa-bullhorn"></i>
                    </span>
                  </div>
                  <div class="notif-text">
                    <p class="bold-notif-text">faucibus dolor in commodo lectus mattis</p>
                    <small>19:00</small>
                  </div>
                </div>
              </a>
              <a href="#">
                <div class="header-notif">
                  <div class="notif-image">
                    <span class="notification-badge bg-primary text-white">
                      <i class="fas fa-bolt"></i>
                    </span>
                  </div>
                  <div class="notif-text">
                    <p class="bold-notif-text">faucibus dolor in commodo lectus mattis</p>
                    <small>18:00</small>
                  </div>
                </div>
              </a>
              <a href="#">
                <div class="header-notif">
                  <div class="notif-image">
                    <span class="notification-badge bg-success text-white">
                      <i class="fas fa-at"></i>
                    </span>
                  </div>
                  <div class="notif-text">
                    <p>faucibus dolor in commodo lectus mattis</p>
                    <small>yesterday</small>
                  </div>
                </div>
              </a>
              <a href="#">
                <div class="header-notif">
                  <div class="notif-image">
                    <span class="notification-badge">
                      <img src="{{asset('assets/images/avatars/profile-image.png')}}" alt="">
                    </span>
                  </div>
                  <div class="notif-text">
                    <p>faucibus dolor in commodo lectus mattis</p>
                    <small>yesterday</small>
                  </div>
                </div>
              </a>
              <a href="#">
                <div class="header-notif">
                  <div class="notif-image">
                    <span class="notification-badge">
                      <img src="../../assets/images/avatars/profile-image.png" alt="">
                    </span>
                  </div>
                  <div class="notif-text">
                    <p>faucibus dolor in commodo lectus mattis</p>
                    <small>yesterday</small>
                  </div>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ Auth::check() && Auth::user()->profile_image ? Auth::user()->profile_image : asset('assets/images/profile.jpeg') }}" alt="Profile Image" class="rounded-circle" width="40" height="40" style="object-fit: cover;">
            </a>

            <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
              <a class="dropdown-item" href=""><i data-feather="user"></i>Profile</a>
              <form action="{{route('logout')}}" method="POST" class="mb-0">
                @csrf
                <button type="submit" class="dropdown-item" style="background: none; border: none; padding: 0; text-align: left; width: 100%;">
                    <i data-feather="log-out"></i> Logout
                </button>
            </form>
            </div>
          </li>
        </ul>
    </div>
  </nav>

