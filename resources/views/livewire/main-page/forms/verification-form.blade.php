 <form wire:submit.prevent="send" id="formVerificacion" class="form-verificacion">
      <div class="form-group">
        <label>Número de certificado *</label>
        <input type="text" class="form-control" placeholder="Ej: TEC-2024-00123" name="numero_certificado" required wire:model="numero_certificado"/>
      </div>

      <div class="form-group">
        <label>Nombre de empresa *</label>
        <input type="text" class="form-control" placeholder="Nombre completo de la empresa" name="nombre_empresa" wire:model="nombre_empresa"
          required />
      </div>

      <div class="form-group">
        <label>Norma certificada *</label>
        <select class="form-control" name="norma_certificada" required wire:model="norma_certificada">
          <option value="">Selecciona la norma</option>
          <option value="ISO 9001:2015 - Sistema de Gestión de Calidad">
            ISO 9001:2015 - Sistema de Gestión de Calidad
          </option>
          <option value="ISO 14001:2015 - Sistema de Gestión Ambiental">
            ISO 14001:2015 - Sistema de Gestión Ambiental
          </option>
          <option value="ISO 45001:2018 - Sistema de Gestión de Seguridad y Salud">
            ISO 45001:2018 - Sistema de Gestión de Seguridad y Salud
          </option>
          <option value="ISO 28000 - Sistema de Gestión de Seguridad de la Cadena de Suministro">
            ISO 28000 - Sistema de Gestión de Seguridad de la Cadena de
            Suministro
          </option>
          <option value="ISO 22301 - Sistema de Gestión de Continuidad del Negocio">
            ISO 22301 - Sistema de Gestión de Continuidad del Negocio
          </option>
          <option value="ISO 50001 - Sistema de Gestión de la Energía">
            ISO 50001 - Sistema de Gestión de la Energía
          </option>
        </select>
      </div>

      <div class="form-group">
        <label>Correo electrónico para respuesta *</label>
        <input type="email" class="form-control" placeholder="correo@empresa.com" name="correo" required  wire:model="correo"/>
      </div>

      <div class="form-group">
        <label>Comentarios (opcional)</label>
        <textarea class="form-control" rows="3" placeholder="Observaciones adicionales o preguntas" wire:model="comentarios">
          name="comentarios"></textarea>
      </div>

      <div class="form-group">
        <button 
            type="submit" 
            class="form-control submit px-3" 
            id="btnValidacion"
             wire:loading.attr="disabled"
                    wire:target="send"
          style="background: linear-gradient(to right, #0e4e96 0%, #1056a8 25%, #587eec 60%, #1ce4de 100%) !important; color: #fff !important;">
          
          <span wire:loading.remove wire:target="send">
                        Verificar Certificado
                    </span>

                    <span wire:loading wire:target="send">
                        Enviando...
                    </span>
        </button>
      </div>
      <div class="toast-container-verification" wire:ignore></div>

      <div class="form-footer">
        <small>* Todos los campos son obligatorios excepto comentarios</small>
      </div>
    </form>