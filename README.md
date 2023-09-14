# API DE CADASTRO DE PACIENTE SIMPLES

### Criada com Laravel(Sail), MySQL, Docker e Docker Compose

### Nesta situação, o paciente possui apenas dois campos de dados, são eles: 

- Nome;
- Especialidade.(Aquela a qual ele deseja ser atendido).


#### Endpoints:
- Cadastro de paciente (POST):  
    - /api/pacientes?nome=NOME-PACIENTE&especialidade=ESPECIALIDADE-DESEJADA

- Ver todos os pacientes cadastrados (GET):
    - /api/pacientes

- Ver um paciente específico (GET):
    - /api/pacientes/{id}

- Editar cadastro de paciente (PUT):
    - /api/pacientes/{id}

- Exclusão de cadastro de cliente (DELETE):
    - /api/pacientes/{id}
