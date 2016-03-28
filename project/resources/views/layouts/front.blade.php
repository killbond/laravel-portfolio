<!doctype html>
<html class="no-js" lang="">
    <head>
        @include('includes.head')
    </head>
    <body>

        <div class="container">

            <div class="header clearfix">
                <nav>
                    <ul class="nav nav-pills pull-right"></ul>
                </nav>
                <h3 class="text-muted"></h3>
            </div>

            @yield('content')

            <footer class="footer">
                <p>&copy; {{ date('Y') }} KiLLbond</p>
            </footer>

        </div>
        @include('includes.script')
    </body>
</html>
