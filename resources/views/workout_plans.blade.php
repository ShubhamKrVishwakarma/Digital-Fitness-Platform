@extends('layouts.mainLayout')

@section('title', 'Workout Plan')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/workout.css') }}">
@endpush

@section('content')
    <div class="bg-dark text-light pb-4">
        <section class="container-fluid mb-2">
            <div class="row">
                <div class="col p-0" id="banner-section">
                    <div class="image">
                        <img src="{{ asset('./images/workout/3d-gym-equipment (2).jpg') }}" alt="">
                    </div>
                    <span id="greet">
                        <h2 class="text-light">WELCOME ,</h2>
                        @auth
                            <p>{{ auth()->user()->name }}</p>
                        @endauth
                        @guest
                            <p>Guest</p>
                        @endguest
                    </span>
                </div>
            </div>
        </section>

        @auth
            <section class="container mb-5 " id="workout-profile">
                <div class="heading">
                    <h4>Workout Profile</h4>
                </div>
                <div class="content">
                    <div class="pt-5">
                        <div class="data-1">
                            <p>Weekly Goal <span class="small-icons"><img
                                        src="{{ asset('./images/workout/edit (1).png') }}./images/workout/edit (1).png"
                                        alt=""></span>
                            </p>
                            <div class="color-boxes">
                                <span class="box fill"></span>
                                <span class="box fill"></span>
                                <span class="box"></span>
                                <span class="box"></span>
                            </div>
                            <p>2/4 workouts</p>
                        </div>
                        <div class="data-2">
                            <div class="weeks">
                                <ul class="list-unstyled d-flex justify-content-between">
                                    <li class="d-flex flex-column align-items-center">
                                        <p class="mb-0 ">Mon</p><span class="x-small-icons"><img
                                                src="{{ asset('./images/workout/checked.png') }}" alt=""></span>
                                    </li>
                                    <li>Tue</li>
                                    <li class="d-flex flex-column align-items-center">
                                        <p class="mb-0 ">Wed</p><span class="x-small-icons"><img
                                                src="{{ asset('./images/workout/checked.png') }}" alt=""></span>
                                    </li>
                                    <li class="today">Thu</li>
                                    <li>Fri</li>
                                    <li>Sat</li>
                                    <li>Sun</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="image">
                        <img src="{{ asset('./images/workout/banner1body.png') }}" alt="">
                    </div>
                </div>
            </section>
        @endauth

        @guest
            <section class="container mb-5 " id="workout-profile">
                <div class="heading">
                    <h4></h4>
                </div>
                <div class="content">
                    <div class="pt-5">
                        <div class="data-1">
                            <p class="display-5">Start your Fitness<br>Journey <span class="small-icons"><img
                                        src="{{ asset('./images/workout/edit (1).png') }}./images/workout/edit (1).png"
                                        alt=""></span>
                            </p>
                            
                            <p></p>
                        </div>
                        <div class="data-2">
                            <div class="weeks">
                            <a href="{{route('login')}}">
                                <button class="btn btn-primary">Start</button>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="image">
                        <img src="{{ asset('./images/workout/banner1body.png') }}" alt="">
                    </div>
                </div>
            </section>
        @endguest


        <section class="container card py-4 bg-dark-subtle my-5" id="personal-workout">
            <div class="content d-flex justify-content-evenly ">
                <div class="image">
                    <img src="{{ asset('./images/workout/banner3.png') }}" alt="">
                </div>
                @auth
                    <div class="data align-self-center w-50">
                        <div class="heading">
                            <h5 class="display-4 mb-5">Today's workout</h5>
                        </div>
                        <p id="workout-parts">Quadriceps, Hamstrings, <br>Glutes</p>
                        <p id="time">50 mins</p>
                        <div class="d-flex flex-wrap-reverse ">
                            <a href="./exercise.html">
                                <button class="btn btn-primary me-4">Start</button>
                            </a>
                            <span class="small-icons mb-1 "><img src="{{ asset('./images/workout/edit (1).png') }}"
                                    alt=""></span>
                        </div>
                    </div>
                @endauth
                @guest
                    <div class="data align-self-center w-50">
                        <div class="heading">
                            <h5 class="display-5 mb-5">Personalized Workout</h5>
                        </div>
                        <p id="workout-parts">Chest, Shoulder, <br>Back</p>
                        <p id="time">All For Free</p>
                        <div class="d-flex flex-wrap-reverse ">
                            <a href="{{ route('login') }}">
                                <button class="btn btn-primary me-4">Get Started</button>
                            </a>
                        </div>
                    </div>
                @endguest
            </div>
        </section>

        <section class="container main-section-1" id="beginner">
            <div class="heading my-4">
                <h4>Beginner</h4>
            </div>
            <div class="content d-flex flex-wrap justify-content-around">
                @for ($i = 0; $i < $plans->count(); $i++)
                    @if ($plans[$i]->level === 'begineer')
                        <a href="{{ route('workout', $plans[$i]->id) }}">
                            <div class="image-group mb-4 ">
                                <img src="{{ asset('./images/workout/plank.jpg') }}" alt="">
                                <span>
                                    <p class="text-start text-light text-capitalize ">{{ $plans[$i]->name }} <br>16
                                        Exercises <br>
                                        40 mins - {{ $plans[$i]->level }}</p>
                                </span>
                            </div>
                        </a>
                    @endif
                @endfor
                {{-- @foreach ($plans as $plan)
                @endforeach --}}
            </div>
        </section>

        <section class="container main-section-1" id="intermediate">
            <div class="heading my-4">
                <h4>Intermediate</h4>
            </div>
            <div class="content d-flex flex-wrap justify-content-around">
                @for ($i = 0; $i < $plans->count(); $i++)
                    @if ($plans[$i]->level === 'intermediate')
                        <a href="{{ route('workout', $plans[$i]->id) }}">
                            <div class="image-group mb-4 ">
                                <img src="{{ asset('./images/home/intermediate.jpg') }}" alt="">
                                <span>
                                    <p class="text-start text-light text-capitalize ">{{ $plans[$i]->name }} <br>16
                                        Exercises <br>
                                        40 mins - {{ $plans[$i]->level }}</p>
                                </span>
                            </div>
                        </a>
                    @endif
                @endfor
            </div>
        </section>

        <section class="container main-section-1" id="advance">
            <div class="heading my-4">
                <h4>Advance</h4>
            </div>
            <div class="content d-flex flex-wrap justify-content-around">
                @for ($i = 0; $i < $plans->count(); $i++)
                    @if ($plans[$i]->level === 'advanced')
                        <a href="{{ route('workout', $plans[$i]->id) }}">
                            <div class="image-group mb-4 ">
                                <img src="{{ asset('./images/home/advance.jpg') }}" alt="">
                                <span>
                                    <p class="text-start text-light text-capitalize ">{{ $plans[$i]->name }} <br>16
                                        Exercises <br>
                                        40 mins - {{ $plans[$i]->level }}</p>
                                </span>
                            </div>
                        </a>
                    @endif
                @endfor
            </div>
        </section>

        <section class="container mt-5 text-dark" id="main-section-3">
            <div class="heading">
                <h4>Picks for you</h4>
            </div>
            <div class="content my-3">
                <div class="data-box border border-dark-subtle bg-dark-subtle p-sm-2 rounded me-3">
                    <div class="image">
                        <img src="./images/workout/plank-girl.jpg" alt="">
                    </div>
                    <div class="data card card-body bg-transparent border-0">
                        <div>
                            <h5>Belly fat burner</h5>
                            <p>HIIT <br> 14 mins - Beginner</p>
                        </div>
                        <button class="btn btn-primary">Start</button>
                    </div>
                </div>
                <div class="data-box border border-dark-subtle bg-dark-subtle p-sm-2 rounded me-3">
                    <div class="image">
                        <img src="./images/workout/plank-girl.jpg" alt="">
                    </div>
                    <div class="data card card-body bg-transparent border-0">
                        <div>
                            <h5>Belly fat burner</h5>
                            <p>HIIT <br> 14 mins - Beginner</p>
                        </div>
                        <button class="btn btn-primary">Start</button>
                    </div>
                </div>
                <div class="data-box border border-dark-subtle bg-dark-subtle p-sm-2 rounded me-3">
                    <div class="image">
                        <img src="./images/workout/plank-girl.jpg" alt="">
                    </div>
                    <div class="data card card-body bg-transparent border-0">
                        <div>
                            <h5>Belly fat burner</h5>
                            <p>HIIT <br> 14 mins - Beginner</p>
                        </div>
                        <button class="btn btn-primary">Start</button>
                    </div>
                </div>
                <div class="data-box border border-dark-subtle bg-dark-subtle p-sm-2 rounded">
                    <div class="image">
                        <img src="./images/workout/plank-girl.jpg" alt="">
                    </div>
                    <div class="data card card-body bg-transparent border-0">
                        <div>
                            <h5>Belly fat burner</h5>
                            <p>HIIT <br> 14 mins - Beginner</p>
                        </div>
                        <button class="btn btn-primary">Start</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
