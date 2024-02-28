1. Kas ir API

API ir saīsinājums no “Application Programming Interface”, kas nozīmē Lietojumprogrammu saskarne. API ir kā kurjers, kas palīdz divām programmām sazināties savā starpā. Tas nodrošina noteikumus un specifikācijas, kā programmām apmainīties ar datiem un funkcijām

2. Kā deklarēt mainīgo PHP valodā?
Mainīgie PHP tiek deklarēti, izmantojot "$" simbolu. Pareizais veids, kā deklarēt jebkuru mainīgo PHP, ir $ name.

3. Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā?
Laravel MVC arhitektūra nodrošina skaidru struktūru lietojumprogrammas izstrādei, atdalot datu apstrādi, lietotāja interfeisu un pieprasījumu apstrādi.

4. Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
ORM ir saīsinājums no “Object-Relational Mapping”, kas nozīmē Objektu-Relāciju Atbilstība. ORM ir programmēšanas tehnika, kas ļauj manipulēt ar datu bāzes datiem, izmantojot objektus. Tas nozīmē, ka var strādāt ar datu bāzes tabulām kā ar objektiem savā programmā, nevis rakstot tiešus SQL vaicājumus.

5. Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra:

$lietotāji = User::where('reiting', '>', 4)->get();