<?php require './app/resources/layout/header.php'; ?>

<main class="container">
    <!-- Home -->
    <div class="page__style showing" data-page="homePage">
            <div rel="home" class="home">
                <div class="row">
                    <div class="fullname col">
                        <h1 id="fullName">RABIN<br>BHANDARI</h1>
                    </div>
                    <div class="image-tools col">
                        <img src="./assets/images/intro/Group_1.png" class="group-1" alt="Pen drive">
                        <img src="./assets/images/intro/Group_2.png" class="group-2" alt="Laptop">
                        <img src="./assets/images/intro/Group_3.png" class="group-3" alt="Keyboard">
                        <img src="./assets/images/intro/Group_4.png" class="group-4" alt="Mobile">
                        <img src="./assets/images/intro/Group_5.png" class="group-5" alt="Mouse">
                        <img src="./assets/images/intro/Group_6.png" class="group-6" alt="Pen">
                        <img src="./assets/images/intro/Group_7.png" class="group-7" alt="Tablet">
                    </div>
                </div>

                <!-- Who Am I -->
                <div class="row who-am-i">
                    <div class="col">
                        <img src="./assets/images/text/Group_1.png" alt="">
                        <p>SOFTWARE ENGINEER</p>
                    </div>
                    <div class="col text-center">
                        <img src="./assets/images/text/Compound%20Path_1.png" alt="">
                        <p>WEB DEVELOPER</p>
                    </div>
                    <div class="col text-center">
                        <img src="./assets/images/text/Compound%20Path_2.png" alt="">
                        <p>DESIGNER</p>
                    </div>
                </div>

                <!-- Option Buttons-->
                <div class="row option-buttons">
                    <div class="col">
                        <a href="#" class="navigate_page" data-page-target="hireMe">HIRE ME</a>
                    </div>
                    <div class="col text-center">
                        <a href="#" class="navigate_page" data-page-target="contact">CONTACT</a>
                    </div>
                    <div class="col text-center">
                        <a href="https://www.visualcv.com/rabin-bhandari" target="_blank">RESUME</a>
                    </div>
                </div>
            </div>
    </div>

    <!-- About Me -->
    <div class="page__style" data-page="aboutMe" style="background-image : url(./assets/images/page/about.jpg)">
        <div class="aboutMe" id="aboutMe">
                <div class="about-header">
                    <h1 class="page-header">ABOUT ME</h1>
                    <div class="links">
                        <a href="mailto:rabin.bhandari999@gmail.com" class="mail-link">
                            <svg aria-hidden="true" data-prefix="far" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z"></path></svg>
                            rabin.bhandari999@gmail.com</a>
                        <ul>
                            <li><a href="#" target="_blank">GITHUB </a></li>
                            <li><a href="#" target="_blank">&nbsp;/ &nbsp;LINKED IN&nbsp;</a></li>
                            <li><a href="#" target="_blank">&nbsp;/ &nbsp;GOOGLE PLUS&nbsp;</a></li>
                            <li><a href="#" target="_blank">&nbsp;/ &nbsp;FACEBOOK</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Paragraph -->
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                    Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
                    Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a
                    Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the
                    undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum"
                    (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics,
                    very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes
                    from a line in section 1.10.32.</p>
            </div>
    </div>


    <!-- Projects -->
    <div class="page__style" data-page="projects">
        <div class="projects">
                <h1 class="page-header">PROJECTS</h1>

                <div class="project-lists">
                    <ul class="row flex-start">
                        <li style="background: url('./assets/images/page/background-image.png')">
                            <a href="#">Project Name</a>
                        </li>
                        <li style="background: url('./assets/images/page/background-image.png')">
                            <a href="#">Project Name</a>
                        </li>
                        <li style="background: url('./assets/images/page/background-image.png')">
                            <a href="#">Project Name</a>
                        </li>
                    </ul>
                </div>
            </div>
    </div>

    <!-- Contact -->
    <div class="page__style" data-page="contact">
        <div class="contact">
                <h1 class="page-header">CONTACT</h1>
                <div class="row contact-detail">
                    <div class="col detail">
                        <h2>Rabin Bhandari</h2>
                        <a href="mailto:rabin.bhandari999@gmail.com">
                            <svg aria-hidden="true" data-prefix="far" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg"viewBox="0 0 512 512">
                                <path fill="currentColor" d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z"></path></svg>
                            rabin.bhandari999@gmail.com</a>
                        <a href="tel:9848127975">
                            <svg aria-hidden="true" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>
                            9848127975</a>
                        <p>
                            <svg aria-hidden="true" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg>
                            Kathmandu, Mid Baneswar</p>
                        <br>

                        <div class="social-media">
                            <a href="#" target="_blank">
                                <svg aria-hidden="true" data-prefix="fab" data-icon="github" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                    <path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg>
                                GITHUB</a>
                            <a href="#" target="_blank">
                                <svg aria-hidden="true" data-prefix="fab" data-icon="linkedin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg>
                                LINKED IN</a>
                            <a href="#" target="_blank">
                                <svg aria-hidden="true" data-prefix="fab" data-icon="google-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                    <path fill="currentColor" d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm-70.7 372c-68.8 0-124-55.5-124-124s55.2-124 124-124c31.3 0 60.1 11 83 32.3l-33.6 32.6c-13.2-12.9-31.3-19.1-49.4-19.1-42.9 0-77.2 35.5-77.2 78.1s34.2 78.1 77.2 78.1c32.6 0 64.9-19.1 70.1-53.3h-70.1v-42.6h116.9c1.3 6.8 1.9 13.6 1.9 20.7 0 70.8-47.5 121.2-118.8 121.2zm230.2-106.2v35.5H372v-35.5h-35.5v-35.5H372v-35.5h35.5v35.5h35.2v35.5h-35.2z"></path></svg>
                                GOOGLE PLUS</a>
                            <a href="#" target="_blank">
                                <svg aria-hidden="true" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M448 56.7v398.5c0 13.7-11.1 24.7-24.7 24.7H309.1V306.5h58.2l8.7-67.6h-67v-43.2c0-19.6 5.4-32.9 33.5-32.9h35.8v-60.5c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9h-58.4v67.6h58.4V480H24.7C11.1 480 0 468.9 0 455.3V56.7C0 43.1 11.1 32 24.7 32h398.5c13.7 0 24.8 11.1 24.8 24.7z"></path></svg>
                                FACEBOOK</a>
                        </div>
                    </div>

                    <div class="col col-3">
                        <form class="no-overflow" id="contactForm" data-validation="on">
                            <div class="row">
                                <div class="group col">
                                    <input type="text" name="fullname" data-error="Input field is required" required>
                                    <label>Full Name</label>
                                </div>

                                <div class="group col">
                                    <input type="email" name="email" data-error="Email field is required" required>
                                    <label>Email</label>
                                </div>
                            </div>
                            <textarea name="message" cols="30" class="auto-remove-text" rows="10">Message</textarea>
                            <button rel="send" type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    <!-- Contact End -->

    <!-- Hire Me -->
    <div class="page__style" data-page="hireMe">
        <div class="hire" rel="contact">
                <h1 class="page-header">HIRE ME
                    <span class="page-sub-header">Let Do Some Project Together.</span>
                </h1>

                <div class="row hire-detail">
                    <div class="col detail">
                        <h2>Rabin Bhandari</h2>
                        <a href="mailto:rabin.bhandari999@gmail.com">
                            <svg aria-hidden="true" data-prefix="far" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg"viewBox="0 0 512 512">
                                <path fill="currentColor" d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z"></path></svg>
                            rabin.bhandari999@gmail.com</a>
                        <a href="tel:9848127975">
                            <svg aria-hidden="true" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>
                            9848127975</a>
                        <p>
                            <svg aria-hidden="true" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg>
                            Kathmandu, Mid Baneswar</p>
                        <br>

                        <div class="social-media">
                            <a href="#" target="_blank">
                                <svg aria-hidden="true" data-prefix="fab" data-icon="github" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                    <path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg>
                                GITHUB</a>
                            <a href="#" target="_blank">
                                <svg aria-hidden="true" data-prefix="fab" data-icon="linkedin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg>
                                LINKED IN</a>
                            <a href="#" target="_blank">
                                <svg aria-hidden="true" data-prefix="fab" data-icon="google-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                    <path fill="currentColor" d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm-70.7 372c-68.8 0-124-55.5-124-124s55.2-124 124-124c31.3 0 60.1 11 83 32.3l-33.6 32.6c-13.2-12.9-31.3-19.1-49.4-19.1-42.9 0-77.2 35.5-77.2 78.1s34.2 78.1 77.2 78.1c32.6 0 64.9-19.1 70.1-53.3h-70.1v-42.6h116.9c1.3 6.8 1.9 13.6 1.9 20.7 0 70.8-47.5 121.2-118.8 121.2zm230.2-106.2v35.5H372v-35.5h-35.5v-35.5H372v-35.5h35.5v35.5h35.2v35.5h-35.2z"></path></svg>
                                GOOGLE PLUS</a>
                            <a href="#" target="_blank">
                                <svg aria-hidden="true" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M448 56.7v398.5c0 13.7-11.1 24.7-24.7 24.7H309.1V306.5h58.2l8.7-67.6h-67v-43.2c0-19.6 5.4-32.9 33.5-32.9h35.8v-60.5c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9h-58.4v67.6h58.4V480H24.7C11.1 480 0 468.9 0 455.3V56.7C0 43.1 11.1 32 24.7 32h398.5c13.7 0 24.8 11.1 24.8 24.7z"></path></svg>
                                FACEBOOK</a>
                        </div>
                    </div>

                    <div class="col col-3">
                        <form class="no-overflow" id="hireMeForm">
                            <div class="row">
                                <div class="group col">
                                    <input type="text" name="name" required>
                                    <label>Name</label>
                                </div>

                                <div class="group col">
                                    <input type="text" autocomplete="on" name="email" required>
                                    <label>Email</label>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="group col">
                                    <input type="text" name="project" id="projectTitle" title="Project Title" required>
                                    <label for="projectTitle">Project</label>
                                </div>

                                <div class="group col">
                                    <input type="text" name="budget" title="Project Estimated Buget" required>
                                    <label>Budget</label>
                                </div>
                            </div>
                            <textarea name="detail" cols="30" rows="10" class="auto-remove-text" title="Project Detail">Detail</textarea>
                            <button rel="send" type="submit">Send</button>
                        </form>
                    </div>
                </div>

    </div>
    <!-- Hire Me End -->

</main>

<?php  require './app/resources/layout/footer.php'; ?>