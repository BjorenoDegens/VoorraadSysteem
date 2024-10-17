<x-layout title="Categorie {{ $category->id }}">
    <h1>Categorie {{ $category->id }}</h1>
    <p>Naam: {{ $category->name }}</p>
    <a href="{{ route('category.index') }}">Terug</a>
</x-layout>
