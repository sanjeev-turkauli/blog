<div>
    <main>
        <div class="container">
            <div class="row">

                <!-- blog-contents -->
                <section class="col-md-8">

                    <article class="blog-item">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="single_blog_page.html">
                                    <img src="assets/img/corporate.jpg" class="img-thumbnail center-block" alt="Blog Post Thumbnail">
                                </a>
                            </div>
                            <div class="col-md-9">
                                <p>
                                    in
                                    <a href="html5-templates.html">html5</a>
                                    ,
                                    <a href="#">templates</a>
                                    <time>23-july-2015<time>
                                </p>
                                <h1>
                                    <a href="single_blog_page.html">50+ best free responsive corporate template in 2015</a>
                                </h1>
                            </div>
                        </div>
                    
                        <div class="d-flex justify-content-end">
                            <div class="user-action d-flex justify-content-around align-items-center">
                                <i class="@if(isset($user_action['like'])) @if($user_action['like']->like_count > 0) fa-solid @else @endif fa-regular  @else fa-regular @endif fa-thumbs-up" wire:click.prevent="likeUnlike()">@if(isset($user_action['like'])) @if($user_action['like']->like_count > 0) <span> {{ $user_action['like']->like_count  }} </span> @else @endif @endif</i>
                                <i class="fa-regular fa-heart" wire:click.prevent="heart()">@if($heart > 0) <span> {{ $heart  }} </span> @endif</i>
                                <i class="fa-regular fa-comment" wire:click.prevent="message()">@if($message > 0) <span> {{ $message  }} </span> @endif</i>
                                <i class="fa-solid fa-share-nodes" wire:click.prevent="share()">@if($share > 0) <span> {{ $share  }} </span> @endif</i>
                            </div>
                        </div>
                    </article> <!-- /.blog-item -->

                    <article class="blog-item">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="assets/img/event.jpg" class="img-thumbnail center-block" alt="Blog Post Thumbnail">
                                </a>
                            </div>
                            <div class="col-md-9">
                                <p>
                                    in
                                    <a href="html5-templates.html">html5</a>
                                    ,
                                    <a href="#">templates</a>
                                    <time>23-july-2015<time>
                                </p>
                                <h1>
                                    <a href="single_blog_page.html">50+ best free responsive event template in 2015</a>
                                </h1>
                            </div>
                        </div>
                    </article> <!-- /.blog-item -->

                    <article class="blog-item">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="assets/img/restaurant.jpg" class="img-thumbnail center-block" alt="Blog Post Thumbnail">
                                </a>
                            </div>
                            <div class="col-md-9">
                                <p>
                                    in
                                    <a href="html5-templates.html">html5</a>
                                    ,
                                    <a href="#">templates</a>
                                    <time>23-july-2015<time>
                                </p>
                                <h1>
                                    <a href="single_blog_page.html">50+ best free responsive restaurant template in 2015</a>
                                </h1>
                            </div>
                        </div>
                    </article> <!-- /.blog-item -->

                    <article class="blog-item">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="assets/img/coming-soon.jpg" class="img-thumbnail center-block" alt="Blog Post Thumbnail">
                                </a>
                            </div>
                            <div class="col-md-9">
                                <p>
                                    in
                                    <a href="html5-templates.html">html5</a>
                                    ,
                                    <a href="#">templates</a>
                                    <time>23-july-2015<time>
                                </p>
                                <h1>
                                    <a href="single_blog_page.html">50+ best free responsive coming soon template in 2015</a>
                                </h1>
                            </div>
                        </div>
                    </article> <!-- /.blog-item -->

                    <article class="blog-item">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="assets/img/photography.jpg" class="img-thumbnail center-block" alt="Blog Post Thumbnail">
                                </a>
                            </div>
                            <div class="col-md-9">
                                <p>
                                    in
                                    <a href="html5-templates.html">html5</a>
                                    ,
                                    <a href="#">templates</a>
                                    <time>23-july-2015<time>
                                </p>
                                <h1>
                                    <a href="single_blog_page.html">50+ best free responsive photography template in 2015</a>
                                </h1>
                            </div>
                        </div>
                    </article> <!-- /.blog-item -->

                    <article class="blog-item">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="single_blog_page.html">
                                    <img src="assets/img/corporate.jpg" class="img-thumbnail center-block" alt="Blog Post Thumbnail">
                                </a>
                            </div>
                            <div class="col-md-9">
                                <p>
                                    in
                                    <a href="html5-templates.html">html5</a>
                                    ,
                                    <a href="#">templates</a>
                                    <time>23-july-2015<time>
                                </p>
                                <h1>
                                    <a href="single_blog_page.html">50+ best free responsive corporate template in 2015</a>
                                </h1>
                            </div>
                        </div>
                    </article> <!-- /.blog-item -->

                    <article class="blog-item">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="assets/img/event.jpg" class="img-thumbnail center-block" alt="Blog Post Thumbnail">
                                </a>
                            </div>
                            <div class="col-md-9">
                                <p>
                                    in
                                    <a href="html5-templates.html">html5</a>
                                    ,
                                    <a href="#">templates</a>
                                    <time>23-july-2015<time>
                                </p>
                                <h1>
                                    <a href="single_blog_page.html">50+ best free responsive event template in 2015</a>
                                </h1>
                            </div>
                        </div>
                    </article> <!-- /.blog-item -->

                    <article class="blog-item">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="assets/img/restaurant.jpg" class="img-thumbnail center-block" alt="Blog Post Thumbnail">
                                </a>
                            </div>
                            <div class="col-md-9">
                                <p>
                                    in
                                    <a href="html5-templates.html">html5</a>
                                    ,
                                    <a href="#">templates</a>
                                    <time>23-july-2015<time>
                                </p>
                                <h1>
                                    <a href="single_blog_page.html">50+ best free responsive restaurant template in 2015</a>
                                </h1>
                            </div>
                        </div>
                    </article> <!-- /.blog-item -->

                    <article class="blog-item">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="assets/img/coming-soon.jpg" class="img-thumbnail center-block" alt="Blog Post Thumbnail">
                                </a>
                            </div>
                            <div class="col-md-9">
                                <p>
                                    in
                                    <a href="html5-templates.html">html5</a>
                                    ,
                                    <a href="#">templates</a>
                                    <time>23-july-2015<time>
                                </p>
                                <h1>
                                    <a href="single_blog_page.html">50+ best free responsive coming soon template in 2015</a>
                                </h1>
                            </div>
                        </div>
                    </article> <!-- /.blog-item -->

                    <article class="blog-item">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="assets/img/photography.jpg" class="img-thumbnail center-block" alt="Blog Post Thumbnail">
                                </a>
                            </div>
                            <div class="col-md-9">
                                <p>
                                    in
                                    <a href="html5-templates.html">html5</a>
                                    ,
                                    <a href="#">templates</a>
                                    <time>23-july-2015<time>
                                </p>
                                <h1>
                                    <a href="single_blog_page.html">50+ best free responsive photography template in 2015</a>
                                </h1>
                            </div>
                        </div>
                    </article> <!-- /.blog-item -->

                    <div class="page-turn">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 text-center">
                                <nav>
                                    <ul class="pagination pagination-sm">
                                        <li class="disabled">
                                            <a href="#" aria-label="Previous">
                                                <span aria-hidden="true">Prev</span>
                                            </a>
                                        </li>
                                        <li class="active"><a href="index.html">1</a></li>
                                        <li><a href="page2.html">2</a></li>
                                        <li><a href="page3.html">3</a></li>
                                        <li><a href="page4.html">4</a></li>
                                        <li><a href="page5.html">5</a></li>
                                        <li>
                                            <a href="page6.html" aria-label="Next">
                                                <span aria-hidden="true">Next</span>
                                            </a>
                                        </li>
                                    </ul> <!-- /.pagination -->
                                </nav>
                            </div>
                        </div>
                    </div> <!-- /.page-turn -->

                </section>
                <!-- end of blog-contents -->

                <!-- sidebar -->
                <aside class="col-md-4 col-sm-8 col-xs-8">
                    <div class="sidebar">

                        <!-- search option -->
                        <div class="search-widget">
                            <div class="input-group margin-bottom-sm">
                                <input class="form-control" type="text" placeholder="Search here">
                                <a href="#" class="input-group-addon">
                                    <i class="fa fa-search fa-fw"></i>
                                </a>
                            </div>
                        </div>

                        <a href="http://themewagon.com/" class="template-images">
                            <img class="img-responsive" src="assets/img/store1.png" alt="Template Store">
                            <div class="overlay"></div>
                        </a>

                        <!-- subscribe form -->
                        <div class="subscribe-widget">
                            <h4 class="text-capitalize text-center">
                                get recent update by email
                            </h4>
                            <div class="input-group margin-bottom-sm">
                                <input class="form-control" type="text" placeholder="Your Email">
                                <a href="#" class="input-group-addon">
                                    <i class="fa fa-paper-plane fa-fw"></i>
                                </a>
                            </div>
                        </div>

                        <!-- sidebar share button -->
                        <div class="share-widget hidden-xs hidden-sm">
                            <ul class="social-share text-center">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul> <!-- /.sidebar-share-button -->
                        </div> <!-- /.share-widget -->

                    </div>
                </aside>
                <!-- end of sidebar -->

            </div>
        </div>
    </main>
</div>