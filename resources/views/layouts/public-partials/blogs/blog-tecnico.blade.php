
<div>
  <div id="blog-posts-container " class="row ">
      @include('layouts.public-partials.blogs.blog-posts',['posts'=>$posts,'showPagination' => $showPagination ?? true])
  </div>
  @include('layouts.public-partials.modals.modal-blog-tecnico')
</div>



@push('scripts')
<script>

document.addEventListener("click", function(e){

  /* if(e.target.closest(".pagination a")){

    e.preventDefault();

    let url = e.target.closest("a").href;

    fetch(url)
    .then(res=>res.text())
    .then(html=>{

    document.querySelector("#blog-posts-container").innerHTML = html;

      window.scrollTo({
        top:document.querySelector("#blog-posts-container").offsetTop - 120,
        behavior:"smooth"
      });

    });

  } */

});

</script>
<script>

document.addEventListener("click", function(e){

  let link = e.target.closest(".blog-post-link");

  if(!link) return;

  e.preventDefault();

  let id = link.dataset.id;

  fetch("/blog-post/"+id)
  .then(res=>res.json())
  .then(post=>{

    document.getElementById("modalTitle").innerHTML = post.title;
    document.getElementById("modalImage").src = post.image;
    document.getElementById("modalText").innerHTML = post.content;

    document.getElementById("modalBlogTecnico").classList.add("active");

  });

});

function closeBlogTecnicoModal(){
    document.getElementById("modalBlogTecnico").classList.remove("active");
}

document.addEventListener("click", function(e){

let modal = document.getElementById("modalBlogTecnico");

if(!modal) return;

/* Si el modal está abierto y el clic fue en el fondo */
if(e.target === modal){
    closeBlogTecnicoModal();
}

});
</script>
    
@endpush