@extends('layouts.template')

@section('content')


@foreach ($users as $user)
                                      
                                        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
                                            <!-- Navbar Brand-->
                                            <a class="navbar-brand ps-3" href="usuarios.index">Colaboradores Espumados</a>
                                            <!-- Sidebar Toggle-->
                                            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
                                            <!-- Navbar Search-->
                                            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                                                <div class="input-group">
                                                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                                                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                                                </div>
                                            </form>
                                            <!-- Navbar-->
                                            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ $user->name }}<i class="fas fa-user fa-fw"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                                                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                                                        <li><hr class="dropdown-divider" /></li>
                                                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </nav>
                                        <div id="layoutSidenav">
                                            <div id="layoutSidenav_nav">
                                                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                                                    <div class="sb-sidenav-menu">
                                                        <div class="nav">
                                                            <div class="sb-sidenav-menu-heading">Core</div>
                                                            <a class="nav-link" href="{{'users'}}">
                                                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                                                Dashboard
                                                            </a>
                                                           
                                                            
                                                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                                                Pages
                                                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                                            </a>
                                                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                                                        Authentication
                                                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                                                    </a>
                                                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                                                        <nav class="sb-sidenav-menu-nested nav">
                                                                            @if (Route::has('login'))
                                                                            <li class="nav-item">
                                                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                                            </li>
                                                                        @endif                                                                            <a class="nav-link" href="register.html">Register</a>
                                                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                                                        </nav>
                                                                    </div>
                                                                 
                                                          
                                                    </div>
                                                    <div class="sb-sidenav-footer">
                                                        <div class="small">Logged in as:</div>
                                                        Espumados
                                                    </div>
                                                </nav>
                                            </div>
                                            <main>
                                                <div class="container-fluid px-4">
                                                    <h1 class="mt-4">Dashboard</h1>
                                                    <ol class="breadcrumb mb-4">
                                                        <li class="breadcrumb-item active">Dashboard</li>
                                                    </ol>
                                                    </div>
                                                                                                       <div class="col-xl-3 col-md-6">
                                                            <div class="card bg-primary text-white mb-4">
                                                                <div class="card-body">Primary Card</div>
                                                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-md-6">
                                                            <div class="card bg-warning text-white mb-4">
                                                                <div class="card-body">Warning Card</div>
                                                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                                                </div>
                                                            </div>
                                                </main>                              

                                                <footer class="py-4 bg-light mt-auto">
                                                    <div class="container-fluid px-4">
                                                        <div class="d-flex align-items-center justify-content-between small">
                                                                                        

                                                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                                                            <div>
                                                                <a href="#">Privacy Policy</a>
                                                                &middot;
                                                                <a href="#">Terms &amp; Conditions</a>
                                                                
                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </footer>
                                            </div>
                                        </div>
                                    @endforeach



@endsection('content')