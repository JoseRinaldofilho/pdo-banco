<?php


class Cliente{




    function validaCamposCadastro($nome,$email,$senha,$cSenha,$cep,$numero,$tipoPessoa,$cpfCnpj)
    {

        //VALIDA NOME----------------------------------------------------------------------------------------------------------

        //Verifica se nome ta vazio ou com espaço em branco
        if (strlen($nome) == 0 || trim($nome) == "") {
            $_SESSION['erroCadastro'] = "Por favor, digite o seu nome.";
            header("Location: cadastro.php");
            die();
        }

        //Verifica se o nome tem menos de 3 caracteres
        if (strlen($nome) < 3) {
            $_SESSION['erroCadastro'] = "Por favor, digite o seu nome inteiro.";
            header("Location: cadastro.php");
            die();
        }

        //VALIDA EMAIL---------------------------------------------------------------------------------------------------------

        //Verifica se o e-mail possui ".com" ou "@" ou se ele está com espaço em branco
        if (strpos($email, ".com") === false || strpos($email, "@") === false || trim($email) == "") {
            $_SESSION['erroCadastro'] = "Por favor, digite um e-mail válido.";
            header("Location: cadastro.php");
            die();
        }

        //VALIDA SENHA---------------------------------------------------------------------------------------------------------

        //Verifica se a senha está com um espaço em branco
        if (trim($senha) == "") {
            $_SESSION['erroCadastro'] = "Por favor, digite sua senha.";
            header("Location: cadastro.php");
            die();
        }

        //Verifica se a senha e a confimação são iguais
        if ($senha != $cSenha) {
            $_SESSION['erroCadastro'] = "A senha e sua confirmação devem ser idênticas";
            header("Location: cadastro.php");
            die();
        }

        //VALIDA CPF/CNPJ--------------------------------------------------------------------------------------------------------

        //Variáveis para cálculo dos DVs do CPF/CNPJ
        $Soma = 0;
        $Resto = 0;

        //Verifica se é CPF ou CNPJ
        if ($tipoPessoa == "F") {
            //Verifica se o campo está com espaço em branco
            if (trim($cpfCnpj) == "") {
                $_SESSION['erroCadastro'] = "Por favor, digite seu CPF.";
                header("Location: cadastro.php");
                die();
            }

            //Verifica se o CPF tem menos de 11 caracteres ou segue o padrão "0000000000" ou "11111111111" e assim por diante
            if (strlen($cpfCnpj) != 11 ||
                preg_match_all("/0/", $cpfCnpj) == 11 ||
                preg_match_all("/1/", $cpfCnpj) == 11 ||
                preg_match_all("/2/", $cpfCnpj) == 11 ||
                preg_match_all("/3/", $cpfCnpj) == 11 ||
                preg_match_all("/4/", $cpfCnpj) == 11 ||
                preg_match_all("/5/", $cpfCnpj) == 11 ||
                preg_match_all("/6/", $cpfCnpj) == 11 ||
                preg_match_all("/7/", $cpfCnpj) == 11 ||
                preg_match_all("/8/", $cpfCnpj) == 11 ||
                preg_match_all("/9/", $cpfCnpj) == 11) {
                $_SESSION['erroCadastro'] = "Por favor, digite um CPF válido.";
                header("Location: cadastro.php");
                die();
            }

            //Cálculo dos DVs do CPF

            //DV1
            //Dígitos - D1 D2 D3 D4 D5 D6 D7 D8 D9  \
            //          *  *  *  *  *  *  *  *  *    Soma o resultado da múltiplicação de todos
            //Pesos   - 10 9  8  7  6  5  4  3  2  /

            //Resto = Resultado % 11
            //DV1 = 11 - Resto
            //Se o DV1 for >= 10, passa a ser 0
            for ($i = 1; $i <= 9; $i++) {
                $Soma = $Soma + substr($cpfCnpj, $i - 1, 1) * (11 - $i);
            }

            $Resto = $Soma % 11 < 2 ? 0 : 11 - ($Soma % 11);

            if ($Resto != substr($cpfCnpj, 9, 1)) {
                $_SESSION['erroCadastro'] = "Por favor, digite um CPF válido.";
                header("Location: cadastro.php");
                die();
            }

            $Soma = 0;

            //DV2
            //Dígitos   - D1 D2 D3 D4 D5 D6 D7 D8 D9  \
            //            *  *  *  *  *  *  *  *  *    Soma o resultado da múltiplicação de todos
            //Pesos(+1) - 11 10 9  8  7  6  5  4  3  /

            //Resto = Resultado % 11
            //DV1 = 11 - Resto
            //Se o DV1 for >= 10, passa a ser 0
            for ($i = 1; $i <= 10; $i++) {
                $Soma = $Soma + substr($cpfCnpj, $i - 1, 1) * (12 - $i);
            }

            $Resto = $Soma % 11 < 2 ? 0 : 11 - ($Soma % 11);

            if ($Resto != substr($cpfCnpj, 10, 1)) {
                $_SESSION['erroCadastro'] = "Por favor, digite um CPF válido.";
                header("Location: cadastro.php");
                die();
            }

        } else {
            //CNPJ

            //Verifica se o campo está com espaço em branco
            if (trim($cpfCnpj) == "") {
                $_SESSION['erroCadastro'] = "Por favor, digite seu CNPJ.";
                header("Location: cadastro.php");
                die();
            }

            //Verifica se o CNPJ possui 14 dígitos ou segue o padrão "0000000000000" ou "11111111111111" e assim por diante
            if (strlen($cpfCnpj) != 14 ||
                preg_match_all("/0/", $cpfCnpj) == 14 ||
                preg_match_all("/1/", $cpfCnpj) == 14 ||
                preg_match_all("/2/", $cpfCnpj) == 14 ||
                preg_match_all("/3/", $cpfCnpj) == 14 ||
                preg_match_all("/4/", $cpfCnpj) == 14 ||
                preg_match_all("/5/", $cpfCnpj) == 14 ||
                preg_match_all("/6/", $cpfCnpj) == 14 ||
                preg_match_all("/7/", $cpfCnpj) == 14 ||
                preg_match_all("/8/", $cpfCnpj) == 14 ||
                preg_match_all("/9/", $cpfCnpj) == 14) {
                $_SESSION['erroCadastro'] = "Por favor, digite um CNPJ válido.";
                header("Location: cadastro.php");
                die();
            }

            //Cálculo dos DVs do CNPJ

            //DV1
            //Dígitos - D1 D2 D3 D4 D5 D6 D7 D8 D9 D10 D11 D12  \
            //          *  *  *  *  *  *  *  *  *   *   *   *    Soma o resultado da múltiplicação de todos
            //Pesos   - 5  4  3  2  9  8  7  6  5   4   3   2  /


            //Resto = Resultado % 11
            //DV1 = 11 - Resto
            //Se o DV1 for >= 10, passa a ser 0
            $posBloco = 5;
            $Soma = 0;

            for ($i = 1; $i <= 12; $i++) {
                if ((10 - $posBloco) < 2) {
                    $posBloco = 1;
                }
                $Soma = $Soma + substr($cpfCnpj, $i - 1, 1) * (10 - $posBloco);
                $posBloco++;
            }

            $Resto = $Soma % 11 < 2 ? 0 : 11 - ($Soma % 11);

            if ($Resto != substr($cpfCnpj, 12, 1)) {
                $_SESSION['erroCadastro'] = "Por favor, digite um CNPJ válido.";
                header("Location: cadastro.php");
                die();
            }

            //DV2                                               /-> Dígito 13 a mais (sendo o DV calculado anteriormente)
            //Dígitos - D1 D2 D3 D4 D5 D6 D7 D8 D9 D10 D11 D12 D13  \
            //          *  *  *  *  *  *  *  *  *   *   *   *   *    Soma o resultado da múltiplicação de todos
            //Pesos   - 6  5  4  3  2  9  8  7  6   5   4   3   2  /
            //         /-> Peso(+1) nos primeiros 5 dígitos


            //Resto = Resultado % 11
            //DV1 = 11 - Resto
            //Se o DV1 for >= 10, passa a ser 0
            $Soma = 0;
            $posBloco = 4;

            for ($i = 1; $i <= 13; $i++) {
                if ((10 - $posBloco) < 2) {
                    $posBloco = 1;
                }
                $Soma = $Soma + substr($cpfCnpj, $i - 1, 1) * (10 - $posBloco);
                $posBloco++;
            }

            $Resto = $Soma % 11 < 2 ? 0 : 11 - ($Soma % 11);

            if ($Resto != substr($cpfCnpj, 13, 1)) {
                $_SESSION['erroCadastro'] = "Por favor, digite um CNPJ válido.";
                header("Location: cadastro.php");
                die();
            }

        }
    }


    }