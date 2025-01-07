<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Category;
use App\Models\Product;

class ArchiveTable extends DataTableComponent
{
    protected $model = Product::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setTableAttributes([
                'class' => 'table table-striped table-hover table-bordered',
            ])
            ->setTdAttributes(function (Column $column, $row, $columnIndex, $rowIndex) {
                return [
                    'class' => 'text-center align-middle',
                ];
            });
    }

    public function builder(): Builder
    {
        return Product::onlyTrashed()->with('category');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Item naam", "item_name")
                ->searchable()
                ->sortable(),
            Column::make("Categorie", "category.name")
                ->searchable()
                ->sortable(),
            Column::make("Aantal", "stock")
                ->searchable()
                ->sortable(),
            Column::make("Verwijderd op", "deleted_at")
                ->sortable()
                ->label(function ($row) {
                    return \Carbon\Carbon::parse($row->deleted_at)->format('H:i d-m-Y');
                }),
            Column::make('Herstellen')
                ->label(function ($row) {
                    return '
                    <button class="btn btn-info btn-sm" wire:click="restore(' . $row->id . ')">
                        <i class="fas fa-trash"></i> Herstellen
                    </button>
                ';
                })
                ->html(),

        ];
    }

    public function filters(): array
    {
        return [
            SelectFilter::make('Categorie')
                ->options(
                    Category::query()
                        ->orderBy('name')
                        ->pluck('name', 'id')
                        ->toArray()
                )
                ->filter(function (Builder $builder, string $value) {
                    if (!empty($value)) {
                        $builder->where('category_id', $value);
                    }
                }),
        ];
    }


    // prodcuten herstellen die verwijderd waren
    public function restore($id)
    {
        Product::withTrashed()->find($id)->restore();
    }
}
