<li class="sub-menu xcol-3">
    <h3>{{ $v->head ?? '' }}</h3>
    <ul xclass="level2">
        @foreach ($menu_shop as $v1)
            @if ($v1['a_parentid'] == $v['a_id'])
                <div class="link_block">
                    <a class="link1" href="/shop/cat/{{ $v1['id'] }}/"><b>{{ $v1['head'] }}</b></a>
                    @foreach ($menu_shop as $v2)
                        @if ($v2['a_parentid'] == $v1['a_id'])
                            <a class=" link2
                            {{-- xbtn xbtn-light --}}
                            " href="/shop/cat/{{ $v2['id'] }}/">{{ $v2['head'] }}</a>
                        @endif
                    @endforeach
                </div>
            @endif
        @endforeach
    </ul>
</li>

{{-- (
    [id] => 12
    [head] => Европейские автомобили
    [a_id] => 00000201
    [a_parentid] => 00000126
    [add_dt] =>
    [add_who] =>
    [sort] => 50
    [status] => show
) --}}
