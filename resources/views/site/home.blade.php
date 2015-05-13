@extends('layout.main')

@section('Content')
<!-- PRELOADER -->
<div id="preloader">{!! Html::image('images/preloader.gif') !!}</div>
<!-- //PRELOADER -->
<div class="preloader_hide">

    <!-- PAGE -->
    <div id="page">

        <!-- HEADER -->
        <header>
            @include('layout.partialLayout.menu')
        </header>
        <!-- //HEADER -->

        <!-- SCHOOL SALE -->
        <section class="school_sale parallax" style='background-image:url();'>

            <!-- CONTAINER -->
            <div class="container">

                <div class="school_sale_description">

                    <div class="center">
                        <p><br/>G L A M M Y</p>
      
                        <input type="text" placeholder="Search like Maxi Dress, Cardigan, etc..."/> 
                        <a class="btn btn-sm active" href="javascript:void(0);" ><i class="fa fa-search"></i></a>
                    </div>
                </div>

                <div class="center">
                    <div class="findout"><a href="#" style="color: white;">Black Friday Fashion, Get All Item Discount Up To 50% !!!</a></div>
                </div>

            </div><!-- //CONTAINER -->
        </section><!-- //SCHOOL SALE -->

        <br/><br/>
        <!-- BANNER SECTION -->
        <section class="banner_section padbot0">

            <!-- CONTAINER -->
            <div class="container" data-appear-top-offset='-100' data-animated='fadeInUp'>

                <!-- ROW -->
                <div class="row">
                    <div class="top_sale_banners center">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-ss-12"><a class="banner nobord margbot30" href="javascript:void(0);" ><img src="images/tovar/banner17.jpg" alt="" /></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-ss-12"><a class="banner nobord margbot30" href="javascript:void(0);" ><img src="images/tovar/banner30.jpg" alt="" /></a></div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-ss-12"><a class="banner nobord margbot30" href="javascript:void(0);" ><img src="images/tovar/banner23.jpg" alt="" /></a></div>
                    </div>
                </div><!-- //ROW -->
            </div><!-- //CONTAINER -->
        </section><!-- //BANNER SECTION -->

        <!-- BANNER SECTION -->
        <section class="banner_section">

            <!-- CONTAINER -->
            <div class="container" data-appear-top-offset='-100' data-animated='fadeInUp'>

                <!-- ROW -->
                <div class="row">
                    <div class="top_sale_banners center">
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 col-ss-12"><a class="banner nobord margbot30" href="javascript:void(0);" ><img src="images/tovar/banner15.jpg" alt="" /></a></div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 col-ss-12"><a class="banner nobord margbot30" href="javascript:void(0);" ><img src="images/tovar/banner16.jpg" alt="" /></a></div>
                    </div>
                </div><!-- //ROW -->
            </div><!-- //CONTAINER -->
        </section><!-- //BANNER SECTION -->

        <!-- SERVICES SECTION -->
        <section class="services_section">

            <!-- CONTAINER -->
            <div class="container">

                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-6 col-md-6 padbot60 services_section_description" data-appear-top-offset='-100' data-animated='fadeInLeft'>
                        <p>GLAMMY , Pusat Belanja Fashion & Hijab Online Dengan Style Terkini</p>
                        <span>
                            GLAMMY adalah pusat belanja fashion online yang dapat menjawab kebutuhan fashion & hijab wanita dengan menawarkan lokal brand terkemuka. Kami menyediakan produk - produk
                            yang selalu menjadi <i>trendsetter</i> di ruang lingkup fashion & hijab wanita yang akan memberikan banyak pilihan untuk menyempurnakan penampilan anda. Berbagai model Atasan, Bawahan, Dress, Celana, Hijab hingga Aksesoris
                            dapat dengan mudah anda temukan disini. Dengan harga yang terjangkau, anda dapat menjual kembali produk dari GLAMMY jika anda ingin memulai terjun di bisnis fashion dengan berbagai program afiliasi menarik dari kami. Temukan dan dapatkan keleksi lengkapnya hanya dengan berbelanja di pusat Fashion & Hijab, GLAMMY.
                        </span>
                    </div>

                    <div class="col-lg-6 col-md-6 padbot30" data-appear-top-offset='-100' data-animated='fadeInRight'>

                        <!-- ROW -->
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6 col-ss-12 padbot30">
                                <div class="service_item">
                                    <div class="clearfix"><i class="fa fa-truck"></i><p>PENGIRIMAN</p></div>
                                    <span>GLAMMY memberikan Gratis Ongkos Kirim Ke Seluruh Indonesia Kepada Pelanggan GLAMMY. Syarat Dan Ketentuan Berlaku.</span>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6 col-ss-12 padbot30">
                                <div class="service_item">
                                    <div class="clearfix"><i class="fa fa-gift"></i><p>MERCHANDISE</p></div>
                                    <span>GLAMMY memberikan Reward Bagi Pelanggan Berupa Gift Hingga Cashback Senilai <b>50%</b> Atas Apresiasi GLAMMY Terhadap Pelanggan.</span>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6 col-ss-12 padbot30">
                                <div class="service_item">
                                    <div class="clearfix"><i class="fa fa-check-square-o"></i><p>PELAYANAN</p></div>
                                    <span>GLAMMY Memberikan Pelayanan Terbaik Bagi Pelanggan GLAMMY Dimulai Dari Sebelum Pembelian ( Pre Sales ) Hingga Setelah Pembelian ( After Sales ).</span>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6 col-ss-12 padbot30">
                                <div class="service_item">
                                    <div class="clearfix"><i class="fa fa-credit-card"></i><p>PEMBAYARAN</p></div>
                                    <span>GLAMMY Menerima Hampir Semua Jenis Pembayaran Antara Lain <b>Transfer Antar Rekening</b> , <b>E - Currency</b> , <b>Kartu Kredit</b> , Dan Lain - Lain Untuk Memudahkan Pelanggan GLAMMY.</span>
                                </div>
                            </div>
                        </div><!-- //ROW -->
                    </div>
                </div><!-- //ROW -->
            </div><!-- //CONTAINER -->
        </section><!-- //SERVICES SECTION -->

        <!-- FOOTER -->
        <footer>
            @include('layout.partialLayout.footer')
        </footer>
        <!-- //FOOTER -->

    </div><!-- //PAGE -->
</div>

<!-- TOVAR MODAL CONTENT -->
<div id="modal-body" class="clearfix">
    <div id="tovar_content"></div>
    <div class="close_block"></div>
</div><!-- TOVAR MODAL CONTENT -->
@stop
