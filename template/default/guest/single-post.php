<?php
$page_title = "$post->title built by $project_name";

$page_description = "{$post->intro()}";

$page_keywords = implode("," , $post->tagsArray);
/*
echo "<pre>";
print_r($post->imagepath);
print_r($post->image_path);

die();
*/
 include 'includes/header.php';?>



  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?=$post->title;?></h2>
          <ol>
            <li><a href="<?=domain;?>">Home</a></li>
            <li><a href="">Portfolio</a></li>
            <li><?=$post->title;?></li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <?php foreach ($post->image_path['images'] as $key => $image) :?>
            <img src="<?=domain;?>/<?=$image['main_image'];?>" class="img-fluid" alt="<?=$post->title;?>" style="height: 642.22px; width: 1110px; object-fit: cover;">
            <?php endforeach ;?>
          </div>

          <div class="portfolio-info">
           <?=$post->summary;?>
          </div>

        </div>

        <div class="portfolio-description">
          <?=$post->content;?>
          
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <?php include_once 'includes/footer.php';?>
