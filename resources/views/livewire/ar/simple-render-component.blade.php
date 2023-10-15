<div>


<script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
<script src="https://cdn.rawgit.com/jeromeetienne/AR.js/2.2.2/aframe/build/aframe-ar.js"></script>
<div class="m-0 overflow-hidden">
    <a-scene embedded arjs="trackingMethod: best; sourceType: webcam; debugUIEnabled: false;" class="h-screen">
        <a-marker preset="hiro" class="w-full h-full">
            <!-- You can place your GLB model here -->
            <a-entity gltf-model="{{asset('ar/trial2.glb')}}" scale="0.5 0.5 0.5"></a-entity>
        </a-marker>
        <a-entity camera></a-entity>
    </a-scene>
</div>


</div>
