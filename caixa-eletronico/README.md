# 🏧 Desafio 02 — Caixa Eletrônico

## 📌 Sobre o desafio

Neste desafio, o objetivo é criar um programa que simule o funcionamento básico de um **caixa eletrônico**.

O programa deve receber um valor inteiro correspondente ao valor que o usuário deseja sacar e calcular quais notas serão utilizadas para formar esse valor.

O caixa possui as seguintes notas:

- R$ 100
- R$ 50
- R$ 20
- R$ 10
- R$ 5
- R$ 2
- R$ 1

O programa deve utilizar a **menor quantidade possível de notas**.

## 🎯 Objetivos

- Trabalhar com entrada de dados.
- Utilizar estruturas de repetição e condicionais.
- Trabalhar com operações matemáticas.
- Desenvolver lógica para decomposição de valores.
- Resolver o problema sem utilizar algoritmos ou bibliotecas prontas para divisão das notas.

## 📋 Regras

1. O valor do saque deve ser **maior que 0**.
2. O valor informado deve ser um **número inteiro**.
3. O programa deve informar a quantidade de notas utilizadas de cada valor.
4. Deve ser utilizada a **menor quantidade possível de notas**.
5. Não é permitido utilizar algoritmos ou bibliotecas prontas para realizar a divisão das notas.
6. Caso o valor seja inválido, o programa deve informar uma mensagem de erro.

## 💻 Exemplos

### Entrada

```text
187
```

### Saída

```text
1 nota de R$ 100
1 nota de R$ 50
1 nota de R$ 20
1 nota de R$ 10
1 nota de R$ 5
1 nota de R$ 2
```

### Entrada

```text
286
```

### Saída

```text
2 notas de R$ 100
1 nota de R$ 50
1 nota de R$ 20
1 nota de R$ 10
1 nota de R$ 5
1 nota de R$ 1
```

## ❌ Valores inválidos

O programa deve tratar valores menores ou iguais a zero.

### Entrada

```text
0
```

### Saída

```text
Valor inválido. O valor deve ser maior que 0.
```

Outro exemplo:

### Entrada

```text
-100
```

### Saída

```text
Valor inválido. O valor deve ser maior que 0.
```

## ⭐ Desafio Extra

Como desafio adicional, o programa deve permitir que o usuário informe quais notas estarão disponíveis no caixa.

Por exemplo:

```text
Notas disponíveis:
100, 50, 20, 10, 5, 2, 1
```

A partir dessas notas, o programa deverá calcular a combinação utilizando a **menor quantidade possível de notas**.

## 🧠 Conceitos praticados

- Entrada e saída de dados
- Variáveis
- Condicionais
- Laços de repetição
- Operações matemáticas
- Divisão inteira
- Resto da divisão
- Arrays/Listas
- Algoritmos
- Validação de dados
- Lógica de programação

## 🚀 Execução

Clone o repositório:

```bash
git clone <URL_DO_REPOSITORIO>
```

Entre na pasta do projeto:

```bash
cd desafio-02-caixa-eletronico
```

Execute o programa conforme a linguagem utilizada no projeto.

## 📁 Estrutura do projeto

```text
desafio-02-caixa-eletronico/
├── README.md
└── src/
    └── ...
```

## 📚 Informações

**Nível:** Médio  
**Categoria:** Lógica de Programação  
**Tema:** Caixa Eletrônico

## 👨‍💻 Autor

**Kervin Espírito Santo**
