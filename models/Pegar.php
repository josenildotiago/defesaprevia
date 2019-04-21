<?php
class Pegar extends model {

	public function pegarDesc($artigo) {
        $padrao = "O padrão é: ";
        $artigo = $artigo;

        $artigo_inicial = explode(" ", $artigo);
        $artigo_inicial = $artigo_inicial[0]. " ".$artigo_inicial[1];

        $palavras = explode(" ", $artigo);
        $contar_palavras = count($palavras);

        if ($contar_palavras == 2) {
            return $artigo_inicial;
            exit;
        }
        if ($contar_palavras == 3) {
            $algarismo = explode(" ", $artigo);
            $algarismo = $algarismo[2];

            $array_incisos = array('I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII','XIII','XIV','XV','XVI','XVII','XVIII','XIX','XX','XXI','XXII','XXIII','XXIV','XXV');
            $array_abc = array('a','A','b','B','c','C','d','D','e','E','f','F','g','G','h','H','i','I','j','J');
            /** PARAGRAFO UNICO */
            $unico = "UNICO";
            $contar = explode(" ", $artigo);
            /** fim paragrafo unico */
            if (in_array($unico,$contar)) {
                $artigo_inicial = $artigo_inicial." parágrafo ÚNICO";
                return $artigo_inicial;
                exit;
            }

            if (in_array($algarismo,$array_incisos)) {
                $artigo_inicial = $artigo_inicial." Inciso ". $algarismo;
                return $artigo_inicial;
                exit;
            }

            if (in_array($algarismo, $array_abc)) {
                $artigo_inicial = $artigo_inicial." Alinea ". $algarismo;
                return $artigo_inicial;
                exit;
            }
        }

        if ($contar_palavras == 4) {
            $algarismo = explode(" ", $artigo);
            $inciso = $algarismo[2];
            $algarismo = $algarismo[3];
            $artigo_inicial = $artigo_inicial." Inciso ".$inciso." Alínea ".$algarismo;
            return $artigo_inicial;
            exit;
        }
        return $artigo;
    }
}