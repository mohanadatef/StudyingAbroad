<section id="header">
    <div id="head1Id" class="header-part1">
        <a href="{{ url('') }}">
        <img class="img-logo" src="{{ asset('public/images/setting/' . $setting->image ) }}">
        </a>
        <div class="social-icons">
            <a href="http://{{$setting->facebook}}" style="text-decoration: none;color: inherit;">   <span class="icon-pad header-icon-face   "><i class="fab fa-facebook-f"></i></span> </a>
            <a href="http://{{$setting->twitter}}" style="text-decoration: none;color: inherit;">  <span class="icon-pad header-icon-twitter"><i class="fab fa-twitter"></i></span>  </a>
            <a href="http://{{$setting->youtube}}" style="text-decoration: none;color: inherit;">   <span class="icon-pad header-icon-youtube"><i class="fab fa-youtube"></i></span> </a>
            <span class="break-icon icon-pad">|</span>
            {!! Form::open(['url'=>'setLang','class'=>'lang-link','data-width'=>'fit']) !!}
        <?php if( \Illuminate\Support\Facades\App::getLocale() == 'en' ): ?>
                    <span id="eng-lang"  class="lang-disabled" ><button disabled class="lang-link"><img  src="{{url('/public/assets/imgs/flag-england.png')}}" alt="Avatar" class="avatar">English</button></span>
                    <span><a>|</a></span>
                    <span id="arb-lang" ><button name="lang" value="ar" type="submit" onclick="changeLang(this,'ar')" class="lang-link"><img src="{{url('/public/assets/imgs/Flag_Egypt.png')}}" alt="Avatar" class="avatar">Arabic</button></span>
                <?php else: ?>
                    <span id="eng-lang" ><button  name="lang" value="en" type="submit" onclick="changeLang(this,'en')"  class="lang-link"><img src="{{url('/public/assets/imgs/flag-england.png')}}" alt="Avatar" class="avatar">English</button></span>
                    <span><a>|</a></span>
                    <span id="arb-lang" class="lang-disabled" ><button  disabled class="lang-link"><img src="{{url('/public/assets/imgs/Flag_Egypt.png')}}" alt="Avatar" class="avatar">Arabic</button></span>
                <?php endif; ?>
            {!! Form::close() !!}
        </div>
    </div>

    @include('includes.frontend.navbar')
</section>