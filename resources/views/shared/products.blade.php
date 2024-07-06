<div id="div-card" class="d-flex flex-wrap justify-content-center gap-2 mt-5">
    @foreach ($prod as $products)

    <div class="product">
        <div class="w-100 h-100">
            
            <img class="object-fit-cover image" src="{{ Vite::asset ("resources/img/".$products['frontImage']) }}" alt="{{$products['brand']}}">

            <div class="heart"> &#10084;</div>
            <div class="labels">
                
            @foreach ($products['badges'] as $prod)
                @if ($prod['type']!=='tag')
                    <div class="sales1">{{$prod['value']}}</div>
                @endif
                @if ($prod['type']==='tag')
                    <div class="sales">{{$prod['value']}}</div>
                @endif
            @endforeach
            </div>
            
        </div>
        <div>
            <h3>{{$products['brand']}}</h3>
            <span>{{$products['name']}}</span>
            <span class="bg-red">{{$products['price']}}</span><span class="bar">29,99€</span>
        </div>
    </div>
    @endforeach
</div>