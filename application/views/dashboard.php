<div class="content-wrapper">
  <title>Halaman Dashboard </title>
  <!-- Main content -->
  <section class="content">


    <!-- logo header -->
    <div class="row">

      <div class="col-md-4">
        <img src="<?= base_url() ?>assets/image/logo.png" alt="logo" width="200px" style="float:right">
      </div>
      <div class="col-md-8">
        <h2 style="float: left; margin-left:-50px; line-height:40px; margin-top:30px">Selamat Datang di Sistem Informasi Manajemen <br>Arsip Induk Langganan</h2>
      </div>

    </div>
    <!-- end logo header -->
    <br><br>

    <!-- slider -->
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">

        <div class="box-body">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
              <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
              <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
              <li data-target="#carousel-example-generic" data-slide-to="4" class=""></li>
              <li data-target="#carousel-example-generic" data-slide-to="5" class=""></li>

            </ol>
            <div class="carousel-inner">

              <div class="item active">
                <img src="<?php echo base_url() ?>assets/image/1.png" alt="Second slide">

                <div class="carousel-caption">
                  <!-- Second Slide -->
                </div>
              </div>
              <div class="item">
                <img src="<?php echo base_url() ?>assets/image/2.png" alt="Second slide">

                <div class="carousel-caption">
                  <!-- Second Slide -->
                </div>
              </div>
              <div class="item">
                <img src="<?php echo base_url() ?>assets/image/4.png" alt="Second slide">

                <div class="carousel-caption">
                  <!-- Second Slide -->
                </div>
              </div>
              <div class="item">
                <img src="<?php echo base_url() ?>assets/image/5.png" alt="Second slide">

                <div class="carousel-caption">
                  <!-- Second Slide -->
                </div>
              </div>
              <div class="item">
                <img src="<?php echo base_url() ?>assets/image/6.png" alt="Second slide">

                <div class="carousel-caption">
                  <!-- Second Slide -->
                </div>
              </div>

            </div>
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
              <span class="fa fa-angle-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
              <span class="fa fa-angle-right"></span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
    <!-- end slider -->
    <br><br>


    <div class="row">
      <div class="container">
        <div class="row">
          <div class="quotes">
            <img src="<?= base_url(); ?>assets/image/gambar1.jpg" alt="gambar">
            <p>" Great things in business are never done by one person, <br>they're done by a team of people " <br>Steve Jobs</p>
          </div>
        </div>

      </div>
    </div>

  </section>
</div>
<!-- /.content -->

<style type="text/css">
  .paragraf {
    text-align: center;
  }

  .content {
    text-align: center;
    background-color: white;
  }

  .quotes {
    margin: 400px 0 0 0;
    font-size: 18px;
    display: inline;
  }

  .quotes p {
    margin-top: 170px;
  }

  .quotes img {
    margin-top: 100px;
    width: 30%;
    box-shadow: 8px 4px #efefef;
    float: left;
    margin-left: 100px;
    margin-bottom: 100px;
  }
</style>