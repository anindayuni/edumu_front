<section class="hero-area breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero-area-content">
                    <h1>Our Blog</h1>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="blog.html">Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-area blog-page" id="blog">
    <div class="container">
        <div class="row">
            <?php $data = json_decode($blog,true); ?>
            <?php foreach ($data as $key => $value) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-post">
                        <div class="post-thumbnail">
                            <a href="<?= base_url('blog/detail/'.$value['blog_alias']).'/'.$value['blog_id']; ?>"><img style="width: 340px;height: 226px;" src="<?= base_url('assets/img/article/').$value['blog_image']; ?>" alt="blog"></a>
                        </div>
                        <div class="post-details" style="height: 300px !important;">
                            <div class="post-author">
                                <a href="#"><i class="icofont icofont-user"></i>Admin</a>
                                <a href="#"><i class="icofont icofont-calendar"></i><?= date('d M Y', strtotime($value['publish_date'])) ?></a>
                            </div>
                            <h4 class="post-title"><a href="<?= base_url('blog/detail/'.$value['blog_alias']).'/'.$value['blog_id']; ?>"><?php $title = substr(strip_tags( $value['blog_title']), 0,90); if($title>90) echo $title."...";else echo $title; ?></a></h4>
                            <p style="text-align: justify;"><?= substr(strip_tags($value['blog_content']), 0,200).'...' ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>   
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="pagination">
                    <?php echo $mpaging; ?>
                    <!-- <ul class="pagination pagination-grid">
                        <li class="page active"><a>1</a></li>
                        <li class="page"><a href="blog/page/2.html">2</a></li>
                        <li class="next"><a href="blog/page/2.html"><span>Next</span> <i class="fa fa-angle-right"></i></a></li>
                        <li class="last"><a href="blog/page/2.html"><span>Last</span> <i class="fa fa-angle-double-right"></i></a></li>
                    </ul> -->                        
                </div>
            </div>
         </div>
    </div>
</section>