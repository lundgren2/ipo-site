<!doctype html>
<!--
  Team IPO + ☕ + ❤️ =
    ___ ____   ___
   |_ _|  _ \ / _ \  ___  ___
    | || |_) | | | |/ __|/ _ \
    | ||  __/| |_| |\__ \  __/
   |___|_|    \___(_)___/\___|

  Designed and developed by:
  Tobias Lundgren, @lundgren2 <tobias(a)ipo.se>

-->
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap container" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
