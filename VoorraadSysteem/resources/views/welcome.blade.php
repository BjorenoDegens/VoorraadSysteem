<x-layout title="Home">
    <h1>Welkom op het Voorraad Systeem</h1>
    <p>Deze website is speciaal ontwikkeld voor het bijhouden van de voorraad van het ROC Nijmegen.</p>
    <p>Je kunt hier producten toevoegen, verwijderen en aanpassen om je voorraad up-to-date te houden.</p>

    <h2>Functionaliteiten:</h2>
    <ul>
        <li>Producten toevoegen aan de voorraad</li>
        <li>Voorraad van producten bekijken en bijwerken</li>
        <li>Producten verwijderen indien nodig</li>
        <li>Gedetailleerde productinformatie inzien</li>
    </ul>

    <h2>Veelgebruikte Acties:</h2>
    <div>
        <a href="{{ route('product.create') }}"><button>Product toevoegen</button></a>
        <a href="{{ route('category.index') }}"><button>Categorieën beheren</button></a>
        <a href="{{ route('product.index') }}"><button>Producten beheren</button></a>
    </div>

    <h2>Laatste Updates:</h2>
    <p>Blijf op de hoogte van de meest recente wijzigingen in je voorraad.</p>
    <ul>
        <li>Toegevoegd: Laptop Dell XPS 13 (5 stuks)</li>
        <li>Aangepast: Monitor LG UltraWide (10 stuks)</li>
        <li>Verwijderd: Toetsenbord Logitech K120</li>
    </ul>

    <p>Veel plezier met het gebruik van het systeem! Voor ondersteuning, neem contact op met de IT-afdeling.</p>
</x-layout>
