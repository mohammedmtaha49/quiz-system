@extends('layout.app')

@section('title','Delete Category')

@section('content')

<body class="bg-gray-100 min-h-screen">

    <x-navbar />

    <div class="page-container">

        <div class="confirm-card mt-10">

            <x-card>

                <div class="text-center">

                    <h1 class="confirm-title">

                        Delete Category

                    </h1>

                    <p class="confirm-message">

                        Are you sure you want to delete this category?

                        This action cannot be undone.

                    </p>

                </div>

                <form
                    method="POST"
                    action="{{ route('categories.destroy',
                            ['category' => $category]) }}">

                    @csrf

                    @method('DELETE')

                    <div class="confirm-actions">

                        <x-button
                            variant="danger">

                            Delete

                        </x-button>

                        <x-button
                            type="button"
                            variant="outline"
                            onclick="history.back()">

                            Cancel

                        </x-button>

                    </div>

                </form>

            </x-card>

        </div>

    </div>

</body>

@endsection