<div class="archive__left">
    <div class="archive-block">
        <h1 class="archive__title"><a href="{{ route('index') }}">ПЕДАГОГИЧЕСКАЯ КУХНЯ <span>УЧИТЕЛЯ БУДУЩЕГО</span></a></h1>
    </div>
    
    @if(isset($menu))
        <ul class="archive-menu">
            @foreach ($menu as $item)
                <li class="archive-menu__item"><a href="{{ route('posts.subcategory', ['category'=> $item->parent_id, 'subcategory' => $item->id]) }}" class="archive-menu__link {{ isset($category) && $item->id == $category->id ? 'active': '' }}" {!! isset($item->icon) ? "style='background-image:url(". asset("assets/img/".$item->icon).") !important' " : '' !!} >{{$item->title}}</a></li> 
                {{-- {{$loop->first ? 'active' : ''}} --}}

                
            @endforeach
                <li class="archive-menu__item"><a href="{{ route('wishlist') }}" class="archive-menu__link archive--icon-wishlist">Мои избранные рецепты</a></li> 
        </ul>
    @endif
    {{-- <ul class="archive-menu">
        <li class="archive-menu__item"><a href="#" class="archive-menu__link archive--icon1 active2">Витрина</a></li>
        <li class="archive-menu__item"><a href="#" class="archive-menu__link archive--icon2">Педагогические ситуации и их решения</a></li>
        <li class="archive-menu__item"><a href="#" class="archive-menu__link archive--icon3">Мои избранные рецепты</a></li>
    </ul> --}}

</div>