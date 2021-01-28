<!doctype html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

   <!-- navbar -->
   <nav class="navbar navbar-inverse navbar-fixed-top navbarColor">
      <div class="container-fluid">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <a href="#home" class="navbar-brand page-scroll">HBP</a>
         </div>

         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
               <li><a href="#about" class="page-scroll">About</a></li>
               <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
               <li><a href="#contact" class="page-scroll">Contact</a></li>
            </ul>
         </div>
      </div>
   </nav>

   <!-- akhir navbar -->

   <!-- jumbotron -->
   <div class="jumbotron text-center">
      <div class="div-img">
         <img src="img/profile.jpg" class="img-circle">
      </div>
      <h1>Hamdani Bayu</h1>

      <p>Belum jadi Programmer | Biasa biasa aja</p>
   </div>
   <!-- akhir jumbotron -->

   <!-- about -->
   <section class="about" id="about">
      <div class="container">
         
         <div class="row">
            <div class="col-sm-12">
               <h2 class="text-center">About</h2>
               <hr>
            </div>
         </div>

         <div class="row">
            <div class="col-sm-5 col-sm-offset-1">
               <p class="pKiri">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam eaque temporibus doloribus, suscipit consectetur porro vitae labore velit delectus cum molestias provident minus officia maiores, odio pariatur doloremque dignissimos ut.
               </p>
            </div>

            <div class="col-sm-5">
               <p class="pKanan">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore voluptas esse aliquid fugit, nostrum aliquam, fuga iure doloremque animi cupiditate incidunt, sequi eligendi dolorem quis nam? Labore voluptas harum deserunt!
               </p>
            </div>
         </div>

      </div>
   </section>
   <!-- akhir about -->

   <!-- portfolio -->
   <section class="portfolio" id="portfolio">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <h2 class="text-center">Portfolio</h2>
               <hr>
            </div>
         </div>

         <div class="row">
            <div class="col-sm-4">
               <a href="" class="thumbnail">
                  <img src="img/portfolio/1.jpg">
               </a>
            </div>

            <div class="col-sm-4">
               <a href="" class="thumbnail">
                  <img src="img/portfolio/2.jpg">
               </a>
            </div>

            <div class="col-sm-4">
               <a href="" class="thumbnail">
                  <img src="img/portfolio/3.jpg">
               </a>
            </div>

            <div class="col-sm-4">
               <a href="" class="thumbnail">
                  <img src="img/portfolio/4.jpg">
               </a>
            </div>

            <div class="col-sm-4">
               <a href="" class="thumbnail">
                  <img src="img/portfolio/5.jpg">
               </a>
            </div>

            <div class="col-sm-4">
               <a href="" class="thumbnail">
                  <img src="img/portfolio/6.jpg">
               </a>
            </div>
         </div>
      </div>
   </section>
   <!-- akhir portfolio -->

   <!-- contact -->
   <section class="contact" id="contact">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <h2 class="text-center">Contact</h2>
               <hr>
            </div>
         </div>

         <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
               <form>
                  <div class="form-group">
                     <label for="nama">Nama</label>
                     <input type="text" id="nama" class="form-control" placeholder="Masukkan Nama ...">
                  </div>

                  <div class="form-group">
                     <label for="email">Email</label>
                     <input type="email" id="email" class="form-control" placeholder="Masukkan Email ...">
                  </div>

                  <div class="form-group">
                     <label for="telp">No. Telepon</label>
                     <input type="tel" id="telp" class="form-control" placeholder="Masukkan No. Telepon ...">
                  </div>

                  <div class="form-group">
                     <label for="tanya">Tanya Saya</label>
                     <select class="form-control">
                        <option>-- Pilih Kategori --</option>
                        <option>web Design</option>
                        <option>Web Development</option>
                     </select>
                  </div>

                  <div class="form-group">
                     <label for="pesan">Pesan</label>
                     <textarea class="form-control" id="pesan" rows="10" placeholder="Masukkan Pesan ..."></textarea>
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Kirim Pesan</button>
               </form>
            </div>
         </div>

      </div>
   </section>
   <!-- akhir contact -->

   <!-- footer -->
   <footer>
      <div class="container text-center">
         <div class="row">
            <div class="col-sm-12">
               <p>
                  <i class="glyphicon glyphicon-copyright-mark copyrightColor"></i>Copyright 2019 | Built with <i class="glyphicon glyphicon-heart"></i>. <a href="#">Hamdani Bayu Putra</a>
               </p>
            </div>

            <div class="row">
               <div class="col-sm-12">
                  <a href="#" class="btn btn-danger youtubeColor"> <i class="glyphicon glyphicon-play"></i> Subscribe To YouTube</a>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- akhir footer -->


   <script src="js/jquery-3.3.1.min.js"></script>
   <script src="js/jquery.easing.1.3.js"></script>
   <script src="js/bootstrap.min.js"></script>

   <script src="js/script.js"></script>
  </body>
</html>