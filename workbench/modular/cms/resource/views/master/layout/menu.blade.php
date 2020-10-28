<nav class="navbar navbar is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
            <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="modular-top-menu">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div class="navbar-menu" id="modular-top-menu">
        <div class="navbar-start">
            @foreach($menu as $item)
                <div class="navbar-item{!! ($item->hasChild())? ' has-dropdown is-hoverable' : ''  !!}">
                    <a href="{{ $item->getLink() }}" class="navbar-link{!! ($item->hasChild())? '' : ' is-arrowless'  !!}">
                        {{ $item->getLabel() }}
                    </a>
                    @if($item->hasChild())
                        <div class="navbar-dropdown">
                            @foreach($item->getChildItems() as $childItem)
                                <a  href="{{ $childItem->getLink() }}" class="navbar-item">
                                    {{ $childItem->getLabel() }}
                                </a>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</nav>
