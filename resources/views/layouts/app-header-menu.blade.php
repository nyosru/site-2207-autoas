{{-- <pre>{{ print_r($menu_top) }}</pre> --}}

<nav class="navbar-default">
    <div class="menu-heading js-nav-menu">Каталог</div>
    <div class="vertical-wrapper v3">
        <ul class="level0">

            @foreach ($menu_top as $v)
                <li {{-- style="text-align:left; padding: 15px 25px;" --}} >

                    <a href="/cat/{{ $v['id'] }}">
                        @if( !isset($v['in']) || ( isset($v['in']) && $v['in'] > 0 ) )
                        <span class="fa fa-chevron-right" style="padding-top:4px;float:right;"></span>
                        @endif
                        {{ $v['head'] }}
                    </a>

                    {{-- <pre>{{ print_r($v) }}</pre> --}}
                    
                    @if( !isset($v['in']) || ( isset($v['in']) && $v['in'] > 0 ) )
                    <div class="dropdown-content">
                        <ul class="level1">
                            @include('layouts.app-header-menu-level')
                        </ul>
                    </div>
                    @endif

                </li>
            @endforeach


        </ul>
    </div>
</nav>
