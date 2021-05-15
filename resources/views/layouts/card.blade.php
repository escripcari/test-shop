<div class="col-sm-6 col-md-4" style="border: 1px solid black; margin: 1px;">
    <div class="thumbnail">
        <div class="labels">
            <span class="badge badge-success"></span>
        </div>
        <img src="" alt="">
        <div class="caption">
            <h3>{{$product->name}}</h3>
            <p>{{$product->price}} лей</p>
            <form action="{{route('basket-add', $product)}}" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                |
                <a href="{{route('product', [$product->category->code, $product->code])}}">Подробней</a>
                @csrf
            </form>

        </div>
    </div>
</div>



