<x-layout title="Categorie {{ $category->name }} }} aanpassen">
    <h1>Categorie {{ $category->name }} aanpassen</h1>
    <form action="{{ route('category.update', $category->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Naam</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ $category->name }}">
        </div>
        <button type="submit" class="btn btn-primary">Opslaan</button>
    </form>
</x-layout>
