@inject('dops', 'App\Http\Controllers\Dops')

<h3 class="item_name_vitrin" >

    {{-- <a href="/show/i/{{ $i->id }}/{{ f__translit($i['head'],3) }}/"> --}}

    <a href="/shop/good/{{ $i->id }}/{{ $dops->translit( $i->head , 'uri2' ) }}/">

        {{-- {# <img src="https://via.placeholder.com/250x250.png/008811?text=vv+{{ i }}"
            style="max-width: 80%; max-height: 100px;"> #} --}}

        <img
        {{-- src="https://avto-as.ru/di-img/min/200/photo/{{ $i->img }}" --}}
        data-lazy="https://avto-as.ru/di-img/min/200/photo/{{ $i->img }}"
        />

        <br />
        <strong>{{ $i->head }}</strong> <font> {{ $i->man }}</font>
        <br />

        {{ $i->price }} Р

    </a>
    {{-- {# {{ pa(i) }} #} --}}
    </h3>
