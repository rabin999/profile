<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Rabin Bhandari">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Rabin Bhandari, Full Stack Developer">
	<meta name="keywords" content="website designer, website developer, full stack developer">
	<title>Rabin Bhandari - Full Stack Developer</title>
	<link rel="stylesheet" href="./assets/css/app.css">
</head>
<body class="rb-theme1">	

	<!-- Profile Image -->
	<div class="profile-image">
		<img src="./assets/images/bg1.jpg" alt="">
	</div>
	<!-- Profile Image:END-->

	<header class="row row space-between">
		<!-- Logo -->
		<a class="logo" href="profile">
			<h1 class="hover">< Rabin Bhandari - Full Stack Developer ></h1>
		</a>

		<!-- Navigation Menu -->
		<nav class="top">
			<ul>
				<li><a href="" class="hover" title="Home">Home</a></li>
				<li><a href="" class="hover" title="About">About</a></li>
				<li><a href="" class="hover" title="Resume">Resume</a></li>
				<li><a href="" class="hover" title="Blog">Blog</a></li>
				<li><a href="" class="hover" title="Blog">Codes</a></li>
				<li><a href="" class="hover" title="Contact">Contact</a></li>
			</ul>
		</nav>

		<div class="progress-bar"></div>
	</header>
	
	<!-- Page Slider -->
	<aside class="page-slider row align-center">
		<ul>
			<li><a href="#" class="active switch-page" data-page="introText" title="Who am i ?"></a></li>
			<li><a href="#" class="switch-page" data-page="littleAboutMe" title="About Me"></a></li>
		</ul>
	</aside>
	<!-- Page Slider:END -->

	<!-- Container -->
	<main class="container">
		<!-- Introduction Text -->
		<div class="intro-text pages active" data-page="introText">
			<h1 class="typing">Hello, I am Rabin Bhandari</h1>
			<h2>Full Stack Developer</h2>
		</div>
		<!-- Introduction Text:End -->

		<!-- Little About Me -->
		<div id="little_about_me" class="pages" data-page="littleAboutMe">
			<h2 class="page-header">
				About Me
			</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis cumque incidunt voluptatibus, odio, a voluptatem praesentium ea molestias deserunt velit ducimus dolor ullam sit quos quaerat impedit officia tenetur ut neque perspiciatis maiores reiciendis suscipit aspernatur iusto. Dolorum facilis est nam temporibus deleniti quidem fuga obcaecati consequuntur non eum corporis, id neque vel iusto amet commodi nemo, vitae enim nostrum ipsam tempora. Perspiciatis dicta, sint, omnis distinctio velit, odit maiores nesciunt deserunt temporibus quas placeat expedita aut magnam! Officia rem dicta, recusandae, eos quibusdam praesentium sit accusamus similique, tempora illo, veniam fugit incidunt expedita pariatur reiciendis. Dolor tenetur possimus omnis temporibus totam et inventore quaerat a eum, consectetur magnam. Tempore molestias quasi perferendis et harum consequuntur natus dolorum illo sint accusamus, fuga dolore culpa incidunt rem consequatur veritatis, labore ullam vero accusantium eaque voluptas cumque? Dolore est, odit hic aut exercitationem, laudantium harum beatae impedit atque dolores iusto modi nam cum, excepturi non rerum consequatur repellendus esse adipisci qui numquam assumenda. Incidunt, sequi, alias! Ipsam hic nisi aspernatur architecto illum odio nemo ducimus maiores saepe consectetur voluptatibus veniam alias doloribus necessitatibus laudantium suscipit eligendi officiis voluptatum beatae qui, minus unde quisquam corrupti. Velit cum, non accusantium? Aliquam natus, quo obcaecati similique, ad sit molestiae perspiciatis iusto, alias blanditiis eligendi. Velit obcaecati iusto similique repellat, saepe ad nam soluta quia ut omnis! Fuga et accusantium numquam odit quos nesciunt reprehenderit sit illo recusandae, adipisci dolorem, blanditiis tenetur ad libero officia quisquam itaque voluptatibus. Perspiciatis magnam dicta inventore nisi harum distinctio assumenda.</p>
		</div>
		<!-- Little About Me: END -->

	</main>
	<!-- Container: END -->
	
	<div class="mouse-scroller bounce">
		<i class="fa fa-long-arrow-down fa-1x" aria-hidden="true"></i>
	</div>

	<footer>
		@copyright  <?php echo date('Y'); ?>
	</footer>
	
	<script src="./assets/js/app.js"></script>

</body>
</html>