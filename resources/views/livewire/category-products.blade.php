<div>
    <div class="glider-contain">
        <ul class="glider">
            
            @foreach ($category->products as $product)
                <li class="bg-white rounded-lg shadow {{ $loop->last ? '' : 'mr-4' }}">
                    <article>
                        <figure>
                            <img src="{{ Storage::url($product->images->first()->url) }}" alt="">
                        </figure>
                        <div class="py-4 px-6">
                            <h1 class="text-lg font-semibold ">
                                <a href="">
                                    {{ $product->name }}
                                </a>
                            </h1>
                            <p class="font-bold text-trueGray-700">USD ${{ $product->price }}</p>
                        </div>
                    </article>
                </li>
            @endforeach

        </ul>

        <button aria-label="Previous" class="glider-prev">«</button>
        <button aria-label="Next" class="glider-next">»</button>
        <div role="tablist" class="dots"></div>
    </div>
</div>
