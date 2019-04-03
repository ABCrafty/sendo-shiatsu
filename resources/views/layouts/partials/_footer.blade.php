<div class="footer-container">
    <div class="footer-block green-block logo-block">
        <div class="img-footer-container">
            <img src="{{ asset('images/logo_sendo_shiatsu_blanc.png') }}"/>
        </div>
    </div>
    <div class="footer-block white-block block-witness">
        <h3>Livre d'or</h3>
        <div id="carouselWitnesses" class="carousel slide witnesses" data-ride="carousel" >
            <div class="carousel-inner">
                @foreach($witnesses as $i => $witness)
                <div class="carousel-item {{ $i !== 0 ?: 'active' }}">
                    <p class="witness-content">{{ $witness->content }}<span class="witness-author"> ~{{ $witness->author }}</span><p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="footer-block green-block">
        <p>Blog (à venir)</p>
    </div>
    <div class="footer-block white-block">
        <a href="{{ route('home') }}">Accueil</a>
        <a href="{{ route('front.shiatsu') }}">Shiatsu</a>
        <a href="{{ route('front.doin') }}">Do In</a>
        <a href="#">Prestations/Prendre rdv</a>
        <a href="#">Tarifs</a>
        <a href="{{ route('contact.create') }}">Me contacter</a>
    </div>
    <div class="footer-block green-block">
        <a href="/mentions-legales">Mentions légales</a>
    </div>
    <div class="footer-block white-block">
        <p>
            Yogdeepam Center Strasbourg
            31 rue du marché aux vins<br />
            67000 Strasbourg<br />
        </p>
        <p>
            <a href="tel:+33616719219">+33616719219</a>
        </p>
    </div>
    <div class="footer-block footer-social green-block">
        <p><a><i class="fab fa-linkedin-in"></i></a></p>
        <p><a><i class="fab fa-facebook-f"></i></a></p>
    </div>
</div>
