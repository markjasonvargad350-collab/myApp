@extends('layouts.app')

@section('title', 'Add Student')


@section('page-title', 'Add Student')

@section('content')
<div class="max-w-md mx-auto bg-white shadow-lg rounded-lg p-6">
    @if ($errors->any())
        <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
            ⚠️ Please fix the following:
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block font-medium">Name</label>
            <input type="text" name="name" value="{{ old('name') }}"
                   class="w-full border rounded px-3 py-2 focus:ring focus:ring-blue-300">
        </div>
        <div>
            <label class="block font-medium">Email</label>
            <input type="email" name="email" value="{{ old('email') }}"
                   class="w-full border rounded px-3 py-2 focus:ring focus:ring-blue-300">
        </div>
        <button type="submit" 
                class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
            Save
        </button>
    </form>
</div>
@endsection