#!/bin/bash

# Variáveis
CONTAINER_NAME="laravelapp"

# Função de ajuda
function exibir_ajuda {
    echo "Uso: $0 <comando>"
    echo "Comandos disponíveis:"
    echo "  run    - Inicializa os contêineres"
    echo "  bash   - Abre o terminal do contêiner do Laravel em modo interativo"
    echo "  stop   - Finaliza os contêineres em execução (sem remover)"
    echo "  start  - Inicia os contêineres previamente criados e parados"
}

# ...

case "$1" in
run)
    echo "Inicializando os contêineres..."
    docker-compose up -d
    echo "Contêineres inicializados."
    ;;
bash)
    echo "Abrindo o terminal do contêiner do Laravel em modo interativo."
    echo "Para sair, digite 'exit'."
    docker exec -it "$CONTAINER_NAME" /bin/bash
    ;;
stop)
    echo "Finalizando os contêineres..."
    docker-compose down
    echo "Contêineres finalizados."
    ;;
start)
    echo "Iniciando os contêineres previamente criados e parados..."
    docker-compose start
    echo "Contêineres iniciados."
    ;;
*)
    echo "Erro: Comando inválido."
    exibir_ajuda
    exit 1
    ;;
esac

exit 0
