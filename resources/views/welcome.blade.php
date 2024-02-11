@extends('layout/layout')


@section('content')
<main class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="container">
        <div class="bg-white shadow-xl rounded-lg py-10 px-6 mx-auto max-w-4xl">
            <div class="text-center space-y-4">
                <h1 class="font-semibold text-2xl text-gray-800">Command Prompt Access Required</h1>
                <p class="text-gray-600 my-9.5">
                    This application is currently designed for use via the command prompt. To interact with the application, please open your terminal and run the following command:
                </p>
                <br>
                <code class="my-9.5 bg-gray-200 p-2 rounded font-mono text-lg ">
                    php artisan chat
                </code>
                <p class="text-gray-600">
                    Follow the on-screen instructions in your terminal to continue.
                </p>
            </div>
        </div>
    </div>
</main>

@endsection