---
layout: post
title:  "Stage - Week 7"
date:   2017-03-24 16:20:00 +0100
categories: stage
---


**Wat heb ik geleerd deze week?**

Eerst heb ik een gewoon neuraal netwerk gebouwd waarmee ik iets meer dan 50% accuratie krijg (random guesses op deze set zijn 10% van de tijd accuraat.)

Daarna heb ik  geleerd hoe ik nieuwe speciale lagen moet implementeren in mijn Neuraal netwerk in Tensorflow, hoe groot de Tensors moeten zijn. Ik heb er een kleine CNN van gemaakt maar helaas is de accuratie lager dan bij mijn eerste implementatie.

Sinds de implementatie van concolutional layers is ook de rekentijd voor mijn CPU exponentieel gestegen. Op die momenten ben ik bezig met het fine-tunen van de andere code, onderzoeken en parameters veranderen.

**Welke moeilijkheden heb ik ondervonden (zowel op technisch als sociaal vlak)?**

Mijn dataset is iets te klein voor mijn manier van machine learning, en dan moet je al snel geavanceerdere methodes gebruiken. Deze zijn een stukje ingewikkelder. 

Ook moet ik heel lang wachten tot de training klaar is. Zeker na het implenteren van concolutional layers. Ik heb er de juiste hardware niet voor. AMD wordt helaas nog niet ondersteund door Tensorflow, en de open-CL Tensorflow implementatie werkt niet in Windows en kan niet gevirtualiseerd worden, want dan werk je weer met de CPU. Een virtuele machine kan ook max 512Mb GPU RAM gebruiken.

**Hoe heb ik deze moeilijkheden opgelost?**

Volgende week ga ik hiervoor een aantal mensen contacteren.

**Omschrijf in drie woorden het gevoel dat je hebt ervaren tijdens de afgelopen week.**

**Zelfvertrouwen**, het is duidelijk dat mijn neuraal netwerk werkt. **Ongeduld** Door het lang moeten wachten op resultaten na het tweaken van settings.  **Thuisvoelen**, Ik voel me goed bij Ordina, toffe collega's, we zijn vorige week zaterdag gaan airsoften..

**Excel-bestand met weekoverzicht van de uitgevoerde taken bij Ordina**

[De uitgevoerde taken]({{ site.url }}/weekoverzichten/Stage - Week 7.xlsx)
