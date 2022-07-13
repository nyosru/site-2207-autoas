@inject('dops', 'App\Http\Controllers\Dops')

<div class="col-xs-12 col-sm-6 col-md-4 col-xl-4 col-lg-3 xproduct-list-item"
    style="margin-bottom: 3vh; margin-top: 3vh;">
    <div class="product-item-img">
        <a href="/shop/good/{{ $item->id }}/{{ $dops->translit($item->head, 'uri2') }}/">
            <img @if (!empty($item->a_arrayimage)) src="https://avto-as.ru/di-img/min/200/photo/{{ $item->a_arrayimage }}"
@else
                src="{{ asset('assets/photo_no.jpg') }}" @endif alt=""
                class="img-responsive">
        </a>
    </div>

    <div class="product-item-info">
        <div class="item_name_vitrin_resize">

            <h3 class="item_name_vitrin">
                <a href="/shop/good/{{ $item->id }}/{{ $dops->translit($item->head, 'uri2') }}/"
                    title="Сайлентблок нижнего рычага" class="black">
                    {{ $item->head }}
                    <font class="manufacturer">{{ $item->manufacturer }}</font>
                </a>
            </h3>


        </div>
        <div class="prod-price"><span class="price color-gray">
                под заказ
            </span></div>
        <div class="button-ver2">
            <center>
                <button class="addcart-ver2 shop__add_to_cart xaddToCart xbtn xbtn-default "
                    style="width: auto; margin:0 auto;" action="add_item_to_cart"

                    @foreach ($item as $k2 => $v2) aj_{{ $k2 }}="{{ $v2 }}" @endforeach

                    {{-- aj_country=""
                    aj_manufacturer="Patron"
                    aj_comment=""
                    aj_id="1" aj_head="Сайлентблок нижнего рычага " aj_a_id="ЦБ000124" aj_a_categoryid="ЦБ002170"
                    aj_a_catnumber="PSE10666" aj_catnumber_search="pse10666" aj_a_price="" aj_a_in_stock="2"
                    aj_a_arrayimage="PSE10666.jpg" aj_add_dt="" aj_add_who="" aj_sort="50" aj_status="show" aj_kolvo="1"
                    id="Сайлентблок нижнего рычага1" --}} s="b92ab1aa6733fcaa66b35b7ff3d4303c"
                    hide_this_on_click="da" show_id_defore_click="but_ok_1"><span class="">
                        Добавить в&nbsp;корзину
                    </span></button>

                <a href="/show/cart/" class="addcart-ver2 ok btn btn-success" id="but_ok_1"
                    style="margin-top:0;display:none;">
                    В&nbsp;корзине
                </a>
            </center>
        </div>
    </div>


</div>

<pre> {{ print_r($item) }}</pre>


