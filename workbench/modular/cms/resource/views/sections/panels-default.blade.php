@if(0 !== count($section->getPanels()))
    <div class="columns">
        @foreach($section->getPanels() as $panel)
            <div class="column">
                @include($panel->getView(), $panel->getCode())
            </div>
        @endforeach
    </div>
@endif
