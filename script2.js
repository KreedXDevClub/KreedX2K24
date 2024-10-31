window.onload = function () {
    setTimeout(function () {
        // Target the element and set up variables
        const welcomeEl = document.getElementById("welcome");
        const fontClass = welcomeEl.classList;
        const finalText = "GET STARTED WITH";

        // Remove the initial class and add the new one
        fontClass.remove("fontX");
        fontClass.add("fontX2");

        // Typing animation setup
        let currentIndex = 0;
        let currentText = "";

        // Function for typing animation
        function typeText() {
            if (currentIndex < finalText.length) {
                currentText += finalText[currentIndex];
                welcomeEl.textContent = currentText;
                currentIndex++;
            } else {
                clearInterval(typingInterval);
                welcomeEl.classList.remove("cursor"); // Remove cursor at the end
            }
        }

        // Add a cursor for typing effect and start the animation
        welcomeEl.classList.add("cursor");
        const typingInterval = setInterval(typeText, 100); // Adjust speed as needed
    }, 3000);
};