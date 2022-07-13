<tr {{-- style="position:sticky; top:0; background-color:white; border-bottom: 1px solid gray;" --}}>

    <td class="product-thumbnail hidden-xs">
        &nbsp;

        {{-- <a href="/show/i/{{ item.id }}/{{ f__translit(item.head,'uri2') }}/" > --}}
        {{-- <img src="{% if img1 != false %}/di-img/min/200/{{ img1 }}{% else %}{{ sd }}photo_no.jpg{% endif %}" alt="images" class="img-responsive"> --}}
        <img src="https://avto-as.ru{{ !empty($item['a_arrayimage']) ? '/di-img/min/200/photo/' . $item['a_arrayimage'] : '/sites/kl2009asavto/download/photo_no.jpg' }}"
            alt="images" class="img-responsive">
        {{-- </a> --}}

    </td>

    <td class="product-name">
        {{ $item['head'] ?? '' }} <em>{{ $item['manufacturer'] ?? '' }}</em>
        {{-- <input type="hidden" name="name[{{ $item['id'] }}]" value="{{ $item['head'] ?? '' }} {{ $item['manufacturer'] ?? '' }}" > --}}
    </td>
    <td class="product-price text-center">
        @if (!empty($item['a_price']))
            <span id="price_{{ $item['id'] }}" >{{ $item['a_price'] }}</span>
            {{-- <input type="hidden" name="price[{{ $item['id'] }}]" value="{{ $item['a_price'] }}" > --}}
        @else
            под заказ
        @endif
    </td>
    <td class="quantity text-center">

        @if (1 == 2)
            {{ $items[$item['id']] }}
            <br />
            <br />

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    {{-- <span class="input-group-text" id="basic-addon1">@</span> --}}
                    <button class="btn btn-outline-secondary">-</button>
                </div>

                <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                    aria-describedby="basic-addon1">

                <div class="input-group-append">
                    {{-- <span class="input-group-text" id="basic-addon2">@example.com</span> --}}
                    <button {{-- class="input-group-text" --}} class="btn btn-outline-secondary">-</button>
                </div>
            </div>


            <br />
            <br />
        @endif

        <nobr>

            <button type="button" style="display:inline-block;xfloat:left; paddin: 8px; border-radius: 3px;"
                {{-- xdata-toggle="tooltip" --}} {{-- xtitle="" --}} class="btn btn-xs btn-danger shop__change_kolvo"
                action="minus" item_id="{{ $item['id'] }}" {{-- s="{{ creatSecret(item . id) }}" --}} {{-- xdata-original-title="Отнять 1" --}}><i
                    class="fa fa-minus"></i></button>

            <input type="text" readonly="" style="display:inline-block; width:50px; xfloat:left; text-align: center;"
                id="quantity{{ $item['id'] }}" min="0" max="999" step="1" name="kolvo[{{ $item['id'] }}]"
                {{-- value="{% if item.kolvo is not empty and item.kolvo >= 0 %}{{ item . kolvo }}{% else %}0{% endif %}" --}} value="{{ $items[$item['id']] ?? 0 }}" size="1"
                class="form-control kolvo-items">

            <button type="button" {{-- xdata-toggle="tooltip" --}} {{-- xtitle="" --}} {{-- xonclick="" --}}
                {{-- xdata-original-title="Добавить 1" --}} style="display:inline-block;xfloat:left;"
                class="btn btn-xs btn-success shop__change_kolvo" action="plus" item_id="{{ $item['id'] }}"
                {{-- s="{{ creatSecret(item . id) }}" --}}><i class="fa fa-plus"></i></button>
            {{-- {#
                <button type="submit" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Update"><i class="fa fa-clone"></i></button>
                #} --}}
        </nobr>

    </td>

    <td class="shop_cart_summa product-subtotal text-center hidden-xs" id="summa_{{ $item['id'] }}" >
        {{ !empty($item['a_price']) ? $item['a_price'] * ($items[$item['id']] ?? 1) : '-' }}
    </td>

    <td>&nbsp;</td>
</tr>

{{-- <tr>
    <td colspan="6">
        <pre>{{ print_r($item) }}</pre>
    </td>
</tr> --}}
