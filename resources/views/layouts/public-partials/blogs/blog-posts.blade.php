

@foreach ($posts as $post)

<div class="col-md-4 d-flex ">
    <div class="blog-entry align-self-stretch" style="min-width: 349px">

        <a href="#" 
            class="block-20 rounded blog-post-link"
            data-id="{{ $post->id }}"
            style="background-image:url('{{ $post->media->first()->url ?? '' }}')"
        >
        </a>

        <div class="text mt-3">
            <div class="meta mb-2">
                <div>{{ $post->published_at->isoFormat('D MMMM YYYY') }}</div>
                | 
                <div>{{ $post->author->name }}</div>
            </div>

            <h3 class="heading">
                <a href="#" class="blog-post-link" data-id="{{ $post->id }}">
                {!! $post->excerpt !!}
                </a>
            </h3>

        </div>
    </div>
</div>


@endforeach


    @if($showPagination ?? false)
    <div class="col-12 mt-4 d-flex justify-content-center w-100">
    {!! $posts->links() !!}
    </div>
    @endif
    <style>

        .pagination{
            display:flex;
            align-items:center;
            justify-content:center;
            list-style:none;
            padding:0;
            gap:6px;
        }

        .page-item{
            display:inline-block;
        }

        .page-link{
               display:flex;
            align-items:center;
            justify-content:center;
            height:38px;
            padding:8px 14px;
            border:1px solid #ddd;
            border-radius:6px;
            text-decoration:none;
            color:#333;
            background:#fff;
            cursor:pointer;
            transition:all .2s ease;
        }

        .page-link:hover{
            background:#f5f5f5;
        }

        .page-item.active .page-link{
            background:#0d6efd;
            border-color:#0d6efd;
            color:#fff;
        }

        .page-item.disabled .page-link{
             display:flex;
            align-items:center;
            justify-content:center;
            color:#aaa;
            background:#f9f9f9;
            cursor:not-allowed;
        }

        .small.text-muted{
             display:none;
        }
        /* ocultar todos los items */
        .pagination li{
            display:none;
        }

        /* mostrar solo flecha izquierda y derecha */
        .pagination li:first-child,
        .pagination li:last-child{
            display:inline-block;
        }   
        /* ocultar versión escritorio completa */
        .d-sm-flex{
            display:none !important;
        }
        /* centrar botones */
        .pagination{
            display:flex;
            justify-content:center;
            gap:10px;
        }
        
    </style>

