<div>
    {{-- The whole world belongs to you. --}}

    <script loading="lazy" src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r126/three.js" crossorigin="anonymous"></script>

    <script type="module">
        // To start an AR scene with webXR, we can use a handy button provided by three.js
        // We first have to import it because it is a javascript module
        import { ARButton } from 'https://unpkg.com/three@0.126.0/examples/jsm/webxr/ARButton.js';

        import { GLTFLoader } from 'https://cdn.jsdelivr.net/npm/three@0.126.0/examples/jsm/loaders/GLTFLoader.js';
    
		let camera, scene, renderer;
        let mesh;

		init();
		animate();

		function init() {
			const container = document.createElement('div');
			document.body.appendChild(container);

			scene = new THREE.Scene();

			camera = new THREE.PerspectiveCamera(70, window.innerWidth / window.innerHeight, 0.01, 40);

			renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
			renderer.setPixelRatio(window.devicePixelRatio);
			renderer.setSize(window.innerWidth, window.innerHeight);
            // This next line is important to to enable the renderer for WebXR
			renderer.xr.enabled = true; // New!
			container.appendChild(renderer.domElement);

			var light = new THREE.HemisphereLight(0xffffff, 0xbbbbff, 1);
			light.position.set(0.5, 1, 0.25);
			scene.add(light);

            // Load the GLB model
            const loader = new GLTFLoader();
            loader.load('{{asset('ar/a0.glb')}}', (gltf) => {
                // This code will be executed when the model is loaded
                mesh = gltf.scene;
                mesh.position.set(0, -0.5, -2.5);
                scene.add(mesh);
            });

            // const geometry = new THREE.IcosahedronGeometry(0.1, 1);
            // const material = new THREE.MeshPhongMaterial({
            //     color      :  new THREE.Color("rgb(100,35,213)"),
            //     shininess  :  6,
            //     flatShading:  true,
            //     transparent: 1,
            //     opacity    : 0.8
            // });
            
            // mesh = new THREE.Mesh(geometry, material);
            // mesh.position.set(0, 0, -0.5);
            // scene.add(mesh);

			// Add the AR button to the body of the DOM
			document.body.appendChild(ARButton.createButton(renderer));

			window.addEventListener('resize', onWindowResize, false);
		}

		function onWindowResize() {
			camera.aspect = window.innerWidth / window.innerHeight;
			camera.updateProjectionMatrix();

			renderer.setSize(window.innerWidth, window.innerHeight);
		}

		function animate() {
			renderer.setAnimationLoop(render);
		}

		function render() {      
			renderer.render(scene, camera);
		}

	</script>
</div>

