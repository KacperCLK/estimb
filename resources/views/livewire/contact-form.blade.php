<form wire:submit.prevent="submit" class="form">
    @csrf
    <h1 class="title title--medium">
        Skontaktuj się z nami!
    </h1>
    
    <div class="form__group">
        <input type="text" id="name" name="name" placeholder="Imię" wire:model.lazy="name">
        @error('name') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="form__group">
        <input type="text" id="email" name="email" placeholder="Adres email" wire:model.lazy="email">
        @error('email') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="form__group form__group--textarea">
        <textarea id="message" name="message" placeholder="Twoja wiadomość..." wire:model.lazy="message"></textarea>
        @error('message') <span class="error">{{ $message }}</span> @enderror
    </div>

    <button type="submit" class="link link--button-2">Wyśli wiadomość!</button>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</form>