# Git e Github
## Fazer mudanças

- git status -> verifica o que foi modificado e precisa ser comitado
- git diff -> diferenças no arquivo
- git diff <branch1>...<branch2> -> diferença entre branches
- git add . ou git add * -> adiciona todas modificações no arquivo .git no repositório local
- git commit -m "mensagem" -> salva as modificações no repositorio local
- git reset <commit> -> reseta o commit mas preserva as mudanças locais 
- git reset --hard <commit> -> descarta todo histórico e mudanças para o commit especificado
- git clone <url> -> baixa um projeto e seu histórico de versão

## Ramificação 

- git branch -> diz a branch que está sendo usada
- git branch nome -> cria uma nova branch chamada nome 
- git checkout nome -> muda para a nova branch nome
- git checkout -b menu -> cria uma nova branch menu e ja muda automaticamente 
- git branch -d nome -> remove a branch nome
- git merge nome -> unifica a branch atual com a brench nome 


## Chave ssh

- ssh-keygen -t ed25519 -C "seu_email@escolhido.com"

## Sincronizando o repositório remoto com o local

- git remote -v -> mostra os repositórios remotos configurados 
- git remote add origin <link> -> configura seu repositório remoto com o local

## salvando fragmentos 

- git stash -> armazena temporariamente todos arquivos modificados
- git stash pop -> restaura os arquivos recentes em stash
- git stash list -> lista todas alterações em stash 
- git stash drop -> descarta os conjuntos de alterações mais recentes em stash

## Desfazer commits 

- git reset <commit> -> reeta o commit mas preserva as mudanças locais 
- git reset --hard <commit> 

## Refatorando arquivos 

- git rm <arquivo> -> exclui o arquivo selecionado
- git rm --cached <arquivo> -> exclui o arquivo do controle de versão mas preserva o arquivo localmente
- git mv <arquivo> <novo arquivo> -> move o arquivo 

## Checar versões anteriores

- git log -> info sobre alterações, autor, e hash do arquivo antes da mudança caso ocorra erros e precise retornar a versão anterior
- git log --since=2021-01-01 -> retorna informações sobre alterações desde a data especificada
- git log --ultil= 2022-01-02 -> mudanças até a data especificada 
- git log --author=user -> alterações feita pelo usuário específico

