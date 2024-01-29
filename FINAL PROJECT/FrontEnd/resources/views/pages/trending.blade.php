@extends('layout.navbar')
<!-- Content Start -->
<div class="content">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
        <a href="/
            " class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0">
            <i class="fa fa-bars"></i>
        </a>
        <div class="navbar-nav align-items-center ms-auto">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                    <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
    
                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Youtube Trending Start -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Youtube Trend in Indonesia</h2>

        <div id="youtubeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($youtubeTrends as $key => $video)
                @if ($key % 3 == 0)
                <div class="carousel-item{{ $key == 0 ? ' active' : '' }}">
                    <div class="row">
                        @endif
                        <div class="col-md-4 g-4">
                            <div class="card video-card h-100">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/{{ $video['id'] }}" allowfullscreen></iframe>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $video['snippet']['title'] }}</h5>
                                    <p class="card-text">{{ $video['snippet']['description'] }}</p>
                                </div>
                                <div class="card-caption text-center">
                                    <p class="card-text">#Trending {{ $key + 1 }}</p>
                                </div>
                            </div>
                        </div>
                        @if (($key + 1) % 3 == 0 || $key == count($youtubeTrends) - 1)
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#youtubeCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#youtubeCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Youtube Trending End -->

    <!-- Google Trendings Start -->
    <br>
    <br>
    <h2 class="text-center mb-4">Google Trend in Indonesia</h2>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm-12">
                <div class="h-100 bg-light rounded p-4">
                    @foreach($googleTrends as $trend)
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">#{{ $trend }}</h6>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <br>
            <!-- Google Trendings End -->
        </div>
    </div>
    <!-- Content End -->