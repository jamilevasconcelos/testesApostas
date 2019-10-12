<?php
namespace Jamile\TestesApostas;


class Avaliador{


        // Função auxiliar
        // Compara valores de lances para ordenar listas (crescente)
        function comparaLancesCrescente($lance1, $lance2) { 
            return $lance1->getValor() > $lance2->getValor(); 
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
        
        // Ordena lista de lances de forma crescente e retorna maior lance
        function buscaMaiorLanceCrescente ($listaDeLances){      
            usort($listaDeLances, array($this, 'comparaLancesCrescente')); //ordena lista
            $maiorlance = $this->buscaMaiorLance($listaDeLances);
            return $maiorlance;
        }

}