@extends('shop.index')

@section('shop-content')

    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-8">
                <img @if (!empty($item['a_arrayimage'])) src="https://avto-as.ru/di-img/min/800/photo/{{ $item['a_arrayimage'] }}"
                    @else
                        src="{{ asset('assets/photo_no.jpg') }}" @endif {{-- alt="Антифриз FELIX PROLONGER G11 зелёный 5 кг." --}}
                    class="" style="width:100%;" />

            </div>
            <div class="col-xs-12 col-sm-4 bg-info text-center" style="border-radius: 3px;">

                <br>
                <br>

                <h3>
                    {{ $item['head'] }}
                    <font class="manufacturer">{{ $item['manufacturer'] }}</font>

                </h3>

                <br><br>

                <p>
                    @if ($item['a_price'] == '')
                        Цена по запросу
                    @else
                        Цена:&nbsp;{{ $item['a_price'] ?? '' }}&nbsp;р
                    @endif
                </p>

                <br><br>

                <nobr>
                    <button type="button" style="display:inline-block;   border-radius: 3px;" class="btn btn-xs btn-danger "
                        onclick="$ee = $('#quantity134').val() - 1; $('#quantity134').val($ee > 0 ? $ee : 0);"><i
                            class="fa fa-minus"></i></button><input type="text" readonly=""
                        style="display:inline-block; width:80px; text-align: center; " id="quantity134" min="1" max="999"
                        step="1" name="quantity[134]" value="1" size="1" class="form-control kolvo-items"><button
                        type="button" style=" display:inline-block;  " class=" btn btn-xs btn-success  "
                        onclick="$ee = +$('#quantity134').val() + 1; $('#quantity134').val($ee > 0 ? $ee : 0);"><i
                            class="fa fa-plus"></i></button>
                </nobr>

                <br>
                <br>

                <div class="button-ver2">

                    <center>
                        <button class=" shop__add_to_cart  btn btn-success" action="add_item_to_cart" aj_country=""
                            aj_manufacturer="FELIX" aj_comment="" aj_id="134"
                            aj_head="Антифриз FELIX PROLONGER G11 зелёный 5 кг." aj_a_id="ЦБ000103"
                            aj_a_categoryid="ЦБ000083" aj_a_catnumber="430206031" aj_catnumber_search="430206031"
                            aj_a_price="650" aj_a_in_stock="4" aj_a_arrayimage="430206031.jpg" aj_add_dt="" aj_add_who=""
                            aj_sort="50" aj_status="show" aj_kolvo="1" id="1346501" s="b0bfc242715db2b9b91f251bd7dca2ed"
                            hide_this_on_click="da" show_id_defore_click="but_ok_134"
                            onclick="$('#1346501').att5 июля 20r('aj_kolvo', +$('#quantity134').val());">
                            <span class="">
                                Добавить в корзину
                            </span>
                        </button>

                        <a href="/show/cart/" class="addcart-ver2 ok btn btn-success" id="but_ok_134"
                            style="margin-top:0;display:none;">
                            В корзине
                        </a>

                    </center>
                </div>

                <br>
                <br>
                <br>

                <p>Покажите товар всем своим:</p>

                <br />

                <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                <script src="https://yastatic.net/share2/share.js"></script>
                <div class="ya-share2"
                    data-services="collections,vkontakte,facebook,odnoklassniki,twitter,whatsapp,telegram"></div>


                <br>
                <br>

            </div>
        </div>


        {{-- <pre style="max-width:100%; overflow: auto;">{{ print_r($item) }}</pre> --}}

        @include('shop.good-bottom-row')

    </div>


@endsection

{{-- @section('script')
    @parent
    <script>
        $(document).ready(function() { // вся мaгия пoслe зaгрузки стрaницы
            $("body").on('click', '[href*="#"]', function(e) {
                var fixed_offset = 50;
                $('html,body').stop().animate({
                    scrollTop: $(this.hash).offset().top - fixed_offset
                }, 1000);
                e.preventDefault();
            });
        });
    </script>
@endsection --}}
