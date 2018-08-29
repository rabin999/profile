<?php include('./app/resources/layout/header.php'); ?>
    <style>
        .rb-theme-1 {
            background-color: transparent !important;
        }
        header {
            padding: 20px !important;
            background-color: #18191D !important;
        }
    </style>
    <!-- Container -->
    <main class="blog-container">
        <!-- Blog -->
        <div class="blogs search">
            <!-- Related Post -->
            <div class="post-result">
                <div class="not-found">
                    <div class="sign">
                        <svg height="32px" version="1.1" viewBox="0 0 32 32" width="32px" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns:xlink="http://www.w3.org/1999/xlink"><title/><desc/><defs/><g fill="none" fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1"><g fill="#157EFB" id="icon-61-warning"><path d="M15.4242327,5.14839275 C16.2942987,3.74072976 17.707028,3.74408442 18.5750205,5.14839275 L29.3601099,22.59738 C30.5216388,24.4765951 29.6755462,26 27.4714068,26 L6.5278464,26 C4.32321557,26 3.47386317,24.4826642 4.63914331,22.59738 L15.4242327,5.14839275 L15.4242327,5.14839275 Z M16.353181,5.5229211 C16.7005152,4.96165163 17.2647678,4.9634187 17.6110318,5.52292108 L28.6162937,23.3055078 C29.1954663,24.2413498 28.7622271,24.9999996 27.6746349,24.9999996 L6.29039231,25 C5.19115596,25 4.76644971,24.2463265 5.34866262,23.3055082 L16.353181,5.5229211 L16.353181,5.5229211 Z M17,11 C16.4477153,11 16,11.4530363 16,11.9970301 L16,18.0029699 C16,18.5536144 16.4438648,19 17,19 C17.5522847,19 18,18.5469637 18,18.0029699 L18,11.9970301 C18,11.4463856 17.5561352,11 17,11 L17,11 Z M17,23 C17.5522848,23 18,22.5522848 18,22 C18,21.4477152 17.5522848,21 17,21 C16.4477152,21 16,21.4477152 16,22 C16,22.5522848 16.4477152,23 17,23 L17,23 Z" id="warning"/></g></g></svg>
                    </div>
                    <p>Result not found for Query !</p>
                </div>

                <h3 class="header search-header">Search Result for <strong>"Lorem."</strong></h3>
                <div class="related-post">
                    <h3 class="header hidden">Post you may like</h3>
                    <div class="blogs grid">
                        <div class="row">
                            <div class="col-auto">
                                <div class="blog">
                                    <a href="" class="blog-image">
                                        <img src="./assets/images/blog/first.jpg" alt="">
                                    </a>
                                    <article>
                                        <a class="title" href="">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, quia.
                                        </a>

                                        <div class="blog-review">
                                            <a href="">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore voluptas
                                                officiis modi debitis enim dolorem!...
                                            </a>
                                        </div>

                                        <div class="row margin-tb-20">
                                            <div class="col">
                                                <a class="tag" href="" title="Blog Tag">Engeneering</a>
                                            </div>
                                            <div class="col">
                                                <div class="view-comment">
                                <span class="view" title="total view count"><svg aria-hidden="true" class="has-margin" data-prefix="far" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor" d="M569.354 231.631C512.97 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-102.556 0-192.091-54.701-240-136 44.157-74.933 123.677-127.27 216.162-135.007C273.958 131.078 280 144.83 280 160c0 30.928-25.072 56-56 56s-56-25.072-56-56l.001-.042C157.794 179.043 152 200.844 152 224c0 75.111 60.889 136 136 136s136-60.889 136-136c0-31.031-10.4-59.629-27.895-82.515C451.704 164.638 498.009 205.106 528 256c-47.908 81.299-137.444 136-240 136z"></path></svg> 26
                                </span>
                                                    <span class="comment" title="total comment count">
                                    <svg aria-hidden="true" data-prefix="fas" data-icon="comments" class="has-margin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M416 192c0-88.4-93.1-160-208-160S0 103.6 0 192c0 34.3 14.1 65.9 38 92-13.4 30.2-35.5 54.2-35.8 54.5-2.2 2.3-2.8 5.7-1.5 8.7S4.8 352 8 352c36.6 0 66.9-12.3 88.7-25 32.2 15.7 70.3 25 111.3 25 114.9 0 208-71.6 208-160zm122 220c23.9-26 38-57.7 38-92 0-66.9-53.5-124.2-129.3-148.1.9 6.6 1.3 13.3 1.3 20.1 0 105.9-107.7 192-240 192-10.8 0-21.3-.8-31.7-1.9C207.8 439.6 281.8 480 368 480c41 0 79.1-9.2 111.3-25 21.8 12.7 52.1 25 88.7 25 3.2 0 6.1-1.9 7.3-4.8 1.3-2.9.7-6.3-1.5-8.7-.3-.3-22.4-24.2-35.8-54.5z"></path></svg>26
                                </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <a href="" title="Published Date">
                                                    <div class="date">
                                                        <svg aria-hidden="true" data-prefix="far" data-icon="calendar-alt" class="has-margin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                            <path fill="currentColor" d="M148 288h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm108-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 96v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96-260v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z"></path>
                                                        </svg>
                                                        February 16, 2018
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="blog">
                                    <a href="" class="blog-image">
                                        <img src="./assets/images/blog/first.jpg" alt="">
                                    </a>
                                    <article>
                                        <a class="title" href="">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, quia.
                                        </a>

                                        <div class="blog-review">
                                            <a href="">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore voluptas
                                                officiis modi debitis enim dolorem!...
                                            </a>
                                        </div>

                                        <div class="row margin-tb-20">
                                            <div class="col">
                                                <a class="tag" href="" title="Blog Tag">Engeneering</a>
                                            </div>
                                            <div class="col">
                                                <div class="view-comment">
                                <span class="view" title="total view count"><svg aria-hidden="true" class="has-margin" data-prefix="far" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor" d="M569.354 231.631C512.97 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-102.556 0-192.091-54.701-240-136 44.157-74.933 123.677-127.27 216.162-135.007C273.958 131.078 280 144.83 280 160c0 30.928-25.072 56-56 56s-56-25.072-56-56l.001-.042C157.794 179.043 152 200.844 152 224c0 75.111 60.889 136 136 136s136-60.889 136-136c0-31.031-10.4-59.629-27.895-82.515C451.704 164.638 498.009 205.106 528 256c-47.908 81.299-137.444 136-240 136z"></path></svg> 26
                                </span>
                                                    <span class="comment" title="total comment count">
                                    <svg aria-hidden="true" data-prefix="fas" data-icon="comments" class="has-margin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M416 192c0-88.4-93.1-160-208-160S0 103.6 0 192c0 34.3 14.1 65.9 38 92-13.4 30.2-35.5 54.2-35.8 54.5-2.2 2.3-2.8 5.7-1.5 8.7S4.8 352 8 352c36.6 0 66.9-12.3 88.7-25 32.2 15.7 70.3 25 111.3 25 114.9 0 208-71.6 208-160zm122 220c23.9-26 38-57.7 38-92 0-66.9-53.5-124.2-129.3-148.1.9 6.6 1.3 13.3 1.3 20.1 0 105.9-107.7 192-240 192-10.8 0-21.3-.8-31.7-1.9C207.8 439.6 281.8 480 368 480c41 0 79.1-9.2 111.3-25 21.8 12.7 52.1 25 88.7 25 3.2 0 6.1-1.9 7.3-4.8 1.3-2.9.7-6.3-1.5-8.7-.3-.3-22.4-24.2-35.8-54.5z"></path></svg>26
                                </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <a href="" title="Published Date">
                                                    <div class="date">
                                                        <svg aria-hidden="true" data-prefix="far" data-icon="calendar-alt" class="has-margin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                            <path fill="currentColor" d="M148 288h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm108-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 96v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96-260v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z"></path>
                                                        </svg>
                                                        February 16, 2018
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="blog">
                                    <a href="" class="blog-image">
                                        <img src="./assets/images/blog/first.jpg" alt="">
                                    </a>
                                    <article>
                                        <a class="title" href="">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, quia.
                                        </a>

                                        <div class="blog-review">
                                            <a href="">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore voluptas
                                                officiis modi debitis enim dolorem!...
                                            </a>
                                        </div>

                                        <div class="row margin-tb-20">
                                            <div class="col">
                                                <a class="tag" href="" title="Blog Tag">Engeneering</a>
                                            </div>
                                            <div class="col">
                                                <div class="view-comment">
                                <span class="view" title="total view count"><svg aria-hidden="true" class="has-margin" data-prefix="far" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor" d="M569.354 231.631C512.97 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-102.556 0-192.091-54.701-240-136 44.157-74.933 123.677-127.27 216.162-135.007C273.958 131.078 280 144.83 280 160c0 30.928-25.072 56-56 56s-56-25.072-56-56l.001-.042C157.794 179.043 152 200.844 152 224c0 75.111 60.889 136 136 136s136-60.889 136-136c0-31.031-10.4-59.629-27.895-82.515C451.704 164.638 498.009 205.106 528 256c-47.908 81.299-137.444 136-240 136z"></path></svg> 26
                                </span>
                                                    <span class="comment" title="total comment count">
                                    <svg aria-hidden="true" data-prefix="fas" data-icon="comments" class="has-margin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M416 192c0-88.4-93.1-160-208-160S0 103.6 0 192c0 34.3 14.1 65.9 38 92-13.4 30.2-35.5 54.2-35.8 54.5-2.2 2.3-2.8 5.7-1.5 8.7S4.8 352 8 352c36.6 0 66.9-12.3 88.7-25 32.2 15.7 70.3 25 111.3 25 114.9 0 208-71.6 208-160zm122 220c23.9-26 38-57.7 38-92 0-66.9-53.5-124.2-129.3-148.1.9 6.6 1.3 13.3 1.3 20.1 0 105.9-107.7 192-240 192-10.8 0-21.3-.8-31.7-1.9C207.8 439.6 281.8 480 368 480c41 0 79.1-9.2 111.3-25 21.8 12.7 52.1 25 88.7 25 3.2 0 6.1-1.9 7.3-4.8 1.3-2.9.7-6.3-1.5-8.7-.3-.3-22.4-24.2-35.8-54.5z"></path></svg>26
                                </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <a href="" title="Published Date">
                                                    <div class="date">
                                                        <svg aria-hidden="true" data-prefix="far" data-icon="calendar-alt" class="has-margin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                            <path fill="currentColor" d="M148 288h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm108-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 96v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96-260v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z"></path>
                                                        </svg>
                                                        February 16, 2018
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="blog">
                                    <a href="" class="blog-image">
                                        <img src="./assets/images/blog/first.jpg" alt="">
                                    </a>
                                    <article>
                                        <a class="title" href="">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, quia.
                                        </a>

                                        <div class="blog-review">
                                            <a href="">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore voluptas
                                                officiis modi debitis enim dolorem!...
                                            </a>
                                        </div>

                                        <div class="row margin-tb-20">
                                            <div class="col">
                                                <a class="tag" href="" title="Blog Tag">Engeneering</a>
                                            </div>
                                            <div class="col">
                                                <div class="view-comment">
                                <span class="view" title="total view count"><svg aria-hidden="true" class="has-margin" data-prefix="far" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor" d="M569.354 231.631C512.97 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-102.556 0-192.091-54.701-240-136 44.157-74.933 123.677-127.27 216.162-135.007C273.958 131.078 280 144.83 280 160c0 30.928-25.072 56-56 56s-56-25.072-56-56l.001-.042C157.794 179.043 152 200.844 152 224c0 75.111 60.889 136 136 136s136-60.889 136-136c0-31.031-10.4-59.629-27.895-82.515C451.704 164.638 498.009 205.106 528 256c-47.908 81.299-137.444 136-240 136z"></path></svg> 26
                                </span>
                                                    <span class="comment" title="total comment count">
                                    <svg aria-hidden="true" data-prefix="fas" data-icon="comments" class="has-margin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M416 192c0-88.4-93.1-160-208-160S0 103.6 0 192c0 34.3 14.1 65.9 38 92-13.4 30.2-35.5 54.2-35.8 54.5-2.2 2.3-2.8 5.7-1.5 8.7S4.8 352 8 352c36.6 0 66.9-12.3 88.7-25 32.2 15.7 70.3 25 111.3 25 114.9 0 208-71.6 208-160zm122 220c23.9-26 38-57.7 38-92 0-66.9-53.5-124.2-129.3-148.1.9 6.6 1.3 13.3 1.3 20.1 0 105.9-107.7 192-240 192-10.8 0-21.3-.8-31.7-1.9C207.8 439.6 281.8 480 368 480c41 0 79.1-9.2 111.3-25 21.8 12.7 52.1 25 88.7 25 3.2 0 6.1-1.9 7.3-4.8 1.3-2.9.7-6.3-1.5-8.7-.3-.3-22.4-24.2-35.8-54.5z"></path></svg>26
                                </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <a href="" title="Published Date">
                                                    <div class="date">
                                                        <svg aria-hidden="true" data-prefix="far" data-icon="calendar-alt" class="has-margin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                            <path fill="currentColor" d="M148 288h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm108-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 96v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96-260v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z"></path>
                                                        </svg>
                                                        February 16, 2018
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Related Post -->
            <!-- Blog Pagination -->
            <div class="pagination margin-t-20">
                <ul>
                    <li><a href="" class="prev">Previous blog</a></li>
                    <li><a href="" class="active">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li><a href="" class="next">Next blog</a></li>
                </ul>
            </div>
            <!-- Blog Pagination:END -->
        <!-- Blogs end -->
    </main>
    <!-- Container: END -->
<?php include('./app/resources/layout/footer.php'); ?>