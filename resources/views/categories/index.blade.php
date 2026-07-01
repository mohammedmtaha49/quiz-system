@extends('layout.app')

@section('title', 'Categories')

@section('content')

<body class="bg-gray-100 min-h-screen">
    <x-navbar></x-navbar>

    <div class="dashboard-container">

        @include('layout.flash-messages')

        <div class="page-header">

            <div>

                <h1 class="page-heading">

                    Categories

                </h1>

                <p class="page-description">

                    Manage all quiz categories

                </p>

            </div>

            <x-button href="{{ route('categories.create') }}">
                + Add Category
            </x-button>

        </div>

        <div class="cards-grid">

            @foreach($categories as $category)

            <x-list-card>

                <div class="card-header">

                    <div class="flex items-center gap-4">

                        <div class="avatar-circle">
                            {{ strtoupper(substr($category->name, 0, 1)) }}
                        </div>

                        <div>
                            <h3 class="card-title">{{ $category->name }}</h3>
                            <p class="card-meta">
                                Created by {{ $category->user->name }}
                            </p>
                        </div>

                    </div>

                </div>

                <hr class="card-divider">

                <div class="card-footer">

                    <x-button
                        href="{{ route('categories.edit', 
                              ['category' => $category]) }}"
                        variant="outline">

                        Edit

                    </x-button>

                    <x-button
                        href="{{ route('categories.confirm-delete',
                              ['category' => $category]) }}"
                        variant="danger">

                        Delete

                    </x-button>

                </div>

            </x-list-card>

            @endforeach

        </div>

    </div>
</body>

@endsection