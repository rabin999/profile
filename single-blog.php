<?php include('./app/resources/layout/header.php'); ?>

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
    <link rel="stylesheet" href="./node_modules/codemirror/lib/codemirror.css">

    <!-- Container -->
    <main class="container">
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
									<span class="view" title="total view count">
										<i class="fa fa-eye" aria-hidden="true"></i> 26
									</span>
                                    <span class="comment" title="total comment count">
										<i class="fa fa-comments-o" aria-hidden="true"></i> 26
									</span>
                                </div>
                            </div>
                            <div class="col published-date">
                                <a href="" title="Published Date">
                                    <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp; February 16, 2018</div>
                                </a>
                            </div>
                            <div class="col">
                                <div class="follow-me">
                                    <span>Share on : </span>
                                    <ul>
                                        <li>
                                            <a href="http://" class="icon facebook"><i class="fa fa-facebook"
                                                                                       aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a class="icon linked-in"
                                               href="https://np.linkedin.com/in/rabin-bhandari-b38b52119"
                                               target="_blank">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="icon google" href="https://plus.google.com/+RockRabin"
                                               target="_blank">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://" class="icon instagram"><i class="fa fa-instagram"
                                                                                        aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="blog-detail">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore dolor alias autem quod
                            ullam consequuntur quas adipisci,
                            rem ex dolores eligendi voluptatum sunt iste quasi at iure quibusdam fuga expedita eos!
                            Dolore quae eum, rerum tempore natus fugiat
                            labore beatae quisquam laudantium dolorum repellat itaque at reprehenderit incidunt sunt
                            magnam?

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
											<span class="view" title="total view count">
												<i class="fa fa-eye" aria-hidden="true"></i> 26
											</span>
                                                <span class="comment" title="total comment count">
												<i class="fa fa-comments-o" aria-hidden="true"></i> 26
											</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="" title="Published Date">
                                                <div class="date">February 16, 2018</div>
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
											<span class="view" title="total view count">
												<i class="fa fa-eye" aria-hidden="true"></i> 26
											</span>
                                                <span class="comment" title="total comment count">
												<i class="fa fa-comments-o" aria-hidden="true"></i> 26
											</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="" title="Published Date">
                                                <div class="date">February 16, 2018</div>
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
											<span class="view" title="total view count">
												<i class="fa fa-eye" aria-hidden="true"></i> 26
											</span>
                                                <span class="comment" title="total comment count">
												<i class="fa fa-comments-o" aria-hidden="true"></i> 26
											</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="" title="Published Date">
                                                <div class="date">February 16, 2018</div>
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
											<span class="view" title="total view count">
												<i class="fa fa-eye" aria-hidden="true"></i> 26
											</span>
                                                <span class="comment" title="total comment count">
												<i class="fa fa-comments-o" aria-hidden="true"></i> 26
											</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="" title="Published Date">
                                                <div class="date">February 16, 2018</div>
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
        <?php include('./sidebar.php'); ?>

    </main>
    <!-- Container: END -->

    <!-- <script src="./node_modules/codemirror/lib/codemirror.js"></script>
    <script src="./node_modules/codemirror/mode/htmlmixed/htmlmixed.js"></script>
    <script src="./node_modules/codemirror/mode/javascript/javascript.js"></script>
    <script src="./node_modules/codemirror/mode/css/css.js"></script>
    <script src="./node_modules/codemirror/mode/sass/sass.js"></script>
    <script src="./node_modules/codemirror/mode/php/php.js"></script>
    <script src="./node_modules/codemirror/mode/python/python.js"></script>
    <script src="./assets/js/editor.js"></script> -->
<?php include('./app/resources/layout/footer.php'); ?>