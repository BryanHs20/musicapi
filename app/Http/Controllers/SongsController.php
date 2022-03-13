<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;

class SongsController extends Controller
{
    
    public function verMusica()
    {
        $consmusica=Music::all();
        return response()->json(['canciones'=>$consmusica]);
    }

    public function verVista()
    {
        return view('index');
        /* $arreglomusic=[]; */
    }

    public function verRock()
    {
        $cliente=new \GuzzleHttp\Client();
        $response=$cliente->request('get', 'https://api.deezer.com/track/116348656');//the beatles-Let It Be
        $datos=json_decode($response->getBody()->getContents(),true);

        $cliente2=new \GuzzleHttp\Client();
        $response2=$cliente2->request('get', 'https://api.deezer.com/track/116348632');//the beatles-Hey Jude (Remastered 2015)
        $datos2=json_decode($response2->getBody()->getContents(),true);
        
        $cliente3=new \GuzzleHttp\Client();
        $response3=$cliente3->request('get', 'https://api.deezer.com/track/116348434');//the beatles-And I Love Her (Remastered 2009)
        $datos3=json_decode($response3->getBody()->getContents(),true);

        $cliente4=new \GuzzleHttp\Client();
        $response4=$cliente4->request('get', 'https://api.deezer.com/track/7818900');//Rolling Stones-Paint It, Black
        $datos4=json_decode($response4->getBody()->getContents(),true);

        $cliente5=new \GuzzleHttp\Client();
        $response5=$cliente5->request('get', 'https://api.deezer.com/track/7677778');//Rolling Stones-I Cant Get No
        $datos5=json_decode($response5->getBody()->getContents(),true);

        $cliente6=new \GuzzleHttp\Client();
        $response6=$cliente6->request('get', 'https://api.deezer.com/track/4125592');//Rolling Stones-Start Me Up (Remastered 2009)
        $datos6=json_decode($response6->getBody()->getContents(),true);

        $cliente7=new \GuzzleHttp\Client();
        $response7=$cliente7->request('get', 'https://api.deezer.com/track/138547415');//Radiohead-Radiohead
        $datos7=json_decode($response7->getBody()->getContents(),true);

        $cliente8=new \GuzzleHttp\Client();
        $response8=$cliente8->request('get', 'https://api.deezer.com/track/138539981');//Radiohead-Karma Police
        $datos8=json_decode($response8->getBody()->getContents(),true);

        $cliente9=new \GuzzleHttp\Client();
        $response9=$cliente9->request('get', 'https://api.deezer.com/track/138539973');//Radiohead-Paranoid Android
        $datos9=json_decode($response9->getBody()->getContents(),true);

        $cliente10=new \GuzzleHttp\Client();
        $response10=$cliente10->request('get', 'https://api.deezer.com/track/2121805');//Thw Who-Baba ORiley
        $datos10=json_decode($response10->getBody()->getContents(),true);

        $cliente11=new \GuzzleHttp\Client();
        $response11=$cliente11->request('get', 'https://api.deezer.com/track/2121813');//The Who-Wont Get Fooled Again (Original Album Version)
        $datos11=json_decode($response11->getBody()->getContents(),true);

        $cliente12=new \GuzzleHttp\Client();
        $response12=$cliente12->request('get', 'https://api.deezer.com/track/2121812');//The Who-Behind Blue Eyes
        $datos12=json_decode($response12->getBody()->getContents(),true);

        $arrayrock = array($datos, $datos2, $datos3, $datos4, $datos5, $datos6, $datos7, $datos8, $datos9, $datos10, $datos11, $datos12);

        $musicasrock = [];
        foreach ($arrayrock as $cancionrock){

            $musicasrock[] = [

                'Id'=> $cancionrock['id'], 
                'Titulo' => $cancionrock['title'],
                'Link' => $cancionrock['link'],
                'Duracion' => $cancionrock['duration'],
                'Portada' => $cancionrock['album']['cover_xl']

            ];
        }

        return view('landingRock', ['musicasrock' => $musicasrock]);

    }
    public function verPop()
    {
        $cliente13=new \GuzzleHttp\Client();
        $response13=$cliente13->request('get', 'https://api.deezer.com/track/908604612');//The Weeknd-Blinding Lights
        $datos13=json_decode($response13->getBody()->getContents(),true);

        $cliente14=new \GuzzleHttp\Client();
        $response14=$cliente14->request('get', 'https://api.deezer.com/track/1352360622');//The Weeknd-Save Your Tears (Remix)
        $datos14=json_decode($response14->getBody()->getContents(),true);

        $cliente15=new \GuzzleHttp\Client();
        $response15=$cliente15->request('get', 'https://api.deezer.com/track/136889434');//The Weeknd-I Feel It Coming
        $datos15=json_decode($response15->getBody()->getContents(),true);

        $cliente16=new \GuzzleHttp\Client();
        $response16=$cliente16->request('get', 'https://api.deezer.com/track/655095912');//Billie Ellish-bad guy
        $datos16=json_decode($response16->getBody()->getContents(),true);

        $cliente17=new \GuzzleHttp\Client();
        $response17=$cliente17->request('get', 'https://api.deezer.com/track/1449740592');//Billie Ellish-Happoer Than Ever
        $datos17=json_decode($response17->getBody()->getContents(),true);

        $cliente18=new \GuzzleHttp\Client();
        $response18=$cliente18->request('get', 'https://api.deezer.com/track/441178812');//Billie Ellish-idontwannabeyouanymore
        $datos18=json_decode($response18->getBody()->getContents(),true);

        $cliente19=new \GuzzleHttp\Client();
        $response19=$cliente19->request('get', 'https://api.deezer.com/track/533609232');//Drake-God´s Plan
        $datos19=json_decode($response19->getBody()->getContents(),true);

        $cliente20=new \GuzzleHttp\Client();
        $response20=$cliente20->request('get', 'https://api.deezer.com/track/124603286');//Drake-Hotline Bling
        $datos20=json_decode($response20->getBody()->getContents(),true);

        $cliente21=new \GuzzleHttp\Client();
        $response21=$cliente21->request('get', 'https://api.deezer.com/track/124603270');//Drake-One Dance
        $datos21=json_decode($response21->getBody()->getContents(),true);

        $cliente22=new \GuzzleHttp\Client();
        $response22=$cliente22->request('get', 'https://api.deezer.com/track/129310248');//Halsey-Closer
        $datos22=json_decode($response22->getBody()->getContents(),true);

        $cliente23=new \GuzzleHttp\Client();
        $response23=$cliente23->request('get', 'https://api.deezer.com/track/561756292');//Halsey-Without Me
        $datos23=json_decode($response23->getBody()->getContents(),true);

        $cliente24=new \GuzzleHttp\Client();
        $response24=$cliente24->request('get', 'https://api.deezer.com/track/1584913472');//Halsey-Could Have Been Me
        $datos24=json_decode($response24->getBody()->getContents(),true);

        $cliente25=new \GuzzleHttp\Client();
        $response25=$cliente25->request('get', 'https://api.deezer.com/track/1174602992');//Adele-Rolling in the Deep
        $datos25=json_decode($response25->getBody()->getContents(),true);

        $cliente26=new \GuzzleHttp\Client();
        $response26=$cliente26->request('get', 'https://api.deezer.com/track/1557137132');//Adele-Oh My God
        $datos26=json_decode($response26->getBody()->getContents(),true);

        $cliente27=new \GuzzleHttp\Client();
        $response27=$cliente27->request('get', 'https://api.deezer.com/track/1522223672');//Adele-Easy On Me
        $datos27=json_decode($response27->getBody()->getContents(),true);

        $arraypop = array($datos13, $datos14, $datos15, $datos16, $datos17, $datos18, $datos19, $datos20, $datos21, $datos22, $datos23, $datos24, $datos25, $datos26, $datos27);

        $musicaspop = [];
        foreach ($arraypop as $cancionpop){

            $musicaspop[] = [

                'Id'=> $cancionpop['id'], 
                'Titulo' => $cancionpop['title'],
                'Link' => $cancionpop['link'],
                'Duracion' => $cancionpop['duration'],
                'Portada' => $cancionpop['album']['cover_xl']

            ];
        }

        return view('landingPop', ['musicaspop' => $musicaspop]);

    }
    public function verTrap()
    {
        $cliente28=new \GuzzleHttp\Client();
        $response28=$cliente28->request('get', 'https://api.deezer.com/track/601837422');//Juice Wrld-Lucid Dreams
        $datos28=json_decode($response28->getBody()->getContents(),true);

        $cliente29=new \GuzzleHttp\Client();
        $response29=$cliente29->request('get', 'https://api.deezer.com/track/602456602');//Juice Wrld-Hide
        $datos29=json_decode($response29->getBody()->getContents(),true);

        $cliente30=new \GuzzleHttp\Client();
        $response30=$cliente30->request('get', 'https://api.deezer.com/track/601837412');//Juice Wrld-All Girls Are The Same
        $datos30=json_decode($response30->getBody()->getContents(),true);

        $cliente31=new \GuzzleHttp\Client();
        $response31=$cliente31->request('get', 'https://api.deezer.com/track/1252695612');//Duki-Ademas de Mi (Remix)
        $datos31=json_decode($response31->getBody()->getContents(),true);

        $cliente32=new \GuzzleHttp\Client();
        $response32=$cliente32->request('get', 'https://api.deezer.com/track/650577972');//Duki-She Dont Give A Fo
        $datos32=json_decode($response32->getBody()->getContents(),true);

        $cliente33=new \GuzzleHttp\Client();
        $response33=$cliente33->request('get', 'https://api.deezer.com/track/889551032');//Duki-Hablamos Mañana
        $datos33=json_decode($response33->getBody()->getContents(),true);
        
        $cliente34=new \GuzzleHttp\Client();
        $response34=$cliente34->request('get', 'https://api.deezer.com/track/1534349712');//Marcianeke-Los Malvekes
        $datos34=json_decode($response34->getBody()->getContents(),true);

        $cliente35=new \GuzzleHttp\Client();
        $response35=$cliente35->request('get', 'https://api.deezer.com/track/651380192');//Marcianeke-Your Dreams Are Where the Music Takes You (Radio Edit)
        $datos35=json_decode($response35->getBody()->getContents(),true);

        $cliente36=new \GuzzleHttp\Client();
        $response36=$cliente36->request('get', 'https://api.deezer.com/track/1662800912');//Marcianeke-Bien Mala (Remix)
        $datos36=json_decode($response36->getBody()->getContents(),true);

        $arraytrap = array($datos28, $datos29, $datos30, $datos31, $datos32, $datos33, $datos34, $datos35, $datos36);

        $musicastrap = [];
        foreach ($arraytrap as $canciontrap){

            $musicastrap[] = [

                'Id'=> $canciontrap['id'], 
                'Titulo' => $canciontrap['title'],
                'Link' => $canciontrap['link'],
                'Duracion' => $canciontrap['duration'],
                'Portada' => $canciontrap['album']['cover_xl']

            ];
        }

        return view('landingTrap', ['musicastrap' => $musicastrap]);
    }
    public function verBanda()
    {
        $cliente37=new \GuzzleHttp\Client();
        $response37=$cliente37->request('get', 'https://api.deezer.com/track/1497753062');//Banda MS-La Sinverguenza
        $datos37=json_decode($response37->getBody()->getContents(),true);

        $cliente38=new \GuzzleHttp\Client();
        $response38=$cliente38->request('get', 'https://api.deezer.com/track/346892981');//Banda MS-El Color de Tus Ojos
        $datos38=json_decode($response38->getBody()->getContents(),true);

        $cliente39=new \GuzzleHttp\Client();
        $response39=$cliente39->request('get', 'https://api.deezer.com/track/927972262');//Banda MS-Somos Los Que Somos (En Vivo)
        $datos39=json_decode($response39->getBody()->getContents(),true);

        $cliente40=new \GuzzleHttp\Client();
        $response40=$cliente40->request('get', 'https://api.deezer.com/track/1658368782');//Christian Nodal-Ya No Somos Ni Seremos
        $datos40=json_decode($response40->getBody()->getContents(),true);

        $cliente41=new \GuzzleHttp\Client();
        $response41=$cliente41->request('get', 'https://api.deezer.com/track/1350503592');//Botella Tras Botella
        $datos41=json_decode($response41->getBody()->getContents(),true);

        $cliente42=new \GuzzleHttp\Client();
        $response42=$cliente42->request('get', 'https://api.deezer.com/track/745192672');//Pa Olvidarme De Ella
        $datos42=json_decode($response42->getBody()->getContents(),true);

        $arraybanda = array($datos37, $datos38, $datos39, $datos40, $datos41, $datos42);

        $musicasbanda = [];
        foreach ($arraybanda as $cancionbanda){

            $musicasbanda[] = [

                'Id'=> $cancionbanda['id'], 
                'Titulo' => $cancionbanda['title'],
                'Link' => $cancionbanda['link'],
                'Duracion' => $cancionbanda['duration'],
                'Portada' => $cancionbanda['album']['cover_xl']

            ];
        }

        return view('landingBanda', ['musicasbanda' => $musicasbanda]);
    }
    public function verNorte()
    {
        $cliente43=new \GuzzleHttp\Client();
        $response43=$cliente43->request('get', 'https://api.deezer.com/track/729612582');//Calibre 50-Si Te Pudiera Mentir
        $datos43=json_decode($response43->getBody()->getContents(),true);


        $cliente44=new \GuzzleHttp\Client();
        $response44=$cliente44->request('get', 'https://api.deezer.com/track/1437722002');//Calibre 50-Cuidando El Territorio
        $datos44=json_decode($response44->getBody()->getContents(),true);


        $cliente45=new \GuzzleHttp\Client();
        $response45=$cliente45->request('get', 'https://api.deezer.com/track/1225504742');//Calibre 50-A La Antiguita
        $datos45=json_decode($response45->getBody()->getContents(),true);

        $cliente46=new \GuzzleHttp\Client();
        $response46=$cliente46->request('get', 'https://api.deezer.com/track/1113341932');//Grupo Firme-El Toxico
        $datos46=json_decode($response46->getBody()->getContents(),true);

        $cliente47=new \GuzzleHttp\Client();
        $response47=$cliente47->request('get', 'https://api.deezer.com/track/1364721242');//Grupo Firme-En Tu Perra Vida
        $datos47=json_decode($response47->getBody()->getContents(),true);

        $cliente48=new \GuzzleHttp\Client();
        $response48=$cliente48->request('get', 'https://api.deezer.com/track/1463153262');//Grupo Firme-El Toxico
        $datos48=json_decode($response48->getBody()->getContents(),true);

        $arraynorte = array($datos43, $datos44, $datos45, $datos46, $datos47, $datos48);

        $musicasnorte = [];
        foreach ($arraynorte as $cancionnorte){

            $musicasnorte[] = [

                'Id'=> $cancionnorte['id'], 
                'Titulo' => $cancionnorte['title'],
                'Link' => $cancionnorte['link'],
                'Duracion' => $cancionnorte['duration'],
                'Portada' => $cancionnorte['album']['cover_xl']

            ];
        }

        return view('landingNorte', ['musicasnorte' => $musicasnorte]);
    }
    public function verReggaeton()
    {
        $cliente49=new \GuzzleHttp\Client();
        $response49=$cliente49->request('get', 'https://api.deezer.com/track/1032957942');//Maluma-Hawai
        $datos49=json_decode($response49->getBody()->getContents(),true);

        $cliente50=new \GuzzleHttp\Client();
        $response50=$cliente50->request('get', 'https://api.deezer.com/track/1419003132');//Maluma-Sobrio
        $datos50=json_decode($response50->getBody()->getContents(),true);
        
        $cliente51=new \GuzzleHttp\Client();
        $response51=$cliente51->request('get', 'https://api.deezer.com/track/1570059572');//Maluma-Sobrio
        $datos51=json_decode($response51->getBody()->getContents(),true);

        $cliente52=new \GuzzleHttp\Client();
        $response52=$cliente52->request('get', 'https://api.deezer.com/track/702421822');//J Balvin-LA CANCION
        $datos52=json_decode($response52->getBody()->getContents(),true);

        $cliente53=new \GuzzleHttp\Client();
        $response53=$cliente53->request('get', 'https://api.deezer.com/track/1412071172');//J Balvin-AM Remix
        $datos53=json_decode($response53->getBody()->getContents(),true);
        
        $cliente54=new \GuzzleHttp\Client();
        $response54=$cliente54->request('get', 'https://api.deezer.com/track/1379102602');//J Balvin-Que Mas Pues?
        $datos54=json_decode($response54->getBody()->getContents(),true);

        $cliente55=new \GuzzleHttp\Client();
        $response55=$cliente55->request('get', 'https://api.deezer.com/track/704054322');//Farruko-Diles
        $datos55=json_decode($response55->getBody()->getContents(),true);

        $cliente56=new \GuzzleHttp\Client();
        $response56=$cliente56->request('get', 'https://api.deezer.com/track/1411181832');//Farruko-Pepas
        $datos56=json_decode($response56->getBody()->getContents(),true);

        $cliente57=new \GuzzleHttp\Client();
        $response57=$cliente57->request('get', 'https://api.deezer.com/track/865878712');//Farruko-Si Me Dices Que Si
        $datos57=json_decode($response57->getBody()->getContents(),true);

        $arrayreggaeton = array($datos49, $datos50, $datos51, $datos52, $datos53, $datos54, $datos55, $datos56, $datos57);

        $musicasreggaeton = [];
        foreach ($arrayreggaeton as $cancionreggaeton){

            $musicasreggaeton[] = [

                'Id'=> $cancionreggaeton['id'], 
                'Titulo' => $cancionreggaeton['title'],
                'Link' => $cancionreggaeton['link'],
                'Duracion' => $cancionreggaeton['duration'],
                'Portada' => $cancionreggaeton['album']['cover_xl']

            ];
        }

        return view('landingReggaeton', ['musicasreggaeton' => $musicasreggaeton]);
    }
    public function verBalada()
    {
        $cliente58=new \GuzzleHttp\Client();
        $response58=$cliente58->request('get', 'https://api.deezer.com/track/3863211');//Luis Miguel-La Incondicional
        $datos58=json_decode($response58->getBody()->getContents(),true);

        $cliente59=new \GuzzleHttp\Client();
        $response59=$cliente59->request('get', 'https://api.deezer.com/track/3902683');//Luis Miguel-Hasta Que Me Olvides
        $datos59=json_decode($response59->getBody()->getContents(),true);

        $cliente60=new \GuzzleHttp\Client();
        $response60=$cliente60->request('get', 'https://api.deezer.com/track/66245333');//Luis Miguel-Ahora Te Puedes Marchar
        $datos60=json_decode($response60->getBody()->getContents(),true);

        $cliente61=new \GuzzleHttp\Client();
        $response61=$cliente61->request('get', 'https://api.deezer.com/track/105000658');//Mon Laferte-Tu Falta De Querer
        $datos61=json_decode($response61->getBody()->getContents(),true);

        $cliente62=new \GuzzleHttp\Client();
        $response62=$cliente62->request('get', 'https://api.deezer.com/track/1109374262');//Mon Laferte-Cancion Sin Miedo
        $datos62=json_decode($response62->getBody()->getContents(),true);

        $cliente63=new \GuzzleHttp\Client();
        $response63=$cliente63->request('get', 'https://api.deezer.com/track/353121641');//Mon Laferte-Mi Buen Amor
        $datos63=json_decode($response63->getBody()->getContents(),true);

        $cliente64=new \GuzzleHttp\Client();
        $response64=$cliente64->request('get', 'https://api.deezer.com/track/746433092');//Cami-Codependientes
        $datos64=json_decode($response64->getBody()->getContents(),true);

        $cliente65=new \GuzzleHttp\Client();
        $response65=$cliente65->request('get', 'https://api.deezer.com/track/1428718022');//Cami-Simplemente Pasan
        $datos65=json_decode($response65->getBody()->getContents(),true);
        
        $cliente66=new \GuzzleHttp\Client();
        $response66=$cliente66->request('get', 'https://api.deezer.com/track/623733972');//Cami-Un Millon Como Tu
        $datos66=json_decode($response66->getBody()->getContents(),true);
        
        $arraybalada = array($datos58, $datos59, $datos60, $datos61, $datos62, $datos63, $datos64, $datos65, $datos66);

        $musicasbalada = [];
        foreach ($arraybalada as $cancionbalada){

            $musicasbalada[] = [

                'Id'=> $cancionbalada['id'], 
                'Titulo' => $cancionbalada['title'],
                'Link' => $cancionbalada['link'],
                'Duracion' => $cancionbalada['duration'],
                'Portada' => $cancionbalada['album']['cover_xl']

            ];
        }

        return view('landingBalada', ['musicasbalada' => $musicasbalada]);
    }
    public function verRap()
    {
        $cliente67=new \GuzzleHttp\Client();
        $response67=$cliente67->request('get', 'https://api.deezer.com/track/1149651122');//Cancerbero-Cancion De La Prision
        $datos67=json_decode($response67->getBody()->getContents(),true);

        $cliente68=new \GuzzleHttp\Client();
        $response68=$cliente68->request('get', 'https://api.deezer.com/track/1149651012');//Cancerbero-Advertencia
        $datos68=json_decode($response68->getBody()->getContents(),true);

        $cliente69=new \GuzzleHttp\Client();
        $response69=$cliente69->request('get', 'https://api.deezer.com/track/1149651032');//Cancerbero-Stop
        $datos69=json_decode($response69->getBody()->getContents(),true);

        $cliente70=new \GuzzleHttp\Client();
        $response70=$cliente70->request('get', 'https://api.deezer.com/track/661573222');//Aitana-Presiento
        $datos70=json_decode($response70->getBody()->getContents(),true);
        
        $cliente71=new \GuzzleHttp\Client();
        $response71=$cliente71->request('get', 'https://api.deezer.com/track/1566795482');//Aitana-Formentera
        $datos71=json_decode($response71->getBody()->getContents(),true);

        $cliente72=new \GuzzleHttp\Client();
        $response72=$cliente72->request('get', 'https://api.deezer.com/track/1164958832');//Aitana-SI NO VAS A VOLVER
        $datos72=json_decode($response72->getBody()->getContents(),true);
    
        $arrayrap = array($datos67, $datos68, $datos69, $datos70, $datos71, $datos72);
        
        $musicasrap = [];
        foreach ($arrayrap as $cancionrap){

            $musicasrap[] = [

                'Id'=> $cancionrap['id'], 
                'Titulo' => $cancionrap['title'],
                'Link' => $cancionrap['link'],
                'Duracion' => $cancionrap['duration'],
                'Portada' => $cancionrap['album']['cover_xl']

            ];
        }

        return view('landingRap', ['musicasrap' => $musicasrap]);
    }

    public function verCancion()
    {
        return view('landing');
    }

}
 