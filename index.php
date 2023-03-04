<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sci-fi Portfolio - Flutter App Developer</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="hero">
            <h1>Flutter App Developer</h1>
            <p>Transforming the future with cutting-edge technology.</p>
        </section>
        <section id="about">
            <h2>About Me</h2>
            <p>Hi, I'm [Your Name], a Flutter app developer with a passion for creating innovative and intuitive mobile applications. I have [Number of years] years of experience developing mobile apps for both Android and iOS platforms. I'm constantly pushing the boundaries of what's possible with technology to bring my clients the best possible experience.</p>
        </section>
        <section id="projects">
            <h2>Projects</h2>
            <div class="project">
                <img src="project-1.jpg" alt="Project 1">
                <h3>Project 1 Name</h3>
                <p>Project description goes here.</p>
                <a href="#">View Project</a>
            </div>
            <div class="project">
                <img src="project-2.jpg" alt="Project 2">
                <h3>Project 2 Name</h3>
                <p>Project description goes here.</p>
                <a href="#">View Project</a>
            </div>
            <div class="project">
                <img src="project-3.jpg" alt="Project 3">
                <h3>Project 3 Name</h3>
                <p>Project description goes here.</p>
                <a href="#">View Project</a>
            </div>
        </section>
        <section id="contact">
            <h2>Contact Me</h2>
            <form action="#">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </section>
    </main>
</body>
</html>
