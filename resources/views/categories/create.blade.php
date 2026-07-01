@extends('layout.app')

@section('title', 'Add Category')

@section('content')

<body class="bg-gray-100 min-h-screen">

    <x-navbar />

    <div class="page-container form-container">

        <x-card>

            @include('layout.flash-messages')

            <div class="text-center mb-8">

                <h1 class="page-title">
                    Add Category
                </h1>

                <p class="subtitle">
                    Create a new category for your quizzes
                </p>

            </div>

            <form action="{{ route('categories.store') }}"
                method="POST"
                class="space-y-6">

                @csrf

                <x-input
                    name="name"
                    label="Category Name"
                    placeholder="m.g. Mathematics">

                </x-input>

                <x-button class="btn-block">
                    Add Category
                </x-button>

            </form>

        </x-card>

    </div>

</body>

@endsection