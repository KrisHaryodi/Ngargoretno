<!DOCTYPE html>
<html lang="id">

<head>
    <title> Desa Wisata Ngargoretno </title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="kamleshyadav">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/layers.css">
    <link rel="stylesheet" type="text/css" href="css/navigation.css">
    <link rel="stylesheet" type="text/css" href="css/settings.css">
    <link rel="stylesheet" type="text/css" href="css/range.css">
    <link rel="stylesheet" type="text/css" href="css/nice-select.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
</head>

<body>

    <!--Div section V3-->
    <div class="clv_main_wrapper index_v3">
        <div class="header2_wrapper">
            <div class="container">
                <div class="clv_header2">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <div class="clv_left_header">
                                <div class="clv_logo">
                                    <a href="index.php"><img src="images/header-logo.png" alt="Cultivation" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <div class="clv_right_header">
                                <div class="clv_menu">
                                    <div class="clv_menu_nav">
                                        <ul>
                                            <li class="nav-active"><a href="index.php">home</a></li>
                                            <li><a href="produk.php">produk</a></li>
                                            <li><a href="paket-wisata.php">paket wisata</a></li>
                                            <li><a href="blog.php">blog</a></li>
                                            <li><a href="tentang-kami.php">tentang kami</a></li>
                                            <li><a href="#">downloads</a></li>
											<li><a href="kontak.php" class="clv_btn2">kontak kami</a></li>
                                        </ul>
                                    </div>
                                    <div class="cart_nav">
                                        <ul>
                                            <li class="menu_toggle">
                                                <span>

                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        viewBox="0 0 53 53" style="enable-background:new 0 0 53 53;"
                                                        xml:space="preserve" width="20px" height="20px">
                                                        <g>
                                                            <g>
                                                                <path
                                                                    d="M2,13.5h49c1.104,0,2-0.896,2-2s-0.896-2-2-2H2c-1.104,0-2,0.896-2,2S0.896,13.5,2,13.5z" />
                                                                <path
                                                                    d="M2,28.5h49c1.104,0,2-0.896,2-2s-0.896-2-2-2H2c-1.104,0-2,0.896-2,2S0.896,28.5,2,28.5z" />
                                                                <path
                                                                    d="M2,43.5h49c1.104,0,2-0.896,2-2s-0.896-2-2-2H2c-1.104,0-2,0.896-2,2S0.896,43.5,2,43.5z" />
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--Div section V3-->

    <!--Div section V2-->
    <div class="clv_main_wrapper index_v2">
        <!--Breadcrumb-->
        <div class="breadcrumb_wrapper">
            <br><br><br><br><br>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="breadcrumb_inner">
                            <h3>Blog</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb_block">
                <ul>
                    <li><a href="index.php">home</a></li>
                    <li>blog</li>
                </ul>
            </div>
        </div>
		<br>
		<div class="searchbar" style="float: right;">
			<input type="text" placeholder="Search.." name="search">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
        <!--Blog With Sidebar-->
        <div class="blog_sidebar_wrapper clv_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="blog_left_section">
                            <?php
                                include "lib/config.php";
                                include "lib/koneksi.php";
                                $kueriAbout= mysqli_query($konek, "SELECT * FROM tbl_artikel ORDER BY id_artikel DESC LIMIT 1");
                                while ($abot=mysqli_fetch_array($kueriAbout)) {
                            ?>
                            <div class="blog_section">
                                <div class="agri_blog_image">
                                    <img src="adminkan/img/<?php echo $abot['artikel_foto'];?>" alt="image">
                                    <span class="agri_blog_date"><?php echo $abot['artikel_tgl'];?></span>
                                </div>
                                <div class="agri_blog_content">
                                    <h3><a
                                            href="<?php echo $base_url;?>blog-single.php?id_artikel=<?php echo $abot['id_artikel'];?>"><?php echo $abot['artikel_judul'];?></a>
                                    </h3>
                                    <div class="blog_user">
                                        <div class="user_name">
                                            <img src="images/user.png" alt="image">
                                            <a
                                                href="javascript:;"><span><?php echo $abot['artikel_penulis'];?></span></a>
                                        </div>
                                    </div>
                                    <p><?php echo substr ($abot['artikel_isi'],0,200);?></p>
                                    <a
                                        href="<?php echo $base_url;?>blog-single.php?id_artikel=<?php echo $abot['id_artikel'];?>">read
                                        more <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 col-md-3">
                        <div class="blog_sidebar">
                            <div class="sidebar_block">
                                <div class="sidebar_heading">
                                    <h3>recent post</h3>
                                    <img src="images/new_underline3.png" alt="image">
                                </div>
                                <div class="sidebar_post">
                                    <ul>
                                        <?php
                                            include "lib/config.php";
                                            include "lib/koneksi.php";
                                            $kueriAbout= mysqli_query($konek, "SELECT * FROM tbl_artikel ORDER BY id_artikel DESC LIMIT 10");
                                            while ($abot=mysqli_fetch_array($kueriAbout)) {
                                        ?>
                                        <li>
                                            <div class="post_image">
                                                <img src="adminkan/img/<?php echo $abot['artikel_foto'];?>" alt="image"
                                                    style="width: 75px; height: 65px; object-fit: cover;">
                                            </div>
                                            <div class="post_content">
                                                <p><?php echo $abot['artikel_tgl'];?></p>
                                                <a
                                                    href="<?php echo $base_url;?>blog-single.php?id_artikel=<?php echo $abot['id_artikel'];?>"><?php echo $abot['artikel_judul'];?></a>
                                            </div>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
				<div class="row">
					<div class="swiper-wrapper col-lg-4">
						<?php
                                include "lib/config.php";
                                include "lib/koneksi.php";
                                $kueriAbout= mysqli_query($konek, "SELECT * FROM tbl_artikel ORDER BY id_artikel DESC LIMIT 3");
                                while ($abot=mysqli_fetch_array($kueriAbout)) {
                            ?>
							<div class="swiper-slide">
								<div class="blog_section">
									<div class="agri_blog_image">
										<img src="adminkan/img/<?php echo $abot['artikel_foto'];?>" alt="image">
										<span class="agri_blog_date"><?php echo $abot['artikel_tgl'];?></span>
									</div>
									<div class="agri_blog_content">
										<h3><a
												href="<?php echo $base_url;?>blog-single.php?id_artikel=<?php echo $abot['id_artikel'];?>"><?php echo $abot['artikel_judul'];?></a>
										</h3>
										<div class="blog_user">
											<div class="user_name">
												<img src="images/user.png" alt="image">
												<a
													href="javascript:;"><span><?php echo $abot['artikel_penulis'];?></span></a>
											</div>
										</div>
										<p><?php echo substr ($abot['artikel_isi'],0,200);?></p>
										<a
											href="<?php echo $base_url;?>blog-single.php?id_artikel=<?php echo $abot['id_artikel'];?>">read
											more <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
									</div>
								</div>
							</div>
                            <?php } ?>
					</div>
				</div>
            </div>
        </div>

        <!--Footer-->
        <div class="clv_footer_wrapper clv_section">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-lg-3">
						<div class="footer_block">
							<div class="footer_logo"><a href="javascript:;"><img src="images/footer-logo.png" alt="logo_ngargoretno" /></a></div>
							<?php
								include "lib/config.php";
								include "lib/koneksi.php";
								$kueriAbout= mysqli_query($konek, "SELECT * FROM tbl_profile");
								while ($abot=mysqli_fetch_array($kueriAbout)) {
							?>
								<p><?php echo substr ($abot['profile_isi'],0,387);?></p>
							<?php } ?>
						</div>
					</div>
					<div class="col-md-3 col-lg-3">
						<div class="footer_block">
							<div class="footer_heading">
								<h4>recent post</h4>
								<img src="images/new_underline3.png" alt="gambar_garis_bawah" />
								<div class="footer_slider_arrows">
									<span class="footer_arrow footer_left">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="6px"
											height="10px">
											<path 
												fill-rule="evenodd" fill="rgb(182, 182, 182)"
												d="M0.215,5.448 L4.736,9.733 C5.023,10.007 5.489,10.007 5.777,9.733 C6.064,9.462 6.064,9.020 5.777,8.747 L1.777,4.954 L5.777,1.161 C6.064,0.888 6.064,0.447 5.777,0.174 C5.489,-0.098 5.023,-0.098 4.735,0.174 L0.215,4.461 C0.071,4.598 -0.000,4.776 -0.000,4.954 C-0.000,5.133 0.072,5.312 0.215,5.448 Z" 
											/>
										</svg>
									</span>
									<span class="footer_arrow footer_right">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="7px"
											height="10px">
											<path 
												fill-rule="evenodd" fill="rgb(182, 182, 182)"
												d="M6.409,5.448 L1.885,9.733 C1.598,10.007 1.131,10.007 0.844,9.733 C0.556,9.462 0.556,9.020 0.844,8.747 L4.846,4.954 L0.844,1.161 C0.556,0.888 0.556,0.447 0.844,0.174 C1.131,-0.098 1.598,-0.098 1.886,0.174 L6.410,4.461 C6.553,4.598 6.625,4.776 6.625,4.954 C6.625,5.133 6.553,5.312 6.409,5.448 Z" 
											/>
										</svg>
									</span>
								</div>
							</div>
							<div class="footer_post_slider">
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<?php
											include "lib/config.php";
											include "lib/koneksi.php";
											$kueriAbout= mysqli_query($konek, "SELECT * FROM tbl_artikel ORDER BY id_artikel DESC");
											while ($abot=mysqli_fetch_array($kueriAbout)) {
										?>
											<div class="swiper-slide">
												<div class="footer_post_slide">
													<div class="footer_post_image">
														<img src="adminkan/img/<?php echo $abot['artikel_foto'];?>" alt="<?php echo $abot['artikel_judul'];?>"
															style="width: 75px; height: 65px; object-fit: cover;">
													</div>
													<div class="footer_post_content">
														<span><?php echo $abot['artikel_tgl'];?></span>
														<p><a
																href="<?php echo $base_url;?>blog-single.php?id_artikel=<?php echo $abot['id_artikel'];?>"><?php echo $abot['artikel_judul'];?></a>
														</p>
													</div>
												</div>
											</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-lg-3">
						<div class="footer_block">
							<div class="footer_heading">
								<h4>quick link</h4>
								<img src="images/new_underline3.png" alt="gambar_garis_bawah" />
							</div>
							<ul class="useful_links">
								<li>
									<a href="produk.php">
										<span>
											<i class="fa fa-angle-right" aria-hidden="true"></i>
										</span>
										Produk
									</a>
								</li>
								<li>
									<a href="paket-wisata.php">
										<span>
											<i class="fa fa-angle-right" aria-hidden="true"></i>
										</span>
										Paket Wisata
									</a>
								</li>
								<li>
									<a href="blog.php">
										<span>
											<i class="fa fa-angle-right" aria-hidden="true"></i>
										</span>
										Blog
									</a>
								</li>
								<li>
									<a href="tentang-kami.php">
										<span>
											<i class="fa fa-angle-right" aria-hidden="true"></i>
										</span>
										Tentang Kami
									</a>
								</li>
								<li>
									<a href="kontak.php">
										<span>
											<i class="fa fa-angle-right" aria-hidden="true"></i>
										</span>
										Kontak
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-lg-3">
						<div class="footer_block">
							<div class="footer_heading">
								<h4>contact</h4>
								<img src="images/new_underline3.png" alt="gambar_garis_bawah" />
							</div>
							<?php
                include "lib/config.php";
                include "lib/koneksi.php";
                $kueriAbout= mysqli_query($konek, "SELECT * FROM tbl_contact");
                while ($abot=mysqli_fetch_array($kueriAbout)) {
							?>
								<p>
									<span>
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="16px">
											<defs>
												<filter id="Filter_0">
													<feFlood flood-color="rgb(247, 142, 33)" flood-opacity="1" result="floodOut" />
													<feComposite operator="atop" in="floodOut" in2="SourceGraphic" result="compOut" />
													<feBlend mode="normal" in="compOut" in2="SourceGraphic" />
												</filter>
											</defs>
											<g filter="url(#Filter_0)">
												<path fill-rule="evenodd" fill="rgb(247, 142, 33)"
													d="M14.873,0.856 C14.815,0.856 14.700,0.856 14.643,0.913 L0.850,6.660 C0.620,6.776 0.505,6.948 0.505,7.176 C0.505,7.465 0.677,7.695 0.965,7.752 L6.942,9.189 C7.057,9.189 7.114,9.305 7.172,9.419 L8.608,15.396 C8.666,15.626 8.896,15.855 9.183,15.855 C9.413,15.855 9.643,15.683 9.700,15.511 L15.447,1.718 C15.447,1.660 15.505,1.603 15.505,1.488 C15.447,1.085 15.217,0.856 14.873,0.856 ZM9.355,8.902 L9.068,7.695 C9.011,7.465 8.838,7.350 8.666,7.292 L7.459,7.005 C7.172,6.948 7.172,6.545 7.401,6.487 L11.022,4.993 C11.252,4.878 11.482,5.109 11.424,5.395 L9.930,9.017 C9.758,9.189 9.413,9.131 9.355,8.902 Z" />
											</g>
										</svg>
									</span> 
									<?php echo $abot['contact_alamat'];?>
								</p>
								<p>
									<span>
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="15px">
											<defs>
												<filter id="Filter_0">
													<feFlood flood-color="rgb(247, 142, 33)" flood-opacity="1" result="floodOut" />
													<feComposite operator="atop" in="floodOut" in2="SourceGraphic" result="compOut" />
													<feBlend mode="normal" in="compOut" in2="SourceGraphic" />
												</filter>
											</defs>
											<g filter="url(#Filter_0)">
												<path fill-rule="evenodd" fill="rgb(247, 142, 33)"
													d="M13.866,7.235 C13.607,5.721 12.892,4.344 11.802,3.254 C10.653,2.108 9.197,1.381 7.592,1.156 L7.755,-0.002 C9.613,0.257 11.296,1.096 12.626,2.427 C13.888,3.692 14.716,5.284 15.019,7.039 L13.866,7.235 ZM10.537,4.459 C11.296,5.222 11.796,6.181 11.977,7.238 L10.824,7.436 C10.684,6.617 10.300,5.874 9.713,5.287 C9.091,4.666 8.304,4.276 7.439,4.155 L7.601,2.996 C8.719,3.151 9.734,3.657 10.537,4.459 ZM4.909,8.182 C5.709,9.162 6.611,10.033 7.689,10.711 C7.920,10.854 8.176,10.960 8.417,11.092 C8.538,11.160 8.623,11.139 8.723,11.035 C9.088,10.661 9.460,10.293 9.831,9.924 C10.318,9.440 10.931,9.440 11.421,9.924 C12.017,10.516 12.614,11.110 13.207,11.707 C13.704,12.207 13.701,12.818 13.201,13.324 C12.864,13.665 12.505,13.989 12.186,14.345 C11.721,14.866 11.140,15.035 10.472,14.997 C9.500,14.944 8.607,14.623 7.745,14.205 C5.831,13.275 4.194,11.985 2.823,10.355 C1.808,9.150 0.971,7.834 0.422,6.355 C0.153,5.639 -0.038,4.906 0.022,4.129 C0.059,3.651 0.237,3.242 0.590,2.907 C0.971,2.546 1.330,2.168 1.705,1.800 C2.192,1.319 2.804,1.319 3.295,1.797 C3.598,2.093 3.894,2.396 4.194,2.696 C4.485,2.988 4.775,3.277 5.065,3.570 C5.578,4.085 5.578,4.684 5.069,5.197 C4.703,5.565 4.341,5.933 3.969,6.293 C3.873,6.390 3.863,6.468 3.913,6.586 C4.160,7.173 4.513,7.694 4.909,8.182 Z" />
											</g>
										</svg>
									</span>
									<?php echo $abot['contact_hp'];?>
								</p>
								<p>
									<span>
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="16px">
											<defs>
												<filter id="Filter_0">
													<feFlood flood-color="rgb(247, 142, 33)" flood-opacity="1" result="floodOut" />
													<feComposite operator="atop" in="floodOut" in2="SourceGraphic" result="compOut" />
													<feBlend mode="normal" in="compOut" in2="SourceGraphic" />
												</filter>
											</defs>
											<g filter="url(#Filter_0)">
												<path fill-rule="evenodd" fill="rgb(247, 142, 33)"
													d="M16.000,5.535 C16.000,4.982 15.680,4.507 15.280,4.191 L8.000,-0.002 L0.720,4.191 C0.320,4.507 0.000,4.982 0.000,5.535 L0.000,13.447 C0.000,14.317 0.720,15.028 1.600,15.028 L14.400,15.028 C15.280,15.028 16.000,14.317 16.000,13.447 L16.000,5.535 ZM8.000,9.491 L1.360,5.376 L8.000,1.579 L14.640,5.376 L8.000,9.491 Z" />
											</g>
										</svg>
									</span>
									<?php echo $abot['contact_email'];?>
								</p>
							<?php } ?>
							<?php
                include "lib/config.php";
                include "lib/koneksi.php";
                $kueriAbout= mysqli_query($konek, "SELECT * FROM tbl_sosmed");
                while ($abot=mysqli_fetch_array($kueriAbout)) {
            	?>
								<ul class="agri_social_links">
									<li>
										<a href="https://<?php echo $abot['sosmed_facebook'];?>">
											<span><i class="fa fa-facebook" aria-hidden="true"></i></span>
										</a>
									</li>
									<li>
										<a href="https://<?php echo $abot['sosmed_twitter'];?>">
											<span><i class="fa fa-twitter" aria-hidden="true"></i></span>
										</a>
									</li>
									<li>
										<a href="https://<?php echo $abot['sosmed_instagram'];?>">
											<span><i class="fa fa-instagram" aria-hidden="true"></i></span>
										</a>
									</li>
									<li>
										<a href="https://<?php echo $abot['sosmed_youtube'];?>">
											<span><i class="fa fa-youtube-play" aria-hidden="true"></i></span>
										</a>
									</li>
								</ul>
							<?php } ?>
						</div>
					</div>
				</div>
				<center>
					<a href="https://www.kemdikbud.go.id/" target="_blank" rel="noopener noreferrer"><img src="images/logo/kemendikbud.png" alt="logo_kemendikbud" style="width: 75px; height: 65px; object-fit: contain;"></a>
					<a href="https://desangargoretno.com/" target="_blank" rel="noopener noreferrer"><img src="images/logo/favicon.png" alt="logo_ngargoretno" style="width: 75px; height: 65px; object-fit: contain;"></a>
					<a href="https://ugm.ac.id/" target="_blank" rel="noopener noreferrer"><img src="images/logo/ugm.png" alt="logo_ugm" style="width: 75px; height: 65px; object-fit: contain;"></a>
					<a href="https://bemkm.ugm.ac.id/" target="_blank" rel="noopener noreferrer"><img src="images/logo/bem.png" alt="logo_bem" style="width: 75px; height: 65px; object-fit: contain;"></a>
					<a href="https://www.instagram.com/pdm_ugm/" target="_blank" rel="noopener noreferrer"><img src="images/logo/pdm.png" alt="logo_pdm" style="width: 75px; height: 65px; object-fit: contain;"></a>
				</center>
			</div>
		</div>
		<!--Copyright-->
		<div class="clv_copyright_wrapper">
			<p>all right reserved &copy; copyright 2020.</p>
		</div>
		<!--Popup-->
		<div class="search_box">
			<div class="search_block">
				<h3>Explore more with us</h3>
				<div class="search_field">
					<input type="search" placeholder="Search Here" />
					<a href="javascript:;">search</a>
				</div>
			</div>
			<span class="search_close">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					viewBox="0 0 47.971 47.971" style="enable-background:new 0 0 47.971 47.971;" xml:space="preserve" width="30px"
					height="30px">
					<g>
						<path style="fill:#1fa12e;" d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88
						c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242
						C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879
						s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z" />
					</g>
				</svg>
			</span>
		</div>
		<!--Thank You Popup-->
		<div class="thankyou_wrapper">
			<div class="thankyou_inner">
				<div class="thankyou_img"><img src="images/thankyou.png" alt=""></div>
				<h3>your order is being processed</h3>
				<h5>We Have Just Sent You An Email With Complete Information About Your Booking</h5>
				<div class="download_button">
					<a href="javascript:;" class="clv_btn">download PDF</a>
					<a href="index.php" class="clv_btn">back to site</a>
				</div>
				<span class="success_close">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
						y="0px" viewBox="0 0 212.982 212.982" style="enable-background:new 0 0 212.982 212.982;"
						xml:space="preserve" width="11px" height="11px">
						<g>
							<path fill="#fec007" style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312
							c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312
							l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937
							c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z" />
						</g>
					</svg>
				</span>
			</div>
		</div>
	</div>
    <!--Div section V2-->

    <!--Main js file Style-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/jquery.themepunch.tools.min.js"></script>
    <script src="js/jquery.themepunch.revolution.min.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/range.js"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="js/revolution.extension.actions.min.js"></script>
    <script src="js/revolution.extension.kenburn.min.js"></script>
    <script src="js/revolution.extension.layeranimation.min.js"></script>
    <script src="js/revolution.extension.migration.min.js"></script>
    <script src="js/revolution.extension.parallax.min.js"></script>
    <script src="js/revolution.extension.slideanims.min.js"></script>
    <script src="js/revolution.extension.video.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>