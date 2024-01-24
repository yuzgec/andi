@extends('frontend.layout.app')
@section('content')
    @include('frontend.layout.slider')

    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-md-4 py-lg-5 my-lg-5 mb-4">

                <div class="pe-3 pe-md-5 pb-3 pb-sm-0 py-lg-5 my-lg-4 border-right-light border-sm-none">
                    <h4 class="mb-2">{{ config('settings.siteName')}}</h4>
                    <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam esse, corrupti repudiandae nostrum sunt, ipsum facilis nihil inventore iusto expedita nobis culpa non provident asperiores nam corporis quo beatae officia.</p>
                    <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam esse, corrupti repudiandae nostrum sunt, ipsum facilis nihil inventore iusto expedita nobis culpa non provident asperiores nam corporis quo beatae officia.</p>
                    <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam esse, corrupti repudiandae nostrum sunt, ipsum facilis nihil inventore iusto expedita nobis culpa non provident asperiores nam corporis quo beatae officia.</p>
                </div>

            </div>
            <div class="col-sm-8 ps-5">

                <div class="cascading-images-wrapper bg-color-grey border-radius-2 p-5 w-100 text-center">
                    <div class="cascading-images transform-none position-relative clearfix">

                        <div class="position-absolute z-index-3" style="top: 20%;">
                            <div data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                                <img src="https://picsum.photos/100/100/?blur=3" style="max-width: 200px;" class="appear-animation border-radius-2 box-shadow-3" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="300" data-appear-animation-duration="600ms" />
                            </div>
                        </div>

                        <div class="position-relative z-index-2">
                            <img src="https://picsum.photos/600/600/?blur=4" class="appear-animation border-radius-2 box-shadow-3" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-duration="600ms" />
                        </div>

                        <div class="patterns opacity-7 position-absolute z-index-1 d-none d-md-block" style="bottom: -8%; right: 9%;">
                            <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}" style="width: 310px; height: 170px;">
                                <svg width="100%" height="100%">
                                    <defs>
                                        <pattern id="dots" x="0" y="0" width="18" height="18" patternUnits="userSpaceOnUse">
                                            <circle fill="#0088cc" cx="1.5" cy="1.5" r="1.5" />
                                        </pattern>
                                    </defs>
                                    <rect x="0" y="0" width="100%" height="100%" fill="url(#dots)" />
                                </svg>
                            </div>
                        </div>

                        <div class="patterns opacity-7 position-absolute z-index-1 d-none d-md-block" style="top: 10%; left: -38.2%;">
                            <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}" style="width: 310px; height: 170px;">
                                <svg width="100%" height="100%">
                                    <defs>
                                        <pattern id="dots2" x="0" y="0" width="18" height="18" patternUnits="userSpaceOnUse">
                                            <circle fill="#CCC" cx="1.5" cy="1.5" r="1.5" />
                                        </pattern>
                                    </defs>
                                    <rect x="0" y="0" width="100%" height="100%" fill="url(#dots2)" />
                                </svg>
                            </div>
                        </div>

                    </div>
                </div>
  

            </div>

        </div>

    </div>                        

@endsection

@section('customJS')
   
@endsection
