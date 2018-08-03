<?php include('./app/resources/layout/header.php'); ?>

    <!-- Container -->
    <main class="container">
        <div class="featured-blog">
            <!-- Feature Blog -->
            <div class="blog">
                <a href="" class="blog-image">
                    <span class="image" style="background: url('./assets/images/blog/mr_robot.jpg')"></span>
                </a>
                <article>
                    <a class="title" href="">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, quia.
                    </a>

                    <div class="row margin-tb-20 f-100 align-center">
                        <div class="col-auto margin-b-20-res">
                            <a class="tag" href="" title="Blog Tag">Engeneering</a>
                        </div>
                        <div class="col-auto margin-b-20-res">
                            <div class="view-comment">
									<span class="view" title="total view count">
										<i class="fa fa-eye" aria-hidden="true"></i> 26
									</span>
                                <span class="comment" title="total comment count">
										<i class="fa fa-comments-o" aria-hidden="true"></i> 26
									</span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="" title="Published Date">
                                <div class="date">February 16, 2018</div>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <!-- Feature Blog End -->

        <div class="blog-filter-tools">
            <div class="row align-center flex-end">
                <div class="search">
                    <form action="search.php" method="post" class="rb-form">
                        <input type="search" placeholder="Search...">
                        <span><i class="fa fa-search" aria-hidden="true"></i></span>
                    </form>
                </div>

                <div class="rb-date-range-picker">
                    <input type="text" id="blog-from-to-range" placeholder="Blog date...">
                </div>
                <div class="rb-toggle-view">
                    <ul>
                        <li>
                            <button title="List View" id="list_view" class="active"><i class="fa fa-th-list" aria-hidden="true"></i>
                            </button>
                        </li>
                        <li>
                            <button title="Grid View" id="grid_view"><i class="fa fa-th" aria-hidden="true"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="blog-container">
            <!-- Blog -->
            <div class="blogs">
<!--                <div class="loader">-->
<!--                    <div class="preloader"></div>-->
<!--                </div>-->
                <div class="row">
                    <!-- Blog Item -->
                    <div class="blog-item">
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
                                </div>

                                <div class="blog-review">
                                    <a href="">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore dolor alias
                                        autem quod ullam consequuntur quas adipisci, rem ex dolores eligendi voluptatum
                                        sunt iste quasi at iure quibusdam fuga expedita eos! Dolore quae eum, rerum
                                        tempore natus fugiat labore beatae quisquam laudantium dolorum repellat itaque
                                        at reprehenderit incidunt sunt magnam?
                                    </a>
                                </div>
                                <button> Read more <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                            </article>
                        </div>
                    </div>

                    <!-- Blog Item:END -->

                    <!-- Blog Pagination -->
                    <div class="pagination">
                        <ul>
                            <li><a href="" class="prev"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                                    Previous blog</a></li>
                            <li><a href="" class="active">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href="" class="next">Next blog <i class="fa fa-long-arrow-right"
                                                                aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <!-- Blog Pagination:END -->
                </div>
            </div>
            <!-- Blogs end -->

            <!-- Right Sidebar -->
            <?php include('./sidebar.php'); ?>
        </div>
    </main>
    <!-- Container: END -->

<?php include('./app/resources/layout/footer.php'); ?>