@extends('layouts.user')

@section('body_content')
<div class="min-h-screen flex flex-col items-center p-6">

    <!-- Category Title -->
    <h2 class="text-3xl font-bold text-gray-800 mb-6">{{$category->title}}</h2>

    <!-- Grid Layout for Assessments and Modules -->
    <div class="w-full max-w-6xl grid grid-cols-1 sm:grid-cols-2 gap-8">

        <!-- Assessments Table -->
        <div class="space-y-6 overflow-y-scroll max-h-screen">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Questions</h2>
            @forelse ($assessments as $assessment)
                <div class="bg-white p-4 rounded-lg shadow-md border border-gray-200 hover:shadow-lg transition duration-200 ease-in-out">
                    <div class="flex flex-col sm:flex-row items-center justify-between">
                        <div class="flex-grow text-center sm:text-left">
                            <h3 class="text-xl font-semibold text-gray-800">{{$assessment->title}}</h3>
                            {{-- <p class="text-sm text-gray-600">{{$question->created_at}}</p> --}}
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-gray-600">No question found for this module</p>
            @endforelse
        </div>

        <!-- Modules Table -->
        <div class="space-y-6 overflow-y-scroll max-h-screen">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Modules</h2>
            @forelse ($category->modules as $module)
                <div class="bg-white p-4 rounded-lg shadow-md border border-gray-200 hover:shadow-lg transition duration-200 ease-in-out">
                    <div class="flex flex-col sm:flex-row items-center justify-between">
                        <div class="flex-grow text-center sm:text-left">
                            <h3 class="text-xl font-semibold text-gray-800">{{$module->title}}</h3>
                            {{-- <p class="text-sm text-gray-600">{{$question->created_at}}</p> --}}
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-gray-600">No question found for this module</p>
            @endforelse
        </div>

    </div>

</div>
@endsection
