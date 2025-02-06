<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navigation Bar -->
    <header>
        <nav class="navbar">
            <ul class="nav-left">
                <li><a href="#home" onclick="showSection('home')">Home</a></li>
                <li><a href="#features" onclick="showSection('features')">Features</a></li>
                <li><a href="#contact" onclick="showSection('contact')">Contact</a></li>
            </ul>
            <ul class="nav-right">
                <li><a href="#signup" onclick="showSection('signup')">Sign Up</a></li>
                <li><a href="#login" onclick="showSection('login')">Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- Sections -->
    <div id="home" class="section active">
        <div class="title-container">
           
            <h1 class="blue-title">Facebook</h1>
        </div>
        <p>Connect with friends, family, and the world around you.</p>
        <div class="pictures-container">
            <img src="image1.jpg" alt="Friends connecting" class="picture">
            <img src="image2.jpg" alt="Sharing moments" class="picture">
            <img src="image3.jpg" alt="Trending topics" class="picture">
        </div>
    </div>

    <div id="features" class="section">
        <h2>Features</h2>
        <div class="features-container">
            <div class="feature-card">
                <h3>Connect</h3>
                <p>Stay in touch with your friends and family anytime, anywhere.</p>
            </div>
            <div class="feature-card">
                <h3>Discover</h3>
                <p>Explore trending topics and join conversations worldwide.</p>
            </div>
            <div class="feature-card">
                <h3>Share</h3>
                <p>Post updates, photos, and videos to share moments that matter.</p>
            </div>
        </div>
    </div>

    <div id="contact" class="section">
        <h2>Contact Us</h2>
        <p>Email us at 10sakuragih@gmail.com</p>
    </div>

    <div id="signup" class="section">
        <h2>Sign Up</h2>
        <form>
            <input type="text" placeholder="Full Name" required>
            <input type="date" placeholder="Date of Birth" required>
            <select required>
                <option value="" disabled selected>Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Password" required>
            <button type="submit">Sign Up</button>
        </form>
    </div>

    <div id="login" class="section">
        <h2>Login</h2>
        <form>
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
    <footer style="text-align: center; padding: 10px; background-color: #f1f1f1; position: fixed; bottom: 0; width: 100%;">
    &copy;  Copyright Roshan Shrestha 2025
</footer>

    <script src="script.js"></script>
</body>
</html>
