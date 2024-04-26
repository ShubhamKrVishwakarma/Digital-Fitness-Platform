@extends('layouts.mainLayout')

@section('title', 'Workout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/exercise.css') }}">
@endpush

@section('content')

    <div class='bg-dark'>

        <section class="container-fluid">
            <div class="row">
                <div class="col p-0" id="banner-section">
                    <div class="image">
                        <img src="{{ asset('./images/workout/3d-gym-equipment (1).jpg') }}" alt="">
                    </div>
                    <span id="floating-image">
                        <img src="{{ asset('./images/workout/banner1body.png') }}" alt="">
                    </span>
                </div>
            </div>
        </section>

        <section class="container card bg-dark-subtle mt-3 ">
            <div class="row my-3" id="detail-section">
                <div class="box col">
                    <div class="bg-transparent">
                        <div class="inner-box">
                            <span class="icons"><img src="{{ asset('./images/workout/clock.png') }}" alt=""></span>
                            <h5 class="align-self-end ">Duration</h5>
                        </div>
                        <h5 class="p-1 text-center">{{ $workouts[0]->plan->duration }} mins</h5>
                    </div>
                </div>
                <div class="box col" id="center-data">
                    <div class="bg-transparent">
                        <div class="inner-box">
                            <span class="icons"><img src="{{ asset('./images/workout/flames.png') }}"
                                    alt=""></span>
                            <h5 class="align-self-end ">Calories</h5>
                        </div>
                        <h5 class="p-1 text-center">{{ $workouts[0]->plan->calories }}</h5>
                    </div>
                </div>
                <div class="box col">
                    <div class="bg-transparent">
                        <div class="inner-box">
                            <span class="icons"><img src="{{ asset('./images/workout/strongman.png') }}"
                                    alt=""></span>
                            <h5 class="align-self-end ">Exercises</h5>
                        </div>
                        
                        <h5 class="px-2 text-center">{{$workouts->count()}}</h5>
                    </div>
                </div>
            </div>
        </section>
        <section class="container" id="trainings">
             <div class="training-heading text-center text-light my-4">
                <h2 class="text-capitalize">Workout Type : {{ $workouts[0]->plan->level }}</h2>
                <h4 class="text-center text-light text-capitalize">{{ $workouts[0]->plan->name }}</h4>
            </div>
            <form action="{{ route('workout.completed', $plan_id) }}" method="post">
            @csrf
                <div class="training-list">
                    <div class="heading text-light text-center mb-4">
                        <h4>Training-list</h4>
                    </div>
                    <ul class="list-unstyled card bg-dark m-0">
                        @for ($i = 0; $i < $workouts->count(); $i++)
                            <li class="list-items bg-dark-subtle mb-4 ">
                                <div class="training-image">
                                    <img src="{{ $workouts[$i]->exercises->getExerciseGif() }}" alt="">
                                </div>
                                <div class="training-details text-dark card card-body bg-dark-subtle">
                                    <h5>{{ $workouts[$i]->exercises->name }}</h5>
                                    <div>
                                        <p class="mb-1"><span class="icons me-1"><img
                                                    src="{{ asset('./images/workout/repeat.png') }}"
                                                    alt=""></span>{{ $workouts[$i]->sets }} rounds</p>
                                        <p class="mb-1"><span class="icons me-1"><img
                                                    src="{{ asset('./images/workout/muscle.png') }}"
                                                    alt=""></span>{{ $workouts[$i]->reps }} reps</p>
                                    </div>
                                    @error('exercise.{{$i}}')
                                        <span class="text-danger">Please complete this exercise</span>
                                    @enderror
                                    <input type="checkbox" class="log-check btn-check" name="exercise.{{ $i }}"id=""
                                        required>
                                    <button type="button" class="log-button btn btn-primary w-100">Log set</button>
                                </div>
                            </li>
                        @endfor
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12 py-3 ">
                            <button type="submit" class="btn btn-outline-danger btn-lg w-100">Finish Workout</button>
                    </div>
                </div>
            </form>
        </section>

    </div>
@endsection

@push('scripts')
    <script>
        const logButton = document.querySelectorAll('.log-button');
        const logCheck = document.querySelectorAll('.log-check');
        for (let i = 0; i < logButton.length; i++) {
            logButton[i].addEventListener('click', () => {
                logCheck[i].setAttribute('checked', true);
                logButton[i].classList.remove('btn-primary');
                logButton[i].classList.add('btn-success');
                logButton[i].innerHTML = 'Completed';
            });
        }
    </script>
@endpush