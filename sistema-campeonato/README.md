# 🏆 Desafio Nível 3 — Sistema de Campeonato

## 📌 Descrição

Crie um programa capaz de receber os resultados de várias partidas de um campeonato de futebol e, a partir desses resultados, construir automaticamente a classificação dos times.

O programa deve identificar os times, calcular suas estatísticas e ordenar a classificação de acordo com os critérios definidos.

A quantidade de times e partidas é **desconhecida**, portanto o algoritmo deve funcionar de forma dinâmica.

---

## 🎯 Objetivo

Dado o resultado de várias partidas, o programa deve calcular para cada time:

* Jogos
* Vitórias
* Empates
* Derrotas
* Gols marcados
* Gols sofridos
* Saldo de gols
* Pontos

A classificação deverá ser construída automaticamente pelo algoritmo.

---

## ⚽ Formato de uma partida

Cada partida possui quatro informações:

```text
Time A
Time B
Gols do Time A
Gols do Time B
```

Uma partida pode ser representada, por exemplo, da seguinte forma:

```text
Flamengo, Palmeiras, 2, 1
```

Isso significa:

```text
Flamengo 2 x 1 Palmeiras
```

---

## 🏅 Sistema de pontuação

A pontuação deverá seguir as regras tradicionais:

| Resultado | Pontos |
| --------- | ------ |
| Vitória   | 3      |
| Empate    | 1      |
| Derrota   | 0      |

### Exemplo

Se o Flamengo vencer o Palmeiras:

```text
Flamengo 2 x 1 Palmeiras
```

O Flamengo recebe:

```text
+3 pontos
```

O Palmeiras recebe:

```text
+0 pontos
```

Se ocorrer um empate:

```text
Corinthians 0 x 0 Santos
```

Ambos recebem:

```text
+1 ponto
```

---

# 📥 Exemplo de entrada

```text
Flamengo, Palmeiras, 2, 1
Corinthians, Santos, 0, 0
Palmeiras, Corinthians, 3, 2
Santos, Flamengo, 1, 4
```

O programa deve identificar automaticamente os quatro times:

```text
Flamengo
Palmeiras
Corinthians
Santos
```

Não é permitido cadastrar previamente os times.

---

# 📊 Estatísticas

Para cada time, o programa deve calcular:

### Jogos

Quantidade total de partidas disputadas.

### Vitórias

Quantidade de partidas vencidas.

### Empates

Quantidade de partidas empatadas.

### Derrotas

Quantidade de partidas perdidas.

### Gols marcados — GM

Total de gols marcados pelo time.

### Gols sofridos — GS

Total de gols sofridos pelo time.

### Saldo de gols — SG

O saldo de gols deve ser calculado utilizando:

```text
SG = GM - GS
```

### Pontos

Total de pontos conquistados pelo time.

---

# 🏆 Critérios de classificação

A classificação deverá ser ordenada seguindo esta ordem:

### 1. Maior número de pontos

O time com mais pontos fica à frente.

```text
Time A → 10 pontos
Time B → 7 pontos
```

Resultado:

```text
Time A
Time B
```

### 2. Maior saldo de gols

Se dois times tiverem a mesma quantidade de pontos, o maior saldo de gols ficará à frente.

```text
Time A → 10 pontos | SG +8
Time B → 10 pontos | SG +3
```

Resultado:

```text
Time A
Time B
```

### 3. Maior número de gols marcados

Se pontos e saldo de gols forem iguais, compare os gols marcados.

```text
Time A → 10 pts | SG +5 | GM 15
Time B → 10 pts | SG +5 | GM 12
```

Resultado:

```text
Time A
Time B
```

### 4. Ordem alfabética

Se todos os critérios anteriores forem iguais, os times deverão ser ordenados alfabeticamente.

```text
Flamengo
Palmeiras
```

---

# 📤 Exemplo de saída

Para a entrada:

```text
Flamengo, Palmeiras, 2, 1
Corinthians, Santos, 0, 0
Palmeiras, Corinthians, 3, 2
Santos, Flamengo, 1, 4
```

Uma possível saída será:

```text
1. Flamengo
   Pts: 6
   J: 2
   V: 2
   E: 0
   D: 0
   GM: 6
   GS: 2
   SG: 4

2. Palmeiras
   Pts: 3
   J: 2
   V: 1
   E: 0
   D: 1
   GM: 4
   GS: 4
   SG: 0

3. Corinthians
   Pts: 1
   J: 2
   V: 0
   E: 1
   D: 1
   GM: 2
   GS: 3
   SG: -1

4. Santos
   Pts: 1
   J: 2
   V: 0
   E: 1
   D: 1
   GM: 1
   GS: 5
   SG: -4
```

---

# 📋 Regras do desafio

O programa deve respeitar as seguintes regras:

### 1. Quantidade de times desconhecida

Não informe previamente quantos times participarão do campeonato.

O programa deve descobrir os times a partir das partidas informadas.

---

### 2. Quantidade de partidas desconhecida

O programa deve permitir que exista uma quantidade variável de partidas.

Exemplo:

```text
5 partidas
10 partidas
50 partidas
100 partidas
```

O algoritmo deve continuar funcionando.

---

### 3. Um time pode jogar várias partidas

Exemplo:

```text
Flamengo, Palmeiras, 2, 1
Flamengo, Santos, 3, 0
Corinthians, Flamengo, 1, 1
```

O Flamengo deverá possuir:

```text
Jogos: 3
```

E suas estatísticas deverão considerar todas as partidas.

---

### 4. Identificação automática dos times

Não faça algo como:

```text
times = ["Flamengo", "Palmeiras", "Corinthians"]
```

Os times devem ser descobertos a partir das partidas.

---

### 5. Estatísticas não podem ser cadastradas manualmente

Não faça:

```text
Flamengo = {
    pontos: 10,
    vitorias: 3,
    ...
}
```

As estatísticas devem ser calculadas pelo algoritmo a partir dos resultados.

---

# 🔥 Desafio Extra

Depois de implementar a classificação básica, implemente validações para tornar o sistema mais robusto.

---

## ❌ Validação 1 — Time contra si mesmo

Uma equipe não pode enfrentar ela mesma.

### Entrada inválida

```text
Flamengo, Flamengo, 2, 1
```

O programa deverá identificar o erro.

Exemplo:

```text
Erro: um time não pode jogar contra ele mesmo.
```

---

## ❌ Validação 2 — Gols negativos

Não podem existir gols negativos.

### Entrada inválida

```text
Flamengo, Palmeiras, -2, 1
```

O programa deverá rejeitar a partida.

Exemplo:

```text
Erro: a quantidade de gols não pode ser negativa.
```

---

## ❌ Validação 3 — Nome do time

O nome de um time não pode estar vazio.

### Entrada inválida

```text
, Palmeiras, 2, 1
```

O programa deverá rejeitar a partida.

Exemplo:

```text
Erro: o nome do time não pode estar vazio.
```

---

## ❌ Validação 4 — Formato da partida

Uma partida precisa possuir exatamente quatro informações:

```text
Time A, Time B, Gols A, Gols B
```

### Entrada inválida

```text
Flamengo, Palmeiras, 2
```

O programa deverá informar que a partida está em formato inválido.

---

# 🔎 Consulta de um time

Como desafio adicional, permita que o usuário consulte as estatísticas de um time específico.

O programa deverá solicitar:

```text
Digite o nome de um time:
```

Exemplo:

```text
Digite o nome de um time:
Flamengo
```

E apresentar:

```text
Flamengo

Jogos: 10
Vitórias: 7
Empates: 2
Derrotas: 1
Gols marcados: 21
Gols sofridos: 8
Saldo: 13
Pontos: 23
```

Caso o time não exista:

```text
Time não encontrado.
```

---

# 🧠 Requisitos técnicos

O programa deverá:

* [ ] Receber partidas dinamicamente
* [ ] Identificar automaticamente os times
* [ ] Criar as estatísticas de cada time
* [ ] Registrar jogos
* [ ] Registrar vitórias
* [ ] Registrar empates
* [ ] Registrar derrotas
* [ ] Registrar gols marcados
* [ ] Registrar gols sofridos
* [ ] Calcular saldo de gols
* [ ] Calcular pontos
* [ ] Ordenar a classificação
* [ ] Aplicar os critérios de desempate
* [ ] Exibir a classificação
* [ ] Validar partidas inválidas
* [ ] Permitir consultar um time

---

# 🏗️ Sugestão de estrutura dos dados

Você pode representar as estatísticas de cada time utilizando uma estrutura semelhante a:

```text
Time
├── nome
├── jogos
├── vitorias
├── empates
├── derrotas
├── golsMarcados
├── golsSofridos
├── saldoGols
└── pontos
```

A implementação dessa estrutura fica a critério do desenvolvedor.

Você pode utilizar:

* Objetos
* Classes
* Arrays
* Mapas
* Dicionários
* Structs
* Records
* Ou qualquer outra estrutura disponível na linguagem escolhida.

---

# 💡 Dica de implementação

Uma possível estratégia é processar cada partida individualmente.

Para:

```text
Flamengo, Palmeiras, 2, 1
```

O algoritmo deverá:

### Flamengo

```text
Jogos +1
Gols marcados +2
Gols sofridos +1
```

Como venceu:

```text
Vitórias +1
Pontos +3
```

### Palmeiras

```text
Jogos +1
Gols marcados +1
Gols sofridos +2
```

Como perdeu:

```text
Derrotas +1
Pontos +0
```

Depois de processar todas as partidas, o algoritmo deverá calcular:

```text
Saldo = Gols marcados - Gols sofridos
```

E finalmente ordenar os times.

---

# 🧪 Casos de teste

## Teste 1 — Vitória

Entrada:

```text
Flamengo, Palmeiras, 2, 1
```

Resultado esperado:

```text
Flamengo
J: 1
V: 1
E: 0
D: 0
GM: 2
GS: 1
SG: 1
Pts: 3
```

---

## Teste 2 — Empate

Entrada:

```text
Flamengo, Palmeiras, 2, 2
```

Resultado esperado:

```text
Flamengo
J: 1
V: 0
E: 1
D: 0
GM: 2
GS: 2
SG: 0
Pts: 1
```

E:

```text
Palmeiras
J: 1
V: 0
E: 1
D: 0
GM: 2
GS: 2
SG: 0
Pts: 1
```

---

## Teste 3 — Derrota

Entrada:

```text
Flamengo, Palmeiras, 0, 3
```

Resultado esperado:

```text
Flamengo
J: 1
V: 0
E: 0
D: 1
GM: 0
GS: 3
SG: -3
Pts: 0
```

---

## Teste 4 — Desempate por saldo

Entrada:

```text
Flamengo, Santos, 3, 0
Palmeiras, Corinthians, 2, 0

Flamengo, Corinthians, 1, 0
Palmeiras, Santos, 1, 0
```

Os quatro times possuem 6 pontos?

Calcule as estatísticas e aplique corretamente os critérios de desempate.

---

## Teste 5 — Desempate por gols marcados

Crie partidas em que dois times terminem com:

```text
Mesmos pontos
Mesmo saldo de gols
```

Porém com quantidades diferentes de:

```text
Gols marcados
```

Verifique se o time com maior número de gols marcados fica à frente.

---

## Teste 6 — Desempate alfabético

Crie partidas em que dois ou mais times tenham exatamente:

```text
Mesmos pontos
Mesmo saldo
Mesmos gols marcados
```

Verifique se a ordenação final é alfabética.

---

# 🚀 Desafios adicionais

Depois de concluir o desafio principal, tente implementar:

### Desafio 1

Permitir remover uma partida e recalcular a classificação.

### Desafio 2

Permitir adicionar novas partidas depois que a classificação já foi exibida.

### Desafio 3

Exibir apenas os três primeiros colocados.

### Desafio 4

Exibir o artilheiro do campeonato.

Para isso, você precisará registrar os jogadores responsáveis pelos gols.

### Desafio 5

Criar uma opção para exibir todos os jogos de um determinado time.

Exemplo:

```text
Flamengo

Flamengo 2 x 1 Palmeiras
Santos 1 x 4 Flamengo
Flamengo 3 x 0 Corinthians
```

### Desafio 6

Criar testes automatizados para validar o cálculo das estatísticas e da classificação.

---

# 📁 Sugestão de organização

A estrutura do projeto pode ser organizada da seguinte maneira:

```text
sistema-campeonato/
│
├── README.md
│
├── src/
│   ├── campeonato
│   ├── time
│   ├── partida
│   └── classificacao
│
└── tests/
    ├── partida
    ├── time
    └── classificacao
```

A estrutura acima é apenas uma sugestão. Você pode adaptá-la à linguagem utilizada.

---

# 🛠️ Linguagem

O desafio pode ser implementado em **qualquer linguagem de programação**.

Exemplos:

* PHP
* JavaScript
* TypeScript
* Python
* Java
* C
* C++
* C#
* Go
* Ruby
* Kotlin
* Rust

O objetivo principal é desenvolver o **algoritmo**, não utilizar uma linguagem específica.

---

# 🎓 O que este desafio trabalha

Este desafio envolve diversos conceitos importantes de programação:

* Estruturas de dados
* Arrays e listas
* Objetos
* Classes
* Loops
* Condicionais
* Funções
* Ordenação
* Comparação de dados
* Validação de entrada
* Processamento de informações
* Manipulação de strings
* Regras de negócio
* Testes automatizados
* Organização de código

---

# 🏁 Critério de conclusão

O desafio estará completo quando o programa conseguir:

```text
Receber partidas
       ↓
Identificar os times
       ↓
Processar os resultados
       ↓
Calcular estatísticas
       ↓
Calcular pontos
       ↓
Calcular saldo de gols
       ↓
Ordenar classificação
       ↓
Exibir tabela
       ↓
Consultar um time
```

O algoritmo deve funcionar sem que seja necessário informar previamente quais times participam do campeonato ou cadastrar manualmente suas estatísticas.

---

## ⭐ Objetivo final

O foco deste desafio não é apenas fazer o programa funcionar.

Procure escrever um código:

* Simples
* Legível
* Organizado
* Reutilizável
* Testável
* Com responsabilidades bem definidas

**Boa sorte! ⚽🔥**
