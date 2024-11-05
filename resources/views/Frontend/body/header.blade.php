<nav class="main-nav-one stricky">
    <div class="container">
        <div class="inner-container">
            <div class="logo-box">
                <a href="{{ url('/') }}">
                  <img src="Frontend/assets/images/logo.jpeg" style="width: 30"; height="35"; alt="">
                </a>

<style>
    .logoDesign{
        color: red;
        font-family: monospace;
    }
</style>

                <a href="{{ url('/') }}" class="side-menu__toggler"><i class="fa fa-bars"></i></a>
            </div><!-- /.logo-box -->
            <div class="main-nav__main-navigation">
                <ul class="main-nav__navigation-box">
                    <li class="dropdown">
                        <a href="{{ url('/') }}">Home</a>

                    </li>
                    <li class="dropdown">
                        <a href="{{ route('user.About') }}">About</a>


                    </li>
                    <li class="dropdown">
                        <a href="{{ route('user.Services') }}">Services</a>

                    </li>


                    {{-- chatting part start --}}

                    <li><a href="{{ url('chatify') }}">Metting</a></li>


                    <li><a href="{{ route('user.Contact') }}">Contact</a></li>

                    @if(Route::has('login'))
                    @auth


                    <x-app-layout>
                    </x-app-layout>

                    @else

                    <li ><a href="{{ route('login') }}">Login</a> </li>

                        <li><a href="{{ route('register') }}">Signup</a></li>

                    @endauth

                    @endif


                </ul><!-- /.main-nav__navigation-box -->

            </div><!-- /.main-nav__main-navigation -->









            <div class="main-nav__right">
                <a href="{{ route('user.Contact') }}" class="thm-btn main-nav-one__btn"><i class="far fa-clock"></i>
                    Appointment</a><!-- /.thm-btn main-nav-one__btn -->
            </div><!-- /.main-nav__right -->


        </div><!-- /.inner-container -->
    </div><!-- /.container -->





        </div><!-- /.inner-container -->
    </div><!-- /.container -->

</nav>
