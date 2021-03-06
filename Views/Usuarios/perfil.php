<?php 
headerAdmin($data);
getModal('modalFormNewStream',$data);
?>

        <section class="bg-profile d-table w-100 bg-primary" style="background: url('<?= media() ?>/images/account/bg.png') center center;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card public-profile border-0 rounded shadow" style="z-index: 1;">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-2 col-md-3 text-md-start text-center">
                                        <img src="<?= media() ?>/images/client/05.jpg" class="avatar avatar-large rounded-circle shadow d-block mx-auto" alt="">
                                    </div>
    
                                    <div class="col-lg-10 col-md-9">
                                        <div class="row align-items-end">
                                            <div class="col-md-7 text-md-start text-center mt-4 mt-sm-0">
                                                <h3 class="title mb-0"><?= $_SESSION['userData']['nombres'].' '.$_SESSION['userData']['apellidos'] ?></h3>
                                                <small class="text-muted h6 me-2"><button onclick="openModalEvento()" class="btn btn-info"><i data-feather="plus" class="icons"></i> Nuevo evento</button></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

        <section class="section mt-60">
            <div class="container mt-lg-3">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 d-lg-block d-none">
                        <div class="sidebar sticky-bar p-4 rounded shadow">
                            <div class="widget">
                                <h5 class="widget-title">Eventos:</h5>
                            </div>

                            
                            <div class="widget mt-4">
                                <ul class="list-unstyled sidebar-nav mb-0" id="navmenu-nav">
                                    <li class="navbar-item account-menu px-0">
                                        <a href="#" class="navbar-link d-flex rounded shadow align-items-center py-2 px-4">
                                            <span class="h4 mb-0"><i class="uil uil-dashboard"></i></span>
                                            <h6 class="mb-0 ms-2">Evento 1</h6>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-8 col-12">
                        <div class="border-bottom pb-4">
                            <h5>Krista Joseph</h5>
                            <p class="text-muted mb-0">I have started my career as a trainee and prove my self and achieve all the milestone with good guidance and reach up to the project manager. In this journey, I understand all the procedure which make me a good developer, team leader, and a project manager.</p>
                        </div>
                        
                        <div class="border-bottom pb-4">
                            <div class="row">
                                <div class="col-md-6 mt-4">
                                    <h5>Personal Details :</h5>
                                    <div class="mt-4">
                                        <div class="d-flex align-items-center">
                                            <i data-feather="mail" class="fea icon-ex-md text-muted me-3"></i>
                                            <div class="flex-1">
                                                <h6 class="text-primary mb-0">Email :</h6>
                                                <a href="javascript:void(0)" class="text-muted">kristajoseph0203@mail.com</a>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-3">
                                            <i data-feather="bookmark" class="fea icon-ex-md text-muted me-3"></i>
                                            <div class="flex-1">
                                                <h6 class="text-primary mb-0">Skills :</h6>
                                                <a href="javascript:void(0)" class="text-muted">html</a>, <a href="javascript:void(0)" class="text-muted">css</a>, <a href="javascript:void(0)" class="text-muted">js</a>, <a href="javascript:void(0)" class="text-muted">mysql</a>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-3">
                                            <i data-feather="italic" class="fea icon-ex-md text-muted me-3"></i>
                                            <div class="flex-1">
                                                <h6 class="text-primary mb-0">Language :</h6>
                                                <a href="javascript:void(0)" class="text-muted">English</a>, <a href="javascript:void(0)" class="text-muted">Japanese</a>, <a href="javascript:void(0)" class="text-muted">Chinese</a>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-3">
                                            <i data-feather="globe" class="fea icon-ex-md text-muted me-3"></i>
                                            <div class="flex-1">
                                                <h6 class="text-primary mb-0">Website :</h6>
                                                <a href="javascript:void(0)" class="text-muted">www.kristajoseph.com</a>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-3">
                                            <i data-feather="gift" class="fea icon-ex-md text-muted me-3"></i>
                                            <div class="flex-1">
                                                <h6 class="text-primary mb-0">Birthday :</h6>
                                                <p class="text-muted mb-0">2nd March, 1996</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-3">
                                            <i data-feather="map-pin" class="fea icon-ex-md text-muted me-3"></i>
                                            <div class="flex-1">
                                                <h6 class="text-primary mb-0">Location :</h6>
                                                <a href="javascript:void(0)" class="text-muted">Beijing, China</a>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-3">
                                            <i data-feather="phone" class="fea icon-ex-md text-muted me-3"></i>
                                            <div class="flex-1">
                                                <h6 class="text-primary mb-0">Cell No :</h6>
                                                <a href="javascript:void(0)" class="text-muted">(+12) 1254-56-4896</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4 pt-2 pt-sm-0">
                                    <h5>Experience :</h5>

                                    <div class="d-flex key-feature align-items-center p-3 rounded shadow mt-4">
                                        <img src="<?= media() ?>/images/job/Circleci.svg" class="avatar avatar-ex-sm" alt="">
                                        <div class="flex-1 content ms-3">
                                            <h4 class="title mb-0">Senior Web Developer</h4>
                                            <p class="text-muted mb-0">3 Years Experience</p>
                                            <p class="text-muted mb-0"><a href="javascript:void(0)" class="text-primary">CircleCi</a> @London, UK</p>    
                                        </div>
                                    </div>

                                    <div class="d-flex key-feature align-items-center p-3 rounded shadow mt-4">
                                        <img src="<?= media() ?>images/job/Codepen.svg" class="avatar avatar-ex-sm" alt="">
                                        <div class="flex-1 content ms-3">
                                            <h4 class="title mb-0">Web Designer</h4>
                                            <p class="text-muted mb-0">2 Years Experience</p>
                                            <p class="text-muted mb-0"><a href="javascript:void(0)" class="text-primary">Codepen</a> @Washington D.C, USA</p>    
                                        </div>
                                    </div>

                                    <div class="d-flex key-feature align-items-center p-3 rounded shadow mt-4">
                                        <img src="<?= media() ?>/images/job/Gitlab.svg" class="avatar avatar-ex-sm" alt="">
                                        <div class="flex-1 content ms-3">
                                            <h4 class="title mb-0">UI Designer</h4>
                                            <p class="text-muted mb-0">2 Years Experience</p>
                                            <p class="text-muted mb-0"><a href="javascript:void(0)" class="text-primary">Gitlab</a> @Perth, Australia</p>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>




<?php footerAdmin($data) ?>