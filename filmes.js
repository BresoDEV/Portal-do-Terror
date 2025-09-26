const posters = [
    '120 Dias de Sodoma.jpg', '',//    16.5 kB','',//    11/06/2025, 10:26:14
    '60 Minutos Para Morrer - 2017.jpg', 'https://archive.org/download/60-minutos-para-morrer-2017/60 Minutos Para Morrer - 2017.mp4',//    13.4 kB','',//    11/06/2025, 10:26:14
    '7 Desejos - 2017.jpg', '',//    11.2 kB','',//    11/06/2025, 10:26:14
    'A Arte do Demonio - 2004.jpg', 'https://archive.org/download/a-arte-do-demonio-2004/A Arte do Demonio - 2004.mp4',//    10.3 kB','',//    11/06/2025, 10:26:14
    'A Arte do Demonio 2 - 2005.jpg', 'https://archive.org/download/a-arte-do-demonio-2-2005/A Arte do Demonio 2 - 2005.mp4',//    15.0 kB','',//    11/06/2025, 10:26:14
    'A Arte do Demonio 3 - 2008.jpg', 'https://archive.org/download/a-arte-do-demonio-3-2008/A Arte do Demonio 3 - 2008.mp4',//    12.3 kB','',//    11/06/2025, 10:26:14
    'A Autopsia.jpg', 'https://archive.org/download/a-autopsia/A Autopsia.ia.mp4',//    10.9 kB','',//    11/06/2025, 10:26:14
    'A Bolha Assasina 1958.jpg', 'https://archive.org/download/a-bolha-assasina-1958/A Bolha Assasina 1958.mp4',//    18.1 kB','',//    11/06/2025, 10:26:14
    'A Bolha Assassina - 1988.jpg', 'https://ia902904.us.archive.org/23/items/a-bolha-assassina-1988_202507/A%20Bolha%20Assassina%20-%201988.mp4',//    12.9 kB','',//    11/06/2025, 10:26:14
    'A Casa Amaldiçoada - 1999.jpg', 'https://archive.org/download/a-casa-amaldicoada-1999/A Casa Amaldiçoada - 1999.mp4',//    12.1 kB','',//    11/06/2025, 10:26:14
    'A Casa da Colina - 1999.jpg', '',//    11.2 kB','',//    11/06/2025, 10:26:14
    'A Casa de Vidro 1 - 2001.jpg', 'https://archive.org/download/a-casa-de-vidro-1-2001/A Casa de Vidro 1 - 2001.mp4',//    9.3 kB','',//    11/06/2025, 10:26:14
    'A Casa de Vidro 2 - 2006.jpg', 'https://archive.org/download/a-casa-de-vidro-2-2006/A Casa de Vidro 2 - 2006.mp4',//    14.2 kB','',//    11/06/2025, 10:26:14
    'A Casa do Espanto 1.jpg', 'https://archive.org/download/a-casa-do-espanto-1/A Casa do Espanto 1.mp4',//    10.7 kB','',//    11/06/2025, 10:26:14
    'A Casa do Espanto 2.jpg', 'https://archive.org/download/a-casa-do-espanto-2_202507/A Casa do Espanto 2.mp4',//    7.1 kB','',//    11/06/2025, 10:26:14
    'A Casa do Espanto 3.jpg', 'https://archive.org/download/a-casa-do-espanto-3_202507/A Casa do Espanto 3.mp4',//    10.7 kB','',//    11/06/2025, 10:26:14
    'A Casa do Espanto 4.jpg', 'https://archive.org/download/a-casa-do-espanto-4_202507/A Casa do Espanto 4.mp4',//    13.5 kB','',//    11/06/2025, 10:26:14
    'A Casa Dos 1000 Corpos.jpg', 'https://archive.org/download/a-casa-dos-1000-corpos_202507/A Casa Dos 1000 Corpos.mp4',//    15.3 kB','',//    11/06/2025, 10:26:14
    'A Casa dos Mortos  - O Filme - 2003.jpg', 'https://archive.org/download/a-casa-dos-mortos-o-filme-2003/A Casa dos Mortos  - O Filme - 2003.mp4',//    6.2 kB','',//    11/06/2025, 10:26:14
    'A Casa dos Mortos 2 - 2005.jpg', 'https://archive.org/download/a-casa-dos-mortos-2-2005/A Casa dos Mortos 2 - 2005.mp4',//    15.0 kB','',//    11/06/2025, 10:26:14
    'A Casa dos Passaros Mortos.jpg', 'https://archive.org/download/a-casa-dos-passaros-mortos/A Casa dos Passaros Mortos.mp4',//    11.7 kB','',//    11/06/2025, 10:26:14
    'A Casa Que Jack Construiu.jpg', 'https://archive.org/download/a-casa-que-jack-construiu/A Casa Que Jack Construiu.ia.mp4',//    13.5 kB','',//    11/06/2025, 10:26:14
    'A Casa que Pingava Sangue - 1971.jpg', 'https://archive.org/download/a-casa-que-pingava-sangue-1971_202507/A Casa que Pingava Sangue - 1971.mp4',//    15.2 kB','',//    11/06/2025, 10:26:14
    'A Caverna - 2005.jpg', 'https://archive.org/download/a-caverna-2005/A Caverna - 2005.mp4',//    11.7 kB','',//    11/06/2025, 10:26:14
    'A Caverna Maldita - 2006.jpg', 'https://archive.org/download/a-caverna-maldita-2006/A Caverna Maldita - 2006.mp4',//    18.5 kB','',//    11/06/2025, 10:26:14
    'A Coisa - 2011.jpg', 'https://archive.org/download/a-coisa-2011/A Coisa - 2011.mp4',//    10.6 kB','',//    11/06/2025, 10:26:14
    'A Enfermeira Assassina - 2014.jpg', 'https://archive.org/download/a-enfermeira-assassina-2014/A Enfermeira Assassina - 2014.mp4',//    11.4 kB','',//    11/06/2025, 10:26:14
    'A Entidade.jpg', 'https://archive.org/download/a-entidade_202507/A Entidade.ia.mp4',//    14.2 kB','',//    11/06/2025, 10:26:14
    'A Entidade 2.jpg', 'https://archive.org/download/a-entidade-2/A Entidade 2.ia.mp4',//    11.9 kB','',//    11/06/2025, 10:26:14
    'A Epidemia - 2010.jpg', 'https://archive.org/download/a-epidemia-2010/A Epidemia - 2010.mp4',//    14.6 kB','',//    11/06/2025, 10:26:14
    'A Espera do Mal - 2005.jpg', 'https://archive.org/download/a-espera-do-mal-2005/A Espera do Mal - 2005.mp4',//    9.0 kB','',//    11/06/2025, 10:26:14
    'A Experiência - 1995.jpg', 'https://archive.org/download/a-experiencia-1995/A Experiência - 1995.mp4',//    12.7 kB','',//    11/06/2025, 10:26:14
    'A Experiência 2 - 1998.jpg', 'https://archive.org/download/a-experiencia-2-1998_202509/A%20Experi%C3%AAncia%202%20-%201998.mkv',//    13.3 kB','',//    11/06/2025, 10:26:14
    'A Experiência 3 - 2004.jpg', 'https://archive.org/download/a-experiencia-3-2004_202507/A Experiência 3 - 2004.mp4',//    12.1 kB','',//    11/06/2025, 10:26:14
    'A Experiência 4 - O Despertar - 2007.jpg', 'https://archive.org/download/a-experiencia-4-o-despertar-2007_202507/A Experiência 4 - O Despertar - 2007.mp4',//    14.3 kB','',//    11/06/2025, 10:26:14
    'A Filha de Drácula - 1936.jpg', 'https://archive.org/download/a-filha-de-dracula-1936_202509/A%20Filha%20de%20Dr%C3%A1cula%20-%201936.mkv',//    17.7 kB','',//    11/06/2025, 10:26:14
    'A Forca - 2015.jpg', 'https://archive.org/download/a-forca-2015_202509/A%20Forca%20-%202015.mkv',//    5.7 kB','',//    11/06/2025, 10:26:16
    'A Freira 1.jpg', 'https://archive.org/download/a-freira_202509/A%20Freira.mp4',//    6.5 kB','',//    11/06/2025, 10:26:16
    'A Freira 2.jpg', 'https://archive.org/download/a-freira-2_202509/A%20Freira%202.mp4',//    6.4 kB','',//    11/06/2025, 10:26:16
    'A Fronteira.jpg', 'https://archive.org/download/a-fronteira_202509/A%20Fronteira.mkv',//    16.1 kB','',//    11/06/2025, 10:26:16
    'A Gruta - 2020.jpg', '',//    11.4 kB','',//    11/06/2025, 10:26:16
    'A Hora do Espanto 1.jpg', 'https://archive.org/download/a-hora-do-espanto_202509/A Hora do Espanto.mp4',//    11.7 kB','',//    11/06/2025, 10:26:16
    'A Hora do Espanto 2.jpg', 'https://archive.org/download/a-hora-do-espanto-2_202509/A%20Hora%20do%20Espanto%202.mp4',//    13.4 kB','',//    11/06/2025, 10:26:16
    'A Hora do Espanto 3.jpg', 'https://archive.org/download/a-hora-do-espanto-3_202509/A%20Hora%20do%20Espanto%203.mp4',//    85.1 kB','',//    11/06/2025, 10:39:02
    'A Hora do Pesadelo 1.jpg', 'https://archive.org/download/a-hora-do-pesadelo-1_202509/A%20Hora%20do%20Pesadelo%201.mkv',//    11.9 kB','',//    11/06/2025, 10:26:16
    'A Hora do Pesadelo 2.jpg', 'https://archive.org/download/a-hora-do-pesadelo-2_202509/A%20Hora%20do%20Pesadelo%202.mkv',//    14.3 kB','',//    11/06/2025, 10:26:16
    'A Hora do Pesadelo 3.jpg', 'https://archive.org/download/a-hora-do-pesadelo-3_202509/A%20Hora%20do%20Pesadelo%203.mkv',//    12.1 kB','',//    11/06/2025, 10:26:16
    'A Hora do Pesadelo 4.jpg', 'https://archive.org/download/a-hora-do-pesadelo-4_202509/A%20Hora%20do%20Pesadelo%204.mkv',//    9.7 kB','',//    11/06/2025, 10:26:16
    'A Hora do Pesadelo 5.jpg', 'https://archive.org/download/a-hora-do-pesadelo-5_202509/A%20Hora%20do%20Pesadelo%205.mkv',//    15.5 kB','',//    11/06/2025, 10:26:16
    'A Hora do Pesadelo 6.jpg', 'https://archive.org/download/a-hora-do-pesadelo-6_202509/A%20Hora%20do%20Pesadelo%206.mkv',//    11.3 kB','',//    11/06/2025, 10:26:16
    'A Hora do Pesadelo 7.jpg', 'https://archive.org/download/a-hora-do-pesadelo-7_202509/A%20Hora%20do%20Pesadelo%207.mkv',//    14.9 kB','',//    11/06/2025, 10:26:16
    'A Ilha do Dr. Moreau - 1977.jpg', '',//    10.8 kB','',//    11/06/2025, 10:26:16
    'A Ilha do Dr. Moreau - 1996.jpg', 'https://archive.org/download/a-ilha-do-dr.-moreau-1996_202509/A%20Ilha%20do%20Dr.%20Moreau%20-%201996.mkv',//    11.0 kB','',//    11/06/2025, 10:26:16
    'A Ilha dos Mortos.jpg', 'https://archive.org/download/a-ilha-dos-mortos_202509/A%20Ilha%20dos%20Mortos.mkv',//    16.1 kB','',//    11/06/2025, 10:26:16
    'A LENDA DO CAVALEIRO FANTASMA.jpg', '',//    15.8 kB','',//    11/06/2025, 10:26:16
    'A Luz Do Demonio.jpg', '',//    8.0 kB','',//    11/06/2025, 10:26:16
    'A Maldição da Casa Winchester - 2018.jpg', 'https://archive.org/download/a-maldicao-da-casa-winchester-2018_202509/A%20Maldi%C3%A7%C3%A3o%20da%20Casa%20Winchester%20-%202018.mkv',//    9.2 kB','',//    11/06/2025, 10:26:16
    'A Maldição da Mosca - 1965.jpg', '',//    17.2 kB','',//    11/06/2025, 10:26:16
    'A Maldicao de Samantha.jpg', '',//    12.6 kB','',//    11/06/2025, 10:26:16
    'A Maldição do Mestre dos Brinquedos (1998).jpg', '',//    13.8 kB','',//    11/06/2025, 10:26:16
    'A Montanha dos Canibais - 1978.jpg', '',//    17.5 kB','',//    11/06/2025, 10:26:16
    'A Morte do Demonio.jpg', '',//    11.7 kB','',//    11/06/2025, 10:26:16
    'A Morte é a Única Saída - 2017.jpg', '',//    14.9 kB','',//    11/06/2025, 10:26:16
    'A Morte Pede Carona.jpg', 'https://archive.org/download/a-morte-pede-carona/A%20Morte%20Pede%20Carona.mp4',//    11.7 kB','',//    11/06/2025, 10:26:16
    'A Morte te dá Parabéns 1 - 2018.jpg', '',//    14.8 kB','',//    11/06/2025, 10:26:16
    'A Morte Te Dá Parabéns 2.jpg', '',//    9.7 kB','',//    11/06/2025, 10:26:16
    'A Mosca 1958.jpg', 'https://archive.org/download/a-mosca-1958/A%20Mosca%201958.mkv',//    6.6 kB','',//    11/06/2025, 10:26:16
    'A Mosca - Remake - 1986.jpg', 'https://archive.org/download/a-mosca-remake-1986/A%20Mosca%20-%20Remake%20-%201986.mkv',//    6.6 kB','',//    11/06/2025, 10:26:16
    'A Mosca 2 - 1989.jpg', 'https://archive.org/download/a-mosca-2-1989/A%20Mosca%202%20-%201989.mkv',//    6.6 kB','',//    11/06/2025, 10:26:16
    'A Mulher de Preto 1.jpg', '',//    12.3 kB','',//    11/06/2025, 10:26:16
    'A Mulher de Preto 2.jpg', '',//    12.3 kB','',//    11/06/2025, 10:26:16
    'A Mumia - 1932.jpg', '',//    20.2 kB','',//    11/06/2025, 10:26:16
    'A Múmia - 1959.jpg', '',//    16.6 kB','',//    11/06/2025, 10:26:16
    'A Múmia - 2017.jpg', '',//    11.5 kB','',//    11/06/2025, 10:26:16
    'A Noite dos Mortos Vivos - 1990.jpg', '',//    14.4 kB','',//    11/06/2025, 10:26:16
    'A Noite dos Mortos Vivos - Re-Animação - 2012.jpg', '',//    16.5 kB','',//    11/06/2025, 10:26:16
    'A Noite dos Mortos Vivos 3D - 2006.jpg', '',//    16.8 kB','',//    11/06/2025, 10:26:16
    'A Noiva de Frankenstein - 1935.jpg', '',//    20.3 kB','',//    11/06/2025, 10:26:16
    'A Noiva do Re-Animator - 1989.jpg', '',//    14.9 kB','',//    11/06/2025, 10:26:16
    'A Orfa.jpg', '',//    8.9 kB','',//    11/06/2025, 10:26:16
    'A Orfa 2.jpg', '',//    11.5 kB','',//    11/06/2025, 10:26:16
    'A Piramide.jpg', '',//    14.0 kB','',//    11/06/2025, 10:26:16
    'A Praga - 2006.jpg', '',//    13.7 kB','',//    11/06/2025, 10:26:16
    'A Praga da Múmia - 1944.jpg', '',//    19.0 kB','',//    11/06/2025, 10:26:16
    'A Profecia - 1976.jpg', '',//    9.7 kB','',//    11/06/2025, 10:26:16
    'A Profecia 2 - 1978.jpg', '',//    9.7 kB','',//    11/06/2025, 10:26:16
    'A Profecia 3 - 1981.jpg', '',//    16.1 kB','',//    11/06/2025, 10:26:16
    'A Profecia 4 - 1991.jpg', '',//    9.0 kB','',//    11/06/2025, 10:26:16
    'A Profecia 5 - 2006.jpg', '',//    12.7 kB','',//    11/06/2025, 10:26:16
    'Á Prova de Morte - 2007.jpg', '',//    15.4 kB','',//    11/06/2025, 10:26:22
    'A Queda 2022.jpg', '',//    8.8 kB','',//    11/06/2025, 10:26:16
    'A Substancia.jpg', '',//    800 kB','',//    11/06/2025, 23:22:24
    'A Tribo - 2008.jpg', '',//    13.1 kB','',//    11/06/2025, 10:26:16
    'A Tribo 2 - 2009.jpg', '',//    17.4 kB','',//    11/06/2025, 10:26:16
    'A Última Casa à Esquerda - Remake - 2009.jpg', '',//    10.5 kB','',//    11/06/2025, 10:26:16
    'A Vingança de Jennifer.jpg', '',//    12.9 kB','',//    11/06/2025, 10:26:16
    'A Viúva das Sombras - 2021.jpg', '',//    14.1 kB','',//    11/06/2025, 10:26:16
    'A Volta dos Mortos Vivos 1.jpg', 'https://archive.org/download/a-volta-dos-mortos-vivos-1_202509/A%20Volta%20dos%20Mortos%20Vivos%201.mkv',//    15.5 kB','',//    11/06/2025, 10:26:16
    'A Volta dos Mortos Vivos 2.jpg', 'https://archive.org/download/a-volta-dos-mortos-vivos-2/A%20Volta%20dos%20Mortos%20Vivos%202.mkv',//    13.2 kB','',//    11/06/2025, 10:26:16
    'A Volta dos Mortos Vivos 3.jpg', 'https://archive.org/download/a-volta-dos-mortos-vivos-3/A%20Volta%20dos%20Mortos%20Vivos%203.mkv',//    14.7 kB','',//    11/06/2025, 10:26:16
    'A Volta dos Mortos Vivos 4.jpg', 'https://archive.org/download/a-volta-dos-mortos-vivos-4-necropolis/A%20Volta%20dos%20Mortos%20Vivos%204%20-%20Necropolis.mkv',//    16.1 kB','',//    11/06/2025, 10:26:16
    'Abismo do Medo 1.jpg', '',//    15.7 kB','',//    11/06/2025, 10:26:16
    'Abismo do Medo 2.jpg', '',//    12.2 kB','',//    11/06/2025, 10:26:16
    'Advogado do Diabo.jpg', '',//    14.5 kB','',//    11/06/2025, 10:26:16
    'Além da Escuridao - 2012.jpg', '',//    11.8 kB','',//    11/06/2025, 10:26:16
    'Além do Lago Ness - 2008.jpg', '',//    18.0 kB','',//    11/06/2025, 10:26:16
    'Alta Tensao.jpg', '',//    13.0 kB','',//    11/06/2025, 10:26:16
    'American Guinea Pig 2 - Bloodshock.jpg', '',//    17.8 kB','',//    11/06/2025, 10:26:16
    'American Guinea Pig Bouquet of Guts and Gore.jpg', '',//    14.8 kB','',//    11/06/2025, 10:26:16
    'American Guinea Pig Sacrifice.jpg', '',//    9.1 kB','',//    11/06/2025, 10:26:16
    'American Guinea Pig Song of Solomon.jpg', '',//    14.9 kB','',//    11/06/2025, 10:26:16
    'Anaconda 1.jpg', '',//    7.6 kB','',//    11/06/2025, 10:26:16
    'Anaconda 2 - 2004.jpg', '',//    12.9 kB','',//    11/06/2025, 10:26:16
    'Anaconda 3 - 2008.jpg', '',//    19.2 kB','',//    11/06/2025, 10:26:16
    'Anaconda 4 - 2009.jpg', '',//    14.4 kB','',//    11/06/2025, 10:26:16
    'Animal - 2014.jpg', '',//    16.3 kB','',//    11/06/2025, 10:26:16
    'Anjo Maldito - 2009.jpg', '',//    13.4 kB','',//    11/06/2025, 10:26:16
    'Anjos da Morte - 2006.jpg', '',//    11.3 kB','',//    11/06/2025, 10:26:16
    'Anjos Rebeldes 1.jpg', '',//    11.5 kB','',//    11/06/2025, 10:26:16
    'Anjos Rebeldes 2.jpg', '',//    12.9 kB','',//    11/06/2025, 10:26:16
    'Anjos Rebeldes 3.jpg', '',//    11.5 kB','',//    11/06/2025, 10:26:16
    'Anjos Rebeldes 4.jpg', '',//    11.4 kB','',//    11/06/2025, 10:26:16
    'Anjos Rebeldes 5.jpg', '',//    11.4 kB','',//    11/06/2025, 10:26:16
    'Annabelle 1 - 2014.jpg', '',//    6.6 kB','',//    11/06/2025, 10:26:16
    'Annabelle 2 - A Criação do Mal.jpg', '',//    13.0 kB','',//    11/06/2025, 10:26:16
    'Annabelle 3 - De Volta Para Casa - 2019.jpg', '',//    11.7 kB','',//    11/06/2025, 10:26:16
    'Aprisionados - 2015.jpg', '',//    9.7 kB','',//    11/06/2025, 10:26:16
    'Aracnofobia - 1990.jpg', '',//    9.1 kB','',//    11/06/2025, 10:26:16
    'Arraste-me para o Inferno.jpg', 'https://archive.org/download/arraste-me-para-o-inferno/Arraste-me%20para%20o%20Inferno.mkv',//    17.1 kB','',//    11/06/2025, 10:26:16
    'As Ruínas - 2008.jpg', '',//    11.9 kB','',//    11/06/2025, 10:26:16
    'As Senhoras de Salem - 2012.jpg', '',//    14.2 kB','',//    11/06/2025, 10:26:16
    'As Strippers Zumbis - 2007.jpg', '',//    17.9 kB','',//    11/06/2025, 10:26:16
    'Asilo do Medo - 2019.jpg', '',//    14.5 kB','',//    11/06/2025, 10:26:16
    'Assim na Terra Como no Inferno.jpg', '',//    12.2 kB','',//    11/06/2025, 10:26:16
    'Atividade Paranormal 1.jpg', '',//    8.8 kB','',//    11/06/2025, 10:26:16
    'Atividade Paranormal 2.jpg', '',//    10.8 kB','',//    11/06/2025, 10:26:16
    'Atividade Paranormal 3.jpg', '',//    8.5 kB','',//    11/06/2025, 10:26:16
    'Atividade Paranormal 4.jpg', '',//    9.8 kB','',//    11/06/2025, 10:26:16
    'Atividade Paranormal 5 Marcados pelo Mal 2014.jpg', '',//    10.5 kB','',//    11/06/2025, 10:26:16
    'Atividade Paranormal 6 Dimensao Fantasma.jpg', '',//    12.6 kB','',//    11/06/2025, 10:26:16
    'Atividade Paranormal 7 Ente Próximo.jpg', '',//    14.5 kB','',//    11/06/2025, 10:26:16
    'Atividade Paranormal em Toquio.jpg', '',//    14.7 kB','',//    11/06/2025, 10:26:16
    'Através da Sombra - 2015.jpg', '',//    13.1 kB','',//    11/06/2025, 10:26:16
    'Aviso de Tempestade - 2007.jpg', '',//    18.6 kB','',//    11/06/2025, 10:26:16
    'BACK.jpg', '',//    7.8 kB','',//    11/06/2025, 10:26:16
    'Baghead - A Bruxa dos Mortos.jpg', '',//    9.4 kB','',//    11/06/2025, 10:26:16
    'Balada Para Satã - 1971.jpg', '',//    15.9 kB','',//    11/06/2025, 10:26:16
    'Banquete no Inferno 1 - 2005.jpg', '',//    16.8 kB','',//    11/06/2025, 10:26:16
    'Banquete no Inferno 2 - 2008.jpg', '',//    21.1 kB','',//    11/06/2025, 10:26:16
    'Banquete no Inferno 3 - 2009.jpg', '',//    16.4 kB','',//    11/06/2025, 10:26:16
    'Barbarian.jpg', '',//    6.0 kB','',//    11/06/2025, 10:26:16
    'Barbarian.png', '',//    69.8 kB','',//    01/11/2022, 07:58:12
    'Benção Mortal - 1981.jpg', '',//    16.9 kB','',//    11/06/2025, 10:26:16
    'Black Water - 2007.jpg', '',//    12.5 kB','',//    11/06/2025, 10:26:16
    'Boa Noite Mamae 2014.jpg', '',//    11.0 kB','',//    11/06/2025, 10:26:16
    'Boa Noite Mamae 2022.jpg', '',//    8.7 kB','',//    11/06/2025, 10:26:16
    'Bonecos da Morte (1989).jpg', '',//    11.8 kB','',//    11/06/2025, 10:26:16
    'Bonecos em Guerra - O Capítulo Final (1994).jpg', '',//    108 kB','',//    11/06/2025, 10:39:02
    'Bones - Anjo das Trevas - 2001.jpg', '',//    7.4 kB','',//    11/06/2025, 10:26:16
    'Brinquedos Diabólicos - 1992.jpg', '',//    11.3 kB','',//    11/06/2025, 10:26:16
    'Bring Her Back.jpg', 'https://archive.org/download/bring-her-back/Bring%20Her%20Back.mp4',//    11.3 kB','',//    11/06/2025, 10:26:16
    'Bruxa de Blair 1.jpg', '',//    9.2 kB','',//    11/06/2025, 10:26:16
    'Bruxa de Blair 2.jpg', '',//    16.5 kB','',//    11/06/2025, 10:26:16
    'Bruxas - 2009.jpg', '',//    15.1 kB','',//    11/06/2025, 10:26:16
    'Cadaveres - 2006.jpg', '',//    8.2 kB','',//    11/06/2025, 10:26:16
    'Cadaveres 2 - 2008.jpg', '',//    12.0 kB','',//    11/06/2025, 10:26:16
    'Cadillac Preto - 2003.jpg', '',//    10.1 kB','',//    11/06/2025, 10:26:16
    'Cães Assassinos - 2006.jpg', '',//    8.6 kB','',//    11/06/2025, 10:26:18
    'Canibais - A Tribo.jpg', '',//    11.6 kB','',//    11/06/2025, 10:26:16
    'Carrie - A Estranha 1976.jpg', 'https://archive.org/download/carrie-a-estranha-1976_202509/Carrie%20-%20A%20Estranha%201976.mp4',//    15.0 kB','',//    11/06/2025, 10:26:16
    'Carrie, a Estranha - 2002.jpg', '',//    188 kB','',//    23/06/2025, 12:40:24
    'Cemiterio Maldito 1.jpg', '',//    15.6 kB','',//    11/06/2025, 10:26:16
    'Cemiterio Maldito 2.jpg', '',//    11.3 kB','',//    11/06/2025, 10:26:16
    'Cemitério Maldito Remaster.jpg', '',//    10.7 kB','',//    11/06/2025, 10:26:16
    'Cemitério Maldito Remaster.jpg', '',//    12.1 kB','',//    11/06/2025, 10:26:16
    'Cemiterio Maldito - A Origem.jpg', '',//    8.4 kB','',//    11/06/2025, 10:26:16
    'Cemiterio Maldito - A Origem.png', '',//    181 kB','',//    20/10/2023, 11:05:40
    'Centopeia Humana 1.jpg', 'https://archive.org/download/centopeia-humana-1/Centopeia%20Humana%201.mp4',//    13.7 kB','',//    11/06/2025, 10:26:16
    'Centopeia Humana 2.jpg', 'https://archive.org/download/centopeia-humana-2/Centopeia Humana 2.ia.mp4',//    12.0 kB','',//    11/06/2025, 10:26:16
    'Centopeia Humana 3.jpg', 'https://archive.org/download/centopeia-humana-3/Centopeia%20Humana%203.mp4',//    11.4 kB','',//    11/06/2025, 10:26:16
    'Cerdita.jpg', '',//    11.4 kB','',//    11/06/2025, 10:26:16
    'Chamado vs O Grito - 2018.jpg', '',//    12.7 kB','',//    11/06/2025, 10:26:16
    'Chernobyl - Sinta a Radiação - 2012.jpg', '',//    15.8 kB','',//    11/06/2025, 10:26:16
    'Christine O Carro Assassino.jpg', '',//    10.4 kB','',//    11/06/2025, 10:26:16
    'Chucky Brinquedo Assassino 1 - 1988.jpg', '',//    13.7 kB','',//    11/06/2025, 10:26:16
    'Chucky Brinquedo Assassino 2 - 1990.jpg', '',//    12.0 kB','',//    11/06/2025, 10:26:16
    'Chucky Brinquedo Assassino 3 - 1991.jpg', '',//    10.4 kB','',//    11/06/2025, 10:26:16
    'Chucky Brinquedo Assassino 4 - A Noiva de Chucky.jpg', '',//    15.5 kB','',//    11/06/2025, 10:26:16
    'Chucky Brinquedo Assassino 5 - O Filho de Chucky.jpg', '',//    12.7 kB','',//    11/06/2025, 10:26:16
    'Chucky Brinquedo Assassino 6 - A Maldição de Chucky.jpg', '',//    15.7 kB','',//    11/06/2025, 10:26:16
    'Chucky Brinquedo Assassino 6 - A Maldição de Chucky.png', '',//    122 kB','',//    06/11/2022, 11:31:02
    'Chucky Brinquedo Assassino 7 - O Culto de Chucky.jpg', '',//    14.8 kB','',//    11/06/2025, 10:26:16
    'Chucky Brinquedo Assassino 8 - 2019.jpg', '',//    11.7 kB','',//    11/06/2025, 10:26:16
    'Colecionador de Ossos.jpg', '',//    11.4 kB','',//    11/06/2025, 10:26:16
    'Colheita Maldita 1 - 1984.jpg', '',//    7.8 kB','',//    11/06/2025, 10:26:16
    'Colheita Maldita 2 O Sacrifício Final - 1992.jpg', '',//    14.7 kB','',//    11/06/2025, 10:26:16
    'Colheita Maldita 3 - Colheita Urbana - 1995.jpg', '',//    8.7 kB','',//    11/06/2025, 10:26:16
    'Colheita Maldita 4 - O Encontro- 1996.jpg', '',//    14.8 kB','',//    11/06/2025, 10:26:16
    'Colheita Maldita 5 - Campos do Terror - 1998.jpg', '',//    11.9 kB','',//    11/06/2025, 10:26:16
    'Colheita Maldita 6 - 666 - Isaac Está de Volta - 1999.jpg', '',//    13.5 kB','',//    11/06/2025, 10:26:16
    'Colheita Maldita 7 Revelacao - 2001.jpg', '',//    9.7 kB','',//    11/06/2025, 10:26:16
    'Colheita Maldita 8 - Genesis - 2011.jpg', '',//    10.3 kB','',//    11/06/2025, 10:26:18
    'Colheita Maldita 2009.jpg', '',//    11.6 kB','',//    11/06/2025, 10:26:16
    'Colheita Sombria 2023.jfif', '',//    17.5 kB','',//    11/06/2025, 10:11:00
    'Colheita Sombria 2023.jpg', '',//    8.8 kB','',//    11/06/2025, 10:26:18
    'Colinas De Sangue - 2009.jpg', '',//    14.8 kB','',//    11/06/2025, 10:26:18
    'Colisão Mortal - 2016.jpg', '',//    14.3 kB','',//    11/06/2025, 10:26:18
    'Comemoração Sangrenta - 2016.jpg', '',//    6.5 kB','',//    11/06/2025, 10:26:18
    'Conde Dracula.jpg', '',//    17.6 kB','',//    11/06/2025, 10:26:18
    'Continue Assistindo - 2017.jpg', '',//    13.3 kB','',//    11/06/2025, 10:26:18
    'Contos do Além - 1972.jpg', '',//    17.4 kB','',//    11/06/2025, 10:26:18
    'Corra - 2017.jpg', '',//    11.7 kB','',//    11/06/2025, 10:26:18
    'Corrente do Mal - 2015.jpg', '',//    8.8 kB','',//    11/06/2025, 10:26:18
    'Cubo 1 - 1997.jpg', '',//    14.5 kB','',//    11/06/2025, 10:26:18
    'Cubo 2 - Hipercubo - 2002.jpg', '',//    15.6 kB','',//    11/06/2025, 10:26:18
    'Cubo Zero - 2004.jpg', '',//    10.3 kB','',//    11/06/2025, 10:26:18
    'Cujo - 1983.jpg', '',//    14.1 kB','',//    11/06/2025, 10:26:18
    'Cut - Cenas de Horror - 2000.jpg', '',//    10.5 kB','',//    11/06/2025, 10:26:18
    'De Volta à Casa da Colina - 2007.jpg', '',//    11.9 kB','',//    11/06/2025, 10:26:18
    'Deixe-me Entrar.jpg', '',//    11.4 kB','',//    11/06/2025, 10:26:18
    'Despertar dos Mortos - 2011.jpg', '',//    16.9 kB','',//    11/06/2025, 10:26:18
    'Devorador de Almas - 2006.jpg', '',//    15.8 kB','',//    11/06/2025, 10:26:18
    'Dezesseis Facadas.jpg', 'https://archive.org/download/dezesseis-facadas/Dezesseis%20Facadas.mp4',//    206 kB','',//    11/06/2025, 23:08:36
    'Dia dos Mortos - 1985.jpg', '',//    14.5 kB','',//    11/06/2025, 10:26:18
    'Dia dos Mortos.jpg', '',//    14.3 kB','',//    11/06/2025, 10:26:18
    'Diário do Mortos - 2007.jpg', '',//    16.5 kB','',//    11/06/2025, 10:26:18
    'Distúrbio - 2018.jpg', '',//    11.3 kB','',//    11/06/2025, 10:26:18
    'Distúrbio - 2018.png', '',//    118 kB','',//    06/11/2022, 15:28:20
    'Doce Vingança 1.jpg', '',//    11.5 kB','',//    11/06/2025, 10:26:18
    'Doce Vingança 2.jpg', '',//    17.5 kB','',//    11/06/2025, 10:26:18
    'Doce Vingança 3.jpg', '',//    13.6 kB','',//    11/06/2025, 10:26:18
    'Doce Vingança 4.jpg', '',//    12.9 kB','',//    11/06/2025, 10:26:18
    'Domínio- Prequela do Exorcista - 2005.jpg', '',//    8.9 kB','',//    11/06/2025, 10:26:18
    'Doutor Sono.jpg', '',//    11.8 kB','',//    11/06/2025, 10:26:18
    'Dracula 1931.jpg', '',//    20.1 kB','',//    11/06/2025, 10:26:18
    'Drácula de Bram Stoker - 1992.jpg', '',//    13.3 kB','',//    11/06/2025, 10:26:18
    'Dragão Vermelho - 2002.jpg', '',//    11.0 kB','',//    11/06/2025, 10:26:18
    'Drive-Thru - Fast Food Da Morte - 2007.jpg', '',//    11.4 kB','',//    11/06/2025, 10:26:18
    'Elvira - A Rainha das Trevas - 1988.jpg', '',//    10.1 kB','',//    11/06/2025, 10:26:18
    'Elvira - As Loucas Aventuras de Elvira - 2001.jpg', '',//    13.8 kB','',//    11/06/2025, 10:26:18
    'Enigmas de um Crime 2010.jpg', '',//    12.7 kB','',//    11/06/2025, 10:26:18
    'Enjaulada 2016.jpg', '',//    13.9 kB','',//    11/06/2025, 10:26:18
    'Enterrado Vivo.jpg', '',//    9.3 kB','',//    11/06/2025, 10:26:18
    'Enterrado Vivo.png', '',//    101 kB','',//    03/12/2022, 07:37:08
    'Entrevista com Vampiros - 1994.jpg', '',//    11.9 kB','',//    11/06/2025, 10:26:18
    'Escada de Jaco.jpg', '',//    12.1 kB','',//    11/06/2025, 10:26:18
    'Escuridão - 2005.jpg', '',//    8.9 kB','',//    11/06/2025, 10:26:18
    'Espelho do Medo 1 - 2008.jpg', '',//    11.8 kB','',//    11/06/2025, 10:26:18
    'Espelho do Medo 2 - 2010.jpg', '',//    18.4 kB','',//    11/06/2025, 10:26:18
    'Espinhos - 2008.jpg', '',//    12.8 kB','',//    11/06/2025, 10:26:18
    'Espíritos 1 - A Morte Está ao Seu Lado - 2004.jpg', '',//    17.2 kB','',//    11/06/2025, 10:26:18
    'Espíritos 2 - Você Nunca Está Sozinho - 2006.jpg', '',//    13.1 kB','',//    11/06/2025, 10:26:18
    'Espíritos 2 - Você Nunca Está Sozinho - 2006.jpg', '',//    12.4 kB','',//    11/06/2025, 10:26:18
    'Esquizofrenia - 1980.jpg', '',//    9.6 kB','',//    11/06/2025, 10:26:18
    'Estrada Maldita - 2007.jpg', '',//    15.8 kB','',//    11/06/2025, 10:26:18
    'Eu Ainda Sei O Que Vocês Fizeram No Verão Passado - 1998.jpg', '',//    13.4 kB','',//    11/06/2025, 10:26:18
    'Eu Sei O Que Vocês Fizeram No Verão Passado - 1997.jpg', '',//    12.0 kB','',//    11/06/2025, 10:26:18
    'Eu Sempre Vou Saber o Que Vocês Fizeram no Verão Passado - 2006.jpg', '',//    16.3 kB','',//    11/06/2025, 10:26:18
    'Eu vi o brilho da TV.jpg', '',//    84.3 kB','',//    11/06/2025, 23:09:42
    'Evocando Espíritos 1 - 2009.jpg', '',//    10.8 kB','',//    11/06/2025, 10:26:18
    'Experimentos Macabros 2022.jpg', '',//    9.1 kB','',//    11/06/2025, 10:26:18
    'Faces do Medo - 2013.jpg', '',//    16.2 kB','',//    11/06/2025, 10:26:18
    'Fale Comigo 2023.jpg', '',//    5.1 kB','',//    11/06/2025, 10:26:18
    'Familia Addams.jpg', '',//    17.1 kB','',//    11/06/2025, 10:26:18
    'Fantasma 1 - 1979.jpg', '',//    13.3 kB','',//    11/06/2025, 10:26:18
    'Fantasma 2 - 1988.jpg', '',//    15.9 kB','',//    11/06/2025, 10:26:18
    'Fantasma 3 - 1994.jpg', '',//    17.2 kB','',//    11/06/2025, 10:26:18
    'Fantasma 4 - 1998.jpg', '',//    19.2 kB','',//    11/06/2025, 10:26:18
    'Filha da Luz.jpg', '',//    9.4 kB','',//    11/06/2025, 10:26:18
    'Fome Animal - 1992.jpg', '',//    14.6 kB','',//    11/06/2025, 10:26:18
    'Frankenstein Encontra o Lobisomem - 1943.jpg', '',//    18.2 kB','',//    11/06/2025, 10:26:18
    'Freddy vs Jason.jpg', '',//    13.5 kB','',//    11/06/2025, 10:26:18
    'Fuga Sobre Trilhos - 2008.jpg', '',//    9.5 kB','',//    11/06/2025, 10:26:18
    'Girl - 2020.jpg', '',//    9.3 kB','',//    11/06/2025, 10:26:18
    'Girl - 2020.png', '',//    85.9 kB','',//    06/11/2022, 15:47:00
    'Gritos do Além 2011.jpg', '',//    9.0 kB','',//    11/06/2025, 10:26:18
    'Gritos Mortais.jpg', '',//    11.3 kB','',//    11/06/2025, 10:26:18
    'Grotesco 2009.jpg', '',//    17.1 kB','',//    11/06/2025, 10:26:18
    'Halloween a1 A Noite do Terror.jpg', '',//    10.3 kB','',//    11/06/2025, 10:26:18
    'Halloween b2 O Pesadelo Continua.jpg', '',//    12.3 kB','',//    11/06/2025, 10:26:18
    'Halloween c3 A Noite das Bruxas.jpg', '',//    12.6 kB','',//    11/06/2025, 10:26:18
    'Halloween d4 O Retorno de Michael Myers.jpg', '',//    12.3 kB','',//    11/06/2025, 10:26:18
    'Halloween e5 A Vingança de Michael Myers.jpg', '',//    11.8 kB','',//    11/06/2025, 10:26:18
    'Halloween f6 A Última Vingança.jpg', '',//    9.5 kB','',//    11/06/2025, 10:26:18
    'Halloween g7 H20.jpg', '',//    12.3 kB','',//    11/06/2025, 10:26:18
    'Halloween h8 - Ressurreição.jpg', '',//    9.9 kB','',//    11/06/2025, 10:26:18
    'Halloween i9 - O Inicio.jpg', '',//    16.0 kB','',//    11/06/2025, 10:26:18
    'Halloween j10 2.jpg', '',//    12.9 kB','',//    11/06/2025, 10:26:18
    'Halloween k11 2018.jpg', '',//    10.2 kB','',//    11/06/2025, 10:26:18
    'Halloween l12 Kills.jpg', '',//    14.4 kB','',//    11/06/2025, 10:26:18
    'Halloween m13 Ends.jpg', '',//    7.5 kB','',//    11/06/2025, 10:26:18
    'Halloween m14 Ends 2022.jpg', '',//    9.2 kB','',//    11/06/2025, 10:26:18
    'Hannibal - 2001.jpg', '',//    11.0 kB','',//    11/06/2025, 10:26:18
    'Hannibal - A Origem do Mal - 2007.jpg', '',//    8.8 kB','',//    11/06/2025, 10:26:18
    'Hellraiser 1 Renascido do Inferno.jpg', '',//    17.1 kB','',//    11/06/2025, 10:26:18
    'Hellraiser 10 - 2022.jpg', '',//    10.3 kB','',//    11/06/2025, 10:26:18
    'Hellraiser 10 2022.jpg', '',//    10.3 kB','',//    11/06/2025, 10:26:18
    'Hellraiser 2 Renascido das Trevas.jpg', '',//    11.1 kB','',//    11/06/2025, 10:26:18
    'Hellraiser 3 Inferno na Terra.jpg', '',//    15.8 kB','',//    11/06/2025, 10:26:18
    'Hellraiser 4 Herança Maldita.jpg', '',//    18.1 kB','',//    11/06/2025, 10:26:18
    'Hellraiser 5 Inferno.jpg', '',//    13.6 kB','',//    11/06/2025, 10:26:18
    'Hellraiser 6 Cacador do Inferno.jpg', '',//    8.7 kB','',//    11/06/2025, 10:26:18
    'Hellraiser 7 O Retorno dos Mortos.jpg', '',//    15.3 kB','',//    11/06/2025, 10:26:18
    'Hellraiser 8 O Mundo do Inferno.jpg', '',//    19.1 kB','',//    11/06/2025, 10:26:18
    'Hellraiser 9 Revelacoes.jpg', '',//    16.2 kB','',//    11/06/2025, 10:26:18
    'Hellraiser O Julgamento.jpg', '',//    12.0 kB','',//    11/06/2025, 10:26:18
    'Hellraiser - 2022.jpg', '',//    11.4 kB','',//    11/06/2025, 10:26:18
    'Hereditário - 2018.jpg', '',//    10.6 kB','',//    11/06/2025, 10:26:18
    'Herege.jpg', '',//    27.5 kB','',//    11/06/2025, 23:10:28
    'Histeria - 2000.jpg', '',//    12.3 kB','',//    11/06/2025, 10:26:18
    'Holocausto Canibal.jpg', '',//    19.4 kB','',//    11/06/2025, 10:26:18
    'Horas de Medo -2010.jpg', '',//    13.4 kB','',//    11/06/2025, 10:26:18
    'Hush - A Morte Ouve - 2016.jpg', '',//    7.3 kB','',//    11/06/2025, 10:26:18
    'Ilha dos Mortos - 2009.jpg', '',//    16.1 kB','',//    11/06/2025, 10:26:18
    'Imagens do Além - 2008.jpg', '',//    11.0 kB','',//    11/06/2025, 10:26:18
    'Instinto Assassino - 1991.jpg', '',//    17.9 kB','',//    11/06/2025, 10:26:18
    'Invasão Zumbi 1 - 2016.jpg', '',//    17.2 kB','',//    11/06/2025, 10:26:18
    'Invasão Zumbi 2 - Peninsula - 2020.jpg', '',//    11.8 kB','',//    11/06/2025, 10:26:18
    'Invasores - 2007.jpg', '',//    13.8 kB','',//    11/06/2025, 10:26:18
    'Invasores de Corpos - 1993.jpg', '',//    14.2 kB','',//    11/06/2025, 10:26:18
    'Invocação do Mal 1 - 2013.jpg', '',//    13.6 kB','',//    11/06/2025, 10:26:18
    'Invocação do Mal 2 - 2016.jpg', '',//    9.0 kB','',//    11/06/2025, 10:26:18
    'Invocação do Mal 3 - A Ordem do Demônio - 2021.jpg', '',//    8.4 kB','',//    11/06/2025, 10:26:18
    'Irmãs Diabólicas - 1972.jpg', '',//    12.9 kB','',//    11/06/2025, 10:26:18
    'Irreversivel.jpg', '',//    10.4 kB','',//    11/06/2025, 10:26:18
    'Irreversivel.png', '',//    243 kB','',//    25/11/2022, 19:24:24
    'It 1 - 2017.jpg', '',//    6.9 kB','',//    11/06/2025, 10:26:18
    'It 2 - 2019.jpg', '',//    7.0 kB','',//    11/06/2025, 10:26:18
    'It- Uma obra prima do medo.jpg', '',//    11.8 kB','',//    11/06/2025, 10:26:18
    'Jack Frost 1 - 1997.jpg', '',//    14.1 kB','',//    11/06/2025, 10:26:18
    'Jason X - 2001.jpg', '',//    17.0 kB','',//    11/06/2025, 10:26:18
    'Jogo Macabro.jpg', '',//    15.4 kB','',//    11/06/2025, 10:26:18
    'Jogos Mortais 1.jpg', 'https://archive.org/download/jogos-mortais-1_202507/Jogos Mortais 1.mp4',//    10.9 kB','',//    11/06/2025, 10:26:18
    'Jogos Mortais 2.jpg', '',//    11.6 kB','',//    11/06/2025, 10:26:18
    'Jogos Mortais 3.jpg', '',//    13.8 kB','',//    11/06/2025, 10:26:18
    'Jogos Mortais 4.jpg', '',//    12.1 kB','',//    11/06/2025, 10:26:18
    'Jogos Mortais 5.jpg', '',//    10.3 kB','',//    11/06/2025, 10:26:18
    'Jogos Mortais 6.jpg', '',//    13.2 kB','',//    11/06/2025, 10:26:18
    'Jogos Mortais 7.jpg', '',//    17.5 kB','',//    11/06/2025, 10:26:18
    'Jogos Mortais 8.jpg', '',//    14.5 kB','',//    11/06/2025, 10:26:18
    'Jogos Mortais 9 - Espiral - O Legado de Jogos Mortais.jpg', '',//    10.4 kB','',//    11/06/2025, 10:26:18
    'Jogos Mortais 10.jpg', '',//    6.8 kB','',//    11/06/2025, 10:26:18
    'Laranja Mecanica.jpg', '',//    9.0 kB','',//    11/06/2025, 10:26:18
    'Leatherface Massacre no Texas.jpg', '',//    13.7 kB','',//    11/06/2025, 10:26:18
    'Lenda Urbana 1 - 1998.jpg', '',//    15.6 kB','',//    11/06/2025, 10:26:18
    'Lenda Urbana 2 - 2000.jpg', '',//    15.7 kB','',//    11/06/2025, 10:26:18
    'Lenda Urbana 3 - 2005.jpg', '',//    13.6 kB','',//    11/06/2025, 10:26:18
    'Lendas do Além-Túmulo - 1995.jpg', '',//    15.7 kB','',//    11/06/2025, 10:26:18
    'Lendas do Além-Túmulo - 1996.jpg', '',//    15.7 kB','',//    11/06/2025, 10:26:18
    'Lendas do Além-Túmulo - 2000.jpg', '',//    15.7 kB','',//    11/06/2025, 10:26:18
    'Livrai-nos do Mal.jpg', '',//    13.5 kB','',//    11/06/2025, 10:26:18
    'Lobisomem Americano em Londres - 1981.jpg', '',//    15.1 kB','',//    11/06/2025, 10:26:18
    'Lobisomem Americano em Paris - 1997.jpg', 'https://archive.org/download/lobisomem-americano-em-paris-1997/Lobisomem%20Americano%20em%20Paris%20-%201997.mkv',//    11.4 kB','',//    11/06/2025, 10:26:18
    'logo.jpg', '',//    9.8 kB','',//    11/06/2025, 10:26:18
    'logo.png', '',//    26.1 kB','',//    15/11/2022, 01:43:26
    'Longlegs.jpg', '',//    12.2 kB','',//    11/06/2025, 10:26:18
    'M3gan.jpg', '',//    57.3 kB','',//    11/06/2025, 10:39:02
    'Malditas Aranhas - 2002.jpg', '',//    17.4 kB','',//    11/06/2025, 10:26:18
    'Maligno - 2022.jpg', '',//    6.0 kB','',//    11/06/2025, 10:26:18
    'Maligno 2019.jpg', '',//    48.2 kB','',//    11/06/2025, 10:39:00
    'Mama - 2013.jpg', '',//    13.2 kB','',//    11/06/2025, 10:26:18
    'Martyrs - 2008.jpg', '',//    10.7 kB','',//    11/06/2025, 10:26:18
    'Martyrs - 2015.jpg', '',//    13.1 kB','',//    11/06/2025, 10:26:18
    'Martyrs Lane.jpg', '',//    7.2 kB','',//    11/06/2025, 10:26:18
    'Maya O Ritual do Fogo.jpg', '',//    79.9 kB','',//    11/06/2025, 10:39:00
    'Megan is Missing.jpg', '',//    10.9 kB','',//    11/06/2025, 10:26:18
    'Menina Ma Com 2005.jpg', '',//    10.1 kB','',//    11/06/2025, 10:26:18
    'Menina Ma Com 2005.png', '',//    493 kB','',//    02/08/2023, 10:45:00
    'Mestre dos Desejos 1.jpg', '',//    7.1 kB','',//    11/06/2025, 10:26:18
    'Mestre dos Desejos 2.jpg', '',//    10.9 kB','',//    11/06/2025, 10:26:18
    'Mestre dos Desejos 3.jpg', '',//    15.6 kB','',//    11/06/2025, 10:26:18
    'Mestre dos Desejos 4.jpg', '',//    15.5 kB','',//    11/06/2025, 10:26:18
    'Midsommar.jpg', '',//    10.1 kB','',//    11/06/2025, 10:26:18
    'Minotauro - 2006.jpg', '',//    18.6 kB','',//    11/06/2025, 10:26:18
    'Monstro do Armario.jpg', '',//    13.1 kB','',//    11/06/2025, 10:26:18
    'Morte Morte Morte.jpg', '',//    11.8 kB','',//    11/06/2025, 10:26:18
    'Morte Súbita - 2007.jpg', '',//    14.2 kB','',//    11/06/2025, 10:26:18
    'Mortuária - 2005.jpg', '',//    12.8 kB','',//    11/06/2025, 10:26:18
    'Mortuaria.jpg', '',//    10.6 kB','',//    11/06/2025, 10:26:18
    'Mother - 2017.jpg', '',//    10.2 kB','',//    11/06/2025, 10:26:18
    'Mutação 1 - 1997.jpg', '',//    11.1 kB','',//    11/06/2025, 10:26:18
    'Mutação 2 - 2001.jpg', '',//    11.3 kB','',//    11/06/2025, 10:26:18
    'Mutação 3 - O Sentinela - 2003.jpg', '',//    11.2 kB','',//    11/06/2025, 10:26:18
    'Mutilados - 2006.jpg', '',//    14.6 kB','',//    11/06/2025, 10:26:18
    'Não Adianta Fugir - 2009.jpg', '',//    13.7 kB','',//    11/06/2025, 10:26:20
    'Nao Desligue 2016.jpg', '',//    9.5 kB','',//    11/06/2025, 10:26:18
    'Não Olhe - 2019.jpg', '',//    13.8 kB','',//    11/06/2025, 10:26:20
    'Nasce um Monstro 1 - 1974.jpg', '',//    9.2 kB','',//    11/06/2025, 10:26:18
    'Nasce um Monstro 2 - 1978.jpg', '',//    8.9 kB','',//    11/06/2025, 10:26:18
    'Nasce um Monstro 3 - 1987.jpg', '',//    11.6 kB','',//    11/06/2025, 10:26:18
    'Navio Fantasma.jpg', '',//    10.7 kB','',//    11/06/2025, 10:26:18
    'Nefarious.jpg', '',//    13.8 kB','',//    11/06/2025, 10:26:18
    'Ninguem Sobrevive.jpg', '',//    15.1 kB','',//    11/06/2025, 10:36:18
    'Noite das Bruxas Macabra - 2014.jpg', '',//    8.2 kB','',//    11/06/2025, 10:26:20
    'Noite de Halloween - 2006.jpg', '',//    17.8 kB','',//    11/06/2025, 10:26:20
    'Noite do Terror 1 - 2006.jpg', '',//    13.3 kB','',//    11/06/2025, 10:26:20
    'Noite do Terror 2 - 2014.jpg', '',//    13.5 kB','',//    11/06/2025, 10:26:20
    'Nos - 2019.jpg', '',//    8.2 kB','',//    11/06/2025, 10:26:20
    'Nosferatu 1922.jpg', '',//    11.2 kB','',//    11/06/2025, 10:26:20
    'O Abominavel Dr. Phibes.jpg', '',//    15.1 kB','',//    11/06/2025, 10:26:20
    'O Albergue 1.jpg', '',//    17.7 kB','',//    11/06/2025, 10:26:20
    'O Albergue 2.jpg', '',//    13.7 kB','',//    11/06/2025, 10:26:20
    'O Albergue 3.jpg', '',//    16.6 kB','',//    11/06/2025, 10:26:20
    'o Apostolo.jpg', '',//    14.4 kB','',//    11/06/2025, 10:26:20
    'O Atalho - 2013.jpg', '',//    16.2 kB','',//    11/06/2025, 10:26:20
    'O Ataque dos Vermes Malditos 2.jpg', '',//    14.5 kB','',//    11/06/2025, 10:26:20
    'O Ataque dos Vermes Malditos 3.jpg', '',//    13.9 kB','',//    11/06/2025, 10:26:20
    'O Ataque dos Vermes Malditos 4 - O Começo da Lenda.jpg', '',//    18.8 kB','',//    11/06/2025, 10:26:20
    'O Ataque dos Vermes Malditos 5 Linhas de Sangue.jpg', '',//    17.5 kB','',//    11/06/2025, 10:26:20
    'O Ataque dos Vermes Malditos 6 Um Dia Frio no Inferno 2018.jpg', '',//    15.8 kB','',//    11/06/2025, 10:26:20
    'O Ataque dos Vermes Malditos 7- Ilha dos Shriekers 2020.jpg', '',//    16.3 kB','',//    11/06/2025, 10:26:20
    'O Bar Luva Dourada 2019.jpg', '',//    11.3 kB','',//    11/06/2025, 10:26:20
    'O Bebê de Rosemary 1968.jpg', '',//    9.0 kB','',//    11/06/2025, 10:26:20
    'O Bosque - 2008.jpg', '',//    8.2 kB','',//    11/06/2025, 10:26:20
    'O Bosque de Blair Witch.jpg', '',//    10.8 kB','',//    11/06/2025, 10:26:20
    'O Caçador De Cabeças - 1988.jpg', '',//    17.8 kB','',//    11/06/2025, 10:26:20
    'O Cão do Diabo - 1978.jpg', '',//    11.2 kB','',//    11/06/2025, 10:26:20
    'O Castelo Maldito - 1995.jpg', '',//    11.6 kB','',//    11/06/2025, 10:26:20
    'O Cativeiro - 2010.jpg', '',//    12.4 kB','',//    11/06/2025, 10:26:20
    'O Chale - 2019.jpg', '',//    6.6 kB','',//    11/06/2025, 10:26:20
    'O Chamado 1.jpg', '',//    6.6 kB','',//    11/06/2025, 10:26:20
    'O Chamado 2.jpg', '',//    7.3 kB','',//    11/06/2025, 10:26:20
    'O Chamado 3.jpg', '',//    11.4 kB','',//    11/06/2025, 10:26:20
    'O Chamado 4.jpg', '',//    15.5 kB','',//    11/06/2025, 10:26:20
    'O Chupa-Cabra - 2014.jpg', '',//    15.5 kB','',//    11/06/2025, 10:26:20
    'O Colecionador de Corpos.jpg', '',//    12.3 kB','',//    11/06/2025, 10:26:20
    'O Crematorio.jpg', '',//    12.4 kB','',//    11/06/2025, 10:26:20
    'O Culto - 2017.jpg', '',//    10.6 kB','',//    11/06/2025, 10:26:20
    'O Dentista 1.jpg', '',//    13.0 kB','',//    11/06/2025, 10:26:20
    'O Dentista 2.jpg', '',//    11.4 kB','',//    11/06/2025, 10:26:20
    'O Discipulo de Dracula.jpg', '',//    13.4 kB','',//    11/06/2025, 10:26:20
    'O Enigma do Outro Mundo.jpg', '',//    14.1 kB','',//    11/06/2025, 10:26:20
    'O Exorcismo de Emily Rose.jpg', '',//    6.3 kB','',//    11/06/2025, 10:26:20
    'O Exorcista - O Devoto 2023.jpg', '',//    14.8 kB','',//    11/06/2025, 10:26:20
    'O Exorcista 1.jpg', '',//    11.3 kB','',//    11/06/2025, 10:26:20
    'O Exorcista 2.jpg', '',//    13.8 kB','',//    11/06/2025, 10:26:20
    'O Exorcista 3.jpg', '',//    8.2 kB','',//    11/06/2025, 10:26:20
    'O Exorcista 4.jpg', '',//    9.0 kB','',//    11/06/2025, 10:26:20
    'O Exorcista do Papa.jpg', '',//    11.9 kB','',//    11/06/2025, 10:26:20
    'O Fantasma da Opera 1962.jpg', '',//    21.2 kB','',//    11/06/2025, 10:26:20
    'O Farol.jpg', '',//    11.0 kB','',//    11/06/2025, 10:26:20
    'O Filho de Frankenstein - 1939.jpg', '',//    20.7 kB','',//    11/06/2025, 10:26:20
    'O Grande Predador - 2007.jpg', '',//    20.9 kB','',//    11/06/2025, 10:26:20
    'O Grito 1 - 2004.jpg', '',//    10.1 kB','',//    11/06/2025, 10:26:20
    'O Grito 2 - 2006.jpg', '',//    11.9 kB','',//    11/06/2025, 10:26:20
    'O Grito 3 - 2009.jpg', '',//    14.3 kB','',//    11/06/2025, 10:26:20
    'O Grito 4 - 2020.jpg', '',//    11.4 kB','',//    11/06/2025, 10:26:20
    'O Homem Invisível - 2020.jpg', '',//    10.8 kB','',//    11/06/2025, 10:26:20
    'O Homem Sem Sombra 1 - 2000.jpg', '',//    16.1 kB','',//    11/06/2025, 10:26:20
    'O Homem Sem Sombra 2 - 2008.jpg', '',//    15.8 kB','',//    11/06/2025, 10:26:20
    'O Iluminado.jpg', '',//    12.9 kB','',//    11/06/2025, 10:26:20
    'O Internato - 2018.jpg', '',//    9.0 kB','',//    11/06/2025, 10:26:20
    'O Limite do Medo.jpg', '',//    11.8 kB','',//    11/06/2025, 10:26:20
    'O Lobisomem - 1941.jpg', 'https://archive.org/download/o-lobisomem-1941/O%20Lobisomem%20-%201941.mkv',//    17.9 kB','',//    11/06/2025, 10:26:20
    'O Lobisomem - 2010.jpg', 'https://archive.org/download/o-lobisomem-2010/O%20Lobisomem%20-%202010.mkv',//    16.6 kB','',//    11/06/2025, 10:26:20
    'O Massacre Da Serra Elétrica 1.jpg', 'https://archive.org/download/o-massacre-da-serra-eletrica-1/O Massacre Da Serra Elétrica 1.mp4',//    14.9 kB','',//    11/06/2025, 10:26:20
    'O Massacre Da Serra Elétrica 2.jpg', '',//    13.8 kB','',//    11/06/2025, 10:26:20
    'O Massacre Da Serra Elétrica 3 1990.jpg', '',//    13.5 kB','',//    11/06/2025, 10:26:20
    'O Massacre da Serra Eletrica 3D.jpg', '',//    14.2 kB','',//    11/06/2025, 10:26:20
    'O massacre da serra elétrica 4 O retorno.jpg', '',//    14.3 kB','',//    11/06/2025, 10:26:20
    'O Massacre Da Serra Elétrica Inicio.jpg', '',//    16.5 kB','',//    11/06/2025, 10:26:20
    'O Massacre Da Serra Elétrica 2003.jpg', '',//    13.7 kB','',//    11/06/2025, 10:26:20
    'O Massacre da Serra Elétrica 2022.jpg', '',//    10.7 kB','',//    11/06/2025, 10:26:20
    'O Menu 2022.jpg', '',//    12.1 kB','',//    11/06/2025, 10:26:20
    'O Mestre dos Brinquedos 2 A Volta do Mestre dos Brinquedos 1990.jpg', '',//    11.2 kB','',//    11/06/2025, 10:26:20
    'O Mestre dos Brinquedos 3 - A Vingança de Toulon (1991).jpg', '',//    99.9 kB','',//    11/06/2025, 10:39:00
    'O Mestre dos Brinquedos 4 - Bonecos em Guerra (1993).jpg', '',//    83.9 kB','',//    11/06/2025, 10:38:58
    'O Misterio da Passagem da Morte 2013.jpg', '',//    12.5 kB','',//    11/06/2025, 10:26:20
    'O Mistério das Duas Irmãs - 2009.jpg', '',//    12.4 kB','',//    11/06/2025, 10:26:20
    'O Monstro da Neve.jpg', '',//    16.0 kB','',//    11/06/2025, 10:26:20
    'O Monstro do Armario.jpg', '',//    13.2 kB','',//    11/06/2025, 10:26:20
    'O Monstro do Artico - 1951.jpg', '',//    15.9 kB','',//    11/06/2025, 10:26:20
    'O Nevoeiro - 2007.jpg', '',//    13.0 kB','',//    11/06/2025, 10:26:20
    'O Olho do Mal - 2008.jpg', '',//    12.3 kB','',//    11/06/2025, 10:26:20
    'O Outro Lado do Lago.jpg', '',//    10.6 kB','',//    11/06/2025, 10:26:20
    'O Pacto.jpg', '',//    12.8 kB','',//    11/06/2025, 10:26:20
    'O Pesadelo 1 - 2005.jpg', '',//    14.4 kB','',//    11/06/2025, 10:26:20
    'O Pesadelo 2 - 2007.jpg', '',//    11.6 kB','',//    11/06/2025, 10:26:20
    'O Pesadelo 2 - 2007.png', '',//    87.5 kB','',//    08/11/2022, 07:06:20
    'O Pesadelo 3 - 2008.jpg', '',//    11.1 kB','',//    11/06/2025, 10:26:20
    'O Poco 2.jpg', '',//    19.2 kB','',//    11/06/2025, 23:25:52
    'O Poco.jpg', '',//    8.9 kB','',//    11/06/2025, 10:26:20
    'O Porão - 1989.jpg', '',//    12.7 kB','',//    11/06/2025, 10:26:20
    'O Portal - 2005.jpg', '',//    11.6 kB','',//    11/06/2025, 10:26:20
    'O Ritual - 2017.jpg', '',//    12.4 kB','',//    11/06/2025, 10:26:20
    'O Sacrifício - 2006.jpg', '',//    14.2 kB','',//    11/06/2025, 10:26:20
    'O Sangue do Dracula.jpg', '',//    19.4 kB','',//    11/06/2025, 10:26:20
    'O Segredo da Cabana - 2012.jpg', '',//    11.9 kB','',//    11/06/2025, 10:26:20
    'O Silencio dos Inocentes.jpg', 'https://archive.org/download/o-silencio-dos-inocentes/O Silencio dos Inocentes.mp4',//    49.8 kB','',//    04/07/2025, 05:01:48
    'O Telefone Preto 2022.jpg', '',//    10.2 kB','',//    11/06/2025, 10:26:20
    'O Último Exorcismo - Parte 1 - 2010.jpg', '',//    9.9 kB','',//    11/06/2025, 10:26:20
    'O Último Exorcismo - Parte 2 - 2013.jpg', '',//    12.9 kB','',//    11/06/2025, 10:26:20
    'Olhos Assassinos - 1981.jpg', '',//    13.7 kB','',//    11/06/2025, 10:26:20
    'Olhos Famintos 1.jpg', '',//    17.7 kB','',//    11/06/2025, 10:26:20
    'Olhos Famintos 2.jpg', '',//    16.2 kB','',//    11/06/2025, 10:26:20
    'Olhos Famintos 3.jpg', '',//    15.6 kB','',//    11/06/2025, 10:26:20
    'Olhos Famintos 4.jpg', '',//    12.3 kB','',//    11/06/2025, 10:26:20
    'Os 3 Infernais - 2019.jpg', '',//    13.9 kB','',//    11/06/2025, 10:26:20
    'Os Escravos de Satanás - 2018.jpg', '',//    12.4 kB','',//    11/06/2025, 10:26:20
    'Os Esquecidos.jpg', '',//    11.9 kB','',//    11/06/2025, 10:26:20
    'Os Estranhos - 2008.jpg', '',//    10.9 kB','',//    11/06/2025, 10:26:20
    'Os Estranhos - Caçada Noturna - 2018.jpg', '',//    12.6 kB','',//    11/06/2025, 10:26:20
    'Os Mensageiros 1 - 2007.jpg', '',//    17.2 kB','',//    11/06/2025, 10:26:20
    'Os Mensageiros 2 - 2009.jpg', '',//    16.2 kB','',//    11/06/2025, 10:26:20
    'Os Mortos Não Morrem - 2019.jpg', '',//    16.2 kB','',//    11/06/2025, 10:26:20
    'Os Órfãos - 2020.jpg', '',//    6.6 kB','',//    11/06/2025, 10:26:20
    'Os Pássaros 1 - 1963.jpg', '',//    12.6 kB','',//    11/06/2025, 10:26:20
    'Os Pássaros 2 - O Ataque Final.jpg', '',//    13.3 kB','',//    11/06/2025, 10:26:20
    'Outra Alma.jpg', '',//    7.6 kB','',//    11/06/2025, 10:26:20
    'Pague Para Entrar e Reze Para Sair - 1981.jpg', '',//    14.9 kB','',//    11/06/2025, 10:26:20
    'Palhaços Assassinos do Espaço Sideral - 1988.jpg', '',//    16.0 kB','',//    11/06/2025, 10:26:20
    'Palhaços Infernais - 2017.jpg', '',//    14.1 kB','',//    11/06/2025, 10:26:20
    'Panico 1.jpg', '',//    12.0 kB','',//    11/06/2025, 10:26:20
    'Panico 2.jpg', '',//    10.2 kB','',//    11/06/2025, 10:26:20
    'Panico 3.jpg', '',//    8.8 kB','',//    11/06/2025, 10:26:20
    'Panico 4.jpg', '',//    9.1 kB','',//    11/06/2025, 10:26:20
    'Panico 5.jpg', '',//    8.7 kB','',//    11/06/2025, 10:26:20
    'Panico 6.jpg', '',//    12.7 kB','',//    11/06/2025, 10:26:20
    'Pânico na Floresta 1.jpg', '',//    15.1 kB','',//    11/06/2025, 10:26:20
    'Pânico na Floresta 2.jpg', '',//    13.3 kB','',//    11/06/2025, 10:26:20
    'Pânico na Floresta 3.jpg', '',//    14.4 kB','',//    11/06/2025, 10:26:20
    'Pânico na Floresta 4.jpg', '',//    14.8 kB','',//    11/06/2025, 10:26:20
    'Pânico na Floresta 5.jpg', '',//    15.8 kB','',//    11/06/2025, 10:26:20
    'Pânico na Floresta 6.jpg', '',//    15.2 kB','',//    11/06/2025, 10:26:20
    'Pânico na Floresta 7 - A Fundação.jpg', '',//    11.9 kB','',//    11/06/2025, 10:26:20
    'Pânico na Ilha - 2009.jpg', '',//    18.1 kB','',//    11/06/2025, 10:26:20
    'Pânico no Deserto 1 - 2005.jpg', '',//    17.6 kB','',//    11/06/2025, 10:26:20
    'Pânico no Deserto 2 - 2008.jpg', '',//    11.8 kB','',//    11/06/2025, 10:26:20
    'Pânico no Lago 1 - 1999.jpg', '',//    10.9 kB','',//    11/06/2025, 10:26:20
    'Pânico no Lago 2 - 2007.jpg', '',//    16.8 kB','',//    11/06/2025, 10:26:20
    'Pânico no Lago 3 - 2010.jpg', '',//    18.6 kB','',//    11/06/2025, 10:26:20
    'Pânico no Lago 4 - 2012.jpg', '',//    13.5 kB','',//    11/06/2025, 10:26:20
    'Pânico no Lago 5 - O Legado - 2018.jpg', '',//    18.3 kB','',//    11/06/2025, 10:26:20
    'Pânico no Lago vs. Anaconta.jpg', '',//    17.3 kB','',//    11/06/2025, 10:26:20
    'Paranóia - 2007.jpg', '',//    12.0 kB','',//    11/06/2025, 10:26:20
    'Passaro Pintado.jpg', '',//    9.9 kB','',//    11/06/2025, 10:26:20
    'Pearl.jpg', '',//    11.2 kB','',//    11/06/2025, 10:26:20
    'Perseguição 1 - 2001.jpg', '',//    12.4 kB','',//    11/06/2025, 10:26:20
    'Perseguição 2 - O Resgate - 2008.jpg', '',//    13.7 kB','',//    11/06/2025, 10:26:20
    'Perseguição 3 - Correndo Para a Morte - 2014.jpg', '',//    15.6 kB','',//    11/06/2025, 10:26:20
    'Perseguidos - 2010.jpg', '',//    13.3 kB','',//    11/06/2025, 10:26:20
    'Perseguidos pela Morte - 2014.jpg', '',//    15.5 kB','',//    11/06/2025, 10:26:20
    'Pesadelos do Passado 1 - 2012.jpg', '',//    13.1 kB','',//    11/06/2025, 10:26:20
    'Pesadelos do Passado 2 - 2014.jpg', '',//    14.0 kB','',//    11/06/2025, 10:26:20
    'Pink Flamingo.jpg', '',//    11.2 kB','',//    11/06/2025, 10:26:20
    'Pink Flamingo.png', '',//    114 kB','',//    05/12/2022, 12:46:50
    'Piranha 1 - 2010.jpg', '',//    10.6 kB','',//    11/06/2025, 10:26:20
    'Piranha 2 - 2012.jpg', '',//    15.1 kB','',//    11/06/2025, 10:26:20
    'Poltergeist 1 - 1982.jpg', '',//    10.6 kB','',//    11/06/2025, 10:26:20
    'Poltergeist 2 - 1986.jpg', '',//    17.3 kB','',//    11/06/2025, 10:26:20
    'Poltergeist 3 - 1988.jpg', '',//    17.6 kB','',//    11/06/2025, 10:26:20
    'Poltergeist 4 - O Fenômeno - 2015.jpg', '',//    13.5 kB','',//    11/06/2025, 10:26:20
    'Premonição 1 - 2000.jpg', '',//    15.0 kB','',//    11/06/2025, 10:26:20
    'Premonição 2 - 2003.jpg', '',//    13.3 kB','',//    11/06/2025, 10:26:20
    'Premonição 3 - 2006.jpg', '',//    13.3 kB','',//    11/06/2025, 10:26:20
    'Premonição 4 - 2009.jpg', '',//    14.6 kB','',//    11/06/2025, 10:26:20
    'Premonição 5 - 2011.jpg', '',//    16.5 kB','',//    11/06/2025, 10:26:20
    'Primitivo - 2007.jpg', '',//    15.0 kB','',//    11/06/2025, 10:26:20
    'Psicopata Americano 2.jpg', '',//    9.9 kB','',//    11/06/2025, 10:26:20
    'Psicopata Americano.jpg', '',//    11.9 kB','',//    11/06/2025, 10:26:20
    'Psicose - Remake - 1998.jpg', '',//    12.0 kB','',//    11/06/2025, 10:26:20
    'Psicose 1 - 1960.jpg', '',//    6.9 kB','',//    11/06/2025, 10:26:20
    'Psicose 2 - 1983.jpg', '',//    9.6 kB','',//    11/06/2025, 10:26:20
    'Psicose 3 - 1986.jpg', '',//    10.3 kB','',//    11/06/2025, 10:26:20
    'Psicose 4 - O Começo - 1990.jpg', '',//    11.0 kB','',//    11/06/2025, 10:26:20
    'Pumpkinhead - 1988.jpg', '',//    14.4 kB','',//    11/06/2025, 10:26:20
    'Pumpkinhead 2 - 1994.jpg', '',//    12.7 kB','',//    11/06/2025, 10:26:20
    'Quarentena 1 - Remake - 2008.jpg', '',//    9.4 kB','',//    11/06/2025, 10:26:20
    'Quarentena 2 - Terminal - 2011.jpg', '',//    13.1 kB','',//    11/06/2025, 10:26:20
    'Re-Animator - 1985.jpg', '',//    18.4 kB','',//    11/06/2025, 10:26:20
    'Re-Animator - Fase Terminal - 2003.jpg', '',//    14.6 kB','',//    11/06/2025, 10:26:20
    'REC 1.jpg', '',//    9.3 kB','',//    11/06/2025, 10:26:20
    'REC 2.jpg', '',//    7.6 kB','',//    11/06/2025, 10:26:20
    'REC 3.jpg', '',//    11.0 kB','',//    11/06/2025, 10:26:20
    'REC 4.jpg', '',//    9.3 kB','',//    11/06/2025, 10:26:20
    'Refém do Espirito - 2008.jpg', '',//    16.5 kB','',//    11/06/2025, 10:26:20
    'Rejeitados pelo Diabo - 2005.jpg', '',//    17.0 kB','',//    11/06/2025, 10:26:20
    'Resident Evil - A Vingança - 2017.jpg', '',//    17.1 kB','',//    11/06/2025, 10:26:20
    'Resident Evil - Condenação - 2012.jpg', '',//    15.3 kB','',//    11/06/2025, 10:26:20
    'Resident Evil 1 - Hóspede Maldito - 2002.jpg', '',//    14.7 kB','',//    11/06/2025, 10:26:20
    'Resident Evil 2 - Apocalipse - 2004.jpg', '',//    14.3 kB','',//    11/06/2025, 10:26:20
    'Resident Evil 3 - A Extinção - 2007.jpg', '',//    12.5 kB','',//    11/06/2025, 10:26:20
    'Resident Evil 4 - Recomeço - 2010.jpg', '',//    16.9 kB','',//    11/06/2025, 10:26:20
    'Resident Evil 5 - Retribuição - 2012.jpg', '',//    15.3 kB','',//    11/06/2025, 10:26:20
    'Resident Evil 6 - O Capítulo Final - 2017.jpg', '',//    12.8 kB','',//    11/06/2025, 10:26:20
    'Ripper - O Mensageiro do Inferno - 2001.jpg', '',//    16.4 kB','',//    11/06/2025, 10:26:20
    'Ripper 2 - Ressuscitando o Medo - 2004.jpg', '',//    10.3 kB','',//    11/06/2025, 10:26:20
    'Rogai por Nos.jpg', '',//    10.7 kB','',//    11/06/2025, 10:26:20
    'Rota da Morte.jpg', '',//    10.1 kB','',//    11/06/2025, 10:26:20
    'Rota Mortal 1 - 2006.jpg', '',//    10.1 kB','',//    11/06/2025, 10:26:20
    'Rota Mortal 2 - Não Olhe Para Trás - 2008.jpg', '',//    13.6 kB','',//    11/06/2025, 10:26:20
    'Rua do Medo 1 - 1994.jpg', '',//    13.0 kB','',//    11/06/2025, 10:26:20
    'Rua do Medo 2 - 1978.jpg', '',//    13.3 kB','',//    11/06/2025, 10:26:20
    'Rua do Medo 3 - 1666.jpg', '',//    13.9 kB','',//    11/06/2025, 10:26:20
    'Sanatorio - 2013.jpg', '',//    11.1 kB','',//    11/06/2025, 10:26:20
    'Sanatório - 2013.jpg', '',//    11.3 kB','',//    11/06/2025, 10:26:20
    'Seed - Assassino em Serie - 2006.jpg', '',//    16.0 kB','',//    11/06/2025, 10:26:20
    'Seed 2 - A Nova Geração - 2014.jpg', '',//    15.3 kB','',//    11/06/2025, 10:26:20
    'Semente Do Diabo - 1979.jpg', '',//    11.4 kB','',//    11/06/2025, 10:26:20
    'Sepultado Vivo - 1990.jpg', '',//    17.0 kB','',//    11/06/2025, 10:26:20
    'Sepultado Vivo 2.jpg', '',//    10.3 kB','',//    11/06/2025, 10:26:20
    'Serbian Film.jpg', '',//    10.8 kB','',//    11/06/2025, 10:26:20
    'Seres Rastejantes - 2006.jpg', '',//    12.1 kB','',//    11/06/2025, 10:26:20
    'Seven - Sete Pecados Capitais.jpg', '',//    11.7 kB','',//    11/06/2025, 10:26:20
    'Sexta-Feira 13 - Parte 1.jpg', '',//    13.0 kB','',//    11/06/2025, 10:26:20
    'Sexta-Feira 13 - Parte 2.jpg', '',//    13.3 kB','',//    11/06/2025, 10:26:20
    'Sexta-Feira 13 - Parte 3.jpg', '',//    11.8 kB','',//    11/06/2025, 10:26:20
    'Sexta-Feira 13 - Parte 4 - O Capítulo Final.jpg', '',//    15.0 kB','',//    11/06/2025, 10:26:20
    'Sexta-Feira 13 - Parte 5 - Um Novo Recomeço.jpg', '',//    13.4 kB','',//    11/06/2025, 10:26:20
    'Sexta-Feira 13 - Parte 6- Jason Vive.jpg', '',//    13.8 kB','',//    11/06/2025, 10:26:20
    'Sexta-Feira 13 - Parte 7- A Matança Continua.jpg', '',//    12.0 kB','',//    11/06/2025, 10:26:20
    'Sexta-Feira 13 - Parte 8- Jason Ataca Nova York.jpg', '',//    15.8 kB','',//    11/06/2025, 10:26:20
    'Sexta-Feira 13 - Parte 9.jpg', '',//    18.0 kB','',//    11/06/2025, 10:26:20
    'Sexta-Feira 13 2009.jpg', '',//    14.9 kB','',//    11/06/2025, 10:26:20
    'Shakma - A Fúria Assassina - 1990.jpg', '',//    13.6 kB','',//    11/06/2025, 10:26:20
    'Siga o Mestre - 2006.jpg', '',//    12.6 kB','',//    11/06/2025, 10:26:20
    'Silent Hill - Revelações - 2012.jpg', '',//    7.7 kB','',//    11/06/2025, 10:26:20
    'Silent Hill - Revelações - 2012.jpg', '',//    11.8 kB','',//    11/06/2025, 10:26:20
    'Sinais.jpg', '',//    11.7 kB','',//    11/06/2025, 10:26:20
    'Skinamarink.jpg', '',//    59.4 kB','',//    11/06/2025, 10:39:02
    'Slender Man - O Pesadelo sem Façe.jpg', '',//    10.7 kB','',//    11/06/2025, 10:26:20
    'Sobrenatural 1 - 2010.jpg', '',//    10.4 kB','',//    11/06/2025, 10:26:20
    'Sobrenatural 2 - 2014.jpg', '',//    10.0 kB','',//    11/06/2025, 10:26:20
    'Sobrenatural 2.jpg', '',//    8.1 kB','',//    11/06/2025, 10:26:20
    'Sobrenatural 3 - A Origem - 2015.jpg', '',//    9.7 kB','',//    11/06/2025, 10:26:20
    'Sobrenatural 3.jpg', '',//    8.8 kB','',//    11/06/2025, 10:26:20
    'Sobrenatural 4 - A última Chave - 2018.jpg', '',//    17.2 kB','',//    11/06/2025, 10:26:20
    'Sobrenatural 4.jpg', '',//    9.6 kB','',//    11/06/2025, 10:26:20
    'Sobrenatural 5.jpg', '',//    7.4 kB','',//    11/06/2025, 10:26:20
    'Sorria.jpg', '',//    13.2 kB','',//    11/06/2025, 10:26:20
    'Sorria.png', '',//    13.2 kB','',//    11/06/2025, 10:26:20
    'Sorria 2.jpg', '',//    9.3 kB','',//    11/06/2025, 10:26:20
    'Sozinha.jpeg', '',//    4.7 kB','',//    11/06/2025, 23:10:56
    'Sozinha.jpg', '',//    4.7 kB','',//    11/06/2025, 23:11:14
    'Spawn - O Soldado do Inferno.jpg', '',//    11.3 kB','',//    11/06/2025, 10:26:20
    'Splice A Nova Espécie.jpg', '',//    9.3 kB','',//    11/06/2025, 10:26:20
    'Stairs.jpg', '',//    11.5 kB','',//    11/06/2025, 10:26:20
    'Stigmata.jpg', '',//    10.0 kB','',//    11/06/2025, 10:26:20
    'Suspiria - 1977.jpg', '',//    11.0 kB','',//    11/06/2025, 10:26:20
    'Suspiria - 2018.jpg', '',//    16.0 kB','',//    11/06/2025, 10:26:20
    'Temos Vagas 1 - 2007.jpg', '',//    14.1 kB','',//    11/06/2025, 10:26:20
    'Temos Vagas 2 - A Primeira Diária - 2008.jpg', '',//    11.4 kB','',//    11/06/2025, 10:26:20
    'Terra dos Mortos - 2005.jpg', '',//    9.5 kB','',//    11/06/2025, 10:26:22
    'Terra Maldita - 2009.jpg', '',//    13.0 kB','',//    11/06/2025, 10:26:22
    'Terras de Sangue - 2014.jpg', '',//    13.9 kB','',//    11/06/2025, 10:26:22
    'Terrifier - 2016.jpg', '',//    13.3 kB','',//    11/06/2025, 10:26:22
    'Terrifier 1 - 2016.jpg', '',//    15.8 kB','',//    11/06/2025, 10:26:22
    'Terrifier 2 -2022.jpg', '',//    15.0 kB','',//    11/06/2025, 10:26:22
    'Terrifier 3.jpg', '',//    16.4 kB','',//    11/06/2025, 10:26:22
    'Terror em Silent Hill.jpg', '',//    10.7 kB','',//    11/06/2025, 10:26:22
    'The Birds 1963.jpg', '',//    14.2 kB','',//    11/06/2025, 10:26:22
    'The Red Book Ritual.jpg', '',//    13.2 kB','',//    11/06/2025, 10:26:22
    'The Sadness 2021.jpg', '',//    10.7 kB','',//    11/06/2025, 10:26:22
    'The Sadness 2021.png', '',//    302 kB','',//    05/12/2022, 12:47:14
    'The Silence - 2019.jpg', '',//    15.0 kB','',//    11/06/2025, 10:26:22
    'The Woman.jpg', '',//    13.2 kB','',//    11/06/2025, 10:26:22
    'Tomates Assasinos 2.jpg', '',//    16.6 kB','',//    11/06/2025, 10:26:22
    'Tony.jpg', '',//    11.1 kB','',//    11/06/2025, 10:26:22
    'Toque de Recolher - 2006.jpg', '',//    10.5 kB','',//    11/06/2025, 10:26:22
    'Trancada 2022.jpg', '',//    9.8 kB','',//    11/06/2025, 10:26:22
    'Trem Fantasma - 2006.jpg', '',//    14.4 kB','',//    11/06/2025, 10:26:22
    'Triângulo do Medo - 2009.jpg', '',//    13.8 kB','',//    11/06/2025, 10:26:22
    'Tubarao 1.jpg', '',//    10.4 kB','',//    11/06/2025, 10:26:22
    'Tubarao 2.jpg', '',//    11.7 kB','',//    11/06/2025, 10:26:22
    'Tubarao 3.jpg', '',//    13.2 kB','',//    11/06/2025, 10:26:22
    'Tubarao 4 - O Ultimo Tubarao.jpg', '',//    15.8 kB','',//    11/06/2025, 10:26:22
    'Tubarao 4.jpg', '',//    15.7 kB','',//    11/06/2025, 10:26:22
    'Turistas - 2006.jpg', '',//    9.0 kB','',//    11/06/2025, 10:26:22
    'Tusk A Transformacao.jpg', '',//    9.6 kB','',//    11/06/2025, 10:26:22
    'Ultimo Mundo Canibal - Faces da Morte 8.jpg', '',//    17.3 kB','',//    11/06/2025, 10:26:22
    'Um Clássico Filme de Terror - 2021.jpg', '',//    7.4 kB','',//    11/06/2025, 10:26:22
    'Um Drink no Inferno 1 - 1996.jpg', '',//    15.3 kB','',//    11/06/2025, 10:26:22
    'Um Drink no Inferno 2 - 1999.jpg', '',//    14.4 kB','',//    11/06/2025, 10:26:22
    'Um Drink no Inferno 3 - 2000.jpg', '',//    13.6 kB','',//    11/06/2025, 10:26:22
    'Um Lugar Silencioso 2.jpg', '',//    12.8 kB','',//    11/06/2025, 10:26:22
    'Um Lugar Silencioso.jpg', '',//    12.4 kB','',//    11/06/2025, 10:26:22
    'Uma Noite de Crime 1 - 2013.jpg', '',//    11.0 kB','',//    11/06/2025, 10:26:22
    'Uma Noite de Crime 2 - Anarquia - 2014.jpg', '',//    17.2 kB','',//    11/06/2025, 10:26:22
    'Uma Noite de Crime 2 - Anarquia - 2014.png', '',//    537 kB','',//    16/11/2022, 16:46:34
    'Uma Noite de Crime 3 - 2016.jpg', '',//    11.5 kB','',//    11/06/2025, 10:26:22
    'Uma Noite de Crime 3 - 2016.png', '',//    123 kB','',//    16/11/2022, 16:47:30
    'Uma Noite de Crime 4 A Primeira Noite de Crime.jpg', '',//    6.5 kB','',//    11/06/2025, 10:26:22
    'Uma Noite de Crime 5 A Fronteira.jpg', '',//    13.0 kB','',//    11/06/2025, 10:26:22
    'Uma Noite Para Esquecer - 2013.jpg', '',//    11.8 kB','',//    11/06/2025, 10:26:22
    'Uma Noite Para Esquecer - 2013.jpg', '',//    10.3 kB','',//    11/06/2025, 10:26:22
    'Verónica - 2017.jpg', '',//    9.0 kB','',//    11/06/2025, 10:26:22
    'Vertigo 1958.jpg', '',//    13.7 kB','',//    11/06/2025, 10:26:22
    'Viagem do Medo - 2010.jpg', '',//    17.0 kB','',//    11/06/2025, 10:26:22
    'Viagem Maldita 1 - 2006.jpg', '',//    14.9 kB','',//    11/06/2025, 10:26:22
    'Viagem Maldita 2 - 2007.jpg', '',//    15.2 kB','',//    11/06/2025, 10:26:22
    'Vigiados.jpg', '',//    12.9 kB','',//    11/06/2025, 10:26:22
    'Você é o Próximo - 2014.jpg', '',//    6.5 kB','',//    11/06/2025, 10:26:22
    'Você Nunca Me Encontrará (2023).jpg', '',//    12.4 kB','',//    11/06/2025, 10:26:22
    'When Evil Lurks.jpg', '',//    6.6 kB','',//    11/06/2025, 10:26:22
    'Wolf Creek 1.jpg', '',//    12.8 kB','',//    11/06/2025, 10:26:22
    'Wolf Creek 2 - 2013 - Legendado.jpg', '',//    13.0 kB','',//    11/06/2025, 10:26:22
    'Wolf Creek 2 - 2013 - Legendado.png', '',//    254 kB','',//    25/11/2022, 15:50:18
    'X - A Marca da Morte.jpg', '',//    11.2 kB','',//    11/06/2025, 10:26:22
    'Ze do caixao - À Meia Noite Levarei Sua Alma.jpg', '',//    20.7 kB','',//    11/06/2025, 10:26:22
    'Ze do caixao - Encarnação Do Demonio.jpg', '',//    16.7 kB','',//    11/06/2025, 10:26:22
    'Ze do caixao - Esta Noite Encarnarei no Teu Cadáver.jpg', '',//    17.7 kB','',//    11/06/2025, 10:26:22
    'Zoombies 1 - 2016.jpg', '',//    18.2 kB','',//    11/06/2025, 10:26:22
    'Zoombies 2 - 2019.jpg', 'orfa2.mp4',//    15.9 kB','',//    11/06/2025, 10:26:22
  ];
