<div class="container-fluid bg-secondary">
	<div class="container bg-blue me-pl-0">
		<nav class="navbar navbar-expand-lg navbar-light bg-blue">
			<img class="navbar-brand" src="sooker.png" height="50px" width="50px">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        		<span class="navbar-toggler-icon"></span>
      		</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item <?=($_GET['page']=='main') || empty($_GET['page']) ? 'active' : ''?>">
           				 <a class="nav-link" href="index.php?page=main">Beranda</a>
          			</li>
          			<li class="nav-item <?=($_GET['page']=='assets') ? 'active' : ''?>">
            			<a class="nav-link" href="index.php?page=album">Album</a>
          			</li>
				</ul>
			</div>
		</nav>
	</div>
</div>