<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
          <!-- <img src="../../images/logo.svg" alt="logo"/> -->
          SIPIKA
        </a>
        <a class="navbar-brand brand-logo-mini" href="/"><img src="../../images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="fas fa-align-justify"></span>
        </button>
        <br>
        <ul class="navbar-nav mr-lg-2">
           <form action="/pencarian" method="GET">
              <li class="nav-item nav-search d-none d-lg-block">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="search">
                          <i class="fa fa-search"></i>
                        </span>
                      </div>
                        <input type="text" class="form-control" placeholder="Search Now"  name="seacrh" aria-label="search" aria-describedby="search">
                    </div>
              </li>
          </form>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          
         
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
              <?php if(empty($userdata['foto'])){?>
                  <img src="../../images/user.png">
              <?php }else{ ?>
                  <img src="<?php echo constant('API_URL').'/'.$userdata['foto']; ?>">
              <?php }; ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="/logout">
                <i class="fa fa-sign-out-alt text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="fas fa-align-justify"></span>
        </button>
      </div>
    </nav>