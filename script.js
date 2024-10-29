const container = document.getElementById("scene-container");

// Scene and Camera
const scene = new THREE.Scene();

const camera = new THREE.PerspectiveCamera(
    75,
    container.clientWidth / container.clientHeight,
    0.1,
    1000
);
camera.position.z = 5;

// Renderer
const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
renderer.setSize(container.clientWidth, container.clientHeight);
renderer.shadowMap.enabled = true;
container.appendChild(renderer.domElement);

// Lighting
const ambientLight = new THREE.AmbientLight(0xffffff, 0.8);
scene.add(ambientLight);
const directionalLight = new THREE.DirectionalLight(0xffffff, 5);
directionalLight.position.set(5, 5, 5).normalize();
directionalLight.castShadow = true;
scene.add(directionalLight);
directionalLight.shadow.mapSize.set(1024, 1024);
directionalLight.shadow.camera.far = 50;
directionalLight.shadow.bias = -0.01;

let gltfModel, mixer;

// Lava-like material for inside walls
function createGlowingRedMaterial() {
    return new THREE.MeshStandardMaterial({
        color: 0xff3333, // Bright red color
        emissive: 0xff0000, // Emissive red for glow effect
        emissiveIntensity: 1.5, // Increase for a stronger glow
        roughness: 0.2,
        metalness: 0.1,
    });
}

// GLTF Loader
const loader = new THREE.GLTFLoader();
loader.load(
    "object/cubeX/scene.gltf",
    (gltf) => {
        gltfModel = gltf.scene;
        gltfModel.scale.set(1, 1, 1);
        gltfModel.position.set(0, 0, 0);
        scene.add(gltfModel);

        // Traverse model to check node names and apply materials
        gltfModel.traverse((node) => {
            if (node.isMesh) {
                console.log("Node name:", node.name); // Log each node name to identify the mini cube
                node.castShadow = true;
                node.receiveShadow = true;

                // Apply glowing red material based on identified name
                if (node.name === "MiniCube") {
                    // Update "MiniCube" to the correct name if necessary
                    node.material = createGlowingRedMaterial();
                } else {
                    node.material = new THREE.MeshStandardMaterial({
                        color: node.material.color,
                        roughness: 0.5,
                        metalness: 0.5,
                    });
                }
            }
        });

        // Animation
        if (gltf.animations.length) {
            mixer = new THREE.AnimationMixer(gltfModel);
            gltf.animations.forEach((clip) => mixer.clipAction(clip).play());
        }
    },
    (xhr) => console.log((xhr.loaded / xhr.total) * 100 + "% loaded"),
    (error) => console.error("An error occurred:", error)
);

// Mouse interaction variables
const mouse = new THREE.Vector2();
const mouseInfluence = 0.02;

// Mouse event for rotation
window.addEventListener("mousemove", (event) => {
    mouse.x = (event.clientX / window.innerWidth) * 2 - 1;
    mouse.y = -(event.clientY / window.innerHeight) * 2 + 1;
    if (gltfModel) {
        gltfModel.rotation.x += mouse.y * Math.PI * mouseInfluence;
        gltfModel.rotation.y += mouse.x * Math.PI * mouseInfluence;
    }
});

// Render loop
function animate() {
    requestAnimationFrame(animate);
    if (gltfModel) {
        gltfModel.rotation.y += 0.01; // Auto-rotation
    }
    if (mixer) mixer.update(0.01); // Update animation mixer if present
    renderer.render(scene, camera);
}
animate();

// Resize handling
window.addEventListener("resize", () => {
    camera.aspect = container.clientWidth / container.clientHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(container.clientWidth, container.clientHeight);
});

window.onload = function () {
    setTimeout(function () {
        document.getElementById("welcome").textContent = "GET STARTED WITH";
        const font = document.getElementById("welcome").classList;
        font.remove("fontX");
        font.add("fontX2");
    }, 3000);
};
