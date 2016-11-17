
<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ route('main') }}">Start Bootstrap</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="{{ route('main') }}">Main Page</a>
                </li>
                <li class="page-scroll">
                    <a href="{{ route('author') }}">author</a>
                </li>
                <li class="page-scroll">
                    <a href="{{ route('admin') }}">admin</a>
                </li>
                @if(!Auth::check())
                    <li><a href="{{ route('signup') }}">Sign Up</a></li>
                    <li><a href="{{ route('signin') }}">Sign In</a></li>
                @else
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
