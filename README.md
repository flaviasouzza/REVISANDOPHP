#Revisando PHP criado pela Flávia, seguindo os passos abaixo:
-- Sistema Linux 

1. Baixa o PHP e o Apache

# Instalar Apache
	sudo apt update
	sudo apt upgrade
	sudo apt install apache2

Após a instalação, inicie o Apache com o seguinte comando:
	sudo systemctl start apache2

Habilite o Apache para iniciar automaticamente no boot do sistema:
	sudo systemctl enable apache2

Verifique o Status do Apache:
Verifique se o Apache está em execução corretamente:
	sudo systemctl status apache2

# Instalar PHP

Instale o PHP e o módulo do Apache para o PHP. No Ubuntu, você pode fazer isso com:
	sudo apt install php libapache2-mod-php
Após instalar o PHP, reinicie o Apache para que as alterações entrem em vigor:
	sudo systemctl restart apache2

2. Instalar Git e Visual Studio Code

# Instalar Git
	sudo apt update
	sudo apt install git

# Instalar Visual Studio Code
	sudo snap install --classic code

3. Crie um projeto no GITHUB exemplo -- REVISANDOPHP

4. Crie um token no GITHUB 
- Tokens de Acesso Pessoal (PAT)
Para Gerar um Token de Acesso Pessoal:
	Vá para Configurações de Tokens de Acesso Pessoal no GitHub.
	Clique em "Generate new token".
	Selecione os escopos necessários para o token
	Clique em "Generate token".
	Copie o token gerado e salve em alguma aba 

5. Vamos clonar o git, abra o terminal e coloque 
git clone https://<SEUTOKEN>@github.com/<SEU_USER_GIT/NOME_DO_PROJETO.git

Exemplo: git clone https://<SEU_TOKEN>@github.com/flaviasouzza/REVISANDOPHP.git

6. Clone realizado vamos abrir o Visual Studio com a aba do projeto, abra o terminal e siga os passos:
	cd REVISANDOPHP				
	code .
	
7. Crie um arquivo no VS exemplo -- hello  
	Cod:
	<?php
    echo "Hello, World!";
	?>

8. Vamos aproveitar e aprender a abrir em um navegador nosso código acima
	Para abrir no navegador temos que copiar o projeto para o Diretório do Servidor Web
	Execute no terminal: 
    sudo cp -R /home/SEU_USUARIO_DO_PC/NOME_PROJETO/* /var/www/html/

    Exemplo: cp -R /home/flavia/REVISANDOPHP/* / var/www/html 

9. Acesse o link: http://localhost/hello.php
	
10. Você também navegar até a pasta do código no seu terminal e executar o comando:
		- php hello.php
	Veremos a saída Hello, World! conforme escrevemos anteriormente no visual code

11. Depois de testarmos vamos subir o código para nosso pro git.
    Abra o terminal do seu linux

    - git add .  (serve para add as mudanças ao indice)
    - git commit -m "Hello World acrescento"  (Fazer o commit da mudança)
    - git push origin main (enviar mudança pro repositorio remoto)

    (Subimos o arquivo Hello World, se fosse entrar no github e atualizar veremos o mesmo inserido lá)

    Porém:
    Tenho um outro arquivo na pasta que é este (README.md), nós abrimos ele no VS, e queremos subir as mudanças pro GITHUB também, teremos que seguir o passo a passo abaixo:
    
    - git add READDME.MD (Observação: escreva o nome do arquivo exatamente como está escrito na pasta)
    - git commit -m "Alterando README.md"
    - git push origin main


Obs: antes de dar um git push, você pode colocar GIT BRANCH para verificar se está na branch correta antes de enviar a mudança para o repositorio.

Considerações: fizemos dessa forma apenas para aprendizado, mais nunca NUNCA ALTERA NADA NA MAIN OU MASTER