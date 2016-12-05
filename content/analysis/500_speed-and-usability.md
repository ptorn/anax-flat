---
titleBreadcrumb: Laddningstid och användbarhet
...
Laddningstid och användbarhet
===============================

##1. Aftonbladet.se##

Jag tänkte att jag börjar med en sida som [http://www.aftonbladet.se](Aftonbladet.se) som är en ganska stor sida med mycket bilder och information för att testa en stor och skaffa mig lite referensramar.

<div class="google-iframe">
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTX4vkdVg8oogpg1VfffcY-IA8I1ylv_HJBrBjdriGsXK0hsRvg8qcZ22ydmi8_jlYqv1T6XCXS530S/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
</div>

###Förbättring###
Det som Aftonbladet.se bör göra för att förbättra sin sida är att ta bort JavaScript och CSS-kod i "above the fold" innehållet som hindrar renderingen. Innehållet i "above-the-fold" kom inte med i hela HTML-svaret utan det behövdes fler anrop efter att HTML-svaret kommit. Endast 19% av "above-the-fold" innehållet hade renderats vid HTML-svaret. Dock så hämtas inte hela sidan vid laddningen utan den begränsas till bara det som syns så när man skrollar ner så laddas bilderna ner.

Även utnyttja caching för att optimera sidans laddning. Även bilderna kan optimeras. Likaså kan man få ner storleken på det som laddas ned genom att komprimera sidan med gzip eller deflate.

##2. Expressen.se##

[http://www.expressen.se](Expressen.se) är min andra analys för att jämföra mot konkurenten som jag precis har analyserat.

<div class="google-iframe">
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTX4vkdVg8oogpg1VfffcY-IA8I1ylv_HJBrBjdriGsXK0hsRvg8qcZ22ydmi8_jlYqv1T6XCXS530S/pubhtml?gid=731126619&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
</div>

###Förbättring###
Här behöver man se till att även här göra något åt JavaScripten och CSS resurserna som gör att innehållet inte kan visas förän JavaScriptet har laddats. Kan kanske lösa det med att ladda ner filerna asynkront. Bilderna kan optimeras ytterliggare och även minifiera JavaScript filer. En annan optimering kan vara att utnyttja  webbläsarens caching. Vissa knapar är för små vilket kan vara jobbigt för användare att kunna klicka på när dom använder touchenheter.

##3. Smp.se##

[http://www.smp.se](Smp.se) är en lokaltidning i kronoberg som jag valt att testa och jämföra i mina reflektioner senare om man kan se några direkta skillnader i hur dom större tidningarna kontra dom mindre lokaltidningarna har valt att lösa sin hemsida.

<div class="google-iframe">
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTX4vkdVg8oogpg1VfffcY-IA8I1ylv_HJBrBjdriGsXK0hsRvg8qcZ22ydmi8_jlYqv1T6XCXS530S/pubhtml?gid=1607641543&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
</div>

###Förbättring###
Även här så finns det JavaScript som hindrar "over-the-fold" innehåll att renderas föräns JavaScripten har laddats vilket resulterar i en lång laddningstid. Likaså kan dom använda webbläsarens caching. Både JavaScript och CSS behöver minifieras för att spara data. För att få ner trafiken så kan man även komprimera datan som skickas. Bilderna kan optimeras ytterliggare och prioritera det synliga innehållet.

##4. GP.se##
[http://www.gp.se](Gp.se) är en dagstidning i Göteborg. Efter att ha letat efter lokaltidningar och stött på att många använder samma wordpress tema som smp.se så valde jag att analysera Gp.se som ni kan se i tabellen nedan.

<div class="google-iframe">
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTX4vkdVg8oogpg1VfffcY-IA8I1ylv_HJBrBjdriGsXK0hsRvg8qcZ22ydmi8_jlYqv1T6XCXS530S/pubhtml?gid=250457401&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
</div>

###Förbättring###
Som förbättring så kan man utnyttja webbläsarens caching och minifiera HTML där det finns data att spara. Även bilderna kan optimeras bättre. Likaså kan man utnyttja kompression för att få ner datatrafiken. Där finns några skript som hindrar renderingen utav sidan vilket resulterar i en längre laddningstid.

##Sammanfattning##
Det första som jag märker mellan dom två större (Aftonbladet och Expressen) och dom två mindre tidningarna (Smp och GP) är att det är avsevärt längre laddningstid på dom mindre tidningarna som väljer att ladda ner hela sidan med bilder och allt vilket resulterar i nästan 200% mer datatrafik vid "above-the-fold" läget. Känns lite onödigt att ladda ner så mycket när man troligtvis klickar sig vidare på en artikel istället för att scrolla ner och kolla på alla ingresser. Så där kan man ju spara servrarna en heldel att göra som dom 2 större tidningarna har gjort. Dom 2 större tidningarna väljer att ladda hem bilderna allt eftersom man scrollar ner. Tror att laddningstider där det går över 4-5 sekunder känns som långsamma så det är viktigt att man presenterar besökaren med material direkt i "over-the-fold" så den känns snabb.

##Medlemmar##
Alla analyserna är gjorda utav mig Peder Tornberg.
