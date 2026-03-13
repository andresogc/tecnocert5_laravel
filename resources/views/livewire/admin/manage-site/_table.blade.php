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
                <th scope="col" class="text-start">Extracto</th>
                {{-- <th scope="col" class="text-start">Content</th> --}}
                <th scope="col" class="text-start">Estado</th>
               {{--  <th scope="col" class="text-start">Autor</th> --}}
                <th scope="col" class="text-start">Fecha de publicación</th>
                <th scope="col" class="text-start">Fecha de creación</th>
                <th scope="col" class="text-start">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post )
            <tr class="invoice-list border border-defaultborder dark:border-defaultborder/10">
                <td  class="	whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                    <div class="flex items-center">
                        <div class="me-2 leading-none">
                            <span class="avatar avatar-sm avatar-rounded">
                                @if ($post->media && $post->media->isNotEmpty())
                                    <img src="{{ asset($post->media[0]->url) }}" alt="">
                                @else
                                    <img src="{{asset('admin/app/assets/images/others/blog_sin_imagen.png')}}" alt="">
                                @endif
                                
                            </span>
                        </div>
                        <div>
                            <p class="mb-0 font-semibold uppercase truncate max-w-[200px]" title="{{ $post->title }}">
                                {{ Str::limit($post->title, 20) }}
                            </p>
                            <p class="mb-0 text-[.6875rem] text-textmuted">
                                Autor: {{ $post->author->name }}
                            </p>
                        </div>
                    </div>
                </td>
                <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200 truncate max-w-[200px]" title="{{ $post->excerpt }}">
                    {{ Str::limit($post->excerpt, 20) }}
                </td>
               {{--  <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"> 
                    {{ Str::limit(strip_tags($post->content), 25) }}
                </td> --}}
                <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                    {{ $post->status === 'published' ?  'Publicado' : 'Borrador' }}
                </td>
               {{--  <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                    {{ $post->author->name  }}
                </td> --}}
                <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                    {{ $post->published_at  }}
                </td>
                <td>
                    {{ $post->created_at  }}
                </td>
                <td>
                    <button 
                        aria-label="button" 
                        type="button" 
                        class="ti-btn ti-btn-primary ti-btn-icon ti-btn-sm"
                        title="Editar blog"
                        wire:click="edit({{ $post->id }})"
                    >
                        <i class="las la-pen"></i>
                    </button>
                    <button 
                        aria-label="button" 
                        type="button"
                        class="ti-btn ti-btn-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn"
                        wire:click="confirmDelete({{ $post->id }})"
                        title="Eliminar blog"
                    >
                        <i class="ri-delete-bin-5-line"></i>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
