<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f0f0f0; /* Light gray background for the whole page */
}

header {
  background-color: #4A90E2; /* Bright blue for header */
  padding: 20px;
  text-align: center;
  font-size: 2.5em;
  color: white;
}

nav {
  float: left;
  width: 25%;
  background: #003366; /* Dark blue for nav */
  padding: 20px;
  height: 100vh; /* Full viewport height */
}

nav ul {
  list-style-type: none;
  padding: 0;
}

nav ul li {
  margin-bottom: 15px;
}

nav ul li a {
  color: #ffffff;
  text-decoration: none;
  font-size: 1.2em;
}

nav ul li a:hover {
  text-decoration: underline;
}

article {
  float: left;
  padding: 20px;
  width: 75%;
  background-color: #ffffff; /* White background for article */
  min-height: 100vh; /* Ensure it takes full viewport height */
}

section::after {
  content: "";
  display: table;
  clear: both;
}

footer {
  background-color: #4A90E2; /* Same blue as header for consistency */
  padding: 15px;
  text-align: center;
  color: white;
  position: relative;
  bottom: 0;
  width: 100%;
}

/* Responsive Design */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    float: none;
  }

  nav {
    height: auto; /* Adjust height for mobile view */
  }
}
</style>
</head>
<body>

<header>
  <h2>Dustin Archive</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="profile.php">Profile</a></li>
      <li><a href="https://www.instagram.com/saintbeess/">Instagram</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>Hi and Welcome</h1>
    <p>Welcome to my personal archive. Here you will find information about me, my projects, and links to my social media profiles.</p>
  </article>
</section>

<footer>
  <p>All About Me</p>
</footer>

</body>
</html>
