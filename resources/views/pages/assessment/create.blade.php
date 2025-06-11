@extends('layouts.user')

@section('body_content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="max-w-4xl w-full p-6 bg-white rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Create Assessment</h2>

            <form action="{{ route('assessment.create') }}" method="POST">
                @csrf

                <!-- Title Field -->
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="title" id="title" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                </div>

                <!-- Assessment Data Field -->
                <div class="mb-4">
                    <label for="assessment" class="block text-sm font-medium text-gray-700">Assessment Data</label>
                    <textarea name="assessment" id="assessment" rows="4" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required></textarea>
                </div>

                <!-- Category Dropdown -->
                <div class="mb-4">
                    <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                    <select name="category" id="category" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                        {{-- <option value="Math">Math</option>
                        <option value="Science">Science</option>
                        <option value="Literature">Literature</option>
                        <option value="History">History</option> --}}
                        <!-- Add more categories here as needed -->
                    </select>
                </div>

                <!-- Submit Button -->
                <div class="mt-6">
                    <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        Create Assessment
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
