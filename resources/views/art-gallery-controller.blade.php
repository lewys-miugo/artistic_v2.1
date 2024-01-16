<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('ae_w_favicon.png')}}">
    <title>{{-- config('app.name', 'Artistic Excursions') --}}Artistic Excursions - Art Gallery</title>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script> -->
    <script type="importmap">
        {
            "imports": {
            "three": "https://unpkg.com/three@0.150.1/build/three.module.js",
            "three/addons/": "https://unpkg.com/three@0.150.1/examples/jsm/"
            }
        }
    </script>

    @vite(['resources/css/app.css'])

</head>
<body>
    <div class="bg-gray-900 overflow-hidden m-2">
        <div id="controls-container" class="absolute bottom-0">
            <div class="flex flex-row-3 lg:pl-28 md:pl-28 pl-10">
                <button id="moveForward" class="bg-blue-500 rounded-lg text-white m-2 px-auto lg:w-24 md:w-24 px-2 py-2 lg:text-lg md:text-sm text-xs cursor-pointer mx-2">Forward</button>
            </div>

            <div class="flex flex-row">
                <div class="flex flex-row">
                    <button id="moveLeft" class="bg-blue-500 rounded-lg text-white m-2 px-auto lg:w-24 md:w-24 h-fit px-2 py-2 lg:text-lg md:text-sm text-xs cursor-pointer">Left</button>
                    <button id="resetButton" class="bg-blue-500 rounded-lg text-white m-2 px-auto lg:w-24 md:w-24 h-fit px-2 py-2 lg:text-lg md:text-sm text-xs cursor-pointer">Reset</button>
                    <button id="moveRight" class="bg-blue-500 rounded-lg text-white m-2 px-auto lg:w-24 md:w-24 h-fit px-2 py-2 lg:text-lg md:text-sm text-xs cursor-pointer">Right</button>
                </div>
                <div class="md:mx-80 mx-2 lg:mx-80"></div>
                <div class="align-right flex flex-row ">
                    <button id="rotateLeft" class="bg-blue-500 rounded-lg text-white lg:px-5 px-2 py-2 lg:text-lg md:text-sm text-xs cursor-pointer mx-2">Rotate Left</button>
                    <button id="rotateRight" class="bg-blue-500 rounded-lg text-white lg:px-5 px-2 py-2 lg:text-lg md:text-sm text-xs cursor-pointer mx-2">Rotate Right</button>

                </div>
            </div>
            <div class="flex flex-row-3 lg:pl-28 md:pl-28 pl-10">
                <button id="moveBackward" class="bg-blue-500 rounded-lg text-white m-2 px-auto lg:w-24 md:w-24 px-2 py-2 lg:text-lg md:text-sm text-xs cursor-pointer mx-2">Backward</button>
            </div>
        </div>
    </div>


    <div class="hidden">
        @foreach ($image1Urls as $image1url)
            <img src="{{asset('images/products')}}/{{$image1url}}" loading="lazy" alt="{{$image1url}}">
        @endforeach
    </div>
    <div class="hidden">
        @foreach ($image2Urls as $image2url)
            <img src="{{asset('images/products')}}/{{$image2url}}" loading="lazy" alt="{{$image2url}}">
        @endforeach
    </div>

    <!-- <script src="https://threejs.org/examples/jsm/controls/PointerLockControls.js"></script> -->
    <script type="module">
        import * as THREE from 'three';
        import { PointerLockControls } from 'three/addons/controls/PointerLockControls.js';

        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer();
        renderer.setSize(window.innerWidth, window.innerHeight);
        document.body.appendChild(renderer.domElement);

        // Creating a simple hallway
        const hallwayWidth = 30;
        const hallwayHeight = 20;
        const hallwayDepth = 300;



        // const textureLoader = new THREE.TextureLoader();
        // const floorTexture = textureLoader.load('https://upload.wikimedia.org/wikipedia/commons/b/bb/Malkin%2C_Edge%2C_and_Co_Pattern_280.jpg');
        // floorTexture.anisotropy = 32;
        // floorTexture.repeat.set(100, 100); // Repeat the texture on the floor
        // floorTexture.wrapT = THREE.RepeatWrapping;
        // floorTexture.wrapS = THREE.RepeatWrapping;

        // const wallTextureLoader = new THREE.TextureLoader();
        // const wallTexture1 = wallTextureLoader.load('/images/wall.jpg');
        // const wallTexture2 = wallTextureLoader.load('/images/madmax.jpg');


        const floorGeometry = new THREE.BoxGeometry(hallwayWidth, 0.1, hallwayDepth);
        const floorMaterial = new THREE.MeshBasicMaterial({
        color: 0x404040,
        });
        const floor = new THREE.Mesh(floorGeometry, floorMaterial);
        scene.add(floor);

        const ceilingGeometry = new THREE.PlaneGeometry(hallwayWidth, hallwayDepth);
        const ceilingMaterial = new THREE.MeshBasicMaterial({ color: 0x404040, side: THREE.DoubleSide });
        const ceiling = new THREE.Mesh(ceilingGeometry, ceilingMaterial);
        // ceiling.material.map = wallTexture;
        ceiling.rotation.x = Math.PI / 2;
        ceiling.position.y = hallwayHeight + -10;
        scene.add(ceiling);

        const wallGeometry = new THREE.BoxGeometry(0.1, hallwayHeight, hallwayDepth);
        const wallMaterial = new THREE.MeshBasicMaterial({ color: 0x606060 });

        // Small wall constants

        const wallTextureLoader = new THREE.TextureLoader();
        // const wallTexture1 = wallTextureLoader.load();
        // const wallTexture2 = wallTextureLoader.load('/madmax.jpg');

        const smallWallGeometry = new THREE.BoxGeometry(0.2, 5, 8);
        const leftWallMaterial = new THREE.MeshBasicMaterial({ color: 0xFFFFFF });
        const rightWallMaterial = new THREE.MeshBasicMaterial({ color: 0xFFFFFF });

        const s_w_posx1 = (-hallwayWidth + 1.5) / 2;
        const s_w_posx2 = (hallwayWidth -1.5)/2;

        const s_w_posz1 = (-hallwayDepth) / 2;

        const wallCount = 29; // Adjust this value based on how many walls you want to create
        const wallSpacing = 10; // Adjust this value based on the desired spacing between walls

        const wallTextures1 = @json($image1Urls);
        // console.log(wallTextures1);
        for (let i = 0; i < wallCount; i++) {
            const leftSmallWallGeometry = new THREE.BoxGeometry(0.2, 5, 8);
            const leftSmallWallMaterial = new THREE.MeshBasicMaterial({
                color: 0xFFFFFF,
                // encoding: THREE.LinearEncoding,
            });

            const leftSmallWall = new THREE.Mesh(leftSmallWallGeometry, leftSmallWallMaterial);
            const textureIndex = Math.min(i, wallTextures1.length - 1);
            leftSmallWall.material.map = wallTextureLoader.load("{!! asset('images/products') !!}/" + wallTextures1[textureIndex]);
            const imagePath = "{!! asset('images/products') !!}/" + wallTextures1[textureIndex];
            // console.log(imagePath);
            // leftSmallWall.material.map = wallTexture1;
            leftSmallWall.position.x = s_w_posx1;
            leftSmallWall.position.z = s_w_posz1 + (i + 1) * wallSpacing;

            scene.add(leftSmallWall);
        }

        const wallTextures2 = @json($image2Urls);
        for (let i = 0; i < wallCount; i++) {
            const rightSmallWallGeometry = new THREE.BoxGeometry(0.2, 5, 8);
            const rightSmallWallMaterial = new THREE.MeshBasicMaterial({
                color: 0xFFFFFF,
                // encoding: THREE.LinearEncoding,
            });

            const rightSmallWall = new THREE.Mesh(rightSmallWallGeometry, rightSmallWallMaterial);
            const textureIndex = Math.min(i, wallTextures2.length - 1);
            rightSmallWall.material.map = wallTextureLoader.load("{!! asset('images/products') !!}/" + wallTextures2[textureIndex]);
            // rightSmallWall.material.map = wallTexture2;
            rightSmallWall.position.x = s_w_posx2;
            rightSmallWall.position.z = s_w_posz1 + (i+1)*wallSpacing;

            scene.add(rightSmallWall);

        }



        // LEFT && RIGHT WALLS

        const leftWall = new THREE.Mesh(wallGeometry, wallMaterial);
        // leftWall.material.map = wallTexture;
        leftWall.position.x = -hallwayWidth / 2;
        scene.add(leftWall);

        const rightWall = new THREE.Mesh(wallGeometry, wallMaterial);
        rightWall.position.x = hallwayWidth / 2;
        scene.add(rightWall);


        // Setting up PointerLockControls
        const controls = new PointerLockControls(camera, document.body);
        scene.add(controls.getObject());


        // Event listeners for movement controls
        const moveForwardButton = document.getElementById('moveForward');
        const moveBackwardButton = document.getElementById('moveBackward');
        const moveLeftButton = document.getElementById('moveLeft');
        const moveRightButton = document.getElementById('moveRight');
        const resetButton = document.getElementById('resetButton');
        const rotateLeftButton = document.getElementById('rotateLeft');
        const rotateRightButton = document.getElementById('rotateRight');

        let rotateLeftPressed = false;
        let rotateRightPressed = false;
        let moveForwardPressed = false;
        let moveBackwardPressed = false;
        let moveLeftPressed = false;
        let moveRightPressed = false;

        moveForwardButton.addEventListener('mousedown', () => {
            moveForwardPressed = true;
            startContinuousMove(moveForward);
        });
        moveForwardButton.addEventListener('mouseup', () => {
            moveForwardPressed = false;
        });

        moveBackwardButton.addEventListener('mousedown', () => {
            moveBackwardPressed = true;
            startContinuousMove(moveBackward);
        });
        moveBackwardButton.addEventListener('mouseup', () => {
            moveBackwardPressed = false;
        });

        moveLeftButton.addEventListener('mousedown', () => {
            moveLeftPressed = true;
            startContinuousMove(moveLeft);
        });
        moveLeftButton.addEventListener('mouseup', () => {
            moveLeftPressed = false;
        });

        moveRightButton.addEventListener('mousedown', () => {
            moveRightPressed = true;
            startContinuousMove(moveRight);
        });
        moveRightButton.addEventListener('mouseup', () => {
            moveRightPressed = false;
        });

        rotateLeftButton.addEventListener('mousedown', ()=> {
            rotateLeftPressed = true;
            console.log("moving left");
        })

        rotateLeftButton.addEventListener('mouseup', ()=> {
            rotateLeftPressed= false;
        })

        rotateRightButton.addEventListener('mousedown', ()=>{
            rotateRightPressed = true;
            console.log("moving right");

        })

        rotateRightButton.addEventListener('mouseup', ()=> {
            rotateRightPressed = false;
        })


        resetButton.addEventListener('click', resetPosition);

        // Handling window resize
        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        });

        const clock = new THREE.Clock();

        function animate() {

            requestAnimationFrame(animate);
            if (camera.position.x < -hallwayWidth / 2 + 1) {
                camera.position.x = -hallwayWidth / 2 + 1;
            } else if (camera.position.x > hallwayWidth / 2 - 1) {
                camera.position.x = hallwayWidth / 2 - 1;
            }

            if (rotateLeftPressed) {
                rotateLeft();
            } else if (rotateRightPressed) {
                rotateRight();
            }


            renderer.render(scene, camera);
        }

        function moveForward() {
            controls.moveForward(0.5);
        }

        function moveBackward() {
            controls.moveForward(-0.5);
        }

        function moveLeft() {
            controls.moveRight(-0.5);
        }

        function moveRight() {
            controls.moveRight(0.5);
        }

        function resetPosition() {
            controls.getObject().position.set(0, 0, 0);
            // yawObject.rotation.y = 0;
            // pitchObject.rotation.x = 0;
        }

        function rotateLeft() {
            controls.getObject().rotation.y +=0.02;
        }

        function rotateRight() {
            controls.getObject().rotation.y -= 0.02;
        }

        function startContinuousMove(moveFunction) {
            function move() {
                if (moveForwardPressed || moveBackwardPressed || moveLeftPressed || moveRightPressed) {
                    moveFunction();
                    requestAnimationFrame(move);
                }
            }
            move();
        }
        controls.addEventListener('lock', function () {
            console.log('Pointer locked');
        });

        controls.addEventListener('unlock', function () {
            console.log('Pointer unlocked');
        });

        animate();
    </script>
</body>
</html>
