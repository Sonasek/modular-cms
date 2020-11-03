@if(true == $page->showHero())
    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    {{ $page->getTitle() }}
                </h1>
                <h2 class="subtitle">
                    {{ $page->getSubtitle() }}
                </h2>
            </div>
        </div>
    </section>
@endif
