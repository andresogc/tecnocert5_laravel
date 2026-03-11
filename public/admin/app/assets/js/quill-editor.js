let quillContentBuffer = null;

(function () {
    'use strict';
    /* quill snow editor */
    var toolbarOptions = [
        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
        [{ 'font': [] }],
        ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
        ['blockquote', 'code-block'],

        [{ 'header': 1 }, { 'header': 2 }],               // custom button values
        [{ 'list': 'ordered' }, { 'list': 'bullet' }],
        [{ 'script': 'sub' }, { 'script': 'super' }],      // superscript/subscript
        [{ 'indent': '-1' }, { 'indent': '+1' }],          // outdent/indent
        [{ 'direction': 'rtl' }],                         // text direction

        [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown

        [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
        [{ 'align': [] }],

        ['image', 'video'],
        ['clean']                                         // remove formatting button
    ];

    const editorContainer = document.getElementById('editor');
    if (!editorContainer) {
        
        return;
    }

    var quill = new Quill('#editor', {
        modules: {
            toolbar: toolbarOptions
        },
        theme: 'snow'
    });


    // Inicializar con el valor del servidor
    const inputHidden = document.getElementById('editorContent');
    /* quill.root.innerHTML = inputHidden.value || ''; */
    if (inputHidden) {
        quill.root.innerHTML = inputHidden.value || '';
    

    // Actualizar Livewire al escribir
    quill.on('text-change', function () {
        const html = quill.root.innerHTML;
        inputHidden.value = html; // ✅ sincroniza hidden input
        inputHidden.dispatchEvent(new Event('input')); // ✅ fuerza Livewire a actualizar
    });

    // Escucha cuando se cargue contenido desde Livewire (por mount)
    window.addEventListener('loadEditorContent', (event) => {
        const content = event.detail || '';
        quill.root.innerHTML = content;
        inputHidden.value = content;
        inputHidden.dispatchEvent(new Event('input'));
    });
    
    }
})();