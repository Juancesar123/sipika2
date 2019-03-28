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
            <a class="nav-link <?php if($this->uri->segment(1)=="perkembangan-kawasan"){echo "active";}?>" href="<?=base_url('perkembangan-kawasan')?>">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#dasboards" aria-expanded="false" aria-controls="dasboards">
              <i class="fa fa-list-alt menu-icon"></i>
              <span class="menu-title">Subdit Pemolaan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="dasboards">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link <?php if($this->uri->segment(1)=="kphk-tn"){echo "active";}?>" href="<?=base_url('kphk-tn')?>">KPHK TN</a></li>
                <li class="nav-item"><a class="nav-link <?php if($this->uri->segment(1)=="kphk-nontn"){echo "active";}?>" href="<?=base_url('kphk-nontn')?>">KPHK NON TN</a></li>
                <li class="nav-item"><a class="nav-link <?php if($this->uri->segment(1)=="usulan-tahura"){echo "active";}?>" href="<?=base_url('usulan-tahura')?>">Usulan Tahura</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#subditiika" aria-expanded="false" aria-controls="subditiika">
              <i class="fa fa-table menu-icon"></i>
              <span class="menu-title">Subdit IIKA</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="subditiika">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link <?php if($this->uri->segment(1)=="sketsa-sejarah"){echo "active";}?>" href="<?=base_url('sketsa-sejarah')?>">Sketsa Sejarah</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($this->uri->segment(1)=="perkembangan-kawasan"){echo "active";}?>" href="<?=base_url('perkembangan-kawasan')?>">
              <i class="fa fa-users menu-icon"></i>
              <span class="menu-title">User Management</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($this->uri->segment(1)=="perkembangan-kawasan"){echo "active";}?>" href="<?=base_url('perkembangan-kawasan')?>">
              <i class="fa fa-globe menu-icon"></i>
              <span class="menu-title">Kawasan Konservasi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#penataan" aria-expanded="false" aria-controls="dasboards">
              <i class="fa fa-check-circle menu-icon"></i>
              <span class="menu-title">Subdit Penataan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="penataan">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link <?php if($this->uri->segment(1)=="zonasi-tn"){echo "active";}?>" href="<?=base_url('zonasi-tn')?>">Perkembangan Zonasi TN</a></li>
                <li class="nav-item"><a class="nav-link <?php if($this->uri->segment(1)=="kphk-nontn"){echo "active";}?>" href="<?=base_url('kphk-nontn')?>">Perkembangan Blok TN</a></li>
                <li class="nav-item"><a class="nav-link <?php if($this->uri->segment(1)=="usulan-tahura"){echo "active";}?>" href="<?=base_url('usulan-tahura')?>">Progres Blok</a></li>
                <li class="nav-item"><a class="nav-link <?php if($this->uri->segment(1)=="usulan-tahura"){echo "active";}?>" href="<?=base_url('usulan-tahura')?>">Progres Zonasi</a></li>
                <li class="nav-item"><a class="nav-link <?php if($this->uri->segment(1)=="usulan-tahura"){echo "active";}?>" href="<?=base_url('usulan-tahura')?>">Progres PIAPS</a></li>
              </ul>
            </div>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#penataan" aria-expanded="false" aria-controls="dasboards">
              <i class="fa fa-exclamation-triangle  menu-icon"></i>
              <span class="menu-title">Subdit PKS</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="penataan">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link <?php if($this->uri->segment(1)=="zonasi-tn"){echo "active";}?>" href="<?=base_url('zonasi-tn')?>">Perkembangan Zonasi TN</a></li>
                <li class="nav-item"><a class="nav-link <?php if($this->uri->segment(1)=="kphk-nontn"){echo "active";}?>" href="<?=base_url('kphk-nontn')?>">Perkembangan Blok TN</a></li>
                <li class="nav-item"><a class="nav-link <?php if($this->uri->segment(1)=="usulan-tahura"){echo "active";}?>" href="<?=base_url('usulan-tahura')?>">Progres Blok</a></li>
                <li class="nav-item"><a class="nav-link <?php if($this->uri->segment(1)=="usulan-tahura"){echo "active";}?>" href="<?=base_url('usulan-tahura')?>">Progres Zonasi</a></li>
                <li class="nav-item"><a class="nav-link <?php if($this->uri->segment(1)=="usulan-tahura"){echo "active";}?>" href="<?=base_url('usulan-tahura')?>">Progres PIAPS</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($this->uri->segment(1)=="perkembangan-kawasan"){echo "active";}?>" href="<?=base_url('perkembangan-kawasan')?>">
              <i class="fa fa-exclamation-circle  menu-icon"></i>
              <span class="menu-title">Peraturan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($this->uri->segment(1)=="perkembangan-kawasan"){echo "active";}?>" href="<?=base_url('perkembangan-kawasan')?>">
              <i class="fa fa-users menu-icon"></i>
              <span class="menu-title">Tata Usaha</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#masterdata" aria-expanded="false" aria-controls="masterdata">
              <i class="fa fa-database menu-icon"></i>
              <span class="menu-title">Master Data</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="masterdata">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link <?php if($this->uri->segment(1)=="master-provinsi"){echo "active";}?>" href="<?=base_url('master-provinsi')?>">Provinsi</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($this->uri->segment(1)=="perkembangan-kawasan"){echo "active";}?>" href="<?=base_url('perkembangan-kawasan')?>">
              <i class="fa fa-bullhorn menu-icon"></i>
              <span class="menu-title">Resources</span>
            </a>
          </li>
        </ul>
      </nav>