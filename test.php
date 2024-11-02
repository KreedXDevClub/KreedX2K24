<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Rotating Coins with Counts</title>
    <style>
        /* Centering everything */
        .coin-box-container {
            display: flex;
            gap: 40px;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        /* Styling for each box containing a coin and count */
        .coin-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            width: 150px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        /* Common Coin Wrapper Styling */
        .coin {
            position: relative;
            width: 100px;
            height: 100px;
            transform-style: preserve-3d;
            animation: rotate 3s infinite linear;
            margin-bottom: 10px;
        }

        /* Front and Back Faces Common Styles */
        .face {
            position: absolute;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            font-weight: bold;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        /* Gold Coin Specific Styling */
        .gold-coin .face {
            background: radial-gradient(circle at 30% 30%, #ffd700, #d4af37);
            color: #ffeb3b;
        }

        /* Purple Coin Specific Styling */
        .purple-coin .face {
            background: radial-gradient(circle at 30% 30%, #a020f0, #6a0dad);
            color: #f0e0ff;
        }

        /* Front and Back Face Positions */
        .front {
            transform: translateZ(2px);
            font-size: 60px;
        }

        .back {
            transform: rotateY(180deg) translateZ(2px);
            font-size: 60px;
        }

        /* Coin Edge Styling */
        .edge {
            position: absolute;
            width: 100px;
            height: 12px;
            transform: rotateX(90deg) translateZ(-49px);
            top: 44px;
            border-radius: 50%;
        }

        /* Gold Coin Edge */
        .gold-coin .edge {
            background: linear-gradient(90deg, #d4af37, #b8860b);
        }

        /* Purple Coin Edge */
        .purple-coin .edge {
            background: linear-gradient(90deg, #6a0dad, #4b0082);
        }

        /* 3D Rotation Animation */
        @keyframes rotate {
            0% {
                transform: rotateY(0deg);
            }

            100% {
                transform: rotateY(360deg);
            }
        }

        /* Styling for coin count text */
        .coin-count {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>

<body>

    <div class="coin-box-container">
        <!-- Gold Coin Box -->
        <div class="coin-box">
            <div class="coin gold-coin">
                <div class="face front">X</div>
                <div class="face back">X</div>
                <div class="edge"></div>
            </div>
            <div class="coin-count">Legend Coins: 23</div>
        </div>

        <!-- Purple Coin Box -->
        <div class="coin-box">
            <div class="coin purple-coin">
                <div class="face front">X</div>
                <div class="face back">X</div>
                <div class="edge"></div>
            </div>
            <div class="coin-count">Epic Coins: 230</div>
        </div>
    </div>

</body>

</html>