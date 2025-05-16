<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thanks for contacting</title>
    <!-- Latest Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(35deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            overflow: hidden;
        }

        .thank-you-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 600px;
            width: 100%;
            transform: translateY(0);
            animation: slideUp 0.8s ease;
            position: relative;
            z-index: 10;
        }

        .checkmark-circle {
            width: 100px;
            height: 100px;
            background: #ff8906;
            border-radius: 50%;
            margin: 0 auto 20px;
            position: relative;
            animation: scaleUp 0.5s ease;
        }

        .checkmark {
            color: white;
            font-size: 50px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        h1 {
            color: #2d3748;
            margin-bottom: 15px;
            font-size: 2.5rem;
        }

        p {
            color: #4a5568;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .home-button {
            background: #ff8906;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 25px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.3);
            margin-top: 20px;
        }

        .home-button:hover {
            background: #ff8906;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(76, 175, 80, 0.4);
        }

        .countdown {
            margin: 20px 0;
            font-size: 1.2rem;
            color: #4a5568;
            font-weight: bold;
            padding: 10px;
            background: #f7fafc;
            border-radius: 10px;
            display: inline-block;
            min-width: 200px;
        }

        .countdown-number {
            font-weight: bold;
            color: #ff8906;
            font-size: 1.4rem;
        }

        /* Confetti styles */
        .confetti {
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: #f00;
            border-radius: 50%;
            animation: confettiFall 3s linear forwards;
            z-index: 1;
        }

        @keyframes confettiFall {
            0% {
                transform: translateY(-100vh) rotate(0deg);
                opacity: 1;
            }
            100% {
                transform: translateY(100vh) rotate(360deg);
                opacity: 0;
            }
        }

        @keyframes slideUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes scaleUp {
            from {
                transform: scale(0);
            }
            to {
                transform: scale(1);
            }
        }

        @media (max-width: 768px) {
            .thank-you-container {
                padding: 30px;
            }

            h1 {
                font-size: 2rem;
            }

            .checkmark-circle {
                width: 80px;
                height: 80px;
            }

            .checkmark {
                font-size: 40px;
            }
        }

        @media (max-width: 480px) {
            .thank-you-container {
                padding: 20px;
            }

            h1 {
                font-size: 1.75rem;
            }

            p {
                font-size: 0.9rem;
            }

            .home-button {
                padding: 10px 25px;
                font-size: 1rem;
            }
        }
    </style>
  </head>
  <body>
    <div class="thank-you-container">
        <div class="checkmark-circle">
            <i class="fas fa-check checkmark"></i>
        </div>
        <h1>Thank You!</h1>
        <p>Your message has been successfully received. We appreciate you reaching out to us and will respond to your inquiry within 24-48 hours.</p>
        
        <div class="countdown">
            Redirecting in <span class="countdown-number">5</span> seconds...
        </div>

        <a href="index.php" class="home-button">Return to Homepage</a>
    </div>

    <script>
        // Countdown timer
        let countdown = 5;
        const countdownElement = document.querySelector('.countdown-number');
        const countdownInterval = setInterval(() => {
            countdown--;
            countdownElement.textContent = countdown;
            
            if (countdown <= 0) {
                clearInterval(countdownInterval);
                window.location.href = 'index.php';
            }
        }, 1000);

        // Confetti popper effect
        function createConfetti() {
            const colors = ['#ff0000', '#00ff00', '#0000ff', '#ffff00', '#ff00ff', '#00ffff', '#ff8906'];
            const confettiCount = 100;
            
            for (let i = 0; i < confettiCount; i++) {
                const confetti = document.createElement('div');
                confetti.className = 'confetti';
                
                // Random properties
                const size = Math.random() * 10 + 5;
                const color = colors[Math.floor(Math.random() * colors.length)];
                const left = Math.random() * 100;
                const animationDuration = Math.random() * 3 + 2;
                const delay = Math.random() * 2;
                
                confetti.style.width = `${size}px`;
                confetti.style.height = `${size}px`;
                confetti.style.backgroundColor = color;
                confetti.style.left = `${left}%`;
                confetti.style.animationDuration = `${animationDuration}s`;
                confetti.style.animationDelay = `${delay}s`;
                
                // Random shape
                if (Math.random() > 0.5) {
                    confetti.style.borderRadius = '0';
                    confetti.style.transform = `rotate(${Math.random() * 360}deg)`;
                }
                
                document.body.appendChild(confetti);
                
                // Remove confetti after animation
                setTimeout(() => {
                    confetti.remove();
                }, (animationDuration + delay) * 1000);
            }
        }

        // Trigger confetti when page loads
        window.addEventListener('load', createConfetti);
    </script>
  </body>
</html>