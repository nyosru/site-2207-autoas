@extends('shop.index')

@section('shop-content')

    {{-- <pre>{{ print_r($items) }}</pre> --}}
    {{-- <pre>{{ print_r($items_data) }}</pre> --}}

    <div class="container xcheckout-cart-form">

        @if (session('warning'))

            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">

                    <h3 class="bg-warning" style="border: 2px solid red; padding: 10px 20px;">
                        {{ session('warning') }}
                    </h3>

                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>

                </div>
            </div>

        @else


@if( empty($items_data) )

<div class="alert alert-info">Корзина пуста, добавте товары и оформите заказ</div>

@else

            <form action="{{ route('shop.send_order') }}" method="post">

                @csrf

                <div class="row">
                    <div class="col-md-8 col-sm-12">

                        <table class="table table- xshop_table">

                            <thead>
                                <tr style="position:sticky; top:0; background-color:white; border-bottom: 1px solid gray;">
                                    <th class="product-thumbnail hidden-xs">&nbsp;</th>
                                    <th class="product-name text-center">Товар</th>
                                    <th class="product-price text-center">Цена</th>
                                    <th class="quantity text-center">Кол-во</th>
                                    <th class="product-subtotal text-center hidden-xs">Сумма</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($items_data as $item)
                                    @include('shop.cart-item')
                                @endforeach

                                {{-- {% for k,item in session.cart %}
                                {% include constant('dir_mods_mod_vers_tpl')~'body.cart.item.htm' %}
                                {% set summa = summa + ( ( items_in_cart[item.id]['a_price'] ? items_in_cart[item.id]['a_price']
                                : 0 ) * item.kolvo ) %}
                                {% endfor %} --}}

                            </tbody>
                        </table>

                        <br />
                        <br />

                        <p style="color:gray;">* - менеджер свяжется с Вами, согласует цену и срок доставки.</>

                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="aside-shopping-cart-total">
                            <h2>Заказ</h2>
                            <ul>
                                <li>
                                    <span class="text">Итого:
                                        <span class="xcart-number" id="summa_all_show">
                                            {{-- {{ summa | number_format(2, ',', '`') }}₽ --}}
                                        </span>
                                    </span>
                                </li>

                                <li>
                                    <br />
                                    <br />
                                    <span class="text xcalculate">Контактные данные</span>
                                </li>

                                <li><label>Как Вас зовут:
                                        <br /><input type="text" class="form-contol" style='max-width: 100%;' name="io"
                                            required="" /></label></li>

                                <li><label>Телефон:
                                        <br /><input type="text" class="form-contol" style='max-width: 100%;' name="phone"
                                            required="" /></label></li>

                                <li><label>Ваш город:
                                        <br /><input type="text" class="form-contol" style='max-width: 100%;' name="city"
                                            required="" value="Тюмень" /></label></li>

                                <li><label><input type="checkbox" {{-- xclass="form-contol" --}} style='max-width: 100%;' name="help"
                                            {{-- {#required=""#} --}} id="help" value="yes" checked="checked" /> Нужна помощь
                                        специалиста
                                    </label></li>

                                <li id="help_text">
                                    <div style="padding: 10px;
                                                                                            /* {# background-color: rgba(255,255,5,0.5); #}  */
                                                                                            ">
                                        <p style="color: red;">
                                            <b>
                                                Кроссы и замены на сайте Avto-AS являются справочной
                                                информацией и нуждаются в дополнительной проверке.
                                                Ответственность за корректный подбор запасных частей лежит на Покупателе.
                                                В случае неверного самостоятельного подбора возврат деталей не возможен.
                                                {{-- <!-- Если требуется помощь - необходимо обратиться к специалисту магазина. --> --}}
                                            </b>
                                        </p>
                                    </div>
                                </li>

                                {{-- <script>
                                    $(document).ready(function() {
                                        // вся мaгия пoслe зaгрузки стрaницы
                                        $('#help_text').hide();

                                        $('input#help').click(function() {

                                            var checked = $("input#help:checked");

                                            if (checked.length == 0) {
                                                $("#help_text").show('slow');
                                            } else {
                                                $("#help_text").hide();
                                                // $('div#' + $(this).val()).show();
                                            }

                                        });

                                    });
                                </script> --}}

                                <li id="dost1">Нужна доставка ?
                                    <span class="btn btn-sm btn-primary"
                                        onclick="$('#dost2').show('slow');$('#dost1').hide('slow');">Да</span>
                                </li>

                                <li id="dost2" style="display:none;">
                                    <label>Адрес доставки
                                        <br />
                                        <input type="text" class="form-contol" style='max-width: 100%;' name="dost" />
                                        <br />
                                        {{-- {#<small>Заполните адрес доставки</small> #} --}}
                                    </label>
                                </li>

                            </ul>
                            <div class="process">
                                <button type="submit" class="btn-checkout">Отправить заказ</button>
                            </div>

                        </div>
                    </div>
                </div>
            </form>

            <div class="shopping-cart-option">
            </div>

        @endif
        @endif

    </div>

@endsection


@section('js')
    @parent
    <script>
        $(document).ready(function() {


            /**
             * считаем все суммы в таблице корзины
             * @returns {undefined}
             */
            function refreshCartTable() {
                //// console.log('function refreshCartTable');

                // $('#cart .number-shopping-cart').html(kolvo);
                // alert('refresh');

                var summa = 0;

                $('tr.cart_item').each(function(i, elem) {
                    // // console.log('111', elem);

                    var item_id = $(this).attr('item_id');
                    //// console.log('item id', item_id);

                    var kolvo = $('.product-quantity input#quantity' + item_id).val();
                    // var kolvo = $('#quantity' + item_id).val();
                    //// console.log('kolvo', kolvo);

                    var price = $('#price' + item_id).attr('price');
                    // console.log('price', price);

                    var sum1 = kolvo * price;
                    //// console.log('sum1', sum1);

                    if (price > 0) {
                        $('#summa' + item_id).html(number_format(sum1, 2, ',', '`'));
                }

                summa = summa + sum1;

                $('#summa_id_show_' + item_id).html(number_format(sum1, 0, '.', '`'));
                    $('#summa_id_' + item_id).val(sum1);

                    //            if ($(this).hasClass("stop")) {
                    //                alert("Остановлено на " + i + "-м пункте списка.");
                    //                return false;
                    //            } else {
                    //                alert(i + ': ' + $(elem).text());
                    //            }
                });

                // console.log('summa', summa);
                $('#summa_all_show').html(number_format(summa, 2, '.', '`') + ' ₽');
            }




            // обработка клика по кнопе + - кол-во
            $(document).on('click', '.shop__change_kolvo', function(event) {

                event.preventDefault();

                //        if (!confirm('Удалить позицию ?'))
                //            return false;
                // // console.log( "$(document).on('click', '.deleteItemFromCart', function (event) {" );
                //        var uri_query = '';
                //        $.each(this.attributes, function () {
                //            if (this.specified) {
                //                if (this.name == 'class' || this.name == 'style') {
                //                } else {
                //                    uri_query = uri_query + '&' + this.name + '=' + this.value;
                //                }
                //            }
                //        });

                var th = $(this);
                var action = $(this).attr('action');

                var item_id = $(this).attr('item_id');
                // var s = $(this).attr('s');

                let now_kolvo = +$('#quantity' + item_id).val();

                if (action == 'plus') {
                    now_kolvo = +now_kolvo + 1;
                } else if (action == 'minus') {
                    if (now_kolvo > 0) {
                        now_kolvo = +now_kolvo - 1;
                    } else {
                        now_kolvo = 0;
                    }
                }

                $('#quantity' + item_id).val(now_kolvo);

                shop__change_kolvo(action, item_id, now_kolvo);

                // $('#item_tr_' + item_id).remove();
                // refreshCart($('#shop_id').val());

                return false;
            });




            // собираем сумму корзины
            var shop__cart_refresh_summa = function() {

                let $all = 0;

                $('.shop_cart_summa').each(function(i, elem) {
                    let $sum1 = $('#' + elem.id).html();

                    if ($sum1 != undefined && $sum1 > 0) {
                        // $sum2 = +$sum1 * 1 ;
                        // console.log( '22' , +$sum1 );
                        $all = +$all + +$sum1;
                    }
                });

                $('#summa_all_show').html($all + '&nbsp;₽');
            };


            shop__cart_refresh_summa();



            // изменение количества
            var shop__change_kolvo = function(action, item_id, new_kolvo) {

                $.ajax({

                    url: '/api_shop/change-kolvo/' + item_id + '/' + new_kolvo,
                    data: 'action=22',
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    cache: false,
                    dataType: 'json',
                    type: 'post',
                    // beforeSend: function() {
                    // },
                    success: function($j) {
                        console.log('success', $j.item_id, $j);
                        $price = $('#price_' + $j.item_id).html();
                        if ($price != undefined) {
                            $q = $('#quantity' + $j.item_id).val();
                            let $summa = $price * $q;
                            // console.log($price, $summa);
                            $('#summa_' + $j.item_id).html($summa);
                            shop__cart_refresh_summa();
                        }
                    },
                });
                return false;
            };
        });
    </script>
@endsection
