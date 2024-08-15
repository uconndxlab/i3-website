<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Internal Insights &amp; Innovation (i3) @yield('title')</title>

        @stack('head-css')
        @stack('head-scripts')

        <link rel="stylesheet" href="https://use.typekit.net/nct3yok.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
        @vite('resources/scss/i3.scss')
        
        <!------ Interested in working for i3? send us a message at i3@uconn.edu  ------>
    </head>
    <body>
        <x-uconn-banner :white="true" />

        <header>
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand fw-bold" href="{{ route('home') }}">Internal Insights &amp; Innovation</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#i3navbarContent" aria-controls="i3navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-grow-0" id="i3navbarContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="/#our-work">Our Work</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/#team">Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/#contact">Contact</a>
                            </li>
                            @if ( Auth::check() )
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ Auth::user()->netid }}
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg-end">
                                        <li><h6 class="dropdown-header">
                                            <span class="d-block mb-1">{{ Auth::user()->full_name }}</span>
                                            <span class="d-block mb-1">{{ Auth::user()->netid }} / {{ Str::headline(Auth::user()->affiliation ?? '(No Affiliation)') }}</span>
                                        </h6></li>
                                        <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}">Log Out</a></li>
                                    </ul>
                                </li>
                            @else
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('profile') }}">Log In</a>
                                </li> --}}
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main class="@yield('main-class')">
            @yield('content')
        </main>

        <div class="footer-flair" style="margin-top:-10px;">
            <div class="container" style="display:flex;flex-direction:row;justify-content:right; margin-bottom:-20px;">
                <span class="dot dot-big" style="background-color:var(--accent-1)"></span>
                <span class="dot dot-big" style="background-color:var(--accent-2)"></span>
                <span class="dot dot-big" style="background-color:var(--accent-3)"></span>
            </div>
            <div style="border-top:2px dashed var(--black);height:2px;"></div>
        </div>

        <footer>
            <div class="py-5">
                <div class="container">
                    <h2 class="normal text-medium fw-bold mb-4">Internal Insights &amp; Innovation</h2>
                    <div class="d-flex align-items-center">
                        <div class="pe-6">
                            <p>i3@uconn.edu</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-dark text-white py-5">
                <div class="container">
                    <div class="d-flex flex-column flex-lg-row align-items-center links-underline-on-hover text-small">
                        <a class="link-light pe-lg-5 mb-2" href="https://uconn.edu">&copy; {{ now()->year }} University of Connecticut</a>
                        <a class="link-light pe-lg-5 mb-2" href="https://provost.uconn.edu">Office of the Provost</a>
                        <a class="link-light pe-lg-5 mb-2" href="https://uconn.edu/disclaimers-privacy-copyright/">Disclaimers, Privacy &amp; Copyright</a>
                        <a class="link-light pe-lg-5 mb-2" href="https://accessibility.uconn.edu/">Accessibility</a>
                    </div>
                </div>
            </div>
        </footer>
        
        @stack('footer-css')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        @stack('footer-js')
        
    </body>
</html>