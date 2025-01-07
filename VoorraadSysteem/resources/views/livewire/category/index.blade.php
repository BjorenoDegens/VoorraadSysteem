<x-layout title="Categorieën">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h1>Categorieën</h1>
        </div>
        <div>
            <a href="{{ route('category.create') }}" class="btn btn-primary">Nieuwe Categorie Toevoegen</a>
        </div>
    </div>
    <livewire:category-table />
</x-layout>
