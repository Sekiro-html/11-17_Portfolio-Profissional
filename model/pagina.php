<?php
class Pagina {
    public function Buscar(string $Nome){
        switch($Nome) {
            case 'inicio':
                $pagina =
                    [
                        'nome' => 'Inicio',
                        'titulo' => 'Portfólio Profissional',
                        'sobre' => 'Lorem epsteing'
                    ];
            return $pagina;

            case 'sobre':
                $pagina =  
                        [
                            'nome' => 'Sobre',
                            'titulo' => 'Sobre Gabriel Konrad',
                            'sobre' => 'Lorem epsteing'
                        ];
            return $pagina;

            case 'projetos':
                $pagina = 
                        [
                            'nome' => 'Projetos',
                            'titulo' => 'Meus Projetos',
                            'sobre' => 'Lorem epsteing'
                        ];
            return $pagina;

            case 'linguagens':
                $pagina = 
                        [
                            'nome' => 'Linguagens',
                            'titulo' => 'Linguagens que eu sei e uso',
                            'sobre' => 'Lorem epsteing'
                        ];
                return $pagina;
        }
    }
}
?>