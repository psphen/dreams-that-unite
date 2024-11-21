<div class="d-block d-lg-none" style="margin-top: 120px">
    <div id="menu-float" class="menu-float d-flex align-items-center justify-content-center text-nowrap">
        <a class="item-mobile btn  d-flex flex-column rounded mx-1 {{Route::is('frontend.index')?'btn-primary':'btn-outline-primary'}}" title="Home demo" href="{{route('frontend.index')}}">
            <i class="ti ti-home" style="font-size: 2rem;"></i>
        </a>
        <a class="item-mobile btn d-flex flex-column rounded mx-1 {{Route::is('alphabet.index')?'btn-primary':'btn-outline-primary'}}" title="Abecedario" href="{{route('alphabet.index')}}">
            <i class="fa-solid fa-font"></i>
        </a>
        <a class="item-mobile btn d-flex flex-column rounded mx-1 {{Route::is('word.index')?'btn-primary':'btn-outline-primary'}}" title="Palabras" href="{{route('word.index')}}">
            <i class="fa-regular fa-comments"></i>
        </a>
    </div>
</div>
