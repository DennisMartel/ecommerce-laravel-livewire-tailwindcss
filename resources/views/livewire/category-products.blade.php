<div wire:init="loadProducts">
    @if (count($products) > 0)
        <div class="glider-contain">
            <ul class="glider-{{ $category->id }}">
                
                @foreach ($category->products as $product)
                    <x-product-card :product="$product"/>
                @endforeach

            </ul>

            <button aria-label="Previous" class="glider-prev">«</button>
            <button aria-label="Next" class="glider-next">»</button>
            <div role="tablist" class="dots-{{ $category->id }}"></div>
        </div>
    @else
        <div class="w-full bg-white rounded-md shadow-md">
            <div class="flex justify-center items-center py-8">
                <div class="animate-spin rounded-full h-8 w-8 border-t-2 border-b-2 border-gray-900"></div>
            </div>
        </div>
    @endif
</div>
