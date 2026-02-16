<div class="max-w-md mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
    <h1 class="text-xl font-bold mb-4">Edit Student</h1>

    @if ($errors->any())
        <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>⚠️ {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.update', $student->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="block font-medium">Name</label>
            <input type="text" name="name" value="{{ old('name', $student->name) }}"
                   class="w-full border rounded px-3 py-2 focus:ring focus:ring-blue-300">
        </div>
        <div>
            <label class="block font-medium">Email</label>
            <input type="email" name="email" value="{{ old('email', $student->email) }}"
                   class="w-full border rounded px-3 py-2 focus:ring focus:ring-blue-300">
        </div>
        <button type="submit" 
                class="w-full bg-yellow-500 text-white py-2 rounded hover:bg-yellow-600">
            Update
        </button>
    </form>
</div>