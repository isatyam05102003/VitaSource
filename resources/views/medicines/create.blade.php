<x-app-layout>
    <div class="max-w-2xl mx-auto py-10">

        <h1 class="text-3xl font-bold mb-6 text-center text-white">Add New Medicine</h1>

        @if ($errors->any())
            <div class="mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('medicines.store') }}" class="bg-gray-800 p-8 rounded-lg shadow-md">
            @csrf

            <!-- 👇 Add Supplier Dropdown here -->
            <div class="mb-6">
                <label class="block text-white mb-2">Supplier:</label>
                <select name="supplier_id" required class="w-full p-2 rounded bg-gray-700 text-white">
                    <option value="">Select a Supplier</option>
                    @foreach($suppliers as $supplier)
                        <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                    @endforeach
                </select>

                <!-- Optional: Link to Add Supplier if needed -->
                <div class="mt-3 text-center">
    <a href="{{ route('suppliers.create') }}" class="inline-block bg-green-600 hover:bg-green-700 text-white text-sm font-semibold py-2 px-4 rounded-lg shadow-md transition">
        ➕ Add New Supplier
    </a>
</div>
            </div>

            <div class="mb-4">
                <label class="block text-white mb-2">Name:</label>
                <input type="text" name="name" required class="w-full p-2 rounded bg-gray-700 text-white">
            </div>

            <div class="mb-4">
                <label class="block text-white mb-2">Category:</label>
                <input type="text" name="category" class="w-full p-2 rounded bg-gray-700 text-white">
            </div>

            <div class="mb-4">
                <label class="block text-white mb-2">Description:</label>
                <textarea name="description" class="w-full p-2 rounded bg-gray-700 text-white"></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-white mb-2">Quantity:</label>
                <input type="number" name="quantity" required class="w-full p-2 rounded bg-gray-700 text-white">
            </div>

            <div class="mb-4">
                <label class="block text-white mb-2">Price:</label>
                <input type="text" name="price" required class="w-full p-2 rounded bg-gray-700 text-white">
            </div>

            <div class="mb-6">
                <label class="block text-white mb-2">Expiry Date:</label>
                <input type="date" name="expiry_date" required class="w-full p-2 rounded bg-gray-700 text-white">
            </div>

            <div class="flex justify-center">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded">
                    Add Medicine
                </button>
            </div>
        </form>

    </div>
</x-app-layout>
