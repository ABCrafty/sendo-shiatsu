<html>
<head>
    <meta charset="utf8">
    <title>Nouveau contact</title>
</head>
<body>
    <p>
        Bonjour Pierre,<br />
        <br />
        Vous recevez cet email car un visiteur vous a laissé un message sur le site. En voici le contenu :
    </p>

    <p>
        <b>Expéditeur :</b> <a href="mailto:{{ $contact->email }}"></a>{{ $contact->email }}<br />
        <b>Sujet : {{ $contact->sujet }}</b>
        <b>Message :</b><br />
        {{ nl2br($contact->message) }}
    </p>

    <p>
        Vous pouvez retrouver les détails de cet email en suivant <a href="{{ route('contact.show', ['id' => $contact->id]) }}">Ce lien</a>.
    </p>

    <p>
        Cordialement, <br />
        <br />
        l'administrateur
    </p>
</body>
</html>