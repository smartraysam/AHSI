  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="images/logo.png" alt="AHSI Logo" style="margin:auto; width:200px; height:100px">
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">Admin</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item has-treeview menu-open">
                      <a href="/admin" class="nav-link active">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>
                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-calendar" aria-hidden="true"></i>
                          <p>
                              Events
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="pages/UI/general.html" class="nav-link">
                                  <i class=" nav-icon fas fa-eye" aria-hidden="true"></i>
                                  <p>View All Events </p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/UI/icons.html" class="nav-link">
                                  <i class="  nav-icon fas fa-calendar-plus"></i>
                                  <p>Add Event</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-tasks"></i>
                          <p>
                              Causes
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="pages/UI/general.html" class="nav-link">
                                  <i class="far fa-eye nav-icon"></i>
                                  <p>View All Causes </p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/UI/icons.html" class="nav-link">
                                  <i class="fa fa-plus-circle nav-icon"></i>
                                  <p>Add Causes</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-newspaper"></i>
                          <p>
                              News
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="pages/UI/general.html" class="nav-link">
                                  <i class="far fa-eye nav-icon"></i>
                                  <p>View All News </p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/UI/icons.html" class="nav-link">
                                  <i class="fa fa-plus-circle nav-icon"></i>
                                  <p>Add News</p>
                              </a>
                          </li>
                      </ul>
                  </li>


                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-tree"></i>
                          <p>
                              Portfolio
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="pages/UI/general.html" class="nav-link">
                                  <i class="far fa-eye nav-icon"></i>
                                  <p>View All Portfolio </p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/UI/icons.html" class="nav-link">
                                  <i class="fa fa-plus-circle nav-icon"></i>
                                  <p>Add Portfolio</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <i class="nav-icon far fa-envelope"></i>
                          <p>
                              Mailbox
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="pages/mailbox/mailbox.html" class="nav-link">
                                  <i class="fa fa-inbox nav-icon"></i>
                                  <p>Inbox</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/mailbox/compose.html" class="nav-link">
                                  <i class="fas fa-pen-square nav-icon"></i>
                                  <p>Compose</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/mailbox/read-mail.html" class="nav-link">
                                  <i class="fa fa-book nav-icon"></i>
                                  <p>Read</p>
                              </a>
                          </li>
                      </ul>
                  </li>


                  <li class="nav-item">
                      <a href="pages/gallery.html" class="nav-link">
                          <i class="nav-icon fas fa-dollar-sign    "></i>
                          <p>
                              Donations
                          </p>

                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="" class="nav-link">
                          <i class="nav-icon far fa-image"></i>
                          <p>
                              Gallery
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="" class="nav-link">
                          <i class="nav-icon fa fa-users" aria-hidden="true"></i>
                          <p>
                              Volunteers
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                          class="nav-link">
                          <i class="nav-icon fas fa-sign-out-alt"></i>
                          <p>
                              LogOut
                          </p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
