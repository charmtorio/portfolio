<div class="home-lines">
    <div class="linesContent">
        <span class="home-line"></span>
        <span class="home-line"></span>
        <span class="home-line"></span>
        <span class="home-line"></span>
    </div>
</div>
<div class="intro-content">
    <div class="menu">
        <ul id="menu" class="list-unstyled menu_list">
            <li class=
            <?php
                $homepage = "/portfolio/";
                $currentpage = $_SERVER['REQUEST_URI'];
                if($homepage==$currentpage) {
                    echo "d-none";
                }
            ?>>
                <span class="home-item">
                    <a href="./" data-hover="">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                </span>
            </li>
            <li class="menu-item">
                <!-- <span><a href="#about" data-hover="about">about</a></span> -->
                <span><a href="about.php">about</a></span>
            </li>
            <li class="menu-item">
                <span><a href="resume.php">resume</a></span>
            </li>
            <li class="menu-item">
                <span><a href="services.php">services</a></span>
            </li>
            <li class="menu-item">
                <span><a href="works.php">works</a></span>
            </li>
            <li class="menu-item">
                <span><a href="blog.php">blog</a></span>
            </li>
            <li class="menu-item">
                <span><a href="contact.php">contact</a></span>
            </li>
        </ul>
    </div>
</div>