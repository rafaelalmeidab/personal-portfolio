<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


<!-- ======= About Section ======= -->
<section id="about" class="about">

  <!-- ======= About Me ======= -->
  <div class="about-me container">

    <div class="section-title">
      <h2><?= $lang['about_title'] ?></h2>
      <p><?= $lang['about_subtitle'] ?></p>
    </div>

    <div class="row">
      <div class="col-lg-4" data-aos="fade-right">
        <img src="assets/img/Rafael_Linkedin.jpeg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
        <h3><?= $lang['about_role'] ?></h3>
        <p class="fst-italic">
          <?= $lang['about_intro'] ?>
        </p>
        <div class="row">
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong><?= $lang['about_education_label'] ?>:</strong> <span><?= $lang['about_education_value'] ?></span></li>
              <li><i class="bi bi-chevron-right"></i> <strong><?= $lang['about_city_label'] ?>:</strong> <span><?= $lang['about_city_value'] ?></span></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong><?= $lang['about_email_label'] ?>:</strong> <span>rafaelalmeidab@hotmail.com</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong><?= $lang['about_freelance_label'] ?>:</strong> <span><?= $lang['about_freelance_value'] ?></span></li>
            </ul>
          </div>
        </div>
        <p><?= $lang['about_bio'] ?></p>
      </div>
    </div>

  </div><!-- End About Me -->

  <!-- ======= Counts ======= -->
  <div class="counts container">

    <div class="row">

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="bi bi-award"></i>
          <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
          <p><?= $lang['counts_experience'] ?></p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
        <div class="count-box">
          <i class="bi bi-journal-richtext"></i>
          <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
          <p><?= $lang['counts_projects'] ?></p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="count-box">
          <i class="bi bi-laptop"></i>
          <span data-purecounter-start="0" data-purecounter-end="5000" data-purecounter-duration="1" class="purecounter"></span>
          <p><?= $lang['counts_hours'] ?></p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="count-box">
          <i class="bi bi-hourglass-split"></i>
          <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
          <p><?= $lang['counts_ongoing'] ?></p>
        </div>
      </div>

    </div>

  </div><!-- End Counts -->

  <!-- ======= Skills ======= -->
  <div class="skills container">

    <div class="section-title">
      <h2><?= $lang['skills_title'] ?></h2>
    </div>

    <div class="row skills-content">

      <div class="col-lg-6">

        <div class="progress">
          <span class="skill">PHP / Laravel <i class="val">90%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="progress">
          <span class="skill">REST APIs <i class="val">90%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="progress">
          <span class="skill">MySQL / MongoDB <i class="val">80%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="progress">
          <span class="skill">Git <i class="val">85%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

      </div>

      <div class="col-lg-6">

        <div class="progress">
          <span class="skill">Docker <i class="val">75%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="progress">
          <span class="skill">AWS (ECS, S3) <i class="val">70%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="progress">
          <span class="skill">JavaScript / React.js <i class="val">60%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="progress">
          <span class="skill">Scrum / Agile <i class="val">80%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

      </div>

    </div>

  </div><!-- End Skills -->

  <!-- ======= Interests ======= -->
  <div class="interests container">

    <div class="section-title">
      <h2><?= $lang['interests_title'] ?></h2>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-4">
        <div class="icon-box">
          <i class="bi bi-server" style="color: #ffbb2c;"></i>
          <h3><?= $lang['interest_backend'] ?></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="bi bi-cloud" style="color: #5578ff;"></i>
          <h3><?= $lang['interest_cloud'] ?></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="bi bi-clipboard-data" style="color: #e80368;"></i>
          <h3><?= $lang['interest_data'] ?></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
        <div class="icon-box">
          <i class="bi bi-house-door" style="color: #e361ff;"></i>
          <h3><?= $lang['interest_domotics'] ?></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="bi bi-cpu" style="color: #47aeff;"></i>
          <h3><?= $lang['interest_esp32'] ?></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="bi bi-diagram-3" style="color: #ffa76e;"></i>
          <h3><?= $lang['interest_microservices'] ?></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="bi bi-gear" style="color: #11dbcf;"></i>
          <h3><?= $lang['interest_devops'] ?></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="bi bi-robot" style="color: #4233ff;"></i>
          <h3><?= $lang['interest_ai'] ?></h3>
        </div>
      </div>
    </div>

  </div><!-- End Interests -->

</section><!-- End About Section -->

<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
  <div class="container">

    <div class="section-title">
      <h2><?= $lang['resume_title'] ?></h2>
      <p><?= $lang['resume_subtitle'] ?></p>
    </div>

    <div class="row">

      <div class="col-lg-6">

        <h3 class="resume-title"><?= $lang['resume_edu_title'] ?></h3>
        <div class="resume-item">
          <h4><?= $lang['edu_degree'] ?></h4>
          <h5><?= $lang['edu_years'] ?></h5>
          <p><em><?= $lang['edu_institution'] ?></em></p>
          <p><?= $lang['edu_desc'] ?></p>
        </div>

        <h3 class="resume-title"><?= $lang['resume_acad_title'] ?></h3>
        <div class="resume-item pb-0">
          <h4><?= $lang['acad_title'] ?></h4>
          <h5><?= $lang['acad_years'] ?></h5>
          <p><em><?= $lang['acad_institution'] ?></em></p>
          <p><?= $lang['acad_desc'] ?></p>
        </div>

      </div>

      <div class="col-lg-6">
        <h3 class="resume-title"><?= $lang['resume_pro_title'] ?></h3>

        <div class="resume-item">
          <h4><?= $lang['exp1_title'] ?></h4>
          <h5><?= $lang['exp1_years'] ?></h5>
          <p><em><?= $lang['exp1_company'] ?> — <?= $lang['exp1_location'] ?></em></p>
          <ul>
            <li><?= $lang['exp1_item1'] ?></li>
            <li><?= $lang['exp1_item2'] ?></li>
            <li><?= $lang['exp1_item3'] ?></li>
            <li><?= $lang['exp1_item4'] ?></li>
            <li><?= $lang['exp1_item5'] ?></li>
          </ul>
        </div>

        <div class="resume-item">
          <h4><?= $lang['exp2_title'] ?></h4>
          <h5><?= $lang['exp2_years'] ?></h5>
          <p><em><?= $lang['exp2_company'] ?> — <?= $lang['exp2_location'] ?></em></p>
          <ul>
            <li><?= $lang['exp2_item1'] ?></li>
            <li><?= $lang['exp2_item2'] ?></li>
            <li><?= $lang['exp2_item3'] ?></li>
            <li><?= $lang['exp2_item4'] ?></li>
          </ul>
        </div>

        <div class="resume-item">
          <h4><?= $lang['exp3_title'] ?></h4>
          <h5><?= $lang['exp3_years'] ?></h5>
          <p><em><?= $lang['exp3_company'] ?> — <?= $lang['exp3_location'] ?></em></p>
          <ul>
            <li><?= $lang['exp3_item1'] ?></li>
            <li><?= $lang['exp3_item2'] ?></li>
            <li><?= $lang['exp3_item3'] ?></li>
            <li><?= $lang['exp3_item4'] ?></li>
          </ul>
        </div>

        <div class="resume-item">
          <h4><?= $lang['exp4_title'] ?></h4>
          <h5><?= $lang['exp4_years'] ?></h5>
          <p><em><?= $lang['exp4_company'] ?> — <?= $lang['exp4_location'] ?></em></p>
          <ul>
            <li><?= $lang['exp4_item1'] ?></li>
            <li><?= $lang['exp4_item2'] ?></li>
            <li><?= $lang['exp4_item3'] ?></li>
          </ul>
        </div>

      </div>
    </div>

  </div>
</section><!-- End Resume Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container">

    <div class="section-title">
      <h2><?= $lang['services_title'] ?></h2>
      <p><?= $lang['services_subtitle'] ?></p>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-layer"></i></div>
          <h4><a href=""><?= $lang['svc1_title'] ?></a></h4>
          <p><?= $lang['svc1_desc'] ?></p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-file"></i></div>
          <h4><a href=""><?= $lang['svc2_title'] ?></a></h4>
          <p><?= $lang['svc2_desc'] ?></p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-transfer"></i></div>
          <h4><a href=""><?= $lang['svc3_title'] ?></a></h4>
          <p><?= $lang['svc3_desc'] ?></p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-chip"></i></div>
          <h4><a href=""><?= $lang['svc4_title'] ?></a></h4>
          <p><?= $lang['svc4_desc'] ?></p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-data"></i></div>
          <h4><a href=""><?= $lang['svc5_title'] ?></a></h4>
          <p><?= $lang['svc5_desc'] ?></p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-sitemap"></i></div>
          <h4><a href=""><?= $lang['svc6_title'] ?></a></h4>
          <p><?= $lang['svc6_desc'] ?></p>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Services Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div class="section-title">
      <h2><?= $lang['contact_title'] ?></h2>
      <p><?= $lang['contact_subtitle'] ?></p>
    </div>

    <div class="row mt-2">

      <div class="col-md-6 d-flex align-items-stretch">
        <div class="info-box">
          <i class="bx bx-map"></i>
          <h3><?= $lang['contact_address_title'] ?></h3>
          <p><?= $lang['contact_address_value'] ?></p>
        </div>
      </div>

      <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
        <div class="info-box">
          <i class="bx bx-share-alt"></i>
          <h3><?= $lang['contact_social_title'] ?></h3>
          <div class="social-links">
            <a href="https://www.linkedin.com/in/rafaelalmeidab/" class="linkedin"><i class="bi bi-linkedin"></i></a>
            <a href="https://www.instagram.com/rafaelalmeidab" class="instagram"><i class="bi bi-instagram"></i></a>
          </div>
        </div>
      </div>

      <div class="col-md-6 mt-4 d-flex align-items-stretch">
        <div class="info-box">
          <i class="bx bx-envelope"></i>
          <h3><?= $lang['contact_email_title'] ?></h3>
          <p>rafaelalmeidab@hotmail.com</p>
        </div>
      </div>

      <div class="col-md-6 mt-4 d-flex align-items-stretch">
        <div class="info-box">
          <i class="bx bx-phone-call"></i>
          <h3><?= $lang['contact_phone_title'] ?></h3>
          <p><?= $lang['contact_phone_value'] ?></p>
        </div>
      </div>
    </div>

    <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
      <div class="row">
        <div class="col-md-6 form-group">
          <input type="text" name="name" class="form-control" id="name" placeholder="<?= $lang['contact_name_ph'] ?>" required>
        </div>
        <div class="col-md-6 form-group mt-3 mt-md-0">
          <input type="email" class="form-control" name="email" id="email" placeholder="<?= $lang['contact_email_ph'] ?>" required>
        </div>
      </div>
      <div class="form-group mt-3">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="<?= $lang['contact_subject_ph'] ?>" required>
      </div>
      <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" placeholder="<?= $lang['contact_message_ph'] ?>" required></textarea>
      </div>
      <div class="my-3">
        <div class="loading"><?= $lang['contact_loading'] ?></div>
        <div class="error-message"></div>
        <div class="sent-message"><?= $lang['contact_sent'] ?></div>
      </div>
      <div class="text-center"><button type="submit"><?= $lang['contact_send_btn'] ?></button></div>
    </form>

  </div>
</section><!-- End Contact Section -->
