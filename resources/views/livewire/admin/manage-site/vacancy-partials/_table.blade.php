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
                <th scope="col" class="text-start">Título</th>
                <th scope="col" class="text-start">Resumen </th>
                <th scope="col" class="text-start">Funciones</th> 
               {{--  <th scope="col" class="text-start">Formación</th>
                <th scope="col" class="text-start">Experiencia</th>  
                <th scope="col" class="text-start">Habilidades</th>  
                <th scope="col" class="text-start">Que ofrecemos</th>   --}}
                <th scope="col" class="text-start">Estado</th>  
                <th scope="col" class="text-start">Fecha Pub.</th>
                <th scope="col" class="text-start">Fecha de creación</th>
                <th scope="col" class="text-start">Accción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vacancies as $vacancy )
            <tr class="invoice-list border border-defaultborder dark:border-defaultborder/10">
                <td  class="	whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                    <div class="flex items-center">
                        <div class="me-2 leading-none">
                            <span class="avatar avatar-sm avatar-rounded">
                                <img src="{{asset('main-page/images/image_6.jpg')}}" alt="">
                            </span>
                        </div>
                        <div>
                            <p class="mb-0 font-semibold uppercase truncate max-w-[200px]" title="{{ $vacancy->title }}">
                                {{ Str::limit($vacancy->title, 20) }}
                            </p>
                            <p class="mb-0 text-[.6875rem] text-textmuted">
                                Autor: {{ $vacancy->user->name }}
                            </p>
                        </div>
                    </div>
                </td>
                <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200 truncate max-w-[200px]" title="{{ $vacancy->summary }}">
                    {{ Str::limit($vacancy->summary, 20) }}
                </td>
                @php $functions = implode(', ', $vacancy->main_responsibilities ?? []); @endphp
                <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"  title="{{ $functions }}"> 
                     {{ Str::limit($functions, 40) }}
                </td>
               {{--  <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"> 
                    {{ $vacancy->academic_requirements }}
                </td>
                <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"> 
                    {{ $vacancy->experience_requirements }}
                </td>
                <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"> 
                    {{ $vacancy->skills }}
                </td>
                <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"> 
                    {{ $vacancy->benefits }}
                </td> --}}
                <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                    {{ $vacancy->status }}
                </td>
                <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                    {{ $vacancy->published_at  }}
                </td>
                <td>
                    {{ $vacancy->created_at  }}
                </td>
                <td>
                    <button 
                        aria-label="button" 
                        type="button" 
                        class="ti-btn ti-btn-primary ti-btn-icon ti-btn-sm"
                        title="Editar vacante"
                        wire:click="edit({{ $vacancy->id }})"
                    >
                        <i class="las la-pen"></i>
                    </button>
                    <button 
                        aria-label="button" 
                        type="button"
                        class="ti-btn ti-btn-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn"
                        wire:click="confirmDelete({{ $vacancy->id }})"
                        title="Eliminar vacante"
                    >
                        <i class="ri-delete-bin-5-line"></i>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
