
      <div class="rd-navbar-wrap">
          <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-sm-stick-up-offset="50px" data-lg-stick-up-offset="90px">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand-name" href="index.html"><img src="../vendors/images/logo.png" width="162" height="61" alt=""></a></div>
              </div>
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Nav-->

                @guest
                <ul class="rd-navbar-nav">
                  <li class="active"><a href="./">Home page</a></li>
                  <li><a href="about.html">About us</a>
                    <!-- RD Navbar Dropdown
                    <ul class="rd-navbar-dropdown">
                      <li><a href="#">history</a></li>
                      <li><a href="#">offers</a></li>
                      <li><a href="#">news</a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="#">fresh</a></li>
                          <li><a href="#">archive</a></li>
                          <li><a href="404.html">404</a></li>
                        </ul>
                      </li>
                    </ul>
                    -->
                  </li>
                      <!-- Poner un logo -->
                    <li><a href="login.html">Más +</a>
                      <!-- RD Navbar Dropdown -->
                    <ul class="rd-navbar-dropdown">
                      <!-- <li><a href="{{route('login')}}" data-toggle="modal" data-target="#login-modal">Ingresar</a></li>-->
                      <li><a href="{{route('login')}}">Ingresar</a></li>
                      <li><a href="{{route('register')}}">Registrar</a></li>
                    </ul>

                @else
                <ul class="rd-navbar-nav">
                  <li class="active"><a href="/home">Home page</a></li>
                  <li><a href="{{route('pet.index')}}">Mascotas</a>
                  <li><a href="{{route('pet.index')}}">Subir Mascota</a>
                  <li><a href="about.html">About us</a>
                  <!-- RD Navbar Dropdown-->
                    <ul class="rd-navbar-dropdown">
                      <li><a href="#">history</a></li>
                      <li><a href="#">offers</a></li>
                      <li><a href="#">news</a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="#">fresh</a></li>
                          <li><a href="#">archive</a></li>
                          <li><a href="404.html">404</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                      <!-- Poner un logo -->
                  <li><a>{{ Auth::user()->name }}</a>
                      <!-- RD Navbar Dropdown -->
                    <ul class="rd-navbar-dropdown">
                      <li><a href="{{route('user.cuenta')}}">Mi cuenta</a></li>
                      <li><a href="{{route('logout')}}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();
                      {{ __('Logout') }}">Salir</a></li>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                    </ul>
                  </li>
                </ul>
                @endguest


              </div>
            </div>
          </nav>
        </div>
