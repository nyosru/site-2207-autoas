@extends('shop.index')

@section('shop-content')

    {{-- <div class="container-fluid">
        <div class="row"> --}}
            @foreach ($items as $item)
                @include('shop.cat-item')
            @endforeach
        {{-- </div>
    </div> --}}
    {{-- 222 333 444 --}}
    {{-- <pre>{{ print_r($menu_shop) }}</pre> --}}
    {{-- <pre>{{ print_r($items) }}</pre> --}}

@endsection
@section('js')
@parent
<script>

$(document).ready(function () {
    /* вся мaгия пoслe зaгрузки стрaницы */

    // добавляем товар в корзину, убираем от туда
    $(document).on('click', '.ashop__add_to_cart', function (event) {

        event.preventDefault();
        var th = $(this);
        console.log('shop__add_to_cart0', th);

        var hide_this_on_click = '';
        var show_id_defore_click = '';

        var uri_query = '';

        $.each(this.attributes, function () {
            if (this.specified) {

                // console.log('s', this.name, this.value);

                // пропускаем атрибуты
                if (this.name == 'style' || this.name == 'class' || this.name == 'href' || this.name == 'onclick') {
                }
                // обрабатываем атрибуты
                else if (this.name == 'hide_this_on_click' && this.value == 'da') {
                    hide_this_on_click = this.value;
                }
                // обрабатываем атрибуты
                else if (this.name == 'show_id_defore_click') {
                    show_id_defore_click = '#' + this.value;
                }
                // обрабатываем атрибуты
                else {
                    uri_query = uri_query + '&' + this.name + '=' + this.value;
                }
            }
        });

        $.ajax({
            url: '/api_shop/add_to_cart',
            data: 't=1' + uri_query,
            cache: false,
            dataType: 'json',
            headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
            type: 'post',
            // type: 'get',
            // beforeSend: function () {},
            success: function ($j) {

                // if( $j['status'] == 'ok' ){
                //     alert('ok');
                // }else{
                //     alert('ne ok');
                // }

                // refreshCartFast($j['kolvo']);

                $('.number-shopping-cart').html($j['kolvo']);

                // th.hide();
                // $('#but_ok_'+th.attr('aj_id')).show('slow');

                // refreshCart($j['kolvo'], $j['to_cart']);

                if (hide_this_on_click != '') {
                    th.hide();
                }
                if (show_id_defore_click != '') {
                    $(show_id_defore_click).show();
                }

            },
        });
    });
    });

</script>
@endsection
