<a class="btn btn-default" target="_blank" href="{{ route('backend.product.create') }}"><i class="ion-edit"></i> {{ __('repositories.title.edit')  }}</a>
@foreach($products as $product)
<div class="row">
    <div class="col-sm-6 @if ($loop->index % 2 === 1) pull-right @endif">
        <img src="{{ publicSrc($product->image_ba_src) }}" alt="{{ $product->image_src }}" class="img-responsive">
    </div>
    <div class="col-sm-6">
        <h4>{{ $product->name }}</h4>
        <p>{{ $product->description }}</p>
    </div>
</div>
@endforeach
