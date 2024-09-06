<x-layout title="Categorieën pagina">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Categorieën Overzicht</h2>
            <a href="{{ route('category.create') }}" class="btn btn-primary">Nieuwe Categorie Toevoegen</a>
        </div>

        <table class="table-striped table-bordered table">
            <thead class="table-light">
                <tr>
                    <th scope="col">Naam</th>
                    <th scope="col">Bekijk</th>
                    <th scope="col">Aanpassen</th>
                    <th scope="col">Verwijderen</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('category.show', $category->id) }}" class="btn btn-info">Bekijk</a>
                        </td>
                        <td>
                            <a href="{{ route('category.edit', $category->id) }}" class="btn btn-warning">Aanpassen</a>
                        </td>
                        <td>
                            <form action="{{ route('category.destroy', $category->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Verwijderen</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {{ $categories->links() }}
        </div>
    </div>
</x-layout>
