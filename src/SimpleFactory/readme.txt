Simple factory design pattern

Je maakt een object.
Als dit object gemaakt wordt, dan wordt er gebruik gemaakt van een bepaalde logica die hier achter zit.
Om deze logica niet steeds opnieuw terug te laten komen als je een object aanmaakt, wordt er een factory aangemaakt die dit object terug geeft waar de logica al in verwerkt is.
Zodat degene die het object wil aanmaken alleen maar de factory hoeft aan te roepen.

Dit is handig omdat zoals hierboven beschreven staat, je geen rekening hoeft te houden met de logica die in het object zit en omdat je dan de logica op 1 plek hebt staan.
Dus mocht deze logica veranderen dan moet je dit maar op 1 plek aanpassen.

