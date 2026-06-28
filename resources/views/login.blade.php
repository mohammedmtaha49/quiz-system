@extends('layout.app')

@section('title', 'Admin Login')

@section('content')

<body class=" bg-gray-100 flex items-center justify-center min-h-screen">
    <div class=" bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
        @include('layout.flash-messages')
        <h2 class=" text-2xl text-center text-gray-800 mb-6">
            Admin Login
        </h2>

        <form action="{{ route('store.login') }}"
            method="post" class=" space-y-4">
            @csrf
            <div>
                <label for="" class=" text-gray-600 mb-1">
                    Admin name
                </label>
                @error('name')
                <div class=" text-red-500">{{ $message }}</div>
                @enderror
                <input type="text" name="name" placeholder="Enter Admin name"
                    class=" w-full px-4 py-2 border
                           border-gray-300 rounded-xl focus:outline-none">
            </div>
            <div>
                <label for="" class=" text-gray-600 mb-1">
                    password
                </label>
                @error('password')
                <div class=" text-red-500">{{ $message }}</div>
                @enderror
                <input type="password" name="password"
                    placeholder="Enter Admin password"
                    class=" w-full px-4 py-2 border
                           border-gray-300 rounded-xl focus:outline-none">
            </div>
            <button type="submit" class=" w-full rounded-xl
                py-2 px-4 bg-blue-500 text-white"> Login
            </button>
        </form>
    </div>

</body>

@endsection