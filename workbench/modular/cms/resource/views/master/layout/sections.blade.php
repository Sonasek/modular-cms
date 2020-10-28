@if(0 !== count($sections))
    @foreach($sections as $section)
        <section>
            <div class="container">
                @if(null !== $section->getTitle())
                    <h2 class="title">
                        {{ $section->getTitle() }}
                    </h2>
                @endif
                @if(null !== $section->getSubtitle())
                    <p class="subtitle">
                        {{ $section->getSubtitle() }}
                    </p>
                @endif
                @if(0 !== count($section->getPanels()))
                    <div class="columns">
                        @foreach($section->getPanels() as $panel)
                            <div class="column">
                                <p>
                                    {!! $panel->getCode() !!}
                                </p>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </section>
    @endforeach
@endif
