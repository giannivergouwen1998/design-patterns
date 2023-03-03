# Facade

### Waar wordt het voor gebruikt?
Als je veel complexe of afhankelijke classes hebt dan kan je het facade patroon gebruiken 
om deze minder complex te maken naar de client toe.

### Voorbeeld
Stel je wilt een bericht posten naar drie verschillende systemen. Dan moet je drie keer een verschillende class aanroepen.
Om dit te voorkomen en/of simpeler te maken gebruik je het facade patroon. Met deze class zorg je ervoor dat je het bericht
op drie verschillende platformen tegelijkertijd kan posten. Hiervoor moet je nu maar 1 class aanroepen.