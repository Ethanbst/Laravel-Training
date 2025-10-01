@extends('layout')

@section('title', 'Contact')

@section('content')
    <div class="container">
        <h1>{{ $titre }}</h1>
        
        <div class="contact-info" style="background-color: #f8f9fa; padding: 20px; border-radius: 5px; border-left: 4px solid #28a745;">
            <h3>📧 Nos coordonnées</h3>
            <p><strong>Email :</strong> {{ $email }}</p>
            <p><strong>Téléphone :</strong> +33 1 23 45 67 89</p>
            <p><strong>Adresse :</strong> 123 Rue de Laravel, 75001 Paris</p>
        </div>
        
        <h3>💬 Envoyez-nous un message</h3>
        
        <form>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="nom" style="display: block; margin-bottom: 5px; font-weight: bold;">Nom :</label>
                <input type="text" id="nom" name="nom" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box;">
            </div>
            
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="email" style="display: block; margin-bottom: 5px; font-weight: bold;">Email :</label>
                <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box;">
            </div>
            
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="message" style="display: block; margin-bottom: 5px; font-weight: bold;">Message :</label>
                <textarea id="message" name="message" rows="5" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box;"></textarea>
            </div>
            
            <button type="submit" style="background-color: #28a745; color: white; padding: 12px 30px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">Envoyer le message</button>
        </form>
        
        <div style="background-color: #fff3cd; padding: 15px; border-radius: 5px; margin-top: 20px; border-left: 4px solid #ffc107;">
            <strong>🔍 Regardez le code !</strong> Cette page utilise des variables Blade : 
            <code>@{{ '$titre' }}</code> et <code>@{{ '$email' }}</code> 
            qui sont passées depuis la route.
        </div>
    </div>
@endsection