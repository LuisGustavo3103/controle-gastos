# Sistema de Controle de Gastos - Tasks para GitHub Projects

## **Sprint 1: Setup e Infraestrutura Base**

### **Setup do Projeto**
```
Título: Configurar ambiente Laravel básico
Descrição: 
- Criar novo projeto Laravel
- Configurar .env para MySQL
- Instalar e configurar Tailwind CSS
- Testar conexão com banco

Critérios de Aceite:
- [ ] Projeto Laravel rodando em localhost
- [ ] Tailwind CSS funcional
- [ ] Conexão com banco MySQL estabelecida
- [ ] Página inicial carregando com layout básico

Estimativa: 2 pontos
Labels: setup, infrastructure
```

### **Criar Layout Base**
```
Título: Implementar layout base da aplicação
Descrição:
- Criar layout principal com header e navigation
- Implementar design responsivo com Tailwind
- Adicionar menu de navegação (Dashboard, Transações, Categorias)
- Configurar flash messages

Critérios de Aceite:
- [ ] Layout responsivo funcionando
- [ ] Menu de navegação ativo
- [ ] Sistema de flash messages implementado
- [ ] Design consistente com Tailwind

Estimativa: 3 pontos
Labels: frontend, layout
```

### **Criar Migration de Transações**
```
Título: Implementar migration e model Transaction
Descrição:
- Criar migration para tabela transactions
- Campos: id, description, amount, type, date, timestamps
- Criar model Transaction com fillable
- Configurar casts apropriados

Critérios de Aceite:
- [ ] Migration criada e executada
- [ ] Model Transaction configurado
- [ ] Relação entre campos funcionando
- [ ] Validação de tipos (income/expense)

Estimativa: 2 pontos
Labels: backend, database
```

---

## **Sprint 2: CRUD Básico de Transações**

### **Criar Controller e Rotas**
```
Título: Implementar TransactionController resource
Descrição:
- Criar TransactionController com métodos resource
- Configurar rotas resource para transactions
- Implementar index, create, store, show, edit, update, destroy
- Adicionar validação básica

Critérios de Aceite:
- [ ] Controller criado com todos os métodos
- [ ] Rotas configuradas corretamente
- [ ] Validação implementada
- [ ] Redirects funcionando

Estimativa: 5 pontos
Labels: backend, crud
```

### **Criar Views de Listagem**
```
Título: Desenvolver página de listagem de transações
Descrição:
- Criar view transactions/index.blade.php
- Implementar tabela responsiva com Tailwind
- Mostrar descrição, valor, tipo, data
- Adicionar botões de ação (ver, editar, excluir)

Critérios de Aceite:
- [ ] Tabela responsiva funcionando
- [ ] Dados sendo exibidos corretamente
- [ ] Botões de ação funcionais
- [ ] Design consistente

Estimativa: 3 pontos
Labels: frontend, views
```

### **Criar Formulário de Transação**
```
Título: Implementar formulários de criação e edição
Descrição:
- Criar views create.blade.php e edit.blade.php
- Implementar formulários com validação
- Campos: descrição, valor, tipo (receita/despesa), data
- Adicionar formatação de valores

Critérios de Aceite:
- [ ] Formulários funcionando
- [ ] Validação client-side e server-side
- [ ] Máscaras nos campos apropriados
- [ ] Mensagens de erro exibidas

Estimativa: 4 pontos
Labels: frontend, forms
```

### **Implementar Exclusão de Transações**
```
Título: Adicionar funcionalidade de exclusão
Descrição:
- Implementar método destroy no controller
- Adicionar confirmação antes de excluir
- Implementar soft delete (opcional)
- Adicionar feedback visual

Critérios de Aceite:
- [ ] Exclusão funcionando corretamente
- [ ] Confirmação implementada
- [ ] Mensagem de sucesso/erro
- [ ] Redirecionamento correto

Estimativa: 2 pontos
Labels: backend, crud
```

---

## **Sprint 3: Sistema de Categorias**

### **Criar Sistema de Categorias**
```
Título: Implementar migration e model Category
Descrição:
- Criar migration categories (id, name, type, color)
- Criar model Category
- Estabelecer relacionamento Transaction belongsTo Category
- Criar seeder com categorias padrão

Critérios de Aceite:
- [ ] Migration executada com sucesso
- [ ] Model Category configurado
- [ ] Relacionamento funcionando
- [ ] Seeds populando categorias padrão

Estimativa: 3 pontos
Labels: backend, database
```

### **CRUD de Categorias**
```
Título: Implementar gerenciamento de categorias
Descrição:
- Criar CategoryController resource
- Implementar views para categorias
- Adicionar formulários de criação/edição
- Implementar validação

Critérios de Aceite:
- [ ] CRUD completo de categorias
- [ ] Interface amigável
- [ ] Validação funcionando
- [ ] Diferentes cores para categorias

Estimativa: 4 pontos
Labels: backend, frontend, crud
```

### **Integrar Categorias nas Transações**
```
Título: Adicionar seleção de categoria nas transações
Descrição:
- Atualizar migration transactions (adicionar category_id)
- Modificar formulários para incluir select de categorias
- Atualizar listagem para mostrar categoria
- Filtrar categorias por tipo (receita/despesa)

Critérios de Aceite:
- [ ] Campo categoria nos formulários
- [ ] Categorias filtradas por tipo
- [ ] Listagem mostrando categoria
- [ ] Relacionamento funcionando

Estimativa: 3 pontos
Labels: backend, frontend
```

---

## **Sprint 4: Filtros e Busca**

### **Implementar Filtros Básicos**
```
Título: Adicionar filtros na listagem de transações
Descrição:
- Criar formulário de filtros (GET)
- Filtro por tipo (receita/despesa)
- Filtro por período (data início/fim)
- Filtro por categoria

Critérios de Aceite:
- [ ] Formulário de filtros funcionando
- [ ] Filtros aplicados corretamente
- [ ] URLs amigáveis
- [ ] Filtros persistem na paginação

Estimativa: 4 pontos
Labels: backend, frontend, filters
```

### **Implementar Busca por Texto**
```
Título: Adicionar busca por descrição
Descrição:
- Adicionar campo de busca no formulário de filtros
- Implementar busca por descrição (LIKE)
- Destacar termo pesquisado nos resultados
- Otimizar consultas

Critérios de Aceite:
- [ ] Campo de busca funcionando
- [ ] Resultados filtrados corretamente
- [ ] Performance adequada
- [ ] Interface intuitiva

Estimativa: 2 pontos
Labels: backend, search
```

### **Adicionar Ordenação**
```
Título: Implementar ordenação de resultados
Descrição:
- Adicionar ordenação por data, valor, descrição
- Implementar direção ascendente/descendente
- Manter ordenação na paginação
- Indicadores visuais da ordenação ativa

Critérios de Aceite:
- [ ] Ordenação funcionando corretamente
- [ ] Indicadores visuais presentes
- [ ] Paginação mantém ordenação
- [ ] Performance otimizada

Estimativa: 3 pontos
Labels: backend, frontend, sorting
```

---

## **Sprint 5: Dashboard e Relatórios**

### **Criar Dashboard Principal**
```
Título: Implementar página de dashboard
Descrição:
- Criar DashboardController
- Implementar cards com resumo (total receitas, despesas, saldo)
- Mostrar estatísticas do mês atual
- Design responsivo

Critérios de Aceite:
- [ ] Cards de resumo funcionando
- [ ] Cálculos corretos
- [ ] Design responsivo
- [ ] Performance otimizada

Estimativa: 4 pontos
Labels: frontend, dashboard, analytics
```

### **Resumo por Categorias**
```
Título: Implementar relatório por categorias
Descrição:
- Agrupar gastos por categoria
- Calcular percentuais
- Exibir em formato de lista/tabela
- Filtro por período

Critérios de Aceite:
- [ ] Agrupamento por categoria funcionando
- [ ] Cálculos de percentual corretos
- [ ] Interface clara e informativa
- [ ] Filtros aplicáveis

Estimativa: 3 pontos
Labels: backend, reports, analytics
```

### **Últimas Transações**
```
Título: Mostrar últimas transações no dashboard
Descrição:
- Listar últimas 10 transações
- Design compacto para o dashboard
- Links para visualizar/editar
- Indicadores visuais por tipo

Critérios de Aceite:
- [ ] Lista das últimas transações
- [ ] Design compacto
- [ ] Links funcionais
- [ ] Indicadores visuais claros

Estimativa: 2 pontos
Labels: frontend, dashboard
```

---

## **Sprint 6: Melhorias de UX**

### **Implementar Paginação**
```
Título: Adicionar paginação na listagem
Descrição:
- Implementar paginação Laravel
- Customizar links de paginação
- Manter filtros na paginação
- Otimizar performance

Critérios de Aceite:
- [ ] Paginação funcionando
- [ ] Filtros mantidos
- [ ] Design consistente
- [ ] Performance adequada

Estimativa: 2 pontos
Labels: backend, pagination
```

### **Melhorar Validação e Feedback**
```
Título: Aprimorar validação e mensagens de feedback
Descrição:
- Criar Form Requests customizados
- Melhorar mensagens de erro
- Implementar confirmações
- Adicionar loading states

Critérios de Aceite:
- [ ] Form Requests implementados
- [ ] Mensagens de erro claras
- [ ] Confirmações funcionando
- [ ] Feedback visual adequado

Estimativa: 3 pontos
Labels: backend, frontend, ux
```

### **Responsividade Mobile**
```
Título: Otimizar interface para mobile
Descrição:
- Testar e ajustar layout mobile
- Otimizar tabelas para telas pequenas
- Ajustar formulários
- Menu mobile

Critérios de Aceite:
- [ ] Layout mobile funcionando
- [ ] Tabelas responsivas
- [ ] Formulários otimizados
- [ ] Navegação mobile intuitiva

Estimativa: 3 pontos
Labels: frontend, mobile, responsive
```

---

## **Sprint 7: Funcionalidades Extras (Opcional)**

### **Export para CSV**
```
Título: Implementar exportação de dados
Descrição:
- Criar funcionalidade de export CSV
- Aplicar filtros na exportação
- Adicionar botão de download
- Validar formato do arquivo

Critérios de Aceite:
- [ ] Export funcionando
- [ ] Filtros aplicados
- [ ] Arquivo bem formatado
- [ ] Interface intuitiva

Estimativa: 3 pontos
Labels: backend, export
```

### **Backup de Dados**
```
Título: Implementar sistema de backup
Descrição:
- Criar comando Artisan para backup
- Backup automático de transações
- Interface para download de backup
- Documentação de uso

Critérios de Aceite:
- [ ] Comando funcionando
- [ ] Backup sendo gerado
- [ ] Interface de download
- [ ] Documentação clara

Estimativa: 4 pontos
Labels: backend, backup, maintenance
```

## **Configuração no GitHub Projects:**

**Colunas do Kanban:**
- Backlog
- Em Desenvolvimento
- Em Review
- Concluído

**Labels sugeridas:**
- `setup` - Configuração inicial
- `backend` - Funcionalidades do servidor
- `frontend` - Interface do usuário
- `database` - Banco de dados
- `crud` - Operações básicas
- `ux` - Experiência do usuário
- `mobile` - Responsividade
- `analytics` - Relatórios e dashboards

Quer que eu ajuste alguma task ou adicione mais detalhes em alguma específica?# controle-gastos
