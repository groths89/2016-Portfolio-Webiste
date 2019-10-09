<?php include('include/top.php'); ?>
<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Graphic Design
                    <small>Logos</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Logo Design</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 img-portfolio">
                <a class="fancybox" href="img/created_logos/aftr750x450.jpg" title="Along for the Ride Podcast">
                    <img class="img-responsive img-hover" src="img/created_logos/aftr750x450.jpg" alt="">
                </a>
            </div>
            <div class="col-md-3 img-portfolio">
                <a class="fancybox" href="img/created_logos/foody750x450.jpg" title="Foody Adventures Blog">
                    <img class="img-responsive img-hover" src="img/created_logos/foody750x450.jpg" alt="">
                </a>
            </div>
            <div class="col-md-3 img-portfolio">
                <a class="fancybox" href="img/created_logos/egthree750x450.png" title="EG3 Production Group">
                    <img class="img-responsive img-hover" src="img/created_logos/egthree750x450.png" alt="">
                </a>
            </div>
            <div class="col-md-3 img-portfolio">
                <a class="fancybox" rel="BSJ" href="img/created_logos/bsj750x450.jpg" title="Baseball Stadium Journey">
                    <img class="img-responsive img-hover" src="img/created_logos/bsj750x450.jpg" alt="Baseball Stadium Journey">
                </a>
                <a class="fancybox hidden" rel="BSJ" href="img/created_logos/bsj_two750x450.jpg" title="Baseball Stadium Journey">
                    <img class="img-responsive img-hover" src="img/created_logos/bsj_two750x450.jpg" alt="Baseball Stadium Journey">
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="img/created_logos/white.png" alt="">
                </a>
            </div>
            <div class="col-md-3 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="img/created_logos/white.png" alt="">
                </a>
            </div>
            <div class="col-md-3 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="img/created_logos/white.png" alt="">
                </a>
            </div>
            <div class="col-md-3 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="img/created_logos/white.png" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="img/created_logos/white.png" alt="">
                </a>
            </div>
            <div class="col-md-3 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="img/created_logos/white.png" alt="">
                </a>
            </div>
            <div class="col-md-3 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="img/created_logos/white.png" alt="">
                </a>
            </div>
            <div class="col-md-3 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="img/created_logos/white.png" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->
        <script type="text/javascript">
            $(document).ready(function(){
                $('.fancybox').fancybox({
                    beforeLoad : function() {
                        this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
                    }
                });
            });
        </script>
<?php include('include/bottom.php'); ?>