@extends('layouts.user')

@section('body_content')
<div class="min-h-screen flex flex-col items-center p-6 space-y-2">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Assessments Comments</h2>
        @forelse ($comments as $comment)
            <div class="bg-white p-4 rounded-lg shadow-md border border-gray-200 hover:shadow-lg transition duration-200 ease-in-out">
                <div class="flex flex-col sm:flex-row items-center justify-between">
                    <div class="flex-grow text-center sm:text-left">
                        <h3 class="text-xl font-semibold text-gray-800">{{$comment->body}}</h3>
                        {{-- <p class="text-sm text-gray-600">{{$question->created_at}}</p> --}}
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center text-gray-600">No Comment found for this module</p>
        @endforelse
</div>
@endsection