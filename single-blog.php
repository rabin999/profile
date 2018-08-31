<?php include('./app/resources/layout/header.php'); ?>
<link rel="stylesheet" href="./assets/plugin/highlight/styles/atom-one-dark.css">
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
                                        <a href="#" target="_blank" title="Facebook" class="facebook">
                                            <svg enable-background="new 0 0 48 48" id="Layer_1" version="1.1"
                                                 viewBox="0 0 48 48" xml:space="preserve"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"><circle cx="24" cy="24"
                                                                                                    fill="#4E71A8"
                                                                                                    r="24"/>
                                                <path d="M29.9,19.5h-4v-2.6c0-1,0.7-1.2,1.1-1.2c0.5,0,2.8,0,2.8,0v-4.4l-3.9,0c-4.4,0-5.3,3.3-5.3,5.3v2.9h-2.5V24  h2.5c0,5.8,0,12.7,0,12.7h5.3c0,0,0-7,0-12.7h3.6L29.9,19.5z"
                                                      fill="#FFFFFF"/></svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" title="Linked In" class="linkedIn">
                                            <svg enable-background="new 0 0 48 48" id="Layer_1" version="1.1"
                                                 viewBox="0 0 48 48" xml:space="preserve"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"><circle cx="24" cy="24"
                                                                                                    fill="#1686B0"
                                                                                                    r="24"/>
                                                <path d="M17.4,34.9h-4.6V20.1h4.6V34.9z M14.9,18.2L14.9,18.2c-1.7,0-2.8-1.1-2.8-2.6c0-1.5,1.1-2.6,2.8-2.6  c1.7,0,2.8,1.1,2.8,2.6C17.7,17.1,16.7,18.2,14.9,18.2z M35.9,34.9h-5.3v-7.7c0-2-0.8-3.4-2.6-3.4c-1.4,0-2.1,0.9-2.5,1.8  c-0.1,0.3-0.1,0.8-0.1,1.2v8h-5.2c0,0,0.1-13.6,0-14.8h5.2v2.3c0.3-1,2-2.5,4.6-2.5c3.3,0,5.9,2.1,5.9,6.7V34.9z"
                                                      fill="#FFFFFF"/></svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" title="Google Plus" class="google-plus">
                                            <svg enable-background="new 0 0 48 48" id="Layer_1" version="1.1"
                                                 viewBox="0 0 48 48" xml:space="preserve"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"><circle cx="24" cy="24"
                                                                                                    fill="#E3411F"
                                                                                                    r="24"/>
                                                <g>
                                                    <path d="M24.8,25.8c-0.7-0.5-2-1.7-2-2.3c0-0.8,0.2-1.2,1.4-2.2c1.2-1,2.1-2.3,2.1-3.9c0-1.9-0.8-3.7-2.4-4.4h2.4   l1.7-1.2h-7.5c-3.4,0-6.6,2.6-6.6,5.5c0,3,2.3,5.5,5.7,5.5c0.2,0,0.5,0,0.7,0c-0.2,0.4-0.4,0.9-0.4,1.4c0,0.8,0.5,1.5,1,2.1   c-0.4,0-0.9,0-1.3,0c-4.2,0-7.4,2.7-7.4,5.4c0,2.7,3.5,4.4,7.7,4.4c4.8,0,7.4-2.7,7.4-5.4C27.4,28.6,26.8,27.2,24.8,25.8z    M20.7,22.1c-1.9-0.1-3.8-2.2-4.1-4.7c-0.3-2.6,1-4.5,2.9-4.4c1.9,0.1,3.8,2.1,4.1,4.7C24,20.1,22.7,22.1,20.7,22.1z M20,35   c-2.9,0-5-1.8-5-4c0-2.2,2.6-4,5.5-3.9c0.7,0,1.3,0.1,1.9,0.3c1.6,1.1,2.7,1.7,3,3c0.1,0.3,0.1,0.5,0.1,0.8C25.5,33.2,24,35,20,35z   "
                                                          fill="#FFFFFF"/>
                                                    <polygon fill="#FFFFFF"
                                                             points="32.8,22.3 32.8,19.4 30.4,19.4 30.4,22.3 27.5,22.3 27.5,24.6 30.4,24.6 30.4,27.6 32.8,27.6    32.8,24.6 35.7,24.6 35.7,22.3  "/>
                                                </g></svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" title="Google Plus" class="medium">
                                            <svg enable-background="new 0 0 100 100" height="100px" id="Layer_1"
                                                 version="1.1" viewBox="0 0 100 100" width="100px" xml:space="preserve"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"><g>
                                                    <circle cx="50" cy="50" fill="#00E56B" r="45"/>
                                                    <g id="XMLID_110_">
                                                        <g id="XMLID_111_">
                                                            <path d="M43.031,66.248c0,1.186-0.868,1.723-1.93,1.191l-10.849-5.424     c-0.636-0.318-1.158-1.16-1.158-1.873V33.549c0-0.949,0.696-1.379,1.546-0.955l12.316,6.158c0.046,0.025,0.074,0.07,0.074,0.123     V66.248z"
                                                                  fill="#FFFFFF" id="XMLID_112_"/>
                                                            <g>
                                                                <polygon fill="#FFFFFF"
                                                                         points="43.975,40.523 43.975,55.035 56.873,61.484     "/>
                                                            </g>
                                                            <g>
                                                                <path d="M70.753,38.809l-12.627-6.312c-0.638-0.318-1.463-0.082-1.837,0.523l-7.965,12.941l9.114,14.809      l13.376-21.738C70.864,38.953,70.835,38.85,70.753,38.809z"
                                                                      fill="#FFFFFF"/>
                                                            </g>
                                                            <g>
                                                                <polygon fill="#FFFFFF"
                                                                         points="56.969,61.291 56.969,61.436 57.099,61.502     "/>
                                                                <path d="M57.896,61.9l10.693,5.348c1.277,0.639,2.314,0.191,2.314-1V40.762L57.896,61.9z"
                                                                      fill="#FFFFFF"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g></svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" title="Google Plus" class="twitter">
                                            <svg enable-background="new 0 0 48 48" id="Layer_1" version="1.1"
                                                 viewBox="0 0 48 48" xml:space="preserve"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"><circle cx="24" cy="24"
                                                                                                    fill="#1CB7EB"
                                                                                                    r="24"/>
                                                <g>
                                                    <g>
                                                        <path d="M36.8,15.4c-0.9,0.5-2,0.8-3,0.9c1.1-0.7,1.9-1.8,2.3-3.1c-1,0.6-2.1,1.1-3.4,1.4c-1-1.1-2.3-1.8-3.8-1.8    c-2.9,0-5.3,2.5-5.3,5.7c0,0.4,0,0.9,0.1,1.3c-4.4-0.2-8.3-2.5-10.9-5.9c-0.5,0.8-0.7,1.8-0.7,2.9c0,2,0.9,3.7,2.3,4.7    c-0.9,0-1.7-0.3-2.4-0.7c0,0,0,0.1,0,0.1c0,2.7,1.8,5,4.2,5.6c-0.4,0.1-0.9,0.2-1.4,0.2c-0.3,0-0.7,0-1-0.1    c0.7,2.3,2.6,3.9,4.9,3.9c-1.8,1.5-4.1,2.4-6.5,2.4c-0.4,0-0.8,0-1.3-0.1c2.3,1.6,5.1,2.6,8.1,2.6c9.7,0,15-8.6,15-16.1    c0-0.2,0-0.5,0-0.7C35.2,17.6,36.1,16.6,36.8,15.4z"
                                                              fill="#FFFFFF"/>
                                                    </g>
                                                </g></svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="blog-detail">
                        Computer programming is the process of writing instructions that get executed by computers. The
                        instructions, also known as code, are written in a programming language which the computer can
                        understand and use to perform a task or solve a problem.

                        Basic computer programming involves the analysis of a problem and development of a logical
                        sequence of instructions to solve it. There can be numerous paths to a solution and the computer
                        programmer seeks to design and code that which is most efficient. Among the programmer’s tasks
                        are understanding requirements, determining the right programming language to use, designing or
                        architecting the solution, coding, testing, debugging and writing documentation so that the
                        solution can be easily understood by other programmers.

                        Computer programming is at the heart of computer science. It is the implementation portion of
                        software development, application development and software engineering efforts, transforming
                        ideas and theories into actual, working solutions.
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
                            <span class="arrow">&larr;</span>&nbsp;Prev Post
                        </button>
                    </div>
                </div>
                <div class="col">
                    <div class="next-post">
                        <button>
                            <span class="tooltip right">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, maiores!</span>
                            Next Post&nbsp;<span class="arrow">&rarr;</span></button>
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
    rb(document).ready(function () {
        hljs.initHighlighting();

        // Clipboard
        new ClipboardJS('.clipboard-btn');
    });
</script>

