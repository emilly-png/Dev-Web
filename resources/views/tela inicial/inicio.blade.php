<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <title>Início</title>
  
  <style>
    body {
      margin: 0;
      padding: 30px;
      background-color: rgb(71, 74, 132);
      font-family: 'Segoe UI', sans-serif;
      color: #333;
      position: relative;
      min-height: 100vh;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .menu-superior {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 15px;
      margin-bottom: 30px;
      width: 100%;
      max-width: 800px;
    }

    .menu-superior button {
      background-color: white;
      color: #333;
      border: none;
      padding: 10px 25px;
      border-radius: 25px;
      font-weight: 600;
      cursor: pointer;
      transition: 0.3s;
    }

    .menu-superior button:hover {
      background-color: #d1c4e9;
    }
   
    .perfil {
      position: fixed;
      top: 25px;
      right: 30px;
      background-size: cover;
      background-position: center;
      padding: 0;
      border-radius: 0;
      font-weight: 600;
      color: #4a148c;
      user-select: none;
      font-size: 1rem;
      z-index: 100;
      display: flex;
      align-items: center;
      gap: 12px;
      cursor: pointer;
      box-shadow: none;
    }

    .perfil .bolinha {
      width: 45px;
      height: 45px;
      border-radius: 50%;
      background-color: #a78bfa;
      border: 2px solid #fff;
      outline: none;
    }

    .perfil .info {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      text-shadow: 1px 1px 2px #000;
    }

    .perfil .jogando-como {
      font-size: 0.9em;
      color: #fff;
      font-weight: normal;
    }

    .perfil .nome-usuario {
      font-weight: bold;
      color: #fff;
      font-size: 1.1em;
    }

    .banner {
      max-width: 800px;
      margin: 0 auto 50px;
      position: relative;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
      width: 100%;
      cursor: pointer; 
    }

    .banner img {
      width: 100%;
      height: 450px;
      object-fit: cover;
      display: block;
    }

    .banner .texto {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      background-color: rgba(0, 0, 0, 0.45);
      padding: 20px 30px;
      border-radius: 15px;
      color: #ffffff;
      text-shadow: 1px 1px 4px #000000aa;
      pointer-events: none;
      width: 90%;
      max-width: 400px;
    }

    .banner .texto p.titulo-principal {
      margin-bottom: 5px;
      font-size: 2.5rem;
      font-weight: bold;
      letter-spacing: 2px;
      text-shadow: 2px 2px 6px #000000aa;
    }

    .banner .texto p {
      margin-bottom: 15px;
      font-size: 1.1rem;
      pointer-events: auto;
    }

    .banner .texto button {
      background-color: #ffffff;
      color: #4a148c;
      border: none;
      padding: 10px 20px;
      border-radius: 25px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      transition: background 0.3s;
      pointer-events: auto;
    }

    .banner .texto button:hover {
      background-color: #f3e5f5;
    }

    .arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      font-size: 2.5rem;
      color: white;
      background-color: rgba(0, 0, 0, 0.4);
      padding: 8px 14px;
      border-radius: 50%;
      cursor: pointer;
      user-select: none;
      transition: background-color 0.3s;
      z-index: 10;
    }

    .arrow:hover {
      background-color: rgba(0, 0, 0, 0.7);
    }

    .arrow-left {
      left: 15px;
    }

    .arrow-right {
      right: 15px;
    }

    .recomendados {
      text-align: center;
      font-size: 1.2em;
      font-weight: bold;
      margin-bottom: 20px;
      color: #ffffff;
      width: 100%;
      max-width: 800px;
    }

    .cards-container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
      width: 100%;
      max-width: 800px;
    }

    .card {
      width: 200px;
      background-color: #f5f5ff;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 3px 8px rgba(0, 0, 0, 0.25);
      transition: transform 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card img {
      width: 100%;
      height: 110px;
      object-fit: cover;
    }

    .card-content {
      padding: 10px;
      text-align: left;
    }

    .card-content h3 {
      margin: 5px 0;
      color: #4a148c;
    }

    .card-content small {
      font-size: 0.75em;
      color: #555;
    }

    .card.adicionar {
      background-color: #d1c4e9;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 2.5rem;
      font-weight: bold;
      color: #4a148c;
      cursor: pointer;
      transition: background 0.3s;
    }

    .card.adicionar:hover {
      background-color: #b39ddb;
    }
  </style>
</head>
<body>
  <div class="perfil">
    <div class="bolinha"></div>
    <div class="info">
      <span class="jogando-como">Jogando como</span>
      <span class="nome-usuario">Nome</span>
    </div>
  </div>

  <div class="menu-superior">
    <button>Página Inicial</button>
    <button>Games</button>
    <button>Quizzes</button>
  </div>

  <div class="banner" id="banner">
    <img id="banner-img" src="https://blog.ebaconline.com.br/blog/wp-content/uploads/2022/12/kcnb4lkkucfipej3ngqxm-scaled-e1674744655926.jpeg" alt="Banner" />
    <div class="texto" id="banner-texto">
      <p class="titulo-principal">GameMind</p>
      <button id="btn-comecar">Comece a jogar agora!</button>
    </div>
    <div class="arrow arrow-left" id="prev">&#10094;</div>
    <div class="arrow arrow-right" id="next">&#10095;</div>
  </div>

  <div class="recomendados">
    Recomendados para você:
  </div>

  <div class="cards-container">
    <div class="card">
      <img src="https://blog.ebaconline.com.br/blog/wp-content/uploads/2022/12/kcnb4lkkucfipej3ngqxm-scaled-e1674744655926.jpeg" alt="Jogo 1" />
      <div class="card-content">
        <h3>Jogo 1</h3>
        <p>Texto do jogo 1</p>
        <small>Disciplina do jogo 1</small>
      </div>
    </div>

    <div class="card">
      <img src="https://blog.ebaconline.com.br/blog/wp-content/uploads/2022/12/kcnb4lkkucfipej3ngqxm-scaled-e1674744655926.jpeg" alt="Jogo 2" />
      <div class="card-content">
        <h3>Quiz 1</h3>
        <p>Texto do quiz 1.</p>
        <small>Disciplina do quiz 1</small>
      </div>
    </div>

    <div class="card adicionar">+</div>
  </div>

  <script>
    
    const banners = [
      {
        img: "https://blog.ebaconline.com.br/blog/wp-content/uploads/2022/12/kcnb4lkkucfipej3ngqxm-scaled-e1674744655926.jpeg",
        titulo: "GameMind",
        textoBotao: "Comece a jogar agora!",
        link: "login.blade.php"
      },
      {
        img: "https://www.fiee.com.br/content/dam/sitebuilder/rxb/fiee/2024/blog/FIEE%20Games.jpg/_jcr_content/renditions/original.image_file.2400.1600.file/FIEE%20Games.jpg",
        titulo: "GameMind",
        textoBotao: "Comece a jogar agora!",
        link: "cadastro.blade.php"
      },
      {
        img: "https://assets.gamearena.gg/wp-content/uploads/2024/05/17143757/Materia-Pedro-1024x576.png",
        titulo: "GameMind",
        textoBotao: "Comece a jogar agora!",
        link: "login.blade.php"
      }
    ];

    let index = 0;

    const bannerImg = document.getElementById('banner-img');
    const tituloPrincipal = document.querySelector('.banner .texto .titulo-principal');
    const btnComecar = document.getElementById('btn-comecar');
    const bannerDiv = document.getElementById('banner');

    function atualizarBanner() {
      bannerImg.src = banners[index].img;
      tituloPrincipal.textContent = banners[index].titulo;
      btnComecar.textContent = banners[index].textoBotao;
    }

    document.getElementById('prev').addEventListener('click', e => {
      e.stopPropagation(); 
      index = (index - 1 + banners.length) % banners.length;
      atualizarBanner();
    });

    document.getElementById('next').addEventListener('click', e => {
      e.stopPropagation();
      index = (index + 1) % banners.length;
      atualizarBanner();
    });

    btnComecar.addEventListener('click', e => {
      e.stopPropagation();
      window.location.href = banners[index].link;
    });


    bannerDiv.addEventListener('click', () => {
      window.location.href = banners[index].link;
    });


    atualizarBanner();
  </script>
</body>
</html>
