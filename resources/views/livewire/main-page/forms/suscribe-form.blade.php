<form wire:submit.prevent="send" id="formSuscription" class="subscribe-form">
    <div class="toast-container-suscription" wire:ignore></div>
    <div class="form-group d-flex">
        <input type="text" class="form-control" placeholder="Digita tu mail"
            name="email" wire:model="email"/>
        <input 
            type="submit" 
            value="Suscríbete" 
            class="submit px-3"
            id="btnSuscription" 
            wire:loading.attr="disabled"
            wire:target="send"
        />

    </div>
</form>