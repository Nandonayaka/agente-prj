@extends('layouts.layout')

@section('content')
<div class="max-w-5xl mx-auto mt-10">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Daftar User</h2>

    <a href="{{ route('product.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition ">
           
        Tambah

       </a>
    <div class="overflow-hidden rounded-2xl shadow-lg border border-gray-200 mt-10">
        <table class="w-full text-sm text-left">
   
            <thead class="bg-blue-600 text-white">
                <tr>
                    <th class="px-6 py-3">No</th>
                    <th class="px-6 py-3">Nama</th>
                    <th class="px-6 py-3">Umur</th>
                    <th class="px-6 py-3">Aksi</th>
                </tr>
            </thead>

            <tbody class="bg-white divide-y">
            @foreach ($products as $product)
                <tr>
                    <td class="px-6 py-4">{{ $product->name_product }}</td>
                    <td class="px-6 py-4">{{ $product->harga }}</td>
                    <td class="px-6 py-4">{{ $product->deskripsi_product }}</td>

                    <td class="px-6 py-4">
                        <div class="flex gap-2">
                        <a href="{{ route('product.edit', $product->id_product) }}" class="border px-3 py-1 rounded">
                            edit
                        </a>
                        <a href="/product/{{ $product->id_product }}" class="border px-3 py-1 rounded">
                            detail
                        </a>
                        <form action="{{route('product.destroy', $product->id_product)}}" method="POST" onsubmit="return confirm('Yakin mau hapus produk ini, sayangku?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="border px-3 py-1 rounded">
                                hapus
                            </button>
                        </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection