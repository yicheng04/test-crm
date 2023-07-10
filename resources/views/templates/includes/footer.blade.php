<div class="footer-block">
  <div class="contact-text">Questions? Call (800) 555-5555</div>
  <div class="footer-links">
		  {!! \App\Menu::where( 'slug', '=', 'footer' )->first()->body !!}
  </div>
  <div class="social-media-icons">
    <ul>
      <li><a class="icon facebook" href="https://www.facebook.com/" target="_blank">Facebook</a></li>
      <li><a class="icon twitter" href="https://twitter.com/" target="_blank">Twitter</a></li>
      <li><a class="icon linkedin" href="https://www.linkedin.com/" target="_blank">LinkedIn</a></li>
      <li><a class="icon instagram" href="http://www.instagram.com/" target="_blank">Instagram</a></li>
    </ul>
  </div>
  <div class="copyright">
  	<p>&copy;<?php echo date("Y"); ?> - Sleepless Software, All rights reserved | <a href="/user/login">Login</a></p>
  </div>
</div>
<script type="text/javascript" src="/js/bootstrap.js"></script>