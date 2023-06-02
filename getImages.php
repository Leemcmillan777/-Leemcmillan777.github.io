<!DOCTYPE html>


<head>
    <title>Legros Landscape and Construction</title>
    <link rel="stylesheet" type="text/css" href="styles/default.css">
    <meta charset="utf-8">
    <meta name="author" content="Lee-McMillan">
</head>

<body>

    <div class="menu">
        <ul>
            <li class="logo-link"><a href="../LegrosWeb/index.html"><div class="logo-icon"></div></a></li>
            <li><a href="../LegrosWeb/index.html">Home</a></li>
            <li class="menu-item"><a href="../LegrosWeb/ResidentialLandscaping.html">Residential</a></li>
            <li class="menu-item"><a href="../LegrosWeb/NativeReveg.html">Revegetation</a></li>
            <li><a href="../LegrosWeb/Gallery.html">Gallery</a></li>
            <li><a href="../LegrosWeb/contact.html">Contact</a></li>
            <li><a href="../LegrosWeb/About.html">About</a></li>
        </ul>
    </div>




    <div class="container">
        <div class="background-image"></div>
        <div class="text-overlay">
      
            <body>
                <h1>Contact Us</h1>
                <form action="#" method="POST">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required><br><br>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required><br><br>

                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" required><br><br>

                    <label for="purpose">Purpose:</label>
                    <select id="purpose" name="purpose" required>
                        <option value="">Select Purpose</option>
                        <option value="native_revegetation">Native Revegetation</option>
                        <option value="residential_landscaping">Residential Landscaping</option>
                    </select><br><br>

                    <label for="message">Message:</label><br>
                    <textarea id="message" name="message" required></textarea><br><br>

                    <input type="submit" value="Submit">
                </form>
            </body>
        </html>
