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
                    Edit Category
                </h1>

                <p class="subtitle">
                    Edit category name
                </p>

            </div>

            <form action="{{ route('categories.update',
                    ['category' => $category]) }}"
                method="POST"
                class="space-y-6">

                @csrf
                @method('PATCH')

                <x-input
                    name="name"
                    value="{{ $category->name }}"
                    label="Category Name"
                    placeholder="m.g. Mathematics">

                </x-input>

                <x-button class="btn-block">
                    Update Category
                </x-button>

            </form>

        </x-card>

    </div>

</body>

@endsection