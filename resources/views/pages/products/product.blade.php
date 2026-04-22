@extends('layouts.layout')

@section('content')
<div class="max-w-5xl mx-auto mt-10">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Daftar User</h2>

    <div class="overflow-hidden rounded-2xl shadow-lg border border-gray-200">
        <table class="w-full text-sm text-left">
            <thead class="bg-blue-600 text-white">
                <tr>
                    <th class="px-6 py-3">No</th>
                    <th class="px-6 py-3">Nama</th>
                    <th class="px-6 py-3">Umur</th>
                    <th class="px-6 py-3">Status</th>
                </tr>
            </thead>

            <tbody class="bg-white divide-y">
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name_product }}</td>
                        <td>{{ $product->harga }}</td>
                        <td>{{ $product->deskripsi_product }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection