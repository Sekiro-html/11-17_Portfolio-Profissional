<?php
    require_once __DIR__ . '/../model/pagina.php';

    class Controller {
        public function exibir(string $nome){
            $modelo = new Pagina();
            $pagina = $modelo->exibir($nome);

            if ($pagina === null) {
                http_response_code(404);
                $pagina = 
                [
                    'nome' => 'error404',
                    'titulo' => 'Pagina não encontrada',
                    'sobre' => 'não achamos uma pagina com esse nome'
                ];
            }
        }
    }
?>