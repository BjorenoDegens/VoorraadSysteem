<x-layout title="Voeg nieuwe categorie">
    <h1>Voeg nieuwe categorie toe</h1>
    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Naam</label>
            <input id="name" type="text" class="form-control" name="name">
        </div>
        <button type="submit" class="btn btn-primary">Opslaan</button>
    </form>
</x-layout>
