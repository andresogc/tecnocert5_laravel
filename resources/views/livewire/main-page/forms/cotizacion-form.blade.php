<form wire:submit.prevent="send" id="formCotizacion" class="form-consultation" >
        <!-- ELIMINADOS: Los campos ocultos de Formspree -->

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Nombres y apellidos" name="name"
                required wire:model="name"/>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" name="email" required wire:model="email"/>
        </div>
        <div class="form-group">
            <input type="tel" class="form-control" placeholder="Télefono" name="phone"
                required wire:model="phone"/>
        </div>
        <div class="form-group">
            <textarea name="messageText" cols="30" rows="3" class="form-control"
                placeholder="Orientanos sobre tu solicitud" required wire:model="messageText"></textarea>
        </div>
        <div class="form-group">
            <button 
                type="submit" 
                class="form-control submit px-3"
                wire:loading.attr="disabled"
                wire:target="send"
            >
                <span wire:loading.remove wire:target="send">
                        Enviar solicitud
                    </span>

                    <span wire:loading wire:target="send">
                        Enviando...
                    </span>
            </button>
        </div>
        
</form>
