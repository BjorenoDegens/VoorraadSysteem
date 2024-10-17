<x-layout title="Producten index">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h1>Producten</h1>
        </div>
        <div>
            <a href="{{ route('product.create') }}" class="btn btn-primary">Product toevoegen</a>
        </div>
    </div>
    <x-alertmsg />
    <livewire:product-table />
</x-layout>
