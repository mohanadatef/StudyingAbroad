///////////////////ترجمه الحاجات الثابته//////////////////
{{ trans('lang.singlegetinvolvedshort') }}
///////////////////////الميدر وير////////////////
بكون الhelpers
if (!function_exists('language'))
{
    function language($ar, $en)
    {
        if( \Illuminate\Support\Facades\App::getLocale() == 'ar' )
            return $ar;
        else
            return $en;
    }
}
بكون ميدر وير بللغه
if( $request->cookie('language') )
{
App::setlocale($request->cookie('language'));
}
return $next($request);
kernal
\App\Http\Middleware\LangMiddelware::class,
'language' => \App\Http\Middleware\LangMiddelware::class,
//////////////////////ازاى بينادي على الحاجه///////////////////////
@foreach($country as $my)
<h1>{{language($my->name_ar,$my->name_en)}}</h1>
    @endforeach
/////////////////////ازاى اغير اللغه///////////////////
{!! Form::open(['url'=>'setLang','class'=>'navbar-form navbar-left']) !!}
<div class="form-group">
    <select name='lang' onchange="this.form.submit();">
        <?php if( \Illuminate\Support\Facades\App::getLocale() == 'en' ): ?>
        <option value='en' selected>English</option>
        <option value='ar'>عربى</option>
        <?php else: ?>
        <option value='en'>English</option>
        <option value='ar' selected>عربى</option>
        <?php endif; ?>
    </select>
</div>
{!! Form::close() !!}