<?php
include "Product/config/config.php";
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donust Shop</title>
    <link rel="stylesheet" href="Product/css/web.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- fonts link -->
    <link rel="preconnect" href="https://fonts/googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body>
    <div class="all-content">

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
              <a class="navbar-brand" href="#" id="logo"><img src="Product/img/Logo.png" alt="GambarLogo"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fa-solid fa-bars" style="color: white; font-size: 23px;"></i></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#top-cards">Top Categories</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#menu">Menu</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#product">Product</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                  </li>
                  
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <form action="">
                   <a href="Product/login/login.php" type="" class="btn btn-danger button1">Login</a>
                </form>
              </div>
            </div>
          </nav>
    </div>

        <!-- home section -->
        <section id="home">
            <div class="content">
                <h3>Start Your Day With a <br> Donuts</h3>
                <a href="#menu"><button id="btn">Shop Now</button></a>
            </div>
        </section>

        <!-- about section -->
        <section id="about">
            <div class="container">
                <div class="heading">About <span>Us</span></div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <img src="Product/img/DonatBesar.jpg" alt="Donat Besar">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>Sejarah Perusahaan</h3>
                        <p>Perusahaan ini didirikan oleh Bapak E.Mochtar pada 19 Febuari 2004 di Kabupaten Bandung.
                           <br><br>
                           Perusahaan ini bergerak di bidang FnB khusus nya produksi donat rumahan, pada awal berdirinya pabrik Abadi Jaya Family Donuts cara kami memasarkan barang dagangan kami adalah dengan menggunakan metode mouth to mouth, dengan cara penjualan ini kami dapat mengumpulkan pada reseller tetap yang terus bertambah hingga saat ini.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- top card -->
        <section id="top-cards">
            <div class="heading2">Top <span>Categories</span></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 py-md-0">
                        <div class="card">
                            <img src="Product/img/DonatBesar.jpg" alt="">
                        </div>
                    </div>

                    <div class="col-md-4 py-md-0">
                        <div class="card">
                            <img src="Product/img/DonatKecil.jpg" alt="">
                        </div>
                    </div>

                    <div class="col-md-4 py-md-0">
                        <div class="card">
                            <img src="Product/img/DonatBesar.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- menu -->
        <section id="menu">
            <div class="container">
                <div class="heading3">Menu</div>
            </div>

            <div class="container" id="container2">
                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-3 py-3 py-md-0 card-menu">
                        <div class="card">
                            <img src="Product/img/DonatBesar.jpg" alt="">

                            <div class="card-body">
                                <div class="star text-center">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>

                                <h3>Donat Besar</h3>
                                <p>IDR 30.000/box 12pcs <strike>40.000</strike> <span class="fa-solid fa-cart-shopping"></span></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 py-3 py-md-0 card-menu">
                        <div class="card">
                            <img src="Product/img/DonatKecil.jpg" alt="">

                            <div class="card-body">
                                <div class="star text-center">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>

                                <h3>Donat Kecil</h3>
                                <p>IDR 40.000/box 30pcs <strike>45.000</strike> <span class="fa-solid fa-cart-shopping"></span></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 py-3 py-md-0 card-menu">
                        <div class="card">
                            <img src="Product/img/Burger.png" alt="">

                            <div class="card-body card-body2">
                                <div class="star text-center">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>

                                <h3>Burger</h3>
                                <p>IDR 40.000/box 12pcs <strike>45.000</strike> <span class="fa-solid fa-cart-shopping"></span></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 py-3 py-md-0 card-menu">
                        <div class="card">
                            <img src="Product/img/DonatSaljuPanjang.png" alt="">

                            <div class="card-body card-body2">
                                <div class="star text-center">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>

                                <h3>Donat Salju Panjang</h3>
                                <p>IDR 40.000/box 12pcs <strike>45.000</strike> <span class="fa-solid fa-cart-shopping"></span></p>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="row" style="margin-top: 30px;"> -->
                        <div class="col-md-3 py-3 py-md-0 card-menu">
                            <div class="card">
                                <img src="Product/img/Hotdog.png" alt="">
    
                                <div class="card-body card-body2">
                                    <div class="star text-center">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
    
                                    <h3>HotDog</h3>
                                    <p>IDR 40.000/box 12pcs <strike>45.000</strike> <span class="fa-solid fa-cart-shopping"></span></p>
                                </div>
                            </div>
                        </div>
                    <!-- </div> -->
                </div>
            </div>
        </section>

        <!-- product section -->
        <section id="product">
            <div class="container">
                <div class="heading4">Products</div>
            </div>

            <div class="container" id="container3">
                <div class="row">
                    <div class="col-md-3 py-3 py-3">
                        <div class="card">
                            <img src="Product/img/DonatApel.jpg" alt="">
                            <div class="card-body">
                                <h3>Donat Salju Apel</h3>
                                <p>Donat yang lembut ditaburi dengan taburan gula halus ditambah isian selai buah Apel yang segar</p>
                                <p>IDR 3.500/pcs <span class="fa-solid fa-cart-shopping"></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 py-3">
                        <div class="card">
                            <img src="Product/img/DonatBlueberry.jpg" alt="">
                            <div class="card-body">
                                <h3>Donat Salju Blueberry</h3>
                                <p>Donat yang lembut ditaburi dengan taburan gula halus ditambah isian selai buah Blueberry yang segar</p>
                                <p>IDR 3.500/pcs <span class="fa-solid fa-cart-shopping"></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 py-3">
                        <div class="card">
                            <img src="Product/img/DonatStrawberry.jpg" alt="">
                            <div class="card-body">
                                <h3>Donat Salju Strawberry</h3>
                                <p>Donat yang lembut ditaburi dengan taburan gula halus ditambah isian selai buah Strawberry yang segar</p>
                                <p>IDR 3.500/pcs <span class="fa-solid fa-cart-shopping"></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 py-3">
                        <div class="card">
                            <img src="Product/img/DonatVanilla.jpg" alt="">
                            <div class="card-body">
                                <h3>Donat Salju Vanilla</h3>
                                <p>Donat yang lembut ditaburi dengan taburan gula halus ditambah isian selai Vanilla yang creamy</p>
                                <p>IDR 3.500/pcs <span class="fa-solid fa-cart-shopping"></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 py-3">
                        <div class="card">
                            <img src="Product/img/DonatCoklat.png" alt="">
                            <div class="card-body">
                                <h3>Donat Dekor Coklat</h3>
                                <p>Donat yang lembut dengan topping lelehan coklat</p>
                                <p>IDR 3.500/pcs <span class="fa-solid fa-cart-shopping"></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 py-3">
                        <div class="card">
                            <img src="Product/img/DonatPink.png" alt="">
                            <div class="card-body">
                                <h3>Donat Dekor Pink</h3>
                                <p>Donat yang lembut dengan topping lelehan coklat strawberry</p>
                                <p>IDR 3.500/pcs <span class="fa-solid fa-cart-shopping"></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 py-3">
                        <div class="card">
                            <img src="Product/img/DonatKeju.png" alt="">
                            <div class="card-body">
                                <h3>Donat Keju</h3>
                                <p>Donat yang lembut dengan topping parutan keju</p>
                                <p>IDR 3.500/pcs <span class="fa-solid fa-cart-shopping"></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 py-3">
                        <div class="card">
                            <img src="Product/img/DonatKacang.png" alt="">
                            <div class="card-body">
                                <h3>Donat Coklat Kacang</h3>
                                <p>Donat yang lembut dengan topping coklat dan kacang bubuk</p>
                                <p>IDR 3.500/pcs <span class="fa-solid fa-cart-shopping"></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 py-3">
                        <div class="card">
                            <img src="Product/img/DonatMessesCok.png" alt="">
                            <div class="card-body">
                                <h3>Donat Messes Coklat</h3>
                                <p>Donat yang lembut dengan topping messes coklat</p>
                                <p>IDR 3.500/pcs <span class="fa-solid fa-cart-shopping"></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 py-3">
                        <div class="card">
                            <img src="Product/img/DonatSalju.png" alt="">
                            <div class="card-body">
                                <h3>Donat Salju Coklat</h3>
                                <p>Donat yang lembut dengan taburan gula halus ditambahisian selai coklat</p>
                                <p>IDR 3.500/pcs <span class="fa-solid fa-cart-shopping"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- contact -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-7" id="col1">
                        <div class="heading6">Contact <span>Us</span></div>
                        <p>Beri kritik dan saran anda disini!</p>
                        <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
                            <strong>Terima Kasih!</strong> Pesan anda sudah kami terima.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        <form action="" name="contact-company">
                            <input type="text" class="form-control" placeholder="Name" aria-label="default input example" required name="nama"><br>
                            <input type="email" class="form-control" placeholder="Email" aria-label="default input example" required name="email"><br>
                            <input type="number" class="form-control" placeholder="Phone" aria-label="default input example" required name="nomor hp"><br>
                            <textarea name="pesan" id="" cols="30" rows="10" placeholder="Kritik dan Saran" required></textarea>
                            <br>
                            <button type="submit" id="contact-btn" class="btn-kirim">Send Message</button>

                            <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Loading...
                              </button>
                        </form>
                    </div>

                    <div class="col-md-5" id="col2">
                        <h1>Info Pemesanan</h1>
                        <p><i class="fa-regular fa-envelope"></i> aansap17@gmail.com</p>
                        <p><i class="fa-solid fa-phone"></i> +628179203902</p>
                        <p><i class="fa-solid fa-building-colums"></i> Aan Saputra, Bandung</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15843.863202705788!2d107.65937647858888!3d-6.894694200759566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e79b4dbb06cf%3A0xda7de2d5ef52e614!2sAbadi%20Jaya%20Family%20Donuts!5e0!3m2!1sid!2sid!4v1703597840578!5m2!1sid!2sid"style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <!-- footer -->
        <footer id="footer">
            <div class="footer-logo text-center"><img src="img/Logo.png" alt=""></div>
            <div class="social-links text-center">
                <a href="https://www.facebook.com/ikhwan.azhary.7/"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/ikhwanazharyyy/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://github.com/IkhwanAzhary"><i class="fa-brands fa-github"></i></a>
            </div>

            <div class="credits text-center">
                Designe By <a href="#">Ikhwan Azhary</a>
            </div>

            <div class="copyright text-center">
                <div>&copy; Copyright <strong><span>Donuts Shops</span></strong>. All Right reserved</div>
            </div>
        </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbztWq9SDd5M-65viEhmax7bHcVGIKA9OhB9UYqewU-9XyT9A8Gpu4tMkVKTAUjf7ZJT/exec'
        const form = document.forms['contact-company']
        const btnKirim = document.querySelector('.btn-kirim');
        const btnLoading = document.querySelector('.btn-loading');
        const myAlert = document.querySelector('.my-alert');
      
        form.addEventListener('submit', e => {
          e.preventDefault()
          btnLoading.classList.toggle('d-none');
          btnKirim.classList.toggle('d-none');
          fetch(scriptURL, { method: 'POST', body: new FormData(form)})
            .then(response => {
                btnLoading.classList.toggle('d-none');
                btnKirim.classList.toggle('d-none');
                myAlert.classList.toggle('d-none');
                form.reset();
                console.log('Success!', response);
            })
            .catch(error => console.error('Error!', error.message))
        })
      </script>
</body>
</html>