<?php

namespace Controllers;


class MachineController
{
    //mettre fonction en static si route statique
    public static function index(){
        include 'views/machine.php'; // relier sinn marche pas, pas avec le raccourci ROOT car ne marche pas...
        include 'templates/global.php';
    }

    //mettre fonction en static si route statique
    public static function play(){

        header('Content-Type: application/json');
        
        $symbols_with_weights = [
            '🍋' => 40,
            '🍒' => 30,
            '⭐' => 15,
            '🔔' => 10,
            '💎' => 5,
        ];

        $paytable = [
            '🍋🍋🍋' => 40,
            '🍒🍒🍒' => 50,
            '⭐⭐⭐' => 100,
            '🔔🔔🔔' => 150,
            '💎💎💎' => 200,
        ];

       //mettre en self:: au lieu de $this-> pour utiliser des routes statiques dans index.php
        $reel1 = self::getRandomSymbol($symbols_with_weights); 
        $reel2 = self::getRandomSymbol($symbols_with_weights);
        $reel3 = self::getRandomSymbol($symbols_with_weights); 

        $combination = $reel1 . $reel2 . $reel3;
        $gain = isset($paytable[$combination]) ? $paytable[$combination] : 0;

        echo json_encode([
            'success' => true,
            'reels' => [$reel1, $reel2, $reel3],
            'gain' => $gain,
        ]);
    }
    //rendre fonction static si route statique 
    private static function getRandomSymbol($symbols_with_weights){  
        $rand = mt_rand(1, array_sum($symbols_with_weights));
        foreach ($symbols_with_weights as $symbol => $weight){
            if ($rand <= $weight) {
                return $symbol;
            }
            $rand -= $weight;
        }
        return null;
    }
}
