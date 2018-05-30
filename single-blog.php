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

						<div class="row margin-tb-20 short-detail">
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
							<div class="col">
								<a href="" title="Published Date">
									<div class="date">February 16, 2018</div>
								</a>
							</div>
						</div>

						<div class="blog-detail">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore dolor alias autem quod ullam consequuntur quas adipisci, 
                                rem ex dolores eligendi voluptatum sunt iste quasi at iure quibusdam fuga expedita eos! Dolore quae eum, rerum tempore natus fugiat 
                                labore beatae quisquam laudantium dolorum repellat itaque at reprehenderit incidunt sunt magnam?

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
            
            <!-- Comment -->
            <div class="row">
                <div class="comment">
                    
                </div>
            </div>
            <!-- Comment:END -->
		</div>
		<!-- Blogs end -->

		<!-- Right Sidebar -->
		<aside class="summary">
			<!-- Most Reviewed -->
			<div class="most-viewed">
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
											<i class="fa fa-eye" aria-hidden="true"></i> 26
										</span>
										<span class="comment" title="total comment count">
											<i class="fa fa-comments-o" aria-hidden="true"></i> 26
										</span>
									</div>
								</div>
								<div class="col">
									<a href="" title="Published Date">
										<div class="date">February 16, 2018</div>
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
											<i class="fa fa-eye" aria-hidden="true"></i> 26
										</span>
										<span class="comment" title="total comment count">
											<i class="fa fa-comments-o" aria-hidden="true"></i> 26
										</span>
									</div>
								</div>
								<div class="col">
									<a href="" title="Published Date">
										<div class="date">February 16, 2018</div>
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
											<i class="fa fa-eye" aria-hidden="true"></i> 26
										</span>
										<span class="comment" title="total comment count">
											<i class="fa fa-comments-o" aria-hidden="true"></i> 26
										</span>
									</div>
								</div>
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

			<!-- Get Notified -->
			<div class="get-notified">
				<h2>
					Get Notified
				</h2>
				<p>
					Be the first to know when there are new reasearch related to Development, Design, Web Performance, Tips and Tricks and inspirational articles on Blog.
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