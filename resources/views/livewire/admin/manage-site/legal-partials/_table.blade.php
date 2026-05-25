@php
use Illuminate\Support\Str;
@endphp

<div class="table-responsive" style="
  scrollbar-width: thin; 
  scrollbar-color: #94a3b8 #424549;
">
    <table class="table whitespace-nowrap table-bordered min-w-full ">
        <thead>
            <tr class="!border-defaultborder dark:!border-defaultborder/10">
                <th scope="col" class="text-start">Nombre a mostrar</th>
                <th scope="col" class="text-start">Nombre del archivo</th>
                <th scope="col" class="text-start">Actualizado por</th>
                <th scope="col" class="text-start">Fecha de actualización</th>
                <th scope="col" class="text-start">Accción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($legals as $legal )
            <tr class="invoice-list border border-defaultborder dark:border-defaultborder/10">
                <td  class="	whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                    <div class="flex items-center">
                       
                        <div>
                            <p class="mb-0 font-semibold uppercase truncate max-w-[200px]" title="{{ $legal->name }}">
                                {{ Str::limit($legal->name, 80) }}
                            </p>
                            
                        </div>
                    </div>
                </td>
                <td class="whitespace-nowrap text-sm text-gray-800 dark:text-gray-200 truncate max-w-[200px]" title="{{ $legal->file_name }}">
                    {{ $legal->file_name }}
                </td>
            <td class="whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                    {{ $legal->user->name  }}
                </td>
                <td>
                    {{ $legal->updated_at  }}
                </td>
                <td>
                    <button 
                        aria-label="button" 
                        type="button" 
                        class="ti-btn ti-btn-primary ti-btn-icon ti-btn-sm"
                        title="Actualizar documento"
                        wire:click="edit({{ $legal->id }})"
                    >
                        <i class="las la-pen"></i>
                    </button>
                    <a 
                        aria-label="button" 
                        type="button"
                        class="ti-btn ti-btn-secondary ti-btn-icon ms-1 ti-btn-sm invoice-btn"
                        title="Descargar documento"
                        download
                        href="{{ asset($legal->file_path) }}" 
                    >
                        <i class="ri-download-line"></i>
                    </a>
                    @php
                        $ext = strtolower(pathinfo($legal->file_path, PATHINFO_EXTENSION));
                    @endphp
                    @if($ext === 'pdf')
                    <a 
                        aria-label="button" 
                        type="button"
                        class="ti-btn ti-btn-success ti-btn-icon ms-1 ti-btn-sm invoice-btn"
                        title="ver documento"
                        href="{{ asset($legal->file_path) }}" 
                         target="_blank"
                    >
                        <i class="ri-eye-line"></i>
                    </a>
                    @endif

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
