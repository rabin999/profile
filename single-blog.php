<?php include('./app/resources/layout/header.php'); ?>
    <link rel="stylesheet" href="./assets/plugin/highlight/styles/atom-one-dark.css">
    <style>
        .rb-theme-1 {
            background-color: #272626 !important;
        }

        header {
            padding: 20px 20px 0 20px !important;
        }
    </style>
    <!-- Container -->
    <main class="blog-container">
        <!-- Blog -->
        <div class="blogs">
            <div class="row">
                <!-- Blog Item -->
                <div class="blog single">
                    <a href="" class="blog-image">
                        <img src="./assets/images/blog/first.jpg" alt="">
                    </a>
                    <article>
                        <a class="title" href="">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, quia.
                        </a>

                        <div class="row margin-tb-20 short-detail align-center">
                            <div class="col">
                                <a class="tag" href="" title="Blog Tag">Engeneering</a>
                            </div>
                            <div class="col">
                                <div class="view-comment">
                                <span class="view" title="total view count"><svg aria-hidden="true" class="has-margin"
                                                                                 data-prefix="far" data-icon="eye"
                                                                                 role="img"
                                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                                 viewBox="0 0 576 512">
                                            <path fill="currentColor"
                                                  d="M569.354 231.631C512.97 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-102.556 0-192.091-54.701-240-136 44.157-74.933 123.677-127.27 216.162-135.007C273.958 131.078 280 144.83 280 160c0 30.928-25.072 56-56 56s-56-25.072-56-56l.001-.042C157.794 179.043 152 200.844 152 224c0 75.111 60.889 136 136 136s136-60.889 136-136c0-31.031-10.4-59.629-27.895-82.515C451.704 164.638 498.009 205.106 528 256c-47.908 81.299-137.444 136-240 136z"></path></svg> 26
                                </span>
                                    <span class="comment" title="total comment count">
                                    <svg aria-hidden="true" data-prefix="fas" data-icon="comments" class="has-margin"
                                         role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path
                                                fill="currentColor"
                                                d="M416 192c0-88.4-93.1-160-208-160S0 103.6 0 192c0 34.3 14.1 65.9 38 92-13.4 30.2-35.5 54.2-35.8 54.5-2.2 2.3-2.8 5.7-1.5 8.7S4.8 352 8 352c36.6 0 66.9-12.3 88.7-25 32.2 15.7 70.3 25 111.3 25 114.9 0 208-71.6 208-160zm122 220c23.9-26 38-57.7 38-92 0-66.9-53.5-124.2-129.3-148.1.9 6.6 1.3 13.3 1.3 20.1 0 105.9-107.7 192-240 192-10.8 0-21.3-.8-31.7-1.9C207.8 439.6 281.8 480 368 480c41 0 79.1-9.2 111.3-25 21.8 12.7 52.1 25 88.7 25 3.2 0 6.1-1.9 7.3-4.8 1.3-2.9.7-6.3-1.5-8.7-.3-.3-22.4-24.2-35.8-54.5z"></path></svg>26
                                </span>
                                </div>
                            </div>
                            <div class="col switch-mode">
                                <p>Distraction Free Mode</p>
                                <input class="tgl tgl-ios" id="mode-switcher" type="checkbox"/>
                                <label class="tgl-btn" for="mode-switcher"></label>
                            </div>
                            <div class="col published-date">
                                <a href="" title="Published Date">
                                    <div class="date">
                                        <svg aria-hidden="true" data-prefix="far" data-icon="calendar-alt"
                                             class="has-margin" role="img" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 448 512">
                                            <path fill="currentColor"
                                                  d="M148 288h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm108-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 96v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96-260v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z"></path>
                                        </svg>
                                        February 16, 2018
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <div class="follow-me">
                                    <span>Share on : </span>
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank" title="Facebook">
                                                <svg aria-hidden="true" data-prefix="fab" data-icon="facebook-f"
                                                     role="img" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 264 512">
                                                    <path fill="currentColor"
                                                          d="M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" title="Linked In">
                                                <svg aria-hidden="true" data-prefix="fab" data-icon="linkedin-in"
                                                     role="img" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 448 512">
                                                    <path fill="currentColor"
                                                          d="M100.3 480H7.4V180.9h92.9V480zM53.8 140.1C24.1 140.1 0 115.5 0 85.8 0 56.1 24.1 32 53.8 32c29.7 0 53.8 24.1 53.8 53.8 0 29.7-24.1 54.3-53.8 54.3zM448 480h-92.7V334.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V480h-92.8V180.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V480z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" title="Google Plus">
                                                <svg aria-hidden="true" data-prefix="fab" data-icon="google-plus-g"
                                                     role="img" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 640 512">
                                                    <path fill="currentColor"
                                                          d="M386.061 228.496c1.834 9.692 3.143 19.384 3.143 31.956C389.204 370.205 315.599 448 204.8 448c-106.084 0-192-85.915-192-192s85.916-192 192-192c51.864 0 95.083 18.859 128.611 50.292l-52.126 50.03c-14.145-13.621-39.028-29.599-76.485-29.599-65.484 0-118.92 54.221-118.92 121.277 0 67.056 53.436 121.277 118.92 121.277 75.961 0 104.513-54.745 108.965-82.773H204.8v-66.009h181.261zm185.406 6.437V179.2h-56.001v55.733h-55.733v56.001h55.733v55.733h56.001v-55.733H627.2v-56.001h-55.733z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" title="Google Plus">
                                                <svg aria-hidden="true" data-prefix="fab" data-icon="medium-m"
                                                     role="img" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 512 512">
                                                    <path fill="currentColor"
                                                          d="M71.5 142.3c.6-5.9-1.7-11.8-6.1-15.8L20.3 72.1V64h140.2l108.4 237.7L364.2 64h133.7v8.1l-38.6 37c-3.3 2.5-5 6.7-4.3 10.8v272c-.7 4.1 1 8.3 4.3 10.8l37.7 37v8.1H307.3v-8.1l39.1-37.9c3.8-3.8 3.8-5 3.8-10.8V171.2L241.5 447.1h-14.7L100.4 171.2v184.9c-1.1 7.8 1.5 15.6 7 21.2l50.8 61.6v8.1h-144v-8L65 377.3c5.4-5.6 7.9-13.5 6.5-21.2V142.3z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="blog-detail">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam et nunc quis elit sagittis
                            facilisis. Nullam feugiat ornare arcu, ut consequat ipsum. Sed arcu justo, laoreet a mauris
                            ut, efficitur eleifend mi. Proin tempor nibh purus, at cursus tortor suscipit quis. Sed
                            vestibulum risus ac nisl ullamcorper dignissim. Sed vulputate auctor orci et tempor.
                            Maecenas elementum massa facilisis sapien bibendum, quis lacinia justo placerat. Fusce
                            commodo ligula a dolor gravida imperdiet. Donec aliquet vulputate nibh non vestibulum. Nunc
                            eu odio quam. Aliquam consequat, nibh sit amet dignissim porttitor, erat magna dignissim
                            justo, vitae commodo nulla diam a nulla.

                            <br><br>

                            <img src="https://notes.shichao.io/unp/figure_2.4.png" alt="TCP/IP Request Cycle" class="popup">
                            <br><br>

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam et nunc quis elit sagittis
                            facilisis. Nullam feugiat ornare arcu, ut consequat ipsum. Sed arcu justo, laoreet a mauris
                            ut, efficitur eleifend mi. Proin tempor nibh purus, at cursus tortor suscipit quis. Sed
                            vestibulum risus ac nisl ullamcorper dignissim. Sed vulputate auctor orci et tempor.
                            Maecenas elementum massa facilisis sapien bibendum, quis lacinia justo placerat. Fusce
                            commodo ligula a dolor gravida imperdiet. Donec aliquet vulputate nibh non vestibulum. Nunc
                            eu odio quam. Aliquam consequat, nibh sit amet dignissim porttitor, erat magna dignissim
                            justo, vitae commodo nulla diam a nulla.
                            <br><br>
                            <img src="http://veithen.github.io/2014/01/01/tcp-state-diagram.png" alt="">
                            <br><br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam et nunc quis elit sagittis
                            facilisis. Nullam feugiat ornare arcu, ut consequat ipsum. Sed arcu justo, laoreet a mauris
                            ut, efficitur eleifend mi. Proin tempor nibh purus, at cursus tortor suscipit quis. Sed
                            vestibulum risus ac nisl ullamcorper dignissim. Sed vulputate auctor orci et tempor.
                            Maecenas elementum massa facilisis sapien bibendum, quis lacinia justo placerat. Fusce
                            commodo ligula a dolor gravida imperdiet. Donec aliquet vulputate nibh non vestibulum. Nunc
                            eu odio quam. Aliquam consequat, nibh sit amet dignissim porttitor, erat magna dignissim
                            justo, vitae commodo nulla diam a nulla.

                            <br><br>
                            Nunc interdum lectus non tellus dapibus, sit amet feugiat libero tristique. Duis tristique
                            faucibus nisl at molestie. Praesent et orci pellentesque mauris feugiat semper. Pellentesque
                            auctor lorem quam, sed mattis massa tristique a. Sed eu molestie ex, eget maximus magna.
                            Donec nec ultrices mi. Duis porttitor bibendum iaculis. Vivamus risus ex, tristique in lacus
                            ut, finibus cursus mi. Proin sit amet convallis est, id luctus metus. Nullam finibus aliquam
                            nibh, sed vestibulum nisl lacinia nec. Morbi lacinia nisl volutpat ligula dapibus sodales.
                            Praesent tincidunt rhoncus est ac ultricies. Suspendisse vel gravida sem. Ut nunc quam,
                            accumsan sed tellus eu, convallis porttitor elit.
                            <br><br>
                            <img src="http://www.websiteoptimization.com/secrets/metrics/10-21-http-request.png" alt="">
                            <br><br>
                            Integer ac pellentesque quam. Sed ultrices urna id dolor lobortis feugiat ut eget dolor.
                            Morbi sed augue sed arcu consectetur aliquam sed eu ligula. Nam hendrerit augue dui, a
                            interdum nisl dignissim sit amet. Aliquam mauris augue, lacinia at mollis eget, tempor vel
                            neque. Donec quam arcu, suscipit aliquet urna in, tincidunt vulputate sem. Ut ut sagittis
                            dolor. Duis congue nulla sed nulla pharetra, vitae pharetra mauris mattis. Phasellus vitae
                            tempus lectus. Maecenas mollis vel enim id tincidunt. Proin id arcu eu est placerat faucibus
                            in eget ex. Suspendisse potenti.
                            <br><br>
                            Praesent accumsan, lacus a luctus aliquam, risus ligula luctus ante, eu tristique magna
                            ligula a ligula. Donec tincidunt molestie rhoncus. Vestibulum ante ipsum primis in faucibus
                            orci luctus et ultrices posuere cubilia Curae; Nulla gravida, nunc quis tincidunt luctus,
                            lorem massa ullamcorper est, quis aliquet metus erat eu augue. Duis lobortis elit at erat
                            vulputate, quis eleifend enim elementum. Duis sit amet metus malesuada sapien tempor
                            lobortis. Vestibulum posuere eros vitae iaculis accumsan.
                            <br><br>
                            <pre>
                                <code class="javascript">
                                    function $initHighlight(block, cls) {
                                      try {
                                        if (cls.search(/\bno\-highlight\b/) != -1)
                                          return process(block, true, 0x0F) +
                                                 ` class="${cls}"`;
                                      } catch (e) {
                                        /* handle exception */
                                      }
                                      for (var i = 0 / 2; i < classes.length; i++) {
                                        if (checkCondition(classes[i]) === undefined)
                                          console.log('undefined');
                                      }
                                    }
                                    export  $initHighlight;
                                </code>
                            </pre>
                            <br><br>
                            Curabitur pulvinar rutrum risus, id sollicitudin lorem sagittis eu. Donec pulvinar
                            consectetur felis, eu viverra justo. Duis congue dolor imperdiet, congue nisl posuere,
                            lacinia diam. Sed ut velit cursus, pretium sem eu, dapibus mauris. Proin ac erat leo. Sed id
                            quam dui. Aenean elementum sollicitudin magna, in molestie dui cursus at. Mauris leo velit,
                            commodo eget tristique sodales, vestibulum lobortis nunc. Etiam eros turpis, tempus non eros
                            ac, scelerisque faucibus dui. Curabitur laoreet pharetra egestas. Nullam dignissim facilisis
                            dolor. Aliquam pellentesque tristique augue dignissim ullamcorper. Fusce placerat metus quis
                            vestibulum euismod. Sed vestibulum risus sit amet ipsum placerat consectetur.
                            <br><br>
                            Aenean sed vestibulum quam. Phasellus gravida mi sed ex pharetra maximus. Donec sed arcu sed
                            diam posuere tristique. In pulvinar libero tellus. Duis luctus arcu lorem, eget fermentum
                            lacus posuere pulvinar. Integer varius eget diam sit amet volutpat. Cras ut eros ligula. In
                            condimentum efficitur nisl id porta.
                            <br><br>
                            <img src="./assets/images/blog-test.png" alt="">
                            <br><br>
                            Aenean et auctor orci, eu commodo arcu. Nulla sed consequat urna. Quisque lobortis libero
                            eget quam vehicula sollicitudin. Class aptent taciti sociosqu ad litora torquent per conubia
                            nostra, per inceptos himenaeos. Duis vitae arcu diam. Sed erat arcu, finibus vel rhoncus in,
                            blandit nec leo. Ut scelerisque semper ligula, et porttitor lorem ullamcorper ut. Sed
                            faucibus semper lectus, egestas venenatis dui pulvinar eu. Vestibulum facilisis erat eget
                            volutpat porta. Cras facilisis felis et maximus auctor. Pellentesque quis elit elit.
                            Vestibulum ac bibendum ipsum. In accumsan lobortis euismod.

                            <!-- <code>
                                <div class="header">
                                    <p>439 Lines</p>
                                </div>
                                <di class="code-preview"></div>
                            </code> -->
                        </div>
                    </article>
                </div>
                <!-- Blog Item:END -->
            </div>

            <!-- Prev and next post -->
            <div class="prev-next-post">
                <div class="row">
                    <div class="col">
                        <div class="prev-post">
                            <button>
                                <span class="tooltip left">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, maiores!</span>
                                <i class="fa fa-arrow-left" aria-hidden="true"></i> Prev Post
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="next-post">
                            <button>
                                <span class="tooltip right">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, maiores!</span>
                                Next Post <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Prev and next post:END -->

            <!-- Related Post -->
            <div class="related-post">
                <h3 class="header">Related Posts</h3>
                <div class="blogs grid">
                    <div class="row">
                        <div class="col-auto">
                            <div class="blog">
                                <a href="" class="blog-image">
                                    <img src="./assets/images/blog/first.jpg"
                                         alt="">
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
                                <span class="view" title="total view count"><svg aria-hidden="true" class="has-margin"
                                                                                 data-prefix="far" data-icon="eye"
                                                                                 role="img"
                                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                                 viewBox="0 0 576 512">
                                            <path fill="currentColor"
                                                  d="M569.354 231.631C512.97 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-102.556 0-192.091-54.701-240-136 44.157-74.933 123.677-127.27 216.162-135.007C273.958 131.078 280 144.83 280 160c0 30.928-25.072 56-56 56s-56-25.072-56-56l.001-.042C157.794 179.043 152 200.844 152 224c0 75.111 60.889 136 136 136s136-60.889 136-136c0-31.031-10.4-59.629-27.895-82.515C451.704 164.638 498.009 205.106 528 256c-47.908 81.299-137.444 136-240 136z"></path></svg> 26
                                </span>
                                                <span class="comment" title="total comment count">
                                    <svg aria-hidden="true" data-prefix="fas" data-icon="comments" class="has-margin"
                                         role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path
                                                fill="currentColor"
                                                d="M416 192c0-88.4-93.1-160-208-160S0 103.6 0 192c0 34.3 14.1 65.9 38 92-13.4 30.2-35.5 54.2-35.8 54.5-2.2 2.3-2.8 5.7-1.5 8.7S4.8 352 8 352c36.6 0 66.9-12.3 88.7-25 32.2 15.7 70.3 25 111.3 25 114.9 0 208-71.6 208-160zm122 220c23.9-26 38-57.7 38-92 0-66.9-53.5-124.2-129.3-148.1.9 6.6 1.3 13.3 1.3 20.1 0 105.9-107.7 192-240 192-10.8 0-21.3-.8-31.7-1.9C207.8 439.6 281.8 480 368 480c41 0 79.1-9.2 111.3-25 21.8 12.7 52.1 25 88.7 25 3.2 0 6.1-1.9 7.3-4.8 1.3-2.9.7-6.3-1.5-8.7-.3-.3-22.4-24.2-35.8-54.5z"></path></svg>26
                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="" title="Published Date">
                                                <div class="date">
                                                    <svg aria-hidden="true" data-prefix="far" data-icon="calendar-alt"
                                                         class="has-margin" role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                              d="M148 288h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm108-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 96v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96-260v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z"></path>
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
                                    <img src="./assets/images/blog/first.jpg"
                                         alt="">
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
                                <span class="view" title="total view count"><svg aria-hidden="true" class="has-margin"
                                                                                 data-prefix="far" data-icon="eye"
                                                                                 role="img"
                                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                                 viewBox="0 0 576 512">
                                            <path fill="currentColor"
                                                  d="M569.354 231.631C512.97 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-102.556 0-192.091-54.701-240-136 44.157-74.933 123.677-127.27 216.162-135.007C273.958 131.078 280 144.83 280 160c0 30.928-25.072 56-56 56s-56-25.072-56-56l.001-.042C157.794 179.043 152 200.844 152 224c0 75.111 60.889 136 136 136s136-60.889 136-136c0-31.031-10.4-59.629-27.895-82.515C451.704 164.638 498.009 205.106 528 256c-47.908 81.299-137.444 136-240 136z"></path></svg> 26
                                </span>
                                                <span class="comment" title="total comment count">
                                    <svg aria-hidden="true" data-prefix="fas" data-icon="comments" class="has-margin"
                                         role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path
                                                fill="currentColor"
                                                d="M416 192c0-88.4-93.1-160-208-160S0 103.6 0 192c0 34.3 14.1 65.9 38 92-13.4 30.2-35.5 54.2-35.8 54.5-2.2 2.3-2.8 5.7-1.5 8.7S4.8 352 8 352c36.6 0 66.9-12.3 88.7-25 32.2 15.7 70.3 25 111.3 25 114.9 0 208-71.6 208-160zm122 220c23.9-26 38-57.7 38-92 0-66.9-53.5-124.2-129.3-148.1.9 6.6 1.3 13.3 1.3 20.1 0 105.9-107.7 192-240 192-10.8 0-21.3-.8-31.7-1.9C207.8 439.6 281.8 480 368 480c41 0 79.1-9.2 111.3-25 21.8 12.7 52.1 25 88.7 25 3.2 0 6.1-1.9 7.3-4.8 1.3-2.9.7-6.3-1.5-8.7-.3-.3-22.4-24.2-35.8-54.5z"></path></svg>26
                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="" title="Published Date">
                                                <div class="date">
                                                    <svg aria-hidden="true" data-prefix="far" data-icon="calendar-alt"
                                                         class="has-margin" role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                              d="M148 288h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm108-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 96v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96-260v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z"></path>
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
                                    <img src="./assets/images/blog/first.jpg"
                                         alt="">
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
                                <span class="view" title="total view count"><svg aria-hidden="true" class="has-margin"
                                                                                 data-prefix="far" data-icon="eye"
                                                                                 role="img"
                                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                                 viewBox="0 0 576 512">
                                            <path fill="currentColor"
                                                  d="M569.354 231.631C512.97 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-102.556 0-192.091-54.701-240-136 44.157-74.933 123.677-127.27 216.162-135.007C273.958 131.078 280 144.83 280 160c0 30.928-25.072 56-56 56s-56-25.072-56-56l.001-.042C157.794 179.043 152 200.844 152 224c0 75.111 60.889 136 136 136s136-60.889 136-136c0-31.031-10.4-59.629-27.895-82.515C451.704 164.638 498.009 205.106 528 256c-47.908 81.299-137.444 136-240 136z"></path></svg> 26
                                </span>
                                                <span class="comment" title="total comment count">
                                    <svg aria-hidden="true" data-prefix="fas" data-icon="comments" class="has-margin"
                                         role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path
                                                fill="currentColor"
                                                d="M416 192c0-88.4-93.1-160-208-160S0 103.6 0 192c0 34.3 14.1 65.9 38 92-13.4 30.2-35.5 54.2-35.8 54.5-2.2 2.3-2.8 5.7-1.5 8.7S4.8 352 8 352c36.6 0 66.9-12.3 88.7-25 32.2 15.7 70.3 25 111.3 25 114.9 0 208-71.6 208-160zm122 220c23.9-26 38-57.7 38-92 0-66.9-53.5-124.2-129.3-148.1.9 6.6 1.3 13.3 1.3 20.1 0 105.9-107.7 192-240 192-10.8 0-21.3-.8-31.7-1.9C207.8 439.6 281.8 480 368 480c41 0 79.1-9.2 111.3-25 21.8 12.7 52.1 25 88.7 25 3.2 0 6.1-1.9 7.3-4.8 1.3-2.9.7-6.3-1.5-8.7-.3-.3-22.4-24.2-35.8-54.5z"></path></svg>26
                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="" title="Published Date">
                                                <div class="date">
                                                    <svg aria-hidden="true" data-prefix="far" data-icon="calendar-alt"
                                                         class="has-margin" role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                              d="M148 288h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm108-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 96v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96-260v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z"></path>
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
                                    <img src="./assets/images/blog/first.jpg"
                                         alt="">
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
                                <span class="view" title="total view count"><svg aria-hidden="true" class="has-margin"
                                                                                 data-prefix="far" data-icon="eye"
                                                                                 role="img"
                                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                                 viewBox="0 0 576 512">
                                            <path fill="currentColor"
                                                  d="M569.354 231.631C512.97 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-102.556 0-192.091-54.701-240-136 44.157-74.933 123.677-127.27 216.162-135.007C273.958 131.078 280 144.83 280 160c0 30.928-25.072 56-56 56s-56-25.072-56-56l.001-.042C157.794 179.043 152 200.844 152 224c0 75.111 60.889 136 136 136s136-60.889 136-136c0-31.031-10.4-59.629-27.895-82.515C451.704 164.638 498.009 205.106 528 256c-47.908 81.299-137.444 136-240 136z"></path></svg> 26
                                </span>
                                                <span class="comment" title="total comment count">
                                    <svg aria-hidden="true" data-prefix="fas" data-icon="comments" class="has-margin"
                                         role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path
                                                fill="currentColor"
                                                d="M416 192c0-88.4-93.1-160-208-160S0 103.6 0 192c0 34.3 14.1 65.9 38 92-13.4 30.2-35.5 54.2-35.8 54.5-2.2 2.3-2.8 5.7-1.5 8.7S4.8 352 8 352c36.6 0 66.9-12.3 88.7-25 32.2 15.7 70.3 25 111.3 25 114.9 0 208-71.6 208-160zm122 220c23.9-26 38-57.7 38-92 0-66.9-53.5-124.2-129.3-148.1.9 6.6 1.3 13.3 1.3 20.1 0 105.9-107.7 192-240 192-10.8 0-21.3-.8-31.7-1.9C207.8 439.6 281.8 480 368 480c41 0 79.1-9.2 111.3-25 21.8 12.7 52.1 25 88.7 25 3.2 0 6.1-1.9 7.3-4.8 1.3-2.9.7-6.3-1.5-8.7-.3-.3-22.4-24.2-35.8-54.5z"></path></svg>26
                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="" title="Published Date">
                                                <div class="date">
                                                    <svg aria-hidden="true" data-prefix="far" data-icon="calendar-alt"
                                                         class="has-margin" role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                              d="M148 288h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm108-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 96v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96-260v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z"></path>
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
            <!-- Related Post -->
        </div>
        <!-- Blogs end -->

        <!-- Right Sidebar -->
        <aside class="summary">
            <!-- Most Reviewed -->
            <div class="most-viewed">
                <h2 class="header">Most Viewed</h2>
                <div class="blogs">
                    <div class="blog">
                        <a href="" class="blog-image">
                            <img src="./assets/images/blog/first.jpg" alt="">
                        </a>
                        <article>
                            <a class="title" href="">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, quia.
                            </a>

                            <div class="row margin-tb-20">
                                <div class="col">
                                    <a class="tag" href="" title="Blog Tag">Engeneering</a>
                                </div>
                                <div class="col">
                                    <div class="view-comment">
                                <span class="view" title="total view count">
                                    <svg aria-hidden="true" data-prefix="far" data-icon="eye" class="has-margin"
                                         role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor"
                                                  d="M569.354 231.631C512.97 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-102.556 0-192.091-54.701-240-136 44.157-74.933 123.677-127.27 216.162-135.007C273.958 131.078 280 144.83 280 160c0 30.928-25.072 56-56 56s-56-25.072-56-56l.001-.042C157.794 179.043 152 200.844 152 224c0 75.111 60.889 136 136 136s136-60.889 136-136c0-31.031-10.4-59.629-27.895-82.515C451.704 164.638 498.009 205.106 528 256c-47.908 81.299-137.444 136-240 136z"></path></svg>28
                                </span>
                                        <span class="comment" title="total comment count">
                                    <svg aria-hidden="true" data-prefix="fas" data-icon="comments" class="has-margin"
                                         role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="currentColor"
                                                          d="M416 192c0-88.4-93.1-160-208-160S0 103.6 0 192c0 34.3 14.1 65.9 38 92-13.4 30.2-35.5 54.2-35.8 54.5-2.2 2.3-2.8 5.7-1.5 8.7S4.8 352 8 352c36.6 0 66.9-12.3 88.7-25 32.2 15.7 70.3 25 111.3 25 114.9 0 208-71.6 208-160zm122 220c23.9-26 38-57.7 38-92 0-66.9-53.5-124.2-129.3-148.1.9 6.6 1.3 13.3 1.3 20.1 0 105.9-107.7 192-240 192-10.8 0-21.3-.8-31.7-1.9C207.8 439.6 281.8 480 368 480c41 0 79.1-9.2 111.3-25 21.8 12.7 52.1 25 88.7 25 3.2 0 6.1-1.9 7.3-4.8 1.3-2.9.7-6.3-1.5-8.7-.3-.3-22.4-24.2-35.8-54.5z"></path></svg> 26
                                </span>
                                    </div>
                                </div>
                                <div class="col published-date">
                                    <a href="" title="Published Date">
                                        <div class="date">
                                            <svg aria-hidden="true" data-prefix="far" data-icon="calendar-alt"
                                                 class="has-margin" role="img" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 0 448 512">
                                                <path fill="currentColor"
                                                      d="M148 288h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm108-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 96v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96-260v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z"></path>
                                            </svg>
                                            February 16, 2018
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="blog">
                        <a href="" class="blog-image">
                            <img src="./assets/images/blog/first.jpg" alt="">
                        </a>
                        <article>
                            <a class="title" href="">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, quia.
                            </a>

                            <div class="row margin-tb-20">
                                <div class="col">
                                    <a class="tag" href="" title="Blog Tag">Engeneering</a>
                                </div>
                                <div class="col">
                                    <div class="view-comment">
										<span class="view" title="total view count">
											<svg aria-hidden="true" data-prefix="far" data-icon="eye" class="has-margin"
                                                 role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor"
                                                  d="M569.354 231.631C512.97 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-102.556 0-192.091-54.701-240-136 44.157-74.933 123.677-127.27 216.162-135.007C273.958 131.078 280 144.83 280 160c0 30.928-25.072 56-56 56s-56-25.072-56-56l.001-.042C157.794 179.043 152 200.844 152 224c0 75.111 60.889 136 136 136s136-60.889 136-136c0-31.031-10.4-59.629-27.895-82.515C451.704 164.638 498.009 205.106 528 256c-47.908 81.299-137.444 136-240 136z"></path></svg>28
										</span>
                                        <span class="comment" title="total comment count">
											<svg aria-hidden="true" data-prefix="fas" data-icon="comments"
                                                 class="has-margin" role="img" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 0 576 512">
                                                    <path fill="currentColor"
                                                          d="M416 192c0-88.4-93.1-160-208-160S0 103.6 0 192c0 34.3 14.1 65.9 38 92-13.4 30.2-35.5 54.2-35.8 54.5-2.2 2.3-2.8 5.7-1.5 8.7S4.8 352 8 352c36.6 0 66.9-12.3 88.7-25 32.2 15.7 70.3 25 111.3 25 114.9 0 208-71.6 208-160zm122 220c23.9-26 38-57.7 38-92 0-66.9-53.5-124.2-129.3-148.1.9 6.6 1.3 13.3 1.3 20.1 0 105.9-107.7 192-240 192-10.8 0-21.3-.8-31.7-1.9C207.8 439.6 281.8 480 368 480c41 0 79.1-9.2 111.3-25 21.8 12.7 52.1 25 88.7 25 3.2 0 6.1-1.9 7.3-4.8 1.3-2.9.7-6.3-1.5-8.7-.3-.3-22.4-24.2-35.8-54.5z"></path></svg> 26
										</span>
                                    </div>
                                </div>
                                <div class="col published-date">
                                    <a href="" title="Published Date">
                                        <div class="date">
                                            <svg aria-hidden="true" data-prefix="far" data-icon="calendar-alt"
                                                 class="has-margin" role="img" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 0 448 512">
                                                <path fill="currentColor"
                                                      d="M148 288h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm108-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 96v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96-260v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z"></path>
                                            </svg>
                                            February 16, 2018
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="blog">
                        <a href="" class="blog-image">
                            <img src="./assets/images/blog/first.jpg" alt="">
                        </a>
                        <article>
                            <a class="title" href="">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, quia.
                            </a>

                            <div class="row margin-tb-20">
                                <div class="col">
                                    <a class="tag" href="" title="Blog Tag">Engeneering</a>
                                </div>
                                <div class="col">
                                    <div class="view-comment">
										<span class="view" title="total view count">
											<svg aria-hidden="true" data-prefix="far" data-icon="eye" class="has-margin"
                                                 role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor"
                                                  d="M569.354 231.631C512.97 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-102.556 0-192.091-54.701-240-136 44.157-74.933 123.677-127.27 216.162-135.007C273.958 131.078 280 144.83 280 160c0 30.928-25.072 56-56 56s-56-25.072-56-56l.001-.042C157.794 179.043 152 200.844 152 224c0 75.111 60.889 136 136 136s136-60.889 136-136c0-31.031-10.4-59.629-27.895-82.515C451.704 164.638 498.009 205.106 528 256c-47.908 81.299-137.444 136-240 136z"></path></svg>28
										</span>
                                        <span class="comment" title="total comment count">
											<svg aria-hidden="true" data-prefix="fas" data-icon="comments"
                                                 class="has-margin" role="img" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 0 576 512">
                                                    <path fill="currentColor"
                                                          d="M416 192c0-88.4-93.1-160-208-160S0 103.6 0 192c0 34.3 14.1 65.9 38 92-13.4 30.2-35.5 54.2-35.8 54.5-2.2 2.3-2.8 5.7-1.5 8.7S4.8 352 8 352c36.6 0 66.9-12.3 88.7-25 32.2 15.7 70.3 25 111.3 25 114.9 0 208-71.6 208-160zm122 220c23.9-26 38-57.7 38-92 0-66.9-53.5-124.2-129.3-148.1.9 6.6 1.3 13.3 1.3 20.1 0 105.9-107.7 192-240 192-10.8 0-21.3-.8-31.7-1.9C207.8 439.6 281.8 480 368 480c41 0 79.1-9.2 111.3-25 21.8 12.7 52.1 25 88.7 25 3.2 0 6.1-1.9 7.3-4.8 1.3-2.9.7-6.3-1.5-8.7-.3-.3-22.4-24.2-35.8-54.5z"></path></svg> 26
										</span>
                                    </div>
                                </div>
                                <div class="col published-date">
                                    <a href="" title="Published Date">
                                        <div class="date">
                                            <svg aria-hidden="true" data-prefix="far" data-icon="calendar-alt"
                                                 class="has-margin" role="img" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 0 448 512">
                                                <path fill="currentColor"
                                                      d="M148 288h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm108-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 96v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96-260v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z"></path>
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
            <!-- Category -->
            <div class="categories">
                <h2 class="header">Category</h2>
                <ul>
                    <li class="category"><a href="">Data Structure</a></li>
                    <li class="category"><a href="">Algorithm</a></li>
                    <li class="category"><a href="">Computer Science</a></li>
                    <li class="category"><a href="">JavaScript</a></li>
                    <li class="category"><a href="">Java</a></li>
                    <li class="category"><a href="">PHP</a></li>
                    <li class="category"><a href="">Python</a></li>
                    <li class="category"><a href="">Dreams</a></li>
                    <li class="category"><a href="">Entrepreneurship</a></li>
                </ul>
            </div>


            <!-- Tags -->
            <div class="tags">
                <h2 class="header">Tags</h2>
                <ul>
                    <li class="tag"><a href="">Science</a></li>
                    <li class="tag"><a href="">Computer</a></li>
                    <li class="tag"><a href="">JavaScript</a></li>
                    <li class="tag"><a href="">Java</a></li>
                    <li class="tag"><a href="">PHP</a></li>
                    <li class="tag"><a href="">Python</a></li>
                    <li class="tag"><a href="">Dreams</a></li>
                    <li class="tag"><a href="">Entrepreneurship</a></li>
                </ul>
            </div>

            <!-- Archive -->
            <div class="archives">
                <h2 class="header">Archives</h2>
                <ul>
                    <li class="tag"><a href="">Science
                            <small>29 posts</small>
                        </a></li>
                    <li class="tag"><a href="">Science
                            <small>29 posts</small>
                        </a></li>
                    <li class="tag"><a href="">Science
                            <small>29 posts</small>
                        </a></li>
                    <li class="tag"><a href="">Science
                            <small>29 posts</small>
                        </a></li>
                </ul>
            </div>

            <!-- Get Notified -->
            <div class="get-notified">
                <h2>
                    Get Notified
                </h2>
                <p>
                    Be the first to know when there are new reasearch related to Development, Design, Web
                    Performance, Tips and Tricks and inspirational articles on Blog.
                </p>
                <div class="subscription-form">
                    <div class="rb-form">
                        <input type="text" placeholder="Name">
                        <input type="email" placeholder="email">
                        <div class="subscribe-btn">
                            <button>Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Get Notified:END -->
        </aside>

    </main>

    <!-- Image Modal -->
    <div id="imgModal" class="modal">
        <span class="close" id="closeImgModal">&times;</span>
        <img class="modal-content" id="imgContainer">
        <div id="caption" class="caption"></div>
    </div>
    <!-- Container: END -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
    <script src="./assets/plugin/highlight/highlight.pack.js"></script>
    <?php include('./app/resources/layout/footer.php'); ?>
    <script>
        rb(document).ready(function(){
            hljs.initHighlighting();

            // Clipboard
            new ClipboardJS('.clipboard-btn');
        });
    </script>

