@extends('layouts.app')

@section('title', 'Students')
@section('page-title', 'Students List')

@section('content')
<div class="bg-white shadow rounded-lg p-6">
    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
            ✅ {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('students.create') }}" 
       class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
       ➕ Add Student
    </a>

    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-gray-100 text-left">
                <th class="p-3">Name</th>
                <th class="p-3">Email</th>
                <th class="p-3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3">{{ $student->name }}</td>
                    <td class="p-3">{{ $student->email }}</td>
                    <td class="p-3 flex gap-2">
                        <a href="{{ route('students.edit', $student->id) }}" 
                           class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">Edit</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection