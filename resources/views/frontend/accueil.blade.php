@extends('frontend.layouts.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">{{ $page->title }}</h1>
                {!! $page->content !!}
            </div>

        </div>
        <hr/>
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Nos Services</h1>
                <ul id="filters">
                    <li><a href="#" data-filter="*" class="selected">show all</a></li>
                    <li><a href="#" data-filter=".illustration">Soirée</a></li>
                    <li><a href="#" data-filter=".mobile">Mariage</a></li>
                    <li><a href="#" data-filter=".photography">Cours</a></li>
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
                                <a class="img-icon-zoom" href="frontend/coco/img01.jpg" data-type="prettyPhoto[gallery]" title=""></a>
                            </span>
                            <span class="pf_text">
                                <span class="project-name">Project Name #1</span>
                                <span>Mobile</span>
                            </span>
                        </span>
                        <img src="frontend/images/pf_blank.gif" data-original="frontend/coco/img01.jpg" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="col-md-6 item photography" style="width: 49%">
                    <div class="picframe">
                        <span class="overlay">
                            <span class="info-area">
                                <a class="img-icon-url" href="project-single.html"></a>
                                <a class="img-icon-zoom" href="frontend/coco/img02.jpg" data-type="prettyPhoto[gallery]" title=""></a>
                            </span>
                            <span class="pf_text">
                                <span class="project-name">Project Name #2</span>
                                <span>Photography</span>
                            </span>
                        </span>
                        <img src="frontend/images/pf_blank.gif" data-original="frontend/coco/img02.jpg" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="col-md-6 item website photography" style="width: 49%">
                    <div class="picframe">
                        <span class="overlay">
                            <span class="info-area">
                                <a class="img-icon-url" href="project-single.html"></a>
                                <a class="img-icon-zoom" href="frontend/coco/img03.jpg" data-type="prettyPhoto[gallery]" title=""></a>
                            </span>
                            <span class="pf_text">
                                <span class="project-name">Project Name #3</span>
                                <span>Website, Mobile</span>
                            </span>
                        </span>
                        <img src="frontend/images/pf_blank.gif" data-original="frontend/coco/img03.jpg" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="col-md-6 item illustration" style="width: 49%">
                    <div class="picframe">
                        <span class="overlay">
                            <span class="info-area">
                                <a class="img-icon-url" href="project-single.html"></a>
                                <a class="img-icon-zoom" href="frontend/coco/img04.jpg" data-type="prettyPhoto[gallery]" title=""></a>
                            </span>
                            <span class="pf_text">
                                <span class="project-name">Project Name #4</span>
                                <span>Illustration</span>
                            </span>
                        </span>
                        <img src="frontend/images/pf_blank.gif" data-original="frontend/coco/img04.jpg" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->


            </div>
        </div>

    </div>

@stop