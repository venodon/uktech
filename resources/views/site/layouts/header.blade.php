<!DOCTYPE html>
<html lang="ru">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta content="width=device-width" name="viewport" />
  <meta name="author" content="{{ $meta['author'] ?? '' }}" />
  <title>{{ $meta['title'] ?? '' }}</title>
  <meta content="{{ $meta['description'] ?? '' }}" name="description">
  <meta content="{{ $meta['keywords'] ?? '' }}" name="keywords">
  <meta http-equiv="Last-Modified" content="{{ ($meta['created_at'] ?? '') ?? ($meta['updated_at'] ?? '') }}" />
  <link rel="icon" href="/images/favicon.png" sizes="32x32" type="favicon" />
  <link rel="stylesheet" href="/css/additional.css">
  <link rel="stylesheet" href="/css/libs/bootstrap-components.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
  <link rel="stylesheet" href="http://cdn.jsdelivr.net/jquery.mcustomscrollbar/3.0.6/jquery.mCustomScrollbar.min.css">
  <link rel="stylesheet" href="/css/libs/venobox.css">
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/responsive.css">

  <meta property="og:title" content="{{ $meta['title'] ?? '' }}" />
  {{--<meta property="og:type" content="movie"/>--}}
  <meta property="og:url" content="{{ \URL::full() }}" />
  <meta property="og:image" content="{{ $meta['og_image'] ?? '' }}" />
  {{--<meta property="og:site_name" content="IMDb"/>--}}
  {{--<meta property="fb:admins" content="USER_ID"/>--}}
  <meta property="og:description" content="{{ $meta['description'] ?? '' }}" />
</head>
<body>
<div class="wrapper">
  @if(env('PRELOADER'))
    <div class="preloader">
      <div class="inner-box">
        <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
      </div>
    </div>
  @endif
  <header class="site-header">
    <div class="action-line">
      <div class="container-fluid">
        <div class="search-form-holder">
          <form role="search" class="search-form" action="/search">
            <input type="search" name="q" class="search-field" placeholder="@lang('main.i_m_searching_for') ..." />
            <input type="submit" class="search-submit" value="OK" />
          </form>

          <a href="javascript:void(0);" class="search-btn">
            <svg>
              <use xlink:href="/images/svg/sprite.svg#search-icon"></use>
            </svg>
            @lang('main.search')
          </a>
        </div>

        <a href="tel:{!! $langSt($params['phone_top']['key']) !!}" class="phone-link link">
          {!! $langSt($params['phone_top']['key']) !!}
        </a>

        <a href="#" class="modal-btn link" data-toggle="modal" data-target=".request-modal">
          @lang('main.request_a_call')
        </a>
<script>
  function changeLang(lang) {
var url=lang==='ru'?document.location.href.replace('/en','/ru'):document.location.href.replace('/ru','/en');
document.location.href=url;
  }
</script>
        <select
          name="languages"
          class="languages" title=""
          onchange="changeLang(this.value)"
        >
          @if($lang === 'en')
            <option value="en">EN</option>
            <option value="ru">RU</option>
          @else
            <option value="ru">RU</option>
            <option value="en">EN</option>
          @endif
        </select>

        <a href="#" id="sound-switcher" class="sound-switcher {{ env('AUDIO_AUTOPLAY') ? '' : 'muted' }}">
          <svg>
            <use xlink:href="/images/svg/sprite.svg#speaker-icon"></use>
          </svg>
        </a>
      </div>
    </div>
    <div class="container-fluid navigation-area">
      <div class="logo-set">
        <a class="logo" href="/">
          {{--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 159 50">
            <defs><style>.cls-4 {fill: #ba8558}</style><linearGradient id="Безымянный_градиент" data-name="Безымянный градиент" x1="4.82" y1="24.8" x2="34.34" y2="44.08" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ff9f00" /><stop offset="1" stop-color="#c41162" /></linearGradient><linearGradient id="Безымянный_градиент_2" data-name="Безымянный градиент 2" x1="22.18" y1="37.69" x2="32.09" y2="21.34" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#c41162" /><stop offset="1" stop-color="#5a4b88" /></linearGradient></defs>
            <path d="M35.4 6.2A20.58 20.58 0 0 0 6.3 35.3l14.5 14.5 14.5-14.5a20.55 20.55 0 0 0 .1-29.1zm-9.7 19.4a6.86 6.86 0 1 1 0-9.7 6.82 6.82 0 0 1 0 9.7z" fill="#5a4b88" />
            <path fill="url(#Безымянный_градиент)" d="M35.33 35.2L20.91 20.77l-.1-.1-.1.1L6.24 35.24 20.81 49.8l14.55-14.57-.03-.03z" />
            <path fill="url(#Безымянный_градиент_2)" d="M20.81 20.67V49.8l14.55-14.57-14.55-14.56z" />
            <path class="cls-4" d="M88.7 8.4a3 3 0 0 0-1.3-.9 5.62 5.62 0 0 0-2-.3h-2.8a1 1 0 0 0-1 1V20a.55.55 0 0 0 .2.5.76.76 0 0 0 .5.2.55.55 0 0 0 .5-.2.76.76 0 0 0 .2-.5v-4.3l2.4-.1a4.5 4.5 0 0 0 3.1-1.1 4.17 4.17 0 0 0 1.1-3.1 4.14 4.14 0 0 0-.2-1.6 3.09 3.09 0 0 0-.7-1.4zm-1.4 5.2a2.82 2.82 0 0 1-2.1.7H83V8.8h2.3a3 3 0 0 1 1.4.2 1.56 1.56 0 0 1 .8.6 3.55 3.55 0 0 1 .4.9c0 .3.1.7.1 1a2.92 2.92 0 0 1-.7 2.1zM69.6 13.3l4.1-5c.1-.2.2-.3.2-.5s0-.5-.2-.6a.52.52 0 0 0-.4-.2c-.2 0-.3.1-.4.1l-.3.3-4.8 5.9V7.8a.55.55 0 0 0-.2-.5.7.7 0 0 0-1.2.5V20a.55.55 0 0 0 .2.5.76.76 0 0 0 .5.2.55.55 0 0 0 .5-.2.76.76 0 0 0 .2-.5v-4.4l.9-1.1 4 5.9a.75.75 0 0 0 .7.4.85.85 0 0 0 .5-.3.76.76 0 0 0 .2-.5c0-.2 0-.3-.1-.4zM83.7 29.3c-.1 0-.2.1-.4.2a1.38 1.38 0 0 0-.3.4l-3.3 10.5-3.4-10.5c-.1-.2-.1-.3-.3-.4a.52.52 0 0 0-.4-.2.55.55 0 0 0-.5.2.76.76 0 0 0-.2.5v.2a.1.1 0 0 1 .1.1L78.7 42a1 1 0 0 0 1 1 .6.6 0 0 0 .6-.3 1.61 1.61 0 0 0 .4-.7l3.6-11.7c.1 0 .1 0 .1-.1V30a.55.55 0 0 0-.2-.5.76.76 0 0 0-.5-.2zM96.8 36.6a3.11 3.11 0 0 0-.9-.7c-.4-.1-.7-.3-1.1-.4s-.7-.3-1.1-.4a4.18 4.18 0 0 1-1-.4.76.76 0 0 1-.4-.2q-.15 0-.3-.3a2.19 2.19 0 0 1-.3-.5c0-.2-.1-.5-.1-.8a3 3 0 0 1 .2-1 1.79 1.79 0 0 1 .5-.7c.3-.1.5-.2.8-.3s.6-.1.9-.1a2 2 0 0 1 .8.1c.2.1.4.1.6.2s.3.1.5.2.2.1.4.1.4 0 .5-.2a.76.76 0 0 0 .2-.5.75.75 0 0 0-.4-.7 2.47 2.47 0 0 0-.9-.4c-.4-.1-.7-.1-1.1-.2a3.44 3.44 0 0 0-.9-.1 3.71 3.71 0 0 0-2.8 1 3.47 3.47 0 0 0-1 2.7 4.44 4.44 0 0 0 .2 1.3 3.59 3.59 0 0 0 .7 1 3.11 3.11 0 0 0 .9.7 9.29 9.29 0 0 0 1 .5c.4.1.7.3 1.1.4a4.18 4.18 0 0 1 1 .4.76.76 0 0 1 .4.2 1.38 1.38 0 0 1 .3.4 2.19 2.19 0 0 1 .3.5c0 .3.1.5.1.8a5.79 5.79 0 0 1-.3 1.7 2.55 2.55 0 0 1-1.9.6 3.08 3.08 0 0 1-1-.1 1.88 1.88 0 0 1-.8-.2 1.42 1.42 0 0 1-.6-.2c-.1 0-.3-.1-.4-.1s-.4 0-.5.2a.76.76 0 0 0-.2.5.84.84 0 0 0 .4.7 3.92 3.92 0 0 0 .9.4 3.54 3.54 0 0 0 1.1.3 3.4 3.4 0 0 0 1 .1 4.15 4.15 0 0 0 1.6-.3 5.67 5.67 0 0 0 1.3-.8 3.81 3.81 0 0 0 .9-1.3 4.31 4.31 0 0 0 .3-1.7 3.18 3.18 0 0 0-.2-1.4 3.59 3.59 0 0 0-.7-1zM64 42l-3.5-11.6a1.61 1.61 0 0 0-.4-.7 1 1 0 0 0-1.4 0 4.88 4.88 0 0 0-.3.7l-3.7 11.7c-.1 0-.1 0-.1.1v.2a.68.68 0 0 0 .7.7c.1 0 .2-.1.4-.2a1.38 1.38 0 0 0 .3-.4l1.1-2.7h4.8l.8 2.6c0 .2.1.3.3.4a.52.52 0 0 0 .4.2.55.55 0 0 0 .5-.2.76.76 0 0 0 .2-.5v-.2a.1.1 0 0 1-.1-.1zm-6.7-3.7l1.9-6.4 2 6.4zM72.9 30.9a3.81 3.81 0 0 0-1.6-1.1 6.25 6.25 0 0 0-2.5-.4h-2.1a1 1 0 0 0-1 1v11.4a1 1 0 0 0 1 1h2.1a6.25 6.25 0 0 0 2.5-.4 5 5 0 0 0 1.6-1.1 5.07 5.07 0 0 0 .9-1.6 5.82 5.82 0 0 0 .3-1.9v-3.6a5.66 5.66 0 0 0-.3-1.8 4.62 4.62 0 0 0-.9-1.5zm-.4 6.8a5.9 5.9 0 0 1-.2 1.4 2.22 2.22 0 0 1-.5 1.1 2 2 0 0 1-1 .8 4.15 4.15 0 0 1-1.6.3h-1.9V30.9h1.9a3.51 3.51 0 0 1 1.6.3 3.59 3.59 0 0 1 1 .7 2.38 2.38 0 0 1 .6 1.1 5.07 5.07 0 0 1 .2 1.3zM56.5 19.5a3 3 0 0 0 1.3.9 4.84 4.84 0 0 0 1.8.3 4.67 4.67 0 0 0 1.7-.3 3.81 3.81 0 0 0 1.3-.9 6.38 6.38 0 0 0 .8-1.4 4.84 4.84 0 0 0 .3-1.8l-.1-8.4a.55.55 0 0 0-.2-.5.76.76 0 0 0-.5-.2.55.55 0 0 0-.5.2.76.76 0 0 0-.2.5v8.3a5.07 5.07 0 0 1-.2 1.3 3.13 3.13 0 0 1-.5 1 2.7 2.7 0 0 1-.8.7 4.3 4.3 0 0 1-1.2.2 2.53 2.53 0 0 1-2-.9 3.23 3.23 0 0 1-.7-2.2V7.9a.55.55 0 0 0-.2-.5.76.76 0 0 0-.5-.2.55.55 0 0 0-.5.2.76.76 0 0 0-.2.5v8.4a4.84 4.84 0 0 0 .3 1.8 6.38 6.38 0 0 0 .8 1.4zM86.9 29.3a.55.55 0 0 0-.5.2.76.76 0 0 0-.2.5v12.3a.55.55 0 0 0 .2.5.76.76 0 0 0 .5.2c.2 0 .4 0 .5-.3a.76.76 0 0 0 .2-.5V30a.55.55 0 0 0-.2-.5.76.76 0 0 0-.5-.2zM127.3 36.5a3.11 3.11 0 0 0-.9-.7c-.4-.1-.7-.3-1.1-.4s-.7-.3-1.1-.4a4.18 4.18 0 0 1-1-.4.76.76 0 0 1-.4-.2q-.15 0-.3-.3a2.19 2.19 0 0 1-.3-.5c0-.2-.1-.5-.1-.8a3 3 0 0 1 .2-1 1.79 1.79 0 0 1 .5-.7c.3-.1.5-.2.8-.3s.6-.1.9-.1a2 2 0 0 1 .8.1c.2.1.4.1.6.2s.3.1.5.2.2.1.4.1.4 0 .5-.2a.76.76 0 0 0 .2-.5.75.75 0 0 0-.4-.7 2.47 2.47 0 0 0-.9-.4c-.4-.1-.7-.1-1.1-.2a3.44 3.44 0 0 0-.9-.1 3.71 3.71 0 0 0-2.8 1 3.47 3.47 0 0 0-1 2.7 3.18 3.18 0 0 0 .2 1.4 3.59 3.59 0 0 0 .7 1 3.11 3.11 0 0 0 .9.7 9.29 9.29 0 0 0 1 .5c.4.1.7.3 1.1.4a4.18 4.18 0 0 1 1 .4.76.76 0 0 1 .4.2 1.38 1.38 0 0 1 .3.4 2.19 2.19 0 0 1 .3.5c0 .3.1.5.1.8a4.46 4.46 0 0 1-.3 1.6 2.55 2.55 0 0 1-1.9.6c-.4 0-.7-.1-1-.1a1.88 1.88 0 0 1-.8-.2 1.42 1.42 0 0 1-.6-.2c-.1 0-.3-.1-.4-.1s-.4 0-.5.2a.76.76 0 0 0-.2.5.84.84 0 0 0 .4.7 3.92 3.92 0 0 0 .9.4 3.54 3.54 0 0 0 1.1.3 3.4 3.4 0 0 0 1 .1 4.15 4.15 0 0 0 1.6-.3 5.67 5.67 0 0 0 1.3-.8 3.81 3.81 0 0 0 .9-1.3 4.31 4.31 0 0 0 .3-1.7 3.18 3.18 0 0 0-.2-1.4 3.59 3.59 0 0 0-.7-1zM136.4 14.8a4 4 0 0 0 2.1-1.2 4.15 4.15 0 0 0 .8-2.5 7.57 7.57 0 0 1 .1-1.5 4.73 4.73 0 0 0-.7-1.2 3.81 3.81 0 0 0-1.3-.9 6 6 0 0 0-2-.3h-3.3a.86.86 0 0 0-.6.3.91.91 0 0 0-.3.7v11.9a.55.55 0 0 0 .2.5.76.76 0 0 0 .5.2.55.55 0 0 0 .5-.2.76.76 0 0 0 .2-.5v-5.3h2.2l3.4 5.7a.55.55 0 0 0 .6.4.65.65 0 0 0 .5-.2.55.55 0 0 0 .3-.5.6.6 0 0 0-.1-.4zm-3.9-1.4V8.8h2.6a2.76 2.76 0 0 1 1.4.2 2.18 2.18 0 0 1 .8.5 3 3 0 0 1 .4.8c0 .3.1.5.1.8a2.57 2.57 0 0 1-.7 1.8 3.31 3.31 0 0 1-1.9.5zM128.4 19h-4.7v-4.5h4.1a.55.55 0 0 0 .5-.2.76.76 0 0 0 .2-.5.55.55 0 0 0-.2-.5.76.76 0 0 0-.5-.2h-4.1V8.7h4.5c.2 0 .3-.1.5-.2a.76.76 0 0 0 .2-.5.55.55 0 0 0-.2-.5.76.76 0 0 0-.5-.2h-5.1a.91.91 0 0 0-.7.3.86.86 0 0 0-.3.6v11.5a.84.84 0 0 0 .4.7 1.88 1.88 0 0 0 .8.2h5a.68.68 0 0 0 .7-.7c0-.2-.1-.4-.1-.7a.76.76 0 0 0-.5-.2zM147.8 7.3h-6.6c-.2 0-.3.1-.5.3s-.2.3-.2.5a.55.55 0 0 0 .2.5.76.76 0 0 0 .5.2h2.6V20a.55.55 0 0 0 .2.5.7.7 0 0 0 1.2-.5V8.7h2.6a.55.55 0 0 0 .5-.2.76.76 0 0 0 .2-.5.55.55 0 0 0-.2-.5.76.76 0 0 0-.5-.2zM158.2 7.3a.76.76 0 0 0-.5-.2.37.37 0 0 0-.3.1c-.1 0-.2.1-.3.2l-2.9 6.2-2.9-6.2c-.1-.1-.2-.1-.3-.2a.37.37 0 0 0-.3-.1.68.68 0 0 0-.7.7.6.6 0 0 0 .1.4l3.4 7.2v4.7a.55.55 0 0 0 .2.5.76.76 0 0 0 .5.2.46.46 0 0 0 .5-.3.76.76 0 0 0 .2-.5v-4.6l3.4-7.2a.76.76 0 0 0 .1-.4.55.55 0 0 0-.2-.5zM99.6 20.7a.55.55 0 0 0 .3-.5.6.6 0 0 0-.1-.4l-3.1-5a4 4 0 0 0 2.1-1.2 4.15 4.15 0 0 0 .8-2.5 7.52 7.52 0 0 1 0-1.5 4.73 4.73 0 0 0-.7-1.2 3.81 3.81 0 0 0-1.3-.9 6 6 0 0 0-2-.3h-3.3a.86.86 0 0 0-.6.3.91.91 0 0 0-.3.7v12a.55.55 0 0 0 .2.5.7.7 0 0 0 1.2-.5v-5.3H95l3.5 5.6a.55.55 0 0 0 .6.4.65.65 0 0 0 .5-.2zm-6.9-7.3V8.8h2.6a2.76 2.76 0 0 1 1.4.2 2.18 2.18 0 0 1 .8.5 3 3 0 0 1 .4.8c0 .3.1.5.1.8a2.57 2.57 0 0 1-.7 1.8 3.31 3.31 0 0 1-1.9.5zM109.2 8.6a7.1 7.1 0 0 0-1.4-1 5.2 5.2 0 0 0-4 0 3 3 0 0 0-1.4 1 3.61 3.61 0 0 0-.8 1.5 11.08 11.08 0 0 0-.2 1.9v4a5.82 5.82 0 0 0 .3 1.9 2.75 2.75 0 0 0 .8 1.5 7.1 7.1 0 0 0 1.4 1 3.81 3.81 0 0 0 1.9.4 4.06 4.06 0 0 0 1.9-.4 3.75 3.75 0 0 0 2.2-2.5 5.82 5.82 0 0 0 .3-1.9v-4a5.84 5.84 0 0 0-.2-1.9 5.3 5.3 0 0 0-.8-1.5zm-.7 7.4a4.37 4.37 0 0 1-.7 2.5 2.9 2.9 0 0 1-4.2 0 4.09 4.09 0 0 1-.7-2.5v-4a5.9 5.9 0 0 1 .2-1.4 4.67 4.67 0 0 1 .5-1 2.18 2.18 0 0 1 .9-.7 2.5 2.5 0 0 1 1.3-.3c.5 0 .9 0 1.1.3a3.51 3.51 0 0 1 .9.7 2.34 2.34 0 0 1 .5 1 5.9 5.9 0 0 1 .2 1.4zM119.4 8.4a3 3 0 0 0-1.3-.9 5.62 5.62 0 0 0-2-.3h-2.8a1 1 0 0 0-1 1V20a.55.55 0 0 0 .2.5.76.76 0 0 0 .5.2.55.55 0 0 0 .5-.2.76.76 0 0 0 .2-.5v-4.3l2.4-.1a4.5 4.5 0 0 0 3.1-1.1 4.17 4.17 0 0 0 1.1-3.1 4.14 4.14 0 0 0-.2-1.6 3.09 3.09 0 0 0-.7-1.4zm-1.4 5.2a2.82 2.82 0 0 1-2.1.7h-2.2l.1-5.5h2.2a3 3 0 0 1 1.4.2 1.56 1.56 0 0 1 .8.6 3.55 3.55 0 0 1 .4.9c0 .3.1.7.1 1a2.92 2.92 0 0 1-.7 2.1zM106.9 30.8a7.1 7.1 0 0 0-1.4-1 5.2 5.2 0 0 0-4 0 3 3 0 0 0-1.4 1 3.61 3.61 0 0 0-.8 1.5 11.08 11.08 0 0 0-.2 1.9v4a5.82 5.82 0 0 0 .3 1.9 2.75 2.75 0 0 0 .8 1.5 7.1 7.1 0 0 0 1.4 1 4.71 4.71 0 0 0 3.8 0 3.75 3.75 0 0 0 2.2-2.5 5.82 5.82 0 0 0 .3-1.9v-4a5.84 5.84 0 0 0-.2-1.9 5.3 5.3 0 0 0-.8-1.5zm-.7 7.4a4.37 4.37 0 0 1-.7 2.5 2.34 2.34 0 0 1-2.1.9 2.45 2.45 0 0 1-2.1-.9 4.09 4.09 0 0 1-.7-2.5v-4a5.9 5.9 0 0 1 .2-1.4 4.67 4.67 0 0 1 .5-1 2.18 2.18 0 0 1 .9-.7 2.5 2.5 0 0 1 1.3-.3c.6 0 1 .1 1.1.3a2.18 2.18 0 0 1 .9.7 2.34 2.34 0 0 1 .5 1 5.9 5.9 0 0 1 .2 1.4zM115.6 37a4 4 0 0 0 2.1-1.2 4.15 4.15 0 0 0 .8-2.5 3.81 3.81 0 0 1 .1-1.5 4.73 4.73 0 0 0-.7-1.2 3.81 3.81 0 0 0-1.3-.9 6 6 0 0 0-2-.3h-3.3a.86.86 0 0 0-.6.3.91.91 0 0 0-.3.7v11.9a.55.55 0 0 0 .2.5.76.76 0 0 0 .5.2.55.55 0 0 0 .5-.2.76.76 0 0 0 .2-.5V37h2.2l3.4 5.7a.55.55 0 0 0 .6.4.65.65 0 0 0 .5-.2.55.55 0 0 0 .3-.5.6.6 0 0 0-.1-.4zm-4-1.4V31h2.6a4.64 4.64 0 0 1 1.4.2 2.18 2.18 0 0 1 .8.5 3 3 0 0 1 .4.8c0 .3.1.5.1.8a2.41 2.41 0 0 1-.7 1.8 3.31 3.31 0 0 1-1.9.5z" />
          </svg>--}}
          <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 8467 2659">
         <defs>
           <style type="text/css">
             <![CDATA[
             .fil1 {fill:#5A4B88}
             .fil4 {fill:black;fill-rule:nonzero}
             .fil0 {fill:#BA8558;fill-rule:nonzero}
             .fil3 {fill:url(#id0)}
             .fil2 {fill:url(#id1)}
             ]]>
           </style>
           <linearGradient id="id0" gradientUnits="userSpaceOnUse" x1="1275.59" y1="2090.85" x2="1695.63" y2="1672.41">
             <stop offset="0" style="stop-opacity:1; stop-color:#C41162"/>
             <stop offset="1" style="stop-opacity:1; stop-color:#5A4B88"/>
           </linearGradient>
           <linearGradient id="id1" gradientUnits="userSpaceOnUse" x1="974.75" y1="1735.64" x2="448.23" y2="2027.62">
             <stop offset="0" style="stop-opacity:1; stop-color:#FF9F00"/>
             <stop offset="1" style="stop-opacity:1; stop-color:#C41162"/>
           </linearGradient>
         </defs>
            <g id="Layer_x0020_1">
              <metadata id="CorelCorpID_0Corel-Layer"/>
              <g id="_117292304">
                <path class="fil0" d="M3393 859c0,35 -5,67 -15,97 -10,30 -25,56 -44,77 -19,22 -43,39 -70,51 -28,12 -60,18 -95,18 -36,0 -68,-6 -96,-18 -28,-12 -51,-29 -70,-51 -19,-21 -33,-47 -43,-77 -10,-30 -15,-62 -15,-97l0 -449c0,-13 4,-23 12,-31 8,-8 18,-12 30,-12 11,0 20,4 28,13 7,8 11,18 11,30l0 449c0,49 12,88 35,119 24,30 60,45 108,45 25,0 46,-4 64,-12 18,-8 32,-19 44,-34 11,-15 20,-32 26,-52 5,-21 8,-42 8,-66l0 -449c0,-12 4,-22 11,-30 8,-9 17,-13 29,-13 12,0 22,4 30,13 8,8 12,18 12,30l0 449zm272 -95l-50 61 0 236c0,11 -4,21 -12,29 -8,8 -18,12 -29,12 -12,0 -21,-4 -29,-12 -8,-8 -12,-18 -12,-29l0 -654c0,-10 4,-20 12,-28 8,-8 17,-12 29,-12 11,0 21,4 29,12 8,8 12,18 12,28l0 296 256 -317c3,-5 9,-10 15,-13 7,-4 14,-6 22,-6 7,0 15,3 24,10 9,6 12,16 11,30 -1,10 -4,18 -9,26l-218 268 236 338c4,6 5,13 5,20 0,9 -2,19 -7,29 -5,9 -15,14 -30,14 -14,0 -26,-6 -35,-19l-220 -319zm759 64l0 232c0,11 -4,21 -12,30 -8,8 -17,12 -29,12 -11,0 -20,-4 -28,-12 -8,-9 -12,-19 -12,-30l0 -634c0,-14 4,-25 14,-35 9,-9 21,-14 34,-14l150 0c41,0 77,6 106,19 29,12 53,29 70,50 18,21 31,45 40,73 8,27 12,56 12,85 0,73 -21,128 -62,167 -41,38 -97,57 -166,57l-117 0zm0 -79l117 0c48,0 85,-12 110,-35 24,-24 37,-61 37,-111 0,-18 -2,-36 -7,-54 -4,-17 -11,-33 -22,-47 -11,-14 -26,-25 -45,-33 -19,-9 -44,-13 -73,-13l-117 0 0 293zm889 -169c0,54 -14,97 -42,130 -28,32 -66,53 -115,63l162 266c4,7 6,15 6,24 0,11 -6,20 -16,27 -11,8 -20,11 -28,11 -15,0 -26,-6 -34,-19l-179 -304 -117 0 0 282c0,11 -4,21 -12,30 -8,8 -18,12 -29,12 -11,0 -20,-4 -28,-12 -8,-9 -12,-19 -12,-30l0 -634c0,-14 5,-25 14,-35 9,-9 20,-14 33,-14l176 0c42,0 77,6 105,18 28,12 51,27 68,46 17,19 30,41 37,65 8,24 11,49 11,74zm-81 0c0,-15 -2,-30 -6,-45 -4,-15 -11,-28 -22,-39 -10,-12 -25,-21 -44,-29 -19,-7 -43,-11 -72,-11l-138 0 0 244 144 0c45,0 79,-11 103,-31 23,-20 35,-50 35,-89zm414 522c-38,0 -72,-7 -102,-20 -29,-14 -54,-32 -73,-55 -19,-24 -34,-51 -44,-83 -9,-32 -14,-66 -14,-101l0 -217c0,-36 4,-69 12,-100 9,-32 23,-59 42,-82 18,-24 43,-42 72,-56 29,-14 65,-21 107,-21 42,0 78,7 107,21 29,14 54,32 73,56 18,23 32,50 41,82 8,31 12,64 12,100l0 217c0,35 -5,69 -14,101 -10,32 -25,59 -44,83 -19,23 -44,41 -73,55 -29,13 -63,20 -102,20zm0 -656c-28,0 -51,4 -70,13 -20,9 -35,21 -48,37 -12,15 -21,34 -26,56 -5,22 -8,47 -8,74l0 217c0,53 12,96 37,130 25,33 63,50 115,50 52,0 90,-17 115,-50 25,-34 37,-77 37,-130l0 -217c0,-27 -3,-52 -8,-74 -5,-22 -14,-41 -26,-56 -12,-16 -28,-28 -47,-37 -20,-9 -43,-13 -71,-13zm426 382l0 232c0,11 -4,21 -12,30 -7,8 -17,12 -29,12 -10,0 -20,-4 -28,-12 -8,-9 -12,-19 -12,-30l0 -634c0,-14 5,-25 14,-35 10,-9 21,-14 35,-14l149 0c42,0 77,6 106,19 29,12 53,29 71,50 18,21 31,45 39,73 8,27 12,56 12,85 0,73 -21,128 -62,167 -41,38 -97,57 -166,57l-117 0zm0 -79l117 0c48,0 85,-12 110,-35 24,-24 37,-61 37,-111 0,-18 -2,-36 -6,-54 -4,-17 -12,-33 -23,-47 -10,-14 -26,-25 -45,-33 -19,-9 -44,-13 -73,-13l-117 0 0 293zm819 302c0,11 -4,21 -12,29 -8,8 -18,12 -29,12l-269 0c-17,0 -32,-3 -44,-10 -13,-7 -20,-19 -20,-38l0 -619c0,-12 5,-23 14,-33 9,-10 20,-15 34,-15l275 0c11,0 21,4 29,12 7,8 11,17 11,29 0,11 -4,20 -11,28 -8,7 -18,10 -29,10l-242 0 0 238 223 0c10,0 19,3 27,11 8,7 12,17 12,28 0,12 -4,21 -11,28 -7,8 -17,12 -28,12l-223 0 0 240 252 0c11,0 20,4 28,11 8,8 13,16 13,27zm551 -471c0,54 -14,97 -42,130 -28,32 -66,53 -115,63l162 266c4,7 5,15 5,24 0,11 -5,20 -15,27 -11,8 -20,11 -28,11 -15,0 -26,-6 -34,-19l-179 -304 -117 0 0 282c0,11 -4,21 -12,30 -8,8 -18,12 -29,12 -11,0 -21,-4 -28,-12 -8,-9 -12,-19 -12,-30l0 -634c0,-14 5,-25 14,-35 9,-9 20,-14 33,-14l176 0c42,0 77,6 105,18 28,12 51,27 68,46 17,19 30,41 37,65 8,24 11,49 11,74zm-81 0c0,-15 -2,-30 -6,-45 -4,-15 -11,-28 -22,-39 -10,-12 -25,-21 -44,-29 -19,-7 -43,-11 -72,-11l-138 0 0 244 144 0c45,0 79,-11 103,-31 23,-20 35,-50 35,-89zm325 -124l-138 0c-12,0 -21,-4 -29,-11 -8,-8 -12,-18 -12,-28 0,-9 4,-18 12,-27 8,-9 17,-13 29,-13l357 0c11,0 20,4 29,11 8,8 12,17 12,29 0,10 -4,20 -12,28 -8,7 -18,11 -29,11l-138 0 0 606c0,11 -4,20 -12,28 -8,8 -17,12 -29,12 -11,0 -21,-4 -29,-12 -7,-8 -11,-17 -11,-28l0 -606zm554 646c-11,0 -21,-4 -29,-12 -8,-9 -12,-19 -12,-30l0 -249 -181 -383c-2,-7 -4,-13 -4,-19 0,-12 5,-22 13,-30 8,-8 18,-12 29,-12 6,0 12,1 18,4 5,3 10,7 13,12l153 334 154 -334c3,-5 8,-9 13,-12 6,-3 12,-4 18,-4 11,0 21,4 29,12 8,8 13,18 13,30 0,6 -2,12 -4,19l-181 385 0 247c0,11 -4,21 -12,30 -8,8 -18,12 -30,12zm-5254 1158c-4,9 -9,16 -17,22 -7,5 -14,8 -22,8 -11,0 -21,-4 -30,-11 -8,-8 -12,-17 -12,-30 0,-2 0,-4 0,-8 0,-3 1,-5 2,-7l197 -626c5,-15 11,-28 19,-38 8,-10 19,-15 34,-15 16,0 27,5 35,15 7,10 13,23 19,38l198 626c0,2 1,4 1,7 0,4 1,6 1,8 0,13 -4,22 -13,30 -8,7 -18,11 -30,11 -7,0 -15,-3 -23,-8 -8,-6 -14,-13 -17,-22l-43 -141 -257 0 -42 141zm67 -221l209 0 -105 -343 -104 343zm898 -27c0,35 -4,68 -14,100 -9,33 -25,61 -47,86 -21,25 -50,45 -85,59 -36,15 -80,23 -132,23l-114 0c-14,0 -25,-5 -35,-14 -9,-10 -14,-21 -14,-35l0 -619c0,-13 5,-25 14,-34 10,-10 21,-14 35,-14l114 0c52,0 95,7 131,21 35,14 64,33 86,57 22,24 38,52 47,83 10,31 14,64 14,97l0 190zm-81 -190c0,-25 -3,-48 -10,-70 -6,-22 -16,-41 -30,-57 -15,-17 -33,-29 -56,-38 -22,-10 -50,-14 -83,-14l-100 0 0 558 100 0c33,0 61,-5 84,-15 23,-10 41,-23 56,-41 14,-17 24,-37 30,-59 6,-23 9,-48 9,-74l0 -190zm385 327l171 -564c3,-9 8,-17 16,-22 8,-6 16,-8 23,-8 13,0 23,3 31,11 8,7 12,17 12,29 0,2 0,5 0,8 -1,4 -1,6 -2,7l-198 626c-5,16 -12,29 -19,39 -7,10 -19,15 -34,15 -15,0 -27,-5 -34,-15 -8,-10 -15,-23 -19,-39l-198 -626c-1,-1 -1,-3 -2,-7 0,-3 0,-6 0,-8 0,-12 4,-22 13,-29 8,-8 18,-11 30,-11 7,0 14,2 22,8 7,5 13,13 16,22l172 564zm343 -554c0,-11 4,-20 12,-28 8,-8 17,-12 29,-12 11,0 21,4 29,12 8,8 11,17 11,28l0 654c0,11 -3,21 -11,29 -8,8 -18,12 -29,12 -12,0 -21,-4 -29,-12 -8,-8 -12,-18 -12,-29l0 -654zm522 491c0,-16 -2,-30 -6,-42 -4,-11 -8,-21 -14,-29 -5,-8 -11,-14 -18,-19 -7,-5 -14,-9 -20,-12 -16,-8 -34,-16 -53,-22 -20,-7 -39,-14 -59,-21 -19,-7 -38,-16 -57,-25 -18,-9 -34,-21 -49,-35 -14,-15 -26,-32 -34,-53 -9,-21 -13,-46 -13,-76 0,-61 18,-109 55,-145 36,-35 86,-52 150,-52 13,0 29,1 49,3 19,2 38,5 57,10 19,5 34,12 48,21 13,9 19,20 19,35 0,10 -3,19 -10,26 -7,8 -17,12 -30,12 -8,0 -16,-1 -23,-4 -8,-3 -17,-7 -26,-10 -10,-3 -21,-7 -34,-10 -12,-3 -27,-4 -44,-4 -16,0 -32,2 -47,5 -15,4 -29,10 -41,19 -11,8 -21,20 -28,34 -7,15 -11,33 -11,55 0,17 2,31 6,43 4,11 9,21 15,29 6,8 12,14 19,19 7,4 13,8 19,11 16,8 34,15 53,22 20,7 39,14 59,21 19,7 38,15 57,24 19,9 35,21 49,36 14,14 26,32 34,52 9,20 13,45 13,75 0,34 -6,64 -17,90 -11,26 -27,48 -47,66 -19,18 -43,31 -70,41 -27,9 -56,14 -88,14 -16,0 -35,-1 -57,-4 -22,-3 -42,-7 -61,-13 -20,-6 -36,-14 -49,-24 -13,-9 -20,-21 -20,-34 0,-10 4,-19 11,-27 7,-9 15,-13 26,-13 6,0 14,2 24,6 9,4 20,8 32,12 13,4 26,9 42,12 16,4 33,6 53,6 45,0 79,-11 102,-33 22,-21 34,-52 34,-92zm407 204c-38,0 -72,-7 -102,-20 -29,-14 -53,-32 -73,-56 -19,-23 -33,-50 -43,-82 -10,-32 -15,-66 -15,-102l0 -217c0,-35 4,-68 13,-100 8,-31 22,-58 41,-82 19,-23 43,-42 72,-56 30,-13 65,-20 107,-20 42,0 78,7 107,20 30,14 54,33 73,56 19,24 33,51 41,82 8,32 13,65 13,100l0 217c0,36 -5,70 -15,102 -10,32 -24,59 -44,82 -19,24 -43,42 -73,56 -29,13 -63,20 -102,20zm0 -656c-27,0 -51,4 -70,13 -19,9 -35,21 -47,36 -12,16 -21,35 -27,57 -5,22 -8,46 -8,73l0 217c0,54 13,97 37,131 25,33 63,50 115,50 52,0 91,-17 116,-50 24,-34 37,-77 37,-131l0 -217c0,-27 -3,-51 -9,-73 -5,-22 -14,-41 -26,-57 -12,-15 -28,-27 -47,-36 -19,-9 -43,-13 -71,-13zm799 134c0,54 -14,97 -43,129 -28,33 -66,54 -115,63l163 267c3,7 5,15 5,23 0,11 -6,20 -16,28 -10,7 -20,11 -28,11 -15,0 -26,-6 -33,-19l-180 -305 -117 0 0 282c0,12 -4,22 -12,30 -8,9 -18,13 -29,13 -11,0 -20,-4 -28,-13 -8,-8 -12,-18 -12,-30l0 -634c0,-13 5,-25 14,-34 9,-10 20,-14 33,-14l176 0c42,0 77,6 105,17 29,12 51,28 68,47 18,19 30,40 37,65 8,24 12,49 12,74zm-82 0c0,-15 -2,-30 -6,-45 -4,-15 -11,-28 -21,-40 -11,-11 -26,-21 -45,-28 -18,-7 -42,-11 -72,-11l-138 0 0 243 145 0c44,0 78,-10 102,-30 24,-20 35,-50 35,-89zm508 318c0,-16 -2,-30 -6,-42 -4,-11 -8,-21 -14,-29 -5,-8 -11,-14 -18,-19 -8,-5 -14,-9 -20,-12 -16,-8 -34,-16 -53,-22 -20,-7 -39,-14 -59,-21 -19,-7 -38,-16 -57,-25 -18,-9 -34,-21 -49,-35 -14,-15 -26,-32 -34,-53 -9,-21 -13,-46 -13,-76 0,-61 18,-109 55,-145 36,-35 86,-52 150,-52 13,0 29,1 49,3 19,2 38,5 57,10 19,5 34,12 48,21 13,9 19,20 19,35 0,10 -3,19 -10,26 -7,8 -17,12 -30,12 -8,0 -16,-1 -24,-4 -7,-3 -16,-7 -25,-10 -10,-3 -21,-7 -34,-10 -12,-3 -27,-4 -44,-4 -16,0 -32,2 -47,5 -15,4 -29,10 -41,19 -12,8 -21,20 -28,34 -7,15 -11,33 -11,55 0,17 2,31 6,43 4,11 9,21 15,29 6,8 12,14 19,19 7,4 13,8 19,11 16,8 34,15 53,22 20,7 39,14 59,21 19,7 38,15 57,24 19,9 35,21 49,36 14,14 26,32 34,52 9,20 13,45 13,75 0,34 -6,64 -17,90 -11,26 -27,48 -47,66 -20,18 -43,31 -70,41 -27,9 -57,14 -88,14 -17,0 -36,-1 -57,-4 -22,-3 -42,-7 -62,-13 -19,-6 -35,-14 -48,-24 -13,-9 -20,-21 -20,-34 0,-10 4,-19 11,-27 7,-9 15,-13 26,-13 6,0 14,2 24,6 9,4 20,8 32,12 13,4 26,9 42,12 15,4 33,6 53,6 45,0 79,-11 102,-33 22,-21 34,-52 34,-92z"/>
                <g>
                  <path class="fil1" d="M1879 323c-430,-430 -1127,-430 -1557,0 -429,430 -429,1127 0,1557l519 -519c-143,-144 -143,-376 0,-519 143,-143 376,-143 519,0 143,143 143,375 0,519 -1,1 -3,2 -4,4l519 519 4 -4c430,-430 430,-1127 0,-1557z"/>
                  <polygon class="fil2" points="1096,1105 1101,2658 322,1880 "/>
                  <polygon class="fil3" points="1101,2658 1096,1105 1875,1884 "/>
                </g>
                <path class="fil4" d="M1967 2194c38,0 76,10 113,30 37,20 66,48 87,86 21,37 31,75 31,116 0,40 -10,78 -31,115 -20,37 -48,65 -85,86 -37,20 -75,30 -115,30 -41,0 -79,-10 -116,-30 -37,-21 -65,-49 -86,-86 -20,-37 -30,-75 -30,-115 0,-41 10,-79 31,-116 21,-38 50,-66 87,-86 37,-20 75,-30 114,-30zm0 38c-33,0 -65,9 -96,25 -30,17 -55,41 -72,72 -17,31 -26,63 -26,97 0,33 9,65 26,96 17,30 41,54 71,71 31,17 63,26 97,26 33,0 65,-9 96,-26 30,-17 54,-41 71,-71 17,-31 26,-63 26,-96 0,-34 -9,-66 -26,-97 -18,-31 -42,-55 -73,-72 -31,-16 -62,-25 -94,-25zm-102 322l0 -249 85 0c30,0 51,2 64,7 13,4 24,12 32,24 7,11 11,23 11,36 0,18 -6,34 -19,48 -13,13 -31,21 -52,22 8,4 16,8 21,13 10,10 22,27 37,50l30 49 -49 0 -22 -40c-17,-31 -31,-50 -42,-58 -7,-5 -18,-8 -32,-8l-24 0 0 106 -40 0zm40 -141l49 0c23,0 39,-3 48,-10 8,-7 12,-16 12,-27 0,-8 -2,-14 -6,-20 -4,-6 -10,-10 -17,-13 -7,-3 -21,-4 -40,-4l-46 0 0 74z"/>
              </g>
            </g>
        </svg>
        </a>
        <a class="kw-logo" href="https://www.kw.com/"><img src="http://ga.reconcept.ru/UK-property/images/kw-logo.png" alt=""></a>
      </div>
      <nav class="site-nav">
        <a href="javascript:void(0);" class="close-btn">
          <svg>
            <use xlink:href="/images/svg/sprite.svg#close-icon"></use>
          </svg>
        </a>

        <form role="search" class="search-form" action="/search">
          <input type="search" name="q" class="search-field" placeholder="@lang('main.i_m_searching_for') ..." />
          <input type="submit" class="search-submit" value="OK" />
        </form>

        <ul class="menu">
          @foreach($menu as $val)
            @if(current($val)['cat'] === 0)
              @foreach($val as $v)
                @if(is_array($menu[$v['id']]))
                  <li class="parent-item">
                    <a
                      href="javascript:void(0)"
                      class="@if(($v['translation'] ?? $v['id']) === $segment1) active @endif"
                    >
                      {{ $langSt($v['name']) }}
                    </a>

                    <ul class="sub-menu">
                      @foreach($menu[$v['id']] as $vSub)
                        <li>
                          <a
                            href="/{{ $vSub['controller'] ? $vSub['controller'] : ($v['translation'] ?? $v['id']) }}/{{ $vSub['translation'] ?? $vSub['id'] }}"
                            class="@if(($vSub['translation'] ?? $vSub['id']) === $segment1) active @endif"
                          >
                            {{ $langSt($vSub['name']) }}
                          </a>
                        </li>
                      @endforeach
                    </ul>
                  </li>
                @else
                  <li>
                    <a
                      href="/{{ $v['controller'] ? $v['controller'] . '/' : '' }}{{ $v['translation'] ?? $v['id'] }}"
                      class="@if(($v['translation'] ?? $v['id']) === $segment1) active @endif"
                    >
                      {{ $langSt($v['name']) }}
                    </a>
                  </li>
                @endif
              @endforeach
            @endif
          @endforeach

          <li class="depends-on-size is-view-pc">
            <a href="/selection-request" class="button light" style="/*margin-right: 67px;*/">@lang('main.selection_request')</a>
          </li>
        </ul>
      </nav>
      <div class="position-box">
        <a href="/selection-request" class="button light" style="/*margin-right: 67px;*/">@lang('main.selection_request')</a>

        <a href="/favorite" class="wish-list" style="position: relative">
          <svg style="/*position: absolute;top: 0;right: 15px;bottom: 0;*/">
            <use xlink:href="/images/svg/sprite.svg#heart-icon"></use>
          </svg>

          <span class="qty"></span>
        </a>

        <button class="menu-btn"><span></span></button>
      </div>
    </div>
  </header>
