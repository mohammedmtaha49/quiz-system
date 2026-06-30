@extends('layout.app')

@section('title', 'Admin Login')

@section('content')

<body class=" bg-gray-100 flex items-center justify-center min-h-screen">
    <div class=" bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
        @include('layout.flash-messages')
        <h2 class=" text-2xl text-center text-gray-800 mb-6">
            Login
        </h2>
        <form action="{{ route('store.login') }}"
            method="post" class=" space-y-4">

            @csrf

            <div>
                <label for="" class=" text-gray-700 font-medium mb-1">
                    Email
                </label>
                <input type="text" name="email" placeholder="Enter Your Email"
                    class=" w-full px-4 py-2 border
                           border-gray-300 rounded-xl focus:outline-none">
                @error('email')
                <p class=" text-sm text-red-500">
                    {{ $message }}
                </p>
                @enderror
            </div>


            <div>
                <label for="" class=" text-gray-700 font-medium mb-1">
                    Password
                </label>
                <input type="password" name="password"
                    placeholder="Enter Admin password"
                    class=" w-full px-4 py-2 border
                           border-gray-300 rounded-xl focus:outline-none">
                @error('password')
                <p class=" text-sm text-red-500">
                    {{ $message }}
                </p>
                @enderror
            </div>


            <button type="submit" class=" w-full rounded-xl bg-blue-500
                py-2 mt-1 text-white font-semibold transition duration-200
                hover:bg-blue-600 active:scale-95 cursor-pointer"> Login
            </button>


            <div class=" text-gray-600 font-medium text-center">
                You don't have account ?
                <a href="{{ route('register') }}" class=" text-blue-500 font-semibold">
                    Register
                </a>
            </div>
        </form>
    </div>

</body>

@endsection