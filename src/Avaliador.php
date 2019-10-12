<?php
namespace Jamile\TestesApostas;


class Avaliador{


        // Funções auxiliares
        // Compara valores de lances para ordenar listas (crescente | decrescente)
        function comparaLancesCrescente($lance1, $lance2) { 
            return $lance1->getValor() > $lance2->getValor(); 
        }

        function comparaLancesDecrescente($lance1, $lance2) { 
            return $lance2->getValor() > $lance1->getValor(); 
        }


        // Busca maior lance
        function buscaMaiorLance ($listaDeLances){  
            $maiorlance = -1;

            foreach ($listaDeLances as $lance) {
                if ($lance->getValor() > $maiorlance) 
                    $maiorlance = $lance->getValor();            
            }
            return $maiorlance;
        }

        // Busca menor lance
        function buscaMenorLance ($listaDeLances){  
            $menorlance = 100000000;

            foreach ($listaDeLances as $lance) {
                if ($lance->getValor() < $menorlance) 
                    $menorlance = $lance->getValor();            
            }
            return $menorlance;
        }
        
        // Ordena lista de lances de forma crescente e retorna maior lance
        function buscaMaiorLanceCrescente ($listaDeLances){      
            usort($listaDeLances, array($this, 'comparaLancesCrescente')); //ordena lista
            $maiorlance = $this->buscaMaiorLance($listaDeLances);
            return $maiorlance;
        }

        // Ordena lista de lances de forma decrescente e retorna maior lance
        function buscaMaiorLanceDecrescente ($listaDeLances){
            usort($listaDeLances, array($this, 'comparaLancesDecrescente'));  
            $maiorlance = $this->buscaMaiorLance($listaDeLances);
            return $maiorlance;
        }

        
}