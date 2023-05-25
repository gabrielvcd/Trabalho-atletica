const app = new Vue({
    el: '#cad',
    data: {
      nome: '',
      email: '',
      RA: '',
      turno: '',
      curso: '',
      jogo: '',
      equipe: '',
    
    },
    methods: {
      cadastrar() {
        // Aqui você pode enviar os dados do formulário para o servidor
        console.log(`Nome: ${this.nome}, E-mail: ${this.email}, Senha: ${this.senha} , RA: ${this.RA}, 
        Turno: ${this.turno},
         Curso: ${this.curso}, Jogo: ${this.jogo},Equipe: ${this.equipe},`) ;
        alert('Cadastro realizado com sucesso!');
        this.nome = '';
        this.email = '';
        this.RA = '';
        this.turno = '';
        this.curso = '';
        this.jogo = '';
        this.equipe = '';
        
      }
    }
  });
  