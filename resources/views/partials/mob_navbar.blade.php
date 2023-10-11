<div class="footer-device-mobile pt-2 pb-2">
        <div class="wapper">
            <div class="footer-device-mobile-item device-home">
                <a href="https://acsindiaias.com/" class="text-dark" style="font-family: 'Righteous';">
                    <span class="icon-mob">
                        <i class="fa fa-home fa-mob" aria-hidden="true"></i>
                    </span>
                    HOME
                </a>
            </div>
            <div class="footer-device-mobile-item device-home device-wishlist">
                <a href="https://acsindiaias.com/upsc" class="text-dark" style="font-family: 'Righteous';">
                    <span class="icon-mob">
                        <i class="fa fa-book fa-mob" aria-hidden="true"></i>
                    </span>
                    UPSC
                </a>
            </div>
            <div class="footer-device-mobile-item device-home device-wishlist">
                <a href="https://acsindiaias.com/apsc" class="text-dark" style="font-family: 'Righteous';">
                    <span class="icon-mob">
                        <i class="fa fa-book fa-mob" aria-hidden="true"></i>
                    </span>
                    APSC
                </a>
            </div>
            <div class="footer-device-mobile-item device-home device-user">
                @auth
                <a href="{{ route('user.show', Auth::user()->id) }}" class="text-dark" style="font-family: 'Righteous';">
                    <span class="icon-mob">
                        <i class="fa fa-user fa-mob" aria-hidden="true"></i>
                    </span>
                    Account
                </a>
                @else
                <a href="/login" class="text-dark" style="font-family: 'Righteous';">
                    <span class="icon-mob">
                        <i class="fa fa-user fa-mob" aria-hidden="true"></i>
                    </span>
                    Account
                </a>
                @endauth
            </div>
        </div>
    </div>