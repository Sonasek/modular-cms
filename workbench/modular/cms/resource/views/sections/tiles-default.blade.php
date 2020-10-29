@if(0 !== count($section->getPanels()))
    <div class="tile is-ancestor">
        @foreach($section->getPanels() as $panel)
            @include($panel->getView())
        @endforeach
    </div>
@endif
