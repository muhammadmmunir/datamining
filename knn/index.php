<?php require_once 'knn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Unweighted K-NN | Data Mining</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/grayscale.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i> <span class="light">Unweighted</span> K-NN
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#home">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Project Kita</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Download</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Anggota</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro" id="home">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Data Mining</h1>
                        <p class="intro-text">Menentukan Nilai <em>Missing Value</em> dengan Menggunakan Metode <em>Unweighted K-NN</em>
                            <br>oleh Kelompok Kami</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center" style="padding-top: 100px;">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Tentang Project Kami</h2>
                <p>Semakin hari semakin banyak inovasi, perkembangan, dan temuan-temuan
yang terkait dengan bidang Teknologi Informasi dan Komputer. Hal ini menyebabkan semakin banyaknya artikel-artikel ilmiah yang diterbitkan dalam proses mengembangkan dan menemukan hal-hal baru dalam bidang tersebut dan semakin sulitnya untuk mengorganisasi artikel-artikel tersebut secara efisien.</p>
                <p>Dengan mengelompokkan artikel-artikel tersebut maka akan memudahkan dalam mencari artikel yang diinginkan. Salah satu cara mendapatkan efisiensi dalam mengorganisasi artikel tersebut adalah dengan mengelompokkannya berdasarkan kategori tertentu.</p>
                <p>Pengelompokkan artikel ini dikenal dengan pengklasifikasian. Sejumlah metode klasifikasi telah banyak diterapkan untuk melakukan pengkategorian seperti Naïve Bayes, pohon keputusan, k-Nearest Neighbor, Support Vector Machine, dan sebagainya.</p>
                <p>Salah satu metode klasifikasi yang mudah dan efektif adalah metode k-
Nearest Neighbor. Dalam prosesnya, k-Nearest Neighbor memeriksa semua kata
dalam dokumen pelatihan untuk menghitung kesamaannya dengan dokumen yang
akan diklasifikasian (dokumen uji). Hal ini mengakibatkan lamanya waktu untuk
melakukan klasifikasi artikel ilmiah jika jumlah dokumen pelatihan sangat banyak.</p>
                <p>Selain itu, jika korpus didominasi oleh satu atau beberapa kategori (label),
maksudnya satu atau beberapa kategori memiliki jumlah dokumen yang sangat
banyak, sedangkan kategori lain hanya memiliki sedikit dokumen, penggunaan
2metode k-Nearest Neighbor yang menentukan kategori berdasarkan jumlah dokumenterbanyak akan menghasilkan kategori yang salah. Untuk itu, digunakan metodeImproved k-Nearest Neighbor (k-NN_I) yang melakukan modifikasi pada metode k-Nearest Neighbor biasa sehingga dapat meningkatkan performa dalam melalukan klasifikasi. Metode ini didasari oleh penelitian yang dilakukan oleh Muhammed Miah (2009).</p>
                <p>Dalam metode ini, tidak semua dokumen pelatihan akan dihitung kesamaannya dengan dokumen uji dan tidak menggunakan semua kata yang ada dalam dokumen pelatihan sehingga metode ini menjadi lebih efektif. Dalam penelitian ini, penulis akan merancang sebuah sistem klasifikasi menggunakan metode Improved k-Nearest Neighbor.</p>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                <hr class="style9">
                <br>
                <h2>DATA LATIH</h2>
                <div class="table-responsivex">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Class</th>
                                        <th>Infants</th>
                                        <th>Project</th>
                                        <th>Adoption</th>
                                        <th>Physician</th>
                                        <th>El-savador</th>
                                        <th>Religious</th>
                                        <th>Sattelite</th>
                                        <th>Aid</th>
                                        <th>Missile</th>
                                        <th>Immigration</th>
                                        <th>Synfuels</th>
                                        <th>Education</th>
                                        <th>Superfund</th>
                                        <th>Crime</th>
                                        <th>Duty</th>
                                        <th>Export</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1;
                                for ($i=0; $i < 90; $i++) {
                                    echo '<tr>';
                                    echo '<td>'.$no.'</td>'; 
                                    for ($j=0; $j < 17; $j++) {
                                    if ($j==0) {
                                        echo '<td>'.$data_latih[$i][$j].'</td>';
                                    }
                                    else if ($data_latih[$i][$j]==1) {
                                        echo '<td>y</td>'; 
                                    }
                                    else{
                                        echo '<td>n</td>'; 
                                    }
                                    
                                    }
                                    $no++;
                                    echo '</tr>';
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <br>
                <h2>DATA UJI</h2>
                <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Class</th>
                                        <th>Infants</th>
                                        <th>Project</th>
                                        <th>Adoption</th>
                                        <th>Physician</th>
                                        <th>El-savador</th>
                                        <th>Religious</th>
                                        <th>Sattelite</th>
                                        <th>Aid</th>
                                        <th>Missile</th>
                                        <th>Immigration</th>
                                        <th>Synfuels</th>
                                        <th>Education</th>
                                        <th>Superfund</th>
                                        <th>Crime</th>
                                        <th>Duty</th>
                                        <th>Export</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1;
                                for ($i=0; $i < 10; $i++) {
                                    echo '<tr>';
                                    echo '<td>'.$no.'</td>'; 
                                    for ($j=0; $j < 17; $j++) {
                                    if ($j==0) {
                                        echo '<td>'.$data_uji[$i][$j].'</td>';
                                    }
                                    else if ($data_uji[$i][$j]==1) {
                                        echo '<td>y</td>'; 
                                    }
                                    else{
                                        echo '<td>n</td>'; 
                                    }
                                    
                                    }
                                    $no++;
                                    echo '</tr>';
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <br>
                <h2>DATA UJI  dengan MISSING VALUE</h2>
                <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Class</th>
                                        <th>Infants</th>
                                        <th>Project</th>
                                        <th>Adoption</th>
                                        <th>Physician</th>
                                        <th>El-savador</th>
                                        <th>Religious</th>
                                        <th>Sattelite</th>
                                        <th>Aid</th>
                                        <th>Missile</th>
                                        <th>Immigration</th>
                                        <th>Synfuels</th>
                                        <th>Education</th>
                                        <th>Superfund</th>
                                        <th>Crime</th>
                                        <th>Duty</th>
                                        <th>Export</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1;
                                for ($i=0; $i < 10; $i++) {
                                    echo '<tr>';
                                    echo '<td>'.$no.'</td>'; 
                                    for ($j=0; $j < 17; $j++) {
                                    if ($j==0) {
                                        echo '<td>'.$data_uji_mv[$i][$j].'</td>';
                                    }
                                    if($data_uji_mv[$i][$j]==='?'){
                                          echo '<td>?</td>';
                                    }
                                    else if ($data_uji_mv[$i][$j]===1) {
                                        echo '<td>y</td>'; 
                                    }
                                    
                                    else if($data_uji_mv[$i][$j]===0){
                                        echo '<td>n</td>'; 
                                    }
                                   
                                    }
                                    $no++;
                                    echo '</tr>';
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                <hr class="style9">
                <br>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center" style="padding-top: 200px;padding-bottom: 100px;">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Anggota Kelompok:</h2>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://plus.google.com/+TrafalgarMunir97" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Munir</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+nadzirmuhammad" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Nadzir</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/112249946308263162470" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Cakson</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/113476989145690311365" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Kevin</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Your Website 2016</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Theme JavaScript -->
    <script src="js/grayscale.min.js"></script>

</body>

</html>
