

<script>
    $(document).ready(function () {
        $('ul.nav > li').click(function (e) {
            e.preventDefault();
            $('ul.nav > li').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>


<!-- Navbar -->
<nav class="navbar navbar-fixed-top" style="background-color: #ffffff; color:#0F3B75">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle hamburger" data-toggle="collapse" data-target="#HumanATMNavbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar" ></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="HumanATMNavbar">
            <ul class="nav navbar-nav navbar-right" id="header-color" >
                <li class="active"><a href="#">WALLET</a></li>
                <li><a href="dailytransaction.php">TRANSACTIONS</a></li>
                <li><a href="#">PAY BILLS</a></li>
                <li><a href="#" >INVITE FRIENDS</a></li>
                @if(Auth::user())
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                      <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      Logout
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
              </li>

          </ul>

      </li>
      @else
      <li><a href="#" >USER PAGE</a></li>
      @endif
  </ul>
</div>
</div>
</nav><!-- Navbar Ends -->
