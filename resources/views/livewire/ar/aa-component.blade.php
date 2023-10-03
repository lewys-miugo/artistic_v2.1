<div>



    <style>

        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        #viewer {
            width: 80%;
            height: 400px;
            margin: 20px auto;
            border: 1px solid #ccc;
            background-color: #fff;
        }
        .btn {
            display: inline-block;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
        }
    </style>
    <!-- Include the model-viewer library for .usdz and .glb formats -->
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <h1>Welcome to the AR Viewer</h1>
    <div id="viewer">
        <!-- Embed your AR model here -->
        <model-viewer src="{{asset('ar/trial2.glb')}}" ar ar-modes="webxr scene-viewer quick-look" camera-controls alt="Description of your model"></model-viewer>
    </div>
    <a href="#" class="btn" id="arButton">Launch AR Experience</a>

    <!-- Include necessary scripts or libraries for AR functionality here -->

    <script>
        // JavaScript to handle the AR functionality can be added here
        document.getElementById('arButton').addEventListener('click', function() {
            // Code to launch the AR experience
        });
    </script>

</div>
