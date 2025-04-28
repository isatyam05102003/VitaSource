<x-app-layout>
    <h1>Edit Supplier</h1>

    <form action="{{ route('suppliers.update', $supplier) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name:</label>
        <input type="text" name="name" value="{{ $supplier->name }}" required><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ $supplier->email }}"><br>

        <label>Phone:</label>
        <input type="text" name="phone" value="{{ $supplier->phone }}"><br>

        <label>Address:</label>
        <textarea name="address">{{ $supplier->address }}</textarea><br>

        <button type="submit">Update</button>
    </form>
</x-app-layout>
