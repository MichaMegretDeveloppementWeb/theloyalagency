{{-- resources/views/emails/contact-form-submitted-text.blade.php --}}

Nouvelle demande de contact

--------------------------------------------------
Expéditeur : {{ $data['name'] }}
Email      : {{ $data['email'] }}
Téléphone  : {{ $data['phone'] }}
--------------------------------------------------

Message :
{{ $data['message'] }}

--------------------------------------------------
Vous recevez ce mail car un visiteur a rempli le formulaire de contact sur The Loyal Agency.
