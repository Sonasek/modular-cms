<form wire:submit.prevent="submit" action="#" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title is-centered">
                {{ __('modular-admin::loginpage.form.title') }}
            </p>
        </header>
        <div class="card-content">
            <div class="content">
                <div class="field">
                    <label class="label">{{ __('modular-admin::loginpage.form.name') }}</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input @error('login') is-danger @enderror" type="text" placeholder="{{ __('modular-admin::loginpage.form.name_placeholder') }}" wire:model="login" />
                        @error('login') <p class="help is-danger">{{ __($message) }}</p> @enderror
                        <span class="icon is-small is-left">
                          <i class="fas fa-user"></i>
                        </span>
                    </div>
                </div>
                <div class="field">
                    <label class="label">{{ __('modular-admin::loginpage.form.password') }}</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input @error('password') is-danger @enderror" type="password" placeholder="{{ __('modular-admin::loginpage.form.password_placeholder') }}" wire:model="password">
                        @error('password') <p class="help is-danger">{{ __($message) }}</p> @enderror
                        <span class="icon is-small is-left">
                          <i class="fas fa-key"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="level column">
                <div class="level-item">
                    <button class="button" type="submit">Přihlásit</button>
                </div>
            </div>
        </footer>
    </div>
</form>
