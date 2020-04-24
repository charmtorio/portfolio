<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elizabeth Charmaine Torio</title>
    <?php include 'header-scripts.php'; ?>
</head>
<body class="pages about">

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-lg-3 p-menu">
            <?php include 'menu.php'; ?>
        </div>

        <div class="col-12 col-lg-9 ml-auto p-4 bg-secondary p-content">
            <div class="container">
                <div class="bg-white py-4 px-5 p-card">
                    <div class="content-title">
                        <h2 class="pt-2">About me</h2>
                    </div>
                    <div class="header-pink mt-1"></div>

                    <hr>

                    <div class="content-content">
                        <div class="i-am py-4 my-5">
                            <div class="row">
                                <div class="col-12 col-sm-4">
                                    <img src="assets/images/charm_filtered.jpg" class="profile-image" alt="author">
                                </div>
                                <div class="col-12 col-sm-8">
                                    <h3 class="mb-3">I'm Charm Torio <br> Web Developer</h3>

                                    <p class="text-muted">I'm <?php echo year_diff('1991-09-15'); ?> years old creative web developer based in the Philippines. I build clean, appealing, quality and functional websites which comply with my client standards.</p>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                                    <div class="social-icons">
                                        <a target="_blank" href="https://facebook.com/akosichaaaarm" class="pr-4"><i class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/imcharmtorio" class="pr-4"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://github.com/charmtorio" class="pr-4"><i class="fab fa-github"></i></a>
                                        <a target="_blank" href="https://www.linkedin.com/in/elizabeth-charmaine-tor" class="pr-4"><i class="fab fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Skills and Languages -->
                        <div class="skills-languages my-5">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <h3 class="py-3">My Skills</h3>
                                    <div class="skills">
                                        <div class="skill">
                                            <span>HTML</span>
                                            <span class="percentage">80%</span>
                                            <div class="progress_bg">
                                                <div class="progress_bar" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                        <div class="skill">
                                            <span>CSS / Bootstrap</span>
                                            <span class="percentage">80%</span>
                                            <div class="progress_bg">
                                                <div class="progress_bar" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                        <div class="skill">
                                            <span>PHP</span>
                                            <span class="percentage">75%</span>
                                            <div class="progress_bg">
                                                <div class="progress_bar" style="width: 75%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                                <div class="col-12 col-sm-6">
                                    <h3 class="py-3">Languages</h3>
                                    <div class="skills">
                                        <div class="skill">
                                            <span>Filipino</span>
                                            <span class="percentage">99%</span>
                                            <div class="progress_bg">
                                                <div class="progress_bar" style="width: 99%;"></div>
                                            </div>
                                        </div>
                                        <div class="skill">
                                            <span>English</span>
                                            <span class="percentage">83%</span>
                                            <div class="progress_bg">
                                                <div class="progress_bar" style="width: 83%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>

                        <div class="testimonials my-5">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="py-3">Testimonials</h3>
                                </div>
                            </div>
                        </div>

                        <div class="fun-facts my-5">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="py-3">Fun Facts</h3>

                                    <div class="card-group text-center">
                                        <div class="card">
                                            <div class="card-body">
                                            <?php 
                                                $now = new DateTime('now');
                                                $fjob = new DateTime('2012-10-01');
                                                $diff = $now->diff($fjob);
                                            ?>
                                            <div class="ff-icon text-primary py-2">
                                                <i class="fas fa-briefcase"></i>
                                            </div>
                                            <h4 class="card-title"><?php echo $diff->y; ?></h4>
                                            <p class="card-text">Years Experience</p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                            <div class="ff-icon text-primary py-2">
                                                <i class="fab fa-laravel"></i>
                                            </div>
                                            <h4 class="card-title">4</h4>
                                            <p class="card-text">Laravel Websites Built</p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                            <div class="ff-icon text-primary py-2">
                                                <i class="fab fa-wordpress-simple"></i>
                                            </div>
                                            <h4 class="card-title">2</h4>
                                            <p class="card-text">Wordpress Websites Built</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer-scripts.php'; ?>
</body>
</html>