<x-layout title="Product {{ $product->id }}">
    <h1>Product {{ $product->id }}</h1>
    <p>Item naam: {{ $product->item_name }}</p>
    <p>Categorie: {{ $product->category->name }}</p>
    <p>Aantal: {{ $product->stock }}</p>
    <a href="{{ route('product.index') }}">Terug</a>
</x-layout>
