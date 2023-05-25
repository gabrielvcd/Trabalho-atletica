// Instância do Vue.js
var app = new Vue({
  el: '#cad-membro',
  data: {
    nome: '',
    data: '',
    cargo: '',
    imagem: '',
    membro: []
  },
  methods: {
    cadastrarEvento: function() {
      // Adiciona o evento à lista de eventos
      this.eventos.push({nome: this.nome, data: this.data, local: this.local, descricao: this.descricao, imagem: this.imagem});

      // Limpa os campos do formulário
      this.nome = '';
      this.data = '';
      this.cargo = '';
      this.imagem = '';
    },
    uploadImagem: function(event) {
      // Lê o arquivo de imagem selecionado pelo usuário
      var arquivo = event.target.files[0];

      // Cria um objeto URL para a imagem
      this.imagem = URL.createObjectURL(arquivo);
    }
  }
});