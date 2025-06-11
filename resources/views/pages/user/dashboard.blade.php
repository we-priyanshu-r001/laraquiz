@extends('layouts.user')

@section('body_content')
<div class="min-h-screen flex items-center justify-center p-4">
    <div class="bg-white rounded-xl shadow-lg p-6 md:p-8 w-full max-w-4xl">
        <!-- Dashboard Header: Search Bar and Create Button -->
        <div class="flex flex-col sm:flex-row items-center justify-between mb-6 space-y-4 sm:space-y-0 sm:space-x-4">
            <!-- Search Bar -->
            <div class="relative w-full sm:w-2/3">
                <input type="text" placeholder="Search assessments..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 ease-in-out">
                <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="20" height="20">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
            <!-- Create New Assessment Button -->
            <button class="w-full sm:w-1/3 bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition duration-200 ease-in-out shadow-md">
                Create New Assessment
            </button>
        </div>

        <!-- Assessments List -->
        <div class="space-y-4">
            <!-- Individual Assessment Card 1 -->

            @foreach ($user->assessments as $assessment)
                <div class="bg-gray-50 p-4 rounded-lg shadow-sm flex flex-col md:flex-row items-center justify-between border border-gray-200">
                    <div class="flex-grow mb-4 md:mb-0 text-center md:text-left">
                        <h3 class="text-lg font-semibold text-gray-800">{{$assessment->title}}</h3>
                        <p class="text-sm text-gray-600">{{$assessment->created_at}}| Questions: 0</p>
                    </div>
                    <div class="flex flex-wrap justify-center gap-3">
                        <button class="bg-indigo-500 text-white text-sm py-1.5 px-3 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50 transition duration-200 ease-in-out">
                            Edit
                        </button>
                        <button class="bg-red-500 text-white text-sm py-1.5 px-3 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 transition duration-200 ease-in-out">
                            Delete
                        </button>
                        <button class="bg-green-500 text-white text-sm py-1.5 px-3 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50 transition duration-200 ease-in-out">
                            Share
                        </button>
                    </div>
                </div>
            @endforeach

            <!-- Individual Assessment Card 2 -->
            {{-- <div class="bg-gray-50 p-4 rounded-lg shadow-sm flex flex-col md:flex-row items-center justify-between border border-gray-200">
                <div class="flex-grow mb-4 md:mb-0 text-center md:text-left">
                    <h3 class="text-lg font-semibold text-gray-800">English Grammar Test - Level B2</h3>
                    <p class="text-sm text-gray-600">Created: 2024-05-20 | Questions: 30</p>
                </div>
                <div class="flex flex-wrap justify-center gap-3">
                    <button class="bg-indigo-500 text-white text-sm py-1.5 px-3 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50 transition duration-200 ease-in-out">
                        Edit
                    </button>
                    <button class="bg-red-500 text-white text-sm py-1.5 px-3 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 transition duration-200 ease-in-out">
                        Delete
                    </button>
                    <button class="bg-green-500 text-white text-sm py-1.5 px-3 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50 transition duration-200 ease-in-out">
                        Share
                    </button>
                </div>
            </div>

            <!-- Individual Assessment Card 3 -->
            <div class="bg-gray-50 p-4 rounded-lg shadow-sm flex flex-col md:flex-row items-center justify-between border border-gray-200">
                <div class="flex-grow mb-4 md:mb-0 text-center md:text-left">
                    <h3 class="text-lg font-semibold text-gray-800">History: World War II Overview</h3>
                    <p class="text-sm text-gray-600">Created: 2024-05-22 | Questions: 40</p>
                </div>
                <div class="flex flex-wrap justify-center gap-3">
                    <button class="bg-indigo-500 text-white text-sm py-1.5 px-3 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50 transition duration-200 ease-in-out">
                        Edit
                    </button>
                    <button class="bg-red-500 text-white text-sm py-1.5 px-3 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 transition duration-200 ease-in-out">
                        Delete
                    </button>
                    <button class="bg-green-500 text-white text-sm py-1.5 px-3 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50 transition duration-200 ease-in-out">
                        Share
                    </button>
                </div>
            </div> --}}

            <!-- Add more assessment cards as needed -->

        </div>
    </div>
</div>
@endsection