<nav class="navbar-default">
    <div class="menu-heading js-nav-menu">Каталог</div>
    <div class="vertical-wrapper v3">
        <ul class="level0">

            @foreach ($menu_shop as $k => $v)
                @if ($v->a_parentid == '00000126' && strpos($v->head, 'автомобили') !== false)
                    <li style="text-align:left; padding: 15px 25px;">

                        {{ $v->head }}
                        <span class="fa fa-chevron-right"
                            style="padding-top:4px;float:right;"></span>

                        {{-- {{ $k }} --}}
                        {{-- <pre>{{ print_r($v) }}</pre> --}}

                        {{-- <a href="/show/ЦБ000940/"
                        {{ -- style="xborder: 1px solid green; text-align: left;" -- }}
                        style="text-align: left;"
                        >
                    <table style="width:100%;">
                        <tbody>
                            <tr>
                                <td></td>
                                <td><span class="fa fa-chevron-right"
                                        style="padding-top:4px;float:right;"></span>
                                    Американские автомобили
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </a><span class="icon"></span> --}}

                        <div class="dropdown-content">
                            <ul class="level1">
                                <li class="sub-menu xcol-3">
                                    <ul xclass="level2">
                                        <div class="link_block"><a class="link1"
                                                href="/show/00007786/"><b>Audi</b></a><a
                                                class=" link2 xbtn xbtn-light"
                                                href="/show/ЦБ000953/">80</a><a
                                                class=" link2 xbtn xbtn-light"
                                                href="/show/ЦБ000855/">A4</a>
                                        </div>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </li>
                @endif
            @endforeach

            @foreach ($menu_shop as $k => $v)
                @if ($v->a_parentid == '00000126' && strpos($v->head, 'автомобили') === false)
                    <li style="text-align:left;">
                        {{ $k }}
                        <pre>{{ print_r($v) }}</pre>
                        {{-- <a href="/show/ЦБ000940/"
                        {{ -- style="xborder: 1px solid green; text-align: left;" -- }}
                        style="text-align: left;"
                        >
                    <table style="width:100%;">
                        <tbody>
                            <tr>
                                <td></td>
                                <td><span class="fa fa-chevron-right"
                                        style="padding-top:4px;float:right;"></span>
                                    Американские автомобили
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </a><span class="icon"></span> --}}
                    </li>
                @endif
            @endforeach


            <li style="text-align:left;">
                <a href="/show/ЦБ000940/" {{-- style="xborder: 1px solid green; text-align: left;" --}} style="text-align: left;">
                    <table style="width:100%;">
                        <tbody>
                            <tr>
                                <td></td>
                                <td><span class="fa fa-chevron-right"
                                        style="padding-top:4px;float:right;"></span>
                                    Американские автомобили
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </a><span class="icon"></span>
                <div class="dropdown-content">
                    <ul class="level1">
                        <li class="sub-menu xcol-3">
                            <ul xclass="level2">
                                <div class="link_block"><a class="link1"
                                        href="/show/00007400/"><b>Chrysler</b></a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/ЦБ000521/"><b>Jeep</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000522/">Grand Cherokee</a></div>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </li>
            <li style="text-align:left;"><a href="/show/00000201/"
                    style="xborder: 1px solid green; text-align: left;">
                    <table style="width:100%;">
                        <tbody>
                            <tr>
                                <td><img src="/sites/kl2009asavto/download/module_items_image/evropa_png.436.png"
                                        style="float:left; max-width: 60px; max-height: 50px; margin-right: 3px;">
                                </td>
                                <td><span class="fa fa-chevron-right"
                                        style="padding-top:4px;float:right;"></span>
                                    Европейские автомобили
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </a><span class="icon"></span>
                <div class="dropdown-content">
                    <ul class="level1">
                        <li class="sub-menu xcol-3">
                            <ul xclass="level2">
                                <div class="link_block"><a class="link1"
                                        href="/show/00007786/"><b>Audi</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000953/">80</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000855/">A4</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00008136/">A6</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00008842/"><b>BMW</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002681/">118i</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001134/">X5</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00007379/"><b>Chevrolet</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00007382/">Aveo</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000707/">Captiva</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001093/">Cruze</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002411/">Epica</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00007222/">Lacetti</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00007380/">Lanos</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002883/">Niva</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002818/">Spark</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00008510/"><b>CITROEN</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002750/">C4</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00007277/"><b>Fiat</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001460/">Punto</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00007254/"><b>Ford/Mazda</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00008951/">Focus II</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00008931/">Focus III</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00009018/">Mazda 3</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00008262/">Transit</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00007948/"><b>Land Rover</b></a>
                                </div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00008082/"><b>Mercedes-benz</b></a>
                                </div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00008480/"><b>Opel</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000822/">Astra H</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001262/">Astra J</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000821/">Insignia</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002833/">Vectra C</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00007442/"><b>Peugeot</b></a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/ЦБ002430/"><b>Renault</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002431/">Logan</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/ЦБ002538/"><b>Skoda</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002539/">Octavia</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00007344/"><b>Volkswagen</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00007345/">Amarok</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000795/">Passat</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00008008/">Touareg</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00007362/"><b>Volvo</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002702/">S80</a></div>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </li>
            <li style="text-align:left;"><a href="/show/00007651/"
                    style="xborder: 1px solid green; text-align: left;">
                    <table style="width:100%;">
                        <tbody>
                            <tr>
                                <td><img src="/sites/kl2009asavto/download/module_items_image/kitay_png.407.png"
                                        style="float:left; max-width: 60px; max-height: 50px; margin-right: 3px;">
                                </td>
                                <td><span class="fa fa-chevron-right"
                                        style="padding-top:4px;float:right;"></span>
                                    Китайские автомобили
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </a><span class="icon"></span>
                <div class="dropdown-content">
                    <ul class="level1">
                        <li class="sub-menu xcol-3">
                            <ul xclass="level2">
                                <div class="link_block"><a class="link1"
                                        href="/show/00001590/"><b>AMUR</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001105/">Детали подвески и ходовая
                                        часть</a><a class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001098/">Детали рулевого
                                        управления</a><a class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001103/">Детали трансмиссии</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001104/">Детали электросистемы</a>
                                </div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00000722/"><b>Brilliance</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000269/">H530</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000716/">M1-M2</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00007951/">V5</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00000850/"><b>BYD</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002150/">F3</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00008109/"><b>Changan</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000540/">CS35</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00002238/"><b>ChangFeng</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002192/">Flying</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00000202/"><b>Chery</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00000003/">Amulet/Corda</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00006141/">Arrizo 7</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00001189/">B11 (Oriental Son)</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00005917/">Bonus 3</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00003255/">Bonus седан/Very хетчбек
                                        (A13)</a><a class=" link2 xbtn xbtn-light"
                                        href="/show/00000194/">Crossover/Cross
                                        Eastar(B14/V5)</a><a class=" link2 xbtn xbtn-light"
                                        href="/show/00000035/">Fora/Estina (А21)</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00001626/">Kimo (S12/A1) / QQ6
                                        (S21)</a><a class=" link2 xbtn xbtn-light"
                                        href="/show/00000127/">QQ/Sweet (S11)</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00003251/">S18/INDIS</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00001662/">Sedan (M11)/Hatchback
                                        (M12)</a><a class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000143/">Tiggo 2</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000307/">Tiggo 3</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001096/">Tiggo 4 (T17,T19)</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000711/">Tiggo 5</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00000007/">Tiggo/Tingo</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00000211/"><b>Dadi/Tianma/Derways</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002153/">Aurora</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002154/">Dadi</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002152/">Shuttle</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00008697/">Tianma</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00000755/"><b>FAW</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00004632/">Besturn B50</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00005897/">FAW 1010/6350</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00000813/">FAW 1041/1051</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000297/">FAW 27731-00</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002409/">V2</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00008656/">V5</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00001738/">Vita</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00002276/"><b>FOTON</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001758/">Детали ДВС</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001842/">Детали интерьера</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001759/">Детали кузова</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001760/">Детали подвески и ходовая
                                        часть</a><a class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001761/">Детали рулевого
                                        управления</a><a class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002194/">Детали системы
                                        выпуска</a><a class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001762/">Детали системы отопления
                                        и кондиционирования</a><a class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001763/">Детали системы
                                        охлаждения</a><a class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001764/">Детали топливной
                                        системы</a><a class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001765/">Детали тормозной
                                        системы</a><a class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001766/">Детали трансмиссии</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001767/">Детали электросистемы</a>
                                </div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00001106/"><b>Geely</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002090/">Atlas</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002086/">Coolray</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00004354/">Emgrand EC7/EC7
                                        (CVT)</a><a class=" link2 xbtn xbtn-light"
                                        href="/show/00005029/">Emgrand X7</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000882/">Emgrand X7 New</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00006541/">GC6</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00000718/">MK/MKcross</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00000335/">Otaka</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00000995/">Vision</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00000506/"><b>Great Wall</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000817/">Coolbear</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00006358/">Deer</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00008591/">Hover H2 Diesel</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00001594/">HOVER H2-H5</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00001008/">HOVER H5 Diesel</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00007359/">Hover H6</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002779/">Hover M2</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00001116/">Peri</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00006172/">Safe</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00006147/">Sailor</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00001593/">Wingle / Wingle 3 /
                                        Wingle 5</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00001687/"><b>Hafei</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001433/">Brio</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000974/">Lobo</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002195/">Simbo</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00003384/"><b>Haima</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001982/">Детали ДВС</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001984/">Детали кузова</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001985/">Детали подвески и ходовая
                                        часть</a><a class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001986/">Детали рулевого
                                        управления</a><a class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001981/">Детали системы
                                        выпуска</a><a class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001987/">Детали системы отопления
                                        и кондиционирования</a><a class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001988/">Детали системы
                                        охлаждения</a><a class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001989/">Детали топливной
                                        системы</a><a class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001990/">Детали тормозной
                                        системы</a><a class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001991/">Детали трансмиссии</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001992/">Детали электросистемы</a>
                                </div>
                                <div class="link_block"><a class="link1"
                                        href="/show/ЦБ000979/"><b>Haval</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001313/">H2</a><a
                                        class=" link2 xbtn xbtn-light" href="/show/ЦБ000980/">H6
                                        Дизель</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/ЦБ000631/"><b>Jinbei</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000632/">Hase</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00001382/"><b>JMC/Land Wind
                                            X6</b></a><a class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002295/">JMC</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000859/">Land Wind X6</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00000409/"><b>Lifan</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00006225/">Breez</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00008260/">Cebrium</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001274/">Myway</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00005523/">Smily</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00006122/">Solano</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00006768/">X50</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00005376/">X60</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002309/">X70</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00002300/"><b>SCEO/CEO</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001993/">Детали ДВС</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001995/">Детали кузова</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001996/">Детали подвески и ходовая
                                        часть</a><a class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002001/">Детали тормозной
                                        системы</a><a class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002002/">Детали трансмиссии</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002003/">Детали электросистемы</a>
                                </div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00008849/"><b>Tagaz</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00008850/">C10</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000757/">Hardy</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002876/">Road Partner P600</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00004549/">Tagaz C190 JAC REIN</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00007517/">Tagaz Vega C100</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00008547/"><b>ZAZ</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002114/">Vida</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/ЦБ001625/"><b>ZX Admiral, Grand
                                            Tiger, LAND MARK</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00001537/">Zhongxing Admiral</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00001536/">Zhongxing Land Mark Grand
                                        Tiger</a></div>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </li>
            <li style="text-align:left;"><a href="/show/00000796/"
                    style="xborder: 1px solid green; text-align: left;">
                    <table style="width:100%;">
                        <tbody>
                            <tr>
                                <td><img src="/sites/kl2009asavto/download/module_items_image/south_korea_png.137.png"
                                        style="float:left; max-width: 60px; max-height: 50px; margin-right: 3px;">
                                </td>
                                <td><span class="fa fa-chevron-right"
                                        style="padding-top:4px;float:right;"></span>
                                    Корейские автомобили
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </a><span class="icon"></span>
                <div class="dropdown-content">
                    <ul class="level1">
                        <li class="sub-menu xcol-3">
                            <ul xclass="level2">
                                <div class="link_block"><a class="link1"
                                        href="/show/00007332/"><b>Daewoo</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002248/">Matiz</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002304/">Nexia</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00007342/"><b>Hyundai/Kia</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00008175/">Accent</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002243/">Bongo 3</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002251/">Cerato</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001449/">Elantra</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00008748/">I20</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000549/">IX35</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000314/">Matrix</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000136/">RIO</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000860/">RIO 3</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00007636/">Santa Fe</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000739/">Solaris</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001010/">Sonata</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000356/">Spectra</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000153/">Sportage</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00008691/"><b>Ssang Yong
                                            Actyon</b></a></div>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </li>
            <li style="text-align:left;"><a href="/show/ЦБ001078/"
                    style="xborder: 1px solid green; text-align: left;">
                    <table style="width:100%;">
                        <tbody>
                            <tr>
                                <td></td>
                                <td><span class="fa fa-chevron-right"
                                        style="padding-top:4px;float:right;"></span>
                                    Автомобильные масла, смазки, спецжидкости и
                                    автохимия
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </a><span class="icon"></span>
                <div class="dropdown-content">
                    <ul class="level1">
                        <li class="sub-menu xcol-3">
                            <ul xclass="level2">
                                <div class="link_block"><a class="link1"
                                        href="/show/00000006/"><b>Моторные
                                            масла</b></a><a class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000832/">Castrol</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000833/">ENEOS</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000834/">Ford</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001643/">HONDA</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000836/">LIQUI MOLY</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000830/">Mannol</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000831/">Mitsubishi</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002200/">Mobil</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000826/">Motul</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00003949/">Neste</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000829/">NGN</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000835/">Nissan</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002331/">Orlen OIL</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000825/">Shell</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000827/">Sintec</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000828/">Газпром</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002523/">Лукойл</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00000334/"><b>Трансмиссионные масла,
                                            смазки, герметики, очистители, антифризы,
                                            спецжидкости</b></a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00005199/">3ton</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002851/">ABRO</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000938/">AIM-ONE</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002211/">ASP</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001637/">BARDAHL</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002468/">BMW</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00003880/">Castrol</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002445/">Chevron</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000939/">DoneDeal</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001243/">Eneos</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000083/">Felix</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002201/">Grass</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002462/">Hi-Gear</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001537/">Hyundai-KIA</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002238/">KraftTech</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001037/">LAVR</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00007736/">LIQUI MOLY</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002217/">Loctite</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002224/">LYNXauto</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00003882/">Mannol</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002216/">Miles</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001642/">MITSUBISHI</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00003881/">Motul</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00003883/">Shell</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000004/">SIBIRIA</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000007/">Sintec</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ001983/">Step Up</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00001111/">Totachi</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002219/">Toyota</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002707/">TRW</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002213/">Victor Reinz</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002209/">WD</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ000448/">YMIOIL</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/00004495/">ВмпАвто</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002220/">Вода
                                        дистиллированная</a><a class=" link2 xbtn xbtn-light"
                                        href="/show/00006596/">Газпром</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002236/">Прочее</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002785/">РосНефть</a></div>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </li>
            <li style="text-align:left;"><a href="/show/ЦБ000006/"
                    style="xborder: 1px solid green; text-align: left;">
                    <table style="width:100%;">
                        <tbody>
                            <tr>
                                <td><img src="/sites/kl2009asavto/download/module_items_image/avtoelektrika_png.764.png"
                                        style="float:left; max-width: 60px; max-height: 50px; margin-right: 3px;">
                                </td>
                                <td><span class="fa fa-chevron-right"
                                        style="padding-top:4px;float:right;"></span>
                                    Автоэлектрика (свечи, лампы, реле, предохранители,
                                    аккумуляторы)
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </a><span class="icon"></span>
                <div class="dropdown-content">
                    <ul class="level1">
                        <li class="sub-menu xcol-3">
                            <ul xclass="level2">
                                <div class="link_block"><a class="link1"
                                        href="/show/ЦБ001592/"><b>АКБ</b></a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/ЦБ001144/"><b>Батарейки</b></a>
                                </div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00000339/"><b>Лампы
                                            автомобильные</b></a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/ЦБ001149/"><b>Предохранители</b></a>
                                </div>
                                <div class="link_block"><a class="link1"
                                        href="/show/ЦБ001150/"><b>Разъёмы</b></a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/ЦБ001964/"><b>Реле</b></a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/ЦБ002233/"><b>Свечи
                                            зажигания</b></a><a class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002753/">Denso</a><a
                                        class=" link2 xbtn xbtn-light"
                                        href="/show/ЦБ002754/">LYNXauto</a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/ЦБ002242/"><b>Тестеры
                                            напряжения</b></a></div>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </li>
            <li style="text-align:left;"><a href="/show/00000071/"
                    style="xborder: 1px solid green; text-align: left;">
                    <table style="width:100%;">
                        <tbody>
                            <tr>
                                <td></td>
                                <td><span class="fa fa-chevron-right"
                                        style="padding-top:4px;float:right;"></span>
                                    Дополнительное оборудование и материалы
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </a><span class="icon"></span>
                <div class="dropdown-content">
                    <ul class="level1">
                        <li class="sub-menu xcol-3">
                            <ul xclass="level2">
                                <div class="link_block"><a class="link1"
                                        href="/show/00003960/"><b>Дефлекторы</b></a>
                                </div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00000043/"><b>Защиты картера</b></a>
                                </div>
                                <div class="link_block"><a class="link1"
                                        href="/show/ЦБ000845/"><b>Инструмент</b></a>
                                </div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00003961/"><b>Ковры в салон,
                                            багажник</b></a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/ЦБ001170/"><b>Компрессоры</b></a>
                                </div>
                                <div class="link_block"><a class="link1"
                                        href="/show/ЦБ002244/"><b>Прочее</b></a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00005868/"><b>Тягово-сцепные
                                            устройства</b></a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00000292/"><b>Хомуты</b></a></div>
                                <div class="link_block"><a class="link1"
                                        href="/show/00000340/"><b>Щетки
                                            стеклоочистителя</b></a></div>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </li>
            <li style="text-align:left;"><a href="/show/ЦБ000005/"
                    style="xborder: 1px solid green; text-align: left;">
                    <table style="width:100%;">
                        <tbody>
                            <tr>
                                <td><img src="/sites/kl2009asavto/download/module_items_image/gofra_glushitelya_png.194.png"
                                        style="float:left; max-width: 60px; max-height: 50px; margin-right: 3px;">
                                </td>
                                <td>
                                    Гофры системы выпуска
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </a><span class="icon"></span></li>
            <li style="text-align:left;"><a href="/show/ЦБ000586/"
                    style="xborder: 1px solid green; text-align: left;">
                    <table style="width:100%;">
                        <tbody>
                            <tr>
                                <td><img src="/sites/kl2009asavto/download/module_items_image/parfyum2_64_png.767.png"
                                        style="float:left; max-width: 60px; max-height: 50px; margin-right: 3px;">
                                </td>
                                <td>
                                    Парфюм "Meilleur"
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </a><span class="icon"></span></li>
            <li style="text-align:left;"><a href="/show/ЦБ002198/"
                    style="xborder: 1px solid green; text-align: left;">
                    <table style="width:100%;">
                        <tbody>
                            <tr>
                                <td></td>
                                <td>
                                    Парфюм "Vero"
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </a><span class="icon"></span></li>
        </ul>
    </div>
</nav>
