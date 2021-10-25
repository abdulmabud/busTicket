<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <a class="sidebar-brand brand-logo" href="index.php"><img src="assets/images/logo.jpg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <hr>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-bus menu-icon"></i>
              <span class="menu-title">Bus Info</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="bus.php">Show Bus</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="addbus.php">Add Bus</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-road-variant menu-icon"></i>
              <span class="menu-title">Route Info</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="route.php">Show Route</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="addroute.php">Add Route</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-bank menu-icon"></i>
              <span class="menu-title">Place Info</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic3">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="place.php">Show Place</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="addplace.php">Add Place</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="payment.php">
              <i class="mdi mdi-ticket-confirmation menu-icon"></i>
              <span class="menu-title">Payment Confirm</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="mdi mdi-human-handsup menu-icon"></i>
              <span class="menu-title">User Feedback</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="mdi mdi-contacts menu-icon"></i>
              <span class="menu-title">User Contact</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../index.php" target="_blank">
              <i class="mdi mdi-web menu-icon"></i>
              <span class="menu-title">Visit Site</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title">Role</span>
            </a>
          </li> -->
        </ul>
      </nav>