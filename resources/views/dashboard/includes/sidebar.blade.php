 <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidebar" style="background-color: #05b1b1;">
      <div class="container-fluid">

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="./index.html">
          <img src="/assets/img/logo.svg" class="navbar-brand-img 
          mx-auto" alt="...">
        </a>

        <!-- User (xs) -->
        <div class="navbar-user d-md-none">

          <!-- Dropdown -->
          <div class="dropdown">

            <!-- Toggle -->
            <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-sm avatar-online">
                <img src="./assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
              </div>
            </a>

            <!-- Menu -->
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
              <a href="./profile-posts.html" class="dropdown-item">Profile</a>
              <a href="./account-general.html" class="dropdown-item">Settings</a>
              <hr class="dropdown-divider">
              <a href="./sign-in.html" class="dropdown-item">Logout</a>
            </div>

          </div>

        </div>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">

          <!-- Form -->
          <form class="mt-4 mb-3 d-md-none">
            <div class="input-group input-group-rounded input-group-merge">
              <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <span class="fe fe-search"></span>
                </div>
              </div>
            </div>
          </form>

          <!-- Navigation -->
          <ul class="navbar-nav">

            <li class="nav-item">
              <a class="nav-link text-white" href="/admin/dashboard">
                <i class="fe fe-home"></i> Dashboard
              </a>
            </li>
                   <li class="nav-item">
              <a class="nav-link text-white" href="#sidebarBasics" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarBasics">
                <i class="fe fe-layers"></i> All Projects
              </a>
              <div class="collapse " id="sidebarBasics">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item ">
                    <a href="/map" class="nav-link text-white">
                     Project A
                    </a>
                  </li>
                  <li class="nav-item ">
                    <a href="#" class="nav-link text-white">
                      Project B
                    </a>
                  </li>
                </ul>
              </div>
            </li>
              <li class="nav-item">
              <a class="nav-link text-white" href="/dashboard/customer">
                <i class="fe fe-user-plus"></i> Customer List
              </a>
            </li>
              <li class="nav-item">
              <a class="nav-link text-white" href="/dashboard/agent">
                <i class="fe fe-user-check"></i> Agent List
              </a>
            </li>
              <li class="nav-item">
              <a class="nav-link text-white" href="/dashboard/plot">
                <i class="fe fe-clipboard"></i> Polt List
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link text-white" href="/admin/lists">
                <i class="fe fe-user"></i> Admin's List
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">
                <i class="fe fe-unlock"></i> Change Password
              </a>
            </li>
             
          </ul>

          

        </div> <!-- / .navbar-collapse -->

      </div>
            <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>

    </nav>