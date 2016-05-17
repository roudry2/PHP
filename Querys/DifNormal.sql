select palavra,dica from palavras
where length(palavra) > 5 and length(palavra) <9
order by rand()
limit 1;