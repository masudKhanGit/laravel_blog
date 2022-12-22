<!DOCTYPE html>
<html lang="en">
  <head>
   @include('frontend.includes.head')
  </head>
  <body>
    <header>
      @include('frontend.includes.nav')
      <!-- slider -->
      @yield('slider')
      <!-- slider -->
    </header>
    <main class="py-4">
      @yield('content')
    </main>

   @include('frontend.includes.footer')
    @include('frontend.includes.scripts')
  </body>
</html>
