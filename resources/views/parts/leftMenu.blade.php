<div class="archive__left">
    <div class="archive-block">
        <h1 class="archive__title"><a href="{{ route('index') }}">ПЕДАГОГИЧЕСКАЯ КУХНЯ <span>УЧИТЕЛЯ БУДУЩЕГО</span></a></h1>
    </div>
    
    @if(isset($menu))
        <ul class="archive-menu">
            @foreach ($menu as $item)
                <li class="archive-menu__item"><a href="#" class="archive-menu__link archive--icon1 ">{{$item}}</a></li> 
                {{-- {{$loop->first ? 'active' : ''}} --}}
            @endforeach
        </ul>
    @endif
    {{-- <ul class="archive-menu">
        <li class="archive-menu__item"><a href="#" class="archive-menu__link archive--icon1 active2">Витрина</a></li>
        <li class="archive-menu__item"><a href="#" class="archive-menu__link archive--icon2">Педагогические ситуации и их решения</a></li>
        <li class="archive-menu__item"><a href="#" class="archive-menu__link archive--icon3">Мои избранные рецепты</a></li>
    </ul> --}}

</div>