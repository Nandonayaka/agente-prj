@extends('layouts.layout')

@section('content')
<div class="max-w-lg mx-auto mt-10 bg-white p-6 rounded-xl shadow-md">

    <h2 class="text-xl font-semibold mb-6">Edit Product : {{$data->name_product}}</h2>

    <form action="{{ route('product.update', $data->id_product) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="block text-sm mb-1">Nama Product</label>
            <input type="text" name="name_product"
                class="w-full border px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                value="{{$data->name_product}}"
                required>
            <!-- @error('name_product')
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                    {{ $message }}
            </div>
            @enderror -->
        </div>

        <div>
            <label class="block text-sm mb-1">Harga</label>
            <input type="number" name="harga"
                class="w-full border px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                value="{{$data->harga}}"
                required>
            <!-- @error('harga')
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                    {{ $message }}
            </div>
            @enderror -->
        </div>

        <div>
            <label class="block text-sm mb-1">Deskripsi</label>
            <textarea name="deskripsi_product"
            class="w-full border px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            rows="3" required>{{ $data->deskripsi_product }}</textarea>
            <!-- @error('deskripsi_product')
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                    {{ $message }}
            </div>
            @enderror -->
        </div>

        <div class="flex justify-end">
            <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                Simpan
            </button>
        </div>

    </form>
</div>
@endsection