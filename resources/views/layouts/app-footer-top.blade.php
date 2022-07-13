{{-- {% spaceless %} --}}
    {{-- {#<div class="info">#} --}}
    <div class="top-footer">
        <div class="container">
            <div class="row ">
                <div class="col-md-3 col-xs-12 text-center">

                    <div class="photo" xstyle="padding-top: 3rem;">

                        <a href="/show/">
                            <img src="{{ sd }}img/logo2.png" alt="Авто-АС" class="img-responsive" style="max-height: 100px;" />
                            {{-- {# <img src="{{ sd }}logo_new_w.svg" alt="Авто-АС" class="img-responsive" style="max-height: 200px;"  /> #} --}}
                        </a>

                    </div>
                    {{-- {#<p class="info-desc">Автозапчасти, автохимия в Тюмени</p>#} --}}

                </div>

                <div class="col-md-3 hidden-xs hidden-sm">

                    <div class="widget-info">
                        <ul>


                            {% if vars_site.adress.val is defined %}
                                <li>
                                    <p class="title-contain">
                                        <i class="ion-ios-location fa-4" aria-hidden="true"></i>
                                        <a href="/contacts/" >{{ vars_site.adress.val }}</a>
                                    </p>
                                </li>
                                <li class="clearfix">
                                </li>
                            {% endif %}



                            {% if vars_site.phone1.val is defined %}
                                <li>
                                    <p class="title-contain">
                                        <i class="ion-ios-telephone fa-4" aria-hidden="true"></i>
                                        <a href="tel://{{ vars_site.phone1.val }}" >
                                            {% if vars_site.phone1rus.val is defined %}
                                                {{ vars_site.phone1rus.val }}
                                            {% else %}
                                                {{ vars_site.phone1.val }}
                                            {% endif %}
                                        </a>
                                    </p>
                                </li>
                                <li class="clearfix">
                                </li>
                            {% endif %}


                        </ul>
                    </div>

                    {#                            <h3>let us help you</h3>
                                                <ul class="fmenu">
                                                    <li><a href="#">your account</a></li>
                                                    <li><a href="#">your orders</a></li>
                                                    <li><a href="#">shipping rates & policies</a></li>
                                                    <li><a href="#">clickShop prime</a></li>
                                                    <li><a href="#">return & Replacements</a></li>
                                                    <li><a href="#">Manage Your Content and Devices</a></li>
                                                    <li><a href="#">ClickShop Assistant</a></li>
                                                    <li><a href="#">Help</a></li>
                                                </ul>
                    #}
                </div>
                <div class="col-md-4 pd-left hidden-xs hidden-sm">

                    {% if 1 == 2 %}
                    <a title="smartphone" href="/docs_oferta/" >Оферта</a>,
                    <br/>
                    <br/>
                    <a title="smartphone" href="/docs_konf/" >Политика конфиденциальности</a>,&nbsp;
                    <br/>
                    <br/>
                    <a title="smartphone" href="/docs_vozvrat/" >Гарантия и условия возврата</a>,&nbsp;
                    {% endif %}

                    {% include constant('dir_site_tpl')~'nyos.dop.menu3.htm' %}


                    {#                            <div class="widget-info">
                                                    <ul>
                    #}                                    {#
                                                        <li><i class="ion-email-unread fa-4" aria-hidden="true"></i>
                                                        <p class="title-contain">ClickShop@support.com</p>
                                                        </li>
                                                        <li class="clearfix"></li>
                                                        #}
                    {#                                </ul>
                                                </div>
                    #}
                    {#
                    <h3>useful links</h3>
                    <ul class="fmenu">
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">About ClickShop</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Our Devices</a></li>
                        <li><a href="#">Apps & Download</a></li>
                        <li><a href="#">Thinking</a></li>
                    </ul>
                    #}
                </div>
                <div class="col-xs-12 col-sm-12 hidden-md hidden-lg nidden-xl text-center">

                    <p class="title-contain">

                        {% if vars_site.adress.val is defined %}
                            <a href="#" >{{ vars_site.adress.val }}</a>
                            <br/>
                        {% endif %}

                        {% if vars_site.phone1.val is defined %}
                            <a href="tel://{{ vars_site.phone1.val }}" >
                                {% if vars_site.phone1rus.val is defined %}
                                    {{ vars_site.phone1rus.val }}
                                {% else %}
                                    {{ vars_site.phone1.val }}
                                {% endif %}
                            </a>
                        {% endif %}

                    </p>
                    <br/>

                    {% if 1 == 2 %}
                    <a title="smartphone" href="/docs_oferta/" >Оферта</a>,
                    <br/>
                    <a title="smartphone" href="/docs_konf/" >Политика конфиденциальности</a>,&nbsp;
                    <br/>
                    <a title="smartphone" href="/docs_vozvrat/" >Гарантия и условия возврата</a>,&nbsp;
                    {% endif %}

                    {% include constant('dir_site_tpl')~'nyos.dop.menu3.htm' %}

                    <br/>
                    <br/>

                </div>


                <div class="col-md-2 col-xs-12">

                    {#                    <h3>Оформите подписку</h3>
                                        <p class="news-desc">Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
                                        <form action="#" class="news-letter-form">
                                            <input type="text" name="e" class="form-control" placeholder="Enter your e-mail">
                                            <button type="submit" class="btnsub">Subscribe</button>
                                        </form>
                    #}
                    <center>
                        {#<h3 class="titles">Присоединяйтесь:</h3>#}
                        <ul class="social">
                            {#                        <li><a href="#"><i class="ion-social-facebook fa-3" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="ion-social-twitter fa-3" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="ion-social-googleplus fa-3" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="ion-social-youtube fa-3" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="ion-social-linkedin fa-3" aria-hidden="true"></i></a></li>
                            #}

                            {% if 1 == 2 %}
                                {% if vars_site.vk_group.val is defined %}
                                    <li class="skype" >
                                        <a href="https://vk.com/{{ vars_site.vk_group.val }}" target="_blank" title="VK">
                                            <i class="fa fa-vk" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                {% endif %}
                            {% endif %}

                            {% if vars_site.vk_group.val is defined %}
                                <a href="https://vk.com/{{ vars_site.vk_group.val }}" target="_blank" title="VK">
                                    <img src="/img/icon/vk04.png" style="width:46px; margin-right: 7px;" />
                                </a>
                            {% endif %}

                            {% if 1 == 2 %}
                                {% if vars_site.insta.val is defined %}
                                    <li class="google" >
                                        <a href=" https://www.instagram.com/{{ vars_site.insta.val }}/" target="_blank" title="VK">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                {% endif %}
                            {% endif %}

                            {% if vars_site.insta.val is defined %}
                                <a href=" https://www.instagram.com/{{ vars_site.insta.val }}/" target="_blank" title="insta">
                                    <img src="/img/icon/instagram.png" style="width:40px; margin-right: 5px;" />
                                </a>
                            {% endif %}


                            {% if 1 == 2 %}
                                {% if vars_site.wa.val is defined %}
                                    <li class="facebook">
                                        <a href="https://wa.me/{{ vars_site.wa.val }}" target="_blank" title="WhatsApp">
                                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                {% endif %}
                            {% endif %}

                            {% if vars_site.wa.val is defined %}
                                <a href="https://wa.me/{{ vars_site.wa.val }}" target="_blank" title="WhatsApp">
                                    <img src="/img/icon/wa.png" style="width:42px; margin-right: 5px;" />
                                </a>
                            {% endif %}

                        </ul>
                    </center>
                </div>
            </div>
        </div>
    </div>
{{-- {% endspaceless %} --}}
