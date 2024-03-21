

@extends('Restaurantadmin.restaurantheader')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-3xl">Welcome {{ Auth::user()->name }}</h1>
                    <br>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
    
                    @if (session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <!-- Personalized Greeting -->
                    <p>Great to see you here.</p><br>
                    <a href="{{ route('participant.event_list') }}" class="btn btn-success">Event List</a>
                    <div class="mt-4">
                        <p>Name: {{ Auth::user()->name }}</p>
                        <p>Email: {{ Auth::user()->email }}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
