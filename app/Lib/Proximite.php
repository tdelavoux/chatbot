<?php

namespace App\Lib;


class Proximite
{

   public static function searchProxi($pattern){

        $appArray = [
            [ 'label' => 'Workflow Réaménagements',  'keywords' => ['réaménagements de prêts', 'prêts Euros', 'prêts CHF', 'prêts lissés', 'dérogation'], 'describe' => 'description de l\'application'],
            [ 'label' => 'Dérogation Habitat',  'keywords' => ['prêt Habitat', 'prêt locatif', 'dérogation', 'ADE Lagarde'], 'describe' => 'description de l\'application'],
            [ 'label' => 'EasySign',  'keywords' => ['signature électronique', 'signature contrats', 'Simplisigne'], 'describe' => 'description de l\'application'],
            [ 'label' => 'Suivi activité',  'keywords' => ['pilotage activité commerciale', 'pilotage service'], 'describe' => 'description de l\'application'],
        ];

        $resultSim   = [];
        $resultleven = [];
        foreach($appArray as $key => $app){
            $resultSim  [$key] = self::search_similar_text($pattern, $app);
        }

        arsort($resultSim, SORT_NUMERIC);
        return $appArray[array_key_first($resultSim)];
   }

   private static function search_similar_text($pattern, $app){
        $kwPonderation = 0;
        foreach($app['keywords'] as $kw){
            $kwPonderation += similar_text(mb_strtoupper($pattern), mb_strtoupper($kw));
        }
        $kwPonderation = $kwPonderation/sizeof($app['keywords']);
        return similar_text(mb_strtoupper($pattern), mb_strtoupper($app['label'])) + $kwPonderation;
   }

}
