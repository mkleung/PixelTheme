<?php
/*
 * Template Name: home template

 */
get_header(); ?>

<!-- HEADER -->

<div class="container pt-5 pb-5">
      <div class="row">
        <div class="col-12 col-lg-5 offset-lg-1">
          <div class="header-left pt-5"><?php echo esc_html( get_field('header_title') ); ?></div>
        </div>
        <div class="col-12 col-lg-3 offset-lg-2">
          <div class="header-right">
            <p><?php echo esc_html( get_field('header_description_1') ); ?></p>
            <p><?php echo esc_html( get_field('header_description_2') ); ?></p>
            <a class="header-right-link" href="#projects">
              <img class="header-right-link-arrow " src=" <?php echo esc_url( get_template_directory_uri() . '/images/arrow-black.png' ); ?>" alt="">
              <span class="px-3">Découvrez nos projets</span>
            </a>
          </div>
        </div>
      </div>
    </div>




<div id="projects" class="container">
        <div class="row">
          <div class=" position-relative col-lg-7 offset-lg-5">
            <h1 class="project-title pt-5 pb-5">
                  projets
              </h1>
          </div>
          </div>
      </div>


      <div class="container projects pb-5">
        <div class="row ">
          <div class="col-12 col-lg-4 project">
            <div class = "project-card">
              <div class = "project-img">
                <img href = "#" src ="<?php echo esc_url( get_template_directory_uri() . '/images/project1.png' ); ?>">
              </div>
              <div class = "content">
                <div class="content-title">Les Grands Feux du Casino Lac Leamy</div>
                <div class="content-subtitle">Strategie marketing</div>
                <div class="content-subtitle">Branding et design</div>
                <div class="content-subtitle">Web & solutions numeriques</div>
              </div>
            </div>    
          </div>

          <div class="col-12 col-lg-4 project">
            <div class = "project-card">
              <div class = "project-img">
                <img href = "#" src =" <?php echo esc_url( get_template_directory_uri() . '/images/project3.png' ); ?>">
              </div>
              <div class = "content">
                <div class="content-title">Les Grands Feux du Casino Lac Leamy</div>
                <div class="content-subtitle">Strategie marketing</div>
                <div class="content-subtitle">Branding et design</div>
                <div class="content-subtitle">Web & solutions numeriques</div>
              </div>
            </div>   
            </div>
        <div class="col-12 col-lg-4 project">
          <div class = "project-card">
            <div class = "project-img">
              <img  href = "#" src ="<?php echo esc_url( get_template_directory_uri() . '/images/project2.png' ); ?>">
            </div>
            <div class = "content">
              <div class="content-title">Les Grands Feux du Casino Lac Leamy</div>
              <div class="content-subtitle">Strategie marketing</div>
              <div class="content-subtitle">Branding et design</div>
              <div class="content-subtitle">Web & solutions numeriques</div>
            </div>
          </div>   
        </div>
 
        <div class="col-12 col-lg-4 project">
          <div class = "project-card">
            <div class = "project-img">
              <img href = "#" src ="<?php echo esc_url( get_template_directory_uri() . '/images/project4.png' ); ?>">
            </div>
            <div class = "content">
              <div class="content-title">Les Grands Feux du Casino Lac Leamy</div>
              <div class="content-subtitle">Strategie marketing</div>
              <div class="content-subtitle">Branding et design</div>
              <div class="content-subtitle">Web & solutions numeriques</div>
            </div>
          </div>   
          </div>
          <div class="col-12 col-lg-4 project">
            <div class = "project-card">
              <div class = "project-img">
                <img  href = "#" src ="<?php echo esc_url( get_template_directory_uri() . '/images/project5.png' ); ?>">
              </div>
              <div class = "content">
                <div class="content-title">Les Grands Feux du Casino Lac Leamy</div>
                <div class="content-subtitle">Strategie marketing</div>
                <div class="content-subtitle">Branding et design</div>
                <div class="content-subtitle">Web & solutions numeriques</div>
              </div>
            </div>   
            </div>
        <div class="col-12 col-lg-4 project">
          <div class = "project-card">
            <div class = "project-img">
              <img  href = "#" src ="<?php echo esc_url( get_template_directory_uri() . '/images/project6.png' ); ?>">
            </div>
            <div class = "content">
              <div class="content-title">Les Grands Feux du Casino Lac Leamy</div>
              <div class="content-subtitle">Strategie marketing</div>
              <div class="content-subtitle">Branding et design</div>
              <div class="content-subtitle">Web & solutions numeriques</div>
            </div>
          </div>   
        </div>
          </div>
      </div>


<?php get_footer(); ?>