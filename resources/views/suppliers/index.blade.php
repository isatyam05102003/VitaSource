<x-app-layout>
    <div class="max-w-7xl mx-auto py-10">

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-white">Suppliers</h1>
            <a href="{{ route('suppliers.create') }}" class="inline-block bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition">
                ➕ Add Supplier
            </a>
        </div>

        @if(session('success'))
            <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full bg-gray-800 rounded-lg overflow-hidden shadow-md">
                <thead class="bg-gray-700">
                    <tr>
                        <th class="py-3 px-6 text-left text-sm font-medium text-white uppercase tracking-wider">Name</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-white uppercase tracking-wider">Phone</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-white uppercase tracking-wider">Email</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-white uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-700 divide-y divide-gray-600">
                    @foreach($suppliers as $supplier)
                        <tr>
                            <td class="py-4 px-6 text-white">{{ $supplier->name }}</td>
                            <td class="py-4 px-6 text-white">{{ $supplier->phone }}</td>
                            <td class="py-4 px-6 text-white">{{ $supplier->email }}</td>
                            <td class="py-4 px-6 text-white flex gap-2">
                                <a href="{{ route('suppliers.edit', $supplier) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white py-1 px-3 rounded">
                                    Edit
                                </a>
                                <form action="{{ route('suppliers.destroy', $supplier) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this supplier?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-600 hover:bg-red-700 text-white py-1 px-3 rounded">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</x-app-layout>
