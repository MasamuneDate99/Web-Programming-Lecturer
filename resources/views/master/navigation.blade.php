<nav class="navbar navbar-expand-md" style="background-color: #285185">
    {{-- If The User Is Guest --}}
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="/home" class="text-white mx-2">Home</a>
            </li>

            {{-- If The User is Member --}}
            @auth
                @if (Auth::user()->role == 'Member')
                    <li>
                        <a href="/home" class="text-white mx-2">My Cart</a>
                    </li>
                    <li>
                        <a href="/home" class="text-white mx-2">History Transaction</a>
                    </li>
                @elseif (Auth::user()->role == 'Admin')
                    {{-- If The User is Admin --}}
                    <div class="dropdown mx-2">
                        <a class="dropdown-toggle text-white mx-2" style="cursor: pointer" data-toggle="dropdown" role="button">Manage Product</a>
                        <ul class="dropdown-menu">
                            <li><a href="/view_product">View Product</a></li>
                            <li><a href="/add_product">Add Product</a></li>
                        </ul>
                    </div>
                    <div class="dropdown mx-2">
                        <a class="dropdown-toggle text-white mx-2" style="cursor: pointer" data-toggle="dropdown" role="button">Manage Category</a>
                        <ul class="dropdown-menu">
                            <li><a href="/view_category">View Category</a></li>
                            <li><a href="/add_category">Add Category</a></li>
                        </ul>
                    </div>
                @endif
            @endauth
        </ul>

        @guest
            <a href="/login" class="btn btn-outline-light mx-1">Login</a>
            <a href="/register" class="btn btn-outline-light mx-1">Register</a>
        @endguest
        
        @auth
            <a href="/logout" class="btn btn-outline-light mx-1">Logout</a>
        @endauth
    </div>
</nav>