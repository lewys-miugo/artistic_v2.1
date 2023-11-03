<div>

<!-- <model-viewer
    src="{{ asset('ar/trial2.glb') }}" 
    alt="A 3D model"
    ios-src="{{ asset('ar/trial2.usdz') }}"
    ar
    ar-modes="webxr scene-viewer quick-look"
    ar-scale="auto"
    camera-controls
  ></model-viewer> -->

  <script type="module" src="https://unpkg.com/@google/model-viewer"></script>

  <button id="ar-button">View in AR</button>
  <model-viewer src="{{ asset('ar/trial2.glb') }}" alt="A 3D model" id="ar-model" camera-controls></model-viewer>
  <script>
    const arButton = document.getElementById('ar-button');
    const arModel = document.getElementById('ar-model');

    arButton.addEventListener('click', () => {
      arModel.activateAR();
    });
  </script>
</div>
