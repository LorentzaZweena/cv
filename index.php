<?php
    session_start();
    include 'connection.php';
    include 'function-register.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <nav class="navbar bg-white">
        <div class="container">
            <div class="navbar-content">
                <div class="brand-and-toggler">
                    <a href="index.php" class="navbar-brand">
                        <img src="images/logocv.png" alt="" class="navbar-brand-icon">
                        <span class="navbar-brand-text">Build <span>resume</span></span>
                    </a>
                    <a href="logout.php" class="login-btn" style="background-color: #1A91F0; color: white; padding-left: 1.5em; padding-right: 1.5em; padding-top: 0.5em; padding-bottom: 0.5em; border-radius: 5%;">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="header br-bright" id="header">
        <div class="container">
            <div class="header-content text-center">
                <br><br>
                <h6 class="text-uppercase text-blue-dark fs-14 fw-16 ls-1">Online resume builder</h6>
                <h1 class="lg-title">Create a professional resume online in minutes.</h1>
                <p class="text-dark fs-18">Create a standout professional resume online in just minutes with a perfectly crafted showcase of your skills and achievements.</p>
                <a href="#create" class="btn btn-primary text-uppercase">Create my resume</a>
                <img src="images/dublin-resume-templates.avif" alt="">
            </div>
        </div>
    </header>
    <br><br><br>

    <div class="section-one" id="create">
        <div class="container">
            <div class="section-one-content">
                <div class="section-one-l">
                    <img src="images/undraw_Working_re_ddwy.png">
                </div>
                <div class="section-one-r text-center">
                    <h2 class="lg-title">Craft your future: build a CV that opens doors!</h2>
                    <p class="text">Unlock your potential with our Build resume! Whether you're diving into the job market or aiming for a career upgrade, our intuitive platform streamlines the process of crafting a standout resume.</p>
                    <div class="btn-group">
                        <a href="resume-creative.html" class="btn btn-primary text-uppercase">Create a CV creative</a>
                        <a href="tes2.html" class="btn btn-secondary text-uppercase">Create a CV ATS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>

    <div class="section-two bg-bright">
        <div class="container">
            <div class="section-two-content">
                <div class="section-items">
                    <div class="section-item">
                        <div class="section-item-icon">
                            <img src="images/undraw_Web_search_re_efla-removebg-preview.png" alt="">
                        </div>
                        <h5 class="section-item-title">Customizable Resume Builder for Standout Job Applications</h5>
                        <p class="text">Designed for professionals at every stage, our user-friendly platform simplifies the resume creation process with customizable templates and expert guidance!</p>
                    </div>
                    <div class="section-item">
                        <div class="section-item-icon">
                            <img src="images/undraw_read_notes_gqmq-removebg-preview.png" alt="">
                        </div>
                        <h5 class="section-item-title">Effortless Resume Builder for a Professional Edge</h5>
                        <p class="text">Create a standout, professional resume in minutes with customizable simple prompts. Impress recruiters and land your dream job faster—get started today!</p>
                    </div>
                    <div class="section-item">
                        <div class="section-item-icon">
                            <img src="images/undraw_Goals_re_lu76-removebg-preview.png" alt="">
                        </div>
                        <h5 class="section-item-title">Your path to career success starts here</h5>
                        <p class="text">In just minutes, you can create a professional, eye-catching resume that highlights your strengths and makes you stand out from the crowd.</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <footer class="footer bg-dark">
        <div class="container">
            <div class="footer-container text-center">
                <p class="fs-15" style="color: whitesmoke;">&copy; Copyright 2024. All rights reserved - <span>build.resume</span></p>
            </div>
        </div>
    </footer>
    <script>
        const toggleButton = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');

        toggleButton.addEventListener('click', () => {
            sidebar.classList.toggle('active');
        });

    </script>
</body>
</html>