/* esta query é para a opção do jogador se quiser fazer reset aos pontos e n de jogos*/
update users
set Pontos = 0,
N_Jogos = 0
where ID = 1; /* ID do jogador que estiver logado