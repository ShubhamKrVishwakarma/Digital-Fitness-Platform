@extends('layouts.mainLayout')

@section('title', 'Workout Plan')

@push('styles')
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
        
        <div id="modal" class="alert alert-success mb-2 " style="display: none">
            You have completed your today's workout
        </div>

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
                                @for ($i = 0; $i < 7; $i++)
                                    @empty($weeklyRecords[$i])
                                        <span class="box"></span>
                                    @else
                                        <span class="box fill"></span>
                                    @endempty
                                @endfor
                            </div>

                            <p>{{ $weeklyRecords->count() > 0 ? 'You have completed ' . $weeklyRecords->count() . ' workout this week !!' : "You haven't worked out this week" }}
                            </p>
                            {{-- <p>{{$count}}/7 workouts</p> --}}
                        </div>
                        <div class="data-2">
                            <div class="weeks">
                                <ul class="list-unstyled d-flex justify-content-between">
                                    @php
                                        $weekDays = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
                                    @endphp
                                    @foreach ($weekDays as $day)
                                        <li
                                            class="d-flex flex-column align-items-center p-2 {{ $day == now()->format('D') ? 'today' : '' }}">
                                            <p class="mb-0">{{ $day }}</p>
                                            @php
                                                $tickDisplayed = false;
                                            @endphp
                                            @foreach ($weeklyRecords as $record)
                                                @php
                                                    $dayName = $record->created_at->format('D');
                                                @endphp
                                                @if ($dayName == $day)
                                                    <span class="x-small-icons">
                                                        <img src="{{ asset('./images/workout/checked.png') }}" alt="">
                                                    </span>
                                                    @php
                                                        $tickDisplayed = true;
                                                        break;
                                                    @endphp
                                                @endif
                                            @endforeach
                                        </li>
                                    @endforeach
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
                                <a href="{{ route('login') }}">
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
                            <h5 class="display-4 mb-5">Last workout</h5>
                        </div>
                        @if ($completed)

                            <p id="workout-parts">{{ $completed->plan->name }}<br></p>
                            <p id="workout-parts">{{ $completed->plan->level }}<br></p>
                            <p id="time">{{ $completed->plan->duration }} Mins</p>
                            <p id="time">{{ $completed->plan->calories }} Calories</p>
                        @else
                            <p id="workout-parts">Choose a Workout<br></p>
                            <p id="workout-parts">Beginner, Intermediate,<br>Advance</p>
                        @endif
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
                @foreach ($beginners as $plan)
                    @php
                        $flag = false;
                    @endphp
                    @auth
                    @foreach ($weeklyRecords as $record)
                        @if ($record->plan->name == $plan->name)
                            <div class="image-group mb-4 ">
                                <img src="{{ asset('./images/workout/plank.jpg') }}" alt="" class="opacity-25">
                                <span class="flex-column">
                                    <p class="text-start text-light text-capitalize ">{{ $plan->name }}
                                        <br>{{ $plan->totalExercises($plan->id) }} Exercises<br>
                                        {{ $plan->duration }} mins - {{ $plan->level }}
                                    </p>
                                    <h3 class=" text-success  "> DONE !!</3>
                                </span>
                            </div>
                            @php
                                $flag = true;
                                @endphp
                            @break
                        @endif
                    @endforeach
                    @endauth
                    @if ($flag == false )
                        @if ($todayComplete)
                            <a class="completed" style="cursor: pointer">
                                <div class="image-group mb-4 ">
                                    <img src="{{ asset('./images/workout/plank.jpg') }}" alt="">
                                    <span>
                                        <p class="text-start text-light text-capitalize ">{{ $plan->name }}
                                            <br>{{ $plan->totalExercises($plan->id) }} Exercises<br>
                                            {{ $plan->duration }} mins - {{ $plan->level }}
                                        </p>
                                    </span>
                                </div>
                            </a>
                        @else
                            <a href="{{ route('workout', $plan->id) }}">
                                <div class="image-group mb-4 ">
                                    <img src="{{ asset('./images/workout/plank.jpg') }}" alt="">
                                    <span>
                                        <p class="text-start text-light text-capitalize ">{{ $plan->name }}
                                            <br>{{ $plan->totalExercises($plan->id) }} Exercises<br>
                                            {{ $plan->duration }} mins - {{ $plan->level }}
                                        </p>
                                    </span>
                                </div>
                            </a>
                        @endif
                    @endif
                @endforeach
            </div>
        </section>

        <section class="container main-section-1" id="intermediate">
            <div class="heading my-4">
                <h4>Intermediate</h4>
            </div>
            <div class="content d-flex flex-wrap justify-content-around">
                @foreach ($intermediate as $plan)
                    @php
                    $flag = false;
                    @endphp
                    @auth
                    @foreach ($weeklyRecords as $record)
                        @if ($record->plan->name == $plan->name)
                            <div class="image-group mb-4 ">
                                <img src="{{ asset('./images/workout/plank.jpg') }}" alt="" class="opacity-25">
                                <span class="flex-column">
                                    <p class="text-start text-light text-capitalize ">{{ $plan->name }}
                                        <br>{{ $plan->totalExercises($plan->id) }} Exercises<br>
                                        {{ $plan->duration }} mins - {{ $plan->level }}
                                    </p>
                                    <h3 class=" text-success  "> DONE !!</3>
                                </span>
                            </div>
                            @php
                                $flag = true;
                            @endphp
                            @break
                        @endif
                    @endforeach
                    @endauth
                    @if ($flag == false)
                        @if ($todayComplete)
                            <a class="completed" style="cursor: pointer">
                                <div class="image-group mb-4 ">
                                    <img src="{{ asset('./images/workout/intermediate.jpg') }}" alt="">
                                    <span>
                                        <p class="text-start text-light text-capitalize ">{{ $plan->name }}
                                            <br>{{ $plan->totalExercises($plan->id) }} Exercises<br>
                                            {{ $plan->duration }} mins - {{ $plan->level }}
                                        </p>
                                    </span>
                                </div>
                            </a>      
                        @else
                            <a href="{{ route('workout', $plan->id) }}">
                                <div class="image-group mb-4 ">
                                    <img src="{{ asset('./images/workout/intermediate.jpg') }}" alt="">
                                    <span>
                                        <p class="text-start text-light text-capitalize ">{{ $plan->name }}
                                            <br>{{ $plan->totalExercises($plan->id) }} Exercises<br>
                                            {{ $plan->duration }} mins - {{ $plan->level }}
                                        </p>
                                    </span>
                                </div>
                            </a>
                        @endif
                    @endif
                @endforeach
            </div>
        </section>

        <section class="container main-section-1" id="advance">
            <div class="heading my-4">
                <h4>Advance</h4>
            </div>
            <div class="content d-flex flex-wrap justify-content-around">
                @foreach ($advanced as $plan)
                    @php
                    $flag = false;
                    @endphp
                    @auth
                    @foreach ($weeklyRecords as $record)
                        @if ($record->plan->name == $plan->name)
                            <div class="image-group mb-4 ">
                                <img src="{{ asset('./images/workout/plank.jpg') }}" alt="" class="opacity-25">
                                <span class="flex-column">
                                    <p class="text-start text-light text-capitalize ">{{ $plan->name }}
                                        <br>{{ $plan->totalExercises($plan->id) }} Exercises<br>
                                        {{ $plan->duration }} mins - {{ $plan->level }}
                                    </p>
                                    <h3 class=" text-success  "> DONE !!</3>
                                </span>
                            </div>
                            @php
                                $flag = true;
                            @endphp
                            @break
                        @endif
                    @endforeach
                    @endauth
                    @if ($flag == false)
                            @if ($todayComplete)
                                <a class="completed" style="cursor: pointer">
                                    <div class="image-group mb-4 ">
                                        <img src="{{ asset('./images/home/advance.jpg') }}" alt="">
                                        <span>
                                            <p class="text-start text-light text-capitalize ">{{ $plan->name }}
                                                <br>{{ $plan->totalExercises($plan->id) }} Exercises<br>
                                                {{ $plan->duration }} mins - {{ $plan->level }}
                                            </p>
                                        </span>
                                    </div>
                                </a>
                            @else
                                <a href="{{ route('workout', $plan->id) }}">
                                    <div class="image-group mb-4 ">
                                        <img src="{{ asset('./images/home/advance.jpg') }}" alt="">
                                        <span>
                                            <p class="text-start text-light text-capitalize ">{{ $plan->name }}
                                                <br>{{ $plan->totalExercises($plan->id) }} Exercises<br>
                                                {{ $plan->duration }} mins - {{ $plan->level }}
                                            </p>
                                        </span>
                                    </div>
                                </a>
                            @endif
                    @endif
                @endforeach
            </div>
        </section>
    </div>
@endsection

@push('scripts')
<script>
    let modalButton = document.querySelectorAll('.completed');
    let modal = document.getElementById('modal');

    modalButton.forEach(element => {
        element.addEventListener('click', (event) => {
            event.preventDefault(); // Prevent default behavior if it's a link
            modal.style.display = 'block';
            modal.scrollIntoView({behavior : 'smooth'})
            setTimeout(function() {
                modal.style.display = 'none';
            }, 3000);
        });
    });
</script>
@endpush