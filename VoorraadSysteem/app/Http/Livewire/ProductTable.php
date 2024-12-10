<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use App\Models\Product;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;

class ProductTable extends DataTableComponent
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
            Column::make('Bekijken')
                ->label(function ($row) {
                    return '
                    <a href="' . route('product.show', $row) . '" class="btn btn-info btn-sm">
                        <i class="fas fa-eye"></i> Bekijken
                    </a>
                ';
                })
                ->html(),
            Column::make('Aanpassen')
                ->label(function ($row) {
                    return '
                    <a href="' . route('product.edit', $row) . '" class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"></i> Aanpassen
                    </a>
                ';
                })
                ->html(),
            Column::make('Verwijderen')
                ->label(function ($row) {
                    return '
                    <button class="btn btn-danger btn-sm" wire:click="destroy(' . $row->id . ')">
                        <i class="fas fa-trash"></i> Verwijderen
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

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        $this->emit('refreshTable');
    }
}
