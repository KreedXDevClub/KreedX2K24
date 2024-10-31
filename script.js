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
        const welcomeEl = document.getElementById("welcome");

        // Add fadeOut classes to fade out "WELCOME"
        welcomeEl.classList.add("animate__animated", "animate__fadeOut");

        // Wait for the fade-out animation to complete
        setTimeout(() => {
            // Change the text and font class
            welcomeEl.textContent = "GET STARTED WITH";
            welcomeEl.classList.remove("fontX");
            welcomeEl.classList.add("fontX2");

            // Add fadeIn classes to fade in "GET STARTED"
            welcomeEl.classList.remove("animate__fadeOut"); // Remove fadeOut class
            welcomeEl.classList.add("animate__fadeIn");
        }, 1000); // Match this duration to your fade-out duration (2s in this case)
    }, 3000);
};

// Function to create and set up canvas with animation for a given target div
function createCanvasForDiv(targetDiv) {
    // Create and append canvas to the target div
    var canvas = document.createElement("canvas");
    canvas.style.position = "absolute";
    canvas.style.top = "0";
    canvas.style.left = "0";
    canvas.style.zIndex = -2;
    targetDiv.appendChild(canvas);
    var context = canvas.getContext("2d");

    // Define variables specific to this canvas
    var halfx, halfy;
    var dotCount = 200;
    var dots = [];

    // Function to resize canvas and update dimensions
    function resizeCanvas() {
        canvas.width = targetDiv.clientWidth;
        canvas.height = targetDiv.clientHeight;
        halfx = canvas.width / 2;
        halfy = canvas.height / 2;
    }

    // Call resizeCanvas initially and on window resize
    resizeCanvas();
    window.addEventListener("resize", resizeCanvas);

    // Initialize dots
    for (var i = 0; i < dotCount; i++) {
        dots.push(new Dot());
    }

    function render() {
        // Create a red-to-black gradient background
        const gradient = context.createLinearGradient(0, 0, canvas.width, 0);
        gradient.addColorStop(0, "rgb(154, 0, 0)");
        gradient.addColorStop(0.25, "rgb(112, 0, 0)");
        gradient.addColorStop(0.5, "rgb(48, 0, 0)");
        gradient.addColorStop(0.75, "rgb(16, 0, 0)");
        gradient.addColorStop(1, "black");

        // Set the gradient as the fill style and apply it
        context.fillStyle = gradient;
        context.fillRect(0, 0, canvas.width, canvas.height);

        // Render each dot
        for (var i = 0; i < dotCount; i++) {
            dots[i].draw(context, halfx, halfy);
            dots[i].move();
        }
        requestAnimationFrame(render);
    }

    // Dot class definition
    function Dot() {
        this.rad_x = 2 * Math.random() * halfx + 1;
        this.rad_y = 1.2 * Math.random() * halfy + 1;
        this.alpha = Math.random() * 360 + 1;
        this.speed = Math.random() * 100 < 50 ? 1 : -1;
        this.speed *= 0.1;
        this.size = Math.random() * 5 + 1;
        this.color = Math.floor(Math.random() * 256);
    }

    Dot.prototype.draw = function (context, halfx, halfy) {
        var dx = halfx + this.rad_x * Math.cos((this.alpha / 180) * Math.PI);
        var dy = halfy + this.rad_y * Math.sin((this.alpha / 180) * Math.PI);
        context.fillStyle = "rgb(" + this.color + "," + this.color + "," + this.color + ")";
        context.fillRect(dx, dy, this.size, this.size);
    };

    Dot.prototype.move = function () {
        this.alpha += this.speed;
        if (Math.random() * 100 < 50) {
            this.color += 1;
        } else {
            this.color -= 1;
        }
    };

    // Start animation for this canvas
    render();
}

// Apply animation to both divX and divX2
var divX = document.querySelector(".divX");
var divX2 = document.querySelector(".divX2");
createCanvasForDiv(divX);
createCanvasForDiv(divX2);



function toggleMenu() {
    document.querySelector('.menu-overlay').classList.toggle('active');
}

// Set the background images for each nav link based on data-image attribute
document.querySelectorAll('.menu-links a').forEach(link => {
    const imageUrl = link.getAttribute('data-image');
    if (imageUrl) {
        link.style.backgroundImage = `url(${imageUrl})`;
    }
});


// Smooth scrolling for all anchor links
document.querySelectorAll("a[href^='#']").forEach(anchor => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();
        gsap.to(window, {
            duration: 2, // Adjust duration for slower/faster scrolling
            scrollTo: this.getAttribute("href"),
            ease: "power2.out" // Easing for smooth effect
        });
    });
});


new WOW().init();

gsap.registerPlugin(ScrollTrigger);

if (window.innerWidth > 768) {
    gsap.to(".horizontal-sections", {
        x: () => -(document.querySelector(".horizontal-sections").offsetWidth - window.innerWidth),
        ease: "none",
        scrollTrigger: {
            trigger: ".horizontal-sections",
            start: "top top",
            end: () => `+=${document.querySelector(".horizontal-sections").offsetWidth - window.innerWidth}`,
            scrub: 1,
            pin: true,
            anticipatePin: 1,
            invalidateOnRefresh: true,
        }
    });
}

window.addEventListener("load", () => {
    document.getElementById("loading-screen").classList.add("hidden");
});
