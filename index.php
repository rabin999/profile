<?php include('./app/resources/layout/header.php'); ?>

<!-- Container -->
<main class="container shadow">
    <!-- Introduction Text -->

    <div class="intro-text row max-height-full" id="home">
        <div class="pp col">
            <img src="./assets/images/profile.jpg" alt="Profile Picture">
        </div>
        <div class="texts">
            <div class="header">
                Rabin Bhandari
            </div>
            <div class="title"> - Full Stack Developer
                <a class="icon linked-in" href="https://np.linkedin.com/in/rabin-bhandari-b38b52119" target="_blank">
                    <i class="fa fa-linkedin"></i>
                </a>
                <a class="icon google" href="https://plus.google.com/+RockRabin" target="_blank">
                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                </a>
            </div>
        </div>

        <div class="skills-gallery col">
            <div class="image">
                <div class="label">
                    <div class="about">Data Structure And Algorithm</div>
                    <div class="description">
                        Data Structure is a way of collecting and organising data in such a way that we can perform operations on these data in an
                        effective way. Data Structures is about rendering data elements in terms of some relationship, for
                        better organization and storage.
                    </div>
                </div>
                <img src="./assets/images/skills/algorithm.png" alt="">
            </div>
            <div class="image">
                <div class="label">
                    <div class="about">Angular Js</div>
                    <div class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum modi porro fugit accusamus vero eos!
                    </div>
                </div>
                <img src="./assets/images/skills/angular.png" alt="">
            </div>

            <div class="image">
                <div class="label">
                    <div class="about">Apache</div>
                    <div class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum modi porro fugit accusamus vero eos!
                    </div>
                </div>
                <img src="./assets/images/skills/apache.jpg" alt="">
            </div>

            <div class="image">
                <div class="label">
                    <div class="about" title="API">Application Programming Interface (API)</div>
                    <div class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum modi porro fugit accusamus vero eos!
                    </div>
                </div>
                <img src="./assets/images/skills/api.png" alt="Application Programming Interface">
            </div>

            <img src="./assets/images/skills/bootstrap.png" alt="">
            <img src="./assets/images/skills/c_cpp.png" alt="">
            <img src="./assets/images/skills/codeigniter.svg" alt="">
            <img src="./assets/images/skills/html.png" alt="">
            <img src="./assets/images/skills/css.png" alt="">
            <img src="./assets/images/skills/java.png" alt="">
            <img src="./assets/images/skills/javascript.png" alt="">
            <img src="./assets/images/skills/laravel.png" alt="">
            <img src="./assets/images/skills/linux.png" alt="">
            <img src="./assets/images/skills/mysql.png" alt="">
            <img src="./assets/images/skills/node.png" alt="">
            <img src="./assets/images/skills/php.png" alt="">
            <img src="./assets/images/skills/python.png" alt="">
            <img src="./assets/images/skills/raspberry.png" alt="">
            <img src="./assets/images/skills/version_control.png" alt="">
            <img src="./assets/images/skills/vue.png" alt="">
            <img src="./assets/images/skills/webpack.png" alt="">
        </div>
    </div>

    <!-- Introduction Text:End -->

    <!-- Little About Me -->
    <?php include('./about.php'); ?>
    <!-- Little About Me: END -->

    <!-- Work -->
    <?php include('./work.php'); ?>
    <!-- Work:END -->

    <!-- CV -->
    <?php include('./resume.php'); ?>
    <!-- CV END -->

    <!-- Contact -->
    <?php include('./contact.php'); ?>
    <!-- Contact:END -->

</main>
<!-- Container: END -->

<?php  include('./app/resources/layout/footer.php'); ?>