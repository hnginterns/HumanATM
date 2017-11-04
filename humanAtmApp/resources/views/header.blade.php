
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

                        <ul class="dropdown-menu" >
                            <li><a href="/dailytransaction" ><b> Daily</b></a></li>

                            
                            <li><a href="/weeklytransaction"><b>Weekly</b></a></li>
                           
                            <li><a href="/monthlytransaction"><b>Monthly</b></a></li>
                        </ul>
                    </li>
                    <li><a href="/paybills">PAY BILLS</a></li>
                    <li><a href="/invite" >INVITE FRIENDS</a></li>

                    @if (Auth::user())
                    
                               <li> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                <li><a href="/location" ><b>Human ATMs</b></a></li>
                                 <li><a href="/dashboard" ><b>Dashboard</b></a></li>
                                 <li><a href="#" ><b>Become HumanATM</b></a></li>
                                  
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <b>Logout</b>
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

       

    </nav><!-- Navbar Ends -->