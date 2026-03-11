{{-- para permitor multiples archivos poner en la vista asi por ejemplo
<x-input-file-filepond wire:model='media' multiple /> --}}
{{-- en pal prpieidad mas abjo en este archivo data-max-files pode mos especificar la cantidad maxima de archivos
permitidos --}}

@props(['model','class'])

<div class="col-span-12 lg:col-span-4">
    <div class="box">
        <div class="box-header">
            <h5 class="box-title">Carga de archivo</h5>
        </div>
        <div class="box-body" wire:ignore x-data x-init="
                       
                        FilePond.setOptions({
                                allowMultiple: {{isset($attributes['multiple']) && $attributes['multiple'] ? 'true' : 'false'}},
                                server: {
                                    process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                                        @this.upload('{{ $model }}', file, load, error, progress);
                                    },
                                    revert: (filename, load) => {
                                        @this.removeUpload('{{ $model }}', load);
                                    }
                                }
                            });
                        
                        
                        ">

            <input type="file" class="filepond {{ $class }}" data-allow-reorder="true" data-max-file-size="40MB"
                data-max-files="3" data-wire-target="#real-media">
        </div>
        <!-- input oculto que conserva el wire:model -->
        <input type="file" id="real-media" wire:model="{{ $model }}" hidden>
        @error($model)
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>