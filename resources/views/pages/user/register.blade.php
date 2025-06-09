@extends('layouts.main')

@section('body_content')
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
    <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Register</h2>

    <form action="/user/store" method="POST" class="space-y-4">
        @csrf
        <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
        <input type="text" id="name" name="name" required value="{{old('name')}}"
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        <span class="text-red-800 text-xs">
            {{$errors->user->first('email')}}
        </span>
        </div>

        <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
        <input type="email" id="email" name="email" required value="{{old('email')}}"
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        <span class="text-red-800 text-xs">
            {{$errors->user->first('email')}}
        </span>
        </div>

        <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" id="password" name="password" required
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        <span class="text-red-800 text-xs">
            {{$errors->user->first('password')}}
        </span>
        </div>

        <div>
        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        <span class="text-red-800 text-xs">
            {{$errors->user->first('password_confirmation')}}
        </span>
        </div>

        <div>
        <button type="submit"
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-md transition duration-200">
            Register
        </button>
        </div>
    </form>

    <p class="text-sm text-center text-gray-600 mt-6">
        Already have an account?
        <a href="/user/login" class="text-indigo-600 hover:underline">Login</a>
    </p>
    </div>
</body>

@endsection