<!DOCTYPE html>
<html lang="{{ session('language', 'fr') }}">
<head>
  <meta charset="utf-8">
  <title>@yield('title', 'Mundial')</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/components.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/mundial01dea01.css') }}" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Maven Pro:regular,500,600,700,800,900"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon" type="image/x-icon">
  <link href="{{ asset('images/webclip.svg') }}" rel="apple-touch-icon">
  <style>
    .language-switcher {
      display: inline-flex;
      gap: 10px;
      align-items: center;
    }
    .language-switcher a {
      padding: 5px 10px;
      margin: 0 3px;
      text-decoration: none;
      border-radius: 3px;
      font-size: 12px;
      transition: background-color 0.3s ease;
    }
    .language-switcher a:hover {
      background-color: rgba(0,0,0,0.1);
    }
    .language-switcher a.active {
      background-color: #28a745;
      color: white;
      font-weight: bold;
    }
  </style>
  <script>
  //Script für Clickzähler
  window.addEventListener('click', () => {
  let count = +sessionStorage.getItem('clickCount1') || 0;
  count += 1;
  sessionStorage.setItem('clickCount1', count);
  if(count >= 5) {
  }
  });
  </script>
  @yield('extra-head')
</head>
<body @yield('body-attributes')>
  @yield('content')
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6044f2f58d379a586060c695" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="{{ asset('js/mundial01dea01.js') }}" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <script>
$(document).ready(function(){
function formtoemailSuccess() {
var params = new URLSearchParams(window.location.search);
if (params.get('success') == 1) {
$('#formtoemail form').hide();
$('#formtoemail .w-form-done').show();
}
}
formtoemailSuccess();
});
</script>
</body>
</html>
