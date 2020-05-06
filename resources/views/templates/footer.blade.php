<!-- Footer section -->
<footer class="footer-section">
    @if (count($footers) !== 0)
        <h2>{{$footers[0]->texte}} <a href="https://colorlib.com" target="_blank">Colorlib</a></h2>
    @else
        <h2>2017 All rights reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></h2>
    @endif
</footer>
<!-- Footer section end -->