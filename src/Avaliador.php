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

        // Ordena lista de lances de forma crescente e retorna menor lance
        function buscaMenorLanceCrescente ($listaDeLances){
            usort($listaDeLances, array($this, 'comparaLancesCrescente')); 
            $menorlance = $this->buscaMenorLance($listaDeLances);
            return $menorlance;
        }

         // Ordena lista de lances de forma decrescente e retorna menor lance
         function buscaMenorLanceDecrescente ($listaDeLances){
            usort($listaDeLances, array($this, 'comparaLancesDecrescente')); 
            $menorlance = $this->buscaMenorLance($listaDeLances);
            return $menorlance;
        }       

        // Ordena lista de lances e retorna os três maiores valores
        function buscaTresMaioresValores ($listaDeLances){
            usort($listaDeLances, array($this, 'comparaLancesDecrescente')); //ordena decrescente
            $listaDeLances = array_slice($listaDeLances, 0, 3); //pega itens com os 3 maiores valores
            $listaDeLances = array ($listaDeLances[0]->getValor(), $listaDeLances[1]->getValor(),
                                        $listaDeLances[2]->getValor());
            return $listaDeLances;
        }
        
}