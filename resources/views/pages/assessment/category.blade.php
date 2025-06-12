@extends('layouts.user')

@section('body_content')
<div class="min-h-screen flex flex-col items-center p-6">

    <!-- Category Title -->
    <h2 class="text-3xl font-bold text-gray-800 mb-6">{{$category->title}}</h2>
    
    <!-- Assessments List -->
    <div class="w-full max-w-4xl space-y-6">
        @forelse ($category->assessments as $assessment)
            <div class="bg-white p-4 rounded-lg shadow-md border border-gray-200 hover:shadow-lg transition duration-200 ease-in-out">
                <div class="flex flex-col sm:flex-row items-center justify-between">
                    <div class="flex-grow text-center sm:text-left">
                        <h3 class="text-xl font-semibold text-gray-800">{{$assessment->title}}</h3>
                        <p class="text-sm text-gray-600">{{$assessment->created_at}} | Questions: 0</p>
                    </div>
                    <div class="flex flex-wrap justify-center gap-3 mt-4 sm:mt-0">
                        <button class="bg-indigo-500 text-white text-sm py-1.5 px-3 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-200 ease-in-out">
                            Edit
                        </button>
                        <button class="bg-red-500 text-white text-sm py-1.5 px-3 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-200 ease-in-out">
                            Delete
                        </button>
                        <button class="bg-green-500 text-white text-sm py-1.5 px-3 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 transition duration-200 ease-in-out">
                            Share
                        </button>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center text-gray-600">No assessment found for this category</p>
        @endforelse
    </div>

</div>
@endsection
