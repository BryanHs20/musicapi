<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MusicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('canciones')->insert([
            [
                //The Beatles
                'Titulo'=>'Let It Be (Remastered 2009)',
                'Link'=>'https://api.deezer.com/track/116348656',
                'Duracion'=>'243',
                'Portada'=>'https://api.deezer.com/album/12047958/image'
            ],
            [       
                'Titulo'=>'Hey Jude (Remastered 2015)',
                'Link'=>'https://api.deezer.com/track/116348632',
                'Duracion'=>'425',
                'Portada'=>'https://api.deezer.com/album/12047956/image'
            ],
            [
                'Titulo'=>'And I Love Her (Remastered 2009)',
                'Link'=>'https://api.deezer.com/track/116348434',
                'Duracion'=>'149',
                'Portada'=>'https://api.deezer.com/album/12047950/image'
            ],
            [
                //Rolling Stones
                'Titulo'=>'Paint It, Black',
                'Link'=>'https://api.deezer.com/track/7818900',
                'Duracion'=>'202',
                'Portada'=>'https://api.deezer.com/album/721846/image'
            ],
            [
                'Titulo'=>'I Cant Get No',
                'Link'=>'https://api.deezer.com/track/7677778',
                'Duracion'=>'223',
                'Portada'=>'https://api.deezer.com/album/708965/image'
            ],
            [
                'Titulo'=>'Start Me Up (Remastered 2009)',
                'Link'=>'https://api.deezer.com/track/4125592',
                'Duracion'=>'213',
                'Portada'=>'https://api.deezer.com/album/384315/image'
            ],
            [
                //Radiohead
                'Titulo'=>'Radiohead',
                'Link'=>'https://api.deezer.com/track/138547415',
                'Duracion'=>'238',
                'Portada'=>'https://api.deezer.com/album/14880711/image'
            ],
            [
                'Titulo'=>'Karma Police',
                'Link'=>'https://api.deezer.com/track/138539981',
                'Duracion'=>'264',
                'Portada'=>'https://api.deezer.com/album/14879699/image'
            ],
            [
                'Titulo'=>'Paranoid Android',
                'Link'=>'https://api.deezer.com/track/138539973',
                'Duracion'=>'387',
                'Portada'=>'https://api.deezer.com/album/14879699/image'
            ],
            [
                //The Who
                'Titulo'=>'Baba ORiley',
                'Link'=>'https://api.deezer.com/track/2121805',
                'Duracion'=>'300',
                'Portada'=>'https://api.deezer.com/album/213021/image'
            ],
            [
                'Titulo'=>'Wont Get Fooled Again (Original Album Version)',
                'Link'=>'https://api.deezer.com/track/2121813',
                'Duracion'=>'511',
                'Portada'=>'https://api.deezer.com/album/213021/image'
            ],
            [
                'Titulo'=>'Behind Blue Eyes',
                'Link'=>'https://api.deezer.com/track/2121812',
                'Duracion'=>'221',
                'Portada'=>'https://api.deezer.com/album/213021/image'
            ],
            [
                //The Weeknd
                'Titulo'=>'Blinding Lights',
                'Link'=>'https://api.deezer.com/track/908604612',
                'Duracion'=>'200',
                'Portada'=>'https://api.deezer.com/album/137217782/image'
            ],
            [
                'Titulo'=>'Save Your Tears (Remix)',
                'Link'=>'https://api.deezer.com/track/1352360622',
                'Duracion'=>'191',
                'Portada'=>'https://api.deezer.com/album/225079122/image'
            ],
            [
                'Titulo'=>'I Feel It Coming',
                'Link'=>'https://api.deezer.com/track/136889434',
                'Duracion'=>'269',
                'Portada'=>'https://www.deezer.com/album/14652356'
            ],
            [
                //Billie Ellish
                'Titulo'=>'bad guy',
                'Link'=>'https://api.deezer.com/track/655095912',
                'Duracion'=>'194',
                'Portada'=>'https://api.deezer.com/album/91598612/image'
            ],
            [
                'Titulo'=>'Happier Than Ever',
                'Link'=>'https://api.deezer.com/track/1449740592',
                'Duracion'=>'298',
                'Portada'=>'https://api.deezer.com/album/248216622/image'
            ],
            [
                'Titulo'=>'idontwannabeyouanymore',
                'Link'=>'https://api.deezer.com/track/441178812',
                'Duracion'=>'203',
                'Portada'=>'https://api.deezer.com/album/53522522/image'
            ],
            [
                //Drake
                'Titulo'=>'God s Plan',
                'Link'=>'https://api.deezer.com/track/533609232',
                'Duracion'=>'198',
                'Portada'=>'https://api.deezer.com/album/69319552/image'
            ],
            [
                'Titulo'=>'Hotline Bling',
                'Link'=>'https://api.deezer.com/track/124603286',
                'Duracion'=>'267',
                'Portada'=>'https://api.deezer.com/album/13082992/image'
            ],
            [
                'Titulo'=>'One Dance',
                'Link'=>'https://api.deezer.com/track/124603270',
                'Duracion'=>'173',
                'Portada'=>'https://api.deezer.com/album/13082992/image'
            ],
            [
                //Halsey
                'Titulo'=>'Closer',
                'Link'=>'https://api.deezer.com/track/129310248',
                'Duracion'=>'244',
                'Portada'=>'https://https://api.deezer.com/album/13680908/image'
            ],
            [
                'Titulo'=>'Without Me',
                'Link'=>'https://api.deezer.com/track/561756292',
                'Duracion'=>'201',
                'Portada'=>'https://api.deezer.com/album/74414522/image'
            ],
            [
                'Titulo'=>'Could Have Been Me',
                'Link'=>'https://api.deezer.com/track/1584913472',
                'Duracion'=>'148',
                'Portada'=>'https://api.deezer.com/album/279233922/image'
            ],
            [
                //Adele
                'Titulo'=>'Rolling in the Deep',
                'Link'=>'https://api.deezer.com/track/1174602992',
                'Duracion'=>'228',
                'Portada'=>'https://api.deezer.com/album/265655342/image'
            ],
            [
                'Titulo'=>'Oh My God',
                'Link'=>'https://api.deezer.com/track/1557137132',
                'Duracion'=>'225',
                'Portada'=>'https://api.deezer.com/album/273425942/image'
            ],
            [
                'Titulo'=>'Easy On Me',
                'Link'=>'https://api.deezer.com/track/1522223672',
                'Duracion'=>'224',
                'Portada'=>'https://api.deezer.com/album/273425942/image'
            ],
            [
                //Juice Wrld
                'Titulo'=>'Lucid Dreams',
                'Link'=>'https://api.deezer.com/track/601837422',
                'Duracion'=>'239',
                'Portada'=>'https://api.deezer.com/album/81337242/image'
            ],
            [
                'Titulo'=>'Hide',
                'Link'=>'https://api.deezer.com/track/602456602',
                'Duracion'=>'205',
                'Portada'=>'https://api.deezer.com/album/81457652/image'
            ],
            [
                'Titulo'=>'All Girls Are The Same',
                'Link'=>'https://api.deezer.com/track/601837412',
                'Duracion'=>'165',
                'Portada'=>'https://api.deezer.com/album/81337242/image'
            ],
            [
                //Duki
                'Titulo'=>'Ademas de Mi (Remix)',
                'Link'=>'https://api.deezer.com/track/1252695612',
                'Duracion'=>'330',
                'Portada'=>'https://api.deezer.com/album/209637372/image'
            ],
            [
                'Titulo'=>'She Dont Give A Fo',
                'Link'=>'https://api.deezer.com/track/650577972',
                'Duracion'=>'209',
                'Portada'=>'https://api.deezer.com/album/90765812/image'
            ],
            [
                'Titulo'=>'Hablamos Manana',
                'Link'=>'https://api.deezer.com/track/889551032',
                'Duracion'=>'240',
                'Portada'=>'https://api.deezer.com/artist/10583405/image'
            ],
            [
                //Marcianeke
                'Titulo'=>'Los Malvekes',
                'Link'=>'https://api.deezer.com/track/1534349712',
                'Duracion'=>'218',
                'Portada'=>'https://https://api.deezer.com/album/268532362/image'
            ],
            [
                'Titulo'=>'Your Dreams Are Where the Music Takes You (Radio Edit)',
                'Link'=>'https://api.deezer.com/track/651380192',
                'Duracion'=>'225',
                'Portada'=>'https://https://api.deezer.com/album/268532362/image'
            ],
            [
                'Titulo'=>'Bien Mala (Remix)',
                'Link'=>'https://api.deezer.com/track/1662800912',
                'Duracion'=>'444',
                'Portada'=>'https://api.deezer.com/album/297375822/image'
            ],
            [
                //Banda MS
                'Titulo'=>'La Sinverguenza',
                'Link'=>'https://api.deezer.com/track/1497753062',
                'Duracion'=>'198',
                'Portada'=>'https://api.deezer.com/album/259761222/image'
            ],
            [
                'Titulo'=>'El Color de Tus Ojos',
                'Link'=>'https://api.deezer.com/track/346892981',
                'Duracion'=>'202',
                'Portada'=>'https://api.deezer.com/album/39494001/image'
            ],
            [
                'Titulo'=>'Somos Los Que Somos (En Vivo)',
                'Link'=>'https://api.deezer.com/track/927972262',
                'Duracion'=>'280',
                'Portada'=>'https://api.deezer.com/album/141311722/image'
            ],
            [
                //Christian Nodal
                'Titulo'=>'Ya No Somos Ni Seremos',
                'Link'=>'https://api.deezer.com/track/1658368782',
                'Duracion'=>'185',
                'Portada'=>'https://api.deezer.com/album/296295252/image'
            ],
            [
                'Titulo'=>'Botella Tras Botella',
                'Link'=>'https://api.deezer.com/track/1350503592',
                'Duracion'=>'197',
                'Portada'=>'https://api.deezer.com/album/224568822/image'
            ],
            [
                'Titulo'=>'Pa Olvidarme De Ella',
                'Link'=>'https://api.deezer.com/track/745192672',
                'Duracion'=>'227',
                'Portada'=>'https://api.deezer.com/album/109720862/image'
            ],
            [
                //Calibre 50
                'Titulo'=>'Si Te Pudiera Mentir',
                'Link'=>'https://api.deezer.com/track/729612582',
                'Duracion'=>'255',
                'Portada'=>'https://api.deezer.com/album/107084762/image'
            ],
            [
                'Titulo'=>'Cuidando El Territorio',
                'Link'=>'https://api.deezer.com/track/1437722002',
                'Duracion'=>'186',
                'Portada'=>'https://api.deezer.com/album/245280882/image'
            ],
            [
                'Titulo'=>'A La Antiguita',
                'Link'=>'https://api.deezer.com/track/1225504742',
                'Duracion'=>'156',
                'Portada'=>'https://api.deezer.com/album/203584372/image'
            ],
            [
                //Grupo Firme
                'Titulo'=>'El Toxico',
                'Link'=>'https://api.deezer.com/track/1113341932',
                'Duracion'=>'179',
                'Portada'=>'https://api.deezer.com/album/180552952/image'
            ],
            [
                'Titulo'=>'En Tu Perra Vida',
                'Link'=>'https://api.deezer.com/track/1364721242',
                'Duracion'=>'238',
                'Portada'=>'https://api.deezer.com/album/228163252/image'
            ],
            [
                'Titulo'=>'Se Fue La Pantera (En Vivo)',
                'Link'=>'https://api.deezer.com/track/1463153262',
                'Duracion'=>'202',
                'Portada'=>'https://api.deezer.com/album/251510992/image'
            ],
            [
                //Maluma
                'Titulo'=>'Hawai',
                'Link'=>'https://api.deezer.com/track/1032957942',
                'Duracion'=>'200',
                'Portada'=>'https://api.deezer.com/album/163017682/image'
            ],
            [
                'Titulo'=>'Sobrio',
                'Link'=>'https://api.deezer.com/track/1419003132',
                'Duracion'=>'201',
                'Portada'=>'https://api.deezer.com/album/240819412/image'
            ],
            [
                'Titulo'=>'Cada Quien',
                'Link'=>'https://api.deezer.com/track/1570059572',
                'Duracion'=>'197',
                'Portada'=>'https://api.deezer.com/album/276240032/image'
            ],
            [
                //J Balvin
                'Titulo'=>'LA CANCION',
                'Link'=>'https://api.deezer.com/track/702421822',
                'Duracion'=>'242',
                'Portada'=>'https://api.deezer.com/album/101490842/image'
            ],
            [
                'Titulo'=>'AM Remix',
                'Link'=>'https://api.deezer.com/track/1412071172',
                'Duracion'=>'261',
                'Portada'=>'https://api.deezer.com/album/239177282/image'
            ],
            [
                'Titulo'=>'Que Mas Pues?',
                'Link'=>'https://api.deezer.com/track/1379102602',
                'Duracion'=>'217',
                'Portada'=>'https://api.deezer.com/album/231721372/image'
            ],
            [
                //Farruko
                'Titulo'=>'Diles',
                'Link'=>'https://api.deezer.com/track/704054322',
                'Duracion'=>'286',
                'Portada'=>'https://api.deezer.com/album/101842542/image'
            ],
            [
                'Titulo'=>'Pepas',
                'Link'=>'https://api.deezer.com/track/1411181832',
                'Duracion'=>'2284',
                'Portada'=>'https://api.deezer.com/album/238972342/image'
            ],
            [
                'Titulo'=>'Si Me Dices Que Si',
                'Link'=>'https://api.deezer.com/track/865878712',
                'Duracion'=>'211',
                'Portada'=>'https://api.deezer.com/album/129721362/image'
            ],
            [
                //Luis Miguel
                'Titulo'=>'La Incondicional',
                'Link'=>'https://api.deezer.com/track/3863211',
                'Duracion'=>'257',
                'Portada'=>'https://api.deezer.com/album/360905/image'
            ],
            [
                'Titulo'=>'Hasta Que Me Olvides',
                'Link'=>'https://api.deezer.com/track/3902683',
                'Duracion'=>'281',
                'Portada'=>'https://api.deezer.com/album/364275/image'
            ],
            [
                'Titulo'=>'Ahora Te Puedes Marchar',
                'Link'=>'https://api.deezer.com/track/66245333',
                'Duracion'=>'191',
                'Portada'=>'https://api.deezer.com/album/6481491/image'
            ],
            [
                //Mon Laferte
                'Titulo'=>'Tu Falta De Querer',
                'Link'=>'https://api.deezer.com/track/105000658',
                'Duracion'=>'278',
                'Portada'=>'https://api.deezer.com/album/10934506/image'
            ],
            [
                'Titulo'=>'Cancion Sin Miedo',
                'Link'=>'https://api.deezer.com/track/1109374262',
                'Duracion'=>'213',
                'Portada'=>'https://api.deezer.com/album/179618572/image'
            ],
            [
                'Titulo'=>'Mi Buen Amor',
                'Link'=>'https://api.deezer.com/track/353121641',
                'Duracion'=>'227',
                'Portada'=>'https://api.deezer.com/album/40448501/image'
            ],
            [
                //Cami
                'Titulo'=>'Codependientes',
                'Link'=>'https://api.deezer.com/track/746433092',
                'Duracion'=>'241',
                'Portada'=>'https://api.deezer.com/album/109938562/image'
            ],
            [
                'Titulo'=>'Simplemente Pasan',
                'Link'=>'https://api.deezer.com/track/1428718022',
                'Duracion'=>'181',
                'Portada'=>'https://api.deezer.com/album/243146812/image'
            ],    
            [
                'Titulo'=>'Un Millon Como Tu',
                'Link'=>'https://api.deezer.com/track/623733972',
                'Duracion'=>'275',
                'Portada'=>'https://api.deezer.com/album/85608932/image'
            ],
            [
                //Cancerbero
                'Titulo'=>'Cancion De La Prision',
                'Link'=>'https://api.deezer.com/track/1149651122',
                'Duracion'=>'273',
                'Portada'=>'https://api.deezer.com/album/187997232/image'
            ],
            [
                'Titulo'=>'Advertencia',
                'Link'=>'https://api.deezer.com/track/1149651012',
                'Duracion'=>'507',
                'Portada'=>'https://api.deezer.com/album/187997232/image'
            ],
            [
                'Titulo'=>'Stop',
                'Link'=>'https://api.deezer.com/track/1149651032',
                'Duracion'=>'363',
                'Portada'=>'https://api.deezer.com/album/187997232/image'
            ],
            [
                //Aitana
                'Titulo'=>'Titulo:Presiento',
                'Link'=>'https://api.deezer.com/track/661573222',
                'Duracion'=>'174',
                'Portada'=>'https://api.deezer.com/album/92833162/image'
            ],
            [
                'Titulo'=>'Formentera',
                'Link'=>'https://api.deezer.com/track/1566795482',
                'Duracion'=>'207',
                'Portada'=>'https://api.deezer.com/album/275534612/image'
            ],
            [
                'Titulo'=>'SI NO VAS A VOLVER',
                'Link'=>'https://api.deezer.com/track/1164958832',
                'Duracion'=>'155',
                'Portada'=>'https://api.deezer.com/album/190793662/image'
            ],
        ]);
    }
}
