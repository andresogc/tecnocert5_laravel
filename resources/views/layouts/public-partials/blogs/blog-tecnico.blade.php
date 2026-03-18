
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

        // Referencias a elementos del modal
      const modalTitle = document.getElementById("modalTitle");
      const modalImage = document.getElementById("modalImage");
      const modalText  = document.getElementById("modalText");
      const modal      = document.getElementById("modalBlogTecnico");

      // Setear contenido base
      modalTitle.innerHTML = `<h2>${post.title}</h2>`;
      modalImage.src = post.image;

      // Limpiar y cargar contenido principal
      modalText.innerHTML = post.content;

      

      // Render de iconos (si existen)
      if (post.icons && post.icons.length > 0) {

          let iconsHTML = post.icons.map(i => `
              <div class="modal-icon-item">
                  <div class="modal-icon-circle">
                      <i class="${i.icon}"></i>
                  </div>
                  <p class="modal-icon-label">${i.text}</p>
              </div>
          `).join('');

          const htmlIcons = `
              <div class="modal-icons-box">
                  ${iconsHTML}
              </div>
          `;

          // Insertar correctamente (sin error de appendChild)
          modalText.insertAdjacentHTML('beforeend', htmlIcons);
      }

      // Mostrar modal
      modal.classList.add("active");

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