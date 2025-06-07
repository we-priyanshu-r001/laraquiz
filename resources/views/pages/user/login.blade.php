@extends('layouts.main')

@section('body_content')
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
    <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Please Login</h2>

    <form action="/user/login" method="POST" class="space-y-4">
        @csrf

        <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
        <input type="email" id="email" name="email" required value="{{old('email')}}"
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        <span class="text-red-800 text-xs">
            @error('email')
            {{$message}}
            @enderror
        </span>
        </div>

        <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" id="password" name="password" required
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        <span class="text-red-800 text-xs">
            @error('password')
            {{$message}}
            @enderror
        </span>
        </div>

        <div>
        <button type="submit"
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-md transition duration-200">
            Login
        </button>
        </div>
    </form>
    </div>
</body>

@endsection