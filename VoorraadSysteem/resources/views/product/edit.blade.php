<x-layout title="Product {{ $product->id }} aanpassen">
    <h1>Product {{ $product->id }} aanpassen</h1>
    <form action="{{ route('product.update', $product->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="item_name" class="form-label">Item name</label>
            <input id="item_name" type="text" class="form-control" name="item_name" value="{{ $product->item_name }}">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" aria-label="Default select example" name="category_id">
                <option selected disabled>Open this select menu</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if ($category->id === $product->category_id) selected @endif>
                        {{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input id="stock" type="number" class="form-control" name="stock" value="{{ $product->stock }}">
        </div>
        <button type="submit" class="btn btn-primary">Opslaan</button>
    </form>
</x-layout>
