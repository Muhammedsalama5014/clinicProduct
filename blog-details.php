<?php use Clinic\Classes\Models\Blog;

include("inc/header.php");?>
  <?php

if(isset( $_GET['id'] )){
    $blog = new Blog();
    $blog = $blog->selectById($_GET['id']);
} else {
    $request->redirect("blog.php");
}
?>
        <!-- Page Title -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-7">
                        <h2>Blog Details</h2>
                    </div>

                    <div class="col-md-6 col-lg-5">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Blog Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Start Blog Details Area -->
        <section class="blog-details-area gray-bg ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="blog-details">
                            <div class="article-img">
                                <img src="assets/img/slider/1.jpg" alt="blog-details">
                                <div class="date">20 <br> Jan</div>
                            </div>
                            
                            <div class="article-content">
                                <ul class="category">
                                    <li><a href="#">IT</a></li>
                                    <li><a href="#">Mobile</a></li>
                                    <li><a href="#">Marketing</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Development</a></li>
                                </ul>
                                    
                                <h3><?php echo $blog['title'] ?></h3>

                                <p>
                                    <?php echo $blog['content'] ?>
                                </p>

                                <div class="share-post">
                                    <ul>
                                        <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                        <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                        <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                        <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                        <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="post-controls-buttons">
                            <div class="controls-left">
                                <a href="#"><i class="icofont-double-left"></i> Prev Post</a>
                            </div>

                            <div class="controls-right">
                                <a href="#">Next Post <i class="icofont-double-right"></i></a>
                            </div>
                        </div>
                        
                        <div class="post-comments">
                            <h3>Comments</h3>
                            <div class="single-comment">
                                <div class="comment-img">
                                    <img src="assets/img/client.jpg" alt="client">
                                </div>
                                <div class="comment-content">
                                    <h4>John Smith</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et minus, saepe porro a voluptatem, quidem aut libero consequatur unde molestiae quae impedit accusantium dolor est corporis! Dolores ut dignissimos doloribus?</p>
                                    <span>Jan 19, 2018 - 9:10AM</span>
                                    <a href="#">Reply</a>
                                </div>
                            </div>
                            
                            <div class="single-comment left-m">
                                <div class="comment-img">
                                    <img src="assets/img/client.jpg" alt="client">
                                </div>
                                <div class="comment-content">
                                    <h4>Doe John</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et minus, saepe porro a voluptatem, quidem aut libero consequatur unde molestiae quae impedit accusantium dolor est corporis! Dolores ut dignissimos doloribus?</p>
                                    <span>Jan 19, 2018 - 9:10AM</span>
                                    <a href="#">Reply</a>
                                </div>
                            </div>
                            
                            <div class="single-comment">
                                <div class="comment-img">
                                    <img src="assets/img/client.jpg" alt="client">
                                </div>
                                <div class="comment-content">
                                    <h4>Steven Doe</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et minus, saepe porro a voluptatem, quidem aut libero consequatur unde molestiae quae impedit accusantium dolor est corporis! Dolores ut dignissimos doloribus?</p>
                                    <span>Jan 19, 2018 - 9:10AM</span>
                                    <a href="#">Reply</a>
                                </div>
                            </div>
                            
                            <div class="single-comment">
                                <div class="comment-img">
                                    <img src="assets/img/client.jpg" alt="client">
                                </div>
                                <div class="comment-content">
                                    <h4>John Cina</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et minus, saepe porro a voluptatem, quidem aut libero consequatur unde molestiae quae impedit accusantium dolor est corporis! Dolores ut dignissimos doloribus?</p>
                                    <span>Jan 19, 2018 - 9:10AM</span>
                                    <a href="#">Reply</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="leave-a-reply">
                            <h3>Leave a Reply</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Full Name">
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="comment" cols="30" rows="5" class="form-control" placeholder="Your Comment"></textarea>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="side-bar">
                            <div class="widget search-box">
                                <form>
                                    <input type="text" class="form-control" id="search-box" name="search" placeholder="Search for...">
                                    <button type="submit" class="default-btn"><i class="icofont-ui-search"></i></button>
                                </form>
                            </div>
                            
                            <div class="widget latest-post">
                                <h4 class="title">Latest Post</h4>
                                
                                <div class="single-post">
                                    <div class="img">
                                        <a href="#"><img src="assets/img/news/latest-post1.jpg" alt="latest-post"></a>
                                    </div>
                                    
                                    <div class="content">
                                        <ul>
                                            <li>Posted by <a href="#">Admin</a></li>
                                        </ul>
                                        <h4><a href="#">Consulting Fee Structures: 5 Models Ranked from Worst to Best</a></h4>
                                    </div>
                                </div>
                                
                                <div class="single-post">
                                    <div class="img">
                                        <a href="#"><img src="assets/img/news/latest-post2.jpg" alt="latest-post"></a>
                                    </div>
                                    
                                    <div class="content">
                                        <ul>
                                            <li>Posted by <a href="#">Admin</a></li>
                                        </ul>
                                        <h4><a href="#">5 Secrets to a Successful Business Coaching Relationship</a></h4>
                                    </div>
                                </div>
                                
                                <div class="single-post">
                                    <div class="img">
                                        <a href="#"><img src="assets/img/news/latest-post3.jpg" alt="latest-post"></a>
                                    </div>
                                    
                                    <div class="content">
                                        <ul>
                                            <li>Posted by <a href="#">Admin</a></li>
                                        </ul>
                                        <h4><a href="#">How to Put Your Value Proposition to Work</a></h4>
                                    </div>
                                </div>
                                
                                <div class="single-post mb-0">
                                    <div class="img">
                                        <a href="#"><img src="assets/img/news/latest-post1.jpg" alt="latest-post"></a>
                                    </div>
                                    
                                    <div class="content">
                                        <ul>
                                            <li>Posted by <a href="#">Admin</a></li>
                                        </ul>
                                        <h4><a href="#">Consulting Sales for the Elite Consultant</a></h4>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="widget categories">
                                <h3 class="title">Categories</h3>
                                
                                <ul>
                                    <li><a href=#"><i class="icofont-double-right"></i> Business Consulting</a></li>
                                    <li><a href="#"><i class="icofont-double-right"></i> Financial Advice</a></li>
                                    <li><a href="#"><i class="icofont-double-right"></i> Market Research</a></li>
                                    <li><a href="#"><i class="icofont-double-right"></i> Business Solutions</a></li>
                                    <li><a href="#"><i class="icofont-double-right"></i> Professional Planning</a></li>
                                    <li><a href="#"><i class="icofont-double-right"></i> Finanace Services</a></li>
                                    <li><a href="#"><i class="icofont-double-right"></i> Business Planning</a></li>
                                </ul>
                            </div>
                            
                            <div class="widget popular-tags">
                                <h3 class="title">Popular Tags</h3>
                                
                                <ul>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Finanace</a></li>
                                    <li><a href="#">Solutions</a></li>
                                    <li><a href="#">Market Research</a></li>
                                    <li><a href="#">Planning</a></li>
                                    <li><a href="#">Advice</a></li>
                                    <li><a href="#">Financial</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Professional</a></li>
                                </ul>
                            </div>
                            
                            <div class="widget quick-contact mb-0">
                                <h4>Quick contact to help?</h4>
                                <p>Excepteur sint occaecat non proident, sunt in culpa officia deserunt mollit anim id est laborum.</p>
                                <a href="#">Contact Us <span class="right"><i class="icofont-double-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Details Area -->
        
        <!-- Call To Action -->
        <section class="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="call-to-action-text">
                            <i class="icofont-first-aid"></i>
                            <h3>Health Care Center</h3>
                            <p>if you have any Emerangcy by health problem contact this <span>No. 035 687 9514</span> or contact form</p>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <a href="#" class="default-btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Call To Action -->

<?php include("inc/footer.php");?>