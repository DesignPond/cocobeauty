@extends('frontend.layouts.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>{{ $page->title }}</h1>
                {!! $page->content !!}
            </div>

            <div class="col-md-8">
                <img class="thumbnail" src="{{ asset('frontend/images/portfolio/tripic2.jpg') }}" alt="">
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-12">
                <h1>Nos Services</h1>
                <ul id="filters">
                    <li><a href="#" data-filter="*" class="selected">show all</a></li>
                    <li><a href="#" data-filter=".illustration">Illustration</a></li>
                    <li><a href="#" data-filter=".mobile">Mobile</a></li>
                    <li><a href="#" data-filter=".photography">Photography</a></li>
                    <li><a href="#" data-filter=".website">Website</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div id="gallery" class="gallery">

                <!-- gallery item -->
                <div class="col-md-6 item mobile" style="width: 49%">
                    <div class="picframe">
                        <span class="overlay">
                            <span class="info-area">
                                <a class="img-icon-url" href="project-single.html"></a>
                                <a class="img-icon-zoom" href="frontend/images/portfolio/pf%20(1).jpg" data-type="prettyPhoto[gallery]" title=""></a>
                            </span>
                            <span class="pf_text">
                                <span class="project-name">Project Name #1</span>
                                <span>Mobile</span>
                            </span>
                        </span>
                        <img src="frontend/images/pf_blank.gif" data-original="frontend/images/portfolio/pf%20(1).jpg" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="col-md-6 item photography" style="width: 49%">
                    <div class="picframe">
                        <span class="overlay">
                            <span class="info-area">
                                <a class="img-icon-url" href="project-single.html"></a>
                                <a class="img-icon-zoom" href="frontend/images/portfolio/pf%20(2).jpg" data-type="prettyPhoto[gallery]" title=""></a>
                            </span>
                            <span class="pf_text">
                                <span class="project-name">Project Name #2</span>
                                <span>Photography</span>
                            </span>
                        </span>
                        <img src="frontend/images/pf_blank.gif" data-original="frontend/images/portfolio/pf%20(2).jpg" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="col-md-6 item website photography" style="width: 49%">
                    <div class="picframe">
                        <span class="overlay">
                            <span class="info-area">
                                <a class="img-icon-url" href="project-single.html"></a>
                                <a class="img-icon-zoom" href="frontend/images/portfolio/pf%20(3).jpg" data-type="prettyPhoto[gallery]" title=""></a>
                            </span>
                            <span class="pf_text">
                                <span class="project-name">Project Name #3</span>
                                <span>Website, Mobile</span>
                            </span>
                        </span>
                        <img src="frontend/images/pf_blank.gif" data-original="frontend/images/portfolio/pf%20(3).jpg" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="col-md-6 item illustration" style="width: 49%">
                    <div class="picframe">
                        <span class="overlay">
                            <span class="info-area">
                                <a class="img-icon-url" href="project-single.html"></a>
                                <a class="img-icon-zoom" href="frontend/images/portfolio/pf%20(4).jpg" data-type="prettyPhoto[gallery]" title=""></a>
                            </span>
                            <span class="pf_text">
                                <span class="project-name">Project Name #4</span>
                                <span>Illustration</span>
                            </span>
                        </span>
                        <img src="frontend/images/pf_blank.gif" data-original="frontend/images/portfolio/pf%20(4).jpg" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="col-md-6 item website photography" style="width: 49%">
                    <div class="picframe">
                        <span class="overlay">
                            <span class="info-area">
                                <a class="img-icon-url" href="project-single.html"></a>
                                <a class="img-icon-zoom" href="frontend/images/portfolio/pf%20(5).jpg" data-type="prettyPhoto[gallery]" title=""></a>
                            </span>
                            <span class="pf_text">
                                <span class="project-name">Project Name #5</span>
                                <span>Website, Photography</span>
                            </span>
                        </span>
                        <img src="frontend/images/pf_blank.gif" data-original="frontend/images/portfolio/pf%20(5).jpg" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="col-md-6 item mobile" style="width: 49%">
                    <div class="picframe">
                        <span class="overlay">
                            <span class="info-area">
                                <a class="img-icon-url" href="project-single.html"></a>
                                <a class="img-icon-zoom" href="frontend/images/portfolio/pf%20(6).jpg" data-type="prettyPhoto[gallery]" title=""></a>
                            </span>
                            <span class="pf_text">
                                <span class="project-name">Project Name #6</span>
                                <span>Mobile</span>
                            </span>
                        </span>
                        <img src="frontend/images/pf_blank.gif" data-original="frontend/images/portfolio/pf%20(6).jpg" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->


            </div>
        </div>

    </div>

@stop