<!-- Home Section -->
<section id="home" class="relative"> 	
    <!-- INICIO DOS SLIDES DAS FOTOS -->
    <div id="slides">
        <div class="slides-container relative">
            <!-- INICIO IMAGNES QUE COMPOEN O SLIDE -->
            <div class="image2"></div>
            <div class="image1"></div>
            <div class="image3"></div>
            <div class="image4"></div>
            <!-- FIM IMAGNES QUE COMPOEN O SLIDE  -->	 
        </div>
        <!-- CONTROLE DAS FOTOS -->
        <nav class="slides-navigation">
            <a href="#" class="next"></a>
            <a href="#" class="prev"></a>
        </nav>
    </div><!-- FIM SLIDES DAS FOTOS -->
    
    <div class="v2 absolute">
        <!-- INICIO AUTO TIPOGRAFIA DO TEXTO DO TITULO -->
        <div class="typographic">
            <!-- INICIO LOGO -->
            <div class="logo">
                <img src="<?= base_url(); ?>assets/images/logo-icon.png" width="200" alt="Logo" />
            </div>
            <!-- FIM LOGO -->
            <h2 class=" condensed uppercase no-padding no-margin bold gray1">MaxFitt</h2>
            <h2 class=" condensed uppercase no-padding no-margin bold colored">Porque aqui a gente constrói fibra.</h2>
            <a href="#about" class="scroll"><i class="arrow-down fa fa-3x fa-angle-double-down"></i></a>
        </div><!--FIM AUTO TIPOGRAFIA DO TEXTO DO TITULO -->
    </div><!-- FIM V2 area -->
</section><!-- FIM DA SESSAO HOME-->


<!-- Fun Acts -->
<section id="fun-acts" class="container">

    <div class="inner fun-acts">
        <div class="about-margin"></div>
            <a class="about-icon">
                <i class="fa fa-trophy"></i>
            </a>
        <br />        

        <!-- cabecalho -->
        <h1 class="header light gray1 animated" data-animation="fadeInLeft" data-animation-delay="400">
            Os vencedores treinam,<span class="colored" data-animation="fadeInRight"> os vencidos queixam-se</span></h1>
        <!-- descricao -->
        <p class="h-desc"><span class="colored">MaxFitt,</span> um novo conceito no mundo da musculação</p>

    </div><!-- FIM Fun Acts Inner -->

</section><!-- FIM Fun Acts Section -->

<!-- About -->
<section id="about" class="container waypoint">
    <div class="inner">        

        <!-- CABECALHO -->
        <h1 class="header light gray3 fancy"><span class="colored">Sobre a </span>MaxFitt</h1>

        <!-- DESCRICAO -->
        <p class="h-desc gray4">Plataforma para indicação de treinos. Aqui na <span class="colored bold"> MaxFitt</span>, você podera acompanhar pessoas usando treinos desenvolvidos.
            <br />
            <br />
        </p> 
        <hr>       

        <!-- BOXES PARA CADASTROS -->
        <div class="boxes">
            
            <div class="col-xs-3 col-sm-6 col-md-3 about-box animated" data-animation="fadeIn" data-animation-delay="100" style="left:23%">
                <p class="lead">Alunos MaxFitt</p>
                <hr><br>
                <a href="Aluno_controller/carregarViewCadastroAluno" class="about-icon">
                    <i class="fa fa-child" aria-hidden="true"></i>
                </a>
                <br><br>
                <p class="light about-text">Seja um aluno Maxfitt, usando treinos desenvolvidos por varios professores.</p>
            </div>

            <div class="col-xs-3 col-sm-6 col-md-3 about-box animated" data-animation="fadeIn" data-animation-delay="300" style="left:28%">
                <p class="lead">Professores MaxFitt</p>
                <hr><br>
                <a href="Educador_controller/carregarViewCadastroEducador" class="about-icon">
                    <i class="fa fa-clipboard"></i>
                </a>
                <br><br>
                <p class="light about-text">Seja um professor Maxfitt, crie suas fichas de treino e acompanhe o progresso dos seus alunos</p>
            </div>

        </div><!-- FIM Boxes -->
    </div><!-- FIM About Inner -->
</section><!-- FIM About Section -->

<!-- CARACTERISTICAS -->
<section id="features" class="container">

    <div class="inner">

        <!-- CABECALHO -->
        <h1 class="header light gray1">Caracteristicas <span class="colored fancy">Maxfitt!</span></h1>

        <!-- DESCRICAO -->
        <p class="h-desc white bold">TEXTO SOBRE AS CARACTERISTICAS DA <span class="colored bold"> Maxfitt</span> TEXTO SIMPLES.</p>

        <div class="features-boxes">

            <!-- Box 1 -->
            <div class="col-xs-4 f-box animated" data-animation="fadeIn" data-animation-delay="0">
                <!-- Icon -->
                <a class="f-icon">
                    <i class="fa fa-eye"></i>
                </a>
                <!-- Header -->
                <p class="feature-head">Acompanhamento das Avaliações</p>
                <!-- Text -->
                <p class="feature-text ">Acompanhamento das avaliações realizadas durante os treinos.</p>
            </div>


            <!-- Box 2 -->
            <div class="col-xs-4 f-box animated" data-animation="fadeIn" data-animation-delay="100">
                <!-- Icon -->
                <a class="f-icon">
                    <i class="fa fa-tablet"></i>
                </a>
                <!-- Header -->
                <p class="feature-head">Sempre pronto</p>
                <!-- Text -->
                <p class="feature-text ">Maxfitt esta disponivel em qualquel lugar a qualquer momento.</p>
            </div>


            <!-- Box 3 -->
            <div class="col-xs-4 f-box animated" data-animation="fadeIn" data-animation-delay="200">
                <!-- Icon -->
                <a class="f-icon">
                    <i class="fa fa-flask"></i>
                </a>
                <!-- Header -->
                <p class="feature-head">Avaliações Frenquentes</p>
                <!-- Text -->
                <p class="feature-text light">Realização frequente de avaliações dos alunos.</p>
            </div>
            <div class="clear"></div>

        </div><!-- FIM Features Boxes -->

    </div> <!-- FIM Features Inner -->

</section><!-- FIM DAS CARACTERISTICAS -->

<!-- SESSAO ONDE O USUARIO PODERA DESCREVER COMO ESTA SENDO O USO DO SITE -->
<section id="clients" class="container">

    <!-- Team Inner -->
    <div class="inner team">

        <!-- Header -->
        <h1 class="header light gray3 fancy"><span class="colored">Nossos </span> Alunos</h1>

        <!-- Description -->
        <p class="h-desc gray4">Aqui na<span class="colored bold"> Maxfitt</span>, nossos alunos e professores poderam descrever como esta sendo a experiencia de usar nossa plataforma.</p>


        <!-- Members -->
        <div class="team-members inner-details">

            <!-- Member -->
            <div class="col-xs-4 member animated" data-animation="fadeInUp" data-animation-delay="0">
                <div class="member-inner">
                    <!-- Team Member Image -->
                    <a class="team-image">
                        <!-- Img -->
                        <img src="<?= base_url(); ?>assets/images/clients/9.jpg" alt="" />
                    </a>
                    <div class="member-details">
                        <div class="member-details-inner">
                            <!-- Name -->
                            <h2 class="member-name light">Lorem ipsum dolor</h2>
                            <!-- Description -->
                            <p class="member-description">Lorem ipsum dolor sit amet consectetur adipiscing.</p>
                            <!-- Socials -->
                            <div class="socials">
                                <!-- Link -->
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div><!-- End Socials -->
                        </div> <!-- End Detail Inner -->
                    </div><!-- End Details -->
                </div> <!-- End Member Inner -->
            </div><!-- End Member -->


            <!-- Member -->
            <div class="col-xs-4 member animated" data-animation="fadeInUp" data-animation-delay="100">
                <div class="member-inner">
                    <!-- Team Member Image -->
                    <a class="team-image">
                        <!-- Img -->
                        <img src="<?= base_url(); ?>assets/images/clients/2.jpg" alt="" />
                    </a>
                    <div class="member-details">
                        <div class="member-details-inner">
                            <!-- Name -->
                            <h2 class="member-name light">Lorem ipsum dolor</h2>
                            <!-- Description -->
                            <p class="member-description">Lorem ipsum dolor sit amet consectetur adipiscing.</p>
                            <!-- Socials -->
                            <div class="socials">
                                <!-- Image -->
                                <a href="#"><i class="fa fa-camera"></i></a>
                            </div><!-- End Socials -->
                        </div> <!-- End Detail Inner -->
                    </div><!-- End Details -->
                </div> <!-- End Member Inner -->
            </div><!-- End Member -->


            <!-- Member -->
            <div class="col-xs-4 member animated" data-animation="fadeInUp" data-animation-delay="200">
                <div class="member-inner">
                    <!-- Team Member Image -->
                    <a class="team-image">
                        <!-- Img -->
                        <img src="<?= base_url(); ?>assets/images/clients/3.jpg" alt="" />
                    </a>
                    <div class="member-details">
                        <div class="member-details-inner">
                            <!-- Name -->
                            <h2 class="member-name light">Lorem ipsum dolor</h2>
                            <!-- Description -->
                            <p class="member-description">Lorem ipsum dolor sit amet consectetur adipiscing.</p>
                            <!-- Socials -->
                            <div class="socials">
                                <!-- Link -->
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div><!-- End Socials -->
                        </div> <!-- End Detail Inner -->
                    </div><!-- End Details -->
                </div> <!-- End Member Inner -->
            </div><!-- End Member -->


            <!-- Member -->
            <div class="col-xs-4 member animated" data-animation="fadeInUp" data-animation-delay="300">
                <div class="member-inner">
                    <!-- Team Member Image -->
                    <a class="team-image">
                        <!-- Img -->
                        <img src="<?= base_url(); ?>assets/images/clients/4.jpg" alt="" />
                    </a>
                    <div class="member-details">
                        <div class="member-details-inner">
                            <!-- Name -->
                            <h2 class="member-name light">Lorem ipsum dolor</h2>
                            <!-- Description -->
                            <p class="member-description">Lorem ipsum dolor sit amet consectetur adipiscing.</p>
                            <!-- Socials -->
                            <div class="socials">
                                <!-- Image -->
                                <a href="#"><i class="fa fa-camera"></i></a>
                            </div><!-- End Socials -->
                        </div> <!-- End Detail Inner -->
                    </div><!-- End Details -->
                </div> <!-- End Member Inner -->
            </div><!-- End Member -->


            <!-- Member -->
            <div class="col-xs-4 member animated" data-animation="fadeInUp" data-animation-delay="400">
                <div class="member-inner">
                    <!-- Team Member Image -->
                    <a class="team-image">
                        <!-- Img -->
                        <img src="<?= base_url(); ?>assets/images/clients/5.jpg" alt="" />
                    </a>
                    <div class="member-details">
                        <div class="member-details-inner">
                            <!-- Name -->
                            <h2 class="member-name light">Lorem ipsum dolor</h2>
                            <!-- Description -->
                            <p class="member-description">Lorem ipsum dolor sit amet consectetur adipiscing.</p>
                            <!-- Socials -->
                            <div class="socials">
                                <!-- Link -->
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div><!-- End Socials -->
                        </div> <!-- End Detail Inner -->
                    </div><!-- End Details -->
                </div> <!-- End Member Inner -->
            </div><!-- End Member -->

            <!-- Member -->
            <div class="col-xs-4 member animated" data-animation="fadeInUp" data-animation-delay="0">
                <div class="member-inner">
                    <!-- Team Member Image -->
                    <a class="team-image">
                        <!-- Img -->
                        <img src="<?= base_url(); ?>assets/images/clients/6.jpg" alt="" />
                    </a>
                    <div class="member-details">
                        <div class="member-details-inner">
                            <!-- Name -->
                            <h2 class="member-name light">Lorem ipsum dolor</h2>
                            <!-- Description -->
                            <p class="member-description">Lorem ipsum dolor sit amet consectetur adipiscing.</p>
                            <!-- Socials -->
                            <div class="socials">
                                <!-- Link -->
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div><!-- End Socials -->
                        </div> <!-- End Detail Inner -->
                    </div><!-- End Details -->
                </div> <!-- End Member Inner -->
            </div><!-- End Member -->


            <!-- Member -->
            <div class="col-xs-4 member animated" data-animation="fadeInUp" data-animation-delay="100">
                <div class="member-inner">
                    <!-- Team Member Image -->
                    <a class="team-image">
                        <!-- Img -->
                        <img src="<?= base_url(); ?>assets/images/clients/7.jpg" alt="" />
                    </a>
                    <div class="member-details">
                        <div class="member-details-inner">
                            <!-- Name -->
                            <h2 class="member-name light">Lorem ipsum dolor</h2>
                            <!-- Description -->
                            <p class="member-description">Lorem ipsum dolor sit amet consectetur adipiscing.</p>
                            <!-- Socials -->
                            <div class="socials">
                                <!-- Image -->
                                <a href="#"><i class="fa fa-camera"></i></a>
                            </div><!-- End Socials -->
                        </div> <!-- End Detail Inner -->
                    </div><!-- End Details -->
                </div> <!-- End Member Inner -->
            </div><!-- End Member -->


            <!-- Member -->
            <div class="col-xs-4 member animated" data-animation="fadeInUp" data-animation-delay="200">
                <div class="member-inner">
                    <!-- Team Member Image -->
                    <a class="team-image">
                        <!-- Img -->
                        <img src="<?= base_url(); ?>assets/images/clients/8.jpg" alt="" />
                    </a>
                    <div class="member-details">
                        <div class="member-details-inner">
                            <!-- Name -->
                            <h2 class="member-name light">Lorem ipsum dolor</h2>
                            <!-- Description -->
                            <p class="member-description">Lorem ipsum dolor sit amet consectetur adipiscing.</p>
                            <!-- Socials -->
                            <div class="socials">
                                <!-- Link -->
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div><!-- End Socials -->
                        </div> <!-- End Detail Inner -->
                    </div><!-- End Details -->
                </div> <!-- End Member Inner -->
            </div><!-- End Member -->                

            <!-- Member -->
            <div class="col-xs-4 member animated" data-animation="fadeInUp" data-animation-delay="500">
                <div class="member-inner">
                    <!-- Team Member Image -->
                    <a class="team-image">
                        <!-- Img -->
                        <img src="<?= base_url(); ?>assets/images/clients/1.jpg" alt="" />
                    </a>
                    <div class="member-details">
                        <div class="member-details-inner">
                            <!-- Name -->
                            <h2 class="member-name light">Lorem ipsum dolor</h2>
                            <!-- Description -->
                            <p class="member-description">Lorem ipsum dolor sit amet consectetur adipiscing.</p>
                            <!-- Socials -->
                            <div class="socials">
                                <!-- Image -->
                                <a href="#"><i class="fa fa-camera"></i></a>
                            </div><!-- End Socials -->
                        </div> <!-- End Detail Inner -->
                    </div><!-- End Details -->
                </div> <!-- End Member Inner -->
            </div><!-- End Member -->
        </div><!-- End Members -->
    </div><!-- End Team Inner -->
</section><!-- FIM DA SESSAO ONDE O USUSARIO PODERAR DESCREVER COMO ESTA SENDO O USO DO SITE -->



<!-- CARROSEL DE NOTICIAS ( ADICIONAR ?? )

        <section id="testimonial" class="testimonials parallax2">

            <div class="inner">

                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators ( FIM COMENTARIO)
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides ( FIM COMENTOARIO )
                    <div class="carousel-inner">
                        <div class="item active">
                            <ul>
                                <li class="monial">
                                    <!-- Text ( FIM COMENTARIO )
                                    <h1 class="condensed white">"<span class="colored">Lorem ipsum dolor</span> sit amet, consectetur adipiscing elit. Cras euismod vestibulum orci, mollis vulpute felis dapibus sed. Nam ullamcorper congue elit."</h1>
                                    <!-- Name ( FIM COMENTARIO )
                                    <p class="light">John Doe</p>
                                </li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                                <li class="monial">
                                    <!-- Text ( FIM COMENTARIO )
                                    <h1 class="condensed white"><span class="colored">Lorem ipsum dolor</span> sit amet, consectetur adipiscing elit. Cras euismod vestibulum orci, mollis vulputate felis dapibus sed. Nam ullamcorper congue elit."</h1>
                                    <!-- Name ( FIM COMENTARIO )
                                    <p class="light">Jane Doe</p>
                                </li>
                            </ul>	
                        </div>
                        <div class="item">
                            <ul>
                                <li class="monial">
                                    <!-- Text ( FIM COMENTARIO )
                                    <h1 class="condensed white">"<span class="colored">Lorem ipsum dolor</span> sit amet, consectetur adipiscing elit. Cras euismod vestibulum orci, mollis vulputate felis dapibus sed. Nam ullamcorper congue elit."</h1>
                                    <!-- Name ( FIM COMENTARIO )
                                    <p class="light">Severe Dane</p>
                                </li>
                            </ul>	
                        </div>
                    </div>
                </div>  
            </div><!-- End Inner Div ( FIM COMENTARIO )
        </section>
<!-- <!-- CARROSEL LATERAL CANTO DIREITO DA PAGINA -->

<!-- Blockquote -->
<section id="blockquote">

    <div class="inner no-padding">
        <!-- Your Text -->
        <p class="normal white blockquote fancy">Esta é a motivação de nossos clientes, trabalhamos com paixão!
            <a href="#about" class="scroll"><i class="fa fa-arrow-right"></i></a></p>
    </div>

</section><!-- End Blockquote Section -->

<!-- Contact Section -->
<section id="contact" class="container parallax4">
    <!-- Contact Inner -->
    <div class="inner contact">

        <!-- Form Area -->
        <div class="contact-form">

            <h4 class="header light gray3 fancy"><span class="colored">Entre em contato </span>conosco</h4>
            <p class="h-desc white">
            <!-- Form -->
            <form id="contact-us" method="post" action="#">
                <!-- Left Inputs -->
                <div class="col-xs-6 animated" data-animation="fadeInLeft" data-animation-delay="300">
                    <!-- Name -->
                    <input type="text" name="name" id="name" required="required" class="form" placeholder="Nome" />
                    <!-- Email -->
                    <input type="email" name="mail" id="mail" required="required" class="form" placeholder="Email" />
                    <!-- Subject -->
                    <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Motivo" />
                </div><!-- End Left Inputs -->
                <!-- Right Inputs -->
                <div class="col-xs-6 animated" data-animation="fadeInRight" data-animation-delay="400">
                    <!-- Message -->
                    <textarea name="message" id="message" class="form textarea"  placeholder="Messagem"></textarea>
                </div><!-- End Right Inputs -->
                <!-- Bottom Submit -->
                <div class="relative fullwidth col-xs-12">
                    <!-- Send Button -->
                    <button type="submit" id="submit" name="submit" class="form-btn semibold">Enviar Menssagem</button> 
                </div><!-- End Bottom Submit -->
                <!-- Clear -->
                <div class="clear"></div>
            </form>

            <!-- Your Mail Message -->
            <div class="mail-message-area">
                <!-- Message -->
                <div class="alert gray-bg mail-message not-visible-message">
                    <strong>Obrigado!</strong> Seu e-mail foi entregue.
                </div>
            </div>

        </div><!-- End Contact Form Area -->
    </div><!-- End Inner -->
</section><!-- End Contact Section -->



<!-- Site Socials and Address -->
<section id="site-socials" class="no-padding white-bg">
    <div class="site-socials inner no-padding">
        <a href="#home" class="scroll top-button">
            <i class="fa fa-arrow-circle-up fa-2x"></i>
        </a>
    </div><!-- End Inner -->
</section><!-- End Site Socials and Address -->