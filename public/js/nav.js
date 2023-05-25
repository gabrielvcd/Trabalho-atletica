new Vue({
  el: "#apps",
  data: {
    images: [
      "./img/basquete.jpg",
      "./img/futsal.jpg",
      "./img/volei.jpg",
    ],
  },
  methods: {
    redirecionar() {
      // Registra um evento no servidor antes de redirecionar
      // Exemplo: axios.post('/registrar_evento', {evento: 'botao_clicado'})

      // Redireciona para a página desejada
      window.location.link = './Eventos.html';
    }
  }
});

new Vue({
  el: "#baner",
  data: {
    images: ["./img/Imagem-Inicio.png"],
  },
});

new Vue({
  el: "#rodape",
  data: {
    images: [
      { text: "./img/images.png", link: "#" },
      { text: "./img/ista.png", link: "#" },
      { text: "./img/email.png", link: "#" },
    ],
  },
});
