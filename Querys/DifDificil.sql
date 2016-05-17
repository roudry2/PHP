select palavra,dica from palavras
where length(palavra) < 5
order by rand()
limit 1;
