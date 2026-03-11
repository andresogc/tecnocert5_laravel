(function () {
  "use strict";

  /* default input */
/*   let myDropzone = new Dropzone(".dropzone");
  myDropzone.on("addedfile", file => {

  }); */


  /**** Filepond js****/
  FilePond.registerPlugin(
    FilePondPluginImagePreview,
    FilePondPluginImageExifOrientation,
    FilePondPluginFileValidateSize,
    FilePondPluginFileEncode,
    FilePondPluginImageEdit,
     FilePondPluginFileValidateType,
    FilePondPluginImageCrop,
    FilePondPluginImageResize,
    FilePondPluginImageTransform
  );

  const SingleElement1 = document.querySelector('.basic-filepond1');
  const SingleElement2 = document.querySelector('.basic-filepond2');
  const SingleElement3 = document.querySelector('.basic-filepond3');
  const SingleElement4 = document.querySelector('.basic-filepond4');
  const SingleElement5 = document.querySelector('.basic-filepond5');
  const SingleElement6 = document.querySelector('.basic-filepond6');
  //const MultipleElement = document.querySelector('.multiple-filepond');
  //const CircularElement = document.querySelector('.circular-filepond');


  /* default input */
  FilePond.create(SingleElement1);
  FilePond.create(SingleElement2);
  FilePond.create(SingleElement3);
  FilePond.create(SingleElement4);
  FilePond.create(SingleElement5);
  FilePond.create(SingleElement6);
  /* FilePond.create(MultipleElement); */
  /* FilePond.create(CircularElement,
    {
      labelIdle: `<span class="filepond--label-action">Choose File</span>`,
      imagePreviewHeight: 170,
      imageCropAspectRatio: '1:1',
      imageResizeTargetWidth: 200,
      imageResizeTargetHeight: 200,
      stylePanelLayout: 'compact circle',
      styleLoadIndicatorPosition: 'center bottom',
      styleProgressIndicatorPosition: 'right bottom',
      styleButtonRemoveItemPosition: 'left bottom',
      styleButtonProcessItemPosition: 'right bottom',
    }
    ); */


  /* function initFilePond() {
    document.querySelectorAll(".basic-filepond").forEach((inputElement) => {
      if (inputElement.dataset.pondInitialized) return;
      inputElement.dataset.pondInitialized = true;

      const pond = FilePond.create(inputElement, {
        allowReorder: true,
        maxFileSize: "40MB",
        maxFiles: 1,
        labelIdle:
          'Arrastra tu archivo o <span class="filepond--label-action">Selecciona uno</span>',
      });

      // Buscar el componente Livewire más cercano
      const livewireRoot = inputElement.closest("[wire\\:id]");
      if (!livewireRoot) return;
      const component = Livewire.find(livewireRoot.getAttribute("wire:id"));
      if (!component) return;

      // Cuando se agrega un archivo
      pond.on("addfile", async (error, file) => {
        if (error) return;
        console.log("📤 Subiendo archivo con Livewire 3...");
        await component.upload("media", file.file);
      });

      // Cuando se elimina el archivo
      pond.on("removefile", () => {
        console.log("🗑️ Eliminando archivo en Livewire 3...");
        component.set("media", null);
      });
    });
  }

  document.addEventListener("livewire:load", initFilePond);
  document.addEventListener("livewire:navigated", initFilePond); */


















})();