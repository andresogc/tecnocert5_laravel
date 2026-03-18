<div>
<div class="modal-header">
      <h2><span><i class="fa fa-laptop"></i></span> {{ $vacanteTitle ?? 'Vacante' }}</h2>
      <button class="modal-close" onclick="closeVacanteModal()">
        &times;
      </button>
    </div>
<form wire:submit.prevent="send" id="formVacante" class="form-vacante">
    <div class="form-group">
        <label>Nombre *</label>
        <input type="text" class="form-control" placeholder="Nombre..." name="name" required wire:model="name"/>
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <label>Apellido *</label>
        <input type="text" class="form-control" placeholder="Apellido..." name="last_name" required wire:model="last_name"/>
        @error('last_name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <label>Teléfono *</label>
        <input type="phone" class="form-control" placeholder="Teléfono..." name="phone" required wire:model="phone"/>
        @error('phone')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <label>Correo electrónico *</label>
        <input type="email" class="form-control" placeholder="correo@empresa.com" name="email" required wire:model="email"/>
        @error('email')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <label>Comentarios (opcional)</label>
        <textarea class="form-control" rows="3" placeholder="Observaciones" name="observation" wire:model="observation"></textarea>
        @error('observation')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <label>Adjuntar hoja de vida (PDF, máx. 2MB) *</label>

        <div class="file-upload">
            <input 
                type="file" 
                id="cvFile" 
                name="cv_file" 
                accept=".pdf,.doc,.docx"
                wire:model="cv_file"
                required
            >
            <label for="cvFile">
                <i class="fa fa-upload"></i> Seleccionar archivo PDF
            </label>
            <span id="fileName">Ningún archivo seleccionado</span>
        </div>
        @error('cv_file')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <div class="toast-container-vacante" wire:ignore></div>
        <button 
            type="submit" 
            class="form-control submit px-3" 
            id="btnVacante"
            wire:loading.attr="disabled"
            wire:target="send"
            style="background: linear-gradient(to right, #0e4e96 0%, #1056a8 25%, #587eec 60%, #1ce4de 100%) !important; color: #fff !important;">
            <span wire:loading.remove wire:target="send">
                        Postularse
                    </span>

                    <span wire:loading wire:target="send">
                        Enviando...
                    </span>
        </button>
    </div>


    <div class="form-footer">
        <small>* Todos los campos son obligatorios excepto comentarios</small>
    </div>
</form>
</div>