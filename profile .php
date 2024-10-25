<?php
// Define your personal information
$name = "Benediktus Dustin Adrianto Sinaga";
$age = 16;
$school = "SMKN2BANDUNG";
$classes = "11 RPL 1"; // List your classes
$dream = "PROGRAMMER";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <style>
        body {
            font-family: 'Times New Roman', serif;
            color: #fff; /* White text color for contrast */
            margin: 0;
            padding: 0;
            overflow: hidden; /* Hide scrollbars */
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh; /* Full viewport height */
            position: relative; /* Position relative for absolute children */
            background-color: #4a2c2a; /* Fallback brown color for background */
        }
        .container {
            max-width: 800px;
            width: 100%;
            padding: 20px;
            background-color: #333; /* Dark background for content */
            color: #fff; /* White text color for readability */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative; /* Required for the pseudo-elements */
            z-index: 1; /* Ensure content is above the rain effect */
        }
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }
        h1 {
            font-size: 2.5em;
            margin: 0;
        }
        .info {
            text-align: center;
            max-width: 600px;
            margin: 0 auto;
        }
        .info h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        .info p {
            font-size: 1em;
            margin: 5px 0;
        }
        /* Blood rain effect */
        .rain {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none; /* Allow clicks to pass through */
            z-index: 0; /* Behind the content */
            overflow: hidden;
        }
        .drop {
            position: absolute;
            width: 2px;
            height: 100px;
            background: rgba(255, 0, 0, 0.8); /* Blood red color */
            opacity: 0.7;
            animation: fall linear infinite;
        }
        @keyframes fall {
            from {
                transform: translateY(-100px);
            }
            to {
                transform: translateY(100vh);
            }
        }
    </style>
</head>
<body>
    <div class="rain"></div>
    <div class="container">
        <h1><?php echo htmlspecialchars($name); ?></h1>
        <div class="info">
            <h2>About Me</h2>
            <p><strong>Age:</strong> <?php echo htmlspecialchars($age); ?></p>
            <p><strong>School:</strong> <?php echo htmlspecialchars($school); ?></p>
            <p><strong>Classes:</strong> <?php echo htmlspecialchars($classes); ?></p>
            <p><strong>Dream:</strong> <?php echo nl2br(htmlspecialchars($dream)); ?></p>
        </div>
    </div>
    <script>
        // JavaScript to create multiple raindrop elements
        document.addEventListener('DOMContentLoaded', function() {
            const rain = document.querySelector('.rain');
            const numDrops = 100; // Number of raindrops

            for (let i = 0; i < numDrops; i++) {
                const drop = document.createElement('div');
                drop.classList.add('drop');
                // Randomize position and size
                drop.style.left = Math.random() * 100 + 'vw';
                drop.style.animationDuration = Math.random() * 2 + 1 + 's';
                drop.style.height = Math.random() * 50 + 50 + 'px'; // Random height for drops
                rain.appendChild(drop);
            }
        });
    </script>
</body>
</html>