select palavra,dica from palavras
where length(palavra) > 8
order by rand()
limit 1;