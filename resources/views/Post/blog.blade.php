{{-- @extends('layouts.master')
    
@section('main')

<div class="header">
  <h2>Blog Name</h2>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
    </div>
    <div class="card">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div>
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div>
  </div>
</div>

@endsection --}}


@extends('layouts.master')
    
@section('main')

<body id="top">
  

        <header id="navigation" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
                    </button>
          <!-- /responsive nav button -->
          
          <!-- logo -->
          <h1 class="navbar-brand">
            <a href="#body"><img src="img/logo.png" height="40" width="164" alt=""></a>
          </h1>
          <!-- /logo -->
                </div>

        <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav menu">
                        <li><a href="#top">Home</a></li>
                        <li><a href="#features">Service</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#pricing-table">Price</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#testimonial">Testimonial</a></li>
                        <li><a href="#contact-form">Contact</a></li>
                    </ul>
                </nav>
        <!-- /main nav -->
        
            </div>
        </header>


  <div class="wrapper">
    <section id="global-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="block text-center">
              <h1>BIG HEADLINE FOR BLOG</h1>
              <p>13 MARCH 2015 / BY SARA SMITH</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="blog-left">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-0 col-sm-10 col-sm-offset-1">
            <div class="blog-img row">
              <div class="col-md-12">
                <img class="img-responsive" src="img/blog-details-img2.jpg" alt="">
              </div>
              <div class="col-md-6 col-sm-6">
                <img class="img-responsive" src="img/blog-details-img3.jpg" alt="">
              </div>
              <div class="col-md-6 col-sm-6">
                <img class="img-responsive" src="img/blog-details-img4.jpg" alt="">
              </div>
            </div>
            <div class="block">
              <span class="first-child-span">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
              <p class="first-child">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text.</p>
              <blockquote>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text.</p>
                <div class="footer">
                  Jason Santa Maria
                </div>
              </blockquote>
              <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</span>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text.</p>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p><br>
              <div class="tags">
                <h5>Tags</h5>
                <a href="#">Advertisement</a>,
                <a href="#">Smart Quotes</a>,
                <a href="#">Unique</a>,
                <a href="#">Design</a>
              </div>
              <div class="blog-comment">
                <a class="comment-img" href="#"><img class="img-responsive" src="img/avtar6.jpg" alt=""></a>
                <div class="comment-text">
                  <h5><a href="#">About The Author</a></h5>
                  <span>Paul Scrivens - Creative Head</span>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
              </div>
              <!-- social media icon -->
              <div class="media-link">
                <a href="https://www.facebook.com/acorewingfoundation"><i class="fa fa-facebook"></i></a>
                <a href="https://www.youtube.com/channel/UC4mSfi2sEvIG54nwCnJ-xiQ"><i class="fa fa-youtube"></i></a>
                <a href="https://www.linkedin.com/company/acorewingfoundation"><i class="fa fa-linkedin"></i></a>
                <a href="https://www.twitter.com/acorewing"><i class="fa fa-twitter"></i></a>
              </div>
            </div>
            <div class="blog-comment-main">
              <div class="blog-comment">
                <a class="comment-img" href="#">
                  <img class="img-responsive" src="img/blog-details-img5.jpg" alt="">
                </a>
                <div class="comment-text">
                  <a class="title" href="#">Kristi Hines</a>
                  <span>September 05th, 2015</span>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  <a class="btn" href="#">Post Reply</a>
                </div>
              </div>
              <div class="sub-blog-comment">
                <a class="comment-img" href="#">
                  <img class="img-responsive" src="img/blog-details-img6.jpg" alt="">
                </a>
                <div class="comment-text">
                  <a class="title" href="#">Ray Michael</a>
                  <span>September 05th, 2015</span>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  <a class="btn" href="#">Post Reply</a>
                </div>
              </div>
              <div class="blog-comment">
                <a class="comment-img" href="#">
                  <img class="img-responsive" src="img/avtar6.jpg" alt="">
                </a>
                <div class="comment-text">
                  <a class="title" href="#">Kristi Hines</a>
                  <span>September 05th, 2015</span>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  <a class="btn" href="#">Post Reply</a>
                </div>
              </div>
            </div>
            <div class="addcomment">
              <span>Leave a Comment</span>
              <div class="blog-comment-form">
                <form action="{{route('comments.save')}}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  {{csrf_field()}}
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    <textarea class="form-control" rows="3" id="message" name="message" placeholder="Message"></textarea>
                    <button class="btn btn-default" type="submit">Send Message</button>
                </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-md-offset-1 col-sm-4">
            <div class="widget">
              <form>
                <i class="fa fa-search"></i>
                <input type="text" name="search" class="" placeholder="TYPE KEYWORD HERE...">
              </form>
            </div>
            <div class="widget">
              <span>Categories</span>
              <div class="widget-body">
                <ul class="category-list">
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Featured Blog</a></li>
                    <li><a href="#">Photography Idea</a></li>
                    <li><a href="#">Design Tutorials</a></li>
                    <li><a href="#">News and Events</a></li>
                    <li><a href="#">Arts and Entertainment</a></li>
                </ul>
              </div>
            </div>
            <div class="widget">
              <span>ABOUT ME</span>
              <div class="widget-body">
                <img class="img-responsive" src="img/blog-img8.jpg" alt="">
                <span class="title">JOHN DEO</span>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been industry's standard.</p>
              </div>
            </div>
            <div class="widget">
              <span>TEXT WIDGET</span>
              <div class="widget-body">
                <p>Lorem Ipsum is simply dummy text of printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the of type and scrambled it to make a type specimen.</p>
              </div>
            </div>
            <div class="widget">
              <span>POPULAR POSTS</span>
              <div class="widget-body">
                <ul class="category-list">
                    <li><a class="items" href="#">Standard Post with Gallery</a>Saturday - June 15, 2013</li>
                    <li><a class="items" href="#">Standard post with preview Video</a>Saturday - June 20, 2013</li>
                    <li><a class="items" href="#">Standard post with preview Picture</a>Saturday - June 25, 2013</li>
                    <li><a class="items" href="#">Standard Post with Gallery</a>Saturday - June 15, 2013</li>
                </ul>
              </div>
            </div>
            <div class="widget sidebar-tags">
              <span>Tags</span>
              <div class="widget-body">
                <a href="#">Advertisement</a>
                <a href="#">Fashion</a>
                <a href="#">Sea</a>
                <a href="#">Forest</a>
                <a href="#">Nature</a>
                <a href="#">Portrait</a>
                <a href="#">Wordpress</a>
                <a href="#">Photo</a>
                <a href="#">Sky</a>
              </div>
            </div>
            <div class="widget">
              <span>RECENT COMMENTS</span>
              <div class="widget-body">
                <ul class="category-list">
                    <li><a href="#">Standard Post with Gallery</a>Saturday - June 15, 2013</li>
                    <li><a href="#">Standard post with preview Video</a>Saturday - June 20, 2013</li>
                    <li><a href="#">Standard post with preview Picture</a>Saturday - June 25, 2013</li>
                    <li><a href="#">Standard Post with Gallery</a>Saturday - June 15, 2013</li>
                </ul>
              </div>
            </div>
            <div class="widget">
              <a href="#">
                <img class="img-responsive" src="img/blog-img7.jpg" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="block">
              <a href="#"><img src="img/logo.png" alt=""></a>
              <p>All rights reserved © 2015</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
@endsection