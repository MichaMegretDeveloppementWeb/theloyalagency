@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/contact/form-component.css") . "?v=".now()->toDateTimeString()}}">
@endpush



<section class="form_component">

    <div class="title_container">
        <h2 class="title">
            Utilisez le formulaire
        </h2>
        <span class="sub_line"></span>
    </div>


    <form wire:submit.prevent="submit" class="contact_form">

        @if (session()->has('success'))
            <div class="alert alert_success">
                <x-icons.check/>
                {{ session('success') }}
            </div>
        @endif

        <div class="data_container">

            <div class="contact_info_container">

                <div class="form_group">
                    <label for="name">Votre nom *</label>
                    <input type="text" id="name" wire:model="name" class="form_control">
                    @error('name') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form_group">
                    <label for="email">Votre Email *</label>
                    <input type="email" id="email" wire:model="email" class="form_control">
                    @error('email') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form_group">
                    <label for="phone">Votre Téléphone *</label>
                    <input type="tel" id="phone" wire:model="phone" class="form_control">
                    @error('phone') <span class="error">{{ $message }}</span> @enderror
                </div>

            </div>

            <div class="form_group message_container">
                <label for="message">Votre message *</label>
                <textarea id="message" wire:model="message" class="form_control"></textarea>
                @error('message') <span class="error">{{ $message }}</span> @enderror
            </div>

        </div>

        <button type="submit" class="btn_submit">
            <span class="text" wire:loading.remove>Envoyer</span>
            <span class="loader" wire:loading></span>
        </button>

    </form>


</section>
