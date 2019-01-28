<div class="footer-container">
    <div class="footer-block green-block logo-block">
        <div class="img-footer-container">
            <img src="{{ asset('images/logo_sendo_shiatsu_color.png') }}"/>
        </div>
    </div>
    <div class="footer-block white-block">
        <h3>Livre d'or</h3>
        <div id="carouselWitnesses" class="carousel slide witnesses" data-ride="carousel" >
            <div class="carousel-inner">
                @foreach($witnesses as $i => $witness)
                <div class="carousel-item @if ($i === 1) active @endif">
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
        <a href="#">Politique de confidentialité</a>
        <a href="#">Mentions légales</a>
    </div>
    <div class="footer-block white-block">
        <p>Adresse</p>
        <p>Numéro de téléphone</p>
        <p>Lien vers Maps<p>
    </div>
    <div class="footer-block footer-social green-block">
        <p><a><i class="fab fa-linkedin-in"></i></a></p>
        <p><a><i class="fab fa-facebook-f"></i></a></p>
    </div>
</div>
