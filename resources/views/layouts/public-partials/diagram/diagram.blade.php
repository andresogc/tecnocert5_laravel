<!-- diogrma 2 -->
<style>
  /* ================= ROOT ================= */
:root {
  --gap: 20px;
  --hex-w: 220px;
  --accent: #7b6cf7;
  --bg: #0b1220;
  --card-bg: #ffffff;
  --duration: 520ms;
}

/* ================= BASE ================= */
* {
  box-sizing: border-box;
}

.wrap {
  position: relative; /* necesario para que svg absolute cubra hex-grid */
}

.diagram-section {
  position: relative;
  background: var(--bg);
  padding: 80px 0;
  overflow: hidden;
}

h1 {
  margin: 0 0 14px 0;
  font-size: 22px;
  color: white;
  text-align: center;
}

p.lead {
  margin: 0 0 22px 0;
  color: #9ca3af;
  text-align: center;
}

/* ================= SVG LÍNEAS CORPORATIVAS ================= */
.diagram-lines {
   position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none; /* no bloquea los clicks */
  z-index: 5; /* mayor que el fondo, menor que las tarjetas */
}

.diagram-lines path {
  fill: none;
  stroke: rgba(0, 180, 255, 0.25);
  stroke-width: 2;
  stroke-dasharray: 8 12;
  animation: lineMove 6s linear infinite;
}

@keyframes lineMove {
  from { stroke-dashoffset: 0; }
  to { stroke-dashoffset: -200; }
}

/* ================= HEX GRID ================= */
.hex-grid {
  --w: var(--hex-w);
  display: grid;
  grid-template-columns: repeat(5, calc(var(--w) * 0.866));
  gap: var(--gap);
  justify-content: center;
  align-items: center;
  position: relative;
  padding-top: calc(var(--w) * 0.075); /* menos padding para primera fila */
  padding-bottom: 24px;
  z-index: 5; /* arriba del SVG */
}

/* ================= HEX CELLS ================= */
.hex {
  width: calc(var(--w) * 0.866);
  height: calc(var(--w) * 0.5 + var(--w) * 0.22);
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
}

/* ================= CARD HEX ================= */
.hex > .card {
  width: var(--w);
  height: calc(var(--w) * 0.57735);
  position: relative;
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 14px 18px;
  border-radius: 10px;
  background: linear-gradient(180deg, var(--card-bg) 0%, #fbfdff 100%);
  box-shadow:  
      0 12px 40px rgba(0,0,0,.15),
      0 2px 10px rgba(0,0,0,.08),
      inset 0 1px 0 rgba(255,255,255,.6);
  cursor: pointer;
  outline: none;
  transform-origin: center;
  opacity: 0;
  transform: translateY(30px) scale(.95);
  transition: all .6s cubic-bezier(.2,.9,.2,1);
}

/* HEX TRIÁNGULOS */
.hex > .card::before,
.hex > .card::after {
  content:"";
  position:absolute;
  left:50%;
  transform:translateX(-50%);
  width:0;
  height:0;
  border-left: calc(var(--w) * 0.25) solid transparent;
  border-right: calc(var(--w) * 0.25) solid transparent;
  filter: drop-shadow(0 2px 4px rgba(0,0,0,.08));
}

.hex > .card::before {
  bottom:100%;
  border-bottom: calc(var(--w) * 0.15) solid var(--card-bg);
}

.hex > .card::after {
  top:100%;
  border-top: calc(var(--w) * 0.15) solid var(--card-bg);
}

/* ================= CONTENT ================= */
.num {
  width: 60px;
  height: 60px;
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 800;
  color: white;
  font-size: 16px;
  flex: 0 0 56px;
  padding: 2px;
}

.title {
  font-weight: 800;
  font-size: 12px;
  color: #0f1724;
  margin-bottom: 6px;
}
.content {
  flex: 1;
  min-width: 0;
}

.desc {
  font-size: clamp(12px, 1.2vw, 14px);
  line-height: 1.4;
  -webkit-line-clamp: unset; /* 🔥 quitar corte */
  display: block;
  overflow: visible;
}

/* ================= COLORS ================= */
.card[data-i="1"] .num { background:#0E4E96 }
.card[data-i="2"] .num { background:#587EEC }
.card[data-i="3"] .num { background:#1CE4DE; color:#222 }
.card[data-i="4"] .num { background:#0E4E96 }
.card[data-i="5"] .num { background:#587EEC }
.card[data-i="6"] .num { background:#1CE4DE }
.card[data-i="7"] .num { background:#0E4E96 }
.card[data-i="8"] .num { background:#587EEC }
.card[data-i="9"] .num { background:#1CE4DE }

/* ================= HOVER ================= */
.card:hover,
.card:focus {
  transform: translateY(-10px) scale(1.06);
  box-shadow:
    0 40px 100px rgba(0,0,0,.25),
    0 0 40px rgba(123,108,247,.35);
  z-index: 10;
}

/* ================= ANIMACIÓN ENTRADA ================= */
.card.visible {
  opacity: 1;
  transform: translateY(0) scale(1);
  animation: floatCorp 8s ease-in-out infinite;
}

@keyframes floatCorp {
  0%,100% { transform: translateY(0) scale(1); }
  50% { transform: translateY(-6px) scale(1.01); }
}

/* ================= HONEYCOMB OFFSET UNIFICADO ================= */
.row-offset {
  transform: translateY(calc(var(--w) * 0.10)); /* fila 2 */
}

.row-offset-2 {
  transform: translateY(calc(var(--w) * 0.19)); /* fila 3 */
}
/* ================= RESPONSIVE ================= */
@media (max-width:880px){
  :root { --hex-w:140px; }
  .hex-grid {
    grid-template-columns: repeat(3, calc(var(--w) * 0.86));
  }
}

@media (max-width:520px){
  :root { --hex-w:120px; }
  .hex-grid {
    grid-template-columns: repeat(2, calc(var(--w) * 0.866));
    gap: calc(var(--hex-w) * 0.3) !important;
  }
  .hex > .card { padding:10px 12px; }
  .num { width:48px; height:48px; font-size:14px; }
}

/* ================= ACCESSIBILITY ================= */
.sr-only {
  position:absolute;
  width:1px;
  height:1px;
  overflow:hidden;
  clip:rect(0,0,0,0);
}

/* ================= FAANG LINE GLOW ================= */
.diagram-lines path {
  stroke: rgba(0,180,255,.35);
  stroke-width: 2;
  stroke-dasharray: 10 14;
  animation: dashFlow 5s linear infinite;
  filter: drop-shadow(0 0 8px rgba(0,180,255,.3));
}

@keyframes dashFlow { to { stroke-dashoffset: -200; } }

/* ================= FAANG HEX APPEAR ================= */
.card.visible {
  animation: appearFAANG .7s cubic-bezier(.2,.9,.2,1) forwards,
            floatCorp 10s ease-in-out infinite;
}

@keyframes appearFAANG {
  0% { opacity: 0; transform: translateY(40px) scale(.85); filter: blur(6px); }
  100% { opacity: 1; transform: translateY(0) scale(1); filter: blur(0); }
}

/* ================= FAANG GLOW ACTIVE STEP ================= */
.card.current-step {
  box-shadow:
    0 40px 120px rgba(0,0,0,.35),
    0 0 40px rgba(0,180,255,.35);
  transform: scale(1.08);
}

/* ================= FAANG 3D HOVER ================= */
.hex-grid { perspective: 1200px; }

.card:hover { transform: rotateX(8deg) rotateY(-8deg) scale(1.06); }

/* ================= BACKGROUND GRID ================= */
.diagram-section::before {
  content:"";
  position:absolute;
  inset:0;
  background:
    linear-gradient(rgba(255,255,255,.02) 1px, transparent 1px),
    linear-gradient(90deg, rgba(255,255,255,.02) 1px, transparent 1px);
  background-size: 40px 40px;
  z-index:0;
}
.num-text{
  font-size: 26px;
  margin-right: 4px;
  color: #fff;
}
.icon-card{
  color: #fff;
}

/* Animación de línea punteada */
.moving-dash {
  stroke-dasharray: 8 6; /* guiones y espacios */
  stroke-dashoffset: 0;
  animation: dashMove 1.5s linear infinite;
}

@keyframes dashMove {
  to { stroke-dashoffset: -14; } /* mueve los guiones hacia la derecha */
}
.line-arrow-group {
  opacity: 0;
  transform: translateY(10px);
  transition: opacity 0.6s ease, transform 0.6s ease;
}

.line-arrow-group.visible {
  opacity: 1;
  transform: translateY(0);
}

@media (max-width: 880px) {

  /* Layout vertical */
  .hex-grid {
    margin-left: 0 !important; /* Anula el margen inline de 80px solo en mobile */
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: calc(var(--hex-w) * 0.3) !important; /* Espacio exacto para unir las puntas de los rombos */
  }

  /* quitar offsets hex */
  .row-offset,
  .row-offset-2 {
    transform: none !important;
  }

  .hex {
    width: 100%;
    height: auto !important; /* Permite que el gap se aplique sobre el borde real de la tarjeta */
    grid-column: auto !important;
    display: flex;
    justify-content: center;
  }

  /* 🔥 TARJETAS MUY ANCHAS */
  .hex > .card {
    width: 55vw;        /* casi toda la pantalla */
    max-width: 290px;   /* límite bonito */
    height: auto;
    padding: 18px 22px;
  }

  /* tamaño base hex NO importa en móvil */
  :root {
    --hex-w: 200px;
  }
  /* Ocultar SVG de líneas y flechas */
  .diagram-lines {
    display: none !important;
  }
}

@media (min-width: 1400px) {
  :root {
    --hex-w: 320px;
  }
}

</style>
<section class="ftco-section" style="padding: 1em 0 !important;">
    
    <main class="wrap" aria-labelledby="hexTitle heading-section" style="width: 100%; padding-bottom: 150px;background: white;text-align: center !important;">
       <!--  <div class="text-center ftco-animate heading-section">
        <h2 id="" style="margin-bottom: 70px; color:rgba(0, 0, 0, 0.8)">CICLO DE CERTIFICACIÓN TECNOCERT</h2>

      </div> -->

        <!--  <div class="row mb-4">
            <div class="col-md-12">
              <div class="bg-secondary w-100 rounded p-2" style="border-radius: 0 !important;">
                

                <div class="row mb-">
                  <div class="col-md-12 d-flex align-items-center justify-content-center text-center">
                    <a href="https://wa.me/573103366204" target="_blank" rel="noopener noreferrer"
                      class="cta-whatsapp d-flex align-items-center text-decoration-none">

                      <span class="cta-text-main">
                        CICLO DE CERTIFICACIÓN TECNOCERT
                      </span>

                    
                    </a>

                  </div>
                </div>

              </div>
            </div>
          </div> -->












    
        <div class="hex-grid" id="hexGrid" role="list" aria-label="Malla hexagonal con nueve pasos" style="margin-left: 80px;">
            <!-- Row 1: 3 hexes centered -->
            <div class="hex" style="grid-column:2">
                <div class="card" role="button" tabindex="0" data-i="1">
                    <div class="num">
                      <span class="num-text">01</span>
                      <i class=" fa fa-file icon-card"></i>
                    </div>
                    <div class="content">
                        <!-- <div class="title">Paso 1</div> -->
                        <div class="desc title">
                          Solicitud de certificación.
                        </div>
                    </div>
                </div>
            </div>
            <div class="hex" style="grid-column:3">
                <div class="card" role="button" tabindex="0" data-i="2">
                    <div class="num">
                         <span class="num-text">02</span>
                      <i class=" fa fa-search icon-card"></i>
                    </div>
                    <div class="content">
                       <!--  <div class="title">Paso 2</div> -->
                        <div class="desc title">Revisión de la solicitud.</div>
                    </div>
                </div>
            </div>
            <div class="hex" style="grid-column:4">
                <div class="card" role="button" tabindex="0" data-i="3">
                    <div class="num">
                         <span class="num-text">03</span>
                      <i class=" fa fa-edit icon-card"></i>
                    </div>
                    <div class="content">
                        <!-- <div class="title">Paso 3</div> -->
                        <div class="desc title">Elaboración y/o aprobación de la oferta.</div>
                    </div>
                </div>
            </div> <!-- Row 2: offset row -->
            <div class="hex row-offset" style="grid-column:1">
                <div class="card" role="button" tabindex="0" data-i="4">
                   <div class="num">
                         <span class="num-text">06</span>
                      <i class=" fa fa-users icon-card"></i>
                    </div>
                    <div class="content">
                        <!-- <div class="title">Paso 4</div> -->
                        <div class="desc title">Comité de certificación.</div>
                    </div>
                </div>
            </div>
            <div class="hex row-offset" style="grid-column:2">
                <div class="card" role="button" tabindex="0" data-i="5">
                    <div class="num">
                        <span class="num-text">05</span>
                      <i class=" fa fa-tasks icon-card"></i>
                    </div>
                    <div class="content">
                        <!-- <div class="title">Paso 5</div> -->
                        <div class="desc title">Ejecución de auditoría y emisión de informe.</div>
                    </div>
                </div>
            </div>
            <div class="hex row-offset" style="grid-column:3">
                <div class="card" role="button" tabindex="0" data-i="6">
                    <div class="num">
                         <span class="num-text">04</span>
                      <i class=" fa fa-gavel icon-card"></i>
                    </div>
                    <div class="content">
                        <!-- <div class="title">Paso 6</div> -->
                        <div class="desc title">Selección del equipo auditor.</div>
                    </div>
                </div>
            </div> <!-- Row 3: 3 hexes centered -->
            <div class="hex row-offset-2" style="grid-column:2">
                <div class="card" role="button" tabindex="0" data-i="7">
                    <div class="num">
                         <span class="num-text">07</span>
                      <i class=" fa fa-certificate icon-card"></i>
                    </div>
                    <div class="content">
                       <!--  <div class="title">Paso 7</div> -->
                        <div class="desc title">Emisión del certificado o toma de decisión.</div>
                    </div>
                </div>
            </div>
            <div class="hex row-offset-2" style="grid-column:3">
                <div class="card" role="button" tabindex="0" data-i="8">
                    <div class="num">
                         <span class="num-text">08</span>
                      <i class=" fa fa-calendar icon-card"></i>
                    </div>
                    <div class="content">
                        <!-- <div class="title">Paso 8</div> -->
                        <div class="desc title">Ejecución auditoría de seguimiento año 1.</div>
                    </div>
                </div>
            </div>
            <div class="hex row-offset-2" style="grid-column:4">
                <div class="card" role="button" tabindex="0" data-i="9">
                    <div class="num">
                        <span class="num-text">09</span>
                      <i class=" fa fa-calendar icon-card"></i>
                    </div>
                    <div class="content">
                        <!-- <div class="title">Paso 9</div> -->
                        <div class="desc title">Ejecución auditoría de seguimiento año 2.
                    </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- SVG PARA LÍNEAS PUNTEADAS CON FLECHAS -->
    <!-- Se coloca después del grid para que quede visible y no tapado -->
    <svg class="diagram-lines" xmlns="http://www.w3.org/2000/svg"></svg>
    </main>


</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {

        const cards = [...document.querySelectorAll("#hexGrid .card")];
        const section = document.querySelector("#hexGrid");
        let animated = false;

        function animateSequential() {
            if (animated) return;
            animated = true;

            cards.forEach((card, i) => {
                setTimeout(() => {
                    card.classList.add("visible");
                }, i * 250); // storytelling paso a paso
            });
        }

        // Intersection Observer
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) animateSequential();
            });
        }, {
            threshold: 0.2
        });

        observer.observe(section);

        // Hover 3D corporativo suave
        cards.forEach(card => {
            card.addEventListener("mousemove", e => {
                const r = card.getBoundingClientRect();
                const x = e.clientX - r.left - r.width / 2;
                const y = e.clientY - r.top - r.height / 2;

                card.style.transform = `
              rotateX(${ -y/40 }deg)
              rotateY(${ x/40 }deg)
              scale(1.02)
            `;
            });

            card.addEventListener("mouseleave", () => {
                card.style.transform = "";
            });
        });

    });
</script>


<script>
document.addEventListener("DOMContentLoaded", () => {
  const svg = document.querySelector(".diagram-lines");
  const svgNS = "http://www.w3.org/2000/svg";

  function drawEdgeLines() {
    svg.innerHTML = ''; // limpia SVG
    const parentRect = svg.closest(".wrap").getBoundingClientRect();
    const hexes = Array.from(document.querySelectorAll(".hex > .card"));

    // Crear marcador de flecha (opcional)
    const defs = document.createElementNS(svgNS, "defs");
    const marker = document.createElementNS(svgNS, "marker");
    marker.setAttribute("id", "arrow");
    marker.setAttribute("markerWidth", "10");
    marker.setAttribute("markerHeight", "10");
    marker.setAttribute("refX", "10");
    marker.setAttribute("refY", "3");
    marker.setAttribute("orient", "auto");
    marker.setAttribute("markerUnits", "strokeWidth");

    const arrowPath = document.createElementNS(svgNS, "path");
    arrowPath.setAttribute("d", "M0,0 L0,6 L9,3 z");
    arrowPath.setAttribute("fill", "rgba(0,180,255,0.8)");
    marker.appendChild(arrowPath);
    defs.appendChild(marker);
    svg.appendChild(defs);

    // Definir líneas
    const edges = [
      { indices: [0,1,2], x1Offset: -120, x2Offset: -60 },
      { indices: [3,4,5], x1Offset: 60, x2Offset: 140 },
      { indices: [6,7,8], x1Offset: -120, x2Offset: -60 }
    ];

    edges.forEach((edge, idx) => {
      let targetCard;
      let x1, x2;
      let y;
      const yOffset = -40;
      if(idx === 1) {
        targetCard = hexes[edge.indices[edge.indices.length - 1]];
      const rect = targetCard.getBoundingClientRect();
      y = rect.top + rect.height/2 - parentRect.top + yOffset;

      // INVERTIR DIRECCIÓN
      x1 = rect.right - parentRect.left + edge.x2Offset;
      x2 = rect.right - parentRect.left + edge.x1Offset;
        
      } else {
        targetCard = hexes[edge.indices[0]];
        const rect = targetCard.getBoundingClientRect();
        y = rect.top + rect.height/2 - parentRect.top + yOffset;
        x1 = rect.left - parentRect.left + edge.x1Offset;
        x2 = rect.left - parentRect.left + edge.x2Offset;
      }

      // Crear grupo SVG para línea + flecha
      const g = document.createElementNS(svgNS, "g");
      g.classList.add("line-arrow-group"); // inicialmente invisible

      // Línea punteada
      const line = document.createElementNS(svgNS, "line");
      line.setAttribute("x1", x1);
      line.setAttribute("y1", y);
      line.setAttribute("x2", x2);
      line.setAttribute("y2", y);
      line.setAttribute("stroke", "rgba(0,180,255,0.7)");
      line.setAttribute("stroke-width", "2");
      line.setAttribute("stroke-linecap", "round");
      line.classList.add("moving-dash");
      g.appendChild(line);

      // Flecha
      const arrow = document.createElementNS(svgNS, "polygon");
      const arrowSize = 8;
      arrow.setAttribute("points", `0,0 0,${arrowSize} ${arrowSize*1.5},${arrowSize/2}`);
      arrow.setAttribute("fill", "rgba(0,180,255,0.8)");
      arrow.setAttribute("transform", `translate(${x2},${y - arrowSize/2})`);

      // 👇 AQUI CAMBIAS LA DIRECCION DE LA FLECHA
if (idx === 1) {
  arrow.setAttribute(
    "transform",
    `translate(${x2},${y - arrowSize/2}) rotate(180 ${arrowSize/2} ${arrowSize/2})`
  );
}


      g.appendChild(arrow);

      svg.appendChild(g);

      // Animación secuencial: 2s inicial + 0.6s entre cada grupo
      setTimeout(() => {
        g.classList.add("visible");
      }, 2000 + idx*600);
    });
  }

  drawEdgeLines();
  window.addEventListener("resize", drawEdgeLines);
});
</script>
