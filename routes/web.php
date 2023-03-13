<?php

use App\Models\Etudiant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
 

// Premiere Méthode
// Route::get('/', function () {
//     $jours = ["Lundi", "Mardi", "Mercredi","Jeudi", "Vendredi"];
//     return view('base')->with("jours", $jours);
// });

// Route::get('/about', function () {
//     return view('pages/about')
//     ->with("prenom", "Modou")
//     ->with('nom', "Sarr");
// });


// Deuxieme Méthode
// Route::get('/about', function () {
//     return view('pages/about')
//     ->withPrenom("Gnoror")
//     ->withNom("Sarr");
// });


// Troisime Méthode
// Route::get('/about', function () {
//     return view('pages/about')
//     ->with([
//         'prenom' => "Modou",
//         'nom' => "Sarr"
//     ]);
// });


// Quatrime Méthode
// Route::get('/about', function () {
//     $tab = [
//         'prenom' => 'Modou',
//         'nom' => "Sarr"
//     ];
//     $nomComplet = "Issa pouye";
//     return view('pages/about', compact('tab', 'nomComplet'));
// });


// Cinquieme Méthode
// Route::get('/about', function () {
//     $view = view('pages/about');
//     $view->nom = "Sarr";
//     $view->prenom = "Fatou";
//     $view->adresse= "Pikine";

//     return $view;
// });


Route::get('/', function () {
    $jours = ["Lundi", "Mardi", "Mercredi","Jeudi", "Vendredi"];
    return view('base')->with("jours", $jours);
});

Route::view('/about', 'pages/about');
Route::view('/contact', 'pages/contact');
Route::view('/service', 'pages/service');
Route::get('/', function() 
{
       //*****Apprendre SQL Brute********//
     //Séléctionner la liste des articles//
//  $articles = DB::select('select * from articles ');
//   dd($articles);
// Séléctionner moi la premiére article
// $article = DB::select('select * from articles limit 1');
// dd($article);
// A partir du 2eme, recuperer articles 1
// $article = DB::select('select * from articles limit 1 offset 2');
// dd($article);
//Inserer un article: Premiére Méthode
// $articles = DB::insert
// ("INSERT INTO articles values(null, :titre, :contenu, :etat, :date)",
//  ['titre' => 'Titre4', 'contenu' =>'contenu4',
//  'etat' => 1,'date'=> date('Y-m-d H:i:s') ]);
// Inserer un article: Premiére Méthode
// $titre = 'titre 5';
// $contenu = 'contenu 5';
// $etat = 0;
// $date = date('Y-m-d H:i:s');

// $articles = DB::insert
// ("INSERT INTO articles values(null, :titre, :contenu, :etat, :date)",
// compact('titre', 'contenu', 'etat', 'date'));
//    dd($articles);
   // Inserer un article: Premiére Méthode
// $titre = 'titre 6';
// $contenu = 'contenu 6';
// $etat = 0;
// $date = date('Y-m-d H:i:s');

// $articles = DB::insert
// ("INSERT INTO articles values(null, ?, ?, ?, ?)",
// [$titre , $contenu , $etat, $date]);
//    dd($articles);
     //Modifier Arcticle 2
// $ok = DB:: update("UPDATE articles SET titre='Titre 2 modifié' 
// WHERE id=2");
// dd($ok);
     //Supprimer Article dont id=6
// $ok = DB:: delete("DELETE from articles WHERE id =6");
// dd($ok);
    //********Apprendre Fluent Query Builder*******
    // Selectionner tous les articles
// $articles = DB::table('articles')->get('*');
//  dd($articles);
      //------Selectionner tous les articles
// $articles = DB:: table('articles')->get(['titre', 'contenu']);
// dd($articles);
    // Selectionner le premiér article
// $article = DB:: table('articles')->first();
// dd($article);
    // Selectionner le titre du premiér article
// $article = DB:: table('articles')->first()->titre;
// dd($article);
    // Selectionner l'article qui a pour titre titre2
// $article = DB:: table('articles')->whereId(2)->get();
// $article = DB:: table('articles')->where('id', 2)->get();
   //----- Selectionner tous les articles dont leur id est =< 2---//
// $article = DB:: table('articles')->where('id', '>', 2)->get();
   //----- Selectionner tous les articles dont leur id est 2---//
//    $article = DB:: table('articles')
//         ->whereTitreAndContenu('Titre 2', 'Contenu 2')->get();
// $article = DB:: table('articles')
//         ->where('titre', 'Titre 2')
//         ->where('contenu', 'Contenu 2')
//             ->get();
   //----- Selectionner l'article dont le titre est "Titre 2"//
            //  $article = DB:: table('articles')
            //  ->whereTitreOrContenu('Titre 2', 'Contenu 2')->get();
            //     dd($article);
   //----- Selectionner l'article dont le titre est "Titre 2"//
   //ou le contenu "Contenu 2" (Deuxieme méthode)
//    $article = DB:: table('articles')
//         ->where('titre', 'Titre 2')
//         ->orwhere('contenu', 'Contenu 2')
//             ->get();
            // dd($article);
            //Selectionner deux articles 
            // $article = DB:: table('articles')->take(2)
            // ->get();
            // dd($article);
             //Selectionner du dieuxiéme articles, selectionner 3 articles
            //  $article = DB:: table('articles')
            //  ->where('id', '>','2')->take(3)
            //  ->get();
            //  dd($article);
             //Selectionner tous les articles en faisant un trie ascendant
            //  $articles = DB:: table('articles')->orderBy('titre', 'asc')->get();
            //  $articles2 = DB:: table('articles')->orderBy('titre', 'desc')->get();
            //  dump($articles);
            //  $articles2 = DB:: table('articles')
            //  ->where('id', '>', '2')->orderBy('titre', 'desc')->get();
            //Selectionner les nombres d'articles
            //  $articles2 = DB:: table('articles')->count();
            //  dd($articles2);
            //  //inserer un article (Premiére Méthode)
            //  $articles = DB:: table('articles')->insert(
            // [
            //       [
            //         'Titre' => 'titre 8',
            //         'contenu' => 'contenu 8 ',
            //         'etat' => 0,
            //         'date' => date('Y-m-d H:i:')
                
            //       ], 
            //        [
            //         'Titre' => 'titre 9',
            //         'contenu' => 'contenu 9',
            //         'etat' => 1,
            //         'date' => date('Y-m-d H:i:s')
            //        ]
                 
            // ]
            // );
            //  dd($articles);
             //Modifier le titre et le contenu de l'article dont l'id =3
            //  $articles = DB:: table('articles')->whereId(2)->update(
                
            //           [
            //             'Titre' => 'B titre modifié',
            //             'contenu' => 'contenu 8 modifié ',
            //          ] 
                       
            //     );
            //      dd($articles);
         // Supprimer l'article d'id 4
        // $articles = DB:: table('articles')->where('id', 4)->delete();
        //    dd($articles);

        //********-----Apprendre Eloquent(ORM)-------******/
        // Recuperer Tous les etudiants 
    // $etudiants = Etudiant::all();
    // dd($etudiants);
        // Recuperer l'etudiant qui a l'id 2
// $etudiants = Etudiant::find(2);
// dd($etudiants);
        // Recuperer le nom et le prenom l'etudaint qui a l'id 2
 // $etudiants = Etudiant::whereId(2)->get(['nom', 'prenom']);
// dd($etudiants);
        // Recuperer le nom et le prenom l'etudaint dont son 
        // le prenom est différent de "Mbaye"
// $etudiants = Etudiant::where('prenom','!=', 'Doudou')
//                      ->where('age', '>', 12)
//                      ->get(['nom', 'prenom']);
// dd($etudiants);
        // Recuperer le nom et le prenom l'etudaint dont son 
// $nomPremiereEtudiant = Etudiant::first()->nom;
// dd($nomPremiereEtudiant);
       // -*****Ajouter un etudiant (Premiere Méthode)
// $etudiant = new Etudiant();
// $etudiant->nom = "Fall";
// $etudiant->prenom = "Tima";
// $etudiant->matricule = "4325E4G";
// $etudiant->age = 43;
// $ok =$etudiant->save();
// dd($ok);
      // -*****Ajouter un etudiant (Deuixéme Méthode)
    //   $etudiant = new Etudiant(
    //     [
    //         'nom' => "Diop",
    //         'prenom' => "Fatou",
    //         'matricule' => "101014",
    //         'age' => 19
    //     ]
    // );
    //       $ok = $etudiant->save();
                // -*****Ajouter un etudiant (Troixéme Méthode)
      $etudiant = Etudiant::create(
        [
            'nom' => "Gueye",
            'prenom' => "Bira",
            'matricule' => "1010GF4",
            'age' => 41
        ]
    );
        
    dd("L'etudiant" . $etudiant->prenom . ' '. $etudiant->nom .
    'a été crée avec succés !!!');

     return view('base');
});
