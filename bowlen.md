We hebben de basis van Object Oriented Programming geleerd, tijd om hiermee te oefenen. In de volgende exercises ga je verschillende programma's bouwen om te oefenen met OOP. Je krijgt elke keer een klassendiagram aangeleverd. Hierin staan alle klassen die je minimaal moet hebben + hun methodes en properties. Succes!

---

We gaan met z'n allen gezellig een avond bowlen! Op de bowling baan werken de machine's en het scorebord automatisch. Het ziet er altijd simple uit maar het is onder water behoorlijk complex. Laten we een klein deel van die complexiteit ontrafelen door zelf een score bord te schrijven voor een bowling game.

```steps
1. Je moet een nieuw spel kunnen starten
2. Je moet één of meerdere spelers kunnen invoeren
3. De spelers kunnen om de beurt hun score invoeren
4. Strikes en spares werken zoals verwacht
5. Na 10 rondes (of 11) is het spel afgelopen en wordt de winnaar bepaald
```

Om je op weg te helpen hebben wij voor deze exercise alvast een deel van de klassen gemaakt en hoef je ze alleen nog maar te implementeren. 

# Klassendiagram
<img src="https://jarvis.bit-academy.nl/api/v1/files/0c23b983-172b-11ea-ab6c-cec41367f4e7/Bowling.png?type=EXERCISE" width="500" />

> We gaan later nog meer in op hoe je een klassendiagram leest en maakt.
Voor nu is het genoeg om te weten dat elke kaart een klasse is, met alle variable en methodes daarin benoemd. De lijnen tussen de klassen geeft een relatie tussen de klassen aan.

# Verantwoordelijkheden
## BowlingGame
De bowling game is verantwoordelijk voor het begeleiden van het spel. Hij vraagt welke spelers meedoen aan het spel, zorgt dat alle spelers aan de beurt komen (welke speler aan de beurt is wordt geregeld door het ScoreBoard) en geeft de worpen van de spelers door aan het ScoreBoard.

## ScoreBoard
De ScoreBoard class is verantwoordelijk voor het bijhouden van de spelers en het berekenen + bijhouden van hun scores. Daarnaast kan aan het einde van het spel het ScoreBoard de winnaar bepalen. Om de status van het spel weer te geven heeft het ScoreBoard een print functie waarmee de huidige status van het spel naar de terminal geprint wordt. Stel er wordt een `strike` gegooid, dan is het de ScoreBoard class die bepaald dat de volgende speler aan de beurt is. 

## Player
De Player class representeert een speler. Dit is een 'domme' class en bevat voornamelijk data en geen logica. 


# Aangeleverde bestanden
- [BowlingGame.class.php](https://jarvis.bit-academy.nl/api/v1/files/0c23b983-172b-11ea-ab6c-cec41367f4e7/BowlingGame.class.php?type=EXERCISE)
- [ScoreBoard.class.php](https://jarvis.bit-academy.nl/api/v1/files/0c23b983-172b-11ea-ab6c-cec41367f4e7/ScoreBoard.class.php?type=EXERCISE)
- [Player.class.php](https://jarvis.bit-academy.nl/api/v1/files/0c23b983-172b-11ea-ab6c-cec41367f4e7/Player.class.php?type=EXERCISE)

# Verwachte uitkomst
```
$ php bowling.php
> Welkom to the bowling game! Please enter your players:
....


> It's your turn Mark: what was your first throw? 
> 8
.....


> The game is over. Steven won! Congratulations!
```