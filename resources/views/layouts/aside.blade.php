<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="{{ route('home') }}" class="app-brand-link">
      <span class="app-brand-logo demo">
     <h2>Tam</h2>
      </span>
     
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item {{ Route::currentRouteName() == 'seoCms' ? 'active' : '' }} ||
    {{ Route::currentRouteName() == 'home' ? 'active' : '' }} 
    ">
      <a href="{{ route('seoCms') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Seo</div>
      </a>
    </li>
    <li class="menu-item {{ Route::currentRouteName() == 'settingsCms' ? 'active' : '' }}">
      <a href="{{ route('settingsCms') }}" class="menu-link">
        <i class="bx bx-cog me-2"></i>
        <div data-i18n="Analytics">Settings</div>
      </a>
    </li>


    <!-- Layouts -->


    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Pages</span>
    </li>
    <li class="menu-item {{ Route::currentRouteName() == 'serviceCms' ? 'active' : '' }} ||
     {{ Route::currentRouteName() == 'sliderCms' ? 'active' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
                       <i class='bx bxs-dock-top'></i>

        <div data-i18n="Account Settings">Home Page </div>
      </a>

      <ul class="menu-sub">
        <li class="menu-item">
          <a href="{{ route('titleCms') }}" class="menu-link">
            <div data-i18n="Without menu">Titles Sections</div>
          </a>
        </li>

        <li class="menu-item">
          <a href="{{ route('sliderCms') }}" class="menu-link">
            <div data-i18n="Without menu">Content Slider Section</div>
          </a>
        </li>
      </ul>
    
    </li>


    <li class="menu-item {{ Route::currentRouteName() == 'aboutCms' ? 'active' : '' }} || {{ Route::currentRouteName() == 'missionCms' ? 'active' : '' }} ||
    {{ Route::currentRouteName() == 'visionCms' ? 'active' : '' }} ||
  ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
                       <i class='bx bxs-dock-top'></i>

        <div data-i18n="Layouts">About</div>
      </a>

      <ul class="menu-sub">

        <li class="menu-item">
          <a href="{{ Route('aboutCms') }}" class="menu-link">
            <div data-i18n="Without menu">About</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="{{ Route('missionCms') }}" class="menu-link">
            <div data-i18n="Without menu">Mission</div>
          </a>
        </li>
     
        <li class="menu-item">
          <a href="{{ route('visionCms') }}" class="menu-link">
            <div data-i18n="Container">Vision</div>
          </a>
        </li>
      
     
      </ul>
    </li>
    <li class="menu-item {{ Route::currentRouteName() == 'serviceCms' ? 'active' : '' }}">
      <a href="{{ Route('serviceCms') }}" class="menu-link">
                       <i class='bx bxs-dock-top'></i>

        <div data-i18n="Without menu">Services</div>
      </a>
    </li>

    <li class="menu-item {{ Route::currentRouteName() == 'productCms' ? 'active' : '' }}">
      <a href="{{ Route('productCms') }}" class="menu-link">
                       <i class='bx bxs-dock-top'></i>

        <div data-i18n="Without menu">Products</div>
      </a>
    </li>

    <li class="menu-item {{ Route::currentRouteName() == 'projectCms' ? 'active' : '' }}">
      <a href="{{ Route('projectCms') }}" class="menu-link">
                       <i class='bx bxs-dock-top'></i>

        <div data-i18n="Without menu">Projects</div>
      </a>
    </li>
    <li class="menu-item {{ Route::currentRouteName() == 'clientCms' ? 'active' : '' }}">
      <a href="{{ Route('clientCms') }}" class="menu-link">
                       <i class='bx bxs-dock-top'></i>

        <div data-i18n="Without menu">Clients</div>
      </a>
    </li>


   
    <!-- Components -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>
    <!-- Cards -->
    <li class="menu-item {{ Route::currentRouteName() == 'contactCms' ? 'active' : '' }}">
    
      <a href="{{ route('contactCms') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div data-i18n="Basic">Contact</div>
      </a>
    </li>
   
   
    <!-- Extended components -->
    <li class="menu-item">
      <a  href="{{ route('logout') }}" class="menu-link"  onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
      <i class="bx bx-power-off me-2"></i>
        <div data-i18n="Extended UI">Logout</div>
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
                          
    </li>

 
  </ul>
</aside>