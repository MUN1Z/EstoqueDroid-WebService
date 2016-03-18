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
        $Read->ExeRead('products', "ORDER BY id DESC");
        $Result = $Read->getResult();

        if ($Result):
            return $Result;
        else:
            return false;
        endif;
    }
    
    
    /**
     * Obtem o produto com o id tal 
     * @return $Array [] de Produtos
     */
    public static function GetProdutoId2($id) {

        $Read = new Read;
        $Read->FullRead("SELECT * FROM products WHERE id = :id", "id=$id");
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
        $add->ExeCreate('products', $dados);
        $Result = $add->getResult();


        if ($Result):

            return "Produto cadastrado com sucesso!";
        else:
            return false;
        endif;
    }

    /**
     * Atualiza o produto
     */
    public static function Update(array $Dados, $id) {

        $up = new Update();
        $up->ExeUpdate('products', $Dados, 'WHERE id = :id', "id=$id");
        $Result = $up->getResult();

        if ($Result):
            return "Produto Atualizado com sucesso!";
        else:
            return false;
        endif;
    }

    /**
     * Deleta um produto
     */
    public static function Delete($id) {

        $del = new Delete();
        $del->ExeDelete('products', 'WHERE id = :id', "id=$id");
        $Result = $del->getResult();

        if ($Result):

            return "Produto deletado com sucesso!";
        else:
            return false;
        endif;
    }

}
