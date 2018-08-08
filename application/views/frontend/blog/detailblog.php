 <!-- breadcrumb area start -->
 <section class="hero-area breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero-area-content">
                    <h1><?= $detail['blog_title']; ?></h1>
                    <ul>
                        <li><a href="<?= base_url(); ?>">Home</a></li>
                        <li><a href="<?= base_url('blog'); ?>">Blog</a></li>
                        <li><a href="#"><?= $detail['blog_title']; ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!-- breadcrumb area end -->
<section class="blog-detail" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details">
                    <img src="<?= base_url('assets/img/article/'.$detail['blog_image']); ?>" alt="<?= $detail['blog_title']; ?>" title="<?= $detail['blog_title']; ?>">
                    <div class="post-author">
                        <a href="#"><i class="icofont icofont-user"></i>Admin</a>
                        <a href="#"><i class="icofont icofont-calendar"></i><?= date('d M y', strtotime($detail['publish_date'])); ?></a>
                        <a href="#"><i class="icofont icofont-tag"></i><?= $detail['category_name']; ?></a>
                    </div>
                    <p style="text-align: justify;"><p><?= $detail['blog_content'];  ?></p></p>
                </div>
                        <!-- <div class="blog-reply">
                            <h4>Leave a Reply</h4>
                            <form action="#" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" name="replyname" placeholder="Enter Your Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" name="replyemail" placeholder="Enter Your Email">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Messege" name="message"></textarea>
                                        <button type="submit" name="replysubmit">Post Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div> -->
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="widget">
                                <h4>Latest Post</h4>
                                <ul>
                                    <?php foreach ($latest as $key => $value): ?>
                                        <li><a href="<?= base_url('blog/detail/'.$value['blog_alias']).'/'.$value['blog_id']; ?>"><?= $value['blog_title']; ?></a></li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>