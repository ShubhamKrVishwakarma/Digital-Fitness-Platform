@extends("layouts.mainLayout")

@section("title", "Workout")

@push("styles")
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="{{ asset('css/exercise.css') }}">
@endpush

@section('content')

<div class='bg-dark'>

        <section class="container-fluid">
        <div class="row" >
            <div class="col p-0" id="banner-section">
                <div class="image">
                    <img src="{{asset('./images/workout/3d-gym-equipment (1).jpg')}}" alt="">
                </div>
                <span id="floating-image">
                    <img src="{{asset('./images/workout/banner1body.png')}}" alt="">
                </span>
            </div>
        </div>
    </section>

    <section class="container card bg-dark-subtle mt-3 ">
        <div class="row my-3" id="detail-section">
            <div class="box col">
                <div class="bg-transparent">
                    <div class="inner-box">
                        <span class="icons"><img src="{{asset('./images/workout/clock.png')}}" alt=""></span>
                        <h5  class="align-self-end ">Duration</h5>
                    </div>
                    <!-- <p>Duration</p> -->
                    <h4 class="p-1">55m</h4>
                </div>
            </div>
            <div class="box col" id="center-data">
                <div class="bg-transparent">
                    <div class="inner-box">
                        <span class="icons"><img src="{{asset('./images/workout/flames.png')}}" alt=""></span>
                        <h5 class="align-self-end  ">Calories</h5>
                    </div>
                    <!-- <p>Calories</p> -->
                    <h4 class="p-1">172</h4>
                </div>
            </div>
            <div class="box col">
                <div class="bg-transparent">
                    <div class="inner-box">
                        <span class="icons"><img src="{{asset('./images/workout/strongman.png')}}" alt=""></span>
                        <h5 class="align-self-end ">Exercise</h5>
                    </div>
                    <!-- <p>Exercise</p> -->
                    <h4 class="px-2">15</h4>
                </div>
            </div>
        </div>
    </section>

    <section class="container training my-5">
        <div class="training-heading text-center text-light ">
            <h2 class="text-capitalize">Workout Type : {{$workouts[0]->plan->level}}</h2>
            <h4 class="text-center text-light text-capitalize">{{$workouts[0]->plan->name}}</h4>
        </div>
        <div>
            <div class="training-preview w-auto  mt-4">
                <video id="video" src="./videos/482_M.mp4" autoplay loop muted></video>
                <span role="button" class="play-pause-btn icons"  id="pause-button">
                    <img src="./images/workout/pause.png" alt="">
                </span>
                <span role="button" class="play-pause-btn icons"style="display:none; pointer-events: none;" id="play-button">
                    <img src="./images/workout/play.png" alt="">
                </span>
            </div>
        </div>
    </section>

    <section class="container" id="trainings">
        <div class="training-list mt-5">
            <div class="heading text-light text-center mb-4">
                <h4>Training-list</h4>
            </div>
            <ul class="list-unstyled card bg-dark">
            @foreach ($workouts as $workout)
                <li class="list-items bg-dark-subtle mb-4 ">
                    <div class="training-image">
                        <img src="{{ $workout->exercises->getExerciseGif()}}" alt="">
                    </div>
                    <div class="training-details text-dark card card-body bg-dark-subtle">
                        <h5>{{ $workout->plan->name }}</h5>
                        <div>
                            <p class="mb-1"><span class="icons me-1"><img src="{{asset('./images/workout/repeat.png')}}" alt=""></span>{{ $workout->sets }} rounds</p>
                            <p class="mb-1"><span class="icons me-1"><img src="{{asset('./images/workout/muscle.png')}}" alt=""></span>{{ $workout->reps }} reps</p>
                        </div>
                        <button class="btn btn-primary ">Log set</button>
                    </div>
                </li>
            @endforeach
            </ul>
        </div>
    </section>

    </div>
@endsection