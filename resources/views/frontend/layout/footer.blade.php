<footer id="footer">
    <div class="container">
        <div class="row py-5 my-4">
            <div class="col-md-4 mb-4 mb-lg-0">
                <a href="{{ route('home')}}" class="logo pe-0 pe-lg-3">
                    <img alt="{{ __('site.firmaadi')}}" src="/logo.png" class="opacity-7 bottom-4" height="75">
                </a>
                <p class="mt-2 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper...</p>
                <p class="mb-0"><a href="#" class="btn-flat btn-xs text-color-light"><strong class="text-2">Devamını Oku</strong><i class="fas fa-angle-right p-relative top-1 ps-2"></i></a></p>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4">
                        <h5 class="text-3 mb-3">İLETİŞİM BİLGİLERİ</h5>

                        <ul class="list list-icons list-icons-lg">
                            <li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0">{{ config('settings.adres1')}}</p></li>
                            <li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i><p class="m-0"><a href="tel:{{ config('settings.telefon1')}}">{{ config('settings.telefon1')}}</a></p></li>
                            <li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i><p class="m-0"><a href="tel:{{ config('settings.telefon2')}}">{{ config('settings.telefon2')}}</a></p></li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h5 class="text-3 mb-3">ÇÖZÜMLERİMİZ</h5>

                        <ul class="list list-icons list-icons-sm">
                            @foreach ($Service as $item)
                                <li><i class="fas fa-angle-right"></i>
                                    <a href="{{ route('servicedetail', $item->slug)}}" class="link-hover-style-1 ms-1">    
                                        {{ $item->title}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h5 class="text-3 mb-3">ÜRÜNLERİMİZ</h5>

                        <ul class="list list-icons list-icons-sm">
                            @foreach ($ProductCategory as $item)
                                <li><i class="fas fa-angle-right"></i>
                                    <a href="{{ route('servicedetail', $item->slug)}}" class="link-hover-style-1 ms-1">    
                                        {{ $item->title}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright footer-copyright-style-2">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col d-flex align-items-center justify-content-center">
                    <p class="text-white text-4">© Copyright - {{config('settings.siteName').' '. date('Y')}}. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>