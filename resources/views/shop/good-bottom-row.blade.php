<br clear="all" />
<br />


<div class="row" id="opis">
    <div class="col-xs-12">

        <ul class="nav nav-tabs">

            <li role="presentation" class="active">
                <a onclick="return false;" href="#">Описание</a>
            </li>

            <li role="presentation">
                <a href="#an">Аналоги других производителей</a>
            </li>

        </ul>

    </div>
</div>

<div class="row">
    <div class="col-xs-12" style="padding:20px;">
        <p>{{ $item['comment'] ?? '' }}</p>
    </div>
</div>


<br clear="all" />
<br />

<div class="row" id="an">
    <div class="col-xs-12">

        <ul class="nav nav-tabs">

            <li role="presentation">
                <a onclick="return false;" href="#opis">Описание</a>
            </li>

            <li role="presentation" class="active">
                <a href="#an">Аналоги других производителей</a>
            </li>

        </ul>

    </div>
</div>

<div class="row" id="opis">
    <div class="col-xs-12" style="padding:20px;">
        {{-- <p>{{ $item['comment'] ?? '' }}</p> --}}
        {{-- {{ $analogi }} --}}
        @foreach ($analogi as $item)
            {{-- <pre>{{ print_r($aa) }}</pre> --}}
            @include('shop.cat-item-v2')
        @endforeach
    </div>
</div>

{{-- <pre> {{ print_r($item) }} </pre> --}}

{{-- {% set show_menu2 = false %}

		{% if item1.comment is defined and item1.comment|length > 2 %}
			{% set show_menu2 = true %}
		{% endif %}

		{%  set items_analog = shop__get_analogi_items( db, item1.a_catnumber ) %}
		{#{{ pa(items_analog) }}#}

		{% if items_analog|length > 0 %}
			{% set show_menu2 = true %}
		{% endif %}

		{% if show_menu2 == true %}
			{% if item1.comment is defined and item1.comment|length > 2 %}
				<div class="row">
					<div class="col-xs-12">

						<ul class="nav nav-tabs">
							{% if item1.comment is defined and item1.comment|length > 2 %}
								<li role="presentation" class="active">
									<a onclick="return false;" href="#">Описание</a>
								</li>
							{% endif %}

							{#<li role="presentation"><a href="#">Тех. параметры</a></li>#}

							{% if items_analog|length > 0 %}
								<li role="presentation">
									<a href="#an">Аналоги других производителей</a>
								</li>
							{% endif %}
						</ul>

					</div>
				</div>

				{% if item1.comment is defined and item1.comment|length > 2%}
					<div class="row" id="opis">
						<div class="col-xs-12" style="padding:20px;">
							<p>{{ item1.comment|raw }}</p>
						</div>
					</div>
				{% endif %}

			{% endif %}

			{% if items_analog|length > 0 %}
				<div class="row" id="an">
					<div class="col-xs-12">

						<br/>
						<br/>
						<br/>
						<br/>

						<ul class="nav nav-tabs">

							{% if item1.comment is defined and item1.comment|length > 2 %}
								<li role="presentation">
									<a href="#opis">Описание</a>
								</li>
							{% endif %}

							<li role="presentation" class="active">
								<a href="#" class="active" onclick="return false;">
									Аналоги других производителей
								</a>
							</li>
						</ul>


						{% if items_analog|length > 0 %}

							{#<div class="col-12 text-center" style="padding: 3vh 0;" >
							                                <h3>Аналоги других производителей</h3>
							                            </div>#}

							{# список итемов #}
								<div class="product-list grid_full grid_sidebar grid-uniform container-fluid" style="margin-top: 30px;"> {% for item in items_analog %}
									{% include constant('dir_mods_mod_vers_tpl')~'body.item.htm' %}
								{% endfor %}
							</div>

						{% endif %}

					</div>
				</div>
			{% endif %}

		{% endif %} --}}
