<?php

/**
 * Produtos.class [ MODEL ]
 * Classe responsavel pela manipulação de Produtos
 * @copyright (c) 2016, Felipe Muniz, EstoqueDroid
 */
class Produtos {

    /**
     * Obtem todas os Produtos
     * @return $Array [] de Produtos
     */
    public static function GetProdutos() {

        $Read = new Read;
        $Read->ExeRead('produtos', "ORDER BY id DESC");
        $Result = $Read->getResult();

        if ($Result):
            return $Result;
        else:
            return false;
        endif;
    }

    /**
     * Cadastra um produto
     */
    public static function Create(array $dados) {

        $add = new Create();
        $add->ExeCreate('produtos', $dados);
        $Result = $add->getResult();


        if ($Result):

            return WSErro("Produto cadastrado com sucesso!", WS_ACCEPT);
        else:
            return false;
        endif;
    }

    /**
     * Atualiza o produto
     */
    public static function Update(array $Dados, $id) {

        $up = new Update();
        $up->ExeUpdate('produtos', $Dados, 'WHERE id = :id', "id=$id");
        $Result = $up->getResult();

        if ($Result):
            return "Produto Atualizado!";
        else:
            return false;
        endif;
    }

    /**
     * Deleta um produto
     */
    public static function Delete($id) {

        $del = new Delete();
        $del->ExeDelete('produtos', 'WHERE id = :id', "id=$id");
        $Result = $del->getResult();

        if ($Result):

            return WSErro("Produto deletado com sucesso!", WS_ACCEPT);
        else:
            return false;
        endif;
    }

}
