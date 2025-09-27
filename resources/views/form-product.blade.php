<x-layout title="Tambah Produk">
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md mt-10">
        <h1 class="text-2xl font-bold mb-6">Tambah Produk</h1>

        @if(session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        <form action="" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf

            {{-- Category --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">Category</label>
                <input type="text" name="category" value="{{ old('category') }}" 
                       class="w-full mt-1 p-2 border rounded-md focus:ring focus:ring-blue-300">
                @error('category')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Name --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" 
                       class="w-full mt-1 p-2 border rounded-md focus:ring focus:ring-blue-300">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Description --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" rows="3"
                          class="w-full mt-1 p-2 border rounded-md focus:ring focus:ring-blue-300">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Price --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">Price</label>
                <input type="number" step="0.01" name="price" value="{{ old('price') }}" 
                       class="w-full mt-1 p-2 border rounded-md focus:ring focus:ring-blue-300">
                @error('price')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Image --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" name="image" 
                       class="w-full mt-1 p-2 border rounded-md focus:ring focus:ring-blue-300">
                @error('image')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Submit --}}
            <div>
                <button type="submit" 
                        class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</x-layout>
