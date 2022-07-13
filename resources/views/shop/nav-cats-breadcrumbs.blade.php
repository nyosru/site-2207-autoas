    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div xclass="filter-block bd">
                <div class="row" style="padding-bottom: 3vh;">
                    <div class="col-xs-12 col-md-10" style="padding-left:5%;">
                        <ul class="other-link-sub xpull-right">
                            <li><a href="/shop/">Авто-АС</a></li>

                            {{-- @inject('home','App\Http\Controllers\HomeController')
                            <pre>{{ print_r( $home->breadcrumbs_cat() ) }}</pre> --}}
                            {{-- <pre>{{ print_r( $breadcrumbs ) }}</pre> --}}

                            @for ($t = 5; $t >= 1; $t--)
                                @if (!empty($breadcrumbs[$t]['id']) && !empty($breadcrumbs[$t]['head']) )
                                <li>
                                    <a href="/shop/cat/{{ $breadcrumbs[$t]['id'] }}/">
                                    {{ $breadcrumbs[$t]['head'] }}
                                    </a>
                                </li>
                                @endif
                            @endfor

                            {{-- <li><a href="/show/00001590/">AMUR</a></li>
                            <li><a href="/show/ЦБ001098/">Детали рулевого управления</a></li> --}}

                        </ul>
                    </div>
                    <div class="col-md-2 hidden-xs">
                        <div class="box box-view pull-right"
                            style="padding-right:5%; font: 14px/36px 'Open Sans', sans-serif;"><span>
                                Товары&nbsp;1–1&nbsp;из&nbsp;1
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (1 == 2)
        {%  set nav = get_cats_nav( db, ( get.option ?? null ) ) %}
        {#{ pa( nav )  }#}
        {#{ pa(cats) }#}

        <ol class="breadcrumb">

            {#
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                    #}

            {% set nn = 1 %}

            {% for k,v in nav %}

            {% if nn != 1 %}

            <li class="xbreadcrumb-item"><a href="/show/{{ v . id }}/">{{ v . head }}</a></li>
            {# <span class="fa fa-angle-right"></span>&nbsp;<a href="/show/{{ v . id }}/" >{{ v . head }}</a>&nbsp; &nbsp; #}

            {% endif %}

            {% set nn = nn+1 %}

            {% endfor %}

        </ol>

    @endif
