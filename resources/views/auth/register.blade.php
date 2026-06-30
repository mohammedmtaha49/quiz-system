@extends('layout.app')

@section('title', 'Register')

@section('content')

<body class=" bg-gray-100 flex items-center justify-center min-h-screen">
    <div class=" bg-white p-5 pl-8 pr-8 rounded-2xl shadow-xl
        border border-gray-100 w-full max-w-lg">
        @include('layout.flash-messages')
        <h2 class=" text-2xl text-center text-gray-800 mb-2">
            Register
        </h2>
        <form action="{{ route('store.register') }}"
            method="post" class=" space-y-3.5">

            @csrf

            <div>
                <label for="" class=" text-gray-700 font-medium ">
                    Name
                </label>
                <input type="text" name="name" placeholder="Enter Your Name"
                    value="{{ old('name') }}" class=" w-full px-4 py-2 border
                           border-gray-300 rounded-xl focus:outline-none">
                @error('name')
                <p class=" text-sm text-red-500">
                    {{ $message }}
                </p>
                @enderror
            </div>


            <div>
                <label for="" class=" text-gray-700 font-medium ">
                    Email
                </label>
                <input type="text" name="email" placeholder="Enter Your Email"
                    value="{{ old('email') }}" class=" w-full px-4 py-2 border
                           border-gray-300 rounded-xl focus:outline-none">
                @error('email')
                <p class=" text-sm text-red-500">
                    {{ $message }}
                </p>
                @enderror
            </div>


            <div>
                <label for="" class=" text-gray-700 font-medium ">
                    Password
                </label>
                <input type="password" name="password"
                    placeholder="Enter Your password"
                    class=" w-full px-4 py-2 border
                           border-gray-300 rounded-xl focus:outline-none">
                @error('password')
                <p class=" text-sm text-red-500">
                    {{ $message }}
                </p>
                @enderror
            </div>


            <div>
                <label for="" class=" text-gray-700 font-medium ">
                    Confirm Password
                </label>
                <input type="text" name="confirm_password"
                    placeholder="Confirm Your Password"
                    class=" w-full px-4 py-2 border
                           border-gray-300 rounded-xl focus:outline-none">
                @error('confirm_password')
                <p class=" text-sm text-red-500">
                    {{ $message }}
                </p>
                @enderror
            </div>


            <button type="submit" class=" w-full rounded-xl bg-blue-500
                py-2 mt-1 text-white font-semibold transition duration-200
                hover:bg-blue-600 active:scale-95 cursor-pointer">
                Register
            </button>


            <div class=" text-gray-700 font-medium text-center">
                You already have account ?
                <a href="{{ route('login') }}" class=" text-blue-500 font-semibold">
                    Login
                </a>
            </div>
        </form>
    </div>

</body>

@endsection