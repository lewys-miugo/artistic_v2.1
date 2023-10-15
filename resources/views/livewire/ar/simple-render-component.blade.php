<div>
    <script defer src="https://threejs.org/build/three.js"></script>
    




    <!-- AR Section -->
    <div class="w-full h-screen flex items-center justify-center">
        <script>
            // Check for WebXR support
            if ('xr' in navigator) {
                navigator.xr.isSessionSupported('immersive-ar').then((supported) => {
                    if (supported) {
                        document.getElementById('xr-button').style.display = 'block';
                    }
                });
            }

            // Function to initialize WebXR AR using Three.js
            function initXR() {
                const scene = new THREE.Scene();
                const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);

                const renderer = new THREE.WebGLRenderer({ antialias: true });
                renderer.setSize(window.innerWidth, window.innerHeight);
                document.body.appendChild(renderer.domElement);

                // Handle XR session start
                function handleSession(session) {
                    if (session) {
                        session.updateRenderState({ baseLayer: new XRWebGLLayer(session, renderer) });
                        session.requestReferenceSpace('viewer').then((referenceSpace) => {
                            session.requestAnimationFrame(onXRFrame);

                            function onXRFrame(time, frame) {
                                const pose = frame.getViewerPose(referenceSpace);

                                if (pose) {
                                    const xrCamera = renderer.xr.getCamera(camera);
                                    xrCamera.matrix.fromArray(pose.transform.matrix);
                                    xrCamera.projectionMatrix.fromArray(pose.projectionMatrix);

                                    renderer.render(scene, xrCamera);

                                    session.requestAnimationFrame(onXRFrame);
                                }
                            }
                        });
                    }
                }

                // Button to initiate XR session
                document.getElementById('xr-button').addEventListener('click', () => {
                    navigator.xr.requestSession('immersive-ar').then(handleSession);
                });

                // Load GLB model
                const loader = new THREE.GLTFLoader();
                loader.load('{{asset('ar/trial2.glb')}}', (gltf) => {
                    gltf.scene.scale.set(0.5, 0.5, 0.5); // Adjust the scale as needed
                    scene.add(gltf.scene);
                });

                // Handle window resize
                window.addEventListener('resize', () => {
                    camera.aspect = window.innerWidth / window.innerHeight;
                    camera.updateProjectionMatrix();
                    renderer.setSize(window.innerWidth, window.innerHeight);
                });

                // Render loop
                function animate() {
                    requestAnimationFrame(animate);
                    renderer.render(scene, camera);
                }

                animate();
            }
        </script>

        <!-- Button to initiate XR session -->
        <button id="xr-button" class="bg-blue-500 text-white p-2 rounded-md" style="display: none;">
            View in AR
        </button>
    </div>

</div>
