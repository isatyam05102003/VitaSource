<x-app-layout>
    <div class="max-w-2xl mx-auto py-10">
        <h1 class="text-3xl font-bold text-white mb-6">Edit Medicine</h1>

        <form method="POST" action="{{ route('medicines.update', $medicine->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-white mb-2">Name:</label>
                <input type="text" name="name" value="{{ $medicine->name }}" required class="w-full p-2 bg-gray-700 rounded text-white">
            </div>

            <div class="mb-4">
                <label class="block text-white mb-2">Category:</label>
                <input type="text" name="category" value="{{ $medicine->category }}" class="w-full p-2 bg-gray-700 rounded text-white">
            </div>

            <div class="mb-4">
                <label class="block text-white mb-2">Description:</label>
                <textarea name="description" class="w-full p-2 bg-gray-700 rounded text-white">{{ $medicine->description }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-white mb-2">Quantity:</label>
                <input type="number" name="quantity" value="{{ $medicine->quantity }}" required class="w-full p-2 bg-gray-700 rounded text-white">
            </div>

            <div class="mb-4">
                <label class="block text-white mb-2">Price:</label>
                <input type="text" name="price" value="{{ $medicine->price }}" required class="w-full p-2 bg-gray-700 rounded text-white">
            </div>

            <div class="mb-6">
                <label class="block text-white mb-2">Expiry Date:</label>
                <input type="date" name="expiry_date" value="{{ $medicine->expiry_date }}" required class="w-full p-2 bg-gray-700 rounded text-white">
            </div>

            <div class="flex justify-center">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded">
                    Update Medicine
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
