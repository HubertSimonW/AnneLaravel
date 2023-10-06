@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Welcome to your Laravel home</div>

                    <div class="card-body">
                        <p>This is a simple home view for your Laravel project. You can customize it as..</p>

                        <a href="{{ route('about') }}" class="btn btn-primary">Learn more about me </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

