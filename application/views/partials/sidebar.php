<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="profile">
            <div class="profile-wrapper">
              <img src="../../images/faces/face28.jpg" alt="profile">
              <div class="profile-details">
                <p class="name">Louis Cummings</p>
                <small class="designation">Business Analyst</small>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#dasboards" aria-expanded="false" aria-controls="dasboards">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Subdit Pemolaan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="dasboards">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link <?php if($this->uri->segment(1)=="perkembangan-kawasan"){echo "active";}?>" href="<?=base_url('perkembangan-kawasan')?>">Perkembangan Kawasan</a></li>
                <li class="nav-item"><a class="nav-link <?php if($this->uri->segment(1)=="kphk-tn"){echo "active";}?>" href="<?=base_url('kphk-tn')?>">KPHK TN</a></li>
                <li class="nav-item"><a class="nav-link <?php if($this->uri->segment(1)=="kphk-nontn"){echo "active";}?>" href="<?=base_url('kphk-nontn')?>">KPHK NON TN</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>