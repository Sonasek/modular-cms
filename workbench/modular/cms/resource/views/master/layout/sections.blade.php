@if(0 !== count($sections))
    @foreach($sections as $section)
        <section class="section {{ (isset($class))?$class:'' }}">
            <div class="container">
                @if(null !== $section->getTitle())
                    <a href="#{{ $section->getName() }}">
                        <h2 class="title modular-section-title" id="{{ $section->getName() }}">
                            {{ $section->getTitle() }}
                        </h2>
                    </a>
                @endif

                @if(null !== $section->getSubtitle())
                    <p class="subtitle">
                        {{ $section->getSubtitle() }}
                    </p>
                @endif

                @include($section->getView())
            </div>
        </section>
    @endforeach
@endif
