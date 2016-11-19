<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Flapjack') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul id="menu" class="nav navbar-nav">
                &nbsp;<li><a href="/admin/timers">Timers</a> </li>
                <li clas="dropdown">
                    <a href="javascript:void(null)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                     Invoices  <span class="caret"></span>
                    </a>
                <ul class="dropdown-menu">
                    <li><a href="/admin/invoices">All Invoices</a></li>
                    <li><a href="/admin/invoices/create">Create New Invoice</a></li>
                    <li><a href="/admin/invoices/paid">Paid</a></li>
                    <li><a href="/admin/invoices/unpaid">Unpaid</a></li>
                    <li><a href="/admin/invoices/overdue">Overdue</a></li>
                    <li><a href="/admin/invoices/unsent">Unsent</a></li>
                    <li><a href="/admin/invoices/recurring">Recurring</a></li>
                    <li><a href="/admin/invoices/archived">Archived</a></li>
                </ul>
                </li>
                <li><a href="/admin/estimates">Estimates</a></li>
                <li><a href="/admin/projects">Projects</a></li>
                <li><a href="/admin/expenses">Expenses</a></li>
                <li><a href="/admin/proposals">Proposals</a></li>
                <li><a href="/admin/tickets">Tickets</a></li>
                <li><a href="/admin/reports">Reports</a></li>
                <li><a href="/admin/clients">Clients</a></li>
                <li><a href="/admin/users">Users</a></li>
                <li><a href="/admin/credit-notes">Credit Notes</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>