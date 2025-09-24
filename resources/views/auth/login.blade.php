<main id="auth" class="login">
    <form wire:submit.prevent='login'>
        <fieldset>
            <legend>
                <h2>Please log in</h2>
            </legend>

            <x-form.input name='email'>
                <input type="email" name="email" id="email" wire:model="email" autocomplete="off" autofocus>
            </x-form.input>

            <x-form.input name='password'>
                <input type="password" name="password" id="password" wire:model="password">
            </x-form.input>

            <div class="row">
                <label for="remember">Remember Me</label>
                <input type="checkbox" name="remember" id="remember" wire:model='remember'>
            </div>

            <div class="buttons">
                <button class="btn primary">Login</button>
            </div>
        </fieldset>
    </form>
</main>
