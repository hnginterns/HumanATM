<!-- <script>
        $(document).ready(function () {
            $('ul.nav > li').click(function (e) {
                e.preventDefault();
                $('ul.nav > li').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script> -->

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-fixed-top" style="background-color: #0C2A52;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle hamburger" data-toggle="collapse" data-target="#HumanATMNavbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar" ></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="header-color" class="navbar-brand" href="/" >
                <img style="width:70px; height:70px;padding:10px;" src="{{asset('images/logo.png')}}" alt="">
               <b> HUMAN ATM</b></a>
            </div>
            <div class="collapse navbar-collapse" id="HumanATMNavbar">
                <ul class="nav navbar-nav navbar-right" id="header-color" >
                    <li class="active"><a href="/wallet">WALLET</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" 
                        data-toggle="dropdown" href="">TRANSACTIONS</a>
                        <ul class="dropdown-menu" id="header-dropdown">
                            <li><a href="/dailytransaction" target="_blank"><h4><b> Daily</h4></b></a></li>
                            
                            <li><a href="/weeklytransaction"><h4><b>Weekly</h4></b></a></li>
                           
                            <li><a href="/monthlytransaction"><h4><b>Monthly</h4></b></a></li>
                        </ul>
                    </li>
                    <li><a href="/paybills">PAY BILLS</a></li>
                    <li><a href="/invite" >INVITE FRIENDS</a></li>

                    @if (Auth::user())
                    
                               <li> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a></li>

                                <ul class="dropdown-menu" role="menu">
                                <li><a href="/location" >Human ATMs</a></li>
                                 <li><a href="/dashboard" >Dashboard</a></li>
                                 <li><a href="/payment" >Become HumanATM</a></li>
                                    <li class="dropdown">
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
                            <li><a href="/login" >LOGIN </a></li>
                    @endif

                </ul>
            </div>

        </div>

    </nav><!-- Navbar Ends -->