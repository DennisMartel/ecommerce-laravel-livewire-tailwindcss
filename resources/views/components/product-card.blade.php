@props(['product'])

<li class="bg-white rounded-lg shadow">
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