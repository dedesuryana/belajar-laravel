@extends('layouts.master')
@section('layouts.navigation')
@section('content')
<main class="main pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <article class="card card-outline mb-4">
                    <div class="card-body">
                    <header>
                        <h1 class="card-title">Username <span>@</span>{{ auth()->user()->name }}</h1>
                    </header>
                    <form>
                        <div class="col-md-6">
                            <div class="text-center">
                                {{-- <img style="height: 150px; object-fit: cover; object-position: center;" class="mr-3 rounded-circle" src="{{ asset('images/'.$siswa->avatar) }}"> --}}
                                <h6 class="mt-1 mb-0 mr-3">{{ auth()->user()->name }}</h6>
                            </div>
                        </div>
                        <div class="text-left">
                            <div class="form-group mt-3">
                                <label for="exampleFormControlSelect1">{{ auth()->user()->email }}</label>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Sebagai : {{ auth()->user()->role }}</label>
                            </div>
                        </div>
                    </form>
                </article>
            </div>
        </div>
    </div>
</main>
@endsection