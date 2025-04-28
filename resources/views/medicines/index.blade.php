<x-app-layout>
    <div class="max-w-7xl mx-auto py-10">

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-white">Medicines</h1>
            <a href="{{ route('medicines.create') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition">
                ➕ Add Medicine
            </a>
        </div>

        <form method="GET" action="{{ route('medicines.index') }}" class="mb-6 flex gap-4 items-center">
            <div>
                <label class="text-white block mb-1">Filter by Supplier:</label>
                <select name="supplier_id" onchange="this.form.submit()" class="w-60 p-2 rounded bg-gray-700 text-white">
                    <option value="">-- All Suppliers --</option>
                    @foreach($suppliers as $supplier)
                        <option value="{{ $supplier->id }}" {{ request('supplier_id') == $supplier->id ? 'selected' : '' }}>
                            {{ $supplier->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </form>

        @if (session('success'))
            <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full bg-gray-800 rounded-lg overflow-hidden shadow-md">
                <thead class="bg-gray-700">
                    <tr>
                        <th class="py-3 px-6 text-left text-sm font-medium text-white uppercase">Name</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-white uppercase">Supplier</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-white uppercase">Qty</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-white uppercase">Price</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-white uppercase">Expiry</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-white uppercase">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-700 divide-y divide-gray-600">
                    @foreach($medicines as $medicine)
                        <tr>
                            <td class="py-4 px-6 text-white">{{ $medicine->name }}</td>
                            <td class="py-4 px-6 text-white">
                                {{ $medicine->supplier ? $medicine->supplier->name : '-' }}
                            </td>
                            <td class="py-4 px-6 text-white">{{ $medicine->quantity }}</td>
                            <td class="py-4 px-6 text-white">{{ $medicine->price }}</td>
                            <td class="py-4 px-6 text-white">{{ $medicine->expiry_date }}</td>
                            <td class="py-4 px-6 text-white flex gap-2">
                                <a href="{{ route('medicines.edit', $medicine) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white py-1 px-3 rounded">
                                    Edit
                                </a>
                                <form method="POST" action="{{ route('medicines.destroy', $medicine) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Are you sure?')" class="bg-red-600 hover:bg-red-700 text-white py-1 px-3 rounded">
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
