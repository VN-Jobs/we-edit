<section class="section-wrapper categories-wrapper">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="heading">This is what we do</h2>
        </div>
        <ul class="list-items row mt-5">
            @foreach ($products as $product)
            <li class="item col-sm-6 width50-flex">
                <div class="media row align-items-center">
                    <a class="col-lg-6" href="{{ route('category.show', $product->category->slug) }}">
                        <img src="{{ publicSrc($product->image_src) }}" alt="{{ $product->image_title }}" />
                    </a>
                    <div class="col-lg-6 media-body">
                        <a href="{{ route('category.show', $product->category->slug) }}">
                            <h3>{{ $product->name }}</h3>
                            <p>{{ $product->intro }}</p>
                            <p class="price">{{ $product->price }}</p>
                        </a>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</section>
