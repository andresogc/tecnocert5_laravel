<form wire:submit.prevent="send" id="contactForm" class="contactForm">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="label" for="name">Nombres y Apellidos</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nombres y Apellidos"  wire:model="name"/>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="label" for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" wire:model="email"/>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="label" for="subject">Motivo</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Motivo" wire:model="subject"/>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="label" for="#">Mensaje</label>
                <textarea name="message" class="form-control" id="message" cols="30" rows="4"
                    placeholder="Mensaje" wire:model="message"></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <button 
                    type="submit" 
                    class="btn btn-primary"
                    wire:loading.attr="disabled"
                    wire:target="send"
                >

                    <span wire:loading.remove wire:target="send">
                        Enviar
                    </span>

                    <span wire:loading wire:target="send">
                        Enviando...
                    </span>

                </button>
                <div class="submitting"></div>
                <div class="toast-container-contact" wire:ignore></div>
                <br />
                <label style="
                            display: flex;
                            align-items: flex-start;
                            gap: 8px;
                            ">
                    <input type="checkbox" required style="margin-top: 6px" wire:model="acceptPolicies"/>

                    <span>
                        Al marcar la casilla, usted autoriza y da su
                        consentimiento informado para que TECNOCERT
                        S.A.S. dé tratamiento a sus datos personales de
                        conformidad con la Ley 1581 de 2012 y el Decreto
                        1377 de 2013.
                    </span>
                </label>
                @error('acceptPolicies')
                    <span style="color:red;font-size:13px;">
                        Debe aceptar la política de tratamiento de datos.
                    </span>
                @enderror
            </div>
        </div>
    </div>
</form>
