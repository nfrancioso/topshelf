<div class="sidebar" data-background-color="black" data-active-color="danger">

<!--
Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
-->

  <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text">
                TOPSHELF
            </a>
        </div>

        <ul class="nav">
          <li class="{{ Request::path() == 'dashboard' ? 'active' : '' }}">
                <a href="dashboard">
                    <i class="fa fa-tachometer"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
              <li class="{{ Request::path() == 'account' ? 'active' : '' }}">
                <a href="account">
                    <i class="fa fa-user"></i>
                    <p>Profile</p>
                </a>
            </li>
            <li>
              <li class="{{ Request::path() == 'scan' ? 'active' : '' }}">
                <a href="scan">
                    <i class="ti-text"></i>
                    <p>Scan Now</p>
                </a>
            </li>
            <li>
              <li class="{{ Request::path() == 'history' ? 'active' : '' }}">
                <a href="history">
                    <i class="ti-view-list-alt"></i>
                    <p>Scan History</p>
                </a>
            </li>
            <li>
              <li class="{{ Request::path() == 'resumes' ? 'active' : '' }}">
                <a href="resumes">
                    <i class="fa fa-folder-o"></i>
                    <p>Resume Manager</p>
                </a>
            </li>
            <li>
              <li class="{{ Request::path() == 'rewards' ? 'active' : '' }}">
                <a href="rewards">
                    <i class="fa fa-trophy"></i>
                    <p>Rewards</p>
                </a>
            </li>
            <li>
              <li class="{{ Request::path() == 'help' ? 'active' : '' }}">
                <a href="help">
                    <i class="fa fa-question"></i>
                    <p>Help</p>
                </a>
            </li>
  <li class="active-pro">
                <a href="upgrade">
                    <i class="ti-export"></i>
                    <p>Upgrade Now</p>
                </a>
            </li>


  </div>
</div>
