<x-app-layout>
    
    <div class="container py-8">
        @foreach ($categories as $category)
            <section class="mb-10">
                <h1 class="text-lg uppercase font-semibold text-gray-700">
                    {{ $category->name }}
                </h1>

                @livewire('category-products', ['category' => $category])
            </section>
        @endforeach
    </div>

    @push('script')
        <script>
            Livewire.on('glider', id => {
                new Glider(document.querySelector(`.glider-${id}`), {
                    slidesToShow: 5.5,
                    slidesToScroll: 5,
                    draggable: true,
                    dots: `.dots-${id}`,
                    arrows:{
                        prev: '.glider-prev',
                        next: '.glider-next'
                    }
                });
            })
        </script>
    @endpush

</x-app-layout>