<div>

<a-scene embedded arjs="sourceType: webcam">
    <a-marker preset="hiro">
      <a-entity
        gltf-model="{{ asset('ar/trial2.glb') }}"
        scale="0.1 0.1 0.1"
        rotation="0 180 0"
      ></a-entity>
    </a-marker>
</a-scene>
</div>
