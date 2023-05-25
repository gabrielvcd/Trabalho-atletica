const app = new Vue({
    el: '#app',
    data: {
      email: '',
      senha: ''
    },
    methods: {
      Logar() {

        console.log(`E-mail: ${this.email}, Senha: ${this.senha}`);
    
        this.email = '';
        this.senha = '';
      }
    }
  });
  