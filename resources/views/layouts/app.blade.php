<html>
    @if (session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
    @endif
    <body>
        <h1>@yield('title')</h1>
        <nav>
            <ul>
                <li><a href="{{route('home.index')}}">Home</a></li>
                <li><a href="{{route('product.index')}}">products</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
        @yield('content')
    </body>
</html>
