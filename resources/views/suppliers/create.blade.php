<x-app-layout>
    <div class="max-w-2xl mx-auto py-10">
        <h1 class="text-3xl text-white font-bold mb-6">Add New Supplier</h1>

        <form method="POST" action="{{ route('suppliers.store') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-white mb-2">Name:</label>
                <input type="text" name="name" required class="w-full p-2 rounded bg-gray-700 text-white">
            </div>

            <div class="mb-4">
                <label class="block text-white mb-2">Email:</label>
                <input type="email" name="email" class="w-full p-2 rounded bg-gray-700 text-white">
            </div>

            <div class="mb-4">
                <label class="block text-white mb-2">Phone:</label>
                <input type="text" name="phone" class="w-full p-2 rounded bg-gray-700 text-white">
            </div>

            <div class="mb-4">
                <label class="block text-white mb-2">Address:</label>
                <textarea name="address" class="w-full p-2 rounded bg-gray-700 text-white"></textarea>
            </div>

            <div class="flex justify-center">
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded">
                    Save Supplier
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
