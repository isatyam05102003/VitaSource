<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="mb-8 grid grid-cols-1 sm:grid-cols-3 gap-4">
                <!-- Summary Cards -->
                <div class="bg-green-600 rounded-lg p-6 text-center shadow-md">
                    <p class="text-sm text-white">Total Medicines</p>
                    <h2 class="text-3xl font-bold text-white">{{ $totalMedicines }}</h2>
                </div>

                <div class="bg-blue-600 rounded-lg p-6 text-center shadow-md">
                    <p class="text-sm text-white">Total Suppliers</p>
                    <h2 class="text-3xl font-bold text-white">{{ $totalSuppliers }}</h2>
                </div>

                <!-- Dynamic Low Stock Card -->
                <div class="{{ $lowStock > 0 ? 'bg-red-600' : 'bg-green-600' }} rounded-lg p-6 text-center shadow-md">
                    <p class="text-sm text-white">Low Stock Alerts</p>
                    <h2 class="text-3xl font-bold text-white">{{ $lowStock }}</h2>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Action Buttons -->
                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition">
                    <a href="{{ route('medicines.create') }}" class="block text-blue-600 font-semibold text-center">
                        ➕ Add Medicine
                    </a>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition">
                    <a href="{{ route('suppliers.create') }}" class="block text-green-600 font-semibold text-center">
                        ➕ Add Supplier
                    </a>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition">
                    <a href="{{ route('medicines.index') }}" class="block text-gray-800 font-semibold text-center">
                        📋 View All Medicines
                    </a>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition">
                    <a href="{{ route('suppliers.index') }}" class="block text-gray-800 font-semibold text-center">
                        📋 View All Suppliers
                    </a>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
